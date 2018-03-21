<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <title><?php echo e($title); ?></title>
        <link rel="stylesheet" type="text/css" href="/css/owl.carousel.min.css">
        <link rel="stylesheet" type="text/css" href="/css/owl.theme.default.min.css">
        <!-- Bootstrap core CSS -->
        <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom fonts for this template -->
        <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
        <link href="/css/agency.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <script type="text/javascript" src="/js/jquery.min.js"></script>
        <link rel="stylesheet" type="text/less" href="/css/custom.less">
        <script type="text/javascript" src="/js/less.min.js"></script>
    </head>
    <body id="page-top">
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="/">Pangasinan Tourism</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item">
                            <a class="nav-link <?php echo e(adminSetActive('the-province*')); ?>" href="/the-province">The Province</a>
                            <div class="sub-menu">
                                <a class="nav-link js-scroll-trigger" href="/the-province#about-pangasinan">About Pangasinan</a>
                                <a class="nav-link js-scroll-trigger" href="/the-province#cities-and-municipalities">Cities and Municipalities</a>
                                <a class="nav-link js-scroll-trigger" href="/the-province#festivals">Festivals</a>
                                <a class="nav-link js-scroll-trigger" href="/the-province#photo-gallery">Photo Gallery</a>
                                <a class="nav-link js-scroll-trigger" href="/the-province#videos">Videos</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo e(adminSetActive('tourism*')); ?>" href="/tourism">Tourism</a>
                            <div class="sub-menu">
                                <a class="nav-link js-scroll-trigger" href="/tourism#tourist-attractions">Tourist Attractions</a>
                                <a class="nav-link js-scroll-trigger" href="/tourism#delicacies">Delicacies</a>
                                <a class="nav-link js-scroll-trigger" href="/tourism#events">Events</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo e(adminSetActive('find-us*')); ?>" href="/find-us">Find Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#contact">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="main-container">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        <!-- Contact -->
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading text-uppercase">Contact Us</h2>
                        <h3 class="section-subheading text-muted">Get in touch with us and we'll get back to you as soon as we can.</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <form id="contactForm" name="sentMessage" novalidate>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" id="name" type="text" placeholder="Your Name *" required data-validation-required-message="Please enter your name.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" id="email" type="email" placeholder="Your Email *" required data-validation-required-message="Please enter your email address.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required data-validation-required-message="Please enter your phone number.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <textarea class="form-control" id="message" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-12 text-center">
                                    <div id="success"></div>
                                    <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <span class="copyright">Copyright &copy; Pangasinan Tourism 2018</span>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a target="_blank" href="https://twitter.com/pangasinan-tourism">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a target="_blank" href="https://facebook.com/pangasinan-tourism">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <div class="loadingModal"></div>
        <!-- Modal 1 -->
        <!-- Bootstrap core JavaScript -->
        <script src="/vendor/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="/js/owl.carousel.min.js"></script>
        <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Plugin JavaScript -->
        <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>
        <!-- Contact form JavaScript -->
        <script src="/js/jqBootstrapValidation.js"></script>
        <script src="/js/contact_me.js"></script>
        <!-- Custom scripts for this template -->
        <script src="/js/agency.min.js"></script>
       
        <script src="/js/actions.js"></script>
    </body>
</html>