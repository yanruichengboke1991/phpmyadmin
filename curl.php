<?php

header("content-type:text/html;charset=utf-8");


function send_sms($data){
	$api = 'https://api.mysubmail.com/message/xsend.json';
	$param = [
		'appid'=>'test',
		'to'=>$data['phone'],
		'project'=>'e6xv21',
		'vars'=>array(
			'code'=>$data['code'],
			'time'=>$data['time']
		),
		'signature'=>'dqwdeqdadwd',
	];
	$param = json_encode($param);
	$curl = curl_init();
	$curl_data = [];
	$curl_data['CURLOPT_POST'] = true;
	$curl_data['CURLOPT_URL'] = $api;
	$curl_data['CURLOPT_RETURNTRANSFER'] = true;
	$curl_data['CURLOPT_TIMEOUT'] = 120;
	$curl_data['CURLOPT_POSTFILEDS'] = $param;

	curl_setopt_array($curl, $curl_data);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER,0);
	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST,0);

	$result = curl_exec($curl);
	if(!$result){
		var_dump(curl_error($curl));
	}
	curl_close($curl);
	return json_encode($result,true);
}
$a = send_sms(array());
var_dump($a);