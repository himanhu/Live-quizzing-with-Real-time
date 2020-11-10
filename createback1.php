
<?php
   session_start();
	//$_SESSION['name']="himanshu";
	$naam=$_SESSION['name'];
	echo $naam;
  
  ?><?php 
echo"hello";
$a=1;
$tdm=$_POST["t1"];
if(!isset($_POST["t1"]))
{    echo "no";
}
else{
	 $con=mysqli_connect("localhost","root","");
		if (!$con)
		{
			die('Could not connect: ' . mysqli_error());
		}
		mysqli_select_db( $con,"final");
	echo "done";
	$tdm=$_POST["t1"];
    echo $tdm;
	$s="update `team` set player3='$tdm' where player1='$naam'";
	$t="update `joined` set status='$a' where name='$tdm'";
	if(!@mysqli_query($con,$s))
		{
			echo "Record Not Inserted2";
			}
			else{
				echo "insertted";
			}
			if(!@mysqli_query($con,$t))
		{
			echo "Record Not Inserted2";
			}
			else{
				echo "insertted";
				echo '<script>window.location.href="testing3.php"</script>';
			}
			
}
?>