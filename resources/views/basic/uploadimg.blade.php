<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<link href="{{ asset('css/bootstrap/dist/css/bootstrap.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('css/jquery.Jcrop.css') }}" rel="stylesheet" type="text/css"/>
<!-- <link href="{{ asset('css/common.css') }}" rel="stylesheet" type="text/css"/> -->
<img class="hide" id="xuwanting" src="{{ Session::get('uploadImgPath') }}"/>
<script src="{{ asset('js/jquery-2.2.4.js') }}" type="text/javascript">
</script>
<script src="{{ asset('js/jquery-1.3.2-min.js') }}" type="text/javascript">
</script>

@if($url=='')


<form enctype="multipart/form-data" method="post">
    {{ csrf_field() }}
    @include('basic.message')
    <label href="javascript:;" id="file-label">
        <input id="file" name="picture" type="file"/>
        button
    </label>
    <button type="submit">
        提交
    </button>
</form>
@else

上传成功
<input type="hidden" name="url" value="{{$url}}" id="url">


@endif
<script type="text/javascript">
var modal=$('.modal-body', window.parent.document);

var id=modal.attr('forid');
var obj=$('#'+id, window.parent.document);
if($('#url').length!=0){
	obj.val($('#url').val());
	var img=$('[for-id="'+obj.attr('id')+'"]', window.parent.document);
	if(img.length!=0){
		img.attr('src',obj.val());
	}
	$('.close', window.parent.document).click();
}
$(document).ready(function(){
	$("#xuwanting").Jcrop();
});


$('#file').change(function(){
	$('form').submit();
});
</script>
<script src="{{ asset('js/jquery.Jcrop.js') }}" type="text/javascript">
</script>
