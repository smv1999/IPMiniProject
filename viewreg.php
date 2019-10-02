<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Details</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<style>
    #customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
<body>
    <center><h2>Registered Users</h2></center>
<?php
$servername = "localhost";
$username = "id10582486_smv1999";
$password = "vaidhya@123";
$dbname=    "id10582486_users";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

error_reporting(E_ALL ^ E_WARNING); 

    $query = "select username,email from signup;";
    $queryResult = $conn->query($query);
    echo "<center><table id='customers' border='2' cellspacing='10' cellpadding='10'>";
    while ($queryRow = $queryResult->fetch_row()) {
        echo "<tr>";
        for($i = 0; $i < $queryResult->field_count; $i++){
            echo "<td>$queryRow[$i]</td>";
        }
        echo "</tr>";
    }
    echo "</table></center>";

    echo "<center><h2>Auditorium Bookings</h2></center>";

    $qry = "select * from booking;";
    $queryRes = $conn->query($qry);
    echo "<center><table id='customers' border='2' cellspacing='10' cellpadding='10'>";
    while ($queryRows = $queryRes->fetch_row()) {
        echo "<tr>";
        for($i = 0; $i < $queryRes->field_count; $i++){
            echo "<td>$queryRows[$i]</td>";
        }
        echo "</tr>";
    }
    echo "</table></center>";


    $conn->close();



?>
<center><button class="btn btn-primary" onclick="window.open('admindashboard.html','_self')">Go Back</button></center>
                    
</body>
</html>
