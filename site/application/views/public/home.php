<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Landing Page - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=asset_url()?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=asset_url()?>css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?=asset_url()?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php

    if(isset ($load_error)){
        $load_error=null;
        echo "<script>window.onload=function (){location.href='#login'} </script>";
    }

    ?>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                    <a class="navbar-brand topnav" href="#" style="padding-left: -200px;">Code Sprinters</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right" style="padding-left: 215px;">
                    <li>
                        <a href="#races">Races</a>
                    </li>
                    <li>
                        <a href="#training">Training</a>
                    </li>
                    <li>
                        <a href="#faqs">FAQs</a>
                    </li>
                    <li>
                        <a href="#login">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header -->
    <a name="about"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>Code Sprinters</h1>
                        <h3>We create the ultimate platform for runners, offering seamless race management and real-time tracking! </h3>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->

	<a  name="races"></a>
    <h1 style="text-align: center; padding: 15px;">Upcoming Races:</h1>
    <div class="content-section-a">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">St. Patty's 5K</h2>
                    <a href="#login">
                    <button class="lead"> Login/Sign Up for Details! </button>
                    </a>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="<?=asset_url()?>img/ipad.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <div class="content-section-b">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Spring Fest 5K & 10K</h2>
                    <a href="#login">
                    <button class="lead"> Login/Sign Up for Details! </button>
                    </a>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive" src="<?=asset_url()?>img/dog.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->

    <div class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Firework 4th Marathon</h2>
                    <a href="#login">
                    <button class="lead"> Login/Sign Up for Details! </button>
                    </a>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="<?=asset_url()?>img/phones.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <a  name="training"></a>
    <h1 style="text-align: center; padding: 15px;">Training Guides:</h1>
    <div class="content-section-a">
        <div class="container">
            <class="row">
                    <div class="clearfix"></div>
                        <a href="https://www.halhigdon.com/training/5k-training/" target="_blank">
                            <h2 class="section-heading" style="text-align: center;">5K Training</h2><br>
                        </a>
                        <a href="https://www.halhigdon.com/training/10k-training/" target="_blank">
                            <h2 class="section-heading" style="text-align: center;">10K Training</h2><br>
                        </a>    
                        <a href="https://www.halhigdon.com/training/half-marathon-training/" target="_blank">
                            <h2 class="section-heading" style="text-align: center;">Half-Marathon Training</h2><br>
                        </a>
                        <a href="https://www.halhigdon.com/training/post-marathon-recovery/" target="_blank">
                            <h2 class="section-heading" style="text-align: center;">Post-Race Recovery</h2><br>
                        </a>
               
            </div>

        </div>
        <!-- /.container -->

    </div>


    <a  name="faqs"></a>
    <h1 style="text-align: center; padding: 15px;">FAQs:</h1>
    <div class="content-section-a">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">How can I contact a Code Sprinter?</h2>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                <p class="lead" style="margin-top: 70px;">You can contact us by email at...</p>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <div class="content-section-b">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Question 2</h2>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                <p class="lead" style="margin-top: 70px;">Answer...</p>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->

    <div class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Question 3</h2>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                <p class="lead" style="margin-top: 70px;">Answer 3...</p>
                </div>
            </div>

        </div>
        <!-- /.container -->



    <!-- /.content-section-a -->
    <a  name="login"></a>
    <div class="content-section-b">

        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-sm-12">
                    <?=validation_errors('<p class="errors">')?>
                    <?php
                        if(isset($error_message)){
                            echo "<p class='errors'>$error_message</p>";
                            $error_message=null;
                        }
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-1 col-sm-1"></div>
                <div class="col-lg-4 col-sm-5">
                    <h1>Login</h1>
                    <!-- Login Form -->
                    <form action="<?php echo base_url('home/login'); ?>" method="post">
                        <div class="form-group">
                            <input type="email" name="user_name" class="form-control" placeholder="User Name" required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
                <div class="col-lg-4 col-lg-offset-2 col-sm-5">
                    <h1>Create Account</h1>
                    <?php
                        echo form_open('home/create');
                        echo form_input('full_name','','placeholder="Full Name"')."<br/>";
                        echo form_input('email_address','','placeholder="Email Address"')."<br/>";
                        echo form_password('password','','placeholder="Password"')."<br/>";
                        echo form_password('retype_password','','placeholder="Retype Password"')."<br/>";
                        echo form_submit('submit','Create Account')."<br/>";
                        echo form_close();
                    ?>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>


	<a  name="contact"></a>
    <div class="banner">

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <h2>Connect with Code Sprinters</h2>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.banner -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#races">Races</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#training">Training</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#faqs">FAQs</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; HThao's INC 2023. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="<?=asset_url()?>js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=asset_url()?>js/bootstrap.min.js"></script>

</body>

</html>