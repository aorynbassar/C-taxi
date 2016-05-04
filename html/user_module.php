<?php
	include('db.php');
	session_start();

	$user = null;
	$online = false;

	if(isset($_SESSION['user_id'])){

		$query = $connection->query("SELECT * FROM users WHERE id = ".$_SESSION['user_id']."");
		
		if($row = $query->fetch_object()){
			$user = $row;
			$online = true;
		}

	}


?>