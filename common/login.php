<?php session_start();
include("../temp/top.php");

include_once("../shares/db/mydatabase.inc");?>
<div id="site_content">		
<!-- starts -->
<?php
	if(isset( $_POST['txt_user_id'])){
		$usr = $_POST['txt_user_id'];
		$pwd = $_POST['txt_user_pwd'];
		$sql = "select type,status from login where username='$usr' and password='$pwd'";
		$tbl = getDatas($sql);
		$msg = mysql_error();
		if($msg==""){
			if(count($tbl)>0){
				if($tbl[0][1]==1){
					$_SESSION['user_id'] = $usr;
					nextPage('../'.$tbl[0][0]);
				}else if($tbl[0][1]==2){
					$msg = "rejected";
				}else{
					$msg = "waiting for approval";
				}
			}else{
				$msg = "Invalid login !!!";
			}
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
    
<?php
  include("../temp/footer.php");

?>  
                           
 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>  
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>            
    <section class="contact">
		<div class="container">
			<div class="row">
				<div class="contact-caption clearfix">
					<div class="contact-heading text-center">
						<h2>Login</h2>
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
						<h3>Sign in</h3>

						<form action="" method="post">
						 <input type="text" name="txt_user_id" id="txt_user_id" required="required" placeholder=" User Id"/><br>
                               <input type="password" name="txt_user_pwd" id="txt_user_pwd" required="required"  placeholder="Password"/><br>
                              <a href="patientreg.php">New Patient?Sign Up</a><a href="doctorreg.php">New Doctor?Sign Up</a><a href="hospitalreg.php">New Hospital?Sign Up</a>
							  <a href="staffreg.php">New Staff?Sign Up</a>
                            <input class="submit-btn" type="submit" value="LOGIN">
						<br><br><br><br>
							
                               
                               
							
							
						</form>
					</div>
				</div>
			</div>