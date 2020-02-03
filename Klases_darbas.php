<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// sukurti foro cikla kuris prasidetu nuo 0 veiktu
//iki kol kintamasis pataps 10 ir atsapausdins savo ciklos reiksme kas 1 vieneta

for ($i=0; $i <= 10 ; $i+=1) {
  print $i  ;
}
 print " <br> ";
for ($i=0; $i <= 10 ; $i+=2) {
  print $i  ;
}
 print " <br> ";
for ($i=0; $i <= 10 ; $i+=5) {
  print $i  ;
}
 ?>
