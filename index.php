<?php
$code='aopi?sgnirts@#?sedhtg+p9l!';
$cle=strlen($code)/2;
$sousMessage=substr($code,6,$cle);
$inverse=str_replace('@#?',' ',$sousMessage);
echo "avant inversion : $inverse <br>";
$message=strrev($inverse);
echo "apres inversion : $message";
?>