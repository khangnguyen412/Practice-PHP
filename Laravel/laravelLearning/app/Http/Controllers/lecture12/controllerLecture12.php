<?php

namespace App\Http\Controllers\lecture12;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Gọi namespace của model
use App\Models\lecture12\modelLecture12;

class controllerLecture12 extends Controller
{
    public function getFunction(){
        $getFunction = new modelLecture12; // Khai báo model trong controller 
        $getFirstModels = $getFunction->getInfo(); // Gọi getInfo() từ models
        return $getFirstModels;
    }

    public function outputDB(){
        $data = modelLecture12::all();
        return $data;
    }
}
