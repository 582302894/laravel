@extends('basic.template1')


@section('template1')
<div class="container-fluid">
    <div class="col-md-8 col-md-offset-1 col-sm-12 col-xs-12 overflow-hidden p10 mb10" style="border: 1px solid rgba(191, 185, 185, 0.42);">
        <div class="text-center mb10">
            <span>
                {{$log->content['title']}}
            </span>
            <br/>
            <span>
                {{$log->content['source']}}
            </span>
        </div>
        <div class="col-md-12 col-xs-12 text-center">
            @foreach($log->other['sub_images'] as $key => $img)
            <img class="mb10 max-width-90" src="{{$img['url']}}"/>
            <br/>
            <span>
                {{$log->other['sub_abstracts'][$key]}}
            </span>
            <br/>
            @endforeach
        </div>
    </div>
    <div class="visible-md visible-lg col-md-2">
        @include('basic.time')
    </div>
</div>
@endsection
