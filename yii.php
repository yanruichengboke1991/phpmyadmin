<?php

	header("content-type:text/html;charset=utf-8");
	$msg['status'] = 'ok';
	$msg['msg'] = 'this is mytest';
	echo json_encode($msg);exit;

function test(){
	echo 'test';
}


