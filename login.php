<?php
session_start();
include 'connection.php';
 $con=mysqli_connect("localhost","root","");
		if (!$con)
		{
			die('Could not connect: ' . mysqli_error());
		}
		mysqli_select_db( $con,"final");

$ui=$_POST['uid'];
$pwd=$_POST['pwd'];
$_SESSION["uid"]=$ui;
$query1=("select * from user where uid='$ui' and pwd='$pwd'");
$r=mysqli_query($con,$query1);
$row=mysqli_fetch_array($r,MYSQLI_ASSOC);
if(mysqli_num_rows($r)==1)
{ 
	$name=$row['name'];
	$_SESSION["n"]=$name;
	header("location:pahlapage1.php");//chnage kiya 

}
else  
	echo "doesnt exits";

if(isset($_SESSION["n"]))
{
	echo '<center>Welcome  '.$_SESSION["n"].'<br/>';
	echo $ui;
	echo $pwd;
	 
	echo '<a href="logout.php?logout">logout </a>';
}
else{
	header("location:login.html");
}

?>