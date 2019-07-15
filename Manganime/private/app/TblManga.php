<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class TblManga extends Model
{

    use SoftDeletes;

    protected $fillable = [

    	'judul','sinopsis','genre','musim','tanggal_rilis','status','pengarang','skor','gambar', 'deleted_at'
    ];

   	protected $dates = ['deleted_at'];
}
