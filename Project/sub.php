 <html>
 <body>
 <?php
 $con=mysqli_connect("localhost","root","","Tour");
  if(isset($_POST['send']))
  {
$name=$_POST['name'];
$phone=$_POST['phone'];
$mail=$_POST['mail'];
$add=$_POST['address'];
$state=$_POST['state'];
$pin=$_POST['pin'];
$ld=$_POST['Landmark'];
$hm=$_POST['many'];
$id=$_POST['id'];
$wt=$_POST['location'];
$gen=$_POST['gender'];
$var1="insert into Record(Name,Email,Address,Phoneno,Pincode,ID_proofno,state,landmark,how_many,gender,whereto)values('$name','$mail','$add',$phone,$pin,$id,'$state','$ld',$hm,'$gen','$wt')";
mysqli_query($con,$var1);
echo "Record created Successfully";
  }
  else
  {
	  echo "something went wrong";
  }

 ?>
 </body>
 </html>