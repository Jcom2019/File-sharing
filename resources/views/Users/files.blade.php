@extends('layouts.login_nav')

@section('contents')
<div class="row">
    <div class="col-md-6">
        <div id="received-files-header"><b>RECEIVED  FILES<b></div>
        <div id="received-files-body">
            {{-- <div class="row"> --}}
                {{-- <div class="col-md-8"> --}}
                    @foreach($file as $files)
                        @if($files->User==Auth::user()->name)
                            <div class="row" id="received-files">
                                <div class="col-md-8">
                                    {!!$files->file_name!!}
                                </div>
                                <div class="col-md-4">
                                    <a href="/storage/files/{{$files->file_name}}" download="{{$files->file_name}}">download</a><br>
                                </div>
                            </div>
                            <hr>
                        @endif
                    @endforeach
                {{-- </div> --}}
            {{-- </div> --}}
        </div>
    </div>
</div>
@endsection
