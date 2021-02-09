<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function home(){
        return view('index');
    }

    public function about(){
        return view('about');
    }
}
