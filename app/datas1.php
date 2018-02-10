<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datas1 extends Model
{
    protected $table = 'data1';
    protected $fillable = ['jenisSepatu','ukuran','harga'];
    public $timestamps = true;
}
