
<body>

<?php

$con=mysqli_connect("localhost","root","","tour");
$var1="CREATE TABLE hotel(Booking_ID INT, Date_of_Booking DATETIME, Room_type VARCHAR(15), Room_charges INT , CheckIN DATE, CheckOut DATE, Password INT);";

mysqli_query($con,$var1);
echo "table created";
$con->close();
?>
</body>
