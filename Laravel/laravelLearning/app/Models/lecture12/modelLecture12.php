<?php

namespace App\Models\lecture12; // Khi move file tới subfolder-> sửa lại namespace

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelLecture12 extends Model // Khi rename file -> sửa lại tên class
{
    use HasFactory;

    /**
     * truy xuất database với các biến mặc định
     * 
     */ 
    protected $table = 'account';
    protected $primaryKey = 'ACCOUNT_ID';
    protected $fillable = ['ACCOUNT_ID', 'AVAIL_BALANCE', 'CLOSE_DATE'];
    public $timestamps = false;

    public function getFormModel(){
        return 'call from  model';
    }
}
