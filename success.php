<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration Form using jQuery Ajax and PHP MySQL</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 

<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>

<script type="text/javascript" src="validation.min.js"></script>
<link href="style.css" rel="stylesheet" media="screen">

<script type="text/javascript">
$('document').ready(function()
{ 
	window.setTimeout(function(){
									
		window.location.href = "index.php";
										
	}, 6000);
	
	
	$("#back").click(function(){
		window.location.href = "index.php";
	});
});
</script>

</head>

<body>

<nav class="navbar navbar-default navbar-fixed-top">
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
                                                          
                    

                    <li class="dropdown" id="moretab">
                        <a href="#" class="dropdown-toggle btn-lg" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="false">Nikko Monroe 
                        <span class="caret"></span></a>

                        <ul class="dropdown-menu" id="showddown">
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Inbox</a></li>
                            <li><a href="#">Settings</a></li>
                            <li><a href="index.php">Log Out</a></li>
                        </ul>

                    </li>
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
</nav>
    
<div class="signin-form">

    <div class="container">
        <div class='alert alert-success'>
            <button class='close' data-dismiss='alert'>&times;</button>
                <strong>Success!</strong>  Successfully Registered.
        </div>
        
        <button class="btn btn-primary" id="back">
        <span class="glyphicon glyphicon-backward"></span> &nbsp; back to main page
        </button>
        
    </div>

</div>

</body>
</html>