  <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
<style>
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
<style>
.button {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: white;
  background-color: orange;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px 	#FF6B6B;
}

.button:hover {background-color: 	rgb(139,0,0)}

.button:active {
  background-color: 	#800000;
  box-shadow: 0 5px black;
  transform: translateY(2px);
}
</style>
<style>
.button1 {
  padding: 15px 100px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: white;
  background-color: orange;
  border: none;
  border-radius: 15px;
  
}

.button1:hover {background-color: 	rgb(139,0,0)}

.button1:active {
  background-color: 	#800000;

  transform: translateY(2px);
}

#leftbox { 
                float:left;  
				 margin-left:100px;
                 
				background-color:white;
                width:300px; 
                height:280px; 
				 opacity: 0.7;
            } 
            #middlebox{ 
			     margin-left:70px;
                float:left;  
				
                background:white; 
                width:300px; 
                height:280px; 
				 opacity: 0.5;
            } 
            #rightbox{ 
			    margin-right:100px;
                float:right; 
                background:white; 
                width:300px; 
                height:280px; 
				 opacity: 0.5;
            } 
            h2	{ 
                color:green; 
                text-align:center; 
            }


    
</style>
<?php
$name ="himanshu";
$con =mysqli_connect("localhost","root","");
mysqli_select_db($con,"final");?>

	
	
	






</head>
<body>


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
	 <div id="boxes"><div id="leftbox"><h2></h2> <img src="bb.png" alt="Smiley face" width="300" height="200"><br>
	 <center>
	 <?php echo $name ;?>
	   
	 </center>
</div>

 <div id="middlebox"><h2></h2><img src="bb.png" alt="Smiley face" width="300" height="200"><br>
	 <center><input type="search" id="in" placeholder="search" onChange="find();">
	 <span id="serverResponse"></span></center>
 </div>
 <div id="rightbox"><h2></h2><img src="bb.png" alt="Smiley face" width="300" height="200"><br>
	 <center>NAME3  </center>


 </div>
 </div>

 


</div>

</body>
</html>
