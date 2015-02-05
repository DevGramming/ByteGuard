<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="icon" type="image/x-icon" href="encrypt.ico" />
    <title>ByteGuard</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="popup.css"/>
    <script type="text/javascript" src="jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="popup.js"></script>

</head>

<body>
	<FONT face="Calibri Light">
    <!-- Side Menu -->
    <a id="menu-toggle" href="#" class="btn btn-primary btn-lg toggle"><i class="fa fa-bars"></i></a>
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-default btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand"><a href="http://byte-guard.com">ByteGuard</a>
            </li>
            <li><a href="#top">Landing</a>
            </li>
            <li><a href="#about">About</a>
            </li>
            <!--<li><a href="#services">Services</a>-->
            </li>
            <li><a href="#Feeling">Portfolio</a>
            </li>
            <li><a href="#contact">Contact</a>
            </li>
        </ul>
    </div>
    <!-- /Side Menu -->

    <!-- Full Page Image Header Area -->
    <div id="top" class="header">
        <div class="vert-text">
		<font color="white">
            <h1>ByteGuard | Encryption everywhere</h1>
            <h3>
              <strong>Looking towards a secure future</h3></strong><br>
				<img src="cloud.png" alt="Hosted in Germany" title="Hosted in Germany"/><br><br>
            <a href="#about" class="btn btn-default btn-lg">Find Out More</a>
			</font>
        </div>
    </div>

    <!-- Intro -->
    <div id="about" class="intro">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <h2>ByteGuard - Powerfull, Fast and Simple</h2>
                    <p class="lead">In times where data-octopus are hogging more and more power a secure and trusted Securitysuit is vital. Therefore, we developed ByteGuard. ByteGuard supports globally recognized encryption methods such as AES to protect your confidential data, texts and whatever.<br/><br/>
            </div>
        </div>
    </div>
    <!-- /Intro -->

       
    <!-- Services -->
    <div id="services" class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center">
                  
                </div>
            </div>
        </div>
    </div>
    <!-- /Services -->

    <!-- Callout -->
    <div class="callout">
        <div class="vert-text">
            <style type="text/css">
                    div.bgscroll {
                      margin:20px 20px 20px 26%; width:35em; border:0px solid white; opacity: 0.6;
                      background-image:url(Watermark.png); background-repeat:no-repeat; background-position:center center;
                      background-attachment:scroll;
                    }

            </style>
                <div style="cursor: pointer">
                    <h1 align="center"><span id="countdown"></span></h1>
                    <h4 align="center" >Until the biggest DevGramming Release You've ever seen...</h4>
                    
                </div>
            <script>

                // set the date we're counting down to
                var target_date = new Date("Oct 31, 2015").getTime();
 
                // variables for time units
                var days, hours, minutes, seconds;
 
                // get tag element
                var countdown = document.getElementById("countdown");
 
                // update the tag with id "countdown" every 1 second
                setInterval(function () {
 
                    // find the amount of "seconds" between now and target
                    var current_date = new Date().getTime();
                    var seconds_left = (target_date - current_date) / 1000;
 
                    // do some time calculations
                    days = parseInt(seconds_left / 86400);
                    seconds_left = seconds_left % 86400;
     
                    hours = parseInt(seconds_left / 3600);
                    seconds_left = seconds_left % 3600;
     
                    minutes = parseInt(seconds_left / 60);
                    seconds = parseInt(seconds_left % 60);
     
                    // format countdown string + set tag value
                    countdown.innerHTML = days + " Days - " + hours + " Hours - "
                    + minutes + " Minutes - " + seconds + " Seconds";   
 
                }, 1000);


            </script>
        </div>
    </div>
    <!-- /Callout -->

    <!-- Portfolio -->
    <div id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center">
                    <h2>ByteGuard is</h2>
                    <hr>
                </div>
            </div>
           <div class="row">
                <div class="col-md-4 col-md-offset-2 text-center">
                    <div class="portfolio-item">
                        <a href="#">
                            <img class="img-portfolio img-responsive" src="img/simple.png">
                        </a>
                        <h4>Good</h4>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="portfolio-item">
                        <a href="#">
                            <img class="img-portfolio img-responsive" src="img/portfolio-2.jpg">
                        </a>
                        <h4>Easy</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-2 text-center">
                    <div class="portfolio-item">
                        <a href="#">
                            <img class="img-portfolio img-responsive" src="img/portfolio-3.jpg">
                        </a>
                        <h4>Encrypted</h4>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="portfolio-item">
                        <a href="#">
                            <img class="img-portfolio img-responsive" src="img/portfolio-4.jpg">
                        </a>
                        <h4>Bytes</h4>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- /Portfolio -->

    <!-- Call to Action -->
    <div class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <h3>Download</h3>

					 <a href="http://download.byte-guard.com" class="btn btn-lg btn-default" disabled="disabled">Download</a>
				

 </div>
            </div>
        </div>
    </div>
    <!-- /Call to Action -->

    <!-- Map -->
    <div id="contact" class="map">
        <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d170411.82635829283!2d11.4919122!3d48.1356019!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479e75f9a38c5fd9%3A0x10cb84a7db1987d!2zTcO8bmNoZW4!5e0!3m2!1sde!2s!4v1402310145935"
        <br />
        <small>
            <a href="https://www.google.com/maps/place/M%C3%BCnchen/@48.1356019,11.4919122,11z/data=!4m2!3m1!1s0x479e75f9a38c5fd9:0x10cb84a7db1987d"></a>
        </small>
        </iframe>
    </div>
    <!-- /Map -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <ul class="list-inline">
                        <a href="https://www.facebook.com/events/1459075061001169/" target="_blank"><li><i class="fa fa-facebook fa-3x"></i></li></a>
                        
                        <li><i class="fa fa-twitter fa-3x"></i>
                        </li>
                        <a href="http://byte-guard.com" target="_blank"><li><i class="fa fa-dribbble fa-3x"></i></li></a>
                        
                    </ul>
                    <div class="top-scroll">
                        <a href="#top"><i class="fa fa-circle-arrow-up scroll fa-4x"></i></a>
                    </div>
                    <hr>
                    <p>Copyright &copy; <a href="http://devgramming.com" target="_blank">DevGramming</a> 2014 | <a href="http://en.devgramming.de/Contact.php" target="_blank">Legal Disclosure</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- /Footer -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

    <!-- Custom JavaScript for the Side Menu and Smooth Scrolling -->
    <script>
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    </script>
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    </script>
    <script>
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>
	</FONT>
</body>

</html>
