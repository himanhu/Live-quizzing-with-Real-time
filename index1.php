<?php
session_start();
//if(!isset($_SESSION["uid"]))
{
	//echo '<script>window.location.href="login.html";</script>';
}
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
	 background-color:white;
	 
	 
}
#rotate{
     width:600px;
	 height:170px;
	 margin-left:300px;
	 	 background-color:red;
		body-aligin:center;
}

#footer{
	 border-radius: 10px;
	 margin-top:10px;
	height:60px;
	margin-bottom:10px;
	background: linear-gradient(to left, orange	, tomato);
	
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
<body>
<div id="con">
<div id="header"> 

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font face="luoida handwriting" size="120" color= "white">QUIZ-O-PEDIA
 
</font>&nbsp;&nbsp;&nbsp;&nbsp;
 <button class="btn-6"><span><font face="Comic Sans MS" size="3px">LIVE-QUIZZING</font></span></button>
  <button class="btn-6"><span><font face="Comic Sans MS" size="3px">Latest quiz</font></span></button>
  <button class="btn-6" onclick="home_open2()"	><span><font face="Comic Sans MS" size="3px">TEAM-QUIZ</font></span></button>
  <button class="btn-6"><span><font face="Comic Sans MS" size="3px"></font></span></button>
  <?php //echo "hello";
   $un=$_SESSION["uid"];
   //$um=$_SESSION["name"];
   //echo $um;
   echo $un;
 ?>&nbsp;&nbsp;&nbsp;&nbsp;<a href="logout.php">LOGOUT</a>
   </div>
<div id="mainbody"><div id="rotate">
<div id="carousel">

    <figure><input type="image" src="math.jpg" alt=""></figure>
    <figure><img src="math.jpg" alt=""></figure>
    <figure><img src="ramayan.jpg" alt=""></figure>
    <figure><img src="pup3.jpg" alt=""></figure>
    <figure><a href="join.php"><img src="gk.png" alt=""></a></figure>
    <figure><img src="ramayan.jpg" alt=""></figure>
    <figure><img src="english.png" alt=""></figure>
    <figure><img src="ramayam.jpg" alt=""></figure>
    <figure><img src="gk.png" alt=""></figure>
    <figure><img src="ramayam.jpg" alt=""></figure>
	
</div></div>



</div>
<div id="footer">f</div>
</div>
</body>
<script>
function home_open2() {
    window.location.href = "join.php";
}
</script>
</html>
 