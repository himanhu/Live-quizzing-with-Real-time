<html> 
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
 #middlebox{ 
			     margin-left:70px;
                float:left;  
				
                background:white; 
                width:300px; 
                height:280px; 
				 opacity: 0;
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
			}
			
			},1000);

			setTimeout(function()
			{
			window.location = "testing4.php";
			},10000);
	
</script>
  <body>
  
    <div id="background"><center><font color="white"  size= "200px">Time Up </font></center>
	<center> <font color="white"  size= "200px">Next question will be come in..</font></center>
	<div id="middlebox"><span class="demo" id="demo"></span>  </div>
 </div>
    <div id="logocontainer" onclick=fill()>
      <div id="pelogo"><span id="count">10</span></div>
	  
      <div class="loader" style="left:2vh; top:0; height:2vh; width:0; animation:slide1 1s linear forwards infinite"></div>
      <div class="loader" style="right:0; top:2vh; width:2vh; height:0; animation:slide2 1s linear forwards infinite; animation-delay:0.5s"></div>
      <div class="loader" style="right:2vh; bottom:0; height:2vh; width:0; animation:slide3 1s linear forwards infinite"></div>
      <div class="loader" style="left:0; bottom:2vh; width:2vh; height:0; animation:slide4 1s linear forwards infinite; animation-delay:0.5s"></div>
    </div>
	
  </body>
</html>