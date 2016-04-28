<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KkGdvLt extends Model
{
    protected $table = 'kkgdvlt';
    protected $filltable = [
        'id',
        'ngaynhap',
        'masothue',
        'socv',
        'ngayad',
        'nhanhsso',
        'ngaynhan',
        'cvlk',
        'trangthai',
        'ghichu'
    ];
}
