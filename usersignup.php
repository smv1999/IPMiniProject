<?php
$servername = "localhost";
$username = "id10582486_smv1999";
$password = "vaidhya@123";
$dbname=    "id10582486_users";
$user=$_POST['uname'];
$email=$_POST['email'];
$psw=md5($_POST['psw']);
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql="INSERT INTO signup(username,email,password) values ('$user','$email','$psw')";
$result=mysqli_query($conn,$sql);
error_reporting(E_ALL ^ E_WARNING); 
if($result)
header("Location:userlogin.html");
else
 echo "Error: " . $sql . "<br>" . mysqli_error($conn)
?>