<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\testRouteResource; //gọi controller testRouteResource
use Illuminate\Support\Facades\Route; // thư viện nhận route
use Illuminate\Http\Request; // thư viện nhận tham số cho form post

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// view nằm trong đường dẫn: resources/views
// controller nằm trong đường dẫn: app/http


/******************* lecture 3: route (part1) ****************************/
/**
 * Các Loại Route:
 * Route::get
 * Route::post 
 * Route::put
 * Route::delete
 * Route::match         kết hợp nhiều phương phức như POST,GET,PUT,..
 * Route::any           nhận tất cả các phương thức.
 * Route::group         tạo ra các nhóm route.
 * Route::controller    gọi đến controller tương ứng mà chúng ta tự định.
 * Route::resource      sử dụng với resource controller.
 */

/**
 * Route::get
 * Cú pháp:     Route::get('url', $action);
 * Trong Đó:
 * -> 'url' là đường dẫn trên web
 * -> $action là một câu lệnh hoặc hàm nào đó khi được gọi tới đường dẫn trùng với $url
 */

// gọi tới đường dẫn '/helloWorld' sẽ thực hiện 1 function ở phía sau
Route::get('/helloWorld', function(){
    return 'đây là khởi đầu quá trinh tự học framework của Khang';
});
// gọi tới đường dẫn '/' chính sẽ được chuyển tới views/welcome.blade.php
Route::get('/', function () { 
    return view('welcome');
});
// gọi tới đường dẫn '/testGetRoute' chính sẽ được chuyển tới views/testGetRoute.blade.php
Route::get('/testRouteGet', function () { 
    return view('testRouteGet');
});

/**
 * Route::post
 * tương tự như get nhưng khác nhau:
 * - get có thể gọi trực tiếp từ url còn post chỉ đc gọi form
 * 
 * Cú pháp:     Route::post('url', $action);
 * Trong Đó:
 * -> 'url' là đường dẫn trên web
 * -> $action là một câu lệnh hoặc hàm nào đó khi được gọi tới đường dẫn trùng với $url
 */

// tạo 1 form nhập dữ liệu có method post tại file views/getFormPost.blade.php
// trong form sẽ có phương thức post vào gọi tới url /testPostRoute
Route::get('/getPostForm', function () {
    return view('getPostForm');
});

// gọi tới đường dẫn '/testPostRoute' sẽ thực hiện 1 function ở phía sau nhưng sử dụng post
Route::post('/testRoutePost', function( Request $arr){
    $name = $arr -> input('name');
    return "test method post của laravel và post có tham số là $name";
});
// để post sử dụng thư viện Request và nhận tham số của $arr

/**
 * Route::match
 * Chấp nhập tất cả phương thức được khai báo
 * 
 * Cú pháp:     Route::match([method], 'url', $action);
 * Trong đó:
 * -> [method] là phương thức có thể sử dụng trong route này
 * -> 'url' là đường dẫn trên web
 * -> $action là một câu lệnh hoặc hàm nào đó khi được gọi tới đường dẫn trùng với $url
 */

Route::get('/getMatchForm', function () {
    return view('getMatchForm');
});
Route::match(['get', 'post'], '/testRouteMatch', function (Request $arr) {
    $param1 = $arr -> input('name');
    if(isset($param1)){
        return "đã gọi vào thành công method match và kèm theo tham số $param1";
    }
    return 'đã gọi vào thành công method match';
});
// khi gọi trực tiếp tới url /testMatchRoute trên thanh url của gg, match nhận method get
// khi gọi nhập số từ url /getFormMatch và submit, match nhận method post

/**
 * Route::any
 * Chấp nhập tất cả phương thức
 * 
 * Cú pháp:     Route::any('url', $action);
 * Trong đó:
 * -> 'url' là đường dẫn trên web
 * -> $action là một câu lệnh hoặc hàm nào đó khi được gọi tới đường dẫn trùng với $url
 */

Route::any('/testRouteAny', function () { 
    return 'đây là route any';
});


/******************* lecture 4: route (part2) ****************************/
/**
 * Route::resource()
 * Là một chức năng giúp chúng ta xây dựng RESTful(websevice) một cách nhanh chóng.
 * 
 * Cú pháp:     Route::resource('url', 'tencontroller', $tuybien);
 * Trong đó:
 * -> 'url' là đường dẫn trên web
 * -> 'tencontroller' là tên của controller (không đi kèm đuôi .php).
 * -> $tuybien là các tùy biến phương thức được sử dụng trong Route, Tham số này có thể bỏ qua nếu không cần thiết.
 * 
 * * lưu ý: Để sử dụng được Route::resource() thì cần phải tạo ra một RESTful Controller và import ctrler vào đây
 * 
 * Để dùng route::resource tạo restful ta dùng lệnh:    php artisan make:controller TenController --resource
 * Trong đó: 
 * -> TenController là tên của controller bạn muốn tạo
 */

