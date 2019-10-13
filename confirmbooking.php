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
$servername = "localhost";
$username = "id10582486_smv1999";
$password = "vaidhya@123";
$dbname=    "id10582486_users";
$cname = $_POST['cardname'];
$cnumber = $_POST['cardnumber'];
$expmonth = $_POST['expmonth'];
$expyear = $_POST['expyear'];
$cvv = $_POST['cvv'];

$conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$query = mysqli_query($conn,"SELECT * FROM bank WHERE ccnumber='$cnumber' AND cvv='$cvv'");
$rows = mysqli_num_rows($query);
if ($rows == 1) {
    echo "<center>Your Booking has been confirmed. A Confirmation mail has been sent to 
    your registered E-mail address.<br><p>check the spam folder if not in inbox.</p></center>";

    $to = "vaidhyanathan.sm@gmail.com";
    $subject = "no-reply: Your Booking has been Confirmed.";
    $txt = "Thank You for choosing AudyBuddy. We feel immense pleasure to serve you. Feel free to contact us for 
    support at contact-support@audybuddy.com";
    $headers = "From: booking_events@audybuddy.com" . "\r\n" ;
    
    mail($to,$subject,$txt,$headers);

}
else {
    $error = "Card Credentials are incorrect!";
    echo "<script type='text/javascript'>alert('$error');</script>";
    header("Location: confirm.html");
    }

?>
 <center>
    <div class='container-fluid' width=50% height=50%>
        <button class='btns' onclick="window.open('mainhome.php','_self');">Go Back to Home Page</button>
    </div>
</center>

</body>
</html>
   
