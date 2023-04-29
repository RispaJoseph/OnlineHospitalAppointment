<?php 
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
			$sql = "update login set status=0 where username='$id'";
		}else if($mode=="app"){
			$sql = "update login set status=1 where username='$id'";
		}else{
			$sql = "update login set status=2 where username='$id'";
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
		<th>Medicine Id</th>
		<th>Medicine Name</th>
		<th>Description</th>
		
		
		
	</tr>
	<?php
		$sql = "select * from medication ";
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

