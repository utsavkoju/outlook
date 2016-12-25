<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Helpers\oAuthService;

class LoginController extends Controller
{
    public function form() {
        $oAuth = new oAuthService;
        return view('auth.login', ['controller' => $oAuth]);
    }
}
