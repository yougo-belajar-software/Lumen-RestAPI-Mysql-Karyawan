<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Support\Facades\DB;

class Karyawan extends Model
{

    protected $fillable = [
        '_id',
        'nama',
        'email',
        'lamaKerja',
        'gender'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
    
}
