<?php session_start();
$user = $_SESSION['user_id']; 
include("top.php");

include_once("../shares/db/mydatabase.inc");?>

<div id="site_content" style="position:relative;top:200px;>	
<!--Starts -->

<?php
	$msg = "";
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$mode = $_GET['mode'];
		if($mode=="pen"){
			$sql = "update booking set status='Cancel' where bid='$id'";
		}else if($mode=="app"){
			$sql = "update booking set status='Ok' where bid='$id'";
		}else{
			//$sql = "update login set status=2 where username='$id'";
		}
		setDatas($sql);
		$msg = mysql_error();
		if(!isset($msg) || $msg==''){
			$msg = "Success !!!";
		}
	}
?>

<form method="post">
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
	
		<th colspan="2">Update</th>
		<th>View Doctors</th>
	</tr>
	<?php
		$sql = "select * from booking where email='$user'";
		$tbl = getDatas($sql);
		for($i=0;$i<count($tbl);$i++){
			$cl = ($i%2==0)?"eve":"odd";
			echo "<tr class='$cl'>";
			for($j=0;$j<count($tbl[$i]);$j++){
				echo "<td>".$tbl[$i][$j]."</td>";
			}
?>
<td><a href="?id=<?php echo $tbl[$i][0]?>&mode=pen"><font color="blue">Cancel</font></a></td>
<td><a href="?id=<?php echo $tbl[$i][0]?>&mode=app"><font color="blue">Approved</font></a></td>
<td><a href="viewdoctors2.php?did=<?php echo $tbl[$i][7]?>"><font color="blue">View Doctor Details</font></a></td>
<?php
			echo "</tr>";
		}
	?>
	</table>
	<span style="color:green;float:right"><?php echo $msg; ?></span>
</form>
<!--Ends -->
</div>

