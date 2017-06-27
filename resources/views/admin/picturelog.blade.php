@extends('basic.template2')
@section('template2')

@foreach($dates as $date)
	{{$date['0']}}
	<br>
	{{$date['1']}}
	<br>
	<img src="{{$date['2']}}" />
	<br>
	<hr>

@endforeach

@endsection
