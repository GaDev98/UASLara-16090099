<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TblRating extends Model
{
    protected $fillable = [
    	'id_all', 'id_user', 'rating'
    ];
}
