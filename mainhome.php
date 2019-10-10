<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
	<link rel="stylesheet" type="text/css" href="user_css/demo.css" />
	<link rel="stylesheet" type="text/css" href="user_css/component.css" />
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
        <title>Auditorium Management System</title>
    <style>
    body {font-family: Arial, Helvetica, sans-serif;}
    .containers {
      padding: 16px;
    }
    .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
      padding-top: 30px;
    }
    /* Modal Content/Box */
    .modal-content {
      background-color: #fefefe;
      margin: 5% auto; /* 5% from the top, 15% from the bottom and centered */
      border: 1px solid #888;
      width: 40%; /* Could be more or less, depending on screen size */
    }
    .modal-cont {
      background-color: #fefefe;
      border: 1px solid #888;
      width: 30%; /* Could be more or less, depending on screen size */
    }
    .container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
  width: 450px;
}

    .imgcontainer {
      text-align: center;
      margin: 24px 0 12px 0;
      position: relative;
    }

    .statuscontainer {
      text-align: left;
      margin: 24px 0 12px 0;
      position: relative;
    }
    /* Add Zoom Animation */
    .animate {
      -webkit-animation: animatezoom 0.6s;
      animation: animatezoom 0.6s
    }
    .topcorner{
   position:absolute;
   top:90px;
   right:0;
   background-color: #33A5FF;
   color: white;
   padding: 14px 20px;
   margin: 8px 0;
   border: none;
   cursor: pointer;
  }
  .leftcorner{
 position:absolute;
 top:0;
 left:0;
 background-color: #4CAF50;
 color: white;
 padding: 14px 20px;
 margin: 8px 0;
 border: none;
 cursor: pointer;
}
  .botcorner{
 position:relative;
 bottom:0;
 right:0;
 background-color: #33A5FF;
 color: white;
 padding: 20px 16px;
 margin: 8px 0;
 border: none;
 cursor: pointer;
}
.botcorner2{
position:absolute;
bottom:0;
right:0;
background-color: #FFFFFF;
color: black;
padding: 14px 20px;
margin: 8px 0;
border: none;
cursor: pointer;
}
/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 30%;
  padding: 20px;
}
.blackc{
    color: black;
}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.bgimg {
  /* Background image */
  background-image:'first.jpg';
  /* Full-screen */
  height: 100%;
  /* Center the background image */
  background-position: center;
  /* Scale and zoom in the image */
  background-size: cover;
  /* Add position: relative to enable absolutely positioned elements inside the image (place text) */
  position: relative;
  /* Add a white text color to all elements inside the .bgimg container */
  color: black;
  /* Add a font */
  font-family: "Courier New", Courier, monospace;
  /* Set the font-size to 25 pixels */
  font-size: 25px;
}

/* Position text in the top-left corner */
.topleft {
  position: absolute;
  top: 0;
  left: 16px;
}

/* Position text in the bottom-left corner */
.bottomleft {
  position: absolute;
  bottom: 0;
  left: 16px;
}

 .bg{
  background: #FFFFFF;

 }

/* Style the <hr> element */
hr {
  margin: auto;
  width: 40%;
}

#snackbar {
  visibility: hidden; /* Hidden by default. Visible on click */
  min-width: 250px; /* Set a default minimum width */
  margin-left: -125px; /* Divide value of min-width by 2 */
  background-color: #333; /* Black background color */
  color: #fff; /* White text color */
  text-align: center; /* Centered text */
  border-radius: 2px; /* Rounded borders */
  padding: 16px; /* Padding */
  position: fixed; /* Sit on top of the screen */
  z-index: 1; /* Add a z-index if needed */
  left: 50%; /* Center the snackbar */
  bottom: 30px; /* 30px from the bottom */
}
table {border-collapse: collapse;}
td    {padding: 6px;}

/* Show the snackbar when clicking on a button (class added with JavaScript) */
#snackbar.show {
  visibility: visible; /* Show the snackbar */
  /* Add animation: Take 0.5 seconds to fade in and out the snackbar. 
  However, delay the fade out process for 2.5 seconds */
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

