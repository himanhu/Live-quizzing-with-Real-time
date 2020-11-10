<?php
session_start();
if(!isset($_SESSION["tname"]))
{   
	echo "sessn not working";
	//echo '<script>window.location.href="first.html";</script>';//
}
?>
<?php
$con=mysqli_connect("localhost","root","");
		if (!$con)
		{
			die('Could not connect: ' . mysqli_error());
		}
		$s = $_SESSION["tname"];
    $p = "sessn working love from ";
    echo $p;
	echo $s;
		mysqli_select_db( $con,"final");
		$q="bollywood";
		$rs=mysqli_query($con,"select * from test");
		if(mysqli_num_rows($rs)>0)
		{
			while($row = mysqli_fetch_array($rs))
			{	
			
			
			  
			$b=$row['name'];
				  $se="$b";
		}
		}
        else{ echo"problem in wamp server";
		}



?>