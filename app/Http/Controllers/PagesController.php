<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function  Home(){
        return view('pages.Home');
    }

    public function About(){
        return view('pages.about');
    }

    public function Service(){
        return view('pages.Service');
    }
    public function Upload(){
        return view('Users.Upload');
    }
}
