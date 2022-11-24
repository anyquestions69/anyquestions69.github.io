<?php
$files = scandir('/usr/local/lib/php');
foreach($files as $file){
    echo $file."\n";
}
$homepage = file_get_contents('get.php');
echo $homepage;
?>