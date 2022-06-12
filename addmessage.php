<?php   
session_start();
include "admin/universals/sessions.php";
include "admin/universals/class.php";


$from_id = $_SESSION['name'];  

				
				if(isset($_POST['shout'])) {
				$message=$_POST['text']; //echo "success.$message"; return;
				if(strlen($message) > 20) {$_SESSION['length']="Message must contain less than 20 characters!";
				header('location:messages.php#bottomOfPage'); exit; }
				else {
				$message=$db->escape($message);
					$in="insert into shoutmessages(USER_NAME,message) values('$from_id','$message')";
					$run = $db->insert($in); if($run!= true) echo "error";
					header('location:messages.php#bottomOfPage'); exit;
				}
				}
				
			

	
?>