<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css/loginStyle.css" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<table width="835" height="377" border="0" align="center">
  <tr>
    <td width="400" height="44"><img src="images/Totebag/Cover2.png" width="400" height="70" /></td>
    <td width="425"><div>
<ul>
  <li><a href="home.html">Home</a></li>
  <li><a href="#news">My Tote Bag</a></li>
  <li><a href="#contact">Community</a></li>
  <li></li>
  <li><a href="#about">About Us</a></li>
</ul>
</div></td>
  </tr>
  <tr>
    <td height="299" colspan="2">
		 <form  action="login.php" method="post">
		
		<table width="324" height="268" border="0" align="center">
      <tr>
        <td width="294"><p class="imgcontainer">&nbsp;</p>
          <p class="imgcontainer"><img src="images/Totebag/tb.png" alt="Avatar" width="63%" height="195" class="avatar" />
            
          </p>
          <div class="container">
            <p>
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="txtuname" required>
        
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="txtpassword" required>
            </p>
            <p>
			  <?php
				if(isset($_POST["btnsubmit"]))
				{
					$userName = $_POST["txtuname"];
					$password = $_POST["txtpassword"];
					$valid = false;
//sql connection 
					$con = mysqli_connect("localhost","root","","it21706332");
					if(!$con)
					{
						die ("we are facing a technical issue");
					}
//sql quary
					$sql="SELECT * FROM `tb1user` WHERE `email`='".$userName."' AND`password`='".$password."'";
					$result = mysqli_query($con,$sql);
					if(mysqli_num_rows($result)>0)
					{
						$valid = true;
					}
					
//next page location				
					if($valid)
					{
						$_SESSION["userName"]= $userName;
						header("location:myTotebag.php");
					}
					else 
					{
						echo"user name and password is not valid";
					}
				}
				
					
				?>
			  </p>
    
      <button type="submit" name="btnsubmit" >Login</button>
      <label>
        <input type="checkbox" checked="checked" name="chkremember"> Remember me
      </label>
</div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>&nbsp;</td>
      </tr>
    </table>
		</form>
	  </td>
  </tr>
</table>
</body>
</html>
