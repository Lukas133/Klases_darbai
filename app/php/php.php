<?php

//failo prijungimas
$file = "tekstas.txt";
$fo = fopen($file, 'a') or die("can't open file");


fwrite($fo, implode(", ",$_POST) . ", \n");

fclose($fo);

$file1 = file($file);

$array = [];
foreach ($file1 as $user) {
	$naujas = explode(', ', $user);
	array_pop($naujas);
	array_push($array, $naujas);
}

 ?>
