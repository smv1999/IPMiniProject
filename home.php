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

if(strcasecmp($aud,"Festfire")==0)
{
    $cost = 100000;
}
else if(strcasecmp($aud,"Festfreeze")==0)
{
    $cost = 150000;
}
else if(strcasecmp($aud,"Festgrand")==0)
{
    $cost = 200000;
}
else if(strcasecmp($aud,"Festpomp")==0)
{
    $cost = 250000;
}

$sql="INSERT INTO booking(audname,eventname,dateoff,timeslot,cost) values ('$aud','$en','$dt','$tm','$cost')";
$result=mysqli_query($conn,$sql);
error_reporting(E_ALL ^ E_WARNING); 
if($result)
{   echo "<script type='text/javascript'>confirm('The final cost is $cost');
    window.open('confirm.html','_self');
    </script>";
}
else
 echo "Error: " . $sql . "<br>" . mysqli_error($conn)
?>