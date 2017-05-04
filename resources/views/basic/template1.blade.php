@extends('basic.basic')

@section('content')
	
	@include('basic.header')
	@yield('template1')
	@include('basic.footer')
@endsection
