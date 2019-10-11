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
for($i=1;$i<=12;$i=$i+1){
if(!strstr (meses($i),'r'))
	echo meses($i).'<br>';
}