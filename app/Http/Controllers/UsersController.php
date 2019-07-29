<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
    public function Login(){

    }

    public function Registered_Users(){

        $data = User::all();

        return view('Users.admin')->with('data',$data);

    }

    public function Upload(){
        return view('Users.upload');

    }
}
