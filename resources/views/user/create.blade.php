@extends('basic.template1')


@section('template1')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
			@include('basic.message')
            <form class="form-horizontal" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">
                        姓名
                    </label>
                    <div class="col-sm-10">
                        <input class="form-control" id="name" name="name" placeholder="name" type="text" value="{{ $user->name }}"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="age">
                        年龄
                    </label>
                    <div class="col-sm-10">
                        <input class="form-control" id="age" name="age" placeholder="age" type="number" value="{{ $user->age }}"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="radio">
                            <label>
                                <input {{ $user->sex == 1 ? "checked" : "" }} name="sex" type="radio" value="1"/>
                                男
                            </label>
                            <label>
                                <input {{ $user->sex == 2 ? "checked" : "" }} name="sex" type="radio" value="2"/>
                                女
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button class="btn btn-default" type="submit">
                            添加
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
