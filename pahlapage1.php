
<?php
session_start();
if(!isset($_SESSION["uid"]))
{
	//echo '<script>window.location.href="login.html";</script>';
}
?>
<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8">
<head>
	<meta charset="utf-8">
	
	<!---Added from prev header starts-->	
		<title>merapage </title>
		<!---Added from prev header ends-->
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	
	<!---Added from prev header starts-->	
		<meta name="description" content="Quizzing Inc : Platform for Online Quiz, Online Treasure Hunt, College Fest Competition, Corporate Employee Engagement through Quiz, Classroom Test & Mock Test" />
    <meta NAME="keywords" content="Organize Quiz Competition, Online Quiz, Campus Quiz Show, Business Quiz, Business Competition, Engineering Competition, Organize Competition and Event, College Festival, Business Plan Competition, Business Case Study, Student Competition, Online Simulation Game, Mock-Test, Classroom test">
		<!---Added from prev header ends-->

	<!-- Bootstrap implementation -->
	<link href="https://www.quizzinginc.com/template/home_design/css/style.css" rel="stylesheet" type="text/css" />
	<!-- FONTELLO -->
	<link href="https://www.quizzinginc.com/template/home_design/css/fontello.css" rel="stylesheet" type="text/css" />
	<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
	<link href="https://www.quizzinginc.com/template/home_design/css/settings.css" media="screen" rel="stylesheet" type="text/css" />
	<!-- CarouFredSel 
	
	Conflicts with mega events on other pages-->
		<link href="https://www.quizzinginc.com/template/home_design/css/caroufredsel.css" rel="stylesheet" type="text/css" />
		
	
	
     <link rel="stylesheet" type="text/css" href="https://www.quizzinginc.com/template/home_design/css/style_common.css" />

	<style>
	.text-red{color: red;}
	.tab-pane{margin-top: 20px;}
	.opt_drpdwn{padding: 0 7px;}
	.opt_drpdwn option{ border: 1px solid #ccc; padding: 3px 0 3px 7px;}
	
	 </style>
	 
	 <link rel="stylesheet" type="text/css" href="https://www.quizzinginc.com/template/public/css/font-awesome.min.css">
	
		 
	 
	<script type="text/javascript" src="https://www.quizzinginc.com/template/public/js/jquery-latest.min.js"></script>
	<script src="https://www.quizzinginc.com/template/public/js/main.js" defer></script>
	
	<!--plugin.js used for validation in jquery-->
	<script src="https://www.quizzinginc.com/template/public/js/plugins.js" defer></script>
	
	<!---Added from prev header ends-->
    	
</head>
<body class="white-menu">
   	<div class="navigation" style="background-color:none;">

		<div class="container">
			
			
			<div class="navbar navbar-default" role="navigation" style="border:0px !important; margin-bottom:0px; background:none;">

			<div class="container-fluid relative">

				<button type="button" class="btn left hide-show-button none">

					<span class="burgerbar"></span>

					<span class="burgerbar"></span>

					<span class="burgerbar"></span>

				</button>

				<a href="#" class="closemenu"></a> 

				<!-- mobile version drop menu -->

				<div class="navbar-header">

					<button type="button" class="navbar-toggle hamburger" data-toggle="collapse" data-target=".navbar-collapse">

					  <span class="sr-only">Toggle navigation</span>

					  <span class="icon-bar"></span>

					  <span class="icon-bar"></span>

					  <span class="icon-bar"></span>

					</button>

				</div>

				

				<!-- menu -->

				<div class="mainmenu mobanim dark-menu navbar-collapse white collapse offset-0" style="padding-right:0px;">
x`
					<ul class="nav navbar-nav mobpad" >



						<li class="dropdown static">
						<a  href="#" >Home <b class="caret"></b></a>
						</li>
						
						<li class="dropdown static">
						<a href="login.html">LIVE-QUIZZING<b class="caret"></b></a>
						</li>

						<li class="dropdown">
						<!--for drop down--<a data-toggle="dropdown" class="dropdown-toggle" href="https://www.quizzinginc.com/entrance_exam/index">Entrance Exam <b class="caret"></b></a>-->
						<a  href="join.php">Team-Quiz <b class="caret"></b></a>
						</li>

						<!--<li class="dropdown static">
						<a href="classroom_quiz/index" >Classroom Quiz <b class="caret"></b></a>
						</li>-->
						
						<li class="dropdown static">
						<a href="logout.php">logout<b class="caret"></b></a>
						</li>
						
						                           <!--  <li class="dropdown static"><a  href="#signup" data-toggle="modal" data-target="#signup" >Campus Ambassador<b class="caret"></b></a></li>-->
                        <?php//}else{ ?>
                           <!-- <li class="dropdown static">
							<a  href="pages/ambassador_detail" >Campus Ambassador<b class="caret"></b></a>
							</li> -->
                        						
						
						
 <?php //echo "hello";
   $un=$_SESSION["uid"];
   //$um=$_SESSION["name"];
   //echo $um;
   echo $un;
 ?>
											</ul>

				</div>
				<!-- shop/search -->

			</div>

			</div>		
			
		</div>
	</div>

	<!-- SEARCH -->	
	

<!-- End of Navigation -->		

<!---code from prev header starts--->	
 <!-- Trigger the modal with a button -->

<!-- Modal -->
<div id="signup" class="modal fade" role="dialog">
    <div class="modal-dialog">           
        <div class="modal-content">
            
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="">
                          

                    <div id="myTabContent" class="tab-content" style="overflow:initial !important;">      
                        <div class="tab-pane fade active in" id="signin">
                            <form class="form-horizontal" action="login.php" method="post">
                            <fieldset>
                            <!-- Sign In Form -->
                            <!-- Text input-->
                            <div class="control-group">
                              <label class="control-label" for="username">Username:</label>
                              <div class="controls">
                                <input required="required" name="uid" id="uid" type="text" class="form-control" placeholder="Enter Username" class="input-medium">
                              </div>
                            </div>

                            <!-- Password input-->
                            <div class="control-group">
                              <label class="control-label" for="password">Password:</label>
                              <div class="controls">
                                <input name="pwd" id="pwd" style="height:35px;" class="form-control" type="password" placeholder="Enter Password " class="input-medium">
                              </div>
                            </div>

                            <!-- Button -->
                            <div class="control-group">
                              <label class="control-label" for="signin"></label>
                              <div class="controls">
                                <button id="login" name="login" type="submit" value="1" class="btn btn-large btn-success">Sign In</button>
                                
                                 <br/>
                                 <br/>
                                 <br/>
								
                              </div>

                              <div class="controll-group">
                              <style link="https://raw.githubusercontent.com/noizwaves/bootstrap-social-buttons/v1.0.0/social-buttons-3.css"></style>
		
		                                </div>
                            </div>
                            </fieldset> 
                            </form>                
                        </div>
			
                           
                             
                        </div>
                    </div>
                </div>
              
              </div>
          </div>
        </div>
        </div>
        </div>       

<!--
#################################
	- THEMEPUNCH BANNER -
#################################
-->
<!-- START REVOLUTION SLIDER 3.1 rev5 fullwidth mode -->
<style>

#star {
	font-size: 28px;
	color: yellow;
/* Some sort of border */
	text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}

</style>
<!--------------------Image Flip---------------------->
<script src="https://www.quizzinginc.com/template/home_design/js/jquery-2.1.4.min.js"></script>
<script src="https://www.quizzinginc.com/template/home_design/js/jquery.flip.min.js"></script>
<script>
   $(function(){
    	$(".flip-horizontal").flip({
  			trigger: 'hover'
		});
		$(".flip-vertical").flip({
			axis: 'x',
  			trigger: 'hover'
		});
    });
</script>
<div id="parallax-on" class="tp-banner-container relative">

	<div class="tp-banner" >
    
		<ul>

			<!-- SLIDE 1  -->
			<li  data-transition="fade" data-slotamount="1" data-masterspeed="2000" data-thumb="https://www.quizzinginc.com/template/home_design/images/slider/girls.jpg" data-delay="12000"  data-saveperformance="on"  data-title="Ken Burns Slide" data-color="white">
				<!-- MAIN IMAGE -->
				<img src="https://www.quizzinginc.com/template/home_design/images/dummy.png" data-lazyload="https://www.quizzinginc.com/template/home_design/images/test/test5.jpg" data-bgposition="top center" data-bgpositionend="top center" alt="" data-kenburns="on" data-duration="12000" data-ease="Power0.easeInOut" data-bgfit="100" data-bgfitend="100">
				
				<!-- Filter animation -->
				<div class="tp-caption "
					 data-x="center"
					 data-y="center"
					 data-speed="600"
					 data-start="0"
					 data-easing="easeOut"  
					 style="z-index: 5; display:block;  width:100%; height:100%;">
						 <div id="large-header">
						 	<canvas id="demo-canvas"></canvas>
						 </div>
					</div>	


					<!-- LAYER 1 -->
					<div class="prlx-on tp-caption fontproximabold size55 cwhite customin customout tp-resizeme"
						data-x="center" data-voffset="75"
						data-y="center" data-hoffset="0"
												
						data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="500"
						data-start="3500"
						data-easing="Power3.easeInOut"
						data-splitin="chars"
						data-splitout="chars"
						data-elementdelay="0.05"
						data-endelementdelay="0.05"
						data-endspeed="300"
						style="z-index: 10;"
						>PRACTICE  PLAY  LEARN!
					</div>
					
					<!-- LAYER 2 -->
					<div class="prlx-on tp-caption fontproximalight size26 cwhite randomrotate customout tp-resizeme"
						data-x="center"  data-voffset="130"		
						data-y="center"  data-hoffset="0"	
						
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="500"
						data-start="500"
						data-easing="Power3.easeInOut"
						data-splitin="chars"
						data-splitout="chars"
						data-elementdelay="0.05"
						data-endelementdelay="0.05"						
						data-endspeed="100"
						style="z-index: 10;"
						>Live Quizzing & Team Quizzing
					</div>
					
					<!-- LAYER 3 -->
						
					
					<!-- SCROLL -->
					
					<!-- Filter dark -->
					<div class="tp-caption customin customout"
						 data-x="center"
						 data-y="center"

						 data-customin="opacity:0;"
						 data-customout="opacity:1;"
						 data-speed="600"
						 data-start="0"
						 data-easing="easeOut"  
						 style="z-index: 4; display:block; background:rgba(0,0,0,0.5); width:100%; height:100%;"> 
					</div>	
                                
			</li>
			
		</ul>
        
		<div class="tp-bannertimer none"></div>
	</div>
</div>

<!-- End of 3 Cols -->

<div class="separator80 relative none z80" >&nbsp;</div>

<!-- PORTFOLIO SECTION-->

<!-- End of Portfolio Section -->

<!-- SECTION SERVICES -->
<div>
	<div class="container sspacing" >
    <div class="row">

			<div class="col-md-12 text-center">
				<h2>Explore the world of Quizzes & Tests</h2><br>

                <p>Learn & have fun with numerous quiz competitions, practice quizzes & classroom tests. Get started.</p>
			
			</div>
			
			<div class="clearfix">&nbsp;</div>
		</div>
        <div class="clearfix">&nbsp;</div>
     
	<div class="row">
	  <div class="col-md-4">
		<div class="thumbnail">
			<div class="view view-fifth" style="border-radius:5px">
			<img src="https://www.quizzinginc.com/template/home_design/images/services_bg.png" class="img-responsive img-rounded" > 
				
			<div class="center" style="padding-top:20%;">
			<div align="center"><h3><img src="https://www.quizzinginc.com/template/home_design/images/calendra.png" width="43" height="47" ></h3></div>
			 <div style="color:#FFF;"><h3><strong>Events</strong></h3>
				Play, Create, Quiz 
			</div>
			</div>
			
			<div class="mask">
				<h2><strong>Events</strong></h2>
				<p style="color:#FFF;">We excel in organizing quizzes and providing online quizzing platform to Corporates, Institutes, & Individuals.</p>
				<a href="error.php" class="info" style="border-radius:5px">Continue</a>
				
			</div>
		
			</div>
		</div>
	  </div>
	  
	  <div class="col-md-4" >
		<div class="thumbnail">
			<div class="view view-fifth" style="border-radius:5px">
			<img src="https://www.quizzinginc.com/template/home_design/images/services_bg.png" class="img-responsive img-rounded" >     
			<div class="center" style="padding-top:20%;">
			<div align="center"><img src="https://www.quizzinginc.com/template/home_design/images/fun.png" width="52" height="51" alt=""></div>
			 <div style="color:#FFF;"><h3><strong>Fun Quiz</strong></h3>
				Play, Create, Quiz 
			</div>
			</div>

			<div class="mask">
				<h2><strong>Fun Quiz</strong></h2>
				<p style="color:#FFF;">We excel in organizing quizzes and providing online quizzing platform to Corporates, Institutes, & Individuals.</p>
				 <a hre   f="error.php" class="info" style="border-radius:5px">Continue</a>
			</div>
			</div>
		</div>
	  </div>
	  
	  <div class="col-md-4" style="margin-bottom:15px;">
		<div class="thumbnail">
		   <div class="view view-fifth" style="border-radius:5px">
			<img src="https://www.quizzinginc.com/template/home_design/images/services_bg.png" class="img-responsive img-rounded" >     
			<div class="center" style="padding-top:20%;">
			<div align="center"><img src="https://www.quizzinginc.com/template/home_design/images/eolympiad.png" width="68" height="46"></div>
			<div style="color:#FFF;"><h3><strong>eOlympiad</strong></h3>
				Play, Create, Quiz
			</div>
			</div>
			<div class="mask">
				<h2><strong>eOlympiad</strong></h2>
				<p style="color:#FFF;">We excel in organizing quizzes and providing online quizzing platform to Corporates, Institutes, & Individuals.</p>
				<a href="" class="info" style="border-radius:5px" target="_blank">Continue</a>
			</div>
		  </div>
		</div>
	  </div>
	  
	  <div class="col-md-4">
		<div class="thumbnail">
			<div class="view view-fifth" style="border-radius:5px">
				<img src="https://www.quizzinginc.com/template/home_design/images/services_bg.png" class="img-responsive img-rounded" >     
				<div class="center" style="padding-top:20%;">
				<div align="center"><img src="https://www.quizzinginc.com/template/home_design/images/psychometric_test.png" width="47" height="51"></div>
				 <div style="color:#FFF;"><h3><strong>Package</strong></h3>
					Play, Create, Quiz </div>
				</div>
				<div class="mask">
					<h2><strong>Package</strong></h2>
					<p style="color:#FFF;">We excel in organizing quizzes and providing online quizzing platform to Corporates, Institutes, & Individuals.</p>
					 <a href="error.php" class="info" style="border-radius:5px">Continue</a>
				</div>
			</div>                 
		</div>
	  </div>
	 
	 <div class="col-md-4" style="margin-bottom:15px;">
		<div class="thumbnail">
		 <div class="view view-fifth" style="border-radius:5px">
			<img src="https://www.quizzinginc.com/template/home_design/images/services_bg.png" class="img-responsive img-rounded" >     
			<div class="center" style="padding-top:20%;">
			<div align="center"><img src="https://www.quizzinginc.com/template/home_design/images/classroom.png" width="60" height="59"></div>
			 <div style="color:#FFF;"><h3><strong>Classroom Quiz</strong></h3>
			Play, Create, Quiz 
			</div>
			</div>
			<div class="mask">
				<h2><strong>Live-Quiz</strong></h2>
				<p style="color:#FFF;">We excel in organizing quizzes and providing online quizzing platform to Corporates, Institutes, & Individuals.</p>
				 <a href="error.php" class="info" style="border-radius:5px">Continue</a>
			</div>
		   </div>
		</div>
	  </div>
	  <div class="col-md-4" style="margin-bottom:15px;">
		<div class="thumbnail">
		 <div class="view view-fifth" style="border-radius:5px">
			<img src="https://www.quizzinginc.com/template/home_design/images/services_bg.png" class="img-responsive img-rounded" >     
			<div class="center" style="padding-top:20%;">
			<div align="center"><img src="" width="76" height="48"></div>
			 <div style="color:#FFF;"><h3><strong>Feedback </strong></h3>
				Play, Create, Quiz
			</div>
			</div>
			<div class="mask">
				<h2><strong>Feedback </strong></h2>
				<p style="color:#FFF;">We excel in organizing quizzes and providing online quizzing platform to Corporates, Institutes, & Individuals.</p>
				 <a href="" class="info" style="border-radius:5px">Continue</a>
			</div>
		  </div>
		</div>
	  </div>
	</div>

<div class="clearfix">&nbsp;</div> 
<div class="row" style="padding-left:8px; padding-right:7px;">
	
	
	<div class="col-md-4">
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<div class="caption">
          <h3 align="center" style="padding-bottom:10px;">&nbsp;</h3>
    </div>
    <div class="" align="center">
      
	  <ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-6869148631511454"
     data-ad-slot="6460351520"
     data-ad-format="auto"></ins>
      
    </div>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</div>
  
</div>
		
	</div>
</div>
<!-- END OF SECTION SERVICES -->

<!-- SECTION IMAGE -->
<section class="bgmaincolor cwhite relative z100 clearfix">
	<div class="cover1 col-xs-12 col-sm-12 col-md-6 h700" >&nbsp;</div>
	<div class="container cus-pos-abs">
		<div class="clearfix"></div>
		<div class="cover-right-text col-sm-12 col-sm-offset-0 col-md-6 col-md-offset-6 sspacing">
			<h1 class="titlefont cwhite">Who Are We?</h1>
			<p class="size16 mt20">
				Welcome to the world of unadulterated knowledge, a testing ground for pure reasoning, a happy hunting place for sharp wit and piles of food stock for inquisitive & hungry minds. <br>
<br>
"General Knowledge" is not a collection of facts and figures. No, that's' a very misleading definition if it's a definition at all! Quizzing is a way of expanding our horizon of knowledge, making us aware of developments around us. And trust us, only an aware intellectual mind can pave the path of(for) development in any society. <br>
<br>


Quizbuzz is a Alllahabad based startup under Arcade Infotech umbrella, co-founded by the students of Delhi Technological University (formerly DCE) with a presence in cities like New Delhi, Mumbai, Kolkata, Dehradun, Jaipur and Bangalore among many others. We have been engaged actively in online and offline quizzing ever since our inception. Now you may argue that there are scores of pages on Facebook and dozens of quizzing blogs and websites itself that deal with quizzing and its aspects. Then how is our endeavour any different from theirs? Well, it is different, a great deal at that too. 	</p>
			
		</div>
	</div>
</section>
<!-- END OF SECTION IMAGE -->


<div class=" m5">&nbsp;</div>
<!-- SECTION PARTNERS -->

<!-- End of Section --><!-- FOOTER -->
<div class="footer" >
<style>
<!--.modal.custom .modal-dialog {
    width:100%;
    position:fixed;
    bottom:0;
    right:0;
    margin:0;
}-->
.z-banner {
    z-index: 5000 !important;
}
.ps-fixed {
    position: fixed !important;
}
.ff-sans {
    font-family: Arial,"Helvetica Neue",Helvetica,sans-serif !important;
}
.l0 {
    left: 0 !important;
}
.b0 {
    bottom: 0 !important;
}
.r0 {
    right: 0 !important;
}
.p16 {
    padding: 16px !important;
}
.bg-black-700 {
    background-color: #3b4045 !important;
}
.fc-white {
    color: #FFF !important;
}
.lh-lg {
    line-height: 1.61538462 !important;
}
.mr12 {
    margin-right: 12px !important;
}
.mb0 {
    margin-bottom: 0 !important;
}

svg:not(:root) {
    overflow: hidden;
}
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
svg[Attributes Style] {
    width: 18;
    height: 18;
}
user agent stylesheet
svg:not(:root), symbol, image, marker, pattern, foreignObject {
    overflow: hidden;
}

div, span {
    margin: 0;
    padding: 0;
    border: 0;
    font: inherit;
    font-size: 100%;
    vertical-align: baseline;
}

.wmx12 {
    max-width: 157.2307692rem !important;
}
.mx-auto {
    margin-left: auto !important;
    margin-right: auto !important;
}
.grid {
    display: flex;
}
.jc-space-between {
    justify-content: space-between !important;
}
</style>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
	<div class="container ptb15 cwhite">
		<div class="row">
			  <div class="col-sm-4 address-block">     
				<ul id="footer-social" class="nav navbar-nav nav-social" style="margin-top: 10px;margin-right: 10%;">
				  <li><a href="https://twitter.com/quiz_inc" target="_blank"><i class="fa fa-twitter"></i></a></li>
				  <li><a href="https://www.youtube.com/channel/UCLYbbYUHBcJyzRJwBv7ybKw" target="_blank"><i class="fa fa-youtube"></i></a></li>
				  <li><a href="https://www.quora.com/Quizzing-Inc" target="_blank"><i class="fa ">Q</i></a></li>
				  <li><a href="http://www.facebook.com/QuizzingInc" target="_blank"><i class="fa fa-facebook"></i></a></li>
				  <li style="margin-top:10px"><div class="fb-like" data-href="http://www.facebook.com/QuizzingInc" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
				  
				  </li>
				  <!--<li><a href="#twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
				  <li><a href="#twitter" target="_blank"><i class="fa fa-google-plus"></i></a></li>        
				  <li><a href="#linkedin" target="_blank"><i class="fa fa-linkedin"></i></a></li>-->	
				  
					  </ul>
			  </div>
		</div>
		<div class="clearfix"></div><br/>
		<div class="row">
			<div class="col-md-3">
				<h5 class="uppercase bold pb20 cwhite titlefont">About us</h5>
				<p>Quizzing Inc: A subsidiary of Arcade Infotech Pvt Ltd OPC. Welcome to the world of unadulterated knowledge, a testing ground for pure reasoning, a happy hunting place for sharp wit and piles of food stock for inquisitive & hungry minds. <br><br> "General Knowledge" is not a collection of facts and figures. No, that's' a very misleading definition if it's a definition at all! Quizzing is a way of expanding our horizon of knowledge, making us aware of developments around us. </p>
			</div>
			<div class="col-md-3">
				<h5 class="uppercase bold pb20 cwhite titlefont">Quick Links</h5>
				<ul>
					<li><a href="https://www.quizzinginc.com/page/our_team">Team</a></li>
				<!--	<li><a href="https://www.quizzinginc.com/forum">Forum</a></li>-->
					<li><a href="https://www.quizzinginc.com/verify/index">Verify Code</a></li>
										<li class="dropdown static"><a  href="#signup" data-toggle="modal" data-target="#signup" >Campus Ambassador<b class="caret"></b></a></li>
										<li><a href="https://www.quizzinginc.com/page/about">About Us</a></li>
					<li><a href="https://www.quizzinginc.com/page/contact_us">Contact Us</a></li>
					<li><a href="https://www.quizzinginc.com/page/privacy_policy">Privacy Policy.</a></li>
				</ul>
			</div>
			
			
			
		</div>
	</div>
	
		<!----cookie div---->
	<div style="display:none">
	<div id="js-gdpr-consent-banner" class="p16 bg-black-700 ff-sans fc-white ps-fixed b0 l0 r0 z-banner" role="banner" aria-hidden="false" style="display:none;opacity: 0.7;">
        <div class="wmx12 mx-auto grid jc-space-between" role="alertdialog" aria-describedby="notice-message">
            <div class="grid--cell mr12" aria-label="notice-message">
                <span class="mb0 lh-lg">
                    We use cookies to deliver our services and improve user experience. By using QuizzingInc, you acknowledge that you have read and understand our <a class="s-link s-link__inherit td-underline fc-white" target="_blank" href="https://www.quizzinginc.com/page/privacy_policy"><u>Cookie Policy, Privacy Policy</u></a> and <a class="s-link s-link__inherit td-underline fc-white" target="_blank" href="https://www.quizzinginc.com/page/terms_cond"><u>Terms of Service</u></a>. 

                </span>
            </div>
            <a class="fc-white js-notice-close" aria-label="notice-dismiss" style="padding:2px">&#x2716;
               <!-- <svg aria-hidden="true" class="svg-icon m0 iconClear" width="18" height="18" viewBox="0 0 18 18"><path d="M15 4.41L13.59 3 9 7.59 4.41 3 3 4.41 7.59 9 3 13.59 4.41 15 9 10.41 13.59 15 15 13.59 10.41 9z"></path></svg>-->
            </a>
			
        </div>
    </div>
	</div>

 <script>
 	//////////// function to read cookie /////////////////////

	/*function getCookie(cname) {
	    var name = cname + "=";
	    var ca = document.cookie.split(';'); console.log('ca='+document.cookie);
	    
	    for(var i = 0; i <ca.length; i++) {
	        var c = ca[i];
	        while (c.charAt(0)==' ') {
	            c = c.substring(1);
	        }
	        if (c.indexOf(name) == 0) {
	            return parseInt(c.substring(name.length,c.length));
	        }
	    }
	    return 0;
	}

 $(document).ready(function() {
     var CookieGet = getCookie('cookieset'); //alert('CookieGet='+CookieGet);
	 if (CookieGet != 0) {
          // Hide the element here.
          $('#js-gdpr-consent-banner').css('display','none');
     }else{
		$('#js-gdpr-consent-banner').css('display','block');
	 }
 });
 
 $('.js-notice-close').click(function(){ 
  document.cookie = "cookieset=1; path=/";  //alert('Cookie-value-set='+document.cookie);
  $('#js-gdpr-consent-banner').remove();
 
 });*/
 function setCookie(cname, cvalue, exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
  var expires = "expires="+d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  var name = cname + "=";
  var ca = document.cookie.split(';');
  for(var i = 0; i < ca.length; i++) {
	  var c = ca[i];
	  while (c.charAt(0) == ' ') {
		  c = c.substring(1);
	  }
	  if (c.indexOf(name) == 0) {
		  return c.substring(name.length, c.length);
	  }
  }
  return "";
}

var cookieset = getCookie("cookieset");
if (cookieset != "") {
	$('#js-gdpr-consent-banner').css('display','none');
}else{
  $('#js-gdpr-consent-banner').css('display','block');
} 


$('.js-notice-close').click(function(){ 
setCookie('cookieset', 1, 360);	
$('#js-gdpr-consent-banner').remove(); 
});
 
 </script>
	<!----cookie div---->
	
	<div class="clearfix"></div>
	<div class="separator100dark"></div>
	
	<div class="container ptb30 cwhite" align="center">
		&copy; Copyright 2020 Quizzinginc.com All Rights Reserved
	</div>
</div>
<!-- End of Footer -->
<p id="back-top"><a href="#top"><span class="ti-angle-up"></span></a></p>
<!-- scrolling --> 
 
<!--<script type="text/javascript" src="js/jquery.js"></script>-->

<!-- COMPRESSED -->
<script type="text/javascript" src="https://www.quizzinginc.com/template/home_design/js/compressed.js"></script>
<!-- FUNCTIONS -->
<script type="text/javascript" src="https://www.quizzinginc.com/template/home_design/js/functions.js"></script>
<!-- Including all compiled Bootstrap plugins  --> 
<!--<script type="text/javascript" src="https://www.quizzinginc.com/template/home_design/js/bootstrap.min.js"></script>-->

<!-- Connection Tree animation - these 4 js files loads the connection animation on banner image of home page -->
<script type="text/javascript" src="https://www.quizzinginc.com/template/home_design/js/TweenLite.min.js"></script>
<script type="text/javascript" src="https://www.quizzinginc.com/template/home_design/js/EasePack.min.js"></script>
<script type="text/javascript" src="https://www.quizzinginc.com/template/home_design/js/rAF.js"></script>
<script type="text/javascript" src="https://www.quizzinginc.com/template/home_design/js/tree.js"></script>
<!-- Ends Connection Tree animation - on banner image of home page -->

<style>
ul#footer-social>li>a {
    padding: 3px !important;
    margin: 0 6px 0 0 !important;
    /* color: #d1dde5; */
    border-radius: 50% !important;
    border: 2px solid #ababab !important;
    width: 30px;
    text-align: center;
}
</style>

 <link rel='stylesheet' href='https://www.quizzinginc.com/template/jAlert-msg/src/jAlert-v3.css'> 
 <script src='https://www.quizzinginc.com/template/jAlert-msg/src/jAlert-v3.js'></script>
 <script src='https://www.quizzinginc.com/template/jAlert-msg/src/jAlert-functions.js'></script>

</body>
</html>