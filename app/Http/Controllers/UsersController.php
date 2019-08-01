<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Files;
use Illuminate\Support\Facades\Redirect;

class UsersController extends Controller
{
    public function Login(){

    }

    public function Registered_Users(){

        $data = User::all();

        return view('Users.admin')->with('data',$data);

    }

    public function UploadFile(Request $request){

        $data="No file to send";

        if($request->hasFile('filetosend')){

            $filenamewithext = $request->file('filetosend')->getClientOriginalName();
            $filename = Pathinfo($filenamewithext,PATHINFO_FILENAME);
            $extension =$request->file('filetosend')->getClientOriginalExtension();

            $filetosave = $filename.'_'.time() .'.'.$extension;

            $path = $request->file('filetosend')->StoreAs('public/Files',$filetosave);

                $file = new files;

                $file->User = $request->input('user');
                $file->file_name = $filetosave;
                $file->save();
                return redirect('Account');
        }else{

            return redirect('Users.upload');
        }



    }
}
