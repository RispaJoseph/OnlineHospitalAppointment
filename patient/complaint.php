<?php session_start();
 include("top.php");?>
<?php include_once("../shares/db/mydatabase.inc"); ?>

<div id="site_content">		
<!--Starts -->

<?php
	$msg = "";
	$user = $_SESSION['user_id'];
	if(isset($_POST['txt_complaint'])){
		
		$complaint = $_POST['txt_complaint'];
		$sql="select ifnull(max(cid),0)+1 from complaint";
		$data=getDatas($sql);
		$msg=mysql_error();
		$id=$data[0][0];
	
		
		$sql = "insert into complaint(cid,complaint,date,time,username) values($id,'$complaint',curdate(),curtime(),'$user')";
		setDatas($sql);
		$msg = mysql_error();
		if(!isset($msg) || $msg==''){
			msgbox("Compalint added Successfully !!!");
		}
	}
	
?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div id="myform">
	<form method="post">
		<table>
			<tr>
				<td  valign="middle">complaint</td>
				<td ><textarea name="txt_complaint"  rows="5" cols="25"></textarea></td>
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














    