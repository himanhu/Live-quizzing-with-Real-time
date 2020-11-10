<?php
session_start();

if((!isset($_POST["uname"]))||(!isset($_POST["uname"]))||(!isset($_POST["uname"])))
{
	echo '<script>window.location.href="login1.php"</script>';
}
session_start();
$uname=$_POST["uname"];
$pwd=$_POST["pwd"];
$email=$_POST["email"];
 echo $uname;
 echo $pwd;
 
 $con=mysqli_connect("localhost","root","");
		if (!$con)
		{
			die('Could not connect: ' . mysqli_error());
		}
		mysqli_select_db( $con,"final");
		$q="himanshu";
		$u="user";
		echo $q;
		
		$rs=mysqli_query($con,"select * from test where name='$uname'and password='$pwd'");
         
 if(mysqli_num_rows($rs)>0)
		{

			
			
			
			while($row = mysqli_fetch_array($rs))
			{       $x=$row['name'];
		             $y=$row['password'];
					  $z="admin";	
				if($x==$q)
				{ $_SESSION['tname']=$x;
		          header("location:admin.php");
				}
				else{ 
				    if($z==$u)
					{	$_SESSION['tname']=$x;
					 header("location:hi.php");
				    }
				}
				
				 echo $x;
				  echo $y;
				   echo $z;
				
				
				
				 
				
				?>
				 
				
				
				
				
				
				
			<?php	
			   
		
			}
		}
		else
		{     header("location:sign-in.html");
			echo("ID Does Not Exist");
		       
		}
		mysqli_close($con);

	
?>
 
 