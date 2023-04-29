<?php 
include("../temp/top.php");

include_once("../shares/db/mydatabase.inc");?>
<div id="site_content">		
<!-- starts -->
<?php
$msg = "";
	if(isset($_POST['txt_name']))
	{
		$name = $_POST['txt_name'];
		$mail = $_POST['txt_mail'];
		$pwd = $_POST['txt_user_pwd'];
		$addr = $_POST['txt_address'];
		$contact = $_POST['txt_contact'];
		$sql = "insert into login values('$mail','$pwd','patient',0)";
		setDatas($sql);
		$sql = "insert into staffreg values('$name','$mail','$addr','$contact')";
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
						<h3>Staff Sign in</h3>

						<form action="" method="post">
						<input class="" type="text" name="txt_name" required="required" placeholder="Name"  onkeypress="return verifyText(event)" /><br>
                              <input name="txt_mail" type="email" required="required" placeholder="E-Mail"/><br>
							  <textarea name="txt_address" placeholder="Address"  rows="5"></textarea><br>
							  <input type="text" name="txt_contact" required="required" placeholder="Contact"  onkeypress="return verifyText(event)" /><br>
							  <input type="password" placeholder="Password" name="txt_user_pwd" id="txt_user_pwd" onblur="verifyPwd('txt_user_pwd','err')" required="required"/><br>
							  <input type="password" placeholder="Confirm Password" name="txt_user_cpwd" id="txt_user_cpwd" onblur="confirmPwd('txt_user_pwd','txt_user_cpwd','err')" required="required"/>
		
                           
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
      
