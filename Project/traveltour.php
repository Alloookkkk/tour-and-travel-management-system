
<body>

<?php

$con=mysqli_connect("localhost","root","","tour");
$var1="CREATE TABLE travel(mode VARCHAR(15) NOT NULL , Travel_ID VARCHAR(15) NOT NULL ,Type VARCHAR(10) NOT NULL , BordingPoint VARCHAR(25) NOT NULL , BordingTime DATETIME NOT NULL , DropingPoint VARCHAR(25) NOT NULL , DropingTime DATETIME NOT NULL , TravelPartner VARCHAR(15) NOT NULL ,From varcahr(15),To varchar(15));";

mysqli_query($con,$var1);
echo "table created";
$con->close();
?>
</body>
