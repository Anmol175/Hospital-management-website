<?php
session_start(); 
$con=mysqli_connect("localhost","root","");
if(!$con)
die("could not connect".mysqli_error());


?>
<!DOCTYPE html>
<html>
<head>
<style>
body:before{
height:100%;
width:100%;
background-image:url("https://www.bhatiahospital.org/storage/app/public/home_banner/1/image/1503414524again-revised-bhatia-homebanner-01.jpg");
background-size:cover;
content:"";
position:fixed;
top:0;
left:0;
z-index:-100;
filter: blur(8px);
  -webkit-filter: blur(8px);
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
	width:70%;
	height:450px;
	border:4px solid white;
	position:absolute;
	top:30%;
	margin-left:250px;
	font-size:30px;
	z-index:-10;
}
h1{
	font-size:75px;
	margin-left:36%;
	color:#403838;
	text-shadow:0px 0px 3px #db8d5a ,0px 0px 3px #b06a3c;
}
pre{
	font-size:40px;
	color:#400432;
	text-shadow:0px 0px 3px #db8d5a ,0px 0px 3px #b00989;
	
}
.label{
	font-size:50px;
}
</style>
</head>
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
<br><br>
<div>
<h1><b>Hello <?php echo $_SESSION["fname"]; ?></h1></b>
<b><pre>      You have been appointed to <?php echo $_SESSION["docname"]; ?> on
                       <?php echo $_SESSION["day"]; ?>
<br>
                  Your appointment Id is
	                 <label> <?php 
				  $fname=$_SESSION["fname"];
				  $pnumber=$_SESSION["pnumber"];
				  for ($x = 0; $x <=2; $x++) {
                  echo $fname[$x];
				  }
				  for ($x = 0; $x <=2; $x++) {
                  echo $pnumber[$x];
				  }
	                   ?></label>
</pre></b>
</div>

</body>
</html>