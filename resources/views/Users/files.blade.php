@extends('layouts.login_nav')

@section('contents')
<div class="row">
    <div class="col-md-6">
        <div id="received-files-header"><b>RECEIVED  FILES<b></div>
        <div id="received-files-body">
                @if(count($file)>0)
                    @foreach($file as $files)
                            <div class="row" id="received-files">
                                <div class="col-md-6">
                                <small><i>From:{{$files->from}}</i><br><i>On:{{$files->created_at}}</i></small><br>
                                    {!!$files->file_name!!}
                                </div>
                                <div class="col-md-2">
                                    <a href="/storage/files/{{$files->file_name}}" download="{{$files->file_name}}">download</a><br>
                                </div>
                                <div class="col-md-2">
                                    <a href="{{route('delete',['filename'=>$files->file_name])}}">Delete</a>
                                </div>
                            </div>
                            <hr>
                    @endforeach

                @endif

                @if(count($file) == 0)
                    <div class="row">
                        <div class="col-md-12">
                            {{ 'No Received files' }}
                        </div>
                    </div>
                    <hr>
                @endif
        </div>
    </div>
</div>
@endsection
