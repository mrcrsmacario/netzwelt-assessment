<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    public function loginPage() {
        return view('login');
    }

    public function handleLogin(Request $request) {
        // $request_data = [
        //         'SignInRequest' =>  (object) [
        //             'username' => $request->username,
        //             'password' => $request->password
        //         ]
        //     ];
        $request_data = [
            'username' => $request->username,
            'password' => $request->password
        ];
        $request_url = 'https://netzwelt-devtest.azurewebsites.net/Account/SignIn';
        $client = new Client();
        // $send_request = $client->request('POST', $request_url, [
        //     'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
        //     'form_params' => [
        //         'SignInRequest' => [
        //             'username' => $request->username,
        //             'password' => 'bar'
        //         ]
        //     ]
        // ]);
        $send_request = Http::post($request_url, $request_data);
        if($send_request->getStatusCode() === 200) {
            return redirect('/home/index');
        } else {
            return response('500', 'Invalid credentials');
        }
    }
}
