@extends('layouts.login_nav')
@section('contents')
<div>
    <div class="row justify-content-left">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header"><b>User Dashboard</b></div>

                <div class="card-body">
                    <form action = "{!!action('PagesController@Upload')!!}" method="POST">
                        @csrf
                        <button class="btn btn-primary">SEND FILES</button>
                    </form>
                    <form action = "{!!action('UsersController@viewReceivedFiles')!!}" method="POST">
                            @csrf
                    <br><button class="btn btn-primary">VIEW RECEIVED FILES</button>
                            <input type="hidden" name="_method" value="GET">
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
