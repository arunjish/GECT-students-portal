

    <?php
    session_start();
    include('connection_login.php');
    $_SESSION['fname']=$_POST['fname'];
    $_SESSION['lname']=$_POST['lname'];
    $_SESSION['email']=$_POST['email'];
    $_SESSION['cno']=$_POST['cno'];
    $_SESSION['cid']=$_POST['cid'];
    $_SESSION['passwd']=$_POST['passwd'];
    $_SESSION['dep']=$_POST['dep'];
    

    
   
   
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>GEC TEACHERS PORTAL</title>

	
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
    
	<![endif]-->
     <!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Coda' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
</head>

<body class="home">
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt=""> <h3 style="float:right; margin-left:10px;">Government Engineering College, Thrissur</h3></a>
			</div>
			<div class="navbar-collapse collapse">
				
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.html">Home</a></li>
			<li class="active">Signup</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
						<h3 class="thin text-center">
						<?php 

						   echo $_SESSION['fname'];
						   echo "  ";

						   echo $_SESSION['lname'];  

                             ?>

                          </h3>
						<p class="text-center text-muted">
                       <?php   
                       echo "ID:";
                       echo  $_SESSION['cid'];
                       echo "<br>";
                       echo $_SESSION['email'];
                       echo "<br>";
                       echo $_SESSION['cno'];
                       echo "<br>";
                       echo $_SESSION['dep'];
                        ?>
                        </p>
                       
							<hr>

							

							<form  action="submitmessage.php" method="post" >
								<div class="top-margin">
									<label>Chose Your Classes</label>
									
								</div>
								
                                
                                <div class="row top-margin">
									<div class="col-sm-4">
										
					<select class="form-control" id="transaction_type" name="dep"><option >DEPT</option><option value="ME">ME</option><option value="CE">CE</option><option value="EEE">EEE</option><option value="EC">ECE</option><option value="CSE">CSE</option><option value="CHE">CHE</option><option value="PE">PE</option></select>
									</div>
									<div class="col-sm-4">
										<select class="form-control" id="transaction_type" name="batch"><option >BATCH</option><option value="b13">2013-2017</option><option value="b14">2014-2018</option><option value="b15">2015-2019</option><option value="b16">2016-2020</option></select>
									</div>
                                    <div class="col-sm-4">
										<select class="form-control" id="transaction_type" name="div"><option>DIVISION</option><option value="A">A</option><option value"B">B</option></select>
						
									</div>
								</div>                  

								<hr>

								<div class="row">
									<div class="col-lg-8">
										                    
									</div>
									<div class="col-lg-1 col-offset-6 centered" >
										<button class="btn btn-action"  type="submit">Submit</button>
									</div>
								</div>
							</form>
						</div>
					</div>

				</div>
				
			</article>
			<!-- /Article -->

		</div>
	</div>	<!-- /container -->
	
<footer id="footer" class="top-space">
<!--footer1 top-->
		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 widget">
						<h3 class="widget-title">Address</h3>
						<div class="widget-body">
							<p>Address

                 Government Engineering College<br>
                 Thrissur - 680 009,<br>
                  Kerala, India
							</p>	
						</div>
					</div>

					<div class="col-md-3 widget">
						<h3 class="widget-title">&nbsp;</h3>
						<div class="widget-body">
							<p >
								Email : principal@gectcr.ac.in<br>

                           Principal : 0487 - 2334590 , 9400006411<br>

                           College : 0487 - 2334144 <br>
							</p>	
						</div>
					</div>

					<div class="col-md-6 widget">
						<h3 class="widget-title">Government Engineering College, Thrissur</h3>
						<div class="widget-body">
							<p>
                            Government Engineering College, Thrissur, is one of the most prestigious institutions in Kerala. Started in 1957 offering fewer courses, GEC Thrissur has marched ahead and one of the most sought after technical education centre in Kerala. Affiliated to University of Calicut , college campus is spread over an area of 75 acres and located at Ramavarmapuram, 5km from Thrissur town and 6km from Thrissur railway station.
                            </p>
							
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
</div>
<!--/footer1 top-->

<!--footer2 bottam-->
<div class="footer2">
			<div class="container">
				<div class="row">
					
					

					<div class="col-md-12 widget">
						<div class="widget-body">
							<p class="text-center">
								Copyright &copy; 2015,<a href="#" > G E C Teachers Portal</a> 
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
</div>
<!--footer2 bottam-->

	</footer>	
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>