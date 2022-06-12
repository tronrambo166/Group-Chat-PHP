<?php   session_start();
include "admin/universals/sessions.php";
include "admin/universals/class.php";




if(isset($_POST['login'])){
	
	$all->login($_POST);
	
}


?>




<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<link rel="stylesheet" href="style.css" />


<style>
	body{
		overflow-x: hidden;
	}
	.main-content{
		width: 50%;
		
		margin: 10px auto;
		background-color: #fff;
		border: 2px solid #e6e6e6;
		padding: 40px 50px;
	}
	.header{
		border: 0px solid #000;
		margin-bottom: 5px;
	}
	.well{
		background-color: #187FAB;
	}
	#signin{
		width: 60%;
		border-radius: 30px;
	}
	.overlap-text{
		position: relative;
	}
	.overlap-text a{
		position: absolute;
		top: 8px;
		right: 10px;
		font-size: 14px;
		text-decoration: none;
		font-family: 'Overpass Mono', monospace;
		letter-spacing: -1px;

	}
	
  .header h3{
    color: black;
    font-weight: bold;
    font-family: monospace;
    font-size: 26px;
}
</style>

	
	<style>
	body{
		overflow-x: hidden;
	}
	
	.headings h3{  background:#1e7e3414 ; border: 1px solid #fff; color: #000;   font-family:arial; }
	.title {  font-family:cursive; }
	
	#signup{
		width: 60%;
		border-radius: 30px;
			background-color: #000;
			color: white;
			border: 1px solid #fff
	}
	#login{
		width: 60%;
		background-color: #fff;
		border: 1px solid #1da1f2;
		color: black;
		border-radius: 30px;
	}
	
	.well{
		background-color: rgba(0, 123, 255, 0.08);;
	}

</style>

	<link rel="stylesheet" href="css/font-awesome.min.css" />
	
</head>



<body>
	
	
	<div class="container-fluid one bg-light">
	
	
	
	
	
	<div class="row">
	<div class="col-sm-12">
		<div class="main-content shadow">
			<div class="header">
				<h3 class="border border-dark py-2" style="text-align: center"><strong>Login Form</strong></h3>
				<h5 class="text-center bg-light text-mute"><?php  Session::show('reset_pass'); ?></h5>
				
				
			</div>
			<div class="l-part">
				 <form class="" method="post">
                                            <div class="form-group"><label class="mt-3 small mb-1" for="inputEmailAddress"><b>Username</b></label>
											
											<input class="w-75 float-right mr-5  form-control pr-3 pl-1 my-2" name="username" id="inputEmailAddress" type="text" placeholder="Enter username"
					required=""  /></div>
											
		                  <small class="text-danger font-italic">	<?php Session::show('we');  ?></small>

																						
																						
                                            <div class="form-group my-4"><label class="mt-3 small mb-1" for="inputPassword"><b>Password</b></label>
											
											<input class=" w-75 float-right mr-5 form-control my-2 pr-3 pl-1" name="password" id="inputPassword" type="password" placeholder="Enter password"
                             				value="<?php  if(isset($_COOKIE['user_password'])) {echo $_COOKIE['user_password']; }?>"			/></div>
											
											<small class="text-danger font-italic"><?php  Session::show('wp');?></small>
                                            
											
                                            <div class="form-group text-center justify-content-between my-5 mb-0">
											
											<input type="submit"class="border-dark mt-sm-4 px-5 font-weight-bold btn mx-auto btn-light text-dark" href="" name="login" value="Submit" /></div>
                                        </form>
			</div>
		</div>
	</div>
</div>

	
	
	</div>
	
	
	
	
	
	
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	
</body>
</html>