<?php
require_once("config.php");
	$pdo_statement=$pdo_conn->prepare("update users set username='" . $_POST[ 'username' ] . "', password='" . $_POST[ 'password' ]."' where uid=" . $_POST["uid"]);
	$result = $pdo_statement->execute();
	//echo $_GET["uid"];
	if($result) {
		header('location:index.php');
	}


?>