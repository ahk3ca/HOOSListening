<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
require 'vendor/PHPMailer/phpmailer/src/PHPMailer.php';
require 'vendor/PHPMailer/phpmailer/src/SMTP.php';

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


// $getusers = pg_query($db_connection, "SELECT * FROM \"Users\"");

$query = "INSERT INTO \"Users\" VALUES ('$fname', '$lname', '$email', '$address', '$city', '$state', '$zipcode', '$username', '$psw')";

$result = pg_query($db_connection, $query);



		try{
		$mail = new PHPMailer(TRUE);
	  	$mail->isSMTP();          
	  	$mail->Host 	  = 'smtp.gmail.com';         
		$mail->SMTPAuth   = true;         
		$mail->SMTPSecure = 'tls';         
		$mail->Port       = 587;             
		$mail->Username   = "ecomm.hooslistening@gmail.com";          
		$mail->Password   = "temppassword!";                 
        $mail->setFrom('ecomm.hooslistening@gmail.com', 'HOOSListening');
        $mail->addAddress("$email");
        $mail->Subject = 'Welcome to HOOSListening!';
        $mail->Body = 'Thanks for signing up with HOOSListening!';
        $mail->send();

		exit();
	}
	catch (Exception $e) {

	};


// if($db_connection->pg_query("INSERT INTO Users ('fname', 'lname', 'email', 'address', 'city', 'state', 'zipcode', 'username', 'psw') VALUES($fname, $lname, $email ,$address, $city, $state, $zipcode, $username, $psw)")){
// 	echo 'Data inserted';
// 	echo '<br/>';
// }
header ("location:index.php");

pg_close($db_connection);
?>