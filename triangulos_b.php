<?php
function tipo_angulos($a,$b,$c){
	$r='acutangulo';
	
	if($a==90 or $b==90 or $c==90)
		$r='rectangulo';
	
	if ($a>90 or $b>90 or $c>90)
		$r='obtusangulo';
	
	return $r;
}	
echo tipo_angulos(90,50,40).' ¿rectangulo?<br>';
echo tipo_angulos(80,60,40).' ¿acutangulo?<br>';
echo tipo_angulos(100,30,50).' ¿obstusangulo?<br>';
echo tipo_angulos(50,60,70).' ¿acutangulo?<br>';
echo tipo_angulos(90,80,10).' ¿rectangulo?<br>';
echo tipo_angulos(40,20,120).' ¿obtusangulo?<br>';