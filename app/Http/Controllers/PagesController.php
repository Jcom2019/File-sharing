<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth;

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
        // $user=Auth::user()->name;
        $note = "";
        return view('Users.Upload')->with('note',$note);
    }
}
