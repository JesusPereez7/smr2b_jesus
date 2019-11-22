<?php
function tipo_lados($a,$b,$c){
	$r='escaleno';
	if($a==$b or $b==$c or $a==$c)
		$r='isoceles';
	if($a==$b and $b==$c)
		$r='equilatero';
	return $r;
}
function tipo_angulos($A,$B,$C){
	$r='acutangulo';
	
	if($A==90 or $B==90 or $C==90)
		$r='rectangulo';
	
	if ($A>90 or $B>90 or $C>90)
		$r='obtusangulo';
	
	return $r;
}
function triangulos ($a,$b,$c,$A,$B,$C){
	$r1=tipo_lados($a,$b,$c);
	$r2=tipo_angulos($A,$B,$C);
	
	return $r1.' - '.$r2;
}
echo triangulos (2,2,2,60,60,60).' ¿equilatero? ¿acutangulo? <br>';
echo triangulos (3,3,2,45,45,90).' ¿isoceles? ¿rectangulo? <br>';
echo triangulos (1,2,3,110,35,35).' ¿escaleno? ¿obstusangulo? <br>';
echo triangulos (2,1,1,45,90,45).' ¿isoceles? ¿rectangulo? <br>';
echo triangulos (3,2,1,35,110,35).' ¿escaleno? ¿obstusangulo? <br>';