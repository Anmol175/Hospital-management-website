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
background-image:url("https://emerging-europe.com/wp-content/uploads/2018/01/bigstock-Male-Doctor-In-The-Hospital-190586731.jpg");
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
opacity:0.9;
}
.div1{
	width:550px;
	height: 0 auto;
	background-color:#d8e6ed;
	text-align:center;
	position:relative;
	top:90px;
	opacity:0.8;
	border-radius:2px;
	left:200px;
}
.form1{
	text-align:left;
	padding:20px;
	width:450px;
	font-size:25px;


}
.fname{
	width:450px;
	height:30px;
	border:2px solid red;
}
.login{
	width:450px;
	height:40px;
	font-size:18px;
	background-color:
	border:2px solid blue;

}
h1{
	font-size:45px;
}
.img{
	width:150px;
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
<div class='div1'>
<h1><b>Login</h1></b>
<img src="https://png.pngtree.com/svg/20161229/_username_login_1172579.png" class="img"></img>
<form method='post' action='appointment.php' class='form1'>
<label><b>First Name<br>
<input type=text name='fname' placeholder=' first name' required class='fname'><br><br>
<label><b>Last Name<br>
<input type=text name='lname' placeholder=' last name' required class='fname'><br><br>
<label><b>Email<br>
<input type=text name='email' placeholder=' email' required class='fname'><br><br>
<label><b>Phone no.<br>
<input type=text name='pnumber' placeholder=' phone no' required class='fname'><br><br>
<label><b>Password<br>
<input type='password' name='password' placeholder=' password' required class='fname'><br><br>
<input type='submit' value='Login' name='Login' class='login'><br></br>
<a href="registration.php"><input type='button' value='Register' name='resister' class='login'>
</form>
<?php
mysqli_select_db($con,"hospital");
if(isset($_POST['Login']))
{
$pnumber=$_POST['pnumber'];
$password=$_POST['password'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$sql="select * from registration where
fname='$fname' and lname='$lname' and password='$password' and email='$email' and phone='$pnumber' ";
$query_run=mysqli_query($con,$sql);
if(mysqli_num_rows($query_run)>0)
{
$_SESSION["fname"]=$fname;
$_SESSION["pnumber"]=$pnumber;
header('location:doctor.php');
}
else
{
			echo'<script type="text/javascript">alert("Error...Wrong credentials")</script>';
}
mysqli_close($con);

}
?>
</div>
</body>
</html>