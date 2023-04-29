<?php 
include("top.php");

include_once("../shares/db/mydatabase.inc");?>

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
		<th colspan="3">Edit</th>
	</tr>
	<?php
		$sql = "select * from booking";
		$tbl = getDatas($sql);
		for($i=0;$i<count($tbl);$i++){
			$cl = ($i%2==0)?"eve":"odd";
			echo "<tr class='$cl'>";
			for($j=0;$j<count($tbl[$i]);$j++){
				echo "<td>".$tbl[$i][$j]."</td>";
			}
?>
<td><a href="schedule2.php?id=<?php echo$tbl[$i][0];?> & unit=<?php echo$tbl[$i][4];?> "><font color="blue">Schedule</font></a></td>

<?php
			echo "</tr>";
		}
	?>
	</table>
	<span style="color:green;float:right"><?php echo $msg; ?></span>
</form>
<!--Ends -->
</div>

