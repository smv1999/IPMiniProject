<?php
session_start();
$servername = "localhost";
$username = "id10582486_smv1999";
$password = "vaidhya@123";
$dbname=    "id10582486_users";
$user=$_POST['uname'];
$psw=md5($_POST['psw']);
$_SESSION['username'] = $user;
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = mysqli_query($conn,"SELECT * FROM signup WHERE password='$psw' AND username='$user'");
$rows = mysqli_num_rows($query);
$mailrow = mysqli_fetch_array($query);
$mailid = $mailrow['email'];
setcookie($mailid,time() + (86400 * 30), "/");

if ($rows == 1) {
header("location: mainhome.php"); 
} else {
$error = "Username or Password is invalid";
echo "<script type='text/javascript'>alert('$error');</script>";
}

?>