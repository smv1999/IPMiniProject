<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Details</title>
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
    $conn->close();



?>
</body>
</html>
