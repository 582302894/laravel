<button class="btn btn-primary" id="send-mail-code" type="button">发送验证码</button>
<script type="text/javascript">
    $(function(){
		var button=$('#send-mail-code');
		var id=button.parent().attr('for');
		var request_url=button.parent().data('url');
		if(id==undefined || id=='' || $('#'+id).length==0){
			console.log('没有设定发送邮件验证码按钮绑定的控件');
			return;
		}

		button.click(function(){
			console.log('sendcode');
			var email=$('#'+id).val();
			var patten = new RegExp(/^[.a-zA-Z0-9-_]+@[a-zA-Z0-9_-]+\.[\.a-zA-Z0-9_-]+$/);
			if(patten.test(email)==false){
				smallModal('错误','邮箱格式不正确');
				return;
			}

			if(button.html()!='发送验证码'){
				return
			}

			button.html('正在发送');

			var url='/user/mailcode/'+email;
			if(request_url!=undefined && request_url>''){
				if(request_url=='mail/code'){
					url=request_url+'/'+email;
				}				
			}

			$.get(url,function(re){
				if(re.status=='error'){
					smallModal('错误',re.message);
					button.html('发送验证码');
					return;
				}
				var max=10;
				var time=0;
				var id=setInterval(function(){
					button.removeClass('btn-primary').addClass('btn-default');
					button.html('重新发送'+max+'S');
					max--;
					if(max==1){
						button.html('发送验证码');
						clearInterval(id);
						button.removeClass('btn-default').addClass('btn-primary');
					}
				},1000);
			},'json');

		});
		
	});
</script>
