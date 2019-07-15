<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TblLog extends Model
{
    protected $fillable = [

    	'id_user','username','aktivitas','tanggal'
    ];
}
