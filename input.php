<?php
// include"config.php";

// 	// $sql = "INSERT INTO users VALUES ( '', '$_POST[username]',' $_POST[password]')";
// 	// $data = $pdo_conn-> prepare($sql);
// 	// $data->execute ();
// 	if(!empty($_POST["tambah"])) {
// 	require_once("config.php");
// 	$sql = "INSERT INTO users ( username,password) VALUES ( :username, :password,)";
// 	$pdo_statement = $pdo_conn->prepare( $sql );
		
// 	$result = $pdo_statement->execute( array( ':username'=>$_POST['username'], ':password'=>$_POST['password'] ) );
// 	if (!empty($result) ){
// 	  header('location:index.php');
// 	}
// }

include"config.php";

$username = $_POST['username'];
$password = md5($_POST ['password']);
$akses = $_POST['acces'];
// $no_telp=$_POST['no_telp'];
// $alamat=$_POST['alamat'];

$query = $pdo_conn->prepare("INSERT into users(username,password,acces)values('$username','$password','$akses')");
		$query->execute();

header('location: index.php');
		
?>