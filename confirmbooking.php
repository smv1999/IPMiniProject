<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Booking Confirmation</title>
</head>
<style>
    .btns{
    background-color: #4CAF50;
    color: white;
    padding: 12px;
    margin: 10px 0;
    border: none;
    width: 100%;
    border-radius: 3px;
    cursor: pointer;
    font-size: 17px;
    }

</style>
<body>
<?php
$to = "vaidhyanathansm99@gmail.com";
$subject = "Your Booking has been Confirmed.";
$txt = "Hello world!";
$headers = "From: vaidhyanathan.sm@gmail.com" . "\r\n" ;

mail($to,$subject,$txt,$headers);

echo "<center>Your Booking has been confirmed. A Confirmation mail has been sent to 
your registered E-mail address.<br><p>check the spam folder if not in inbox.</p></center>";
?>
<center>
    <div class='container-fluid' width=50% height=50%>
        <button class='btns' onclick='window.open("home.html","_self")'>Go Back to Home Page</button>
    </div>
</center>

</body>
</html>
   
