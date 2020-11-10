<?php 
  session_start();
 
$name=$_POST["name"];
echo $name;
$a=$_SESSION['qno'];
 $con=mysqli_connect("localhost","root","");
		if (!$con)
		{
			die('Could not connect: ' . mysqli_error());
		}
		mysqli_select_db( $con,"final");
		$t="update `temp` set op1='$name' where id='$a'";
		mysqli_query($con,$t);

?>
