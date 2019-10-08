<?php
$servername = "localhost";
$username = "id10582486_smv1999";
$password = "vaidhya@123";
$dbname=    "id10582486_users";

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql="INSERT INTO contact(name,email,subject,message) values ('$name','$email','$subject','$message')";
$result=mysqli_query($conn,$sql);
error_reporting(E_ALL ^ E_WARNING); 
if($result)
header("Location:contact.html");
else
 echo "Error: " . $sql . "<br>" . mysqli_error($conn)
?>