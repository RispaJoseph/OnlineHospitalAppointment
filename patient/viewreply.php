<?php session_start();
include_once('top.php'); ?>
<?php include_once("../shares/db/mydatabase.inc"); ?>
<div id="site_content">		
<!--Starts -->
<br><br><br><br><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<form method="post">
	<table class="datagrid"border="1">
	<tr>
		<th>Complaint</th>
		<th>Reply</th>
		
	</tr>
	<?php
		$user=$_SESSION['user_id'];
		$sql = "select complaint,reply from complaint where username='$user'";
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
	</table >
	<span style="color:green;float:right"><?php echo $msg; ?></span>
</form>
<!--Ends -->
</div>
<br/><br/><br/><br/><br/>
<?php include("../temp/footer.php");?>