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
{   echo "<script type='text/javascript'>alert('Successfully Inserted!'); window.open('admineditdetails.html','_self');</script>";
    $conn->close();
}
else
 echo "Error: " . $sql . "<br>" . mysqli_error($conn);


?>