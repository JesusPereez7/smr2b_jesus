<a href="http://192.168.0.101/smr2b_ivan/smr2b.php">Antetokounmpo</a>
Jesus
<a href="http://192.168.0.115/smr2b_adrian/smr2b.php">Adrian</a>

<?php
$f=fopen('visitas.txt','a');
fwrite($f,date('Y-m-d H:i:s '));
fwrite($f,$_SERVER['REMOTE_ADDR']);
fwrite($f,"\r\n");
fclose($f)
?>