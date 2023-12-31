<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<!-- html -->
<html>
<!-- head -->
<head>
	<title>ATM</title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><!-- bootstrap-CSS -->
	<link rel="stylesheet" href="css/bootstrap-select.css"><!-- bootstrap-select-CSS -->
	<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /><!-- Fontawesome-CSS -->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

	<link href="images/icons/favicon.ico" rel="icon" type="image/icon">
	<script type='text/javascript' src='js/jquery-2.2.3.min.js'></script>
	<!-- Custom Theme files -->
	<!--theme-style-->
	<link href="css/style2.css" rel="stylesheet" type="text/css" media="all" />	
	<!--//theme-style-->
	<!--meta data-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="ATM " />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!--//meta data-->
	<!-- online fonts -->
	<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Oxygen:300,400,700&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<!-- /online fonts -->
	
</head>
<!-- //head -->
<!-- body -->
<body >
	<!--header-->
	<header>
		<div class="container">
			<!--logo-->
			<div class="logo">
				<h1><i class="fa fa-money fa-x4" style="color: #fff;"></i><a href="index.html">ATM</a></h1>
			</div>
			<!--//logo-->
			<div class="w3layouts-login">
				<a  href="pin.php"><i class="glyphicon glyphicon-log-in"> </i>&nbsp;Click Continue to Proceed</a> 
			</div>    
			<div class="clearfix"></div>
			
		</div>
	</header>

	<video autoplay><source src="images/vid.mp4" type=""></video>

	
	<!-- script -->
	<script>
		$(document).ready(function() {
			$("#tab2").hide();
			$("#tab3").hide();
			$("#tab4").hide();
			$(".tabs-menu a").click(function(event){
				event.preventDefault();
				var tab=$(this).attr("href");
				$(".tab-grid").not(tab).css("display","none");
				$(tab).fadeIn("slow");
			});
		});
	</script>
	
	
	<!-- /tab9 -->
	
	<!-- tab10 -->
	
	<!-- /tab10 -->
	
	<!-- tab11 -->
	
	<!-- /tab11 -->
	
	<!-- tab12 -->
	
	<!-- /tab12 -->
	
	<!-- tab13 -->
	
	<!-- /tab13 -->
</div>
<div class="clearfix"></div>
</div>
</div>
</div>
</div>
<!--Plug-in Initialisation-->
<script type="text/javascript">
	$(document).ready(function() {

        //Vertical Tab
        $('#parentVerticalTab').easyResponsiveTabs({
            type: 'vertical', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            tabidentify: 'hor_1', // The tab groups identifier
            activate: function(event) { // Callback function if tab is switched
            	var $tab = $(this);
            	var $info = $('#nested-tabInfo2');
            	var $name = $('span', $info);
            	$name.text($tab.text());
            	$info.show();
            }
        });
    });
</script>
<!-- //Categories -->


<div class="clearfix"> </div>
</div>
</div>
<div class="w3l-footer-bottom">
	<div class="container-fluid">
		<div class="col-md-4 w3-footer-logo">
			<h2><a href="index.html"></a></h2>
		</div>
		<div class="col-md-8 agileits-footer-class">
			<p >© 2022 ATM.|  All Rights Reserved  <a href="http://w3layouts.com/" target="_blank"></a> </p>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
</footer>
<!--//footer-->

<!-- for bootstrap working -->
<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working --><!-- Responsive-slider -->
<!-- Banner-slider -->
<script src="js/responsiveslides.min.js"></script>
<script>
	$(function () {
		$("#slider").responsiveSlides({
			auto: true,
			speed: 500,
			namespace: "callbacks",
			pager: true,
		});
	});
</script>
<!-- //Banner-slider -->
<!-- //Responsive-slider -->   


<!-- easy-responsive-tabs -->    
<link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />
<script src="js/easyResponsiveTabs.js"></script>
<!-- //easy-responsive-tabs --> 
<!-- here stars scrolling icon -->
<script type="text/javascript">
	$(document).ready(function() {
					/*
						var defaults = {
						containerID: 'toTop', // fading element id
						containerHoverID: 'toTopHover', // fading element hover id
						scrollSpeed: 1200,
						easingType: 'linear' 
						};
						*/
						
						$().UItoTop({ easingType: 'easeOutQuart' });
						
					});
				</script>
				<!-- start-smoth-scrolling -->
				<script type="text/javascript" src="js/move-top.js"></script>
				<script type="text/javascript" src="js/easing.js"></script>
				<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
				</script>
				<!-- start-smoth-scrolling -->
				<!-- //here ends scrolling icon -->
			</body>
			<!-- //body -->
			</html>
<!-- //html -->