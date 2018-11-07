<?php
header("content-type:test/html;charset=utf-8");

$msg['status'] = 'success';
$msg['msg'] = 'it is ok';
echo json_encode($msg);