/* Animations to fade the snackbar in and out */
@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;} 
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;} 
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}

    </style>
  </head>
  <body class="bg">
      <nav class="pages-nav">
          <div class="pages-nav__item"><a class="link link--page" href="about.html">ABOUT</a></div>
          <div class="pages-nav__item"><a class="link link--page" href="gallery.html">GALLERY</a></div>
          <div class="pages-nav__item"><a class="link link--page" href="contact.html">CONTACT</a></div>   
        </nav>

      <div class="containers">
      <marquee><font color="black" size="5">Welcome to AudyBuddy</font></marquee>
    </div>
    <form action="logout.php" method="POST">
      <input type="submit" class="topcorner" value="Logout">
    </form>
       <br><br>

       <?php
        session_start();
        $username = $_SESSION['username'];
        if(!isset($username))
        {
          header("Location: index.html");
        }
        else{
          echo "<script type='text/javascript'>alert('Hi $username');</script>";
        }
       ?>
       <center><table border="2">
          <tr>
            <td><font color="black" >Auditorium Name</font></td>
            <td><font color="black" >Address</font></td>
            <td><font color="black" >Seats</font></td>
            <td><font color="black" >Cost</font></td>
          </tr>
          <tr>
            <td><font color="#9400D3">Festfire</font></td>
            <td><a href="https://www.google.com/maps/place/K.+K.+Nagar,+Chennai,+Tamil+Nadu/@13.0394154,80.1824003,14z/data=!3m1!4b1!4m5!3m4!1s0x3a5266dbdecf0149:0x4d3edefeb97aa0de!8m2!3d13.0410013!4d80.1993919" target="_blank"><font color="#9400D3">K K Nagar</font></a></td>
            <td><font color="#9400D3">500</font></td>
            <td><font color="#9400D3">100000</font></td>
          </tr>
          <tr>
            <td><font color="#9400D3">Festfreeze</font></td>
            <td><a href="https://www.google.com/maps/place/Ashok+Nagar,+Chennai,+Tamil+Nadu/@13.0358668,80.2035567,15z/data=!3m1!4b1!4m5!3m4!1s0x3a5266de74ad88a3:0xd842d88783c1bd4!8m2!3d13.0373222!4d80.2123115" target="_blank"> <font color="#9400D3">Ashok Nagar</font></a></td>
            <td><font color="#9400D3">750</font></td>
            <td><font color="#9400D3">150000</font></td>
          </tr>
          <tr>
            <td><font color="#9400D3">Festgrand</font></td>
            <td><a href="https://www.google.com/maps/place/Vadapalani,+Chennai,+Tamil+Nadu/@13.0521844,80.2026812,15z/data=!3m1!4b1!4m5!3m4!1s0x3a5266bf5a08c45f:0x9478e1cd7e7f1723!8m2!3d13.0499711!4d80.2121306" target="_blank"><font color="#9400D3">Vadapalani</font></a></td>
            <td><font color="#9400D3">1000</font></td>
            <td><font color="#9400D3">200000</font></td>
          </tr>
          <tr>
            <td><font color="#9400D3">Festpomp</font></td>
            <td><a href="https://www.google.com/maps/place/Velachery,+Chennai,+Tamil+Nadu/@12.9791197,80.2007085,14z/data=!3m1!4b1!4m5!3m4!1s0x3a525d9ff2065a3b:0x66435015604038cc!8m2!3d12.9800691!4d80.2184218" target="_blank"><font color="#9400D3">Velachery</font></a></td>
            <td><font color="#9400D3">1500</font></td>
            <td><font color="#9400D3">250000</font></td>
          </tr>
        </table></center>
       
  
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form animate" method="POST" action="home.php">
					<span class="login100-form-title p-b-49">
						Booking System
					</span>

         <p class="blackc"> Auditorium Name </p><br>
              <select name="aname" id="audname" style="width: 100%; height: 45px;">
                      <option value="Festfire">Festfire</option>
                      <option value="Festfreeze">Festfreeze</option>
                      <option value="Festgrand">Festgrand</option>
                      <option value="Festpomp">Festpomp</option>
              
                    </select>

					<div class="wrap-input100 validate-input" data-validate = "Event name is required">
					<p class="blackc">Event Name</p>
						<input class="input100" type="text" id="evtname" name="ename" placeholder="Type the Event Name">
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
					<p class="blackc">Date</p>
						<input class="input100" type="date" id="dateofevt" name="dateoff">
					</div>
					
          <p class="blackc">Auditorium Booking Request</p><br><br><br>
          <p class="blackc">Select Time Slot</p>
          <div class="row">
      <div class="column" style="background-color:#FFFFFF;">
        <button type="button" id="firstslot" >9:00 AM - 12:00 PM</button>
      </div>
      <div class="column" style="background-color:#FFFFFF;">
        <button type="button" id="secondslot">12:30 PM - 03:30 PM</button>

      </div>
      </div>

      <div class="row">
      <div class="column" style="background-color:#FFFFFF;">
        <button type="button" id="thirdslot">4:00 PM - 07:00 PM</button>

      </div>
      <div class="column" style="background-color:#FFFFFF;">
        <button type="button" id="fourthslot">7:30 PM - 10:30 PM</button>

      </div>
      </div>

      <div class="wrap-input100 validate-input m-b-23" data-validate = "Timing is required">
          <input class="input100" type="text" name="timing" placeholder="Enter Selected Timing">
        </div>
          
      
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" class="login100-form-btn" onclick="return validate()">
								Continue
							</button>
						</div>
					</div>
   <br><br>
          <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
              <button type="button" class="login100-form-btn" onclick="giveFeedback();">Give Your Feedback</button>
						</div>
					</div>

				</form>
			</div>
		</div>
  </div>

  
          
  
	

