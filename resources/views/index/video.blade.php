
@extends('basic.template1')


@section('template1')
<div class="container-fluid">
    <div class="col-md-8 col-md-offset-1 col-sm-12 col-xs-12 overflow-hidden">
       	
    </div>
    <div class="visible-md visible-lg col-md-2">
        @include('basic.time')
    </div>
</div>

@endsection
