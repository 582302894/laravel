<style type="text/css">
	.calendar td{
		border:  1px solid rgba(149, 161, 212, 0.15);
	}
	.calendar tr:first-child,.calendar tr:nth-child(2){
		border:  1px solid rgba(149, 161, 212, 0.15);
		font-family: "Microsoft YaHei"
	}
	.calendar td,.calendar th{
		padding-top: 3px;
		padding-bottom: 3px;
		text-align: center;
		font-family: "Microsoft YaHei";
		 font-weight:'normal';
	}
	.calendar .on{
		background-color:rgba(142, 141, 141, 0.16);
	}
</style>

<div>

	<!-- <div class="col-md-12">
		
		{{date('Y')}}
		{{date('m')}}
		{{date('d')}}
	</div> -->


	<table class="calendar col-md-12 m0 p0">
		<tr>
			<th>日</th>
			<th>一</th>
			<th>二</th>
			<th>三</th>
			<th>四</th>
			<th>五</th>
			<th>六</th>

		</tr>

<?php
//当月1号星期几
$w = date('w',strtotime(date('Y-m').'-1'));
for ($i = 0; $i < $w; $i++) {
    $days[] = [$i + 1, 'null'];
}

//今天几号
$today    = date('d');
//当月几天
$monthDay = date('t');
for ($i = 0; $i < $monthDay; $i++) {
    if (($i+1) == $today) {
        $days[] = [$i + $w + 1, $i+1, 'on'];
    } else {
        $days[] = [$i + $w + 1, $i+1];
    }

}
$count = 0;
//月末星期几
$left  = 6-date('w', strtotime(date('Y-m') . '-' . $monthDay));
for ($i = 0; $i < $left; $i++) {

    $days[] = [$w+$monthDay+$i + 1, 'null'];

}

?>
@foreach($days  as $day)


@if($day[0] % 7 == 1)
<tr>
@endif

@if($day[1]=='null')

	<td></td>
@else
	<td class="{{ $day[2] or '' }}">{{$day[1]}}</td>

@endif



@if($day[0] % 7 == 0)
</tr>
@endif

@endforeach



	</table>
</div>
