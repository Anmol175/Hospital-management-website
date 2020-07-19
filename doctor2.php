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
.div1{
	position:absolute;
    width:970px;
    height:500px;
    top:250px;
    left:120px;
    background-image:url("https://blog-imagecache.withings.com//2019/02/overhead-view-of-a-stethoscope-and-a-heart_t20_xRP1dX.jpg?auto=false%2Ccompress&q=90&w=1024&h=504&fit=crop");
    background-position:top right;
	opacity:0.8;
	filter: blur(6px);
  -webkit-filter: blur(6px);
  z-index:-1;
}
.p2{
	font-size:45px;
	color:purple;
	margin-left:30px;
	 font-weight: bold;
	
}
.div2{
	width:970px;
    height:500px;
	position:absolute;
    top:250px;
    left:180px;
	font-size:35px;
	font-family:Georgia;
	 font-weight: bold;
	 color:#070b75;
	 text-shadow:0px 0px 3px #db8d5a ,0px 0px 3px #b06a3c;
	 z-index:100;
}
input[type=radio]{
	width:170px;
	height:30px;
	border:2px solid red;
	color:red;
}
input[type=radio]:focus {
  border: 3px solid #555;
}
.submit{
width:300px;
height:40px;
font-size:20px;
color:black;
font-weight:bold;
background:linear-gradient(#2fbd4e,#35b557,#73e86d,#9ee87b,#d6f5b5);

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
<div class="div1"></div>
<div class="div2">
<i><b><p class="p2"><?php echo $_SESSION["department"] ?> Doctors available on <?php echo $_SESSION["day"] ?>...</p><b><i>

<form method="post" action="doctor2.php">
<input type="radio" name="docname" value="<?php
$department=$_SESSION["department"];
mysqli_select_db($con,"hospital");
$sql="select docname from doctor
where department='$department' and sno= 1"; 
$query_run=mysqli_query($con,$sql);
while($rows=mysqli_fetch_array($query_run))
{
echo $rows["docname"];
}
?>" checked  class="check"><b>
<?php
$department=$_SESSION["department"];
mysqli_select_db($con,"hospital");
$sql="select docname from doctor
where department='$department' and sno= 1"; 
$query_run=mysqli_query($con,$sql);
while($rows=mysqli_fetch_array($query_run))
{
echo $rows["docname"];
}
?><b><br><br>
<input type="radio" name="docname" value="<?php
$department=$_SESSION["department"];
mysqli_select_db($con,"hospital");
$sql="select docname from doctor
where department='$department' and sno=2"; 
$query_run=mysqli_query($con,$sql);
while($rows=mysqli_fetch_array($query_run))
{
echo $rows["docname"];
}
?>" class="check"><?php
$department=$_SESSION["department"];
mysqli_select_db($con,"hospital");
$sql="select docname from doctor
where department='$department' and sno= 2"; 
$query_run=mysqli_query($con,$sql);
while($rows=mysqli_fetch_array($query_run))
{
echo $rows["docname"];
}
?>
<br><br>
<input type="radio" name="docname" value="<?php
$department=$_SESSION["department"];
mysqli_select_db($con,"hospital");
$sql="select docname from doctor
where department='$department' and sno=3"; 
$query_run=mysqli_query($con,$sql);
while($rows=mysqli_fetch_array($query_run))
{
echo $rows["docname"];
}
?>" class="check">
<?php
$department=$_SESSION["department"];
mysqli_select_db($con,"hospital");
$sql="select docname from doctor
where department='$department' and sno=3"; 
$query_run=mysqli_query($con,$sql);
while($rows=mysqli_fetch_array($query_run))
{
echo $rows["docname"];
}
?><br><br>
<input type="radio" name="docname"  value="<?php
$department=$_SESSION["department"];
mysqli_select_db($con,"hospital");
$sql="select docname from doctor
where department='$department' and sno=4"; 
$query_run=mysqli_query($con,$sql);
while($rows=mysqli_fetch_array($query_run))
{
echo $rows["docname"];
}
?>" class="check">
<?php
$department=$_SESSION["department"];
mysqli_select_db($con,"hospital");
$sql="select docname from doctor
where department='$department' and sno=4"; 
$query_run=mysqli_query($con,$sql);
while($rows=mysqli_fetch_array($query_run))
{
echo $rows["docname"];
}
?>
<br><br>
<input type="submit" class="submit" name="appointment" value="Get Appointment">
<?php
mysqli_select_db($con,"hospital");
if(isset($_POST['appointment']))
{
	$department=$_SESSION["department"];
	$fname=$_SESSION["fname"];
	$pnumber=$_SESSION["pnumber"];
	$day=$_SESSION["day"];
	$docname=$_POST["docname"];
	
	$sql="insert into appointment(department,fname,phone,docname,day)
	values('$department','$fname','$pnumber','$docname','$day')";
	$query_run=mysqli_query($con,$sql);
	if($query_run)
	{
		$_SESSION["docname"]=$docname;
		header('location:doctor3.php');
	}
	else
{
			echo'<script type="text/javascript">alert("Error")</script>';
}
mysqli_close($con);
		
}
?>
</div>
</body>
</html>
