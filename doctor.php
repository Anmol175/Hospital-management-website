<?php
session_start(); 
$con=mysqli_connect("localhost","root","");
if(!$con)
die("could not connect".mysqli_error());


?>
<!DOCTYPE html>
<html>
<head>
</head>
<style>
body:before{
height:100%;
width:100%;
background-image:url("https://previews.123rf.com/images/didecs/didecs1503/didecs150300010/37355088-wooden-doctor-desk-with-copy-space.jpg");
background-size:cover;
content:"";
position:fixed;
top:0;
left:0;
z-index:-100;
}
ul li{
width:220px;
height:50px;
font-size:25px;
border-width:2px;
line-height:50px;
text-align:center;
border-radius:10px;
background:linear-gradient(#252d80,#313e78);
color:white;
list-style:none;
float:left;
margin-right:10px;
}
ul li a{
text-decoration:none;
color:white;
font-family:Times New Roman;
}
ul li a:hover{
background-color:#3e558a;
display:block;
}
ul li ul {
list-style:none;
display:none;
background-color:green;
}
ul li ul li{
font-size:20px;
display:block;
border-radius:10px;
height:50px;
line-height:50px;
padding:10px 0 10px 0 ;
border:1px solid white;
margin-left:-39px;

}
ul li:hover ul{
display:block;
}
div{
position:absolute;
width:970px;
height:450px;
top:300px;
left:120px;
background-image:url("https://blog-imagecache.withings.com//2019/02/overhead-view-of-a-stethoscope-and-a-heart_t20_xRP1dX.jpg?auto=false%2Ccompress&q=90&w=1024&h=504&fit=crop");
background-position:top right;

}
.abc{
margin-left:120px;
width:480px;
height:50px;
font-size:20px;
opacity:0.75;
border-bottom: 4px solid blue;
border-top-color:white;
border-left-color:white;
border-right-color:white;

}
.search{
width:300px;
height:35px;
font-size:18px;
color:white;
margin-left:150px;
background-color:#499dad


}
h1{
margin-left:25px;
color:red;
font-size:75px;
}
img{
width:350px;
position:absolute;
right:20px;
top:55px;
}
.div2{
width:360px;
height:40px;
position:absolute;
top:800px;
font-size:35px;
padding:10px;

background:linear-gradient(#2fbd4e,#35b557,#73e86d,#9ee87b,#d6f5b5);
}
.div2 a{
text-decoration:none;
}
.img1{
position:absolute;
top:780px;
left:520px;
width:100px;
}
.welcome{
	font-size:70px;
	color:brown;
	margin-left:110px;
	text-shadow:0px 0px 3px #db8d5a ,0px 0px 3px #b06a3c;
	
	
}
</style>

<body>

<ul>
<li><a href=projectdatabase.php>HOME</a></li>
<li><a href=#about>ABOUT US</a>
<ul>
<li><a href=aboutus.php>Introduction</a></li>
<li><a href=rules.php>Rules & Regulation</a></li>
<li><a href=staffinfo.php>Staff info</a></li>
</ul>
</li>
<li><a href=departments.php>DEPARTMENTS</a></li>
<li><a href=login.php>APPOINTMENT</a>

</li>
<li><a href=#events>EVENTS</a>
<ul>
<li><a href=#conference>Conference </a></li>
<li><a href=events.php>Upcoming Events</a></li>
</ul>
</li>
<li><a href=contactfinal.php>CONTACT US</a></li>
<li><a href=emergency.php>EMERGENCY</a></li>
</ul>
<br><br><br><br>
<h2 class="welcome">Welcome <?php echo $_SESSION["fname"] ?></h2>
<div>
<h1>Get Appointment</h1>
<img src="https://cdn3.iconfinder.com/data/icons/flatie-highlighted-outline-health-medical/24/health_001-caduceus-medical-wing-snake-512.png"></img>
<form method="POST" action="doctor.php">
<select name="depname" placeholder="Doctor Name" required class="abc" size=1>
<option>Select Department</option>
<option>dermatologist</option>
<option>Orthopaedic</option>
<option>Cardiology</option>
<option>Radiology</option>
</select>
<br><br>
<input type="date" name="date" placeholder="Select Date" required class="abc">
<br><br>
<input type="submit" name="search" value="Search your Doctor" class="search">
</form>
<?php
mysqli_select_db($con,"hospital");
if(isset($_POST['search']))
{
$department=$_POST["depname"];
$date=$_post["date"];
$unixTimestamp = strtotime($date);
$day = date("l", $unixTimestamp);
$_SESSION["date"]=$date;
$_SESSION["day"]=$day;
$_SESSION["department"]=$department;
header("location:doctor2.php");
}
?>
</div>
<div class="div2">
<b><a href="">Check your live status</b></a>
</div>
<img class="img1" src="https://image.flaticon.com/icons/svg/54/54366.svg">
</body>
</html>
