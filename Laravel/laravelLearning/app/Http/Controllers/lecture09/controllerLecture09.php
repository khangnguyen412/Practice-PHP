<?php

namespace App\Http\Controllers\lecture09;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

use Illuminate\Http\Request;
use user;

class controllerLecture09 extends Controller
{
    public function testController()
    {
        echo "test success";
    }

    public function getName($name = NULL, $age = NULL)
    {
        ?>
            <p>đầy là hàm getName() trong controllerLecture09</p>
        <?php
        if ($name != Null && $age != NULL) {
            ?>
                <p> có tham số Name là <?php echo $name ?> và Age là <?php echo $age ?></p>
            <?php
        } elseif ($age == NULL) {
            ?>
                <p> có tham số Name là <?php echo $name ?> </p>
            <?php
        }
    }

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
        
        return view('test', ['users' => $users]);
    }
}
