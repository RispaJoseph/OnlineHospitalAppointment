<?php 

include("top.php");

include_once("../shares/db/mydatabase.inc");?>
<div id="site_content">		
<!-- starts -->
<?php
$msg = "";
	
		$bid = $_POST['txt_bid'];
		?>
		<br><br><br><br><br><br><br>
		<?php
		
		$doctor = $_POST['doctors'];
$new_time = date("Y-m-d H:i:s", strtotime('+3 hours', $now));


		$sql = "update `booking` set `doctorname`='$doctor',`status`='Approved',`time`='$new_time'  where bid=$bid";
		setDatas($sql);
		$msg = mysql_error();
		
	
?>  
       
<!-- Ends -->
</div>






<link rel="stylesheet" href="../temp/css/font-awesome.min.css">
	<link rel="stylesheet" href="../temp/css/bootstrap.min.css">
	<link rel="stylesheet" href="../temp/css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
 
                           
 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>  
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>            
    <section class="contact">
		<div class="container">
			<div class="row">
				<div class="contact-caption clearfix">
					<div class="contact-heading text-center">
						<h2>Sign up</h2>
					</div>
					<div class="col-md-5 contact-info text-left">
						<h3>contact information</h3>
						<div class="info-detail">
							<ul><li><i class="fa fa-calendar"></i><span>Monday - Friday:</span> 9:30 AM to 6:30 PM</li></ul>
							<ul><li><i class="fa fa-map-marker"></i><span>Address:</span> 123 Some Street , London, UK, CP 123</li></ul>
							<ul><li><i class="fa fa-phone"></i><span>Phone:</span> (032) 987-1235</li></ul>
							<ul><li><i class="fa fa-fax"></i><span>Fax:</span> (123) 984-1234</li></ul>
							<ul><li><i class="fa fa-envelope"></i><span>Email:</span> info@doctor.com</li></ul>
						</div>
					</div>
					<div class="col-md-6 col-md-offset-1 contact-form">
						<h3>Patient Sign in</h3>

						<form action="" method="post">
						<?php
						$sql="select email from booking where bid=$id";
						$tbl=getDatas($sql);
						$user = $tbl[0][0];
						?>
						 <input name="txt_bid"  required="required" value="<?php echo $id;?>" readonly /><br>
                              <input name="txt_mail" type="email" required="required" value="<?php echo $user;?>" readonly /><br>
							  <?php
							  $sql="select name,contact from patientreg where email='$user'";
							  $dl=getDatas($sql);
							  ?>
							  <input class="" type="text" name="txt_name" required="required"  value="<?php echo $dl[0][0];?>" readonly  onkeypress="return verifyText(event)" /><br>
							  <input type="text" name="txt_contact" required="required"  value="<?php echo $dl[0][1];?>"  readonly onkeypress="return verifyText(event)" /><br>
							  <input name="txt_unit"  required="required" value="<?php echo $unit;?>" readonly /><br>
							  <select name="doctors">
							  
							  <?php
							  $sql="select name from doctorreg where specialization='$unit'";
							  $tbl=getDatas($sql);
							  for($i=0;$i<count($tbl);$i++)
							  {
							  ?>
							  <option value="<?php echo $tbl[$i][0];?>"><?php echo $tbl[$i][0];?></option>
							  
							  <?php 
							  }
							  ?>
							  </select>
							  
							 
                           
                            <input  type="submit" value="SAVE">
							<button type="reset" value="Cancel">Cancel</button>
						<br><br><br><br>
							
                               
                               
							
							
						</form>
					</div>
				</div>
			</div>


    <?Php
	include_once('../temp/footer.php');
	?>
      
