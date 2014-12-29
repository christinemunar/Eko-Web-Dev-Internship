
<!DOCTYPE html>
<?

$page = 'home';

?>

<html>
	<head>
		<link rel="shortcut icon" href="images\favicon.ico">
		<title>Loop</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.css" rel="stylesheet" media="screen">
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom styles CSS -->
		<link href="css/style.css" rel="stylesheet" media="screen">
		<link rel="shortcut icon" href="favicon.ico">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]-->
		<script src="../../assets/js/html5shiv.js"></script>
		<script src="../../assets/js/respond.min.js"></script>
		<!--[endif]-->

		<script src="js/modernizr.js"></script>
        
	</head>
	
	<body>

	<!--Navigation Bar-->
		<div class="navbar navbar-default navbar-fixed-top header-nav" role="navigation">
	  	<div class="container-fluid">
	  	<!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
		        </button>
			    <a class="navbar-brand" href="index.php">
			      	<img src="images/LoopLogo.png" alt="Loop Logo" />
			    </a>
		    </div>
			<div class="collapse navbar-collapse site-nav" role="navigation">
			  <ul class="nav navbar-nav">
			   	<li><a href="#about">About Us</a></li>
			   	<li><a href="http://www.ekoapp.com" target="_blank">Eko</a></li>
				<li><a href="#contact">Contact</a></li>
			  </ul>	
			</div>
	    </div>
	</div>
	<!---End of Navigation Bar-->


    <!-- Full Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url(images/slide1.jpg);"></div>
                <div class="sliderbuttons">
                		<p>
				      	<a href="https://itunes.apple.com/us/app/loop-by-eko/id931539244?mt=8", target="itunes_store" button type="button" class="btn btn-default btn-store"><img src="images/badge-store-ios.svg" height="30" width="30"> App Store</a>
				      	<a href="https://play.google.com/store/apps/details?id=com.ekoapp.loop&hl=en" target="_blank" button type="button" class="btn btn-default btn-store pull-right"><img src="images/badge-store-play.svg" height="30" width="30"> Play Store</a>
						</p>
				</div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url(images/slide2.jpg);"></div>
                <div class="sliderbuttons2">
                		<p>
                		<a href="https://itunes.apple.com/us/app/loop-by-eko/id931539244?mt=8", target="itunes_store" button type="button" class="btn btn-default btn-store"> Download For Free</a>
						</p>
				</div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url(images/slide3.jpg);"></div>
                <div class="sliderbuttons3">
                		<p>
            			<a href="https://itunes.apple.com/us/app/loop-by-eko/id931539244?mt=8", target="itunes_store" button type="button" class="btn btn-default btn-store3">Get The App</a>
						</p>
				</div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>

	<!--ABOUT SECTION-->
		<div id="about" class="section team full-panel hidden-xs">
			<div class="container">
				<div style="align:center; top:25%;">
				<p>.</p>
				<p>.</p>
				<p>.</p>
				<p><h1><font color="white" align="center">WE BUILD SOFTWARE THAT HELPS PEOPLE DO GREAT THINGS</font></h1><br></p>
				<p><font color="white" align="center">Eko is a New York & Bangkok based company focused on building tools that unlock the full potential of mobile in the workplace. Our products are already used by companies representing $3.3 billion in revenue, and has confirmed deployment plans to companies representing over $20 billion in total revenue.</font></p>
				</div>
				<div id="wrapper">
					<div class="grid-block-container">
					    	<div class="grid-block standard">
					        	<div class="caption">
					            	<h3>Korawad Chearavanont, CEO</h3>
					            	<p> Bangkok & New York City</p>
					            </div>
					        	<img src="images/about/1.jpg" />
					        </div>
        
					        <div class="grid-block slide">
					        	<div class="caption">
					            	<h3>David Zhang, CTO</h3>
					                <p>Bangkok & New York City</p>
					            </div>
					        	<img src="images/about/2.jpg" />
					        </div>

					    	<div class="grid-block standard">
					        	<div class="caption">
					            	<h3>Bernie Tay, COO & CMO</h3>
					                <p>Bangkok</p>
					            </div>
					        	<img src="images/about/3.jpg" />
					        </div>
        
					        <div class="grid-block slide">
					        	<div class="caption">
					            	<h3>Cesar Devers, WebApp Consultant</h3>
					                <p>New York City</p>
					            </div>
					        	<img src="images/about/4.jpg" />
					        </div>

					    	<div class="grid-block standard">
					        	<div class="caption">
					            	<h3>Steven Grace, Senior Software Engineer</h3>
					                <p>New York City</p>
					            </div>
					        	<img src="images/about/5.jpg" />
					        </div>
        
					        <div class="grid-block slide">
					        	<div class="caption">
					            	<h3>Richard Kroon, Senior Software Engineer</h3>
					            	<p>New York City</p>
					            </div>
					        	<img src="images/about/6.jpg" />
					        </div>

					    	<div class="grid-block standard">
					        	<div class="caption">
					            	<h3>Ada Lau, UI/UX Designer</h3>
					                <p>New York City</p>
					            </div>
					        	<img src="images/about/7.jpg" />
					        </div>
        
					        <div class="grid-block slide">
					        	<div class="caption">
					            	<h3>Jes Osrow, Human Resources Generalist & Intern Program Director</h3>
					                <p>New York City</p>
					            </div>
					        	<img src="images/about/8.jpg" />
					        </div>

					    	<div class="grid-block standard">
					        	<div class="caption">
					            	<h3>Raman Rajakannan, CFO</h3>
					                <p>New York City</p>
					            </div>
					        	<img src="images/about/9.jpg" />
					        </div>
        
					        <div class="grid-block slide">
					        	<div class="caption">
					            	<h3>David Shen, Software Engineer</h3>
					                <p>New York City</p>
					            </div>
					        	<img src="images/about/10.jpg" />
					        </div>

					    	<div class="grid-block standard">
					        	<div class="caption">
					            	<h3>Alvin Zhou, Marketing & Media Manager</h3>
					                <p>New York City</p>
					            </div>
					        	<img src="images/about/11.jpg" />
					        </div>
        
					        <div class="grid-block slide">
					        	<div class="caption">
					            	<h3>Touchanon Del Castillo, Marketing Associate</h3>
					            	<p> Bangkok</p>
					            </div>
					        	<img src="images/about/12.jpg" />
					        </div>					        

					    	<div class="grid-block standard">
					        	<div class="caption">
					            	<h3>Decha Kanjanakultomrong, Accounting Manager</h3>
					                <p>Bangkok</p>
					            </div>
					        	<img src="images/about/13.jpg" />
					        </div>
        
					        <div class="grid-block slide">
					        	<div class="caption">
					            	<h3>Kharuntharat Rungsiyarom, Account Manager</h3>
					                <p>Bangkok</p>
					            </div>
					        	<img src="images/about/14.jpg" />
					        </div>

					    	<div class="grid-block standard">
					        	<div class="caption">
					            	<h3>Piyaporn Sittichatburana, Senior Sales Manager</h3>
					                <p>Bangkok</p>
					            </div>
					        	<img src="images/about/15.jpg" />
					        </div>
        
					        <div class="grid-block slide">
					        	<div class="caption">
					            	<h3>Lyra Schweizer, Joint Ventures Associate</h3>
					                <p>New York City</p>
					            </div>
					        	<img src="images/about/16.jpg" />
					        </div>

					    	<div class="grid-block standard">
					        	<div class="caption">
					            	<h3>Miranda Coss, Cartoon, Animation & Graphics Intern</h3>
					                <p>New York City</p>
					            </div>
					        	<img src="images/about/17.jpg" />
					        </div>
        
					        <div class="grid-block slide">
					        	<div class="caption">
					            	<h3>Jonathan D'Ambrosio, Cartoon, Animation & Graphics Intern</h3>
					                <p>New York City</p>
					            </div>
					        	<img src="images/about/18.jpg" />
					        </div>

					    	<div class="grid-block standard">
					        	<div class="caption">
					            	<h3>Marley Diazdelvalle, Cartoon, Animation & Graphics Interne</h3>
					                <p>New York City</p>
					            </div>
					        	<img src="images/about/19.jpg" />
					        </div>
        
					        <div class="grid-block slide">
					        	<div class="caption">
					            	<h3>José Matheu, Cartoon, Animation & Graphics Intern</h3>
					                <p>New York City</p>
					            </div>
					        	<img src="images/about/20.jpg" />
					        </div>

					    	<div class="grid-block standard">
					        	<div class="caption">
					            	<h3>Brandon Ouellette, Cartoon, Animation & Graphics Intern</h3>
					                <p>New York City</p>
					            </div>
					        	<img src="images/about/21.jpg" />
					        </div>
        
					        <div class="grid-block slide">
					        	<div class="caption">
					            	<h3>Kyle Ouellette, Cartoon, Animation & Graphics Intern</h3>
					                <p>New York City</p>
					            </div>
					        	<img src="images/about/22.jpg" />
					        </div>

					    	<div class="grid-block standard">
					        	<div class="caption">
					            	<h3>Malik Smith, Cartoon, Animation & Graphics Intern</h3>
					                <p>New York City</p>
					            </div>
					        	<img src="images/about/23.jpg" />
					        </div>
        
					        <div class="grid-block slide">
					        	<div class="caption">
					            	<h3>Laura Lu Wang, UX/UI Intern</h3>
					                <p>New York City</p>
					            </div>
					        	<img src="images/about/24.jpg" />
					        </div>

        				</div>
        			</div>
			</div>
		</div>
	<!--END OF ABOUT SECTION-->
		
	<!-- CONTACT SECTION-->
		<div id="contact" class="section stickers full-panel hidden-xs">
			<div class="container">
				<p>.</p>
				<p>.</p>
				<p>.</p>
				<h1><font color="black" align="right">EKO IS LOOKING FOR TALENTED DESIGNERS AND ENGINEERS TO JOIN OUR TEAM</font></h1>
				<p><font color="white"><b>Do you have experience, passion, and talent in any of the following areas?</b>
				<p>
				<ul>
				<li><font color="white">Java / Android application development</font></li>
				<li><font color="white">Objective-C / iOS development</font></li>
				<li><font color="white">Javascript, AngularJS frontend and Node backend</font></li>
				<li><font color="white">Visual / UX designers</font></li>
				<li><font color="white">Infrastructure / scaling, specifically with Node</font></li>
				</ul>
				</p>
				<p><font color="white"></b>If you answered YES, please shoot us an email at <a href="mailto:jobs@ekoapp.com">jobs@ekoapp.com</a>.</b></font></p> 
			</div>
		</div>
	<!--END OF CONTACT SECTION-->

