
<?php
   session_start();
	//$_SESSION['name']="himanshu";
	$naam=$_SESSION['name'];
	echo $naam;
  ?><?php 
echo"hello";
$tdm=$_POST["t1"];
if(!isset($_POST["t1"]))
{    echo "no";
}
	 $con=mysqli_connect("localhost","root","");
		if (!$con)
		{
			die('Could not connect: ' . mysqli_error());
		}
		mysqli_select_db( $con,"final");
	echo "done";
	$tdm=$_POST["t1"];
	
    echo $tdm;
	$tt="runjhun";
	echo $tt;
	echo $tdm;
	
	$a=1;
	echo $a;
	$t="update `joined` set status='$a' where name='$tdm'";
	$s="update `team` set player2='$tdm' where player1='$naam'";
	mysqli_query($con,$t);
	mysqli_query($con,$s);
	echo '<script>window.location.href="createteam2.php"</script>';

?>