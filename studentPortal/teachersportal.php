<?php
  require_once('auth.php');
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
        
                
                
                 <ul class="nav navbar-nav pull-right">


             
                     <li> <a href="">
                     <?php echo $_SESSION['fname'];
                      echo " ";
                      echo $_SESSION['lname'];  
                      echo "<br>";
                      echo $_SESSION['cid'];

                      ?>
                     </a> </li>
                          
               
                 <li><a class="fa fa-gear nav-icon"></a></li>
        <li><a href="logout.php" class="fa fa-power-off nav-icon"></a></li>
               
                  
                
                </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div> 
  <!-- /.navbar -->

  <header id="head" class="secondary"></header>
    
    

  <!-- container -->
  <div class="container">


    <div class="row">
      
      <!-- Article main content -->
      <article class="col-md-12 maincontent">
        <header class="page-header">
          <h2 class="page-title pull-left" align="left" >
     
          BATCH : <?php echo $_SESSION['clsbatch']," ";  ?> </h2>
          <h3 >
          <br>
          <br>
            CLASS :<?php echo $_SESSION['clsdep']," ",$_SESSION['clsdiv']; ?>
          </h3>          
        </header>

        <div class="top-boxes">
       <li>
       
         <div class="linkbox mar-right">
          <div class="flip" style="width: X.px; height: X.px;">
           <a href="groom.html">
            <div class="flip-front">
             <div class="fronter groom-front">
              <div class="icon-image">
               
              </div>
              <div class="icon-text">
              CLASS REPORTS
              </div>
             </div>
            </div>
            <div class="flip-back">
             <div class="backer groom-back">
              <div class="icon-image">
               
              </div>
              <div class="icon-text">
                CLASS REPORTS<br>DOWNLOAD
              </div>
             </div>
            </div>
           </a>
          </div>
         </div>
        
        
      <li>
         <div class="linkbox-3 mar-right">
          <div class="flip3" style="width: Y.px; height: Y.px;">
           <a href="attendence_entry/select_month.html">
            <div class="flip3-front">
             <div class="fronter gallery-front">
              <div class="icon-image">
              
              </div>
              <div class="icon-text">
              ATTENDENCE
              </div>
             </div>
            </div>
            <div class="flip3-back">
             <div class="backer gallery-back">
              <div class="icon-image">
               
              </div>
              <div class="icon-text">
              ATTENDENCE
              </div>
             </div>
            </div>
           </a>
          </div>
         </div>
       
         <div class="linkbox-4  mar-right">
          <div class="flip4" style="width: X.px; height: X.px;">
           <a href="contact.html">
            <div class="flip4-front">
             <div class="fronter contact-front">
              <div class="icon-image">
               
              </div>
              <div class="icon-text">
               SERIES TEXT MARKS
              </div>
             </div>
            </div>
            <div class="flip4-back">
             <div class="backer contact-back">
              <div class="icon-image">
             
              </div>
              <div class="icon-text">
           SERIES TEXT MARKS<BR>ENTRY
              </div>
             </div>
            </div>
           </a>
          </div>
         </div>
       </li>
       
       
        <div class="linkbox-2">
          <div class="flip2" style="width: Y.px; height: Y.px;">
           <a href="bride.html">
            <div class="flip2-front">
             <div class="fronter bride-front">
              <div class="icon-image">
              
              </div>
              <div class="icon-text">
               INTERNAL MARKS
              </div>
             </div>
            </div>
            <div class="flip2-back">
             <div class="backer bride-back">
              <div class="icon-image">
               
              </div>
              <div class="icon-text">
               INTERNAL MARKS<br>ENTRY
              </div>
             </div>
            </div>
           </a>
           
          </div>
         </div>
       </li>
      </div>
     </div>
      </article>
      <!-- /Article -->
      <p class="text-center text-muted"> <a href="studentlistdownload.php" class="btn btn-action btn-lg" role="button">

           ACESS STUDENT LIST</a></p>
      

    </div>
  </div>  <!-- /container -->
  

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