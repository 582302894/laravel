<!-- <iframe border="0" frameborder="no" height="86" marginheight="0" marginwidth="0" src="//music.163.com/outchain/player?type=2&id=26365349&auto=1&height=66" width="330">
</iframe>
<iframe border="0" frameborder="no" height="86" marginheight="0" marginwidth="0" src="//music.163.com/outchain/player?type=2&id=26365349&auto=0&height=66" width="330">
</iframe>
 -->
<?php
use \App\Http\Controllers\Spider\MusicController;
$mc = new MusicController();

$json   = $mc->
music();
$muiscs = [];
if (!empty($json)) {
    $muiscs = json_decode($json, true);
}

$muiscs = array_splice($muiscs, 0, 4);

?>
<style type="text/css">
    .music-box{
	position: fixed;
	z-index: 99;
	width: 100%;height: 100%;
	background: white;
	left: -100%;
}
.pole{
	height: 100%;
	position: absolute;width: 50px;
	right: -25px;
	background: rgba(197, 190, 190, 0.33);
	top:0px;
}
.pole img{
    width: 40px;
    margin-left: 5px;
    top: 50%;
    position: absolute;
    margin-top: -20px;
}
</style>
<div class="music-box">
    @foreach($muiscs as $music)
    	<input type="hidden" value="{{$music['id']}}" class="music-id">
	   <!--  <iframe border="0" frameborder="no" height="140" marginheight="0" marginwidth="0" src="//music.163.com/outchain/player?type=2&id={{$music['id']}}&auto=0&height=140" width="330">
	    </iframe> -->
    <!-- <div height="140px" sytle="width:140px!important;">
        <img height="140px" src="{{$music['album']['picUrl']}}" style="margin: 0 auto;"/>
    </div> -->
    @endforeach	
    <div class="pole">
    	<img src="{{ asset('img/024dea04407b4dd72af8bdf69bdb483d.png') }}" />
    </div>
</div>
<script src="{{ asset('js/jquery-2.2.4.js') }}" type="text/javascript">
</script>
<script type="text/javascript">
$(function(){
	$('.music-id').each(function(){
		$(this).after(' <iframe border="0" frameborder="no" height="140" marginheight="0" marginwidth="0" src="//music.163.com/outchain/player?type=2&id='+$(this).val()+'&auto=0&height=140" width="330"></iframe>');
	});
	var i=0;
	$('.pole').click(function(){
		i++;
		if(i%2==0){
			$('.music-box').animate({left:'-100%'});	
		}else{
			$('.music-box').animate({left:'0'});
		}
		
	});
	// $('.pole').click();
})
</script>