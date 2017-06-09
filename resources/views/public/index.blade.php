<style type="text/css">
    .hide-box-img{
        width: 100%;
    position: absolute;
    padding:10px;

    height: 100%;
    background-color: rgba(60, 57, 57, 0.57);
    color: rgba(251, 251, 251, 0.89);
}
.spider-img{
    overflow: hidden;
    position: relative;
}
</style>
@extends('basic.template1')


@include('basic.music')
@section('template1')
<div class="container-fluid">
    <div class="col-md-8 col-md-offset-1 col-sm-12 col-xs-12 overflow-hidden">
        <!-- <div class="col-md-12 col-sm-12 col-xs-12 m0 p0" style="padding-left: 50%;">


            <img src="{{ asset('img/haohan_xingyun_yuzhou-0007.jpg') }}" height="300px" style="margin-left: -598px"/>

        </div> -->
        @foreach($pictures as $picture)
        <div class="col-md-3 col-sm-6 col-xs-6 m0 p10 position-relative overflow-hidden">
            @foreach($picture as $log)
            <div class="mb15 spider-img">
                <div class="hide-box-img hide">
                    <span>
                        {{ $log['content']['title'] }}
                    </span>
                    <a href="{{ url('index/picture',['key'=>$log['id']]) }}">
                        查看
                    </a>
                </div>
                <img class="m0 p0" src="{{ $log['content']['image_url'] }}" width="100%"/>
            </div>
            @endforeach
        </div>
        @endforeach
        <div class="col-md-12 col-xs-12">
            <div class="pull-center">
                {{ $logs->render() }}
            </div>
        </div>
    </div>
    <div class="visible-md visible-lg col-md-2">
        @include('basic.time')
    </div>
</div>
<script type="text/javascript">
    $(function(){
    $('.spider-img').hover(function(){
        if($(this).find('.hide-box-img').hasClass('hide')){
            $(this).find('.hide-box-img').removeClass('hide');
        }
    },function(){
        if(!$(this).find('.hide-box-img').hasClass('hide')){
            $(this).find('.hide-box-img').addClass('hide');
        }
    });
    $('.spider-img').click(function(){
        if($(this).find('.hide-box-img').hasClass('hide')){
            $(this).find('.hide-box-img').removeClass('hide');
        }
    });
})
</script>
@endsection
