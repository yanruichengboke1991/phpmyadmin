<?php

header("content-type:text/html;charset=utf-8");

$url = crc32('https://www.baidu.com');


$url= crc32($url);
$result= sprintf("%u", $url);
$sUrl= '';
while($result>0){
    $s= $result%62;
    if($s>35){
        $s= chr($s+61);
    } elseif($s>9 && $s<=35){
        $s= chr($s+ 55);
    }
    $sUrl.= $s;
    $result= floor($result/62);
}
var_dump($sUrl);