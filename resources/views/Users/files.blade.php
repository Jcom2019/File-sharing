@extends('layouts.login_nav')

@section('contents')
<div class="row">
    <div class="card col-md-6">
        <div class="card-header"><b>Received files<b></div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-8">
                    @foreach($file as $files)
                        @if($files->User==Auth::user()->name)
                            <div class="row" style="background-color:darkgray; color:white">
                                <div class="col-md-8">
                                    {!!$files->file_name!!}
                                </div>
                                <div class="col-md-4">
                                    <a href="/storage/files/{{$files->file_name}}" download="{{$files->file_name}}"><img src="/storage/png/data-transfer-download-2x.png"></a><br>
                                </div>
                            </div>
                            <hr>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
