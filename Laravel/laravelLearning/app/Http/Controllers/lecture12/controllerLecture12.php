<?php

namespace App\Http\Controllers\lecture12;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Gọi namespace của model
use App\Models\lecture12\modelLecture12;

class controllerLecture12 extends Controller
{
    public function testModelLecture12(){
        $getFunction = new modelLecture12; // Khai báo model trong controller 
        $getFirstModels = $getFunction->getFormModel(); // Gọi getInfo() từ models
        return $getFirstModels;
    }

    /**
     * - lấy tất cả dữ liệu từ database
     * cú pháp: 
     *      [tên class]::all();
     * - [tên class] là đối tượng model được gọi tới
     */
    public function getDatabaseModelLecture12(){
        $data = modelLecture12::all();
        return $data;
    }

    /**
     * - lấy data thông qua khóa chính
     * cú pháp: 
     *      [tên class]::find([id khóa chính]);
     * - [id khóa chính] là stt khóa chính trên db
     * * lưu ý: khai báo biến $primaryKey để xác định khóa chính cho bản
     */
    public function getLineDatabaseModelLecture12(){
        $data = modelLecture12::find(2);
        return $data;
    }
}
