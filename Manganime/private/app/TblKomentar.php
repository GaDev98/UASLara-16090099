<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TblKomentar extends Model
{
	use SoftDeletes;

    protected $fillable = [

    	'nama','dikomentar','jenis_komentar','tgl_komen','komentar', 'gambar','deleted_at'
    ];
    protected $dates = ['deleted_at'];

}
