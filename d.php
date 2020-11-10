<html>
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
			}
			
			},1000);

			setTimeout(function()
			{
			window.location = "finalanswer.php";
			},10000);
	
</script>

<style>
body {
  min-height: 100vh;
  display: -webkit-box;
  display: flex;
  -webkit-box-align: center;
          align-items: center;
  -webkit-box-pack: center;
          justify-content: center;
}
.button {
  --y: -20;
  --x: 0;
  --rotation: 0;
  --speed: 2;
  --txt: "option";
  --padding: 2.4rem 5.2rem;
  cursor: pointer;
  padding: var(--padding);
  color: transparent;
  font-weight: bold;
  font-size: 1.25rem;
   border-radius:20px;
  -webkit-transition: background 0.1s ease;
  transition: background 0.1s ease;
  background: hsl(var(--hue), 100%, 50%);
  outline-color: hsl(var(--hue), 100%, 80%);
  -webkit-animation-name: flow-and-shake;
          animation-name: flow-and-shake;
  -webkit-animation-duration: calc(var(--speed) * 1s);
          animation-duration: calc(var(--speed) * 1s);
  -webkit-animation-iteration-count: infinite;
          animation-iteration-count: infinite;
  -webkit-animation-timing-function: ease-in-out;
          animation-timing-function: ease-in-out;
}
.button:after {
  content: var(--txt);
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  padding: var(--padding);
  color: #fff;
}
.button:hover {
  background: hsl(var(--hue), 100%, 40%);
  --speed: 0.1;
  --rotation: -1;
  --y: -1;
  --x: 1;
  --txt: "Click me!";
}
.button:active {
  --speed: 4;
  --x: 0;
  --y: 5;
  --rotation: 0;
  --txt: "Ahhhh...";
  background: hsl(var(--hue), 100%, 30%);
}
.button__wrap {
  position: relative;
}
.button__shadow {
  position: absolute;
  border-radius: 100%;
  bottom: 0;
  left: 0;
  right: 0;
  height: 4px;
  background: #af9d9d;
  -webkit-animation: shadow 2s infinite ease-in-out;
          animation: shadow 2s infinite ease-in-out;
  z-index: -1;
}
@-webkit-keyframes shadow {
  0%, 100% {
    -webkit-transform: scaleX(1);
            transform: scaleX(1);
    opacity: 1;
  }
  50% {
    opacity: 0.2;
    -webkit-transform: scaleX(0.25);
            transform: scaleX(0.25);
  }
}
@keyframes shadow {
  0%, 100% {
    -webkit-transform: scaleX(1);
            transform: scaleX(1);
    opacity: 1;
  }
  50% {
    opacity: 0.2;
    -webkit-transform: scaleX(0.25);
            transform: scaleX(0.25);
  }
}
@-webkit-keyframes flow-and-shake {
  0%, 100% {
    -webkit-transform: translate(calc(var(--x) * -1%), 0) rotate(calc(var(--rotation) * -1deg));
            transform: translate(calc(var(--x) * -1%), 0) rotate(calc(var(--rotation) * -1deg));
  }
  50% {
    -webkit-transform: translate(calc(var(--x) * 1%), calc(var(--y) * 1%)) rotate(calc(var(--rotation) * 1deg));
            transform: translate(calc(var(--x) * 1%), calc(var(--y) * 1%)) rotate(calc(var(--rotation) * 1deg));
  }
}
@keyframes flow-and-shake {
  0%, 100% {
    -webkit-transform: translate(calc(var(--x) * -1%), 0) rotate(calc(var(--rotation) * -1deg));
            transform: translate(calc(var(--x) * -1%), 0) rotate(calc(var(--rotation) * -1deg));
  }
  50% {
    -webkit-transform: translate(calc(var(--x) * 1%), calc(var(--y) * 1%)) rotate(calc(var(--rotation) * 1deg));
            transform: translate(calc(var(--x) * 1%), calc(var(--y) * 1%)) rotate(calc(var(--rotation) * 1deg));
  }
}
	</style>
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
  top:20%;
  left:90%;
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
 #middlebox{  margin-top:300px;
			     margin-left:70px;
                float:left;  
				
                background:white; 
                width:300px; 
                height:280px; 
				 opacity: 0;
            } 
#option1{       margin-top:300px;
			     margin-left:150px;
                float:left; 
                background:blue; 
                width:350px; 
                height:100px; 
				 opacity: 0.7;
				 border-radius:20px;
					
            }	
#option2{       margin-top:300px;
			     margin-left:50px;
                float:left;  
				 border-radius:20px;
		        background:pink; 
                width:350px; 
                height:100px; 
				 opacity: 0.7;
					
            }	
#lower{       margin-top:450px;
			     margin-left:150px;
                  
				 border-radius:20px;
		        background-color: #3c005b;
                width:750px; 
                height:100px; 
				 opacity: 0.9;
				  background: -webkit-radial-gradient(center, ellipse cover, #3c005b 1%,#0d0011 100%);
                   background: -moz-radial-gradient(center, ellipse cover, #3c005b 1%,#0d0011 100%);
                    background: -ie-radial-gradient(center, ellipse cover, #3c005b 1%,#0d0011 100%);

					
            }
#option3{       margin-top:1px;
			    margin-left:0px;
                float:left;  
				 border-radius:20px;
		        background:green; 
                width:350px; 
                height:100px; 
				 opacity: 0.7;
					
            }
#option4{       margin-top:1px;
			    margin-left:10px;
                float:right;  
				 border-radius:20px;
		        background:yellow; 
                width:350px; 
                height:100px; 
				 opacity: 0.7;
					
            }			
			
</style>
 
  <body>
  
    <div id="background">
	
	<div id="option1"><div class="button__wrap">
  <a href="b.php"><button class="button" style="--hue: 339.81586927286764;">Show me attention</button></a>
  <div class="button__shadow"></div>
</div></div>
	<div id="option2"><div class="button__wrap">
  <a href="b.php"><button class="button" style="--hue: 339.81586927286764;">Show me attention</button></a>
  <div class="button__shadow"></div>
</div> </div>
	<div id="lower"> 
      <div id="option3"><div class="button__wrap">
  <a href="b.php"><button class="button" style="--hue: 339.81586927286764;">Show me attention</button></a>
  <div class="button__shadow"></div>
</div> </div>
	  <div id="option4"><div class="button__wrap">
  <a href="b.php"><button id="myBtn1" class="button"  value="4" style="--hue: 339.81586927286764;">Show me attention</button></a>
  <div class="button__shadow"></div>
</div> </div>	</div>
	
	
	
 </div>
 <div id="middlebox"><span class="demo" id="demo"></span>  </div>
    <div id="logocontainer" onclick=fill()>
      <div id="pelogo"><span id="count">10</span></div>
	  
      <div class="loader" style="left:2vh; top:0; height:2vh; width:0; animation:slide1 1s linear forwards infinite"></div>
      <div class="loader" style="right:0; top:2vh; width:2vh; height:0; animation:slide2 1s linear forwards infinite; animation-delay:0.5s"></div>
      <div class="loader" style="right:2vh; bottom:0; height:2vh; width:0; animation:slide3 1s linear forwards infinite"></div>
      <div class="loader" style="left:0; bottom:2vh; width:2vh; height:0; animation:slide4 1s linear forwards infinite; animation-delay:0.5s"></div>
    </div>
	
  </body>
</html>
