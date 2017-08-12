

    <?php
    session_start();
     $clsdep=$_SESSION['clsdep'];
     $clsbatch=$_SESSION['clsbatch'];
     $clsdiv=$_SESSION['clsdiv'];
     $mysql_hostname = "localhost";
     $mysql_user = "root";
     $mysql_password = "xxxx";
     $mysql_database = $clsbatch."_".$clsdep."_".$clsdiv;
     
     $prefix = "";
     $bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
     mysql_select_db($mysql_database, $bd) or die("Could not select database");
    ?>
