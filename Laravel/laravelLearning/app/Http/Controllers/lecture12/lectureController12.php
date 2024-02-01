<?php

namespace App\Http\Controllers\lecture12;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Gọi namespace của model
use App\Models\lecture11;

class lectureController12 extends Controller
{
    public function callModel(){
        $lecture11 = new lecture11; // Khai báo model trong controller 
        $getFirstModels = $lecture11->test(); // Gọi test() từ models

        return $getFirstModels;
    }
}
