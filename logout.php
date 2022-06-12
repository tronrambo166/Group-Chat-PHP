<?php   
include "admin/universals/sessions.php";
include "admin/universals/class.php";

session_start(); $id=session_id();
$username=$_SESSION['name'];
$up="update users set status='offline' where username='$username' ";
$run=$db->update($up);
session_destroy();


	session_start();
	$_SESSION['logout']="logged out!";
    header('location:index.php');



?>