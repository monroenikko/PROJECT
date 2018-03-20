<?php
require('./dbconfig.php');

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
                        <a href="signup.php" class="btn btn-lg fade-in" id="Sign-btn">Sign Up</a>
                    </li>
                    
                                        
                    <li>
                        <a href="login.php" class="btn btn-primary btn-primary1 btn-lg" id="login-btn">Log in</a>
                    </li>
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header -->
    
    
    
  
    <div class="intro-header">
        <div class="container">
         	<div class="intro-message">                    
                                                    
                <h1 style="color: #2B2B2B; font-family: Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana,' sans-serif'">
                    MAKE YOUR SERVICES<br>
                    EASY AND FAST
                    <h5 style="color: #176EA6; margin-top: 0em">Search your catering services now.</h5>
                </h1>

                <hr class="intro-divider">

                <center>
                     <div class="input-group col-md-6">
                             <input class="form-control input-lg" placeholder="search...">
                           <div class="input-group-addon" >
                              <i class="fa fa-search"></i>
                          </div>
                     </div>
               </center>
				
            </div>
        </div>
    </div>
   
    

    <!-- /.intro-header -->
    
   
    <!-- Page Content -->
    <!--<a name="services"></a>-->
   <a name="services"></a>
  <div class="content-section-aa" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <h1 class="page-header" style="text-align: center">
                    Catering Services 
                </h1>
                <!-- <button class="fetch_data"> Fetch Data </button>
                <input type="text" name="input_search_user_logs" id="input_search_user_logs" /> -->
            </div>
        </div>
    <div class="row" id="container_user_logs">
        
    
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="images/wedding.jpg" alt="...">
                    <div class="caption">
                        <a href="wedding_category.php"><h4>Wedding<br> Services</h4></a>

                    </div>
                </div>
            </div>

       
    
    

        <div class="col-sm-6 col-md-3">
            <div class="thumbnail" href="#">
                <img src="images/debut.jpg" alt="...">
                <div class="caption">
                    <h4>Debut Catering<br> Services</h4>
                    
                </div>
            </div>
        </div>
   
    
   
        <div class="col-sm-6 col-md-3" href="#">
            <div class="thumbnail">
                <img src="images/children.jpg" alt="...">
                <div class="caption">
                    <h4>Children Party <br>Catering Services</h4>
                    
                </div>
            </div>
        </div>
        
        <div class="col-sm-6  col-md-3">
            <div class="thumbnail" href="#">
                <img src="images/private.jpg" alt="...">
                <div class="caption">
                    <h4>Private Party <br>Catering Services</h4>
                    
                </div>
            </div>
        </div>

        
        
    </div>
        
    </div>
</div>

	
   <a name="about"></a>
    
    <div class="content-section-b">

        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                        <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                        <h2 class="section-heading" style="font-size: 3em"><b>ABOUT US</b></h2>
                        
                        <h3 class="section-heading">AN EASY WAY TO CONNECT TO YOUR CUSTOMERS.</h3>
                        <p class="lead">We built this sites to make the clients and its customers
                        to build strong relationship through easy transactions offered by our websites</p>
                    
                        <div class="col-lg-12">
                            <ul class="list-inline banner-social-buttons">
                            <li>
                                <a href="#" class="btn btn-primary btn-lg"> <span class="network-name"><i>Read More</i></span></a>
                            </li>
                            </ul>
                        </div>
                        
                    </div>

                    <div class="col-lg-5 col-sm-6">&nbsp;</div>
                              
                    <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                        <img class="img-responsive" src="images/ipad.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

  
    <!-- /.content-section-b -->

    
    <!-- /.content-section-a -->

    <a  name="contact"></a>
    
    <div class="banner">

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <h2>Connect using your facebook account now:</h2>
                </div>
                <div class="col-lg-6">
                    <ul class="list-inline banner-social-buttons">
                        <li>
                            <a href="https://facebook.com" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
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
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#about">About</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#services">Services</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#contact">Contact</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#contact">Help us</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; Foodpage 2018. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>


    
    <?php 
            while ($row = $stmt->fetch())
            {
        ?>


    <div class="modal fade" id="login-form" role="dialog">
        <div class="modal-dialog modal-md">
    
      <!-- Modal content-->
      <div class="modal-content">
                    <div class="modal-header">

                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        
                                            <div class="col-lg-offset-1 col-md-10">
                                                <h3 class="modal-title" style="text-align: center"> <img src="logo/fp.png"></h3>

                                                <h5 style="text-align:center">Login with one click with facebook</h5>
                                            </div>
                    </div>


            <!-- <div class="modal-body"> -->

                                    <div class="col-lg-offset-1 col-md-10" style="margin-top: 1em">
                                        <button type="submit" class="btn btn-block btn-primary btn-lg " style="background-color:#4267b2">
                                        Continue with Facebook
                                        </button>
                                    </div> 

                                        

                                        <h5 class="col-lg-offset-1 col-md-10" style="text-align:center">or</h5>

                                       
                            
                                        <div class="col-lg-offset-1 col-md-10">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input class="form-control" placeholder="Enter Username" name="username" id="username" />
                                            </div>

                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" placeholder="Enter Password" class="form-control" name="password" id="password" />
                                            </div>
                                        </div>

                                        <div class="col-lg-5">
                                            <ul class="list-inline banner-social-buttons">
                                                <li>
                                                    <a href="#" class="btn btn-link btn-md">Forgot your password?</a>
                                                </li>
                                                
                                            </ul>
                                        </div>

                                        <div class="form">
                                            <div class="col-lg-offset-1 col-md-10">
                                                <button href="client_page.php" id="login" type="submit" class="btn btn-primary btn-block btn-lg">
                                                    <a href="client_page.php" style="color: white">Login</a>
                                                </button>
                                            </div>
                                            
                                            <div class="col-lg-offset-1 col-md-10">
                                                <p style="margin-top: 1em">By proceeding you agree to Foodpage <span style="color:#2e98e5">Terms of Use</span> and <span style="color:#2e98e5">Privacy Policy</span>.</p>
                                            </div>
                                        </div>
            
            <!-- </div> -->



            <div class="modal-footer">
                <div class="col-lg-offset-1 col-md-10">
                    <button type="button" class="btn btn-block btn-default btn-lg" data-dismiss="modal">Create Account</button>                        
                </div>
            </div>

      </div>
      
    </div>
  </div>

          <?php     }
         ?> 


