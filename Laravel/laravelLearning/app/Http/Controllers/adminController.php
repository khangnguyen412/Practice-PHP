<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

use Illuminate\Http\Request;
use user;

class adminController extends Controller
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
    public function addDB(): View
    {
        DB::table('test')->insert([
            ['fullName' => 'khangnguyen2', 'age' => '123'],
        ]);
        $users = DB::table('test')->get();
        return view('test2', ['test' => $users]);
    }
}
