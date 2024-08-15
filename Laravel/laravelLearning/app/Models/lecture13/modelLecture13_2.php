<?php

namespace App\Models\lecture13;

use App\Models\lecture12\modelLecture12;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function user ():BelongsTo
    {
        return $this->belongsTo(modelLecture13::class);
    }
}
