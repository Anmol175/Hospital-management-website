
<!DOCTYPE html>
<html>
<head>
<title>GET DETAILS</title>
<link rel="stylesheet" href="css/getstyle.css">
<style>
.print{
 font-size:50px;
 font-family:<a href="getdetails.php"><input type="button" id="details_btn" value="Get details"/></a>;
 text-align:center;
 color:black;
	
}
body:before{
height:100%;
width:100%;
background-image:url("https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS8n53zs6kYER654xhhEfYoU7mI1B2K1XMbuiYck2piuE9SonJd");
background-size:cover;
content:"";
position:fixed;
top:0;
left:0;
z-index:-100;
}
h1
{
	color:#34495E ;
	font-size:80px;
	text-align:center;
	font-family:sans-serif;
}
p
{
	color:#D5DBDB;
	text-align:center;
	font-size:22px;
	margin:40px 40px 40px 40px;
}
#data
{
    width:1000px;
	margin:0 auto;
	background-color:#BDC3C7 ;
	padding:5px;	
	position:relative;
   opacity:0.7;
}
h2{
		text-align:center;
		font-size:70px;
		color:#34495E ;
}

</style>
</head>
<body >
<h1>GET DETAILS</h1>
<p>
We provide the best of medical evacuation and air ambulance services in India. We provide retrieval and repatriations of critically ill people and injured to and from India and abroad. Our emergency assistance and medical air ambulance services are managed by highly experienced and qualified personnel 24 hours a day, 365 days a year. We have a 24 hours Command and Control Center manned by Doctors to provide advice and assistance to those in need.
</p>
<div id="data">
<h2>WELCOME </h2>
<div class="print">
<?php 
$con=mysqli_connect("localhost","root","","hospital"); 
// Check connection 
if (mysqli_connect_errno()) 
  { 
  echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
  } 
$result = mysqli_query($con,"select * from user"); 
while($row = mysqli_fetch_array($result)) 
  { 
	
  echo "Name:-" . $row["fname"] ."  ". $row["lname"];
echo "<br />"; 
echo "<br />"; 
echo "<br />"; 
echo "Your unique id is:-" . $row["id"]; 
echo "<br />"; 
$row1=$row["id"]+105;
echo "Your room no is:-" . $row1; 
echo "<br />";
echo "Reach our nearest branch as fast as possible.We are just one step away.";
echo "<br />"; 
echo "For ambulance CALL: 90198797600";
echo "<br />";
echo "<br />";
echo "<br />";
  } 
  ?>
  </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
</body>
</html>