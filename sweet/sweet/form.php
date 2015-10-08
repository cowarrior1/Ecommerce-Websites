<?php  
error_reporting(0);
require 'header/header.php'; 
require 'menu.php'; 
require 'database_connection.php';

$page=$_REQUEST['cup'];
$cake=$_REQUEST['cake'];




$flag="";
$success="";
if (isset($_POST['chkout'])) {

	$name=$_POST['name'];
	$address1=$_POST['address1'];
	$address2=$_POST['address2'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$zip=$_POST['zip'];
	$item_name=$_POST['item_name'];
	$item_code=$_POST['item_code'];
	
	if (empty($name)) {
		$flag="Please Enter Your name";
	}
	if (empty($address1)) {
		$flag="Please Enter Your Address";
	}
	if (empty($city)) {
		$flag="Please Enter Your City";
	}
	if (empty($state)) {
		$flag="Please Enter Your State";
	}
	if (empty($zip)) {
		$flag="Please Enter Your Zipcode";
	}
	if (empty($flag)) {
	
		mysql_query("INSERT INTO forms_data VALUES('NULL','$name','$address1','$address2','$city','$state','$zip','$item_name','$item_code')  ")or die(mysql_error());
		$success="Thank you your order has been placed";

	}



}






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
		<br>												 <div style="  margin-top: 11px;">
<center>
<?php 
if (!empty($flag)) {
					echo "<h4 style='width: 997px;' class='alert alert-danger'>$flag</h4>";	
					}if (!empty($success)) {
						echo "<h4 style='width: 997px;' class='alert alert-success'>$success</h4>";	
					}

?>

														 		<form method='post'>
					 <input type='text' name='name' placeholder='Enter your name' style='  width: 243px;'><br>
					<textarea name='address1' placeholder='Enter Your primary Address' style='margin: 0px; height: 91px; width: 243px;'></textarea>
					<textarea name='address2' placeholder='Enter Your primary Address' style='margin: 0px; height: 91px; width: 243px;'></textarea>
					<input type='text' name='city' placeholder='Enter Your City' style='  width: 243px;'><br>
					<input type='text' name='state' placeholder='Enter Your State' style='  width: 243px;'><br>

					<input type='text' name='zip' placeholder='Enter Your Zip code' style='  width: 243px;'><br>
					<input type='hidden' name='item_name' value="<?php echo $page ?>"><input type='hidden' name='item_code' value="<?php echo $cake ?>" >
						
					
														 	<br>
<input type="submit" name="chkout" value="Checkout" style="width: 159px;height: 45px;" class="btn btn-info" ></center>
</form>
</div>	 	
														<div class="clearfix"></div> 
	     	  		  			 	  	 		  	 		</div> 
	     	  		  			 	  	 		  	 		
	     	  		  			 	  	 		  	 		</div> <!-- slider7 --> 











	     	  		  			 	  	 		  	 		</div> 
	     	  		  			 	  	 		  	 		  <!-- mainContent --> 


	     	  		  			 	  	 		  	 		<?php require 'footer/footer.php'; ?>