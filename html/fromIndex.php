<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
include('db.php');

$login = $_POST['login'];
$password = $_POST['password'];

$query = $connection->query("SELECT * FROM users WHERE login = \"".$login."\" AND password = \"".$password."\"");
					
	if($row = $query->fetch_object()){

				session_start();

				$_SESSION['user_id'] = $row->id;
				
			
				header("Location:profile.php");

			}
	
}



?>