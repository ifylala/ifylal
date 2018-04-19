<?php 
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "register";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    if (isset($_POST['Register'])) {

      // var_dump($_POST);
      
      $name     = $_POST['Fullname'];
      $username    = $_POST['Username'];
      $password    = $_POST['Password'];
      $email  = $_POST['Email'];
      $phone  = $_POST['Phone'];
     

        // Check connection
        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "INSERT INTO customer (Name, Username, Password, Email, Phone)
        VALUES ('$name', '$username', '$password', '$email', '$phone')";

        if (mysqli_query($conn, $sql)) {
            header("Location: dashboard.php");
        } else {
            header("Location: index.php");
        }
        mysqli_close($conn);

    }

    if (isset($_POST['Login'])) {
      
        $username    = $_POST['Username'];
        $password    = $_POST['Password'];

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "INSERT INTO login (Username, Password)
        VALUES ('$username', '$password')";

        if (mysqli_query($conn, $sql)) {
            header("Location: dashboard.php");
        } 
        else {
            header("Location: index.php");
        }
        mysqli_close($conn);
    }

   /**if (isset($_POST['Contact'])) {
      
        $contactFirstname    = $_POST['contact_firstname'];
        $contactEmail        = $_POST['contact_email'];
        $contactMessage      = $_POST['contact_Message'];

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $to = "ify@grandilo.com";
        $subject = "Contact Us";
        $txt = $contactMessage;
        $headers = "From:".$contactFirstname.$contactEmail;

        mail($to,$subject,$txt,$headers);

    } **/ 

  ?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>SaveIt | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta name="keywords" content="Personal finance management, Save your money, Budget, Savings, 
    finance, personal budget, My budget" />
    
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <!-- gallery smoothbox -->
    <link rel="stylesheet" href="css/smoothbox.css" type='text/css' media="all" />
    <!-- team deoslide -->
    <link rel="stylesheet" href="css/jquery.desoslide.css">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- font-awesome icons -->
    <!-- //Custom Theme files -->
    <!-- web-fonts -->
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <!-- //web-fonts -->
</head>

