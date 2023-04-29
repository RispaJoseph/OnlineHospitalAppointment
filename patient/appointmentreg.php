<?php session_start();
$user = $_SESSION['user_id'];
include("top.php");

include_once("../shares/db/mydatabase.inc");?>
<div id="site_content">		
<!-- starts -->
<?php
$msg = "";
	if(isset($_POST['txt_name']))
	{
	
		$name = $_POST['txt_name'];
		echo"name=$name";
		$mail = $_POST['txt_mail'];
		$contact = $_POST['txt_contact'];
		$unit=$_POST['unit'];
		$sql = "insert into booking(name,email,contact,unit,date,status)values('$name','$mail','$contact','$unit',curdate(),'processing')";
		setDatas($sql);
		$msg = mysql_error();
		if(!isset($msg) || $msg=='')
		{
			$msg = "Success !!!";
		}
	}
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
						
                              <input name="txt_mail" type="email" required="required" value="<?php echo $user;?>" readonly /><br>
							  <?php
							  $sql="select name,contact from patientreg where email='$user'";
							  $dl=getDatas($sql);
							  ?>
							  <input class="" type="text" name="txt_name" required="required"  value="<?php echo $dl[0][0];?>" readonly  onkeypress="return verifyText(event)" /><br>
							  <input type="text" name="txt_contact" required="required"  value="<?php echo $dl[0][1];?>"  readonly onkeypress="return verifyText(event)" /><br>
							  <select name="unit">
							  <option value="Dermatology">Dermatology</option>
							  <option value="Ophthalmology">Ophthalmology</option>
							  <option value="Gynacology">Gynacology</option>
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
      
