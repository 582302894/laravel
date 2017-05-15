@if(Session::has('success'))
<div class="alert alert-info alert-dismissible" role="alert">
    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
        <span aria-hidden="true">
            ×
        </span>
    </button>
    <div class="message-success">
        {{ Session::get('success') }}
    </div>
</div>
@endif
@if(Session::has('error'))
<div class="alert alert-warning alert-dismissible" role="alert">
    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
        <span aria-hidden="true">
            ×
        </span>
    </button>
    <div class="message-error">
        {{ Session::get('error') }}
    </div>
</div>
@endif
<!-- begin 详细错误 显示表单 表单label for属性对应input id与name -->
@if (count($errors) > 0)
        @foreach ($errors->toArray() as $key => $value)
<div class="hide hide-error" error="{{ current($value) }}" key="{{ $key }}">
</div>
@endforeach
  
@endif
<!-- end -->
<script type="text/javascript">

    $(function(){
        
        if($('.hide-error').length>0){
            var errors=$('.hide-error');
            errors.each(function(){
                var obj= $(this);
                var key=$(this).attr('key');
                var error=$(this).attr('error');
                var control=$('[name="'+key+'"]');
                control.after('<span class="help-block">'+error+'</span>');
                control.parents('div:first').addClass('has-error');
                control.change(function(){
                    control.parents('div:first').removeClass('has-error');
                    control.parent().find('.help-block').remove();
                });
                control.focus(function(){
                    control.parents('div:first').removeClass('has-error');
                    control.parent().find('.help-block').remove();
                });
            });
        }
   })
</script>
