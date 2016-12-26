<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Helpers\oAuthService;
use App\Helpers\OutlookService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Helpers\utils_helper;

class BasicController extends Controller
{
	public function inbox($mailbox, $msg='') {
		$data['user'] = $user = Session::get('user');
		$data['mailbox'] = $mailbox;
		$data['msg'] = $msg;
		if($user) {			
			$data['messages'] = OutlookService::getMessages($user['access_token'], $user['user_email'], $mailbox);
			return view('outlook.inbox',$data);
		}
		return \Redirect::to('/login');
	}

	public function contacts() {
		$data['user'] = $user = Session::get('user');
		if($user) {			
			$data['contacts'] = OutlookService::getContacts($user['access_token'], $user['user_email']);
			return view('outlook.contact',$data);
		}
		return \Redirect::to('/login');
	}

	public function calendar() {
		$data['user'] = $user = Session::get('user');
		if($user) {
			$data['events'] = OutlookService::getEvents($user['access_token'], $user['user_email']);
			return view('outlook.calendar',$data);
		}
		return \Redirect::to('/login');
	}

	public function compose() {
		$data['user'] = $user = Session::get('user');
		if($user) {
			return view('outlook.compose',$data);
		}
		return \Redirect::to('/login');
	}

	public function composer()
	{
		$data['user'] = $user = Session::get('user');
		if($user) {
			return view('outlook.composer',$data);
		}
		return \Redirect::to('/login');
	}

	public function send(Request $request) {
		$data['user'] = $user = Session::get('user');
		$smartNames = array(
			'file' => 'File'
			);
		$input = $request->all();
		$name = date('YmdHis');
		$fileName = $name.'.'.$request->file('file')->getClientOriginalExtension();

		$request->file('file')->move(base_path().'/public/temp/',$fileName);
		$file = public_path('temp/'.$fileName);
		$emails = utils_helper::csvToArray($file);
		foreach($emails as $key => $email) {
			$arr = array(
				"Message" => array(
					'Subject' => $email['subject'],
					"Body" => array(
						"ContentType"=>"HTML",
						"Content" => $email['message'],
					),
					"ToRecipients"=>array(
						array(
							"EmailAddress" => array(
								"Address" => $email['receiver'],
							)
						),
					),
				)
			);
			$send = OutlookService::postMessage($user['access_token'], $user['user_email'], $arr);
			}
			return \Redirect::to('/inbox/sentitems');
		}

	public function sender(Request $request) {
		$data['user'] = $user = Session::get('user');
		$smartNames = array(
			'to' => 'To',
			'subject' => 'Subject',
			'message' => 'Message'
		);
		$arr = array(
				"Message" => array(
					'Subject' => $request->input('subject'),
					"Body" => array(
						"ContentType"=>"HTML",
						"Content" => $request->input('message'),
					),
					"ToRecipients"=>array(
						array(
							"EmailAddress" => array(
								"Address" => $request->input('to'),
							)
						),
					),
				)
			);
			$send = OutlookService::postMessage($user['access_token'], $user['user_email'], $arr);
			$msg = 'Email Sent Successfully';
			return \Redirect::to('/inbox/sentitems');
	}
	}