<?php
  session_start();
echo"himasnu";
//$a=$_SESSION['qno'];
	$con=mysqli_connect("localhost","root","");

		mysqli_select_db( $con,"final");
		$rs=mysqli_query($con,"select op2,op3 from temp where id=1");
		if(mysqli_num_rows($rs)>0)
		{
			while($row = mysqli_fetch_array($rs))
			{	$b=$row['op2'];
		        $c=$row['op3'];
            }
		} 
        else{ echo"problem in wamp server"; 
		}
?>
	<?php echo "player1=".$b;?>
	   <?php echo "player2=".$c;?>
   
