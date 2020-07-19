<?php
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
z-index:4;
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
z-index:1;
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
.back{
	width:200px;
	height:40px;
	font-size:18px;
	background-color:
	border:2px solid red;
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
<h1><b>Register</h1></b>
<img src="https://png.pngtree.com/svg/20161229/_username_login_1172579.png" class="img"></img>
<form method='post' action='registration.php' class='form1'>
<label><b>First Name<br>
<input type=text name='fname' placeholder=' first name' required class='fname'><br><br>
<label><b>Last Name<br>
<input type=text name='lname' placeholder=' last name' required class='fname'><br><br>
<label><b>Email<br>
<input type=text name='email' placeholder=' email' required class='fname'><br><br>
<label><b>Phone no.<br>
<input type=text name='pnumber' placeholder=' phone no' required class='fname'><br><br>
<label><b>State<br>
<input type=text name='state' placeholder='state' required class='fname'><br><br>
<label><b>Country<br>
<input type=text name='country' placeholder='country' required class='fname'><br><br>
<label><b>Birth Date<br>
<input type=date name='bdate'  required class='fname'><br><br>
<label><b>Gender<br><br>
M <input type=radio name='gender' placeholder='male' required class='fname' checked><br>
F <input type=radio name='gender' placeholder='female' required class='fname'><br><br>
<label><b>Password<br>
<input type='password' name='password' placeholder='new password' required class='fname'><br><br>
<input type='submit' placeholder='submit' name='submit' class='login'><br></br>
<a href="appointment.php"><input type='button' value='back' name='back'  class='back'> </a>
</form>
<?php
mysqli_select_db($con,"hospital");
if(isset($_POST['submit']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$pnumber=$_POST['pnumber'];
	$state=$_POST['state'];
	$country=$_POST['country'];
	$gender=$_POST['gender'];
	$password=$_POST['password'];
	$bdate=$_POST['bdate'];
	$sql="select * from registration where phone='$pnumber' ";
	$query_run=mysqli_query($con,$sql);
	if(mysqli_num_rows($query_run)>0)
	{
		echo'<script type="text/javascript">alert("Error.....phone number already registered...please resister again with different phone no")</script>';
	}
	else
	{
		$sql="insert into registration(fname,lname,email,phone,state,country,gender,password) 
		values('$fname','$lname','$email','$pnumber','$state','$country','$gender','$password')";
		$query_run=mysqli_query($con,$sql);
		if($query_run)
		{
			echo'<script type="text/javascript">alert("user registerd....Go back to login page to login")</script>';
		}
		else
		{
			echo'<script type="text/javascript">alert("Error...Please resister again")</script>';
		}

	}
}
mysqli_close($con);
?>
</div>
</body>
</html>