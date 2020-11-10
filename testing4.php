<!DOCTYPE html>
<html>
<head>
 <?php 
  session_start();
  ?>


<style>
#logocontainer{
  display:block;
  position:relative;
  top:20%;
  left:90%;
  width:34vh;
  height:34vh;
  margin-left:200px;
  margin-top:10px;
  overflow:hidden;
  transition:background-color 500ms;
  cursor:pointer;
}

#pelogo{
  display: block;
  position: absolute;
  left: 2vh;
  top: 2vh;
  width: 30vh;
  height: 30vh;
  background: #34324b;
  background: -moz-linear-gradient(-45deg, #34324b 0%, #161222 100%);
  background: -webkit-linear-gradient(-45deg, #34324b 0%,#161222 100%);
  background: linear-gradient(135deg, #34324b 0%,#161222 100%);
  background-size: contain;
  font-family: Trebuchet MS, sans-serif;
  font-size: 20vh;
  font-weight: bold;
  color: #3ebffa;
  text-align: center;
  line-height: 30vh;
}

.loader{
  display:block;
  position:absolute;
  background-color:#3ebffa;
}

/*Pretty complex animation, so each side needs its own @keyframes.*/

@keyframes slide1{
  50%{width:32vh; margin-left:0;}
  100%{margin-left:32vh;}
}

@keyframes slide2{
  50%{height:32vh; margin-top:0;}
  100%{margin-top:32vh;}
}

@keyframes slide3{
  50%{width:32vh; margin-right:0;}
  100%{margin-right:32vh;}
}

@keyframes slide4{
  50%{height:32vh; margin-bottom:0}
  100%{margin-bottom:32vh;}
}
 } ;
					
            
	
			
</style>
<style>
body {
	 background: lime;	
	 position:absolute;
 
}
.test{
    height:80px;
    width:400px;
	color: transparent;
	border-radius:20px;
	cursor: pointer;
}
#option1{       margin-top:100px;
			     margin-left:150px;
                float:left; 
                background:blue; 
                width:400px; 
                height:80px; 
				 opacity: 0.7;
				 border-radius:20px;
					
            }	
#option2{       margin-top:100px;
			     margin-left:10px;
                float:left;  
				 border-radius:20px;
		        background:pink; 
                width:400px; 
                height:80px; 
				 opacity: 0.7;
					
            }	
#lower{       margin-top:200px;
			     margin-left:150px;
                  
				 border-radius:20px;
		        background-color: lime;
                width:810px; 
                height:80px; 
				 opacity: 0.7;
			
				
					
            }
#option3{       margin-top:1px;
			    margin-left:0px;
                float:left;  
				 border-radius:20px;
		        background:green; 
                width:400px; 
                height:80px; 
				 opacity: 4.0;
					
            }
#option4{       margin-top:1px;
			    margin-left:10px;
                float:right;  
				 border-radius:20px;
		        background:pink; 
                width:400px; 
                height:80px; 
				 opacity: 2.0;
					
            }		
}
			
</style>

<script>
/*
*   A simple loading icon based on my 
*   own logo that I use for reddit and
*   GitHub. Made entirely with CSS components
*   with no external resources. Click the
*   loader to view the original logo.
*
*   Yes, it's based on the Photoshop logo.
*/

var full=false;

function fill(){
  full=!full;
  document.getElementById("logocontainer").style.backgroundColor=full?"#3ebffa":"transparent";
}
</script>
<script> 

			var counter=10;
			
			setInterval( function()
			{    
				counter--;
			if(counter>=0)
			{
				id=document.getElementById("count");
				id.innerHTML=counter;
				dis();
			}
			
			},1000);


			setTimeout(function()
			{
			window.location = "c.php";
			},10000);
	
</script><script>
function dis()
{
	xmlhttp=new XMLHttpRequest();
	xmlhttp.open("GET","demo.php",false);
	xmlhttp.send(null);
	document.getElementById("otb").innerHTML=xmlhttp.responseText;
}
dis();
setInterval(function(){
dis();
},2000);
</script>
             

