<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
include('db.php');

$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$connection->query("INSERT INTO users VALUES(NULL,\"".$login."\",\"".$email."\",\"".$password."\",\"".$gender."\")");
	
	header("Location:index.php");
}
?>