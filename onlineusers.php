	<h3 class="h6 py-2 text-success shadow  pl-2 my-3">Online Users</h3>
	 <?php 
 $sts="select * from users where status='online' "; 
 $sts=$db->select($sts);

	while($rowsts=$sts->fetch_assoc()){ ?> <div class="my-3 text-center border border-dark ">
	<span style="width:8px; height:8px"class="d-inline-block rounded-circle bg-success"></span>
	<a href="usermessages.php?id=<?php echo $rowsts['username']; ?>" class="py-1 border px-2 d-inline-block bg-light small text-center font-weight-bold text-secondary"> 
	<?php echo $rowsts['username']; ?> </a> </div> <?php } ?> 
	