<script>
function myFunction() {
  document.getElementById("myBtn").disabled = true;
}
 function changeBodyBg(no,color){
        document.body.style.background = color;
		document.getElementById("lower").style.background = color;
		document.getElementById("myBtn").disabled = true;
		document.getElementById("myBtn2").disabled = true;
		document.getElementById("myBtn3").disabled = true;
		document.getElementById("myBtn4").disabled = true;
		 var a=no;	
		 find(a);
		
		
				 
				 if(no == 1)
				 {   //document.write(no);
		              
                     document.getElementById("demo").innerHTML=no;
					  
					
				 }
				  if(no == 2)
				 {   //document.write(no);
			 
			       document.getElementById("demo").innerHTML=no;
					
				 }
				  if(no == 3)
				 {   //document.write(no);
			 
					document.getElementById("demo").innerHTML=no;
				 }
				  if(no == 4)
				 {    //document.write(no);
			 
					document.getElementById("demo").innerHTML=no;
				 }
    }
</script>
<script>
function find(a){
const xhr=new XMLHttpRequest();
sear=a;
len=sear.length;
if(len>0)
{	
xhr.onload=function(){
const serverResponse=document.getElementById("serverResponse");
serverResponse.innerHTML=this.responseText;

};
xhr.open("POST","jsphp.php");
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
<div id="question">
<span id="serverResponse"></span><div>
<?php 
$_SESSION['qno']++;
$a=$_SESSION['qno'];
if($a==6)
{
	echo '<script>window.location.href="end.php"</script>';
}
//echo"$a";
 $con=mysqli_connect("localhost","root","");
		if (!$con)
		{
			die('Could not connect: ' . mysqli_error());
		}
		mysqli_select_db( $con,"final");
		$rs=mysqli_query($con,"select * from temp where qid='1793'and id='$a'");
		if(mysqli_num_rows($rs)>0)
		{  
			while($row = mysqli_fetch_array($rs))
			{
			?><font size="100px" color="black"> <b> <?php echo"Q.no";echo".".$a."-";?>  &nbsp;&nbsp;&nbsp;<?php	echo $row['ques'];?> </font><?php
				?><span id="otb"></span>
  <div id="logocontainer" onclick=fill()>
      <div id="pelogo"><span id="count">10</span></div>
	  
      <div class="loader" style="left:2vh; top:0; height:2vh; width:0; animation:slide1 1s linear forwards infinite"></div>
      <div class="loader" style="right:0; top:2vh; width:2vh; height:0; animation:slide2 1s linear forwards infinite; animation-delay:0.5s"></div>
      <div class="loader" style="right:2vh; bottom:0; height:2vh; width:0; animation:slide3 1s linear forwards infinite"></div>
      <div class="loader" style="left:0; bottom:2vh; width:2vh; height:0; animation:slide4 1s linear forwards infinite; animation-delay:0.5s"></div>
    </div>
 
  <div id="option1"><button  value="1"id="myBtn" class="test"type="button" onclick="changeBodyBg('1','orange');"><b><font size="20px"color="black"><?php echo $row['an1'];?></font></b></button></div>
	<div id="option2"><button id="myBtn2" class="test"type="button" onclick="changeBodyBg('2','lime');"><b><font size="20px"color="black"><?php echo $row['an2'];?> </font></b></button> </div>
	<div id="lower"> 
      <div id="option3"><button id="myBtn3" class="test"type="button" onclick="changeBodyBg('3','red');"><b><font size="20px"color="black"><?php echo $row['an3'];?> </font></b></button> </div>
	  <div id="option4"><button id="myBtn4" class="test"type="button" onclick="changeBodyBg('4','yellow');"><b><font size="20px"color="black"><?php echo $row['an4'];?> </font></b></button> </div>	</div>
	  <span id="otb"></span>
	<?php
	$con=mysqli_connect("localhost","root","");

		mysqli_select_db( $con,"final");
		$rs=mysqli_query($con,"select op2,op3 from temp where id='$a'");
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
   
		
</body>
	




<?php 
			}
		}
		?>




</head>


</html>