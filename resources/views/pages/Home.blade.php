@extends('layouts.app')
@section('contents')
    <div class="row">
        <div class="col-md-4" id="welcome-note">
            <h3 class="text-center"><b>Welcome to Online File Sharing</b></h3>
            <hr>
            <p >This is a web application that allows users to share files online.
                You can register by clicking on the <b>register</b> button on the right hand side above.
                After registering you will be able to send and receive files from other registered users.</p><br>
            <p><b>Online file sharing</b> simplifies the process of sharing files between desktop or laptop users.
                with online file sharing you can share any type of file with your registered friends.
            </p>
        </div>
        <div class="col-md-8"><img src="/storage/png/zip_files.png" width="500px" height="400px" id="image"></div>
    </div>
@endsection
