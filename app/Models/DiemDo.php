<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiemDo extends Model
{
    protected $table = 'diem_do';
    public $timestamps = false;
    protected $fillable = [
        'ten_dd'
    ];

    public function tuyenDiemDo()
    {
        return $this->belongsTo(TuyenDiemDo::class);
    }
}
