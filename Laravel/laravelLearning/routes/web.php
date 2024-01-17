<?php

use Illuminate\Support\Facades\Route; // thư viện nhận route
use Illuminate\Http\Request; // thư viện nhận tham số cho form post
use Illuminate\Support\Facades\DB; // add thư viện kết nối DB vào

// gọi thư viện
use App\Http\Controllers\lecture04\testRouteResource; //gọi controller từ lecture04\testRouteResource
use App\Http\Controllers\lecture09\controllerLecture09; // gọi controller cho lecture09

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
Route::get('/helloWorld', function () {
    return 'đây là khởi đầu quá trinh tự học framework của Khang';
});
// gọi tới đường dẫn '/' chính sẽ được chuyển tới views/welcome.blade.php
Route::get('/', function () {
    return view('welcome');
});
// gọi tới đường dẫn '/testGetRoute' chính sẽ được chuyển tới views/lecture03/testGetRoute.blade.php
Route::get('/testRouteGet', function () {
    return view('lecture03.testRouteGet');
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
// tạo 1 form nhập dữ liệu có method post tại file views/lecture03/getFormPost.blade.php
// trong form sẽ có phương thức post vào gọi tới url /testPostRoute
Route::get('/getPostForm', function () {
    return view('lecture03.getPostForm');
});
// gọi tới đường dẫn '/testPostRoute' sẽ thực hiện 1 function ở phía sau nhưng sử dụng post
Route::post('/testRoutePost', function (Request $arr) {
    $name = $arr->input('name');
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
    return view('lecture03.getMatchForm');
});
Route::match(['get', 'post'], '/testRouteMatch', function (Request $arr) {
    $param1 = $arr->input('name');
    if (isset($param1)) {
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
 * 
 * nhập url /getRouteResource để nhận method index()
 * nhập url /getRouteResource/create để nhận method create()
 * nhập url /getRouteResource/ để nhận method store()
 * nhập url /getRouteResource/{something} để nhận method show()
 * nhập url /getRouteResource/{something}/edit để nhận method edit()
 * nhập url /getRouteResource/{something} để nhận method update()
 * nhập url /getRouteResource/{something} để nhận method destroy()
 */
Route::resource('/getRouteResource', testRouteResource::class);
// ngoài ra có thể dùng tùy biến [only] để lọc các method()
// chỉ nhận 3 method create(), show(). edit()
Route::resource('/getRouteResourceOnly', testRouteResource::class, ['only' => ['create', 'show', 'edit']]);
// cấm method index(), gọi vào sẽ xuất lỗi
Route::resource('/getRouteResourceExcept', testRouteResource::class, ['except' => ['index']]);
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
        return view("lecture04.testRouteGroup");
    });
});
// cách 2
Route::group(['prefix' => 'testRouteGroup2'], function () {
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
/**
 * -View Trong Laravel thì bắt buộc phải được nằm trong thư mục resources/views
 * -Đuôi của file view trong laravel có định dạng là .blade.php (blade template)
 * -Hoặc file .php, nếu blade.php thì phải dùng cú pháp của blade template
 * 
 * Ví dụ ở đường dẫn: resources/views/lecture06/viewTemplate.blade.php
 * 
 * Cú pháp: view('url', 'param');
 * Trong đó
 * - 'url' là đường dẫn tới view
 * - 'param' là tham số truyền vào view (nếu có)
 */
// gọi view trong route
Route::get('testViewTemplate', function () {
    return view('lecture06.ViewTemplate');
});
// truyền biến vào view có file .php
Route::get('testViewTemplatePhpFile/{param}', function ($param) {
    return view('lecture06.ViewTemplatePhp', ['param' => $param]);
});
// tạo view dùng chung (trong app/Providers/AppServiceProvider.php.)


/** 
 * Dùng compact() truyền dữ liệu cho view
 * 
 * Cú Pháp:     view('url', compact('param'));
 * Trong đó 
 * - 'url' là đường dẫn tới view
 * - param là đối số truyền vào
 */
Route::get('testViewTemplateUseCompact/{param}', function ($param) {
    return view("lecture06.viewTemplateUseCompact", compact('param'));
});


/** 
 * Dùng with() truyền dữ liệu cho view
 * 
 * Cú Pháp:     view('url')->with('key', $value);
 * Trong đó 
 * - 'url' là đường dẫn tới view
 * - 'key' là tên của đối số được truyền
 * - $value là giá trì của đối số
 */
Route::get('testViewTemplateUseWith/{param}', function ($param) {
    return view("lecture06.viewTemplateUseWith")->with('param', $param);
});


/** 
 * Dùng mãng truyền dữ liệu cho view
 * 
 * Cú Pháp:     view('url', ['key' => $value]);
 * Trong đó 
 * - 'url' là đường dẫn tới view
 * - 'key' là tên của đối số được truyền
 * - $value là giá trì của đối số
 */
Route::get('testViewTemplateUseArray/{param}', function ($param) {
    return view("lecture06.viewTemplateUseArray", ['param' => $param]);
});


/******************* lecture 7: blade template ****************************/
/**
 * blade template: là một view trong laravel đặt trong resources/views có đuôi file .blade.php 
 * 
 * sử dung blade template
 * Cú pháp:     {{ $variable }}
 * Trong đó
 * - $variable là biến được truyền vào
 */
//  truyền tham số /{param} vào view template
Route::get('testBladeTemplate/{param}', function ($param) {
    return view("lecture07.testViewEngine", ["param" => $param]);
});
// câu lệnh vòng lặp trong blade template
Route::get('testBladeTemplateWithLoop/', function () {
    return view("lecture07.testViewEngineLoop");
});
// câu lệnh điều kiện trong blade template
Route::get('testBladeTemplateWithCondition/', function () {
    return view("lecture07.testViewEngineCondition");
});


/******************* lecture 8: blade template (part2) ****************************/
/**
 * Template kế thừa (Template inheritance)
 * ghi chứ bài học trong:
 * - resources/views/lecture08/testViewTemplateInheritance.blade.php
 * - resources/views/lecture08/parentTemplate.blade.php
 */
Route::get('testBladeTemplateInheritance/', function () {
    return view("lecture08.testViewTemplateInheritance");
});


/******************* lecture 9: controller trong laravel ****************************/
/**
 * tạo thư mục phụ trong controler:
 * - trường hợp có file sẵn cấu trúc lại:
 *      + tạo sub folder và kéo file vào
 *      + tại file này khai báo lại đường dẫn, vd: App\Http\Controllers\lecture09\adminController;
 *      + trong file đc kéo vào sub folder, khai báo lại 2 đường dẫn, ví dụ:
 *          namespace App\Http\Controllers\lecture09;
 *          use App\Http\Controllers\Controller;
 * 
 * - trường hợp chứ có file dùng lệnh: php artisan make:controller [tên sub folder]/[tên controller]
 * 
 * Cú pháp gọi controller:      [controllerClass::class, "function"]
 * Trong đó
 * - controllerClass lớp đối tượng được khai báo
 * - function là hàm bên trong lớp đói tượng đó
 */
// gọi tới controller có đường dẫn app/http/lecture09/lecture09.php và thực hiện hàm index
Route::get('/callControler', [controllerLecture09::class, 'index']);
// gọi tới hàm addDB trong controller 
Route::get('/dataToControler', [controllerLecture09::class, 'addDB']);
// truyền tham số {param} cho vào controler
Route::get('/paramToController/{param}/', [controllerLecture09::class, 'getName']);
// truyền tham số {param} cho vào controler kèm theo điều kiện regex
// điều kiện sai => kết quả NOT FOUND
Route::get('/paramToControllerWithCondition/{param}/', [controllerLecture09::class, 'getName'])->where(['param' => '[a-zA-Z]+']);


/******************* lecture 10: query builder trong laravel ****************************/
/**
 * cấu hình lại kết nối csdl trong file .env các dòng sau: 
 * DB_CONNECTION=mysql
 * DB_HOST= [địa chỉ kết tới csdl]
 * DB_PORT= [cổng]
 * DB_DATABASE= [tên csdl]
 * DB_USERNAME= [tên đăng nhập]
 * DB_PASSWORD= [mật khẩu]
 * Trong đó
 * - [địa chỉ kết tới csdl] là máy chủ kết nối tới vào csdl (localhost = 127.0.0.1)
 * - [cổng] cổng kết nối tới csdl (mặc định là port 3306)
 * - [tên csdl] là tên database
 * - [tên đăng nhập] tên tài khoản để đăng nhập vào csdl 
 * - [mật khẩu] mật khẩu để đăng nhập vào csdl 
 */
/**
 * - Lấy bảng csdl và hiển thị ra
 * Cú pháp:  DB::table('[table name]')->get();
 * Trong đó: [table name] là tên bảng trong csdl
 */
Route::get('/getDB', function () {
    // lấy bản test
    $data = DB::table('test')->get();

    // hiển thị data ra màn hình
    header('Content-Type: application/json');
    echo "<pre>"; 
    echo json_encode($data, JSON_PRETTY_PRINT);
    echo "</pre>";
    
    // hoặc
    // echo "<pre>"; 
    // var_dump($data);
    // echo "</pre>"; 
});


/**
 * - lấy cột trong bảng
 * Cú pháp: DB::table('[table name]')->select('[columnfirst]', '[columnsecond]')->get();
 * Trong đó: 
 * - [table name] là tên bảng trong csdl
 * - [columnfirst], [columnsecond] các cột được truy vấn
 */
Route::get('/getColDB', function () {
    $data = DB::table('test')->select('fullName')->get();
    
    // hiển thị data ra màn hình
    header('Content-Type: application/json');
    echo "<pre>"; 
    echo json_encode($data, JSON_PRETTY_PRINT);
    echo "</pre>";
});


/**
 * - lấy cột trong bảng với điều kiện
 * Cú pháp: DB::table('[table name]')->where('[columnfirst]', '[condition]', '[columnsecond]')->get();
 * Trong đó: 
 * - [table name] là tên bảng trong csdl
 * - [columnfirst], [columnsecond] các cột được truy vấn
 * - [condition] là điều kiện để chọn lọc với các toán tử > < <> lần lượt là lớn, bé, bằng 
 * 
 * * Lưu ý:
 * - nếu không có toán tử mặc định sẽ chọn lọc kết quả = với chuỗi phía sau
 * - thứ tự của câu lệnh sql (table -> select -> where -> get)
 */
 Route::get('/getDBWithCondition', function () {
    $data = DB::table('test')->where('fullName', 'khang')->get();
    
    // hiển thị data ra màn hình
    header('Content-Type: application/json');
    echo "<pre>"; 
    echo json_encode($data, JSON_PRETTY_PRINT);
    echo "</pre>";
});

/**
 * - lấy cột trong bảng với điều kiện lồng
 * Cú pháp: DB::table('[table name]')->where('[columnfirst]', '[condition]', '[columnsecond]')->orWhere(...)->get();
 * Trong đó: 
 * - [table name] là tên bảng trong csdl
 * - [columnfirst], [columnsecond] các cột được truy vấn
 * - [condition] là điều kiện để chọn lọc với các toán tử > < <> lần lượt là lớn, bé, bằng 
 * 
 * * Lưu ý:
 * - nếu không có toán tử mặc định sẽ chọn lọc kết quả = với chuỗi phía sau
 * - thứ tự của câu lệnh sql (table -> select -> where -> get)
 */



Route::redirect('/old-url', '/new-url');

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
