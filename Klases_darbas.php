<?php
//sumazina oer puse masyva
$a = [
10,
20,
30,
50,
60,
70,
80,
];
$rezultatas = count($a);
print $rezultatas;
for ($x=0; $x <= $rezultatas; $x+=2) {
  $b[] = $a[$x];

}
var_dump($b);
 ?>
