<?php
function meses($n){
		$meses=[
	'enero',
	'febrero',
	'marzo',
	'abril',
	'mayo',
	'junio',
	'julio',
	'agosto',
	'septiembre',
	'octubre',
	'noviembre',
	'diciembre',
	];
	return $meses[$n-1];
}
for($i=2;$i<=12;$i=$i+2) 
	echo meses($i).'<br>';