<?php

session_start();
if(!isset($_SESSION["tname"]))
{
	//echo '<script>window.location.href="first.html";</script>';
}
?>
<?php
$con=mysqli_connect("localhost","root","");
		if (!$con)
		{
			die('Could not connect: ' . mysqli_error());
		}
		mysqli_select_db( $con,"movie_now");
		$q="bollywood";
		$rs=mysqli_query($con,"select * from name");
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
<html>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
xhr.open("POST","rat.php");
xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xhr.send("name="+sear);
}
else
{
	document.getElementById("serverResponse").innerHTML="";
}
}
</script>
  </head>
<style>


#con{ border-radius: 10px,10px;
	  width: 100%;
	height:1000px;

       margin-left:auto;
	   margin-right:auto;
	   margin-top:15px
	   background-color:green;
}
#header{ border-radius: 10px;
	
	height:65px;
	width:full;
	 
	background: linear-gradient(to left, yellow, tomato);
	}
	

#menu{border-radius: 10px ,10px;
	margin-top:10;
	height:60px;
	width:60px;
	background-color:grey;
}


#mainbody{ border-radius: 10px;
	margin-top:0;
	 width:full;
	 height:880px;;
	 background: cornsilk;
	 
	 
}
#rotate{
     width:600px;
	 height:170px;
	 margin-left:330px;
	   
	 	 background-color:white;
		body-aligin:center;
}
#write{
  border-radius: 10px;
   width:600px;
   height:70px;
   margin-left:330px;
   margin-top:10px;
   background-color:white;


}
#dtext1{
  border-radius: 10px;
   width:600px;
   height:400px;
   margin-left:330px;
   margin-top:10px;
   background-color:black;


}
#dtext2{
  border-radius: 10px;
   width:300px;
   height:80px;
   margin-left:0px;
   margin-top:10px;
   background-color:white;
   float:left;
  


}
#dtext3{
  border-radius: 10px;
   width:300px;
   height:80px;
   margin-left:0px;
   margin-top:10px;
   background-color:white;
   float:right;
  


}

#sidebar{
border-radius: 10px;
   width:200px;
   height:70px;
   margin-left:50px;
   margin-top:6px;
   margin-bottom:5px;
   position:relative;
   background-color:#E67451 ;
   float:left;



}
#side{
border-radius: 10px;
   width:200px;
   height:70px;
   margin-left:50px;
   margin-right:50px;
   margin-top:5px;
   
   background-color:#E67451;
   float:right;



}

#footer{
	 border-radius: 10px;
	 margin-top:10px;
	height:60px;
	margin-bottom:10px;
	background: linear-gradient(to left, orange	, tomato);
	
} /*shadow */
#dtext {
border-radius: 10px;
color: #FFFFFF;
background: #333333;
text-shadow: #FFF 0px 0px 0px, orange 0px 0px 10px, #FF8C00 0px 0px 15px, #FF8C00 0px 0px 20px, 	#FF8C00 0px 0px 30px, 	#FF8C00 0px 0px 40px, 	#FF8C00 0px 0px 50px, #FF8C00 0px 0px 75px;
color: #FFFFFF;
background: black;
}

</style>
<style>


ul {
    padding: 0;
    list-style-type: none;
}

ul li {
    box-sizing: border-box;
    width: 10em;    /*lenght of button*/
    height: 3em;
    font-size: 20px;
    border-radius: 0.5em;
    margin: 0.5em;
    box-shadow: 0 0 1em rgba(0,0,0,0.2);
    color: white;
    font-family: sans-serif;
    text-transform: capitalize;
    line-height: 3em;
    transition: 0.3s;
    cursor: pointer;
}

ul li:nth-child(odd) {
    background: linear-gradient(to right, orange, tomato);
    text-align: left;
    padding-left: 10%;
    transform: perspective(500px) rotateY(45deg);
}

ul li:nth-child(even) {
    background: linear-gradient(to left, orange, tomato);
    text-align: right;
    padding-right: 10%;
    transform: perspective(500px) rotateY(-45deg);
}

ul li:nth-child(odd):hover {
    transform: perspective(200px) rotateY(45deg);
    padding-left: 5%;
}

ul li:nth-child(even):hover {
    transform: perspective(200px) rotateY(-45deg);
    padding-right: 5%;
}


</style>
<style>

button{
  display: inline-block;
  position: relative;
  background: none;
  border: none;
  color: #fff;
  font-size: 5px;
  cursor: pointer;
  margin: 10px 10px;
  background: rgba(0,0,0,0.0);
}
span{
  display: block;
  padding: 5px 3px;
}
button::before, button::after{
  content:"";
  width: 0;
  height: 2px;
  position: absolute;
  transition: all 0.2s linear;
  background: #fff;
}

