<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

use Illuminate\Http\Request;
use user;

class adminController extends Controller
{
    // public function index($name, $age){
    //     echo "Đây là index trong admincontroller". "<br>";
    //     echo "$name tuổi $age";
    // }
    public function index(): View
    {
        $users = DB::table('users')->where('id', 2)->get();
        return view('test2', ['users' => $users]);
    }
    public function addDB(): View
    {
        DB::table('users')->insert([
            ['username' => 'khangnguyen2', 'passwords' => 'khangnguyen2'],
        ]);
        $users = DB::table('users')->get();
        return view('test2', ['users' => $users]);
    }
}