<!-- FOOTER -->
<footer id="footer">
	<div class="row">
		<p class="button-row">
			<a href="https://www.facebook.com/LoopByEko" target="blank"><img src="images/fb.png" alt="facebook"></a>
			<a href="https://www.twitter.com/LoopByEko" target="blank"><img src="images/twitter.png" alt="twitter"></a>
			<a href="https://www.youtube.com/channel/UCpPqOkbaD5VWw2-DHbNJBDA" target="blank"><img src="images/youtube.png" alt="youtube"></a>
			<a href="https://www.instagram.com/LoopByEko" target="blank"><img src="images/ig.png" alt="facebook"></a>
			<a href="https://plus.google.com/u/0/b/108031800239412567632/108031800239412567632/posts " target="blank"><img src="images/gplus.png" alt="twitter"></a>
			<a href="https://www.linkedin.com/company/loop-by-eko?trk=biz-brand-tree-co-name" target="blank"><img src="images/linkedin.png" alt="youtube"></a>
		</p>
	</div>
	<br>
	<p><small>Loop By Eko</small></p>
	<span><a href="/eko.apk">Download Eko for Android</a></span>
    <p><small><a href="privacy">Privacy</a> &nbsp;|&nbsp; <a href="terms">Terms</a> &nbsp;&nbsp; <a href="tutorial"></a></small></p>
    <div class="container">
		<span>Copyright Eko Communications, Inc</span>|
		<span><a href="privacy">Privacy</a></span>|
		<span><a href="terms">Terms</a></span>
	</div>
</footer>
<!--END OF FOOTER-->

<!--Button on Bottom to go to Top of Page-->
	<script src="js/jquery.js"></script>
	<a href="#top" class="cd-top">Top</a>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="js/main.js"></script> 

<!--SCRIPTS-->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="//code.jquery.com/jquery.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

	 <!-- custom JS -->
	<script type="text/javascript" src="js/skrollr.min.js"></script>
	<script type="text/javascript">
	var s = skrollr.init();
	</script>

	<!-- Google Analytics -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-42797895-2', 'ekoapp.com');
	  ga('send', 'pageview');
	</script>

	<!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 4000 
    })
    </script>

	<!--PHOTO GRID ABOUT US-->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
		$('.standard').hover(
			function(){
				$(this).find('.caption').show();
			},
			function(){
				$(this).find('.caption').hide();
			}
		);
		$('.fade').hover(
			function(){
				$(this).find('.caption').fadeIn(250);
			},
			function(){
				$(this).find('.caption').fadeOut(250);
			}
		);
		$('.slide').hover(
			function(){
				$(this).find('.caption').slideDown(250);
			},
			function(){
				$(this).find('.caption').slideUp(250);
			}
		);
	});
	</script>


<!--END OF SCRIPTS-->

	</body>
</html>
