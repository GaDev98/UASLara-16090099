<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GenresController extends Controller
{
    public function index()
    {
        return view('User.menu.manga.genremanga');
    } 
}
