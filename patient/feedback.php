<?php session_start();
$user = $_SESSION['user_id'];
include_once("top.php"); ?>

<?php include_once("../shares/db/mydatabase.inc"); ?>


<div id="site_content">		
<!--Starts -->

<?php
	$msg = "";
	
	if(isset($_POST['fd'])){
		
		$f = $_POST['fd'];
		$sql="select ifnull(max(fid),0)+1 from feedback";
		$data=getDatas($sql);
		$msg=mysql_error();
		$id=$data[0][0];
	
		
		$sql = "insert into feedback values($id,'$f',curtime(),curdate(),'$user')";
		setDatas($sql);
		$msg = mysql_error();
		if(!isset($msg) || $msg=='')
		{
			$msg = "Success !!!";
		}
	}
	
?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div id="myform">
	<form method="post">
		<table>
			<tr>
				<td  valign="middle">FEEDBACK</td>
				<td ><textarea name="fd"  rows="5" cols="25"></textarea></td>
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














    