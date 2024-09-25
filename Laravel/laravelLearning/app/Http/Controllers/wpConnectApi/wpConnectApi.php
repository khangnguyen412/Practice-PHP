<?php

namespace App\Http\Controllers\wpConnectApi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class wpConnectApi extends Controller
{
    public function getWpApi(){
        $data = Http::get('http://codetheme.top/ukonline/wp-json/wp/v2/pages');
        return view('lecture13.viewLecture13', ['data' => $data]);
    }
}
