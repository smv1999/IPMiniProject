<?php
$servername = "localhost";
$username = "id10582486_smv1999";
$password = "vaidhya@123";
$dbname=    "id10582486_users";
$aud=$_POST['aname'];
$en=$_POST['ename'];
$dt=$_POST['dateoff'];
$tm = $_POST['timing'];
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql="INSERT INTO booking(audname,eventname,dateoff,timeslot) values ('$aud','$en','$dt','$tm')";
$result=mysqli_query($conn,$sql);
error_reporting(E_ALL ^ E_WARNING); 
if($result)
header("Location:confirm.html");
else
 echo "Error: " . $sql . "<br>" . mysqli_error($conn)
?>