// nhập url /getRouteResource để nhận method index()
// nhập url /getRouteResource/create để nhận method create()
// nhập url /getRouteResource/ để nhận method store()
// nhập url /getRouteResource/{something} để nhận method show()
// nhập url /getRouteResource/{something}/edit để nhận method edit()
// nhập url /getRouteResource/{something} để nhận method update()
// nhập url /getRouteResource/{something} để nhận method destroy()

Route::resource('/getRouteResource', testRouteResource::class);
// ngoài ra có thể dùng tùy biến [only] để lọc các method()
// chỉ nhận 3 method create(), show(). edit()
Route::resource('/getRouteResourceOnly', testRouteResource::class, ['only' => [ 'create', 'show', 'edit']]);
// cấm method index(), gọi vào sẽ xuất lỗi
Route::resource('/getRouteResourceExcept', testRouteResource::class, ['except' => [ 'index']]);
// truyền tham số thêm vào route resource
// cách truyền url /getRouteResourceWithParam/{param1}/author/{param2}
Route::resource('/getRouteResourceWithParam.author', testRouteResource::class);

/**
 * Route::group()
 * Là một cách để nhóm các route lại với nhau, giúp bạn tổ chức mã nguồn một cách gọn gàng và cấu trúc.
 * Điều này giúp quản lý và duy trì các route dễ dàng hơn, đặc biệt là khi bạn có nhiều route liên quan đến nhau.
 * Ví dụ: admin/...
 * 
 * Cú pháp:     Route::group($attr, $handle);
 * Trong đó
 * - $attr là các mãng thành phần điều kiện
 * - $handle là các câu lệnh hoặc hàm thực hiện chức năng cho route đó
 */

// sử dụng route::group()
// cách 1
Route::prefix('testRouteGroup')->group(function () {
    Route::get('get', function () {
        return view("testRouteGroup");
    });
});
// cách 2
Route::group(['prefix' => 'testRouteGroup2'],function () {
    Route::get('get', function () {
        return view("testRouteGroup");
    });
});


/******************* lecture 5: route (part3) ****************************/
// truyền biến vào route
Route::get('/putArgInRoute/{param}', function ($param) { 
    return view('lecture05.putArgInRoute', ['param' => $param]); 
    /**
     * {param} là tham số được truyền vào route
     * truyền thêm tham số name trong mãng ['name' => $name] vào view
     * nếu view có đường dẫn / thì dùng dấu . để phân cách 
     */
});

// truyền nhiều tham số vào route
Route::get('/putArgsInRoute/{param1}/{param2}', function ($param1, $param2) { 
    return view('lecture05.putArgsInRoute', ['param1' => $param1, "param2" => $param2]); 
});

// truyền biến vào route có điều kiện, nếu đk không đúng => not found
Route::get('/putArgsInRouteWithCondition/{param1}/{param2}', function ($param1, $param2) { 
    return view('lecture05.putArgsInRoute', ['param1' => $param1, "param2" => $param2]); 
})->where(['param1' => '[a-z]+', 'param2' => '[0-9]+']);


/******************* lecture 6: view ****************************/



// truyền tham số /{name} vào views/admin/hello.blade.php qua tham số admin.hello

Route::get('/callview/data', [adminController::class, 'index']); 
// gọi tới controller có đường dẫn app/http/adminController.php và thực hiện hàm index

Route::get('/callview/add', [adminController::class, 'addDB']);
Route::get('/callview', function () {
    return view('test2');
});
Route::get('/insertuser/{id}/', [adminController::class, 'index']);
// Route::get('info/{name}/{age}', 'adminController@index')->where(['name' => '[a-zA-Z]+', 'age' => '[0-9]+']);
// Route::get('/info', [adminController::class, 'index']);
Route::get('/info/{name}/{age}', [adminController::class, 'index'])->where(['name' => '[a-zA-Z]+', 'age' => '[0-9]+']);
Route::get('/info2/{name}/{age}', [adminController::class, 'addDB'])->where(['name' => '[a-zA-Z]+', 'age' => '[0-9]+']);
Route::redirect('/old-url', '/new-url');

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
