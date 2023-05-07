<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    public function loginPage() {
        return view('login');
    }

    public function handleLogin(Request $request) {
        $request_data = [
            'username' => $request->username,
            'password' => $request->password
        ];
        $request_url = 'https://netzwelt-devtest.azurewebsites.net/Account/SignIn';
        $send_request = Http::post($request_url, $request_data);
        if($send_request->getStatusCode() === 200) {
            return redirect('/home/index');
        } else {
            return redirect('/account/login');
        }
    }
}
