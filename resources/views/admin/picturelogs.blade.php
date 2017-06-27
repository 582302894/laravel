@extends('basic.template2')
@section('template2')


@if(!empty($dirs))
	@foreach($dirs as $dir)
		<a href="{{ url('admin/picturelogs/'.implode('-',array_filter([$time,$dir]))) }}">{{$dir}}</a>
	@endforeach

@else
	@foreach($files as $file)
		<a href="{{ url('admin/picturelog/'.str_replace('/','-',$basicdir.'/'.$file)) }}">{{date('H:i:s',$file)}}</a><br>
	@endforeach
@endif

@endsection
