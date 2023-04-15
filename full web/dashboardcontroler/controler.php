<?php
    include_once '../dashboardmodel/model.php';
    include_once './lib/uploadfile.php';
    include_once './lib/databaseprocess.php';
    include_once './lib/checkinfor.php';

    class admincontroler{
        public function __construct($action){
            switch ($action){
                // -----------------thêm admin------------------------------
                case 'admincreate':
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $passwordconfirm = $_POST['passwordconfirm'];
                    $error = [];
                    if (empty(trim($_POST['username']))) {
                        $error['username']['required'] = true;
                    }elseif(strlen(trim($_POST['username'])) < 5) {
                        $error['username']['min'] = true;
                    }elseif(strlen(trim($_POST['username'])) > 15) {
                        $error['username']['max'] = true;
                    }elseif(strpos($_POST['username'], ' ') == true){
                        $error['username']['space'] = true;
                    }elseif(empty(trim($_POST['password']))) {
                        $error['password']['required'] = true;
                    }elseif(strlen(trim($_POST['password'])) < 5) {
                        $error['password']['min'] = true;
                    }elseif(strlen(trim($_POST['password'])) > 15) {
                        $error['password']['max'] = true;
                    }elseif(strpos($_POST['password'], ' ') == true){
                        $error['password']['space'] = true;
                    }else{
                        $error = [];
                    }
                    if (!empty($error["username"]["required"])) {
                        header("Location: ../dashboardcontroler/controler.php?action=shownotification&notificationid=usernameRequire");
                    } else if (!empty($error["username"]["min"])) {
                        header("Location: ../dashboardcontroler/controler.php?action=shownotification&notificationid=usernameMin");
                    } else if (!empty($error["username"]["max"])) {
                        header("Location: ../dashboardcontroler/controler.php?action=shownotification&notificationid=usernameMax");
                    } else if (!empty($error["username"]["space"])) {
                        header("Location: ../dashboardcontroler/controler.php?action=shownotification&notificationid=usernameSpace");
                    } else if (!empty($error["password"]["required"])) {
                        header("Location: ../dashboardcontroler/controler.php?action=shownotification&notificationid=passwordRequire");
                    } else if (!empty($error["password"]["min"])) {
                        header("Location: ../dashboardcontroler/controler.php?action=shownotification&notificationid=passwordMin");
                    } else if (!empty($error["password"]["max"])) {
                        header("Location: ../dashboardcontroler/controler.php?action=shownotification&notificationid=passwordMax");
                    } else if (!empty($error["password"]["space"])) {
                        header("Location: ../dashboardcontroler/controler.php?action=shownotification&notificationid=passwordSpace");
                    } else {
                        if($password == $passwordconfirm && $this->isLogin()){
                            $table = 'admins';
                            $password = md5($password);
                            $arr = array('username' => $username, 'password' => $password);
                            $adduser = new usercontrol("", "", "");
                            if($adduser->insertuser($table, $arr) == 'error'){
                                header("Location: ../dashboardcontroler/controler.php?action=shownotification&notificationid=errorUniqueAdmin");
                            }else{
                                header("Location: ../dashboardcontroler/controler.php?action=showadmin&notificationid=1");
                            }           
                        }else{
                            header("Location: ../dashboardcontroler/controler.php?action=shownotification&notificationid=wrongPassConfirm");
                        }
                    }
                    break;
                // -----------------xóa admin------------------------------
                case 'deleteadmin':
                    $notification = (isset($_GET['notificationid']))? $this->notification($_GET['notificationid']): '';
                    $table = 'admins';
                    $id = $_GET['id'];
                    $arr = array('id'=>$id);
                    $deleteadmin = new usercontrol("", "", "");
                    $deleteadmin->deleteuser($table, $arr);
                    header("Location: ../dashboardcontroler/controler.php?action=logout");
                    break;
                // -----------------lấy thông tin admin------------------------------
                case 'getadminid':
                    $id = $_GET['id'];
                    $table = 'admins';
                    $arr = array('id'=>$id);
                    $adminInfor = new usercontrol("", "", "");
                    $infor = $adminInfor->getuser($table, $arr);
                    include '../dashboardview/updateadmin.php';
                    break;
                // -----------------cập nhật tin admin------------------------------
                case 'updateadmin':
                    $id = $_POST['id'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $passwordconfirm = $_POST['passwordconfirm'];
                    $error = [];
                    if (empty(trim($_POST['username']))) {
                        $error['username']['required'] = true;
                    }elseif(strlen(trim($_POST['username'])) < 5) {
                        $error['username']['min'] = true;
                    }elseif(strlen(trim($_POST['username'])) > 15) {
                        $error['username']['max'] = true;
                    }elseif(strpos($_POST['username'], ' ') == true){
                        $error['username']['space'] = true;
                    }elseif(empty(trim($_POST['password']))) {
                        $error['password']['required'] = true;
                    }elseif(strlen(trim($_POST['password'])) < 5) {
                        $error['password']['min'] = true;
                    }elseif(strlen(trim($_POST['password'])) > 15) {
                        $error['password']['max'] = true;
                    }elseif(strpos($_POST['password'], ' ') == true){
                        $error['password']['space'] = true;
                    }else{
                        $error = [];
                    }
                    if (!empty($error["username"]["required"])) {
                        header("Location: ../dashboardcontroler/controler.php?action=shownotification&notificationid=usernameRequire");
                    } else if (!empty($error["username"]["min"])) {
                        header("Location: ../dashboardcontroler/controler.php?action=shownotification&notificationid=usernameMin");
                    } else if (!empty($error["username"]["max"])) {
                        header("Location: ../dashboardcontroler/controler.php?action=shownotification&notificationid=usernameMax");
                    } else if (!empty($error["username"]["space"])) {
                        header("Location: ../dashboardcontroler/controler.php?action=shownotification&notificationid=usernameSpace");
                    } else if (!empty($error["password"]["required"])) {
                        header("Location: ../dashboardcontroler/controler.php?action=shownotification&notificationid=passwordRequire");
                    } else if (!empty($error["password"]["min"])) {
                        header("Location: ../dashboardcontroler/controler.php?action=shownotification&notificationid=passwordMin");
                    } else if (!empty($error["password"]["max"])) {
                        header("Location: ../dashboardcontroler/controler.php?action=shownotification&notificationid=passwordMax");
                    } else if (!empty($error["password"]["space"])) {
                        header("Location: ../dashboardcontroler/controler.php?action=shownotification&notificationid=passwordSpace");
                    } else {
                        if($password == $passwordconfirm && $this->isLogin()){
                            $table = 'admins';
                            $password = md5($password);
                            $arr = array('id'=> $id, 'username' => $username, 'password' => $password);
                            $updateuser = new usercontrol("", "", "");
                            if($updateuser->updateuser($table, $arr) == 'error'){
                                header("Location: ../dashboardcontroler/controler.php?action=shownotification&notificationid=errorUpdateAdmin");
                            }else{
                                header("Location: ../dashboardcontroler/controler.php?action=showadmin&notificationid=3");
                            }           
                        }else{
                            header("Location: ../dashboardcontroler/controler.php?action=shownotification&notificationid=wrongPassConfirm");
                        }
                    }
                    break;
                // -----------------hiển thị danh sách admin------------------------------
                case 'showadmin':
                    $notification = (isset($_GET['notificationid']))? $this->notification($_GET['notificationid']): '';
                    $user = new usercontrol("", "", "");
                    $getuser = 'SELECT * FROM admins';
                    $userlist = $user->getalluser($getuser);
                    include '../dashboardview/admin.php';
                    break; 
                // -----------------thêm user------------------------------
                case 'usercreate':
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $otp = $_POST['otp'];
                    $error = [];
                    if (empty(trim($_POST['username']))) {
                        $error['username']['required'] = true;
                    }elseif(strlen(trim($_POST['username'])) < 5) {
                        $error['username']['min'] = 'Tên Đăng Nhập Không Được Dưới 5 Ký Tự';
                    }elseif(strlen(trim($_POST['username'])) > 15) {
                        $error['username']['max'] = 'Tên Đăng Nhập Không Được Quá 15 Ký Tự';
                    }elseif(strpos($_POST['username'], ' ') == true){
                        $error['username']['space'] = 'Tên Đăng Nhập Không Được Có Khoảng Trống';
                    }elseif(empty(trim($_POST['password']))) {
                        $error['password']['required'] = 'Mật Khẩu Không Được Để Trống';
                    }elseif(strlen(trim($_POST['password'])) < 5) {
                        $error['password']['min'] = 'Mật Khẩu Không Được Dưới 5';
                    }elseif(strlen(trim($_POST['password'])) > 15) {
                        $error['password']['max'] = 'Mật Khẩu Không Được Quá 15';
                    }elseif(strpos($_POST['password'], ' ') == true){
                        $error['password']['space'] = 'Mật Khẩu Không Được Có Khoảng Trống';
                    }else{
                        $error = [];
                    }
                    if (!empty($error["username"]["required"])) {
                        $this->shownotification(1, $error["username"]["required"]);
                    } else if (!empty($error["username"]["min"])) {
                        $this->shownotification(1, $error["username"]["min"]);
                    } else if (!empty($error["username"]["max"])) {
                        $this->shownotification(1, $error["username"]["max"]);
                    } else if (!empty($error["username"]["space"])) {
                        $this->shownotification(1, $error["username"]["space"]);
                    } else if (!empty($error["password"]["required"])) {
                        $this->shownotification(1, $error["password"]["required"]);
                    } else if (!empty($error["password"]["min"])) {
                        $this->shownotification(1, $error["password"]["min"]);
                    } else if (!empty($error["password"]["max"])) {
                        $this->shownotification(1, $error["password"]["max"]);
                    } else if (!empty($error["password"]["space"])) {
                        $this->shownotification(1, $error["password"]["space"]);
                    } else {
                        if($password == $otp){
                            $table = 'users';
                            $password = md5($password);
                            $arr = array('username' => $username, 'password' => $password);
                            $adduser = new usercontrol("", "", "");
                            if($adduser->insertuser($table, $arr) == 'error'){
                                header("Location: ../dashboardcontroler/controler.php?action=shownotification&notificationid=errorUniqueUser");
                            }else{
                                if (!isset($_SESSION)) {
                                    session_start();
                                }
                                if (isset($_SESSION["islogin"]) && $_SESSION["role"] == 'admins') {
                                    $id = $_SESSION["id"];
                                    header("Location: ../dashboardcontroler/controler.php?action=showuser&notificationid=1");
                                } else {
                                    header("Location: ../dashboardcontroler/controler.php?action=shownotification&notificationid=addComplete");
                                }
                                // header("Location: ../dashboardcontroler/controler.php?action=shownotification&notificationid=addComplete");
                            }                            
                        }else{
                            $this->shownotification(1, 'Xác Nhận Mật Khẩu Không Đúng');
                        }
                    }
                    break;
                // -----------------lấy thông tin user------------------------------
                case 'getuserid':
                    $id = $_GET['id'];
                    $table = 'users';
                    $arr = array('id'=>$id);
                    $userInfor = new usercontrol("", "", "");
                    $infor = $userInfor->getuser($table, $arr);
                    include '../dashboardview/updateuser.php';
                    break;
                // -----------------cập nhật tin user------------------------------
                case 'updateuser':
                    $id = $_POST['id'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $passwordconfirm = $_POST['passwordconfirm'];
                    $error = [];
                    if (empty(trim($_POST['username']))) {
                        $error['username']['required'] = true;
                    }elseif(strlen(trim($_POST['username'])) < 5) {
                        $error['username']['min'] = true;
                    }elseif(strlen(trim($_POST['username'])) > 15) {
                        $error['username']['max'] = true;
                    }elseif(strpos($_POST['username'], ' ') == true){
                        $error['username']['space'] = true;
                    }elseif(empty(trim($_POST['password']))) {
                        $error['password']['required'] = true;
                    }elseif(strlen(trim($_POST['password'])) < 5) {
                        $error['password']['min'] = true;
                    }elseif(strlen(trim($_POST['password'])) > 15) {
                        $error['password']['max'] = true;
                    }elseif(strpos($_POST['password'], ' ') == true){
                        $error['password']['space'] = true;
                    }else{
                        $error = [];
                    }
                    if (!empty($error["username"]["required"])) {
                        header("Location: ../dashboardcontroler/controler.php?action=shownotification&notificationid=usernameRequire");
                    } else if (!empty($error["username"]["min"])) {
                        header("Location: ../dashboardcontroler/controler.php?action=shownotification&notificationid=usernameMin");
                    } else if (!empty($error["username"]["max"])) {
                        header("Location: ../dashboardcontroler/controler.php?action=shownotification&notificationid=usernameMax");
                    } else if (!empty($error["username"]["space"])) {
                        header("Location: ../dashboardcontroler/controler.php?action=shownotification&notificationid=usernameSpace");
                    } else if (!empty($error["password"]["required"])) {
                        header("Location: ../dashboardcontroler/controler.php?action=shownotification&notificationid=passwordRequire");
                    } else if (!empty($error["password"]["min"])) {
                        header("Location: ../dashboardcontroler/controler.php?action=shownotification&notificationid=passwordMin");
                    } else if (!empty($error["password"]["max"])) {
                        header("Location: ../dashboardcontroler/controler.php?action=shownotification&notificationid=passwordMax");
                    } else if (!empty($error["password"]["space"])) {
                        header("Location: ../dashboardcontroler/controler.php?action=shownotification&notificationid=passwordSpace");
                    } else {
                        if($password == $passwordconfirm && $this->isLogin()){
                            $table = 'users';
                            $password = md5($password);
                            $arr = array('id'=> $id, 'username' => $username, 'password' => $password);
                            $updateuser = new usercontrol("", "", "");
                            if($updateuser->updateuser($table, $arr) == 'error'){
                                header("Location: ../dashboardcontroler/controler.php?action=shownotification&notificationid=errorUpdateAdmin");
                            }else{
                                header("Location: ../dashboardcontroler/controler.php?action=showuser&notificationid=3");
                            }           
                        }else{
                            header("Location: ../dashboardcontroler/controler.php?action=shownotification&notificationid=wrongPassConfirm");
                        }
                    }
                    break;
                // -----------------Lấy id thông báo xóa user------------------------------
                case 'alertdeleteuser':
                    $id = $_GET['id'];
                    $name = $_GET['name'];
                    $result = '<h4 class="text-warning"> Bạn muốn xóa người dùng: '.$name.' ?</h4>';
                    $button_back = '<a href="../dashboardcontroler/controler.php?action=deleteuser&id='.$id.'" class="btn btn-warning rounded-pill py-3 w-100 mb-4">Xóa Sản Phẩm</a>';
                    include '../dashboardview/notification.php';
                    break;
                // -----------------xóa user------------------------------
                case 'deleteuser':
                    $notification = (isset($_GET['notificationid']))? $this->notification($_GET['notificationid']): '';
                    $table = 'users';
                    $id = $_GET['id'];
                    $arr = array('id'=>$id);
                    $deleteuser = new usercontrol("", "", "");
                    $deleteuser->deleteuser($table, $arr);
                    header("Location: ../dashboardcontroler/controler.php?action=showuser&notificationid=2");
                    break;
                // -----------------hiển thị danh sách user------------------------------
                case 'showuser':
                    $notification = (isset($_GET['notificationid']))? $this->notification($_GET['notificationid']): '';
                    $user = new usercontrol("", "", "");
                    $getuser = 'SELECT * FROM users';
                    $userlist = $user->getalluser($getuser);
                    include '../dashboardview/user.php';
                    break;
                // -----------------thêm thức ăn------------------------------
                case 'addfood':
                    $foodname = $_POST['foodname'];
                    $price = $_POST['price'];
                    $description = $_POST['description'];
                    $img = '../img/imgupload/'.$_FILES['img']['name'];
                    
                    $error = [];
                    if (empty(trim($_POST['foodname']))) {
                        $error['foodname']['required'] = true;
                    }elseif (empty(trim($_POST['price']))) {
                        $error['price']['required'] = true;
                    }elseif (empty(trim($_POST['description']))) {
                        $error['description']['required'] = true;
                    }elseif (empty(trim($_FILES['img']['name']))) {
                        $error['img']['required'] = true;
                    }else{
                        $error = [];
                    }

                    if (!empty($error["foodname"]["required"])) {
                        header("Location: ../dashboardcontroler/controler.php?action=shownotification&notificationid=emptyProductName");
                    } else if (!empty($error["price"]["required"])) {
                        header("Location: ../dashboardcontroler/controler.php?action=shownotification&notificationid=emptyPrice");
                    } else if (!empty($error["description"]["required"])) {
                        header("Location: ../dashboardcontroler/controler.php?action=shownotification&notificationid=emptyDescription");
                    } else if (!empty($error["img"]["required"])) {
                        header("Location: ../dashboardcontroler/controler.php?action=shownotification&notificationid=emptyImg");
                    } else {
                        $uploadFile = new uploadfile();
                        $uploadFile->uploadimg("img");
                        $arr = array('foodname'=>$foodname, 'price'=>$price, 'img'=>$img, 'description'=>$description);
                        $sql = 'insert into food (foodname, price, img, fooddescription) values (:foodname, :price, :img, :description)';
                        $addfood = new product("", "", "", "");
                        $addfood->insertproduct($sql, $arr);
                        header("Location: ../dashboardcontroler/controler.php?action=showproduct&notificationid=4");
                    }                    
                    break;
                // -----------------lấy thông tin thức ăn------------------------------
                case 'getfood':
                    $id = $_GET['id'];
                    $table = 'food';
                    $arr = array('id'=>$id);
                    $getproduct = new product("", "", "", "");
                    $infor = $getproduct->getproduct($table, $arr);
                    include '../dashboardview/updatefood.php';
                    break;
                // -----------------cập nhật thức ăn------------------------------
                case 'updatefood':
                    $id = $_POST['id'];
                    $foodname = $_POST['foodname'];
                    $price = $_POST['price'];
                    $description = $_POST['description'];
                    if (!empty($_FILES['img']['name'])) {
                        $img = '../img/imgupload/'.$_FILES['img']['name'];
                    } else {
                        $img = $_POST['oldimg'];
                    }
                    $table = 'food';

                    $error = [];
                    if (empty(trim($_POST['foodname']))) {
                        $error['foodname']['required'] = true;
                    }elseif (empty(trim($_POST['price']))) {
                        $error['price']['required'] = true;
                    }elseif (empty(trim($_POST['description']))) {
                        $error['description']['required'] = true;
                    }elseif (empty(trim($img))) {
                        $error['img']['required'] = true;
                    }else{
                        $error = [];
                    }

                    if (!empty($error["foodname"]["required"])) {
                        header("Location: ../dashboardcontroler/controler.php?action=shownotification&notificationid=emptyProductName");
                    } else if (!empty($error["price"]["required"])) {
                        header("Location: ../dashboardcontroler/controler.php?action=shownotification&notificationid=emptyPrice");
                    } else if (!empty($error["description"]["required"])) {
                        header("Location: ../dashboardcontroler/controler.php?action=shownotification&notificationid=emptyDescription");
                    } else if (!empty($error["img"]["required"])) {
                        header("Location: ../dashboardcontroler/controler.php?action=shownotification&notificationid=emptyImg");
                    } else {
                        $uploadFile = new uploadfile();
                        $uploadFile->uploadimg("img");
                        $arr = array('id'=>$id, 'foodname'=>$foodname, 'price'=>$price, 'img'=>$img, 'description'=>$description);
                        $sql = "update ".$table." set foodname = :foodname, price = :price, fooddescription= :description, img= :img, timeupdate = now()  where id = :id";
                        $updatefood = new product("", "", "", "");
                        $updatefood->updateproduct($sql, $arr);
                        header("Location: ../dashboardcontroler/controler.php?action=showproduct&notificationid=6");
                    }                    
                    break;
                // -----------------Lấy id thông báo xóa sản phẩm------------------------------
                case 'alertdeletefood':
                    $id = $_GET['id'];
                    $name = $_GET['name'];
                    $result = '<h4 class="text-warning"> Bạn Muốn Xóa Sản Phẩm '.$name.'?</h4>';
                    $button_back = '<a href="../dashboardcontroler/controler.php?action=deletefood&id='.$id.'" class="btn btn-warning rounded-pill py-3 w-100 mb-4">Xóa Sản Phẩm</a>';
                    include '../dashboardview/notification.php';
                    break;
                // -----------------xóa thức ăn------------------------------
                case 'deletefood':
                    $notification = (isset($_GET['notificationid']))? $this->notification($_GET['notificationid']): '';
                    $table = 'food';
                    $id = $_GET['id'];
                    $arr = array('id'=>$id);
                    $deleteproduct = new product("", "", "", "");
                    $deleteproduct->deleteproduct($table, $arr);
                    header("Location: ../dashboardcontroler/controler.php?action=showproduct&notificationid=5");
                    break;
                // -----------------thêm nước uống------------------------------
                case 'adddrink':
                    $drinkname = $_POST['drinkname'];
                    $price = $_POST['price'];
                    $description = $_POST['description'];
                    $img = '../img/imgupload/'.$_FILES['img']['name'];
                    
                    $error = [];
                    if (empty(trim($_POST['drinkname']))) {
                        $error['drinkname']['required'] = true;
                    }elseif (empty(trim($_POST['price']))) {
                        $error['price']['required'] = true;
                    }elseif (empty(trim($_POST['description']))) {
                        $error['description']['required'] = true;
                    }elseif (empty(trim($_FILES['img']['name']))) {
                        $error['img']['required'] = true;
                    }else{
                        $error = [];
                    }

                    if (!empty($error["drinkname"]["required"])) {
                        header("Location: ../dashboardcontroler/controler.php?action=shownotification&notificationid=emptyProductName");
                    } else if (!empty($error["price"]["required"])) {
                        header("Location: ../dashboardcontroler/controler.php?action=shownotification&notificationid=emptyPrice");
                    } else if (!empty($error["description"]["required"])) {
                        header("Location: ../dashboardcontroler/controler.php?action=shownotification&notificationid=emptyDescription");
                    } else if (!empty($error["img"]["required"])) {
                        header("Location: ../dashboardcontroler/controler.php?action=shownotification&notificationid=emptyImg");
                    } else {
                        $uploadFile = new uploadfile();
                        $uploadFile->uploadimg("img");
                        $arr = array('drinkname'=>$drinkname, 'price'=>$price, 'img'=>$img, 'description'=>$description);
                        $sql = 'insert into drink (drinkname, price, img, drinkdescription) values (:drinkname, :price, :img, :description)';
                        $drinkfood = new product("", "", "", "");
                        $drinkfood->insertproduct($sql, $arr);
                        header("Location: ../dashboardcontroler/controler.php?action=showproduct&notificationid=4");
                    }                    
                    break;
                // -----------------lấy thông tin nước uống------------------------------
                case 'getdrink':
                    $id = $_GET['id'];
                    $table = 'drink';
                    $arr = array('id'=>$id);
                    $getproduct = new product("", "", "", "");
                    $infor = $getproduct->getproduct($table, $arr);
                    include '../dashboardview/updatedrink.php';
                    break;
                // -----------------cập nhật nước uống------------------------------
                case 'updatedrink':
                    $id = $_POST['id'];
                    $drinkname = $_POST['drinkname'];
                    $price = $_POST['price'];
                    $description = $_POST['description'];
                    if (!empty($_FILES['img']['name'])) {
                        $img = '../img/imgupload/'.$_FILES['img']['name'];
                    } else {
                        $img = $_POST['oldimg'];
                    }
                    $table = 'drink';
                    // var_dump($_POST);
                    // die;
                    
                    $error = [];
                    if (empty(trim($_POST['drinkname']))) {
                        $error['drinkname']['required'] = true;
                    }elseif (empty(trim($_POST['price']))) {
                        $error['price']['required'] = true;
                    }elseif (empty(trim($_POST['description']))) {
                        $error['description']['required'] = true;
                    }elseif (empty(trim($img))) {
                        $error['img']['required'] = true;
                    }else{
                        $error = [];
                    }

                    if (!empty($error["drinkname"]["required"])) {
                        header("Location: ../dashboardcontroler/controler.php?action=shownotification&notificationid=emptyProductName");
                    } else if (!empty($error["price"]["required"])) {
                        header("Location: ../dashboardcontroler/controler.php?action=shownotification&notificationid=emptyPrice");
                    } else if (!empty($error["description"]["required"])) {
                        header("Location: ../dashboardcontroler/controler.php?action=shownotification&notificationid=emptyDescription");
                    } else if (!empty($error["img"]["required"])) {
                        header("Location: ../dashboardcontroler/controler.php?action=shownotification&notificationid=emptyImg");
                    } else {
                        $uploadFile = new uploadfile();
                        $uploadFile->uploadimg("img");
                        $arr = array('id'=>$id, 'drinkname'=>$drinkname, 'price'=>$price, 'img'=>$img, 'description'=>$description);
                        $sql = "update ".$table." set drinkname = :drinkname, price = :price, drinkdescription= :description, img= :img, timeupdate = now()  where id = :id";
                        $updatedrink = new product("", "", "", "");
                        $updatedrink->updateproduct($sql, $arr);
                        // die;
                        header("Location: ../dashboardcontroler/controler.php?action=showproduct&notificationid=6");
                    }                    
                    break;
                // -----------------Lấy id thông báo xóa sản phẩm------------------------------
                case 'alertdeletedrink':
                    $id = $_GET['id'];
                    $name = $_GET['name'];
                    $result = '<h4 class="text-warning"> Bạn Muốn Xóa Sản Phẩm '.$name.'?</h4>';
                    $button_back = '<a href="../dashboardcontroler/controler.php?action=deletedrink&id='.$id.'" class="btn btn-warning rounded-pill py-3 w-100 mb-4">Xóa Sản Phẩm</a>';
                    include '../dashboardview/notification.php';
                    break;
                // -----------------xóa nước------------------------------
                case 'deletedrink':
                    $notification = (isset($_GET['notificationid']))? $this->notification($_GET['notificationid']): '';
                    $table = 'drink';
                    $id = $_GET['id'];
                    $arr = array('id'=>$id);
                    $deleteproduct = new product("", "", "", "");
                    $deleteproduct->deleteproduct($table, $arr);
                    header("Location: ../dashboardcontroler/controler.php?action=showproduct&notificationid=5");
                    break;

                // -----------------hiển thị thức ăn------------------------------
                case 'showproduct':
                    $notification = (isset($_GET['notificationid']))? $this->notification($_GET['notificationid']): '';
                    $food = new product("", "", "", "");
                    $getfood = 'select id, foodname, price, img, fooddescription, timeupload, timeupdate from food';
                    $foodlist = $food->getallproduct($getfood);
                    $drink = new product("", "", "", "");
                    $getdrink = 'select id, drinkname, price, img, drinkdescription, timeupload, timeupdate from drink';
                    $drinklist = $drink->getallproduct($getdrink);
                    include '../dashboardview/product.php';
                    break;
                // -----------------đăng nhập------------------------------
                case 'login':
                    $username = $_POST['username'];
                    $pass = md5($_POST['password']);
                    $role = (isset($_POST['roles']))? $_POST['roles']: 'users';
                    $user = new usercontrol("", "", "");
                    if($user->checkuser($username, $pass, $role)){
                        if ($role == 'admins'){
                            header("Location: ../dashboardcontroler/controler.php?action=showadmin");
                        }else{
                            header("Location: ../userview/index2.php");
                        }
                    }else{
                        $result = 'Sai Tên Đăng Nhập Hoặc Mật Khẩu Xin Kiểm Tra Lại';
                        $this->shownotification(1, $result);
                    }
                    break; 
                // -----------------đăng xuất------------------------------
                case 'logout':
                    if (!isset($_SESSION)) {
                        session_start();
                    }
                    session_unset();
                    session_destroy();
                    header("Location: ../dashboardview/signin.php");
                    break;
                // -----------------hiển thị thông báo------------------------------
                case 'shownotification':
                    $notificationid = $_GET['notificationid'];
                    switch ($notificationid){
                        case 'addComplete':
                            $result = 'Đăng Ký Tài Khoản Thành Công';
                            $this->shownotification(1, $result);
                            break;
                        case 'errorUniqueUser':
                            $result = 'Tên Tài Khoản Đã Được Đăng Ký Xin Vui Lòng Thử Lại';
                            $this->shownotification(2, $result);
                            break;
                        case 'errorUniqueAdmin':
                            $result = 'Tên Tài Khoản Đã Được Đăng Ký Xin Vui Lòng Thử Lại';
                            $this->shownotification(3, $result);
                            break;
                        case 'usernameRequire':
                            $result = 'Tên Đăng Nhập Không Được Để Trống';
                            $this->shownotification(3, $result);
                            break;
                        case 'usernameMin':
                            $result = 'Tên Đăng Nhập Không Được Dưới 5';
                            $this->shownotification(3, $result);
                            break;
                        case 'usernameMax':
                            $result = 'Tên Đăng Nhập Không Được Quá 15';
                            $this->shownotification(3, $result);
                            break;
                        case 'usernameSpace':
                            $result = 'Tên Đăng Nhập Không Được Có Khoảng Trống';
                            $this->shownotification(3, $result);
                            break;
                        case 'passwordRequire':
                            $result = 'Mật Khẩu Không Được Để Trống';
                            $this->shownotification(3, $result);
                            break;
                        case 'passwordMin':
                            $result = 'Mật Khẩu Không Được Dưới 5';
                            $this->shownotification(3, $result);
                            break;
                        case 'passwordMax':
                            $result = 'Mật Khẩu Không Được Quá 15';
                            $this->shownotification(3, $result);
                            break;
                        case 'passwordSpace':
                            $result = 'Mật Khẩu Không Được Có Khoảng Trống';
                            $this->shownotification(3, $result);
                            break;
                        case 'wrongPassConfirm':
                            $result = 'Xác Nhận Mật Khẩu Không Đúng';
                            $this->shownotification(3, $result);
                            break;
                        case 'errorUpdateAdmin':
                            $result = 'Cập Nhật Thất Bại';
                            $this->shownotification(3, $result);
                            break;
                        case 'emptyProductName':
                            $result = 'Tên Sản Phẩm Không Được Để Trống';
                            $this->shownotification(3, $result);
                            break;        
                        case 'emptyPrice':
                            $result = 'Sản Phẩm Chưa Có Giá';
                            $this->shownotification(3, $result);
                            break;
                        case 'emptyDescription':
                            $result = 'Sản Phẩm Chưa Có Mô Tả';
                            $this->shownotification(3, $result);
                            break;
                        case 'emptyImg':
                            $result = 'Sản Phẩm Chưa Có Hình Ảnh';
                            $this->shownotification(3, $result);
                            break;
                    }
                    break;
                // -----------------hiển thị sản phẩm lên menu------------------------------
                case 'showFood':
                    $food = new product("", "", "", "");
                    $getfood = 'select id, foodname, price, img, fooddescription, timeupload, timeupdate from food';
                    $foodlist = $food->getallproduct($getfood);
                    include '../userview/menu.php';
                    break;
                // -----------------hiển thị thức ăn lên menu------------------------------
                case 'showFood':
                    $food = new product("", "", "", "");
                    $getfood = 'select id, foodname, price, img, fooddescription, timeupload, timeupdate from food';
                    $foodlist = $food->getallproduct($getfood);
                    include '../userview/menu.php';
                    break;
                // -----------------hiển thị đồ uống lên menu------------------------------
                case 'showDrink':
                    $drink = new product("", "", "", "");
                    $getdrink = 'select id, drinkname, price, img, drinkdescription from drink';
                    $drinklist = $drink->getallproduct($getdrink);
                    include '../userview/menu2.php';
                    break;
                // -----------------show thông tin thức ăn------------------------------
                case 'showFoodInfo':
                    $id = $_GET['id'];
                    $food = new product("", "", "", "");
                    $getfood = 'select foodname, price, img, fooddescription, timeupload, timeupdate from food where id ='.$id;
                    $foodinfo = $food->getallproduct($getfood);
                    include '../userview/foodinfor.php';
                    break;
                // -----------------show thông tin thức ăn------------------------------
                case 'showDrinkInfo':
                    $id = $_GET['id'];
                    $drink = new product("", "", "", "");
                    $getdrink = 'select drinkname, price, img, drinkdescription, timeupload, timeupdate from drink where id ='.$id;
                    $drinkinfo = $drink->getallproduct($getdrink);
                    include '../userview/drinkinfor.php';
                    break;
                // -----------------bình luận thức ăn------------------------------
                case 'commentFood':
                    $iduser = $_POST['iduser'];
                    $nameuser = $_POST['nameuser'];
                    $idfood = $_POST['idfood'];
                    $namefood = $_POST['namefood'];
                    $comment = $_POST['comment'];
                    echo $table = ($_POST['role'] == 'admins')? 'admincommentfood': 'usercommentfood';
                    $arr = array('drinkname'=>$drinkname, 'price'=>$price, 'img'=>$img, 'description'=>$description);
                    $sql = 'insert into drink (drinkname, price, img, drinkdescription) values (:drinkname, :price, :img, :description)';
                    $drinkfood = new product("", "", "", "");
                    $drinkfood->insertproduct($sql, $arr);
                    header("Location: ../dashboardcontroler/controler.php?action=showproduct&notificationid=4");
                    break;
                default:
                    header("Location: ../dashboardview/signin.php");
            }
        }

        private function isLogin() {
            if (!isset($_SESSION)) {
                session_start();
                if ($_SESSION["islogin"]) {
                    return true;
                }
            }
            return false;
        }
        private function shownotification($id,$name) {
            switch($id){
                case 1:
                    $result = '<h4 class="text-warning">'.$name.'</h4>';
                    $button_back = '<a type="submit" href="../dashboardview/signin.php" class="btn btn-warning py-3 w-100 mb-4">Quay Lại Trang Đăng Nhập</a>';
                    include '../dashboardview/notification.php';
                    break;
                case 2:
                    $result = '<h4 class="text-warning">'.$name.'</h4>';
                    $button_back = '<a type="submit" href="../dashboardview/signup.php" class="btn btn-warning py-3 w-100 mb-4">Quay Lại Trang Đăng Nhập</a>';
                    include '../dashboardview/notification.php';
                    break;
                case 3:
                    $result = '<h3 class="text-warning">'.$name.'</h3>';
                    $button_back = '<a type="submit" href="../dashboardview/addadmin.php" class="btn btn-warning rounded-pill py-3 px-5">Quay Lại Trang Đăng Ký</a>';
                    include '../dashboardview/404.php';
                    break;
                case 4:
                    break;
            }
        }
        private function notification($name) {
            $notification = $name;
            switch($notification){
                case '1':
                    return ' Đăng ký tài khoản thành công';
                    break;
                case '2':
                    return ' Xóa tài khoản thành công';
                    break;
                case '3':
                    return ' Cập nhật tài khoản thành công';
                    break;
                case '4':
                    return ' Đăng Sản Phẩm thành công';
                    break;
                case '5':
                    return ' Xóa Sản Phẩm thành công';
                    break;
                case '6':
                    return ' Cập nhật Sản Phẩm thành công';
                    break;
                default:
                    return '';
            }
        }
    }

    $action = '';
    if (isset($_POST['useraction'])){ 
        $action = $_POST['useraction'];
    }else{
        $action = $_GET['action'];
        // $action = (isset($_GET['action']))? $_GET['action']: '';
    }
    $control = new admincontroler($action)
?>