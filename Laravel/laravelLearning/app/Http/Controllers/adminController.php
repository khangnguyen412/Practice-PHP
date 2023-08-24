<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index($name, $age){
        echo "Đây là index trong admincontroller". "<br>";
        echo "$name tuổi $age";
    }
}
