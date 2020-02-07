<?php

$deze = 24;

$penktadienis =rand(4,6);
$sestadienis =rand(1,2);

$kiekisgeriau = 0;
$kiekisgeriaupermenesi = 0;
for ($persavaite=1; $persavaite <= 4 ; $persavaite++) {
	for ($i=1; $i <= 4 ; $i++) {
		$darbodienos = rand(1,3);
//		print 'per diena ' . $darbodienos . "<br>";
		$kiekisgeriau += $darbodienos;
	};
	$penktadienis =rand(4,6);
	$sestadienis =rand(1,2);
//	print $penktadienis .' penktadienis' . "<br>";
//	print $sestadienis .' sestadienis'. "<br>";
	$kiekisgeriaupersavaite = $kiekisgeriau+$penktadienis+$sestadienis;
	//print $kiekisgeriaupersavaite . ' per pirma savaite' . "<br>";

 $kiekisgeriaupermenesi+=$kiekisgeriaupersavaite;
	$kiekisgeriau =0;
}
print $kiekisgeriaupermenesi ."<br>";

$buteliukai = $kiekisgeriaupermenesi/24;
$deziukiekis = floor($buteliukai);
print $deziukiekis . " --- deziu skaicius" . "<br>";
$buteliukukiekis = $kiekisgeriaupermenesi-24*$deziukiekis;
print $buteliukukiekis . " ---likes buteliuku skaicius";
	?>
