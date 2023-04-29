<?php session_start();
$user = $_SESSION['user_id'];
include_once("../shares/db/mydatabase.inc");
include("top.php");
$sql="select name from doctorreg where email='$user'";
$d=getDatas($sql);
$name=$d[0][0];
?>
<br><br><br><br><br><br><br><br><br><br><br><br>
<div id="site_content" style="position:relative;top:200px;>	
<!--Starts -->

<form method="post" action="">
	<table class="datagrid" border="2">
	<tr>
	<th>Booking Id</th>
		<th>Name</th>
		<th>E-Mail</th>
		<th>Contact</th>
		<th>Unit</th>
		<th>Date</th>
		<th>Status</th>
		<th>Doctor Name</th>
		<th>Time</th>
	
	</tr>
	<?php
		$sql = "select * from booking where doctorname='$name' ";
		$tbl = getDatas($sql);
		for($i=0;$i<count($tbl);$i++){
			$cl = ($i%2==0)?"eve":"odd";
			echo "<tr class='$cl'>";
			for($j=0;$j<count($tbl[$i]);$j++){
				echo "<td>".$tbl[$i][$j]."</td>";
			}
?>


<?php
			echo "</tr>";
		}
	?>
	</table>
	<span style="color:green;float:right"><?php echo $msg; ?></span>
</form>
<!--Ends -->
</div>

