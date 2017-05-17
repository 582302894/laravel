<form enctype="multipart/form-data" method="post">
    {{ csrf_field() }}
    <label href="javascript:;" id="file-label">
        <input id="file" name="picture" type="file"/>
        button
    </label>
    <button type="submit">
        提交
    </button>
</form>
<script src="{{ asset('js/jquery-2.2.4.js') }}" type="text/javascript">
</script>