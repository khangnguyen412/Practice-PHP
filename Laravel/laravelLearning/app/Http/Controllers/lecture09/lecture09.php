<?php

namespace App\Http\Controllers\lecture09;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

use Illuminate\Http\Request;
use user;

class lecture09 extends Controller
{
    public function index(){
        echo "hi";
    }
    // public function index($name, $age){
    //     echo "Đây là index trong admincontroller". "<br>";
    //     echo "$name tuổi $age";
    // }
    // public function index(): View
    // {
    //     $users = DB::table('users')->where('id', 2)->get();
    //     return view('test2', ['users' => $users]);
    // }
    public function addDB($name, $age): View
    {
        DB::table('test')->insert([
            ['fullName' => $name, 'age' => $age],
        ]);
        $users = DB::table('test')->get(); // lấy tất cả dữ liệu từ database gán cho users 
        // return view('test2', ['test' => $users]);
        return view('test', ['users' => $users]); 
    }
    public function showDB(){

    }
}
