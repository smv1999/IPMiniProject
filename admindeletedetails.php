<?php
$servername = "localhost";
$username = "id10582486_smv1999";
$password = "vaidhya@123";
$dbname=    "id10582486_users";
$aud=$_POST['audname'];
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql="delete from adminhome where audname='$aud';";
$result=mysqli_query($conn,$sql);
error_reporting(E_ALL ^ E_WARNING); 
if($result)
{   echo "<script type='text/javascript'>alert('Successfully Deleted!');</script>";
    $conn->close();
}
else
 echo "Error: " . $sql . "<br>" . mysqli_error($conn);


?>