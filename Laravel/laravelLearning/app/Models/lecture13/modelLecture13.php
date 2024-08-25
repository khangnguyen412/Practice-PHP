<?php

namespace App\Models\lecture13;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\App;

/**
 * Eloquent relationships One to One
 */
class modelLecture13 extends Model
{
    protected $table = "Person";
    protected $primaryKey = 'PersonID';
    /**
     * Mặc định primary key là id
     * => nếu muốn thay đổi tên => set up lại $primaryKey cho class
     */
    protected $field = [
        'PersonID',
        'FirstName',
        'LastName',
        'DateOfBirth',
    ];
    public $timestamp = false;

    public function Passport()
    {
        return $this->hasOne('\App\Models\lecture13\modelLecture13_2', 'PersonID');
        /**
         * hasOne($related, $foreignKey);
         * $related: đường dẫn của [namespace hiện tại]\[class của bảng liên kết đối diện]\
         * $foreignKey: tên khóa ngoại của bảng
        */
    }
}
class modelLecture13_2 extends Model
{
    use HasFactory;
    protected $table = 'Passport';
    protected $field = [
        'PassportID',
        'PassportNumber',
        'IssueDate',
        'ExpiryDate',
        'PersonID',
    ];
    public $timestamp = false;

    public function Person ()
    {
        return $this->belongsTo('\App\Models\lecture13\modelLecture13');
    }
}


/**
 * Eloquent relationships One to Many
 */
class modelLecture13_3 extends Model
{
    use HasFactory;
    
}