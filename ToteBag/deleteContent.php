<?php session_start();
$itemid = $_GET["id"];

 $con = mysqli_connect("localhost","root","","it21706332");
		if(!$con)
			{
				die ("we are facing a technical issue");
			}
				  	
//sql quary
		$sql= "DELETE FROM `item` WHERE `item_id` = '".$itemid."'";
				  
		if(mysqli_query($con,$sql))
			{
				echo "file deleted";
					  
			}
				else
				{
					echo "please select the file again !!!!";
				}
					header('location:viewStuff.php');

?>