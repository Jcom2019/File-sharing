@extends('layouts.login_nav')
@section('contents')
<div>
    <div class="row justify-content-left">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!<br>
                    <form action = "{!!action('PagesController@Upload')!!}" method="POST">
                        @csrf
                        <button class="btn btn-primary">SEND FILES</button>
                    </form>
                    <form action = "{!!action('UsersController@viewReceivedFiles')!!}" method="POST">
                            @csrf
                            <br><button class="btn btn-primary">VIEW RECEIVED FILES</button>
                    </form>
                    <form>
                        <input type="hidden" name="_method" value="PUT">
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Welcome to Online File Sharing</div>
                <div class="card-body">
                    <p>This is a web application that allows users to share files online</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
