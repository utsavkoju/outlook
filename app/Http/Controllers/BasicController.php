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
	public function inbox() {
		$data['user'] = $user = Session::get('user');
		if($user) {
			$redirectUri = "http://localhost/outlook/public/authorize";
			
			$data['messages'] = OutlookService::getMessages(oAuthService::getAccessToken($redirectUri), $user['user_email']);
			return view('outlook.inbox',$data);
		}
		return Redirect::to('/login');
	}

	public function contacts() {
		$data['user'] = $user = Session::get('user');
		if($user) {			
			$data['contacts'] = OutlookService::getContacts($user['access_token'], $user['user_email']);
			return view('outlook.contact',$data);
		}
		return Redirect::to('/login');
	}

	public function calendar() {
		$data['user'] = $user = Session::get('user');
		if($user) {
			$data['events'] = OutlookService::getEvents($user['access_token'], $user['user_email']);
			return view('outlook.calendar',$data);
		}
		return Redirect::to('/login');
	}

	public function compose(Request $request) {
		$data['user'] = $user = Session::get('user');
		if($user) {
			return view('outlook.compose',$data);
		}
		return Redirect::to('/login');
	}

	public function send(Request $request) {
		$smartNames = array(
			'file' => 'File'
			);
		$input = $request->all();
		$name = date('YmdHis');
		$fileName = $name.'.'.$request->file('file')->getClientOriginalExtension();

		$request->file('file')->move(base_path().'/public/temp/'.$fileName);
		$file = public_path('temp/'.$fileName);
		$emails = utils_helper::csvToArray($file);
		foreach($emails as $key => $email) {
			$jsonEmail = '{
				"Message": {
					"Subject": "'.$email['subject'].'",
					"Body": {
						"ContentType": "HTML",
						"Content": "'.$email['message'].'"
					},
					"ToRecipients": [
					{
						"EmailAddress": {
							"Address": "'.$email['receiver'].'"
						}
					}
					]
					"SaveToSentItems": "true"
				}';
				print_r($jsonEmail);
			}
			die();
		}
	}