span::before, span::after{
  content:"";
  width:2px;
  height:0;
  position: absolute;
  transition: all 0.2s linear;
  background: #fff;
}
button:hover::before, button:hover::after{
  width: 100%;
}
button:hover span::before, button:hover span::after{
  height: 100%;
}


/*----- button 6 -----*/
.btn-6::before{
  left: 50%;
  top: 0;
  transition-duration: 0.4s;
}
.btn-6::after{
  left: 50%;
  bottom: 0;
  transition-duration: 0.4s;
}
.btn-6 span::before{
  left: 0;
  top: 50%;
  transition-duration: 0.4s;
}
.btn-6 span::after{
  right: 0;
  top: 50%;
  transition-duration: 0.7s;
}
.btn-6:hover::before, .btn-6:hover::after{
  left: 0;
}
.btn-6:hover span::before, .btn-6:hover span::after{
  top: 0;
}
</style>

<style> 
#carousel{
    width: 200px;
    height: 200px;
	margin-left:200px;
    position: absolute;
    transform-style: preserve-3d;
    animation: rotation 20s infinite linear;
}
#carousel:hover{
    animation-play-state: paused;
}
#carousel figure{
    display: block;
    position: absolute;
    width: 90%;
    height: 78%;
    left: 10px;
    top: 10px;
    background: white;
    overflow: hidden;
    border: solid 5px orange;
}
#carousel figure:nth-child(1){transform: rotateY(0deg) translateZ(288px);}
#carousel figure:nth-child(2){ transform: rotateY(40deg) translateZ(288px);}
#carousel figure:nth-child(3){ transform: rotateY(80deg) translateZ(288px);}
#carousel figure:nth-child(4){ transform: rotateY(120deg) translateZ(288px);}
#carousel figure:nth-child(5){ transform: rotateY(160deg) translateZ(288px);}
#carousel figure:nth-child(6){ transform: rotateY(200deg) translateZ(288px);}
#carousel figure:nth-child(7){ transform: rotateY(240deg) translateZ(288px);}
#carousel figure:nth-child(8){ transform: rotateY(280deg) translateZ(288px);}
#carousel figure:nth-child(9){ transform: rotateY(320deg) translateZ(288px);}
#carousel figure:nth-child(10){ transform: rotateY(360deg) translateZ(288px);}
#carousel img{
    -webkit-filter: ;
    cursor: pointer;
    transition: all .5s ease;
    width: 90%;
}
#carousel img:hover{
    -webkit-filter: grayscale(0);
    transform: scale(1.2,1.2);
}
@keyframes rotation{
    from{
        transform: rotateY(0deg);
    }
    to{
        transform: rotateY(360deg);
    }
}
</style>
<style>







input {
	outline: none;
}
input[type=search] {
	-webkit-appearance: textfield;
	-webkit-box-sizing: content-box;
	font-family: inherit;
	font-size: 100%;
}
input::-webkit-search-decoration,
input::-webkit-search-cancel-button {
	display: none; 
}


input[type=search] {
	background: #ededed url(https://static.tumblr.com/ftv85bp/MIXmud4tx/search-icon.png) no-repeat 9px center;
	border: solid 1px #ccc;
	padding: 9px 10px 9px 32px;
	width: 55px;
	
	-webkit-border-radius: 10em;
	-moz-border-radius: 10em;
	border-radius: 10em;
	
	-webkit-transition: all .5s;
	-moz-transition: all .5s;
	transition: all .5s;
}
input[type=search]:focus {
	width: 130px;
	background-color: #fff;
	border-color: #66CC75;
	
	-webkit-box-shadow: 0 0 5px rgba(109,207,246,.5);
	-moz-box-shadow: 0 0 5px rgba(109,207,246,.5);
	box-shadow: 0 0 5px rgba(109,207,246,.5);
}


input:-moz-placeholder {
	color: #999;
}
input::-webkit-input-placeholder {
	color: #999;
}
/* Demo 2 */
#demo-2 input[type=search] {
	width: 15px;
	padding-left: 10px;
	color: transparent;
	cursor: pointer;
}
#demo-2 input[type=search]:hover {
	background-color: #fff;
}
#demo-2 input[type=search]:focus {
	width: 130px;
	padding-left: 32px;
	color: #000;
	background-color: #fff;
	cursor: auto;
}
#demo-2 input:-moz-placeholder {
	color: transparent;
}
#demo-2 input::-webkit-input-placeholder {
	color: transparent;
}
</style>
<body>
<div id="con">
<div id="header"> 

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font face="luoida handwriting" size="120" color= "white"><?php echo $se; ?>
 