<body>
    <div class="top-nav">
        <!--nav top-->
        <div class="container"><?php ?>

            <div class="navbar-top">
                <div class="nav-top-left">
                    <ul>
                        <li>
                            <a href="#" class="log" data-toggle="modal" data-target="#myModal">Login</a>
                        </li>
                        <li>
                            <a href="#" class="log" data-toggle="modal" data-target="#myModal">register</a>
                        </li>
                    </ul>
                </div>
                <div class="nav-top-right">
                    <ul>
                        <li>
                            <i class="fa fa-phone" aria-hidden="true"></i> (+234) 703 028 0000</li>
                        <li>
                            <i class="fa fa-envelope-o list-icon" aria-hidden="true"></i>
                            <a href="mailto:info@saveit.com">info@saveit.com</a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- nav-bottom -->
        <div class="inner-header">
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1>
                        <a href="index.html">
                            SaveIt</a>
                    </h1>
                </div>
                <!-- navbar-header -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="#about" class="scroll">About</a>
                        </li>
                        <li>
                            <a href="#services" class="scroll">Why Choose US</a>
                        </li>
                       
                        <li>
                            <a href="#testimonials" class="scroll">Testimonials</a>
                        </li>
                        <li>
                            <a href="#contact" class="scroll">contact</a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </nav>
        </div>
    </div>
    <!--/nav ends here-->
    <!-- banner -->
    <div class="banner">
        <div class="banner-right">
            <img src="images/new2.png" alt="" class="img-responsive" />
        </div>
        <div class="banner-text">
            <div id="top" class="callbacks_container">
                <ul class="rslides" id="slider3">
                    <li>
                        <div class="banner-textagileinfo">
                            <h6>Welcome To SaveIt</h6>
                            <h3>Personal Finance Management</h3>
                            <p>Track your expenses and get rid to excess spending so you could have more to save.</p>

                        </div>
                    </li>
                    <li>
                        <div class="banner-textagileinfo">
                            <h6>Effortlessly stay on top of your bills</h6>
                            <h3>Manage your bills more than ever.</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit llam in consectetur.</p>

                        </div>
                    </li>
                    <li>
                        <div class="banner-textagileinfo">
                            <h6>Personalized for you</h6>
                            <h3>Create budgets that make sense today</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit llam in consecteelit.</p>

                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="clearfix"></div>
    </div>
    <!-- //banner -->
    <!--about -->
    <div id="about" class="section">
        <h3 class="title-txt">
            <span>a</span>bout us</h3>
        <div class="abt-container">
            <fieldset>
                <legend>Get Smart with your Cash.</legend>
                <div class="stats-info">
                  
                    <div class="clearfix"></div>
                </div>
                <div class="abt-pos">
                    <div class="col-md-6  about-left">
                        <h3 class="title">Budget that works</h3>
                        <p class="about-bottom">Duis euismod massa ut sem fringilla blandit. </p>
                        <p>Duis euismod massa ut sem fringilla blandit. Proin vel enim nec ipsum finibus.Duis euismod massa
                            ut sem fringilla blandit. </p>
                        <a href="#services" class="abtlink scroll">read more</a>

                        <img src="images/c.png" class="img-responsive" alt="" />
                    </div>
                    <div class="col-md-6 w3ls-row">
                        <img src="images/a.jpg" class="img-responsive" alt="" />
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </fieldset>
        </div>
    </div>
    <!-- //about -->
    <!-- services -->
    <div class="services section" id="services">
        <div class="container2">
            <h3 class="title-txt">
                <span>Why</span> Choose Us</h3>
            <!--<h5>we offer products and services for your
                <span>personal</span> and
                <span>professional banking</span> needs.</h5>-->
            <div class="col-md-5 service-left-grid">
                <div class="services-left">

                    <h4> Lorem ipsum dolor sit amet,
                        <span>consectetur adipisicing elit, sed do</span> sit amet conse eiusmod. </h4>
                    <p> Taque earum rerum hic tenetur a sapiente delectus. Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed do sit amet conse eiusmod. taque earum rerum hic tenetur a sapiente delectus </p>
                    <ul class="serv-list">
                        <li>
                            <a href="#gallery" class="abtlink scroll">view more</a>
                        </li>
                    </ul>

                </div>
            </div>
            <div class="col-md-7 text-center agileinfo-about-grid">
                <div class="col-md-4 col-xs-4 service-subgrids">
                    <div class="w3ls-about-grid">
                        <i class="fa fa-cc-diners-club" aria-hidden="true"></i>
                        <h6>Avoid Debt</h6>
                        <p> With SaveIt, you would stay far from debt and worryless</p>
                    </div>
                </div>

                <div class="col-md-4 col-xs-4 service-subgrids">
                    <div class="w3ls-about-grid">
                        <i class="fa fa-google-wallet" aria-hidden="true"></i>
                        <h6>Spend Wisely</h6>
                        <p> Giving your money a purpose & spend on what matters</p>
                    </div>
                </div>
                <div class="col-md-4 col-xs-4 service-subgrids">
                    <div class="w3ls-about-grid">
                        <i class="fa fa-check" aria-hidden="true"></i>
                        <h6>prepaid card</h6>
                        <p> Taque earum rerum hitaque tenetur rum sapiente</p>
                    </div>
                </div>
                <div class="col-md-4 col-xs-4 service-subgrids">
                    <div class="w3ls-about-grid">
                        <i class="fa fa-briefcase" aria-hidden="true"></i>
                        <h6>Safe & Secured</h6>
                        <p> Your finance is fully secured & safe from unwanted spending</p>
                    </div>
                </div>

                <div class="col-md-4 col-xs-4 service-subgrids">
                    <div class="w3ls-about-grid">
                        <i class="fa fa-inbox" aria-hidden="true"></i>
                        <h6>Plan for the Future</h6>
                        <p> We help you plan for all the Future expenses </p>
                    </div>
                </div>
                <div class="col-md-4 col-xs-4 service-subgrids">
                    <div class="w3ls-about-grid">
                        <i class="fa fa-cc-mastercard" aria-hidden="true"></i>
                        <h6>fund transfer</h6>
                        <p> Taque earum rerum hitaque tenetur rum sapiente</p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>

        </div>
    </div>
    <!-- //services -->
    <!--about manager -->
    <div class="section manager" id="manger">
        <div class="container">
            <h3 class="title-txt">
                <span>How</span> It Works</h3>
            <div class="about-main">
              
                <div class="col-md-12 man-right">
                <div class="col-md-6 col-sm-6 man-grid">
                    <ul>
                        <li>
                            <i class="fa fa-square" aria-hidden="true"></i>Create Account
                            <p>Click on the sign-up button and fill in all required information. You get a confirmation message of account created.</p>
                        </li>
                        <li>
                            <i class="fa fa-square" aria-hidden="true"></i>State your Monthly Income
                            <p>Putting your monthly income helps plan your montly budget. </p>
                        </li>

                        <li>
                            <i class="fa fa-square" aria-hidden="true"></i>Set Budget
                            <p>List all expenses you want to incure in the month and amount you want for each expenses.</p>
                        </li>

                    </ul>
                </div>
                <div class="w3ls-about-right col-md-6 col-sm-6">
                    <img class="img-responsive" src="images/man2.jpg" alt="about-image" />
                </div>
                <div class="clearfix"></div>
            </div>
            </div>
        </div>
    </div>
    <!-- //about manager -->
    <!-- faq -->
   

    <!-- testimonials -->
    <div class="testimonials section" id="testimonials">
        <div class="container">
            <h3 class="title-txt">
                <span>T</span>estimonials</h3>
            <ul id="flexiselDemo1">
                <li>
                    <div class="wthree_testimonials_grid_main">
                        <div class="col-md-6 col-xs-6 wthree_testimonials_grid">
                            <p>
                                <img src="images/left-quote.png" alt=" "> Donec laoreet eu purus eu viverra. Vestibulum sed convallis massa, eu aliquet massa. Suspendisse
                                lacinia rutrum tincidunt. Integer id erat porta, convallis.
                                <img src="images/right-quote.png" alt=" ">
                            </p>
                        </div>
                        <div class="col-md-6 col-xs-6 wthree_testimonials_grid_pos">
                            <div class="col-md-5 col-xs-5 grid-test-w3l">
                                <img src="images/te21.jpg" alt=" " class="img-responsive" />
                            </div>
                            <div class="col-md-7 col-xs-7 wthree_testimonials_grid1">
                                <h5>Michael Paul</h5>
                                <p>Client</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </li>
                <li>
                    <div class="wthree_testimonials_grid_main">
                        <div class="col-md-6 col-xs-6 wthree_testimonials_grid">
                            <p>
                                <img src="images/left-quote.png" alt=" "> Donec laoreet eu purus eu viverra. Vestibulum sed convallis massa, eu aliquet massa. Suspendisse
                                lacinia rutrum tincidunt. Integer id erat porta, convallis.
                                <img src="images/right-quote.png" alt=" ">
                            </p>
                        </div>
                        <div class="col-md-6 col-xs-6 wthree_testimonials_grid_pos">
                            <div class="col-md-5 col-xs-5 grid-test-w3l">
                                <img src="images/te4.jpg" alt=" " class="img-responsive" />
                            </div>
                            <div class="col-md-7 col-xs-7 wthree_testimonials_grid1">
                                <h5>hael fgul</h5>
                                <p>Client</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </li>
                <li>
                    <div class="wthree_testimonials_grid_main">
                        <div class="col-md-6 col-xs-6 wthree_testimonials_grid">
                            <p>
                                <img src="images/left-quote.png" alt=" "> Donec laoreet eu purus eu viverra. Vestibulum sed convallis massa, eu aliquet massa. Suspendisse
                                lacinia rutrum tincidunt. Integer id erat porta, convallis.
                                <img src="images/right-quote.png" alt=" ">
                            </p>
                        </div>
                        <div class="col-md-6 col-xs-6 wthree_testimonials_grid_pos">
                            <div class="col-md-5 col-xs-5 grid-test-w3l">
                                <img src="images/te21.jpg" alt=" " class="img-responsive" />
                            </div>
                            <div class="col-md-7 col-xs-7 wthree_testimonials_grid1">
                                <h5>Linda Carl</h5>
                                <p>Client</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- //testimonials -->
    <!-- contact -->
    <div class="contact-main section" id="contact">
        <div class="container">
            <h3 class="title-txt">
                <span>c</span>ontact us</h3>
            <div class="col-md-4 contact-leftgrid">
                <div class="contact-g1">
                    <h6>Get In Touch</h6>
                    <ul class="address">
                        <li>
                            <span class="fa fa-phone" aria-hidden="true"></span>
                            +234 703 028 0000
                        </li>
                        <li>
                            <span class="fa fa-envelope" aria-hidden="true"></span>
                            <a href="mailto:example@email.com"> info@saveit.com</a>
                        </li>
                        <li>
                            <span class="fa fa-map-marker" aria-hidden="true"></span>
                            23Rd Festac, Lagos, Nigeria.

                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8 contact-center">
                <div class="col-md-4 contact-g2">
                    <h6>Follow us</h6>
                    <div class="address-grid">

                        <ul class="social-icons3">

                            <li>
                                <a href="" class="s-iconfacebook">
                                    <span class="fa fa-facebook" aria-hidden="true"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="s-icontwitter">
                                    <span class="fa fa-twitter" aria-hidden="true"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="s-icondribbble">
                                    <span class="fa fa-dribbble" aria-hidden="true"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="s-iconbehance">
                                    <span class="fa fa-behance" aria-hidden="true"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8 contact-g3">
                    <div class="subscribe-grid ">
                        <p>Subscribe To Our Newsletter, Customer alert, Articles, Financial Advice & More</p>

                        <form action="#" method="post">
                            <input type="email" placeholder="Your Email" name="Subscribe" required="">
                            <button class="btn1">
                                <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>
        </div>
       <div class="map text-center">
            <!--<h2>Our Location </h2>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31715.16102165761!2d3.2680715969212164!3d6.471530392846337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b88c58ab93f09%3A0xba794b2a62413ee2!2sFestac+Town%2C+Lagos!5e0!3m2!1sen!2sng!4v1521895016597" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>-->
        </div>
        <div class="section contact-bottom">
            <div class="container">
                <div class="col-lg-6 col-md-6  contact-right-grid">
                    <h6>send us a message</h6>
                    <div class="agileits-main-right">
                        <form action="mailto:ify@grandilo.com" method="post" class="agile_form">
                            
                            <label class="header">Name</label>
                            <div class="icon1 w3ls-name1">
                                <input placeholder=" " name="contact_firstname" type="text" required="">
                            </div>
                            
                            <div class="icon2">
                                <label class="header">Email</label>
                                <input placeholder=" " name="contact_email" type="email" required="">
                            </div>
                            
                            <label class="header">your message</label>
                            <textarea class="w3l_summary" name="contact_Message" required=""></textarea>

                            <input type="submit" name="Contact" value="SEND">
                        </form>
                    </div>
                </div>
                <div class="col-md-6 contact-bot">
                    <div class="contact-list">

                        <h6> Open a free checking account online today </h6>
                        <ul class="cbot-list">
                            <li>
                                <i class="fa fa-check-square-o" aria-hidden="true"></i>Maece placerat eget mi
                                <p>les blandit urna urna sodales vitae pellentesq urna sodales vitaeue</p>
                            </li>
                            <li>
                                <i class="fa fa-check-square-o" aria-hidden="true"></i>sodales blandit urna
                                <p>les blandit urna urna sodales vitae pellentesq urna sodales vitaeue</p>
                            </li>

                            <li>
                                <i class="fa fa-check-square-o" aria-hidden="true"></i>vitae pellentesque ac
                                <p>les blandit urna urna sodales vitae pellentesq urna sodales vitaeue</p>
                            </li>

                        </ul>
                        <a href="#" class="log contact-link" data-toggle="modal" data-target="#myModal">Sign Up</a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- contact -->
    <!-- copy right -->
    <p class="footer-class">© 2018 SaveIt. All Rights Reserved | Design by Ify Nwabuokei
    </p>
    <!-- //copy right -->
    <!-- bootstrap-pop-up for login and register -->
    <div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    Be a Member of SaveIt
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <section>
                    <div class="modal-body">
                        <div class="loginf_module">
                            <div class="module form-module">
                                <div class="toggle">
                                    <i class="fa fa-times fa-pencil"></i>
                                    <div class="tooltip">Click Me</div>
                                </div>
                                <div class="form">
                                    <h3>Login to your account</h3>
                                    <form action="index.php" method="post">
                                        <input type="text" name="Username" placeholder="Username" required="">
                                        <input type="password" name="Password" placeholder="Password" required="">
                                        <input type="submit" name="Login"   value="Login">
                                    </form>
                                    <div class="cta">
                                        <a href="#">Forgot password? <span>Create Account</span></a>
                                    </div>
                                </div>
                                <div class="form">
                                    <?php if (isset($mssg_response)) { echo $mssg_response; } ?>
                                    <h3>Create an account</h3>
                                    <form action="" method="POST">
                                        <input type="text" name="Fullname" placeholder="Full Name" required="">
                                        <input type="text" name="Username" placeholder="Username" required="">
                                        <input type="password" name="Password" placeholder="Password" required="">
                                        <input type="email" name="Email" placeholder="Email address" required="">
                                        <input type="text" name="Phone" placeholder="Phone Number" required="">
                                        <input type="submit" name="Register" value="Register">
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- //bootstrap-pop-up for login and register-->

    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- about numscroller -->
    <script src="js/numscroller-1.0.js"></script>
    <!-- //about numscroller -->
    <!-- banner Slider starts Here -->
    <script src="js/responsiveslides.min.js"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function () {
            // Slideshow 3
            $("#slider3").responsiveSlides({
                auto: true,
                pager: true,
                nav: false,
                speed: 500,
                namespace: "callbacks",
                before: function () {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
    </script>
    <!-- //banner slider script ends -->
    <!-- sign in and signup pop up toggle script -->
    <script>
        $('.toggle').click(function () {
            // Switches the Icon
            $(this).children('i').toggleClass('fa-pencil');
            // Switches the forms  
            $('.form').animate({
                height: "toggle",
                'padding-top': 'toggle',
                'padding-bottom': 'toggle',
                opacity: "toggle"
            }, "slow");
        });
    </script>
    <!-- sign in and signup pop up toggle script -->
    <!-- team desoslide-JavaScript -->
    <script src="js/jquery.desoslide.js"></script>
    <script>
        $('#demo1_thumbs').desoSlide({
            main: {
                container: '#demo1_main_image',
                cssClass: 'img-responsive'
            },
            effect: 'sideFade',
            caption: true
        });
    </script>
    <!-- //team desoslide-JavaScript -->
    <!-- Flexslider-js for-testimonials -->
    <script src="js/jquery.flexisel.js"></script>
    <script>
        $(window).load(function () {
            $("#flexiselDemo1").flexisel({
                visibleItems: 1,
                animationSpeed: 1000,
                autoPlay: false,
                autoPlaySpeed: 3000,
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: {
                    portrait: {
                        changePoint: 480,
                        visibleItems: 1
                    },
                    landscape: {
                        changePoint: 640,
                        visibleItems: 1
                    },
                    tablet: {
                        changePoint: 768,
                        visibleItems: 1
                    }
                }
            });

        });
    </script>
    <!-- //Flexslider-js for-testimonials -->
    <!-- start-smooth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- gallery smoothbox -->
    <script src="js/smoothbox.jquery2.js"></script>
    <!-- //gallery smoothbox -->
    <!-- Bootstrap core JavaScript
 ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>

</html>