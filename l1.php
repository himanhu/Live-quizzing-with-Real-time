<?php
session_start();
if(isset($_SESSION["n"]))
{
	echo '<center>Welcome  '. $_SESSION['n'].'<br/>';
	
	 
	echo '<a href="logout.php?logout">logout </a>';
}
else{
	header("location:login.html");
}
$na=$_POST['na'];
$_SESSION['qn']=$na;
$ds=$_POST['ds'];
$con =mysqli_connect("localhost","root","");
mysqli_select_db($con,"quiz");
mysqli_connect("localhost","root","");
$query1=("select name from quiz where uid='$uid' and na='$na'");
$rs=mysqli_query($con,$query1);

			$row = mysqli_fetch_array($rs);
			     if($row >0)
				{header("location:adm.php");//yaha pe error messg 
                  mysqli_query($con,$query);				  
				} 	
				else {
					header("location:momo.php");//yaha create krna hoaga
					$query="insert into quiz (name,description,uid) values ('$na','$ds','$uid')";
					mysqli_query($con,$query);
					
				}
				
				
				
				
				 
				
				
				
				 
			
				?>