


	
		
	

				

	
		
		
		
<div class="row text-center mx-auto  mt-3 post_top my-3shadow border  font-weight-bold w-sm-75"> 
<div class="col-sm-3"> <span class="bg-light  text-center"></span>Type Here:</div>

<div class="col-sm-9">

 <form class="" action="addmessage.php" method="post"> 
 <div class="row">
 	<div class="col-sm-9">
	<textarea required="" name="text" id="text" type="text" cols="30" rows="2" class="form-control" placeholder="Write a message..."></textarea>
	<small class="text-danger font-italic"><?php  Session::show('length');?></small>
 </div>


 <div class="col-sm-3"> 
 <input type="submit" class=" px-2 border border-dark  font-weight-bold  mt-2  text-dark " href="" name="shout" value="SHOUT" />
 </div>
 
  </div>

 
 </form>

</div>



</div>


             

		   
	
	
	

<script src="https://code.jquery.com/jquery-3.1.1.min.js"> </script>


<script type="text/javascript">
  
 
$(document).ready(function(){
$('#text').keyup(function(e){

	if(e.keyCode==13){   
		
	var text=$('#text').val(); console.log("enter");
		$.ajax({
			
			type:'POST',
			url:'insert_msg.php',
		data:{text:text},
		
		success:function(){ 
			//alert('hello');
			$('#scroll_msg').load('display_msg.php'); 
			$('#text').val('');
			
		} 
			
		});
		
		
		
	}
		
});	
	
	
	setInterval( function(){
		$('#scroll_msg').load('display_msg.php');	
	},1500);
	
	$('#scroll_msg').load('display_msg.php');
	
	
	
	
     var div = document.getElementById('scroll_msg');
	 div.scrollTop=div.scrollHeight;
	
	
});
  
  
  
  

  
  </script>

	
	<script>
	
//	document.querySelector("#scroll_msg").scrollTop = document.querySelector("#scroll_msg").scrollHeight;
	
	</script>
	
	
	
	
	
	
	</body>
</html>
	
	