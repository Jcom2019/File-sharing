@extends('layouts.login_nav')
@section('contents')
    <div>
        <div class="row justify-content-left">
            <div class="col-md-4">
                @include("inc.user-dashboard")
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            <div class="form-group">
                                <form action="{!!action('UsersController@UploadFile')!!}" method="POST" enctype="multipart/form-data" files="true">
                                    @csrf
                                    <input type="file" name="filetosend"><br><br>
                                    <label>Send to:  </label>
                                    <input type="text" placeholder="enter username of the recipient" name="user"><br>
                                    <button class="btn bg-primary" style="color:white">send</button><br>
                                </form>
                                <form>
                                    <input type="hidden" name="_method" value="PUT">
                                </form>
                                <div>
                                    <p style="color:red"><b>{{$note}}</b></p>
                                </div>
                            </div>
                   </div>
                </div>
            </div>
            {{-- <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Welcome to Online File Sharing</div>
                    <div class="card-body">
                        <p>This is a web application that allows users to share files online</p>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
@endsection
