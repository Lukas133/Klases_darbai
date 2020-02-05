<?php
$a = "10 maisas";
$b = "1 maisas";

$aex = explode(" ", $a);
$bex = explode(" ", $b);
var_dump($aex);
var_dump($bex);

print $c = $aex[0] + $bex[0];

 ?>
