<?php
function calcular($a,$b){
	$r=null;
	$r=$r.($a+$b).'<br>';
	$r=$r.($a-$b).'<br>';
	$r=$r.($a*$b).'<br>';
	$r=$r.($a/$b).'<br>';
	return $r;
}
echo calcular(7,3);
echo calcular(4,6);
echo calcular(1,2);