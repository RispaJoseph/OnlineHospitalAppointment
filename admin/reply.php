<?php include_once("top.php"); ?>
 <?php include_once("../shares/db/mydatabase.inc"); ?>
<div id="site_content">		
<!--Starts -->

<?php
	$msg = "";
	
	if(isset($_POST['rep'])){
		
		$id = $_GET['cid'];
		$rep = $_POST['rep'];
		
		$sql = "update complaint set reply='$rep' where cid=$id";
		setDatas($sql);
		$msg = mysql_error();
		if(!isset($msg) || $msg==''){
			$msg = "Success !!!";
		}
		
	}
	
?>
<br><br><br><br><br><br><br><br><br><br><br><br>
<div id="myform">
	<form method="post">
		<table>
			<tr>
				<td  valign="middle">Reply</td>
				<td ><textarea name="rep"  rows="5" cols="25"></textarea></td>
			</tr>
			<tr>
				<td colspan="2" align="right" style="color:red"><?php echo $msg;?></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" value="SEND"/>
				</td>
			</tr>
			
		</table>
	</form>
</div>
<!--Ends -->
</div>
<br/><br/><br/><br/><br/>

<?php include("../temp/footer.php");?>













    