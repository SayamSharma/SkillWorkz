<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <title>Skillworkz</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-digimedia-v3.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <!--

TemplateMo 568 DigiMedia

https://templatemo.com/tm-568-digimedia

-->
</head>

<body>
    <style>
        form#contact {
            box-shadow: 2px 1px 22px rgba(0.1, 0.1, 0.1, 0.1);
        }

        form#contact .row {
            display: block;
        }

        .contact-dec img {
            opacity: 0.75;
        }

        form#contact input {
            text-align: center;
        }
        header.header-area.header-sticky.wow.slideInDown.animated {
            top: 0;
        }
        @media (max-width: 425px){
            .logo img {
                width: 180%;
            }
        }
    </style>
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->



    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <div class="col-3">
                            <!-- ***** Logo Start ***** -->
                            <a href="index.php" class="logo">
                                <img src="assets/images/skillw.png" alt="">
                            </a>
                            <!-- ***** Logo End ***** -->
                        </div>
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="index.php">Home</a></li>
                            <li class="scroll-to-section"><a href="about.php">About</a></li>
                            <li class="scroll-to-section"><a href="why-us.php">Why us?</a></li>
                            <li class="scroll-to-section"><a href="services.php">Our Services</a></li>
                            <li class="scroll-to-section"><a href="contact.php" class="active">Contact Us</a></li>
                            <!-- <li class="scroll-to-section"><div class="border-first-button"><a href="#contact">Free Quote</a></div></li>  -->
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div id="free-quote" class="free-quote">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="section-heading  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                        <!-- <h6>Get Your Free Quote</h6> -->
                        <h4>Unleashing Potential, Building Success</h4>
                        <div class="line-dec"></div>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-2  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                    <p style="color: white;">Partner with Skillworkz today, and let us be your strategic ally in
                        achieving your talent acquisition and consulting goals. Together, we will shape a brighter
                        future for your organization. Contact us now to learn more about how we can assist you in your
                        journey to success.</p>
                </div>
            </div>
        </div>
    </div>


    <div id="contact" class="contact-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h6>Contact Us</h6>
                        <h4>Get In Touch With Us <em>Now</em></h4>
                        <div class="line-dec"></div>
                    </div>
                </div>
                <div class="col-lg-8 mx-auto wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
                    <form id="contact" action="mail.php" method="post">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="contact-dec">
                                    <img src="assets/images/contact-dec-v3.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="fill-form">
                                    <div class="row">
                                        <div class="col-lg-6 mx-auto">
                                            <fieldset>
                                                <input type="name" name="name" id="name" placeholder="Name"
                                                    autocomplete="on" required>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6 mx-auto">
                                            <fieldset>
                                                <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                                    placeholder="Your Email" required="">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6 mx-auto">
                                            <fieldset>
                                                <input type="subject" name="subject" id="subject" placeholder="Subject"
                                                    autocomplete="on">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6 mx-auto">
                                            <fieldset>
                                                <input type="message" name="message" id="message" placeholder="message"
                                                    autocomplete="on">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-4 mx-auto">
                                            <fieldset>
                                                <input type="submit" id="form-submit" class="main-button" placeholder="Send
                                                    Message Now"></input>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>

                            </div>
                    </form>
                </div>
            </div>
        </div>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p>Copyright © 2022 Skillworkz Co., Ltd. All Rights Reserved.
                    </div>
                </div>
            </div>
        </footer>


        <!-- Scripts -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/owl-carousel.js"></script>
        <script src="assets/js/animation.js"></script>
        <script src="assets/js/imagesloaded.js"></script>
        <script src="assets/js/custom.js"></script>
</body>

</html>