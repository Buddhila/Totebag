<?php session_start();
$itemid = $_GET["id"];
				  $titlt =$_POST["txtFullName"];
				  $image ="uploads/".basename($_FILES["fileImage"]["name"]);
				  move_uploaded_file($_FILES["fileImage"]["tmp_name"],$image);
				  $discription =$_POST["txtContact"];
				  
				  if(isset($_POST["chkBooks"]))
						{$category="Books";}
				  if(isset($_POST["chkGames"]))
						{$category="Games";}
				  if(isset($_POST["chkMovies"]))
						{$category="Movies";}
				    
				  if(isset($_POST["chkPublish"]))
					  {$status=1;}
				  else
					  {$status=0;}
				 
				  $con = mysqli_connect("localhost","root","","it21706332");
					if(!$con)
					{
						die ("we are facing a technical issue");
					}
				  	
//sql quary
					$sql= "UPDATE `item` SET `title`='".$titlt."',`category`='".$category."',`description`='".$discription."',`path`='".$image."',`published`='".$status."' 
					WHERE `item_id` = '".$itemid."' ";
				  
				  if(mysqli_query($con,$sql))
					{
						echo "file updated Sucessfully";
					  
					}
				  	else
				  	{
					  	echo "please select the file again !!!!";
					}
					header('location:viewStuff.php');

?>