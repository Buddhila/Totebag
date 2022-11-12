<?php session_start();
if(!isset($_SESSION["userName"]))
{
	header("location:login.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css/basicStyle.css" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">	
</head>

<body>
	<?php
	$con = mysqli_connect("localhost","root","","it21706332");
					if(!$con)
					{
						die ("we are facing a technical issue");
					}
				  	
	$sql ="SELECT * FROM `tb1user` WHERE `email`= '".$_SESSION["userName"]."'";
	
	$result=mysqli_query($con,$sql);
	
	if(mysqli_num_rows($result)>0)
	{
		$row =mysqli_fetch_assoc($result);
	
		
	?>
<table>
	<tr>
		<td colspan="2" bgcolor="#FFFFFF"><h1>My Profile</h1></td>
	</tr>
	<tr align="center">
		<td colspan="2" bgcolor="#FFFFFF"><img src="" width="236" height="254"></td>
	</tr>
	<tr>
	<td width="146">Full Name</td>
	<td width="227"><input type="text" name="txtFullName" id="txtFullName" value="<?php echo $row["full_name"];?>" readonly></td>
	</tr>
	<tr>
	<td width="146">Email</td>
	<td width="227"><input type="text" name="txtEmail" id="txtEmail" value="<?php echo $row["email"];?>" readonly></td>
	</tr>
	<tr>
	<td width="146">Contact Number</td>
	<td width="227"><input type="text" name="txtContact" id="txtContact" value="<?php echo $row["contact"];?>" readonly></td>
	</tr>
	<tr>
	
	<td width="227"><a href="myTotebag.php"><input name="btn" type="button" class="button" id="btn" value="Back"   /></a></td>
	</tr>
	</table>
	<?php
		}
	mysqli_close($con);
		 ?>
</body>
</html>