<?php
include_once './lib/notification.php';

class AdminController
{
    public function __construct()
    {
    }

    public function adminCreate($param1, $param2)
    {
        $table = 'admins';
        $arr = array('username' => $param1, 'password' => $param2);
        $adduser = new usercontrol("", "", "");
        if ($adduser->insertuser($table, $arr) == 'error') {
            header("Location: ../controller/controller.php?action=shownotification&notificationid=errorUniqueAdmin");
        } else {
            header("Location: ../controller/controller.php?action=showadmin&notificationid=1");
        }
    }

    public function userCreate($param1, $param2)
    {
        // $table = 'users';
        // $arr = array('username' => $param1, 'password' => $param2);
        // $adduser = new usercontrol("", "", "");
        // if ($adduser->insertuser($table, $arr) == 'error') {
        //     $this->shownotification(4, 'Tên Tài Khoản Đã Được Đăng Ký Xin Vui Lòng Thử Lại');;
        // } else {
        //     header("Location: ../controller/controller.php?action=showuser&notificationid=1");
        // }
    }
};
