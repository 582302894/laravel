@extends('basic.template1')

@section('template1')
<div class="container-fluid">
    <div class="row">
        <form action="" class="col-md-6 col-md-offset-3" method="POST" role="form">
            @include('basic.message')
            {{ csrf_field() }}
            <legend>
                is me
            </legend>
            <div class="form-group">
                <label class="control-label" for="password">
                    password
                </label>
                <input class="form-control" id="password" name="password" placeholder="password" type="text" value="{{ old('password') }}"/>
            </div>
            <button class="btn btn-primary " type="confirm">
                confirm
            </button>
        </form>
    </div>
</div>
@endsection
