<?php
   session_start();
	//$_SESSION['name']="himanshu";
	$naam=$_SESSION['name'];
	echo $naam;
  
  ?>
<?php

$name=$_POST["name"];
$con=mysqli_connect("localhost","root","","final");
if(!$con)
{
}
$query="select name from `joined` where `name` like'%$name%'";
if($is_query=mysqli_query($con,$query))
{while($query_exe=mysqli_fetch_assoc($is_query))
{
 ?>
 <form action="createback1.php" method="POST">
			<button  id ="t1" name="t1" type="submit" value="<?php echo  $query_exe["name"] ?>"> <?php echo $query_exe['name']; ?></button>
			</form>
	
<?php
}
}


?>
