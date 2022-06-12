
<?php
session_start();
include "admin/universals/sessions.php";
include "admin/universals/class.php";

if(!isset($_SESSION['user_login']) ){
	header("location: index.php");
}




/*

	//-----------------------------------------------
	
		$user_id = $_COOKIE['user_id'];
		$get_user = "select * from users where ID='$user_id'";
		$run = $db->select($get_user);
		$row =$run->fetch_assoc();

		$user_name = $row['Fname'].' '.$row['Lname'];
		list($date)= explode(' ', $row['date']);
		
		$date=date_create($date);
		 $date = date_format($date,'M, Y');
	

	//-----------------------------------------------
		
		
		 $mes="select * from messages where messages.to_id='$u_id' "; $all_msg=$db->select($mes)->num_rows;
			
	
	if(isset($_GET['msg_no'])){
		
		
		 setcookie('old_msg'.$user_id, $_GET['msg_no'], time()+(86400)*30,'/');
		
	
	   $_SESSION['new_msg']= $all_msg-$_GET['msg_no'];
} 

else    {  $_SESSION['new_msg']= $all_msg-$_COOKIE['old_msg'.$user_id]; }

	
	

*/	
	?>
	
	








<!DOCTYPE html>
<html>
<head>
	
	<title>Home</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">


	<link rel="stylesheet" type="text/css" href="home_style2.css">
	<link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	
 
		<style type="text/css"> .drop li:hover{ background:darkgrey;}</style>
	
	
	
	
</head>



<body>


<?php

?>

<div class="container  w-75 shadow border my-5">
	<div class="row top mt-5">
	
		<span class="border border-dark shadow text-dark h6 py-2 bg-light d-inline-block mr-auto ml-5 px-4 my-4">Logged in: <?php $name=$_SESSION['name']; echo $name;?></span>

	
	<a href="logout.php" class="border border-dark shadow h6 text-dark nav-link bg-primary rounded d-inline-block ml-auto mr-5 px-4 my-4">Logout</a>
		
		
		
	</div>


<div class="row text-center  bg-light mb-5 py-2 font-weight-bold "><h3 class="text-dark m-auto">Messages</h3></div>



<div class="row">
	
	<div class="col-sm-3 ">
	
 <?php include "onlineusers.php";?>
	
	</div> 
	
	<div class="col-sm-1"></div>
	
	
		<div class="col-sm-7">


<?php 
$user_id=$_SESSION['name']; 
 

//outcoming  

 $sel="select * from shoutmessages"; 
 $run=$db->select($sel);   $i=0;  

          while($row=$run->fetch_assoc()) {  if($user_id !=$row['USER_NAME']) { ?>
		  

	
		
	<div class="row " >	

	
<div class="col-sm-12 pt-1">
	
	<div class="row my-2">
		
		<div class="col-sm-6"> <b class="bg-light  p-2 rounded my-2"><?php echo $row['USER_NAME']; ?></b>
		
		<p style="background:aliceblue" class="small  rounded p-2 my-1">  <?php echo $row['message']; ?> </p>
		
		
		</div>
		
		
		
	</div>
	
	</div>
	</div>
	
	
	
	
	
	
	
	
	
		  <?php  }     else {  ////incoming   ?>

<div class="row" >	

<div class="col-sm-12 pt-1">
	
	<div class="row my-2">
	
	<div class="col-6 "></div>
		
		<div class="col-6"> <b class="bg-success p-2 rounded my-2"><?php echo $row['USER_NAME']; ?></b>
		
		<div class="w-sm-100"><p style="background:aliceblue" class="small text-dark  rounded p-2  my-1">  <?php echo $row['message']; ?> </p>
			</div>
		
		</div>
		
	
		
	</div>
	
	</div>
	</div>
<?php }  }  include 'sent_messages.php'; ?>

<a name="bottomOfPage"></a>



</div>


</div>
</div>


	




	
	
	
	
	

        

		   
	
	
	

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	
	</body>
</html>
	
	