<?php
$currency = '$';
$db_username = 'ehhgqguebtrqct';
$db_password = '7af866dccd9772e0b7fb46499774d19065b2696b8398d8075a53878441b40ad0';
$db_name = 'd5un2648v5uunk';
$db_host = 'ec2-174-129-229-106.compute-1.amazonaws.com';

// $conn = new mysqli($db_host, $db_username, $db_password, $db_name)

$db_connection = pg_connect("host=$db_host dbname=$db_name user=$db_username password=$db_password");

?>