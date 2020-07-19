<html>
<head></head>
<body>
<?php
$con=mysqli_connect("localhost","root","");
if(!$con)
die("could not connect".mysqli_error());
mysqli_select_db($con,"vineet");
$sql="select * from information";
$result=mysqli_query($con,$sql);
while($rows=mysqli_fetch_array($result))
{
echo $rows["name"]." ".$rows["age"]." ".$rows["phone"];
echo"<br>";
}
$sql="insert into information(name,age,phone)
values('kunal',18,34255)";
//$sql="insert into information(name,age,phone)
//values('rtvik',17,99955)";
$sql="insert into information(name,age,phone)
values('tanmay',20,96775)";
if(mysqli_multi_query($con,$sql))
	echo "successfull inserted";
else
	echo"error";
mysqli_close($con);

?>


</body>
</html>