  <!DOCTYPE html>
   <?php
   session_start();
	//$_SESSION['name']="himanshu";
	$naam=$_SESSION['name'];
	echo $naam;
  
  ?>  
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
#team{
	width:400px;
	height:400px;
	float:left;
	color:blue;
}
body, html {
    height: 100%;
    margin: 0;
}

.bg {
    /* The image used */
    background-image: url("background1.jpg");

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
	  
	 
	
}
h1{
 color:orange;
    text-shadow: -1px 0 white, 0 1px white, 1px 0 white, 0 -1px blue;
	font:luoida handwriting;
	text-shadow: #FFF 0px 0px 0px, orange 0px 0px 10px, #FF8C00 0px 0px 15px, #FF8C00 0px 0px 20px, 	#FF8C00 0px 0px 30px, 	#FF8C00 0px 0px 40px, 	#FF8C00 0px 0px 50px, #FF8C00 0px 0px 75px;
color: #FFFFFF;
	
}

</style>
</head>
<script>
function find(){
const xhr=new XMLHttpRequest();
sear=document.getElementById("in").value;
len=sear.length;
if(len>0)
{	
xhr.onload=function(){
const serverResponse=document.getElementById("serverResponse");
serverResponse.innerHTML=this.responseText;

};
xhr.open("POST","rat1.php");
xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xhr.send("name="+sear);
}
else
{
	document.getElementById("serverResponse").innerHTML="";
}
}
</script>
<body>
<?php 
$a 	="himansh";
?>


<div class="bg"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 

<h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <font size="120">TEAM QUIZZING</font></h1> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<center><div id="team"><?php
$a 	="himansh";

$con=mysqli_connect("localhost","root","");
		if (!$con)
		{
			die('Could not connect: ' . mysqli_error());
		}
		mysqli_select_db( $con,"final");
		$rs=mysqli_query($con,"select name from joined where status='0'");
		
		if(mysqli_num_rows($rs)>0)
		{
			while($row = mysqli_fetch_array($rs))
			{	
			
			
			  
			$b=$row['name'];
			 ?> <center><font  color="white"> <?php echo $b; ?> </font> </center><?php 
				  $se="$b";
				  ?> <br><?php
		}
		} 
        else{ echo"problem in wamp server"; 
		}

?>
</div>
 <font  color="white">  TEAM NAME : </font><br><br>
 <font  color="white"> PLAYER 2: </font><input type="search" id="in" placeholder="search" onChange="find();">
	 <span id="serverResponse"></span></center>

</form>


</div>

</div>

</body>
</html>
