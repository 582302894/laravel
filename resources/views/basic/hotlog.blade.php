<?php

$vnums = \App\ViewLog::orderBy('vnums','desc')->limit(7)->get()->keyBy('id');
if ($vnums == null) {
    $keys = [-1];
} else {
    $keys = array_keys($vnums->all());
}
$logs = \App\SpiderLog::whereIn('id', $keys)->select('id', 'content')->get()->keyBy('id');

?>

<ul class="list-group mt15">

@foreach($vnums as  $vnum)
  <li class="list-group-item">
    <span class="badge">{{ $vnum->vnums }}</span>


<?php

$content = json_decode($logs[$vnum->id]->content, true);

?>
<a href="/index/picture/{{$vnum->id}}" target="_blank">{{ $content['title'] or 'error' }}</a>

  </li>

@endforeach
</ul>