<!-- createAccount -->

     <div class="modal fade" id="Signup" role="dialog">
        <div class="modal-dialog modal-md">
    
      <!-- Modal content-->
      <div class="modal-content">
                    <div class="modal-header">

                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        
                                            <div class="col-lg-offset-1 col-md-10">
                                                <h3 class="modal-title" style="text-align: center"> <img src="logo/fp.png"></h3>

                                                <h5 style="text-align:center">Create your Account</h5>
                                            </div>
                    </div>


            <!-- <div class="modal-body"> -->

                                    <div class="col-lg-offset-1 col-md-10" style="margin-top: 1em">
                                        <button type="submit" class="btn btn-block btn-primary btn-lg " style="background-color:#4267b2">
                                        Continue with Facebook
                                        </button>
                                    </div> 

                                        

                                        <h5 class="col-lg-offset-1 col-md-10" style="text-align:center">or</h5>

                                       
                            
                                        <div class="col-lg-offset-1 col-md-10">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input class="form-control" placeholder="Enter Username" name="username" />
                                            </div>

                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" class="form-control" placeholder="Enter Password" name="password" />
                                            </div>
                                        </div>

                                        <div class="col-lg-5">
                                            <ul class="list-inline banner-social-buttons">
                                                <li>
                                                    <a href="#" class="btn btn-link btn-md">Forgot your password?</a>
                                                </li>
                                                
                                            </ul>
                                        </div>

                                        <div class="form">
                                            <div class="col-lg-offset-1 col-md-10">
                                                <button type="submit" class="btn btn-primary btn-block btn-lg">Sign up</button>
                                            </div>                                          
                                           
                                        </div>

                                         <div class="col-lg-offset-1 col-md-10">
                                                <p style="margin-top: 1em; text-align:left">By proceeding you agree to Foodpage <span style="color:#2e98e5">Terms of Use</span> and <span style="color:#2e98e5">Privacy Policy</span>.</p>
                                            </div>
            
            <!-- </div> -->



            <div class="modal-footer">
                <!-- <div class="col-lg-offset-1 col-md-10">
                    <button type="button" class="btn btn-block btn-default btn-lg" data-dismiss="modal">Create Account</button>                        
                </div> -->
            </div>

      </div>
      
    </div>
  </div>



    <!-- Modal -->
  
    
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="custom.js"></script>
    <script src="login.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
    <script>


        // $(function () {
        //     $('body').on('click', '#login-btn', function (e){
        //         e.preventDefault();
        //         $('#login-form').modal({backdrop : 'static'})
        //     });


        // });

        // $(function () {
        //     $('body').on('click', '#Sign-btn', function (e){
        //         e.preventDefault();
        //         $('#Signup').modal({backdrop : 'static'})
        //     });
        // });

        // $(function ()){
        //     $('body').on('click', '#Sign-btn', function (e)){
        //         e.preventDefault();
        //         $.ajax({
        //             url: 'index.php',

        //         });
        //     });
        // });

            
            $('body').on('click', '.fetch_data', function (e) {
                e.preventDefault();
                var input_search_user_logs = $('#input_search_user_logs').val();
                $.ajax({
                    url : 'fetchuserlogs.php',
                    type : 'post',
                    data : { search : input_search_user_logs },
                    success : function (data) {
                        $('#container_user_logs').html(data);
                    }
                });
            });
            
            $('body').on('submit', '#login-form', function (e) {
                e.preventDefault();
                
                var formData = new FormData($(this)[0]);
                
                $.ajax({
                    url : 'validate_login.php',
                    type : 'post',
                    data : formData,
                    dataType : 'json',
                    processData : false,
                    contentType : false,
                    success : function (data) {
                        console.log(data);
                        if (data.login_validate == 1)
                        {
                            alert(data.msg);
                            // window.location = 'account.php';client_page.php
                            window.location = 'client_page.php';
                        }
                        else
                        {    
                            alert(data.msg);
                        }
                    }
                });
            });
        
   
    </script>
</body>

</html>
