 <?php include("header/header.php"); 
$page=$_REQUEST['page'];
$pro=$_REQUEST['pro'];
$main=$_REQUEST['main']; 
require 'database_connection.php';

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
 <div id="ro-main" class="ro-main clearfix">
      <div class="ro-section ro-padding-top">
        <div class="container">
          <div class="row ro-section-mb">
            <div class="col-lg-8 col-lg-offset-2 text-center ro-shop-intro">
              <p>* * *<br/>When you have once seen the glow of happiness on the face of a beloved person, you know that a man can have no vocation but to awaken that light on the faces surrounding him. In the depth of winter,&nbsp;<br class="hidden-xs"/>I finally learned that within me there lay an invincible summer.</p>
            </div>
          </div>
          <div class="row ro-section-mb">
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="ro-shop-item ro-center-block"><img src="view/assets/images/<?php if(!empty($main)){ echo $main."/"; }  echo $page; ?>/<?php echo $pro; ?>.jpg" alt="shop image" class="img-responsive"/>
                <div class="ro-overlay">
                  <div class="ro-shop-overlay ro-cell-vertical-wrapper text-center">
                    <div class="ro-cell-middle">
                      
                      <h2 class="ro-shop-item-price-1">10$</h2><a href="form.php?page=<?php echo $page; ?>&pro=<?php echo $pro; ?>&main=<?php if(!empty($main)){ echo $main; } ?>" class="ro-btn-bd-2">Buy</a>
                    </div>
                  </div>
                </div>
                
              </div>
           
            </div>
            <div><?php   

            if ($page=="oil") {
              echo "This moisturising massage oil contains 100% natural-origin citrus ingredients. It will leave skin ... For best results, use with other products in the Spa Fit range.";
            }if ($page=="gel") {
              echo "With a unique formula containing Dead Sea salt and extract of Aloe vera, Mineral Massage shower gel provides a gentle scrubbing action. Discover the ancient ...";
            }if ($page=="lotion") {
              echo "We take pride in offering you quality massage oils and creams, massage tables, spa equipment, massage table linens, essential oils.";
            }if ($page=="gloves") {
             echo "Massage Glove with 9 360-degree-roller Metal Roller Ball Beauty Body Care, Pink ... New Head Massager Neck Massage Octopus Scalp Stress Relax Spa  ...";
            }if ($page=="apparels") {
              echo "These 'made for the way you move' collections pave the way for your spa or hotel to approach a uniform program with an out-of-the-box, stylish, functional ...";
            }if ($page=="Furniture") {
             echo "Style Spa is one of the leading home and kitchen furniture shops in all over India for more than a decade and is head quartered in Chennai.";
            }if ($page=="skin") {
             echo "Massage Envy Spa facials feature Murad skincare products and treatments that are specially formulated. All four spa facials offer essentially therapeutic ..";
            }if ($page=="masks") {
              echo "TSUBAKI Head Spa Mask with Essential Oil rejuvenates overworked and dull hair. It is a luxurious thick conditioning mask infused with a blend of hair nurturing ...";
            }
            ?>
           
<?php 
if (!empty($flag)) {
          echo "<h4 style='  width: 515px;margin-left: 307px;' class='alert alert-danger'>$flag</h4>"; 
          }if (!empty($success)) {
            echo "<h4 style='  width: 515px;margin-left: 307px;' class='alert alert-success'>$success</h4>"; 
          }

?>
 <center>
                                <form method='post' style='width: 0;'>
           <input type='text' name='name' placeholder='Enter your name' style='width: 243px;'><br>
          <textarea name='address1' placeholder='Enter Your primary Address' style='margin: 0px; height: 91px; width: 243px;'></textarea><br>
          <textarea name='address2' placeholder='Enter Your primary Address' style='margin: 0px; height: 91px; width: 243px;'></textarea><br>
          <input type='text' name='city' placeholder='Enter Your City' style='  width: 243px;'><br>
          <input type='text' name='state' placeholder='Enter Your State' style='  width: 243px;'><br>

          <input type='text' name='zip' placeholder='Enter Your Zip code' style='  width: 243px;'><br>
          <input type='hidden' name='item_name' value="<?php echo $page ?>"><input type='hidden' name='item_code' value="<?php echo $pro; ?>" >
            
          
                              <br>
<input type="submit" name="chkout" value="Checkout" style="width: 159px;height: 45px;" class="btn btn-info" ></center>
</form>



          </div>
          </div>
        </div>
      </div>
   <?php include("footer/footer.php"); ?>