</font>&nbsp;&nbsp;&nbsp;&nbsp;
   
 <button class="btn-6" onclick="home_open()"><span><font face="Comic Sans MA" size="3px">Home</font></span></button>
  
  <button class="btn-6" onclick="home_open2()"><span><font face="Comic Sans MS" size="3px">hollywood</font></span></button>
  <button class="btn-6" onclick="home_open3()"><span><font face="Comic Sans MS" size="3px">Bollywood</font></span></button>
  <button class="btn-6" onclick="home_open4()"><span><font face="Comic Sans MS" size="3px">About-Us</font></span></button>
  
  
	<input type="search" id="in" placeholder="search" onChange="find();">
	
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
	<?php
session_start();
$un=$_SESSION["tname"];?>
<b>
<?php echo $un;
 
?>
</b>
<img src="icon.png">
<a href="logout.php">LOGOUT</a>
	</div>
<div id="mainbody">
 


<div id="rotate">
<div id="carousel">
<?php

$c = 0;
$con=mysqli_connect("localhost","root","");
		if (!$con)
		{
			die('Could not connect: ' . mysqli_error());
		}
		mysqli_select_db( $con,"movie_now");
		$q="bollywood";
		$rs=mysqli_query($con,"select name from collections");
		if(mysqli_num_rows($rs)>0)
		{
			while($row = mysqli_fetch_array($rs))
			{
			   $a[$c]=$row['name']; ?>   <br>  <?php
			    $c++;
			  
			}
			
			 
			 
			  
			 
			
		} 
        

		

?>
<form action="run.php" method="POST">
   <figure><input type="image" src="<?php  echo$a[1]; ?>" name="a" value="<?php  echo$a[0]; ?>" /></figure>
    <figure><input type="image" src="<?php  echo$a[2]; ?>" name="a" value="<?php  echo$a[2]; ?>" /></figure>
    <figure><input type="image" src="<?php  echo$a[3]; ?>" name="a" value="<?php  echo$a[3]; ?>" /></figure>
    <figure><input type="image" src="<?php  echo$a[4]; ?>" name="a" value="<?php  echo$a[4]; ?>" /></figure>
    <figure><input type="image" src="<?php  echo$a[5]; ?>" name="a" value="<?php  echo$a[5]; ?>" /></figure>
    <figure><input type="image" src="<?php  echo$a[6]; ?>" name="a" value="<?php  echo$a[6]; ?>" /></figure>
    <figure><input type="image" src="<?php  echo$a[7]; ?>" name="a" value="<?php  echo$a[7]; ?>" /></figure>
    <figure><input type="image" src="<?php  echo$a[8]; ?>" name="a" value="<?php  echo$a[8]; ?>" /></figure>
    <figure><input type="image" src="<?php  echo$a[9]; ?>" name="a" value="<?php  echo$a[9]; ?>" /></figure>
    <figure><input type="image" src="<?php  echo$a[1]; ?>" name="a" value="<?php  echo$a[1]; ?>" /></figure>
    <figure><input type="image" src="<?php  echo$a[0]; ?>" name="a" value="<?php  echo$a[0]; ?>" /></figure>
	</form>
</div></div>
<div id="write"><center>
<div id="dtext"><font size="40px">NOW SHOWING</font></div></center>

</div>
<div id="dtext1"><div id="dtext2">
<div id="sidebar">
<div class="dropdown"><center>
<button class="btn-6" type="button" id="menu1" data-toggle="dropdown"><font face="Comic Sans MA" size="6px">MOVIES</font>
    <span class="caret"></span></button>
	<ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation"><a role="menuitem" tabindex="-1" href="BOLLYWOOD.php">BOLLYWOOD</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="hollywood.php">HOLLYWOOD</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">TOLLYWOOD</a></li>
      <li role="presentation" class="divider"></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">About Us</a></li>
    </ul>
	</div></center>
</div>

</div><div id="dtext3">
<div id="side"> 
<div class="dropdown"><center>
<button class="btn-6" type="button" id="menu1" data-toggle="dropdown"><font face="Comic Sans MA" size="6px">SERIES</font>
    <span class="caret"></span></button>
	<ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">BOLLYWOOD</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">HOLLYWOOD</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">TOLLYWOOD</a></li>
      <li role="presentation" class="divider"></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">About Us</a></li>
    </ul>
	</div></center>





</div>

 </div>
</div>

</div>
<div id="footer">f</div>
</div>
<script>
function home_open() {
    window.location.href = "hi.php";
}
function home_open1() {
    window.location.href = "hi.php";
}
function home_open2() {
    window.location.href = "hollywood.php";
}
function home_open3() {
    window.location.href = "BOLLYWOOD.php";
}
function home_open4() {
    window.location.href = "hi.php";
}
</script>
</body>
</html>
 