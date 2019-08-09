<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Files;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Auth;

class UsersController extends Controller
{
    public function Login(){

    }

    public function Registered_Users(){

        $data = User::all();

        return view('Users.admin')->with('data',$data);

    }

    public function UploadFile(Request $request){

        $note = "";

        if($request->hasFile('filetosend')){

            $filenamewithext = $request->file('filetosend')->getClientOriginalName();
            $filename = Pathinfo($filenamewithext,PATHINFO_FILENAME);
            $extension =$request->file('filetosend')->getClientOriginalExtension();

            $filetosave = $filename.'_'.time() .'.'.$extension;

            $path = $request->file('filetosend')->StoreAs('public/Files',$filetosave);

                $file = new files;

                if($request->input('user')==""){
                    $note="***Please provide the recipient";
                    return view('Users.upload')->with('note',$note);
                }else{
                $file->User = $request->input('user');
                $file->file_name = $filetosave;
                $file->path= $path;
                $file->save();
                return redirect('Account');
                }
        }else{
            $note="***Please select a file";
            return view('Users.upload')->with('note',$note);
        }
    }

    public function viewReceivedFiles(){
            $file = files::all();
            return view('Users.files',compact('downloads'))->with('file',$file);
    }

    public function Download($filename){
            $file =files::find($filename);

            $downpath ="/storage/files/$file->file_name";

            return Storage::download($downpath, $file->file_name);

    }
}
