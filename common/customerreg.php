<?php 
include("../temp/menu.php");
include("../temp/p00.php");
include_once("../shares/db/mydatabase.inc");?>
<div style="position:relative;width:800px;background-color:white;left:300px;">
<form action=""  method="post">
                                
                                
      <center><br> <h1>Customer Registration</h1>                        
	<table>
	<tr>
	<td>
		<input type="text" name="txt_name" required="required" placeholder="Name"  onkeypress="return verifyText(event)" />
		</td>
		</tr>
		<tr>
		<td>
		<input name="txt_mail" type="email" required="required" placeholder="E-Mail"/>
		</td>
		</tr>
		<tr>
		<td>
		<textarea name="txt_address" placeholder="Address"  rows="5"></textarea>
</td> 
		</tr>
		<tr>
		<td>
	<input type="text" name="txt_contact" required="required" placeholder="Contact"  onkeypress="return verifyText(event)" /></td>
	</tr>
	<tr>
	<td>
		<input type="password" placeholder="Password" name="txt_user_pwd" id="txt_user_pwd" onblur="verifyPwd('txt_user_pwd','err')" required="required"/>
		</td>
		</tr>
		<tr>
		<td>
		<input type="password" placeholder="Confirm Password" name="txt_user_cpwd" id="txt_user_cpwd" onblur="confirmPwd('txt_user_pwd','txt_user_cpwd','err')" required="required"/>
		</td>
		</tr>
		
		
			
		
		
		
                               <tr><td> <button type="submit" value="Save">Save</button>
								
                                <button type="reset" value="Cancel">Cancel</button></td>
								</tr>
		
			<td colspan="2" align="right" style="color:red"><?php echo $msg;?></td>
			</tr>
		
		
                   </table> 
</center>       
                            </form>
							</div>
    
      
<?php
$msg = "";
	if(isset($_POST['txt_name']))
	{
		$name = $_POST['txt_name'];
		$mail = $_POST['txt_mail'];
		$pwd = $_POST['txt_user_pwd'];
		$addr = $_POST['txt_address'];
		$contact = $_POST['txt_contact'];
		$sql = "insert into login values('$mail','$pwd','user',0)";
		setDatas($sql);
		$sql = "insert into customerreg values('$name','$mail','$addr','$contact')";
		setDatas($sql);
		$msg = mysql_error();
		if(!isset($msg) || $msg=='')
		{
			$msg = "Success !!!";
		}
	}
?>  
       