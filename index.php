<!DOCTYPE html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
 <html lang="en-gb" xml:lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Aleš Trunda alestrunda[at]gmail[dot]com">
	<meta name="viewport" content="width=device-width, initial-scale=1">   
    
	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet"> 

    <link rel="stylesheet" href="styles/reset_css.css" type="text/css">
    <link rel="stylesheet" href="styles/basic.css" type="text/css">
 
 	<link rel="stylesheet" href="swiper/swiper.min.css" type="text/css">
   	<link rel="stylesheet" href="superslides/superslides.css">
    <link rel="stylesheet" href="styles/main.css" type="text/css">
    
	<script src="js/modernizr-custom.js" type="text/javascript"></script>

    <?php header('Access-Control-Allow-Origin: *'); ?>
        
	<title>Dekini - Coming Soon</title>
</head>

<body>
<!--[if (gt IE 9)|!(IE)]><!-->
<script type="text/javascript">
(function getPerspective(){
  var element = document.createElement('p'),
      html = document.getElementsByTagName('HTML')[0],
      body = document.getElementsByTagName('BODY')[0],
      propertys = {
        'webkitTransformStyle':'-webkit-transform-style',
        'MozTransformStyle':'-moz-transform-style',
        'msTransformStyle':'-ms-transform-style',
        'transformStyle':'transform-style'
      };

    body.insertBefore(element, null);

    for (var i in propertys) {
        if (element.style[i] !== undefined) {
            element.style[i] = "preserve-3d";
        }
    }

    var st = window.getComputedStyle(element, null),
        transform = st.getPropertyValue("-webkit-transform-style") ||
                    st.getPropertyValue("-moz-transform-style") ||
                    st.getPropertyValue("-ms-transform-style") ||
                    st.getPropertyValue("transform-style");

    if(transform!=='preserve-3d'){
      html.className += ' no-preserve-3d';
    }
    document.body.removeChild(element);
})();
</script>
<!--<![endif]-->

    <div id="main-content">
        <div id="page-loader"></div>
    	<div id="background">
            <div id="background-slider">
                <div id="slides">
                    <div class="slides-container">
                        <img src="images/b.jpg" alt="img">
                        <img src="images/c.jpg" alt="img">
                        <img src="images/f.jpg" alt="img">
                        <img src="images/e.jpg" alt="img">
                    </div><!-- slides-container -->
                </div><!-- slides -->
            </div><!-- background-slider -->
        </div><!-- background -->
        
        <div class="nav-left-container">
            <a href="#" class="nav-left-link">
                <div class="nav-left">
                    <div class="nav-icon-first">
                        <i class="fa fa-info"></i>
                    </div>
                    <div class="nav-icon-second">
                        <i class="fa fa-chevron-left"></i>
                    </div>
                </div><!-- nav-left -->
            </a>
        </div><!-- nav-left-container -->
        <div class="nav-right-container">
            <a href="#" class="nav-right-link">
                <div class="nav-right">
                    <div class="nav-icon-first">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="nav-icon-second">
                        <i class="fa fa-chevron-right"></i>
                    </div>
                </div><!-- nav-right -->
            </a>
        </div><!-- nav-right-container -->
        
        <div class="content">
            <div id="swiper" class="swiper-container">
                <!-- Slides -->
                <div class="swiper-wrapper">
                    <!--First Slide-->
                    <div class="swiper-slide"> 
                    	<div class="slide-content">
                            <div class="wrapper">
                                <div class="slide-head">
                                    <h2>About</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sagittis volutpat nulla eu sollicitudin.</p>
                                    <p>In aliquet a lectus sit amet pharetra. Vivamus convallis leo enim, id facilisis purus porttitor at. Donec porttitor sem augue, a tristique risus pretium sit amet. Nulla eleifend eleifend dui nec egestas.</p>
                                </div><!-- slide-head -->
                                <div class="counter-placeholder"></div>
                                <div class="slide-bottom">
                                    <div class="margin-25"></div>
                                    <p>Have any questions? Please feel free to contact us.</p>
                                </div><!-- slide-bottom -->
                            </div><!-- wrapper -->
                        </div><!-- slide-content -->
                    </div><!-- swiper-slide -->
                      
                    <!--Second Slide-->
                    <div class="swiper-slide">
                    	<div class="slide-content">
                            <div class="wrapper">
                                <div class="slide-head">
                                    <h1>We Are Getting Ready...</h1>
                                    <p>Welcome on Dekini. We are currently working on this site.<br>
                                    Every minute of an hour counts in bringing our service to you.</p>
                                </div><!-- slide-head -->
                                <div class="counter-placeholder"></div>
                                <div class="slide-bottom">
                                    <p>Email me when it's finished</p>
                                    <div class="form-email-container no-border">
                                        <div id="cube">
                                            <a href="#"><div class="cube-slide cube-slide-1"></div></a>
                                            <div class="cube-slide cube-slide-2 cube-form-slide">
                                                <form id="notice-me" action="https://dekini.herokuapp.com/signups" method="post" data-opening-error-msg="Email was not added - error here." data-success-msg="Email successfully added." data-ajax-fail-msg="Ajax could not contact the script." data-email-not-set-msg="Please enter a valid email address.">
                                                    <input name="email" type="text" placeholder="email">
                                                    <input type="submit" value="Send">
                                                </form>
                                                <div class="ajax-loader"></div>
                                            </div>
                                            <div class="cube-slide cube-slide-3 tooltip-trigger"></div>
                                            
                                            <div class="return-msg tooltip-trigger"></div>
                                        </div><!-- cube -->
                                    </div><!-- form-email-container -->
                                </div><!-- slide-bottom -->
                            </div><!-- wrapper -->
                        </div><!-- slide-content -->
                    </div><!-- swiper-slide -->
                     
                    <!--Third Slide-->
                    <div class="swiper-slide"> 
                    	<div class="slide-content">
                            <div class="wrapper">
                                <div class="slide-head">
                                    <h2>Contact</h2>
                                    <form class="full-form has-return-msg" id="send-message" action="send_email.php" method="post" data-success-msg="Email successfully sent." data-ajax-fail-msg="Ajax could not contact the script." data-email-not-set-msg="Please enter a valid email address." data-name-not-set-msg="Please enter your name." data-message-not-set-msg="Please enter the message." data-all-fields-required-msg="All fields are required.">
                                        <div class="clearfix">
                                            <div class="columns-two">
                                                <input class="left-side" name="name" type="text" placeholder="name">
                                            </div>
                                            <div class="columns-two">
                                                <input class="right-side" name="email" type="text" placeholder="email">
                                            </div>
                                        </div>
                                        <div class="margin-10"></div>
                                        <textarea name="message" placeholder="message"></textarea>
                                        <div class="margin-10"></div>
                                        <input type="submit" value="Send">
                                    
                                        <div class="ajax-loader"></div>
                                        <div class="return-msg"></div>
                                    </form>
                                </div><!-- slide-head -->
                                <div class="counter-placeholder"></div>
                                <div class="slide-bottom">
                                    <p>RSS subscribe</p>
                                    <div class="form-email-container">
                                        <form class="has-return-msg" id="rss-subscribe" action="save_email.php" method="post" data-opening-error-msg="Email was not added - error here." data-success-msg="Email successfully added." data-ajax-fail-msg="Ajax could not contact the script." data-email-not-set-msg="Please enter a valid email address.">
                                            <input name="email" type="text" placeholder="email">
                                            <input type="submit" value="Send">
                                        
                                            <div class="ajax-loader"></div>
                                            <div class="return-msg tooltip-trigger"></div>
                                        </form>
                                    </div>
                                </div><!-- slide-bottom -->
                            </div><!-- wrapper -->
                        </div><!-- slide-content -->
                  	</div><!-- swiper-slide -->
                </div><!-- swiper-wrapper -->
            </div><!-- swiper -->
        </div><!-- content -->
        
    	<div id="counter">
        	<div class="counter-item days">
            	<div class="counter-item-name">days</div>
                <div class="counter-item-value">
                	<div class="days-val prev"></div>
                    <div class="days-val current"></div>
                    <div class="days-val next"></div>
                </div>
            </div><!-- counter-item -->
            <div class="counter-item hours">
            	<div class="counter-item-name">hours</div>
                <div class="counter-item-value">
                	<div class="hours-val prev"></div>
                    <div class="hours-val current"></div>
                    <div class="hours-val next"></div>
                </div>
            </div><!-- counter-item -->
            <div class="counter-item minutes">
            	<div class="counter-item-name">minutes</div>
                <div class="counter-item-value">
                	<div class="minutes-val prev"></div>
                    <div class="minutes-val current"></div>
                    <div class="minutes-val next"></div>
                </div>
            </div><!-- counter-item -->
            <div class="counter-item seconds">
            	<div class="counter-item-name">seconds</div>
                <div class="counter-item-value">
                	<div class="seconds-val prev"></div>
                    <div class="seconds-val current"></div>
                    <div class="seconds-val next"></div>
                </div>
            </div><!-- counter-item -->
        </div><!-- counter -->
        
        <div id="socials">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
        	<a href="#"><i class="fa fa-google-plus"></i></a>
        </div><!-- socials -->
        <div id="footer">
        	<span id="copyright-sign">&copy; 2016</span>
            <div id="copyright-info-container">
            	<div id="copyright-info">&copy; 2016 Dekini, All Rights Reserved</div>
            </div>
        </div><!-- footer -->
    </div><!-- main-content -->
    
	<script src="js/jquery-1.11.0.min.js" type="text/javascript"></script>
    <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
	<script src="js/placeholder-fallback.js" type="text/javascript"></script>
    <script src="swiper/swiper.jquery.min.js" type="text/javascript"></script>
	<script src="superslides/jquery.superslides.min.js" type="text/javascript"></script>
	<script src="js/jquery.countdown.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
    <script src="js/custom.js" type="text/javascript"></script>
</body>
</html>
