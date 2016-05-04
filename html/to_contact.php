<?php
include "db.php";
include "user_module.php";

$tel = $_POST["tel"];
$mes = $_POST["mes"];

$connection->query("insert into message values(null,".$user->id.",".$tel.",\"".$mes."\")");

header("Location: contact.php?success=1");

?>