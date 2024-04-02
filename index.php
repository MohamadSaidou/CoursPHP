<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
$code='0@sn9sirppa@#?ia’jgtvryko1';
$cle=strlen($code)/2;
$sousMessage=substr($code,6,$cle);
$inverse=str_replace('@#?',' ',$sousMessage);
$message=strrev($inverse);
echo "$message";
?>