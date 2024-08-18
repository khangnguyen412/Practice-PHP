<?php

namespace App\Http\Controllers\lecture13;

use App\Http\Controllers\Controller;
use App\Models\lecture13\modelLecture13;
use Illuminate\Http\Request;

class controllerLecture13 extends Controller
{
    public function show_eloquent_relationship_13(){
        $data_user = modelLecture13::find(1)->Passport;
        return view('lecture13.viewLecture13', ['data' => $data_user]);
    }
}
