<Doctype html>
<head>
database connectivity
</head>
<body>

<?php
/*$id=$_POST['emp_id'];
$name=$_POST['emp_name'];
$jo=$_POST['job'];
$man=$_POST['mgr'];
$sa=$_POST['sal'];
$com=$_POST['comm'];
$de=$_POST['dep'];*/
$con=mysqli_connect("localhost","root","","tour");
$var1="CREATE TABLE tour (Name VARCHAR(20), Password INT, Email VARCHAR(20), Address VARCHAR(30), Pincode INT, Phoneno INT(10), ID_proof VARCHAR(15), ID_proofno INT, Checkin DATE , Checkout DATE , Arrival_Time TIME);";

mysqli_query($con,$var1);
echo "table created";
/*$var2="insert into Employee(Emp_id,Emp_name,Job,MGR,Sal,COMM,Deptno)values($id,'$name','$jo',$man,$sa,$com,$de);";
mysqli_query($con,$var2);
echo "<br>Record created Successfully";*/
$con->close();
?>
</body>
