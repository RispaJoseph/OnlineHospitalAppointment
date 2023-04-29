<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<?php include_once("../shares/db/mydatabase.inc"); ?>
<form action="login.php" method="post">
<?php
$sql="select pid,pname,Product,price from productdetails";
$tbl=getDatas($sql);
?>
<table>
<tr>
<?php
echo "<td><div class='container'><div class='row'><div class='col-sm-4' style='background-color:white;width:200px;height:400px;float:left;margin-left:150px;margin-top:25px;margin-bottom:15px;'>
<table style='background-color:white;'>";
for($i=0;$i<count($tbl);$i++)
{
for($j=0;$j<count($tbl[$i]);$j++)
{

}
echo "<tr><td><img src='".$tbl[$i][1]."' style='width: 200px;height: 300px;position: relative;left: 20px;top: 10px;' /></td></tr>
<tr><td></td></tr>
<tr><td><h3>".$tbl[$i][2]."</h3></td></tr>
<tr><td>Rs.".$tbl[$i][3]."</td></tr>";
echo"<tr><td><button type='submit' value='Save'>BUY NOW</button></td></tr>";
			
				
}



?>
</table>
</div>
</div>
</div>

