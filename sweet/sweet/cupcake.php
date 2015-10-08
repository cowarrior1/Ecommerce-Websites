<?php  require 'header/header.php';  ?>
<?php  require 'menu.php'; 

$page=$_REQUEST['cup'];
$cake=$_REQUEST['cake'];
?>

 <div id="mainContent" class="fullWidth"> 

 		<?php #If you need slider uncomment this line -> //require 'slider.php'; ?> 
	     	  		  			 	  	 		






<div class="container"> 

	 
	     	  	<div class="setSlider7"> 
	     	  		  	<div class="third" style="width: 800px;margin-left: -202px;"> 
	     	  		  		<div class="mrgThird"> 
	     	  		  			<div class="shadd"> 
	     	  		  			 	
	     	  		  			 	  	<img style="width: 700px;" src="view/images/<?php echo $page; ?>/<?php echo $cake; ?>.jpg" alt=""> </div> 
	     	  		  			 	  	 		 
	     	  		  			 	  	 	 </div> </div>
														 <div style="  margin-top: 11px;">Am imperdiet faucibus orci ut vestibulum. Cras ut tellus ac leo blandit convallis a vitae odio. Integer molestie varius hendrerit. Ut lacinia eleifend dolor ut luctus. Sed euismod quaa. Quisque cursus libero ante, a pellentesque. 
Pellentesque eu metus est, id accumsan leo Quisque cursus libero ante, a pellentesque massa. Vestibulum et dolor ut est tincidunt aliquam. Aliquam nunc velit, ornare eu porta et, volutpat sit amet arcu. Quisque vel risus dolor. 
Sed blandit, sapien ac tempus faucibus, lectus massa tincidunt tortor, a commodo risus orci gravida tortor.<br>
<center><a style="width: 159px;height: 45px;" class="btn btn-info" href="form.php?cup=<?php echo $page ?>&cake=<?php echo $cake; ?>"><div style="padding-top: 12px;"> Buy :)</div></a></center>

</div>	 	
														<div class="clearfix"></div> 
	     	  		  			 	  	 		  	 		</div> 
	     	  		  			 	  	 		  	 		
	     	  		  			 	  	 		  	 		</div> <!-- slider7 --> 











	     	  		  			 	  	 		  	 		</div> 
	     	  		  			 	  	 		  	 		  <!-- mainContent --> 


	     	  		  			 	  	 		  	 		<?php require 'footer/footer.php'; ?>