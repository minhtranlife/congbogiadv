<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyDvLt extends Model
{
    protected $table = 'companydvlt';
    protected $fillable = [
        'id',
        'tendoanhnghiep',
        'masothue',
        'diachitruso',
        'telephone',
        'fax',
        'tencosokinhdoanh',
        'loaihang',
        'diachikinhdoanh',
        'telephonekinhdoanh',
        'dknopthue',
        'chucdanh',
        'nguoiky',
        'diadanh'
    ];
}
