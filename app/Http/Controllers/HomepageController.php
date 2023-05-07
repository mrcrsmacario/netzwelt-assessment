<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomepageController extends Controller
{
    public function getTerritories() {
        return view('homepage');
    }

    public function requestTerritories() {
        $request_url = 'https://netzwelt-devtest.azurewebsites.net/Territories/All';
        $get_territories = Http::get($request_url);
        $territories = json_decode($get_territories->body());
        $territories_sorted = [];
        if($get_territories->getStatusCode() === 200) {
            return $territories;
        } else {
            return reponse('Request failed', 500);
        }
    }
}
