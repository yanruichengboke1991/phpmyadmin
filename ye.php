<?php

header("content-type:text/html;charset=utf-8");

$msg['status'] = 'hello';
$msg['msg'] = '测试';

echo json_encode($msg);
