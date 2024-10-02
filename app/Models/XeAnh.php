<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class XeAnh extends Model
{
    protected $table = 'xe_anh';
    public $timestamps = false;
    protected $fillable = [
        'ma_xe',
        'ma_anh'
    ];
}
