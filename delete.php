<?php 
include 'config.php';
// require_once("koneksi.php");
$pdo_statement=$pdo_conn->prepare("delete from users where uid=".$_GET['id']."");
$pdo_statement->execute();
header('location:index.php');


 ?>