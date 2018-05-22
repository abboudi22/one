<?php 
require ('Geo.php');
$geo = new Geology;
$ip = getenv('REMOTE_ADDR');
$geo->request($ip);
