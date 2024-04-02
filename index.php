<?php
$code='0@sn9sirppa@#?ia’jgtvryko1';
$cle=strlen($code)/2;
$sousMessage=substr($code,6,$cle);
$inverse=str_replace('@#?',' ',$sousMessage);
$message=strrev($inverse);
echo "$message";
?>