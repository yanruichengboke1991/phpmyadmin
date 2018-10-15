<?php

try{
	$ossClient->createBucket($bucket);
}catch(OssException $e){
	print('Exception:'.$e->getMessage().'\n');
}