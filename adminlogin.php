<?php
$servername = "localhost";
$username = "id10582486_smv1999";
$password = "vaidhya@123";
$dbname=    "id10582486_users";
$user=$_POST['uname'];
$pswd=$_POST['psw'];
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$query = mysqli_query($conn,"SELECT * FROM adminlogin WHERE passwd='$pswd' AND username='$user'");
$rows = mysqli_num_rows($query);
if ($rows == 1) {
header("location: admindashboard.html"); 
} else {
$error = "Username or Password is invalid";
echo "<script type='text/javascript'>alert('$error');</script>";
}
?>