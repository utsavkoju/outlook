<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\oAuthService;
use App\Helpers\OutlookService;
use Illuminate\Support\Facades\Session;

class AuthorizeController extends Controller
{
	public function getLogin(Request $request) {

		Session::forget('user');
		$auth_code = $request->code;
		$redirectUri = "http://localhost/outlook/public/authorize";

		$tokens = oAuthService::getTokenFromAuthCode($auth_code, $redirectUri);

		if ($tokens['access_token']) {
			$expiration = time() + $tokens['expires_in'] - 300;
			$user = OutlookService::getUser($tokens['access_token']);
			$sessionUser = array('access_token'=>$tokens['access_token'], 'refresh_token'=>$tokens['refresh_token'], 'token_expires'=> $expiration, 'user_email' => $user['EmailAddress'], 'user_name'=>$user['DisplayName']);
			Session::put('user',$sessionUser);
			Session::save();

	    // Redirect back to home page
			$url='http://localhost/outlook/public/inbox';
			echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
	    //echo "<script type='text/javascript'>  window.location='home.php'; </script>";
	    //header("Location: http://localhost/outlook/public/inbox");
			exit;
		}
		else
		{
			echo "<p>ERROR: ".$tokens['error']."</p>";
		}
	}

}