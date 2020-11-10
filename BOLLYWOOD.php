<?php
session_start();
if(!isset($_SESSION["tname"]))
{
	echo '<script>window.location.href="first.html";</script>';
}
?>
<html>
 
<style>
.dropbtn {
    background-color: orange;
    color: white;
    height:70px;
	width:500px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: red;
}

#myInput {
    border-box: box-sizing;
    background-image: url('searchicon.png');
    background-position: 14px 12px;
    background-repeat: no-repeat;
    font-size: 16px;
	width:500px;
    padding: 14px 20px 12px 45px;
    border: none;
    border-bottom: 1px solid black;
}

#myInput:focus {outline: 3px solid #ddd;}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f6f6f6;
    min-width: 230px;
    overflow: hidden;
    border: 1px solid #ddd;
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: orange;}

.show {display: block;}
</style>



<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    div = document.getElementById("myDropdown");
    a = div.getElementsByTagName("a");
    for (i = 0; i < a.length; i++) {
        if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
            a[i].style.display = "";
        } else {
            a[i].style.display = "none";
        }
        
    }
}
</script>

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
</style>
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
#movie1{
 heigth:200px;
 width:full;
 background-color:blue;




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
	 height:full;
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
<body>
<div id="con">
<div id="header"> 

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font face="luoida handwriting" size="120" color= "white">MOVIE_NOW 
 
</font>&nbsp;&nbsp;&nbsp;&nbsp;
   
 <button class="btn-6" onclick="home_open()"><span><font face="Comic Sans MA" size="3px">Home</font></span></button>
  <button class="btn-6" onclick="home_open3()"><span><font face="Comic Sans MS" size="3px">BOLLYWOOD</font></span></button>
  <button class="btn-6" onclick="home_open2()"><span><font face="Comic Sans MS" size="3px">HOLLYWOOD</font></span></button>
  <button class="btn-6" onclick="home_open3()"><span><font face="Comic Sans MS" size="3px">series</font></span></button>
  <button class="btn-6" onclick="home_open4()"><span><font face="Comic Sans MS" size="3px">About-Us</font></span></button>
  
  
	<input type="search" placeholder="Search">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<?php
session_start();
$un=$_SESSION["tname"];?>
<b>
<?php echo $un;
 
?>
</b>
<img src="icon.png"><a href="logout.php">LOGOUT</a>


	</div>
<div id="mainbody">

<center>




<?php
	
	{
		
		$con=mysqli_connect("localhost","root","");
		if (!$con)
		{
			die('Could not connect: ' . mysqli_error());
		}
		mysqli_select_db( $con,"movie_now");
		$q="bollywood";
		$rs=mysqli_query($con,"select * from collections where type='$q'");
		if(mysqli_num_rows($rs)>0)
		{

			?>
			<table width="40px" border="1">
			<tr style="background-color:maroon; color:white">
				<td><center>MOVIES</center></td><td><center>NAME</center></td><td><center>LINKS</center></td>
			</tr>
			<?php
			while($row = mysqli_fetch_array($rs))
			{     $p=$row[0];?>
				
				<tr>
				<td ><form action="run.php" method="POST">
		       <button class="btn-6" type="submit"  size="5px"value="<?php echo $row['name'];?>" name="a">     <img src="<?php  echo$p; ?>" name="unn" value="<?php echo $row['pic']; ?>"></button>
					
		</form>
				</td>
				<td > <?php  echo $row['pic'];   ?>

				</td>
				<td> 
				 
				<?php 
				  $b=$row['pic'];
				  $sear=$b;
                  $link="https://en.wikipedia.org/wiki/Special:Search?search=".$sear."&go=Go";
                  echo'<a href="'.$link.'">DESCRIPTION</a>';
?>
				
				 
				
				
				 
				</td>
				
				
				
				</tr>
				
			<?php	
			   
		
			}
		}
		else
			echo("ID Does Not Exist");
		mysqli_close($con);

	}
?></body>
	</html>