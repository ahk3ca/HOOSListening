<?php
include 'config.php';
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$address = $_POST["address"];
$city = $_POST["city"];
$state = $_POST["state"];
$zipcode = $_POST["zipcode"];
$username = $_POST["username"];
$psw = $_POST["psw"];

// $query -> execute();


if($db_connection->pg_query("INSERT INTO Users ('fname', 'lname', 'email', 'address', 'city', 'state', 'zipcode', 'username', 'psw') VALUES($fname, $lname, $email ,$address, $city, $state, $zipcode, $username, $psw)")){
	echo 'Data inserted';
	echo '<br/>';
}
header ("location:index.php");

pg_close($db_connection);
?>