<?php

namespace App\Models\lecture13;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class modelLecture13 extends Model
{
    protected $table = "Person";
    protected $field = [
        'PersonID',
        'FirstName',
        'LastName',
        'DateOfBirth',
    ];
    public $timestamp = false;

    public function Passport():HasOne
    {
        return $this->hasOne(modelLecture13_2::class);
    }
}
