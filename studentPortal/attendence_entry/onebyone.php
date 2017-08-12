
<html>
<head>




<style>

body{width:610px;}
            .current-row{background-color:#B24926;color:#FFF;}
            .current-col{background-color:#1b1b1b;color:#FFF;}
            .tbl-qa{width: 100%;font-size:0.9em;background-color: #f5f5f5;}
            .tbl-qa th.table-header {padding: 115px;text-align: left;padding:10px;}
            .tbl-qa .table-row td {padding:10px;background-color: #FDFDFD;}

</style>

<script>
function showUser() {
    

     var str = document.getElementById('value').value;


    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } 

    else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
    }
}




</script>
</head>
<body>


<div id="txtHint"><b>
<?php
     
     session_start();
      //to select database
     $clsdep=$_SESSION['clsdep'];
     $clsbatch=$_SESSION['clsbatch'];
     $clsdiv=$_SESSION['clsdiv'];
     $mysql_database = $clsbatch."_".$clsdep."_".$clsdiv;
      $_SESSION['month']=$_POST['month'];
      $_SESSION['hrtot']=$_POST['hrtot'];
       $_SESSION['count']=1;
     echo $_SESSION['count'];

     
     $con = mysqli_connect('localhost','root','aarduin',$mysql_database);
       if (!$con) {
             die('Could not connect: ' . mysqli_error($con)); 
       }
      
     mysqli_select_db($con,$mysql_database);
     $sql="SELECT * FROM student_list WHERE id ='1'";
     $result = mysqli_query($con,$sql);


     echo "<table class=\"tbl-qa\" >
     <thead>
        <tr>
        <th class=\"table-header\">ENROLL NUMBER</th>
        <th class=\"table-header\">NAME</th>
          </tr> </thead> ";
     while($row=mysqli_fetch_array($result)){


            echo "<tr class=\"table-row\">";
    
            echo "<td>" . $row['enrollnumber'] . "</td>";
           echo "<td>" . $row['name'] . "</td>";
    
           echo "</tr>";
       }
          echo "</table>";
         mysqli_close($con);
         echo "<br>";
     

    ?>  
</div>


<input type="submit" value="BACK" onclick="showUser(0)" />
<input type="text" maxlength="3" name="value" id='value' />
<input type="submit" value="NEXT" onclick="showUser(1)" />

<br>

</body>
</html>
