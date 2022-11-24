<?php
$files = scandir('/var/www/html');
foreach($files as $file){
    echo $file."\n";
    echo " \n";
}
$homepage = file_get_contents('get.php');
echo $homepage;
?>