@extends('basic.template1')
@section('template1')
<link rel="stylesheet" type="text/css" href="{{ asset('js/datetimepicker/bootstrap-datetimepicker.min.css') }}" />
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            @include('basic.message')
            <form class="form-horizontal" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <img src="{{ old('photo',$user->photo) }}" alt="" class="col-sm-3 col-sm-offset-2 col-xs-4 col-xs-offset-4 default-head upload-img" for-id="hidden_img" />
                    <input type="hidden" name="photo" value="{{old('photo',$user->photo)}}"  id="hidden_img" onchange="change_img($(this))"/>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">
                        姓名
                    </label>
                    <div class="col-sm-10">
                        <input class="form-control" id="name" name="name" placeholder="姓名" type="text" value="{{ old('name',$user->name ) }}"/>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="age">
                        年龄
                    </label>
                    <div class="col-sm-10">
                        <input class="form-control" id="age" name="age" placeholder="年龄" type="number" value="{{ old('age',$user->age) }}"/>
                    </div>
                </div>

                 <div class="form-group">
                    <label class="col-sm-2 control-label" for="age">
                        出生日期
                    </label>
                    <div class="col-sm-10">
                        <input size="16" type="text" value="{{ $user->year==0?date('Y-m-d',strtotime('-18 year')):$user->year.'-'.$user->month.'-'.$user->day }}" readonly class="form_datetime form-control" data-date-format="yyyy-mm-dd" size="14" name="birth">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="radio">
                            <label>
                                <input {{ $user->sex == 0 ? "checked" : "" }} name="sex" type="radio" value="0"/>
                                未选择
                            </label>
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
                @if($mailAuth!=null)
                     <div class="form-group">
                        <label class="col-sm-2 control-label" for="email">
                            邮件
                        </label>
                        <div class="col-sm-10">
                           <input class="form-control" id="email"  type="text" readonly  value="{{ $mailAuth->account }}"/>
                        </div>
                    </div>
                @else
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="email">
                            邮件
                        </label>
                        <div class="col-sm-10">
                           <input class="form-control" id="email" name="email" placeholder="填写邮件后可用邮件作为帐号登录" type="text" value="{{ old('email') }}"/>
                        </div>
                        <div class="col-sm-10 col-sm-offset-2 mt10" for="email">
                            @include('emails.sendcode')
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="code">
                            验证码
                        </label>
                        <div class="col-sm-10">
                           <input class="form-control" id="code" name="code" placeholder="验证码" type="number" value="{{ old('code') }}"/>
                        </div>
                    </div>
                @endif
              

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button class="btn btn-default" type="submit">
                            提交
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- <script type="text/javascript" src="{{ asset('js/jquery-1.8.3.min.js') }}" charset="UTF-8"></script> -->
<!-- <script type="text/javascript" src="{{ asset('js/datetimepicker/bootstrap-datetimepicker.zh-CN.js') }}" charset="UTF-8"></script> -->
<script type="text/javascript" src="{{ asset('js/datetimepicker/bootstrap-datetimepicker.js') }}" charset="UTF-8"></script>
<script type="text/javascript">
$(function(){
    $(".form_datetime").datetimepicker({format: 'yyyy-m-d',autoclose:true,minView:'month' ,language:  'CN', });
})

</script>
@endsection
