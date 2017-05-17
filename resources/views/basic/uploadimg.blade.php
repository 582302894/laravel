<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<link href="{{ asset('css/bootstrap/dist/css/bootstrap.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('css/jquery.Jcrop.css') }}" rel="stylesheet" type="text/css"/>
<!-- <link href="{{ asset('css/common.css') }}" rel="stylesheet" type="text/css"/> -->
<img class="hide" id="xuwanting" src="{{ Session::get('uploadImgPath') }}"/>
<form enctype="multipart/form-data" method="post">
    {{ csrf_field() }}
    <label href="javascript:;" id="file-label">
        <input class="hide" id="file" name="picture" type="file"/>
        上传
    </label>
</form>
<script src="{{ asset('js/jquery-2.2.4.js') }}" type="text/javascript">
</script>
<script src="{{ asset('js/jquery-1.3.2-min.js') }}" type="text/javascript">
</script>
<script type="text/javascript">
$(document).ready(function(){
	$("#xuwanting").Jcrop();
});


$('#file').change(function(){
	$('form').submit();
});
</script>
<script src="{{ asset('js/jquery.Jcrop.js') }}" type="text/javascript">
</script>
