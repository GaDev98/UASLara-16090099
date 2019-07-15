<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TblKomik extends Model
{
	use SoftDeletes;
    protected $fillable = [

    	'judul','sinopsis','buatan','genre','tanggal_rilis','pengarang','skor','gambar', 'deleted_at'
    ];
    protected $dates = ['deleted_at'];
}
