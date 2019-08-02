@extends('layouts.login_nav')

@section('contents')
<div class="row">
    <div class="card col-md-4">
        <div class="card-header"></div>
        <div class="card-body">
            <div class="row">
                    @foreach($file as $files)
                            @if($files->User==Auth::user()->name)
                                <div class="col-md-4">
                                    {!!$files->file_name!!}
                                </div>
                                <div class="col-md-4">
                                <a href="" download="{{$files->file_name}}">Download</a>
                                </div>
                            @endif
                    @endforeach
                <div class="col-md-4">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
