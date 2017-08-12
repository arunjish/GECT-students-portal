<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);
echo $q;
$con = mysqli_connect('localhost','root','aarduin','student_portal');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"student_portal");

$sql2="update student_list set hrPresent='55' WHERE id='1'";
mysqli_query($con,$sql2);

$sql="SELECT * FROM student_list WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>ENROLL NUMBER</th>
<th>NAME</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    
    echo "<td>" . $row['enrollnumber'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>