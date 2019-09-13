<?php
$to = "vaidhyanathansm99@gmail.com";
$subject = "Your Booking has been Confirmed.";
$txt = "Hello world!";
$headers = "From: vaidhyanathan.sm@gmail.com" . "\r\n" ;

mail($to,$subject,$txt,$headers);

echo "<center>Your Booking has been confirmed. A Confirmation mail has been sent to 
your registered E-mail address.<br><p>check the spam folder if not in inbox.</p></center>"
echo "<button style='background-color: #4CAF50;
color: white;
padding: 12px;
margin: 10px 0;
border: none;
width: 100%;
border-radius: 3px;
cursor: pointer;
font-size: 17px;'>Go Back to Home Page</button>"
?>