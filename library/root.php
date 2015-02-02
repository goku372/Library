<?php 
$dir = str_replace('\\', '/', __DIR__);
$main= substr($dir, strlen($_SERVER['DOCUMENT_ROOT'])+1);
$path=null;
for ($i = 0, $j = strlen($main); $i < $j; $i++){
if (strstr('/',$main[$i])){
$path.="../";}}
?>
		
		