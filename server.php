<?php

//while (true) {
$redis = new Redis();
$redis->connect('localhost', 6379);
$msg = $redis->blPop('msg', 5);
if (count($msg) > 1) {
	echo json_encode(array('statusCode' => 200, 'msg' => $msg[1]));
}
else {
	echo json_encode(array('statusCode' => 300));
}
//}