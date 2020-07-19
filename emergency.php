
<?php
session_start();
$con=mysqli_connect("localhost","root","");
if(!$con)
die("could not connect".mysqli_error());
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet"  href="css/estyle.css">
<style>
body{
background:linear-gradient(45deg,#0f43b8,#5d88e8,#7e9ce0);
z-index:-100;
}
.div2 img{
width:100%;
height:80%;
position:relative;
top:-70px;
z-index:-1;
left:0;
}
.ul1{
 position: fixed !important;
    top: 0 !important;
  z-index: 500;
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
width:950px;
height:1540px;
background-color:#f7f4ed;
position:relative;
top:-350px;
left:25%;
opacity:0.9;
}
h1{
font-size:80px;
text-align:center;
padding-top:15px;
color:red;
text-indent:strong;
font-family:Times New Roman;
}
p{
margin-left:40px;
font-size:22px;
font-weight:bold;
}
datalist {
  display: none;
}
input[type=text]{
width:700px;
margin-left:40px;
margin-right:20px;
height:40px;
padding:10px;
border:2px solid red;
}
input[type=email]{
width:700px;
margin-left:40px;
margin-right:20px;
height:40px;
padding:10px;
border:2px solid red;
}
.problem{
	width:700px;
margin-left:40px;
margin-right:20px;
height:40px;
padding:10px;
border:2px solid red;
}
input[type=textarea]{
width:700px;
margin-left:40px;
margin-right:20px;
padding:10px 10px 10px 10px;
border:2px solid red;
height:70px;
resize:none;
}
input[type=radio]{
margin-left:40px;
padding:10px;
border:2x solid red;
font-size:20px;
}
input[type=submit]{
width:700px;
margin-left:40px;
margin-right:20px;
height:50px;
margin-top:40px;
font-size:25px;
border:2px solid blue;
cursor:pointer;
}
#details_btn
{
width:700px;
margin-left:40px;
margin-right:20px;
height:50px;
margin-top:40px;
font-size:25px;
border:2px solid blue;
cursor:pointer;
}
.div3 img{
position:absolute;
width:230px;
height:280px;
top:0;
right:8px;
opacity:0.8;
}
.div4{
position:absolute;
width:250px;
height:100px;
top:200px;
right:5px;
opacity:0.8;
text-align:center;
font-size:30px;
}
 .img1{
width:400px;
height:300px;
position:relative;
right:170px;
top:600px;
margin-top:40px;
margin-bottom:20px;
}



</style>
</head>
<body>

<ul class='ul1'>
<li><a href=file:projectdatabase.htm>HOME</a></li>
<li><a href=#about>ABOUT US</a>
<ul>
<li><a href=file:eg2.htm>Introduction</a></li>
<li><a href=#rules>Rules & Regulation</a></li>
<li><a href=#staff>Staff info</a></li>
</ul>
</li>
<li><a href=#departments.htm>DEPARTMENTS</a>
<ul>
<li><a href=#skin>Skin</a></li>
<li><a href=#orthipaedic>orthopaedic</a></li>
<li><a href=#surgery>Surgery</a></li>
<li><a href=#cardiology>cardiology</a></li>
<li><a href=#radiology>Radiology</a></li>
</li>
</ul>
<li><a href=#aapointment>APPOINTMENT</a>

</li>
<li><a href=#events>EVENTS</a>
<ul>
<li><a href=#conference>Conference </a></li>
<li><a href=file:events.htm>Upcoming Events</a></li>
</ul>
</li>
<li><a href=file:contact.html>CONTACT US</a></li>
<li><a href=file:emergency.htm>EMERGENCY</a></li>
</ul>
<div class='div2'>
<img src='https://d3cy9zhslanhfa.cloudfront.net/media/22256AF8-8192-4747-B83E40AA38F16FE0/4FFCF41D-7FA9-492B-8FC205E02ADAADCC/D8302791-D430-4B7E-833BFEBDBAA4210E/Drupal-web_GettyImages-184312650.jpg'></img>
</div>
<div class='div3'>
<img src='https://designmodo.com/wp-content/uploads/2015/09/medical-emergencies.gif'></img>
</div>
<div class='div4'>
<b>Emergency No:-</b><br>
<style='color:red;'>0124-273181</style>



<img  class='img1'src='https://www.conehealth.com/app/files/public/9383/armc-emergency-department-banner.jpg'></img>
<img class='img1' src='https://image.shutterstock.com/image-photo/male-nurse-pushing-stretcher-gurney-260nw-786971899.jpg'></img>
<img  class='img1'src='https://ak9.picdn.net/shutterstock/videos/4820969/thumb/1.jpg?i10c=img.resize(height:160)'></img>

</div>
<div class='div1'>
<h1>EMERGENCY</h1>
<form action="emergency.php" method="post">
<p>First Name</p>
<input name="fname" type="text" class="inputvalues" placeholder="Type your first name" required /><br>
<p>Last Name</p>
<input name="lname" type="text" class="inputvalues" placeholder="Type your last name" required /><br>>
<p> Age</p>
<input name="age" type="text" class="inputvalues" placeholder="Type your age"  /><br>>
<p>Address</p>
<input name="address" type="textarea"></input>
<p>State</p>
<input name="state" type="text" class="inputvalues" placeholder="Type your address" /><br>
<p>Pincode</p>
<input name="pincode" type="text" class="inputvalues" placeholder="Type your pincodes" /><br>
<p>Gender</p>
<input name="gender" type=radio required>M</input>
<input name="gender" type=radio required>F</input>
<p>E-Mail</p>
<input name="email" type='email' placeholder="Type youremail address"  /><br>
<p>Contact Number</p>
<input name="contactno" type="text" placeholder="Type your contact no" required /><br>>
<p>Problem</p>
 <select name="problem" class="problem" placeholder="Type your problem" required s/><br> >
 <datalist>
    <option value="Skin">Skin Problems</option>
    <option value="Orthopaedic">Orthopaedic</option>
    <option value="Cardiologists">Cardiologists</option>
    <option value="Radiologists">Radiologists</option>
  </select>
  <br><br><br>
<input name="submit" type=submit></input>
<a href="getdetails.php"><input type="button" id="details_btn" value="Get details"/></a>
</form>
</div>
<?php

mysqli_select_db($con,"hospital");

 if(isset($_POST['submit']))
 {
	 
	 //echo '<script type="text/javascript"> alert("Submit button clicked")</script> ';
	 $fname=$_POST['fname'];
	 $lname=$_POST['lname'];
	 $age=$_POST['age'];
	 $address=$_POST['address'];
	 $state=$_POST['state'];
	 $pincode=$_POST['pincode'];
	 $gender=$_POST['gender'];
	 $email=$_POST['email'];
	 $contactno=$_POST['contactno'];
	 $problem=$_POST['problem'];
	 $sql= "select * from user WHERE contactno='$contactno' ";
	 $query_run = mysqli_query($con,$sql);
	 if(mysqli_num_rows($query_run)>0)
	 {
		 echo '<script type="text/javascript"> alert("User already exist") </script> ' ;
	 }
	 else
	 { 
	      $sql= "insert into user (fname,lname,age,address,state,pincode,gender,email,contactno,problem)
		  values ('$fname','$lname','$age','$address','$state','$pincode','$gender','$email','$contactno','$problem')";
		  $query_run=mysqli_query($con,$sql);
		  if($query_run)
		  {
			
			
           echo'<script type="text/javascript">alert("success")</script>';
           

		  }
		  else
		  {
			  echo '<script type="text/javascript"> alert("error") </script>' ;
		  }
		 
	 }
 }
	 else
		 echo '<script type="text/javascript">alert("error...please register again") </script>' ;
   mysqli_close($con);
?>

</body>
</html>