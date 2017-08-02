<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>

<script type="text/javascript">


$.post('./iplogs',{'_token':'sXiAXLAgykGOcAdNsELPFXcpili6xRGPfOpzBtl9','a':'a'});
</script>

<?php
exit();
if (!empty($_POST)) {
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';exit();
}

$data = [
    'REMOTE_ADDR'  => $_SERVER['REMOTE_ADDR'],
    'REQUEST_URI'  => $_SERVER['REQUEST_URI'],
    'HTTP_REFERER' => $_SERVER['HTTP_REFERER'],
    '_token'       => 'sXiAXLAgykGOcAdNsELPFXcpili6xRGPfOpzBtl9',
];
$data = http_build_query($data);
// $opts = [
//     'http' => [
//         'method'  => 'POST',
//         'header'  => "Content-type: application/x-www-form-urlencoded\n\rContent-Length:" . strlen($data) . "\n\r",
//         'content' => $data,
//     ],
// ];
$opts = array(
    'http' => array(
        'method'  => "POST",
        'header'  =>
        "Content-type: application/x-www-form-urlencoded\r\n" .
        "Content-Length:" . strlen($data) . "\r\n",
        'content' => $data,
    ),
);
$context = stream_context_create($opts);
$flag    = file_get_contents("http://" . $_SERVER['HTTP_HOST'] . '/iplogs', false, $context);
echo '<pre>';
var_dump($flag);
echo '</pre>';exit();

// $data = array("name" => 'tim', "content" => 'test');
// $data = http_build_query($data);

// $opts = array(
//     'http' => array(
//         'method'  => "POST",
//         'header'  =>
//         "Content-type: application/x-www-form-urlencoded\r\n" .
//         "Content-Length:" . strlen($data) . "\r\n",
//         'content' => $data,
//     ),
// );
// $cxContext = stream_context_create($opts);
// $sFile     = file_get_contents("http://" . $_SERVER['HTTP_HOST'] . "/test.php", false, $cxContext);
// echo $sFile;
