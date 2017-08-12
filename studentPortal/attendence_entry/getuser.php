<!DOCTYPE html>
<html>
<head>
<style>
body{width:610px;}
      .current-row{background-color:#B24926;color:#FFF;}
      .current-col{background-color:#1b1b1b;color:#FFF;}
      .tbl-qa{width: 100%;font-size:0.9em;background-color: #f5f5f5;}
      .tbl-qa th.table-header {padding: 5px;text-align: left;padding:10px;}
      .tbl-qa .table-row td {padding:10px;background-color: #FDFDFD;}
</style>
</head>
<body>

<?php
session_start();

$q = intval($_GET['q']);

$count1=$_SESSION['count'];
$count2=$_SESSION['count']+1;
echo $q;
echo "<br>";
echo $count1;
echo "<br>";
echo $count2;
echo $_SESSION['month'];
     $clsdep=$_SESSION['clsdep'];
     $clsbatch=$_SESSION['clsbatch'];
     $clsdiv=$_SESSION['clsdiv'];
     $month=$_SESSION['month']; 
     if($month=="JAN")
     	$tot="tot1";
      elseif($month=="FEB")
      	$tot="tot2";
      elseif($month=="MAR")
      	$tot="tot3";
      elseif($month=="APR")
      	$tot="tot4";
      elseif($month=="MAY")
      	$tot="tot5";
      elseif($month=="JUN")
      	$tot="tot6";
      elseif($month=="JUL")
      	$tot="tot7";
      elseif($month=="AUG")
      	$tot="tot8";
      elseif($month=="SEP")
      	$tot="tot9";
      elseif($month=="OCT")
      	$tot="tot10";
      elseif($month=="NOV")
      	$tot="tot11";
      else
      	$tot="tot12";
      echo $tot;
      
$database = $clsbatch."_".$clsdep."_".$clsdiv;
$con = mysqli_connect('localhost','root','aarduin',$database);
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}






mysqli_select_db($con,$database);

$sql2="UPDATE attendance SET JAN=".$q.",".$tot."=".$_SESSION['hrtot']." WHERE id=".$count1."";
echo $sql2;
mysqli_query($con,$sql2);

$sql="SELECT * FROM student_list WHERE id = '".$count2."'";
$result = mysqli_query($con,$sql);

echo "<table class=\"tbl-qa\" >
<tr>
<th class=\"table-header\" >ENROLL NUMBER</th>
<th class=\"table-header\" >NAME</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr class=\"table-row\" >";
    
    echo "<td>" . $row['enrollnumber'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
$_SESSION['count']=$_SESSION['count']+1;

?>
</body>
</html>