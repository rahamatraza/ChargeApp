<?php
session_start();
if(@!$_SESSION['username'])
{
    echo "<script>window.open('login.php','_self')</script>";
    
}

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Customer Info</title>
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
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.php"> Welcome:  <?php echo $_SESSION['username'];?></a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                  <div class="input-group form">
	                       <input type="text" class="form-control" placeholder="Search...">
	                       <span class="input-group-btn">
	                         <button class="btn btn-primary" type="button">Search</button>
	                       </span>
	                  </div>
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="profile.html">Profile</a></li>
	                          <li><a href="logout.php">Logout</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="index.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                   
                    <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i>  Information
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="index.php">Payment</a></li>
                            <li><a href="details.php">Details</a></li>
                        </ul>
                    </li>
                </ul>
             </div>
		  </div>
		  <div class="col-md-10">
		  <div class="container">
  <h2 style="color:#800000; text-align:center;">Payment Details Shown Here</h2></br>
  
  <h4 style="color:red; text-align:center;"><?php echo @$_GET['success']?></h4>

  
  <marquee><h5 style="color:#AB0E74">Sydam WebSolution Pvt.Ltd Customer Information Portal</h5></marquee> <hr/>           
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Credit</th>
		<th>Action</th>
      </tr>
    </thead>
    <tbody>
	<?php 
	$connect=  mysql_connect("localhost","root","");
	$select=  mysql_select_db("customer_payment", $connect);
	$result="select *from payment";
	$query=mysql_query($result);
	while($row=mysql_fetch_array($query)){

	
	?>
	
	
	<tr>
	<td><?php echo $row[1]?></td>
	<td><?php echo $row[1]?></td>
	<td><?php echo $row[1]?></td>
	<td><a href="details.php?pay_no=<?php echo $row[0]?>"><button class='btn btn-success glyphicon glyphicon-zoom-in'>View</button></a>&nbsp;
	<a href="delete.php?pay_no=<?php echo $row[0]?>"><button class='btn btn-danger glyphicon glyphicon-trash'>&nbsp;Delete</button></a></td>
  </tr>
	<?php

	}
		?>

      
     
    </tbody>
  </table>
</div>
		  </div>
		  

		  		
		  			






		  			</div>
		  		</div>
		  	</div>

		  

		</div>
    </div>

    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright &copy;2017 <a href='#'>Sydam Websolution Pvt.Ltd</a>
            </div>
            
         </div>
      </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>