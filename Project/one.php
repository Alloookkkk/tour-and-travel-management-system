<htmL>
<head>
<title>insertion</title>
</head>
<body>
<?php
$name=$_POST['name'];
$phone=$_POST['phone'];
$mail=$_POST['mail'];
$add=$_POST['address'];
$state=$_POST['state'];
$pin=$_POST['pin'];
$ld=$_POST['landmark'];
$hm=$_POST['many'];
$id=$_POST['id'];
$wt=$_POST['location'];
$gen=$_POST['gender'];
$con=mysqli_connect("localhost","root","","Tour");
if(mysqli_connect_error())
{
	die('Connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
}
else
{
	//echo "connected";
}
$var2="insert into Record(Name,Email,Address,Phoneno,Pincode,ID_proofno,state,landmark,how_many,gender,whereto)values('$name','$mail','$add',$phone,$pin,'$id','$state','$ld',$hm,'$gen','$wt')";
mysqli_query($con,$var2);
//echo "Record created Successfully";
mysqli_close($con);
?>
</body>
</html>