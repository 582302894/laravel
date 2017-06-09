
@extends('basic.template1')


@section('template1')
<div class="container-fluid">
    <div class="col-md-8 col-md-offset-1 col-sm-12 col-xs-12 overflow-hidden">
        @foreach($videos as $key => $video)
            <a href="http://www.toutiao.com/{{ $video['source_url'] }}" class="">{{ $video['title'] }}</a>
            <!-- <iframe src="http://www.toutiao.com/{{ $video['source_url'] }}" class="spider-ifram" id="spider-ifram-{{ $key }}"></iframe> -->
            <iframe src="http://www.baidu.com" class="spider-ifram" id="spider-ifram-{{ $key }}"></iframe>
            <br/>
        @endforeach
    </div>
    <div class="visible-md visible-lg col-md-2">
        @include('basic.time')
    </div>
</div>
<script type="text/javascript">
var i=1;
$('.spider-ifram:first').each(function(){
    $(this).load(function(){
        var html=$(window.frames["spider-ifram-0"].document);
        console.log(html);
    });
});
</script>
@endsection
