<?php

function create_guid(){
	$charid = strtoupper(md5(uniqid(mt_rand(),true)));
	$hypen =  chr(45);
	$uuid = substr($charid,6,2).substr($charid,4,2).
	substr($charid,2,2).substr($charid,0,2).$hypen.
	substr($charid,10,2).substr($charid,0,2).$hypen
	.substr($charid,14,2).substr($charid,12,2).$hypen
	.substr($charid, 16,4).$hypen.substr($charid, 20,12);
	return $uuid;
}

$uid = create_guid();

var_dump($uid);