<?php
//tikrina ar skaicius
$a = [
10,
20,
30,
1,
1,
50,
0,
0,
'Jonas',
'petras',
];
var_dump($a);
foreach ($a as $key => $value) {
  if (is_numeric($value)) {
    print $value . '<br>';
  }
}
 ?>
