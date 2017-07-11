<style type="text/css">
    #comment textarea{
	width: 100%;
}
.comment-list{
	border: 1px solid #ecd9d9;
    padding: 5px;
}
.comment{
	border-bottom: 1px solid #dad9d9;
}
</style>
<div class="col-md-12 m0 p0">
    <h1>
        留言
    </h1>
    <!-- <h5>
        {{$comment_name}}
    </h5> -->
    <form action="" class="m0 p0" id="comment" method="post">
        <input class="form-control" name="comment-name" type="text" value="{{$comment_name}}" placeholder="起个名字" />
        <textarea class="form-control" rows="3">
        </textarea>
        <button class="mt5 btn btn-primary" name="" type="button">
            留言
        </button>
    </form>
    <div class="comment-list mt10 p0">
        <div class="comment overflow-hidden">
            <div class="name">
                路人丁 :
            </div>
            <div class="content">
                ccc
            </div>
            <div class="time pull-right">
                {{date('y-m-d H:i')}}
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function clear_textarea(){
	$('#comment textarea').val('');
}
$(function(){
	clear_textarea();

	$.get('/comment/1',function(data){

	});

	$('#comment button').click(function(){
		var content=$('#comment textarea').val();
		if(content==''){
			smallModal('error','留言内容为空');
			return;
		}
		var name=$('#comment input[name="comment-name"]').val();

		console.log(content);
		console.log(name);

		clear_textarea();
	});
});
</script>