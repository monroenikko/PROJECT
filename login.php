<?php

session_start();

if(isset($_SESSION['user_session'])!="")
{
	header("Location: home.php");
}

?>

    <!DOCTYPE html>


    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Foodpage.ph</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/landing-page.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">

        <link href="animation.css" rel="stylesheet">

        <!-- validator -->
        <link href="css/bootstrapValidator.css" rel="stylesheet">
        <link href="css/bootstrapValidator.min.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    </head>

    <body class="fade-in">

        <!-- Navigation -->
        <nav class="navbar navbar-default static-top topnav" role="navigation">
            <div class="container topnav">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand topnav" href="index.php">
                        <img src="logo/200.png">
                    </a>
                </div>




                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right list-inline">
                        <li>
                            <a href="signup.php" class="btn btn-lg" id="Sign-btn">Sign Up</a>
                        </li>


                        <li class="active">
                            <a href="login.php" class="btn btn-primary btn-primary1 btn-lg" id="login-btn">Log in</a>
                        </li>

                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- signup form -->
        <div class="intro-head">

        </div>

        <div class="signin-form">

            <div class="container">


                <form class="form-signin" method="post" id="login-form">
                    <center>
                        <img src="logo/fp.png">
                    </center>

                    <h4 class="form-signin-heading" style="text-align:center">Log In your Account:</h4>
                    <hr />

                    <div id="error">
                        <!-- error will be showen here ! -->
                    </div>

                    

                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email address" name="user_email" id="user_email" />
                        <span id="check-e"></span>
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" name="password" id="password" />
                    </div>

                    <hr />


                    <div class="form-group">

                        <button type="submit " class="btn btn-primary btn-lg btn-block" name="btn-login " id="btn-login">
                            <span class="glyphicon glyphicon-log-in "></span> &nbsp; Log In
                        </button>


                        <p style="margin-top: 1em ">By proceeding you agree to Foodpage <span style="color:#2e98e5 ">Terms of Use</span> and <span style="color:#2e98e5 ">Privacy Policy</span>.</p>
                    </div>



                </form>

            </div>

        </div>





        <a name="contact "></a>

        <div class="banner ">

            <div class="container ">

                <div class="row ">
                    <div class="col-lg-6 ">
                        <h2>Connect using your facebook account now:</h2>
                    </div>
                    <div class="col-lg-6 ">
                        <ul class="list-inline banner-social-buttons ">
                            <li>
                                <a href="https://facebook.com " class="btn btn-default btn-lg "><i class="fa fa-facebook fa-fw "></i> <span class="network-name ">Facebook</span></a>
                            </li>

                        </ul>
                    </div>
                </div>

            </div>
            <!-- /.container -->

        </div>
        <!-- /.banner -->

        <!-- Footer -->
        <footer>
            <div class="container ">
                <div class="row ">
                    <div class="col-lg-12 ">
                        <ul class="list-inline ">
                            <li>
                                <a href="# ">Home</a>
                            </li>
                            <li class="footer-menu-divider ">&sdot;</li>
                            <li>
                                <a href="#about ">About</a>
                            </li>
                            <li class="footer-menu-divider ">&sdot;</li>
                            <li>
                                <a href="#services ">Services</a>
                            </li>
                            <li class="footer-menu-divider ">&sdot;</li>
                            <li>
                                <a href="#contact ">Contact</a>
                            </li>
                            <li class="footer-menu-divider ">&sdot;</li>
                            <li>
                                <a href="#contact ">Help us</a>
                            </li>
                        </ul>
                        <p class="copyright text-muted small ">Copyright &copy; Foodpage 2018. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </footer>






        <div class="modal fade " id="login-form " role="dialog ">
            <div class="modal-dialog modal-md ">

                <!-- Modal content-->
                <div class="modal-content ">
                    <div class="modal-header ">

                        <button type="button " class="close " data-dismiss="modal ">&times;</button>

                        <div class="col-lg-offset-1 col-md-10 ">
                            <h3 class="modal-title " style="text-align: center "> <img src="logo/fp.png "></h3>

                            <h5 style="text-align:center ">Login with one click with facebook</h5>
                        </div>
                    </div>


                    <!-- <div class="modal-body "> -->

                    <div class="col-lg-offset-1 col-md-10 " style="margin-top: 1em ">
                        <button type="submit " class="btn btn-block btn-primary btn-lg " style="background-color:#4267b2 ">
                                        Continue with Facebook
                                        </button>
                    </div>



                    <h5 class="col-lg-offset-1 col-md-10 " style="text-align:center ">or</h5>



                    <div class="col-lg-offset-1 col-md-10 ">
                        <div class="form-group ">
                            <label>Username</label>
                            <input class="form-control " placeholder="Enter Username " name="username " id="username " />
                        </div>

                        <div class="form-group ">
                            <label>Password</label>
                            <input type="password " placeholder="Enter Password " class="form-control " name="password " id="password " />
                        </div>
                    </div>

                    <div class="col-lg-5 ">
                        <ul class="list-inline banner-social-buttons ">
                            <li>
                                <a href="# " class="btn btn-link btn-md ">Forgot your password?</a>
                            </li>

                        </ul>
                    </div>

                    <div class="form ">
                        <div class="col-lg-offset-1 col-md-10 ">
                            <button href="client_page.php " id="login " type="submit " class="btn btn-primary btn-block btn-lg ">
                                                    <a href="client_page.php " style="color: white ">Login</a>
                                                </button>
                        </div>

                        <div class="col-lg-offset-1 col-md-10 ">
                            <p style="margin-top: 1em ">By proceeding you agree to Foodpage <span style="color:#2e98e5 ">Terms of Use</span> and <span style="color:#2e98e5 ">Privacy Policy</span>.</p>
                        </div>
                    </div>

                    <!-- </div> -->



                    <div class="modal-footer ">
                        <div class="col-lg-offset-1 col-md-10 ">
                            <button type="button " class="btn btn-block btn-default btn-lg " data-dismiss="modal ">Create Account</button>
                        </div>
                    </div>

                </div>

            </div>
        </div>




        <!-- createAccount -->



        <!-- Modal -->


        <!-- jQuery -->
        <script src="js/jquery.js "></script>
        <script src="custom.js "></script>
        <script src="script.js "></script>
        <script src="validation.min.js "></script>
        <!-- <script src="login.js "></script> -->
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js "></script>
        <script src="js/bootstrapValidator.js"></script>
        <script src="js/bootstrapValidator.min.js"></script>



    </body>

    </html>