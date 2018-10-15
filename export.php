<?php

header("content-type:text/html;charset=utf-8");

$mysqli = new mysqli('192.168.1.199','root','viesong','submail_public');

//输出此数据库中的表结构
$tables = array();

$result = $mysqli->query('SHOW TABLES');

// while($arr = $result->fetch_assoc()){
// 	//遍历查询结果
// 	$tables[] = $arr;
// 	// var_dump($arr);die();
// }
// var_dump($tables);die();
// echo '<br/>';

//通过字段名获取数据表结构

$result = $mysqli->query('DESCRIBE accounts');

$arr = array();
$column[] = $arr;
while ($arr=$result->fetch_assoc()) {
	$column[] = $arr;
	//获取字段个数
	$filed_count = count($arr);

	if(!isset($arr['Dfalult'])){      
		$arr['Dfalult'] = '';
	}
	
	$s[] = $arr['Field'].' '.
	$arr['Type'].
	// $arr['Key'].
	$arr['Dfalult'];







}
print_r($s);





