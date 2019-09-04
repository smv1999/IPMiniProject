<?php
$servername = "localhost";
$username = "id10582486_smv1999";
$password = "vaidhya@123";
$dbname=    "id10582486_users";
$aud=$_POST['audname'];
$add=$_POST['address'];
$seat=$_POST['seats'];
$pr=$_POST['price'];
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql="INSERT INTO adminhome(audname,addr,seat,price) values ('$aud','$add','$seat','$pr')";
$result=mysqli_query($conn,$sql);
error_reporting(E_ALL ^ E_WARNING); 
if($result)
{   echo "<script type='text/javascript'>alert('Successfully Inserted!');</script>";
    $query = "select username,email from signup;";
    $queryResult = $conn->query($query);
    echo "<center><table border='2' cellspacing='10' cellpadding='10'>";
    while ($queryRow = $queryResult->fetch_row()) {
        echo "<tr>";
        for($i = 0; $i < $queryResult->field_count; $i++){
            echo "<td>$queryRow[$i]</td>";
        }
        echo "</tr>";
    }
    echo "</table></center>";
    $conn->close();
}
else
 echo "Error: " . $sql . "<br>" . mysqli_error($conn);


?>