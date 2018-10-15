<?php

header("content-type:text/html;charset=utf-8");


// //禁用错误报告
// error_reporting(0);
// //报告运行时错误
// error_reporting(E_ERROR | E_WARNING | E_PARSE);
// //报告所有错误
// error_reporting(E_ALL);
//  ini_set('display_errors',1);




// echo nbjodscos;
$link = mysqli_connect('192.168.1.199:3306','root','viesong');
if(!$link){
	die('Database Connect Error:'.@mysql_error());
}
var_dump($link);die();

// // var_dump($link);die();
// // echo md5('123456');‘’

// $db = new mysqli();
// echo 222;die();
// $db->connect('192.168.1.199:3306','root','viesong','submai_public');
// echo '111';
// $sql = 'select * from accounts';

// $query = $db->query($sql);
// // var_dump($query);die();
// while($res = mysqli_fetch_array()){
// 	$result[] = $res;
// }


// $i = 0;

// print_r($result);

// echo '<br/>';

// foreach($result as $key=>$value){
// 	$i+=1;
// 	if($i%2==0){
// 		echo $key.'';
// 		echo $value.'<hr>';
// 	}
// }

// $query->free();
// $query->close();




