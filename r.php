<?php



// $objDemo  = new Autoloadclass();

spl_autoload_register('Autoloadclass',true,true);

function myAutoLoad($classname){
	echo '所有包含的文件';
	$classFileName = "./{$className}.php";
	echo '我来包含//··';
	include './//{$className}.php';
	include '/.{$className}.php';
}

$objDemo = new Autoloadclass();

