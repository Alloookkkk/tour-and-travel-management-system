
<?php
$con=mysqli_connect("localhost","root","","");
if(mysqli_connect_error())
{
	die('Connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
}
else
{
	echo "connected";
}
if(mysqli_query($con,"create database Tour"))
{
	echo "<br>database created";
}

$con->close();
?>
</body>