<!-- booking confirmed -->
<div id="snackbar">Your Booking is Confirmed. Taking You To Payment Page...</div>


    <div class="containers bg">
    <marquee onmouseover="this.stop();" onmouseout="this.start();"><a href="first.jpg" target="_blank"><img src="first.jpg" height="230" width="350"></a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    <a href="second.jpg" target="_blank"><img src="second.jpg" height="230" width="350"></a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    <a href="third.jpg" target="_blank"><img src="third.jpg" height="230" width="350"></a></marquee>
    </div>
    <center>&copy; 2019 AudyBuddy.All Rights Reserved.</center>
  </body>

<script>
var x, i, j, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
for (i = 0; i < x.length; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < selElmnt.length; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        h = this.parentNode.previousSibling;
        for (i = 0; i < s.length; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            for (k = 0; k < y.length; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);



  
function chat() {
  var chatter = document.getElementById("userchat").value;
  if(chatter.includes("availability"))
  {  //action 
    window.open("userlogin.html");
  }
}

  function confirm()
  {
    var x = document.getElementById("snackbar");

  // Add the "show" class to DIV
    x.className = "show";

  // After 3 seconds, remove the show class from DIV
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
    // window.open("home.html","_self");
    

  }
  function check() {
    document.getElementById('id01').style.display='none';
    document.getElementById('id02').style.display='none';
  }

function giveFeedback()
{
  window.open("https://docs.google.com/forms/d/e/1FAIpQLSd5tYvSWmIHFC0TSGOFx7rjg8MeG0zJCdR9lKSYspG5vgsQeA/viewform?usp=sf_link",
  "_self");
}

function logout() {
  window.open("userlogin.html","_self");
}
function validate() {
  
  var evt = document.getElementById("evtname").value;
  var date = document.getElementById("dateofevt").value;
  var today = new Date();
  var dd = today.getDate();
  var mm = today.getMonth() + 1; //January is 0!
  var cost;

var yyyy = today.getFullYear();
if (dd < 10) {
  dd = '0' + dd;
} 
if (mm < 10) {
  mm = '0' + mm;
} 
var to = dd + '-' + mm + '-' + yyyy;
var newsysdate = new Date(to);
var newdate = new Date(date);
console.log(typeof newsysdate);
console.log(typeof newdate);

  if(evt.length==0 || date.length==0)
  {
    alert("All fields must be filled!");
    return false;
  }
  // changes to be made
  if (newdate<newsysdate) {

    alert("Enter Valid Date!");
    return false;
  }
  else {
      confirm();
      return true;
    
  }
}

</script>
</html>
