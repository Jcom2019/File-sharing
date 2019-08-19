<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Files;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

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
                $file->from =Auth::user()->name;
                $file->save();
                return redirect('Account');
                }
        }else{
            $note="***Please select a file";
            return view('Users.upload')->with('note',$note);
        }
    }

    public function viewReceivedFiles(){
            $file = files::where('User',Auth::user()->name)->get();
            return view('Users.files')->with('file',$file);
    }

    public function remove($filename){
            $newfile = files::where('file_name',$filename)->first();
            if($newfile != null){
                $newfile->delete();
                $file = files::where('User',Auth::user()->name)->get();
                return redirect('files')->with('file',$file);

            }else{
                $file = files::where('User',Auth::user()->name)->get();
                return redirect('files')->with('file',$file);

            }

    }
}
