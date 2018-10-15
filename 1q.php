<?php

header("content-type:text/html;charset=utf-8");

$msg['status'] = 'this is my status';

$msg['msg']= 'ok';

echo json_encode($msg);