<?php
    include_once '../model/model.php';
    include_once './lib/uploadfile.php';
    include_once '../model/lib/databaseprocess.php';
    include_once './adminController.php';

    class Controler{
        public function __construct($action){
            $adminController = new AdminController();
            switch ($action){
                // -----------------add admin------------------------------
                case 'admincreate':
                    $username = $_POST['username'];
                    $password = md5($_POST['password']);
                    if($this->isLogin()){
                        $adminController->adminCreate($username, $password);
                    }
                    break;

                // -----------------add user------------------------------
                case 'usercreate':
                    $username = $_POST['username'];
                    $password = md5($_POST['password']);
                    $table = 'users';
                    $arr = array('username' => $username, 'password' => $password);
                    $adduser = new usercontrol("", "", "");
                    if($adduser->insertuser($table, $arr) == 'error'){
                        // $this->shownotification(4, 'Tên Tài Khoản Đã Được Đăng Ký Xin Vui Lòng Thử Lại');
                        header("Location: ../controller/controller.php?action=shownotification&notificationid=errorUniqueAdmin");
                    }else{
                        header("Location: ../controller/controller.php?action=showuser&notificationid=1");
                    }                            
                    break;

                // -----------------delete admin------------------------------
                case 'deleteadmin':
                    $notification = (isset($_GET['notificationid']))? $this->notification($_GET['notificationid']): '';
                    $table = 'admins';
                    $id = $_GET['id'];
                    $arr = array('id'=>$id);
                    $deleteadmin = new usercontrol("", "", "");
                    $deleteadmin->deleteuser($table, $arr);
                    header("Location: ../controller/controller.php?action=logout");
                    break;

                // -----------------get info admin------------------------------
                case 'getadminid':
                    $id = $_GET['id'];
                    $table = 'admins';
                    $arr = array('id'=>$id);
                    $adminInfor = new usercontrol("", "", "");
                    $infor = $adminInfor->getuser($table, $arr);
                    include '../view/dashboardview/admin/updateadmin.php';
                    break;

                // -----------------update admin------------------------------
                case 'updateadmin':
                    $id = $_POST['id'];
                    $username = $_POST['username'];
                    $password = md5($_POST['password']);
                    if($this->isLogin()){
                        $table = 'admins';
                        $arr = array('id'=> $id, 'username' => $username, 'password' => $password);
                        $updateuser = new usercontrol("", "", "");
                        if($updateuser->updateuser($table, $arr) == 'error'){
                            header("Location: ../controller/controller.php?action=shownotification&notificationid=errorUpdateAdmin");
                        }else{
                            header("Location: ../controller/controller.php?action=showadmin&notificationid=3");
                        }           
                    }else{
                        header("Location: ../controller/controller.php?action=shownotification&notificationid=wrongPassConfirm");
                    }
                    break;
                    
                // -----------------show admin------------------------------
                case 'showadmin':
                    $notification = (isset($_GET['notificationid']))? $this->notification($_GET['notificationid']): '';
                    $user = new usercontrol("", "", "");
                    $getuser = 'SELECT * FROM admins';
                    $userlist = $user->getalluser($getuser);
                    include '../view/dashboardview/admin/admin.php';
                    break;

                // -----------------signup------------------------------
                case 'signup':
                    $username = $_POST['username'];
                    $password = md5($_POST['password']);
                    $table = 'users';
                    $arr = array('username' => $username, 'password' => $password);
                    $adduser = new usercontrol("", "", "");
                    if ($adduser->insertuser($table, $arr) == 'error') {
                        header("Location: ../controller/controller.php?action=shownotification&notificationid=errorUniqueUser");
                    } else {
                        header("Location: ../controller/controller.php?action=shownotification&notificationid=addComplete");
                    }
                    break;

                // -----------------get info user------------------------------
                case 'getuserid':
                    $id = $_GET['id'];
                    $table = 'users';
                    $arr = array('id'=>$id);
                    $userInfor = new usercontrol("", "", "");
                    $infor = $userInfor->getuser($table, $arr);
                    include '../view/dashboardview/user/updateuser.php';
                    break;

                // -----------------update user------------------------------
                case 'updateuser':
                    $id = $_POST['id'];
                    $username = $_POST['username'];
                    $password = md5($_POST['password']);
                    if($this->isLogin()){
                        $table = 'users';
                        $arr = array('id'=> $id, 'username' => $username, 'password' => $password);
                        $updateuser = new usercontrol("", "", "");
                        if($updateuser->updateuser($table, $arr) == 'error'){
                            header("Location: ../controller/controller.php?action=shownotification&notificationid=errorUpdateAdmin");
                        }else{
                            header("Location: ../controller/controller.php?action=showuser&notificationid=3");
                        }           
                    }else{
                        header("Location: ../controller/controller.php?action=shownotification&notificationid=wrongPassConfirm");
                    }
                    break;

                // -----------------get id to delete user------------------------------
                case 'alertdeleteuser':
                    $id = $_GET['id'];
                    $name = $_GET['name'];
                    $result = '<h4 class="text-warning"> Bạn muốn xóa người dùng: '.$name.' ?</h4>';
                    $button_back = '<a href="../controller/controller.php?action=deleteuser&id='.$id.'" class="btn btn-warning rounded-pill py-3 w-100 mb-4">Xóa Người Dùng</a>';
                    include '../view/dashboardview/notification/notification.php';
                    break;

                // -----------------delete user------------------------------
                case 'deleteuser':
                    $notification = (isset($_GET['notificationid']))? $this->notification($_GET['notificationid']): '';
                    $table = 'users';
                    $id = $_GET['id'];
                    $arr = array('id'=>$id);
                    $deleteuser = new usercontrol("", "", "");
                    $deleteuser->deleteuser($table, $arr);
                    header("Location: ../controller/controller.php?action=showuser&notificationid=2");
                    break;

                // -----------------show user------------------------------
                case 'showuser':
                    $notification = (isset($_GET['notificationid']))? $this->notification($_GET['notificationid']): '';
                    $user = new usercontrol("", "", "");
                    $getuser = 'SELECT * FROM users';
                    $userlist = $user->getalluser($getuser);
                    include '../view/dashboardview/user/user.php';
                    break;

                // -----------------add food------------------------------
                case 'addfood':
                    $foodname = $_POST['foodname'];
                    $price = $_POST['price'];
                    $description = $_POST['description'];
                    $img = '../img/imgupload/'.$_FILES['img']['name'];

                    $uploadFile = new uploadfile();
                    $uploadFile->uploadimg("img");

                    $arr = array('foodname'=>$foodname, 'price'=>$price, 'img'=>$img, 'description'=>$description);
                    $sql = 'insert into food (foodname, price, img, fooddescription) values (:foodname, :price, :img, :description)';
                    $addfood = new product("", "", "", "");
                    $addfood->insertproduct($sql, $arr);
                    header("Location: ../controller/controller.php?action=showproduct&notificationid=4");                  
                    break;

                // -----------------get info food------------------------------
                case 'getfood':
                    $id = $_GET['id'];
                    $table = 'food';
                    $arr = array('id'=>$id);
                    $getproduct = new product("", "", "", "");
                    $infor = $getproduct->getproduct($table, $arr);
                    include '../view/dashboardview/food/updatefood.php';
                    break;

                // -----------------update food------------------------------
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

                    $uploadFile = new uploadfile();
                    $uploadFile->uploadimg("img");

                    $arr = array('id'=>$id, 'foodname'=>$foodname, 'price'=>$price, 'img'=>$img, 'description'=>$description);
                    $sql = "update ".$table." set foodname = :foodname, price = :price, fooddescription= :description, img= :img, timeupdate = now()  where id = :id";
                    $updatefood = new product("", "", "", "");
                    $updatefood->updateproduct($sql, $arr);
                    header("Location: ../controller/controller.php?action=showproduct&notificationid=6");
                                     
                    break;

                // -----------------get id to delete food------------------------------
                case 'alertdeletefood':
                    $id = $_GET['id'];
                    $name = $_GET['name'];
                    $result = '<h4 class="text-warning"> Bạn Muốn Xóa Sản Phẩm '.$name.'?</h4>';
                    $button_back = '<a href="../controller/controller.php?action=deletefood&id='.$id.'" class="btn btn-warning rounded-pill py-3 w-100 mb-4">Xóa Sản Phẩm</a>';
                    include '../view/dashboardview/notification/notification.php';
                    break;

                // -----------------delete food------------------------------
                case 'deletefood':
                    $notification = (isset($_GET['notificationid']))? $this->notification($_GET['notificationid']): '';
                    $table = 'food';
                    $id = $_GET['id'];
                    $arr = array('id'=>$id);
                    $deleteproduct = new product("", "", "", "");
                    $deleteproduct->deleteproduct($table, $arr);
                    header("Location: ../controller/controller.php?action=showproduct&notificationid=5");
                    break;

                // -----------------add drink------------------------------
                case 'adddrink':
                    $drinkname = $_POST['drinkname'];
                    $price = $_POST['price'];
                    $description = $_POST['description'];
                    $img = '../img/imgupload/' . $_FILES['img']['name'];

                    $uploadFile = new uploadfile();
                    $uploadFile->uploadimg("img");
                    
                    $arr = array('drinkname' => $drinkname, 'price' => $price, 'img' => $img, 'description' => $description);
                    $sql = 'insert into drink (drinkname, price, img, drinkdescription) values (:drinkname, :price, :img, :description)';
                    $drinkfood = new product("", "", "", "");
                    $drinkfood->insertproduct($sql, $arr);
                    header("Location: ../controller/controller.php?action=showproduct&notificationid=4");
                    break;

                // -----------------get info drink------------------------------
                case 'getdrink':
                    $id = $_GET['id'];
                    $table = 'drink';
                    $arr = array('id'=>$id);
                    $getproduct = new product("", "", "", "");
                    $infor = $getproduct->getproduct($table, $arr);
                    include '../view/dashboardview/drink/updatedrink.php';
                    break;

                // -----------------update drink------------------------------
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
                    
                    $uploadFile = new uploadfile();
                    $uploadFile->uploadimg("img");

                    $arr = array('id'=>$id, 'drinkname'=>$drinkname, 'price'=>$price, 'img'=>$img, 'description'=>$description);
                    $sql = "update ".$table." set drinkname = :drinkname, price = :price, drinkdescription= :description, img= :img, timeupdate = now()  where id = :id";
                    $updatedrink = new product("", "", "", "");
                    $updatedrink->updateproduct($sql, $arr);
                    // die;
                    header("Location: ../controller/controller.php?action=showproduct&notificationid=6");                 
                    break;
                
                // -----------------get id to delete drink------------------------------
                case 'alertdeletedrink':
                    $id = $_GET['id'];
                    $name = $_GET['name'];
                    $result = '<h4 class="text-warning"> Bạn Muốn Xóa Sản Phẩm '.$name.'?</h4>';
                    $button_back = '<a href="../controller/controller.php?action=deletedrink&id='.$id.'" class="btn btn-warning rounded-pill py-3 w-100 mb-4">Xóa Sản Phẩm</a>';
                    include '../view/dashboardview/notification/notification.php';
                    break;
                
                // -----------------delete drink------------------------------
                case 'deletedrink':
                    $notification = (isset($_GET['notificationid']))? $this->notification($_GET['notificationid']): '';
                    $table = 'drink';
                    $id = $_GET['id'];
                    $arr = array('id'=>$id);
                    $deleteproduct = new product("", "", "", "");
                    $deleteproduct->deleteproduct($table, $arr);
                    header("Location: ../controller/controller.php?action=showproduct&notificationid=5");
                    break;

                // -----------------show product and comment------------------------------
                case 'showproduct':
                    $notification = (isset($_GET['notificationid']))? $this->notification($_GET['notificationid']): '';
                    
                    $food = new product("", "", "", "");
                    $getfood = 'select id, foodname, price, img, fooddescription, timeupload, timeupdate from food';
                    $foodlist = $food->getallproduct($getfood);
                    
                    $drink = new product("", "", "", "");
                    $getdrink = 'select id, drinkname, price, img, drinkdescription, timeupload, timeupdate from drink';
                    $drinklist = $drink->getallproduct($getdrink);
                    
                    $comment = new comment("", "", "", "");
                    $getadmincommentfood = 'select adminid, foodid, foodname, comments, datecoments from admincommentfood inner join food on foodid = food.id';
                    $admincommentfood = $comment->getallcomment($getadmincommentfood);

                    $getusercommentfood = 'select userid, foodid, foodname, comments, datecoments from usercommentfood inner join food on foodid = food.id;';
                    $usercommentfood = $comment->getallcomment($getusercommentfood);

                    $getadmincommentdrink = 'select adminid, drinkid, drinkname, comments, datecoments from admincommentdrink inner join drink on drinkid = drink.id;';
                    $admincommentdrink = $comment->getallcomment($getadmincommentdrink);

                    $getusercommentdrink = 'select userid, drinkid, drinkname, comments, datecoments from usercommentdrink inner join drink on drinkid = drink.id;';
                    $usercommentdrink = $comment->getallcomment($getusercommentdrink);
                    
                    include '../view/dashboardview/product.php';
                    break;

                // -----------------show food list to menu------------------------------
                case 'showFood':
                    $food = new product("", "", "", "");
                    $getfoodlist = 'select id, foodname, price, img, fooddescription, timeupload, timeupdate from food where foodname not like "Combo%" 
                                    AND foodname NOT LIKE "lẩu ly tự chọn%" AND foodname NOT LIKE "lẩu ly combo%" ';
                    $foodlist = $food->getallproduct($getfoodlist);
                    
                    $getBuffetHotPot = 'select id, foodname, price, img, fooddescription, timeupload, timeupdate from food where foodname like "Lẩu Ly Tự Chọn%"';
                    $buffetHotPot = $food->getallproduct($getBuffetHotPot);
                    
                    $getComboHotPot = 'select id, foodname, price, img, fooddescription, timeupload, timeupdate from food where foodname like "Lẩu Ly Combo%"';
                    $comboHotPot = $food->getallproduct($getComboHotPot);
                    
                    $getCombo = 'select id, foodname, price, img, fooddescription, timeupload, timeupdate from food where foodname like "Combo%"';
                    $combofoodlist = $food->getallproduct($getCombo);
                    
                    $category = isset($_GET['category'])? $_GET['category']: "";
                    switch ($category) {
                        case 'comboHotpot':
                            include "../view/userview/food/category/comboHotpot.php";
                            break;
                        case 'buffetHotpot':
                            include '../view/userview/food/category/buffetHotpot.php';
                            break;
                        case 'specialCombo':
                            include '../view/userview/food/category/specialCombo.php';
                            break;
                        default:
                            include '../view/userview/food/index.php';
                            break;
                    }
                    break;

                // -----------------show food detail------------------------------
                case 'showFoodInfo':
                    $notification = (isset($_GET['notificationid']))? $this->notification($_GET['notificationid']): '';
                    $id = $_GET['id'];
                    $food = new product("", "", "", "");
                    $getfood = 'select foodname, price, img, fooddescription, timeupload, timeupdate from food where id ='.$id;
                    $foodinfo = $food->getallproduct($getfood);
                    $comment = new comment("", "", "", "");
                    $getcomment = 'select adminid as id, foodid as idproduct, adminid, admins.username, comments, datecoments from admincommentfood inner join admins on  adminid = admins.id where foodid = '.$id.'
                    union select userid, foodid, userid, users.username, comments, datecoments from usercommentfood inner join users on userid = users.id where foodid ='.$id.' order by datecoments desc';
                    $commentlist = $comment->getallcomment($getcomment);
                    include '../view/userview/food/foodinfor.php';
                    break;

                // -----------------food comment------------------------------
                case 'commentFood':
                    $iduser = $_POST['iduser'];
                    $idfood = $_POST['idfood'];
                    $comment = $_POST['comment'];
                    $table = ($_POST['role'] == 'admins')? 'admincommentfood': 'usercommentfood';
                    $arr = array('iduser'=>$iduser, 'idfood'=>$idfood, 'comment'=>$comment);

                    if($table == 'admincommentfood'){
                        echo $sql = 'insert into admincommentfood (adminid, foodid, comments) values (:iduser, :idfood, :comment)';
                    }else{
                        echo $sql = 'insert into usercommentfood (userid, foodid, comments) values (:iduser, :idfood, :comment)';
                    };
                    
                    $commentfood = new comment("", "", "", "");
                    $commentfood->insertcomment($sql, $arr);
                    header("Location: ../controller/controller.php?action=showFoodInfo&id=".$idfood."&notificationid=7");
                    break;

                // -----------------get id to delete comment------------------------------
                case 'alertdeletefoodcomment':
                    $id = $_GET['id'];
                    $datetime = $_GET['datetime'];
                    $role = $_GET['role'];
                    $result = '<h4 class="text-warning"> Bạn Muốn Xóa Nhận Xét Này?</h4>';
                    $button_back = '<a href="../controller/controller.php?action=deletecommentFood&role='.$role.'&id='.$id.'&datetime='.$datetime.'" class="btn btn-warning rounded-pill py-3 w-100 mb-4">Xóa Sản Phẩm</a>';
                    include '../view/dashboardview/notification/notification.php';
                    break;
                
                // -----------------delete comment------------------------------
                case 'deletecommentFood':
                    $notification = (isset($_GET['notificationid']))? $this->notification($_GET['notificationid']): '';
                    $table = ($_GET['role']=='admin')? "admincommentfood": "usercommentfood";
                    $id = $_GET['id'];
                    $datetime = $_GET['datetime'];
                    $role = ($_GET['role']=='admin')? "adminid": "userid";
                    $arr = array('id'=>$id, 'datetime'=>$datetime);
                    $deletecomment = new comment("", "", "", "");
                    $deletecomment->deletecomment($table, $role, $arr);
                    header("Location: ../controller/controller.php?action=showproduct&notificationid=8");
                    break;

                // -----------------show drink list to menu------------------------------
                case 'showDrink':
                    $drink = new product("", "", "", "");
                    $cafeList = 'select id, drinkname, price, img, drinkdescription from drink where drinkname like "Cafe%"';
                    $cafeList = $drink->getallproduct($cafeList);
                    
                    $milkList = 'select id, drinkname, price, img, drinkdescription from drink where drinkname like "Sữa chua%" OR drinkname like "Sữa tươi%"';
                    $milkList = $drink->getallproduct($milkList);

                    $milkTeaList = 'select id, drinkname, price, img, drinkdescription from drink where drinkname like "Trà sữa%" OR drinkname like "Lipton%" ';
                    $milkTeaList = $drink->getallproduct($milkTeaList);

                    $teaList = 'select id, drinkname, price, img, drinkdescription from drink where drinkname like "Hồng Trà%" OR drinkname like "Trà%" AND drinkname not like "Trà sữa%"';
                    $teaList = $drink->getallproduct($teaList);

                    $caCaoList = 'select id, drinkname, price, img, drinkdescription from drink where drinkname like "Ca Cao%" ';
                    $caCaoList = $drink->getallproduct($caCaoList);

                    $sodaList = 'select id, drinkname, price, img, drinkdescription from drink where drinkname like "Soda%" OR drinkname like "Nước Ngọt%"';
                    $sodaList = $drink->getallproduct($sodaList);

                    $juiceList = 'select id, drinkname, price, img, drinkdescription from drink where drinkname like "Nước Ép%" ';
                    $juiceList = $drink->getallproduct($juiceList);

                    $toppingList = 'select id, drinkname, price, img, drinkdescription from drink where drinkname like "Topping%" ';
                    $toppingList = $drink->getallproduct($toppingList);

                    $category = isset($_GET['category'])? $_GET['category']: "";
                    switch ($category) {
                        case 'cafe':
                            include "../view/userview/drink/category/cafe.php";
                            break;
                        case 'milk':
                            include "../view/userview/drink/category/milk.php";
                            break;
                        case 'milkTea':
                            include "../view/userview/drink/category/milkTea.php";
                            break;
                        case 'caCao':
                            include "../view/userview/drink/category/caCao.php";
                            break;
                        case 'soda':
                            include "../view/userview/drink/category/soda.php";
                            break;
                        case 'juice':
                            include "../view/userview/drink/category/juice.php";
                            break;
                        case 'tea':
                            include "../view/userview/drink/category/tea.php";
                            break;
                        case 'topping':
                            include "../view/userview/drink/category/topping.php";
                            break;
                        // case 'otherDrink':
                        //     include "../view/userview/drink/otherDrink.php";
                        //     break;
                        default:
                            include "../view/userview/drink/index.php";
                            break;
                    }
                    break;
                
                // -----------------show drink detail------------------------------
                case 'showDrinkInfo':
                    $id = $_GET['id'];
                    $drink = new product("", "", "", "");
                    $getdrink = 'select drinkname, price, img, drinkdescription, timeupload, timeupdate from drink where id ='.$id;
                    $drinkinfo = $drink->getallproduct($getdrink);
                    $comment = new comment("", "", "", "");
                    $getcomment = 'select adminid as id, drinkid as idproduct, adminid, admins.username, comments, datecoments from admincommentdrink inner join admins on  adminid = admins.id where drinkid = '.$id.'
                    union select userid, drinkid, userid, users.username, comments, datecoments from usercommentdrink inner join users on userid = users.id where drinkid ='.$id.' order by datecoments desc;';
                    $commentlist = $comment->getallcomment($getcomment);
                    include '../view/userview/drink/drinkinfor.php';
                    break;
                    
                // -----------------drink comment------------------------------
                case 'commentDrink':
                    $iduser = $_POST['iduser'];
                    $iddrink = $_POST['iddrink'];
                    $comment = $_POST['comment'];
                    $table = ($_POST['role'] == 'admins')? 'admincommentdrink': 'usercommentdrink';
                    $arr = array('iduser'=>$iduser, 'iddrink'=>$iddrink, 'comment'=>$comment);
                    var_dump($arr);
                    if($table == 'admincommentdrink'){
                        $sql = 'insert into admincommentdrink (adminid, drinkid, comments) values (:iduser, :iddrink, :comment)';
                    }else{
                        $sql = 'insert into usercommentdrink (userid, drinkid, comments) values (:iduser, :iddrink, :comment)';
                    };
                    $commentfood = new comment("", "", "", "");
                    $commentfood->insertcomment($sql, $arr);
                    header("Location: ../controller/controller.php?action=showDrinkInfo&id=".$iddrink."&notificationid=7");
                    break;
                
                // -----------------get id to delete comment------------------------------
                case 'alertdeletedrinkcommend':
                    $id = $_GET['id'];
                    $datetime = $_GET['datetime'];
                    $role = $_GET['role'];
                    $result = '<h4 class="text-warning"> Bạn Muốn Xóa Nhận Xét Này?</h4>';
                    $button_back = '<a href="../controller/controller.php?action=deletecommentDrink&&role='.$role.'&id='.$id.'&datetime='.$datetime.'" class="btn btn-warning rounded-pill py-3 w-100 mb-4">Xóa Sản Phẩm</a>';
                    include '../view/dashboardview/notification/notification.php';
                    break;

                // -----------------delete drink comment------------------------------
                case 'deletecommentDrink':
                    $notification = (isset($_GET['notificationid']))? $this->notification($_GET['notificationid']): '';
                    $table = ($_GET['role']=='admin')? "admincommentdrink": "usercommentdrink";
                    $id = $_GET['id'];
                    $datetime = $_GET['datetime'];
                    $role = ($_GET['role']=='admin')? "adminid": "userid";
                    $arr = array('id'=>$id, 'datetime'=>$datetime);
                    $deletecomment = new comment("", "", "", "");
                    $deletecomment->deletecomment($table, $role, $arr);
                    header("Location: ../controller/controller.php?action=showproduct&notificationid=8");
                    break;

                // -----------------find account------------------------------
                case 'findAccount':
                    $account = $_POST['nameAccount'];
                    $arr = array('username' => $account);
                    $sql = "select * from users where username = :username";
                    $findAccount = new usercontrol("", "", "");
                    $accountExist = $findAccount -> getuserByUsername($sql, $arr);
                    if (!empty($accountExist)){
                        include '../view/dashboardview/forgotpassword.php';
                    }else{
                        $result = '<h4 class="text-warning">Không Tìm Thấy Tài Khoản! Xin Vui Lòng Thử Lại</h4>';
                        $button_back = '<a href="../view/dashboardview/findaccount.php" class="btn btn-warning rounded-pill py-3 w-100 mb-4">Thử Lại</a>';
                        include '../view/dashboardview/notification/notification.php';
                    }
                    break;

                // -----------------Confirm date------------------------------
                case 'comfirmAccount':
                    $userName = $_POST['userName'];
                    $date = $_POST['date'];
                    $moth = $_POST['moth'];
                    $year = $_POST['year'];
                    $arr = array('username' => $userName);
                    $sql = "select id, username, day(timecreate), month(timecreate), year(timecreate) from users where username = :username";
                    $getAccount = new usercontrol("", "", "");
                    $infoAccount = $getAccount -> getuserByUsername($sql, $arr);
                    $idAcount = $infoAccount[0]['id'];
                    $userName = $infoAccount[0]['username'];
                    $dayCreate = $infoAccount[0]['day(timecreate)'];
                    $mothCreate = $infoAccount[0]['month(timecreate)'];
                    $yearCreate = $infoAccount[0]['year(timecreate)'];
                    if($date == $dayCreate && $moth == $mothCreate && $year == $yearCreate){
                        include '../view/dashboardview/user/updatepassword.php';
                    }else{
                        $result = '<h4 class="text-warning">Xác Nhận Thông Tin Chưa Đúng! Xin Vui Lòng Thử Lại</h4>';
                        $button_back = '<a href="../view/dashboardview/findaccount.php" class="btn btn-warning rounded-pill py-3 w-100 mb-4">Thử Lại</a>';
                        include '../view/dashboardview/notification/notification.php';
                    }
                    break;

                // -----------------update pass from user------------------------------
                case 'backAccount':
                    $id = $_POST['id'];
                    $username = $_POST['username'];
                    $password = md5($_POST['newPass']);
                    $table = 'users';
                    $arr = array('id' => $id, 'username' => $username, 'password' => $password);
                    $updateuser = new usercontrol("", "", "");
                    if ($updateuser->updateuser($table, $arr) == 'error') {
                        $this->shownotification(1, "Cập Nhật Mật Khẩu Không Thành Công! Xin Thử Lại");
                    } else {
                        $this->shownotification(1, "Cập Nhật Mật Khẩu Thành Công!");
                    }
                    break;

                // -----------------Get user id to update pass------------------------------
                case 'userChangePass':
                    $id = $_GET['id'];
                    $table = 'users';
                    $arr = array('id'=>$id);
                    $userInfor = new usercontrol("", "", "");
                    $infoAccount = $userInfor->getuser($table, $arr);
                    include '../view/dashboardview/user/updatepassword.php';
                    break;

                // -----------------login------------------------------
                case 'login':
                    $username = $_POST['username'];
                    $pass = md5($_POST['password']);
                    $role = (isset($_POST['roles']))? $_POST['roles']: 'users';
                    $user = new usercontrol("", "", "");
                    if($user->checkuser($username, $pass, $role)){
                        if ($role == 'admins'){
                            header("Location: ../controller/controller.php?action=showadmin");
                        }else{
                            header("Location: ../view/userview/index.php");
                        }
                    }else{
                        $result = 'Sai Tên Đăng Nhập Hoặc Mật Khẩu Xin Kiểm Tra Lại';
                        $this->shownotification(1, $result);
                    }
                    break; 
                
                // -----------------logout------------------------------
                case 'logout':
                    if (!isset($_SESSION)) {
                        session_start();
                    }
                    session_unset();
                    session_destroy();
                    header("Location: ../view/dashboardview/signin.php");
                    break;

                // -----------------show notification------------------------------
                case 'shownotification':
                    $notificationid = $_GET['notificationid'];
                    switch ($notificationid){
                        case 'addComplete':
                            $result = 'Đăng Ký Tài Khoản Thành Công!<br> Xin hãy ghi nhớ ngày/tháng/năm tạo tài khoản';
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
                            $this->shownotification(4, $result);
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
                            $this->shownotification(4, $result);
                            break;
                        case 'errorUpdateAdmin':
                            $result = 'Cập Nhật Thất Bại';
                            $this->shownotification(3, $result);
                            break;
                        case 'emptyProductName':
                            $result = 'Tên Sản Phẩm Không Được Để Trống';
                            $this->shownotification(4, $result);
                            break;        
                        case 'emptyPrice':
                            $result = 'Sản Phẩm Chưa Có Giá';
                            $this->shownotification(4, $result);
                            break;
                        case 'emptyImg':
                            $result = 'Sản Phẩm Chưa Có Hình Ảnh';
                            $this->shownotification(4, $result);
                            break;
                        default:
                            echo '';
                    }
                    break;
                default:
                    echo 'lỗi';
                    // header("Location: ../view/dashboardview/signin.php");
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
                    $button_back = '<a type="submit" href="../view/dashboardview/signin.php" class="btn btn-warning py-3 w-100 mb-4">Quay Lại Trang Đăng Nhập</a>';
                    include '../view/dashboardview/notification/notification.php';
                    break;
                case 2:
                    $result = '<h4 class="text-warning">'.$name.'</h4>';
                    $button_back = '<a type="submit" href="../view/dashboardview/signup.php" class="btn btn-warning py-3 w-100 mb-4">Quay Lại Trang Đăng Nhập</a>';
                    include '../view/dashboardview/notification/notification.php';
                    break;
                case 3:
                    $result = '<h3 class="text-warning">'.$name.'</h3>';
                    $button_back = '<a type="submit" href="../view/dashboardview/admin/admin.php" class="btn btn-warning rounded-pill py-3 px-5">Quay Lại Trang Đăng Ký</a>';
                    include '../view/dashboardview/notification/404.php';
                    break;
                case 4:
                    $result = '<h3 class="text-warning">'.$name.'</h3>';
                    $button_back = '<a type="submit" href="../controller/controller.php?action=showadmin" class="btn btn-warning rounded-pill py-3 px-5">Quay Lại Trang Quản Trị</a>';
                    include '../view/dashboardview/notification/404.php';
                    break;
                case 5:
                    $result = '<h4 class="text-warning">'.$name.'</h4>';
                    $button_back = '<a type="submit" href="../controller/controller.php?action=showadmin" class="btn btn-warning py-3 w-100 mb-4">Quay Lại Trang Đăng Nhập</a>';
                    include '../view/dashboardview/notification/notification.php';
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
                case '7':
                    return ' Đăng nhận xét thành công';
                    break;
                case '8':
                    return ' Xóa nhận xét thành công';
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
    }
    $control = new Controler($action);
