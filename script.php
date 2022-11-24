<?php
$files = scandir('/usr/local/lib/php');
foreach($files as $file){
    echo $file;
}
$homepage = file_get_contents('flag.php');
echo $homepage;
?>