<?php
session_start();
?>
<?php
$connect=  mysql_connect("localhost","root","");
$select=  mysql_select_db("customer_payment", $connect);

if(isset($_POST['submit']))
{
    //echo "<script>alert('hello')</script>";
    $username=$_SESSION['username']=$_POST['username'];
    $password=$_POST['password'];
    $query="SELECT * FROM `login` WHERE username='$username' AND password='$password'";
    $run=mysql_query($query);
            
        if(@mysql_num_rows($run) > 0)
        {
            
            echo "<script>window.open('index.php','_self')</script>";
            exit;
        }
 else {
		 //echo "<script>alert('username and password invalid');</script>";
		 header("location:login.php?error=Username and password invalid"); 
		 exit;
      }
    
    
    
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Sydam Info Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="login-bg">
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-12">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.html">Login Pannel</a></h1>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

	<div class="page-content container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
			        <div class="box">
			            <div class="content-wrap">
			                <h6>Sign In</h6>
			                <div class="social">
	                            <a class="face_login" href="#">
	                                <span class="face_icon">
	                                    <img src="images/facebook.png" alt="fb">
	                                </span>
	                                <span class="text">Sign in with Facebook</span>
	                            </a>
	                            <div class="division">
	                                <hr class="left">
	                                <span>or</span>
	                                <hr class="right">
	                            </div>
	                        </div>
							<form action="" method="post">
			                <input class="form-control" name="username" type="text" placeholder="E-mail address">
			                <input class="form-control" name="password" type="password" placeholder="Password">
			                <hr/>
							<div><h4 style='color:red;'><?php echo @$_GET['error'];?></h4></div>
							<div class="action">
			                    <button class="btn btn-primary signup" type="submit" name="submit">login</button>
			                </div>
							</form>                
			            </div>
			        </div>

			        <div class="already">
			            <p>Don't have an account yet?<marquee><h3 style='color:green;'>Sydam Websolution Pvt.Ltd</h3></marquee></p>
			            
			        </div>
			    </div>
			</div>
		</div>
	</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>