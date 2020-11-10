<html>
<style> 
body{ 
	text-align: center; 
	background: #00ECB9; 
font-family: sans-serif; 
font-weight: 100; 
} 
h1{ 
color: #396; 
font-weight: 100; 
font-size: 40px; 
margin: 40px 0px 20px; 
} 
#clockdiv{ 
	font-family: sans-serif; 
	color: #fff; 
	display: inline-block; 
	font-weight: 100; 
	text-align: center; 
	font-size: 30px; 
} 
#clockdiv > div{ 
	padding: 10px; 
	border-radius: 3px; 
	background: #00BF96; 
	display: inline-block; 
} 
#clockdiv div > span{ 
	padding: 15px; 
	border-radius: 3px; 
	background: #00816A; 
	display: inline-block; 
} 
smalltext{ 
	padding-top: 5px; 
	font-size: 16px; 
} 
</style>
<style>
body{
  margin:0;
}

#background{
  display:block;
  position:fixed;
  width:100%;
  height:100%;
  background-color: #3c005b;
  background: -webkit-radial-gradient(center, ellipse cover, #3c005b 1%,#0d0011 100%);
  background: -moz-radial-gradient(center, ellipse cover, #3c005b 1%,#0d0011 100%);
  background: -ie-radial-gradient(center, ellipse cover, #3c005b 1%,#0d0011 100%);
}

#logocontainer{
  display:block;
  position:fixed;
  top:50%;
  left:50%;
  width:34vh;
  height:34vh;
  margin-left:-17vh;
  margin-top:-17vh;
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

var deadline = new Date("dec 31 , 2020 15:37:25").getTime(); 

var x = setInterval(function() { 

var now = new Date().getTime(); 
var t = deadline - now; 
var days = Math.floor(t / (1000 * 60 * 60 * 24)); 
var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60)); 
var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60)); 
var seconds = Math.floor((t % (1000 * 60)) / 1000); 
document.getElementById("day").innerHTML =days ; 
document.getElementById("hour").innerHTML =hours; 
document.getElementById("minute").innerHTML = minutes; 
document.getElementById("second").innerHTML =seconds; 
if (t < 0) { 
		clearInterval(x); 
		document.getElementById("demo").innerHTML = "TIME UP"; 
		document.getElementById("day").innerHTML ='0'; 
		document.getElementById("hour").innerHTML ='0'; 
		document.getElementById("minute").innerHTML ='0' ; 
		document.getElementById("second").innerHTML = '0'; } 
}, 1000); 
</script> 
  <body>
    <div id="background">
	<div id="clockdiv"> 
<div> 
	<span class="days" id="day"></span> 
	<div class="smalltext">Days</div> 
</div> 
<div> 
	<span class="hours" id="hour"></span> 
	<div class="smalltext">Hours</div> 
</div> 
<div> 
	<span class="minutes" id="minute"></span> 
	<div class="smalltext">Minutes</div> 
</div> 
 
</div> </div>
    <div id="logocontainer" onclick=fill()>
      <div id="pelogo"><span class="seconds" id="second"></span></div>
	  
      <div class="loader" style="left:2vh; top:0; height:2vh; width:0; animation:slide1 1s linear forwards infinite"></div>
      <div class="loader" style="right:0; top:2vh; width:2vh; height:0; animation:slide2 1s linear forwards infinite; animation-delay:0.5s"></div>
      <div class="loader" style="right:2vh; bottom:0; height:2vh; width:0; animation:slide3 1s linear forwards infinite"></div>
      <div class="loader" style="left:0; bottom:2vh; width:2vh; height:0; animation:slide4 1s linear forwards infinite; animation-delay:0.5s"></div>
    </div>
	
  </body>
</html>