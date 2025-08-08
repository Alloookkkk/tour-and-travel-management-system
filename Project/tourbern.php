<html>
<style>
th, td {
  border: 0px solid black;
  margin-left: auto;
  margin-right: auto;
  border-collapse: collapse;
  width: 500px;
  text-align: center;
  font-size: 20px;
}
</style>

<table width="100%">
  <tr>
    <th><img height="110" width="100" src="https://i.pinimg.com/originals/2e/cf/73/2ecf7364cd78b7222311518159a72179.jpg"></th>
    <th>Tour and Travel Magament System</th>
  </tr>
</table>

<hr style="height:6px;border-width:0;color:rgb(4, 2, 2);background-color:rgb(19, 1, 1)">

<table align="left">
<tr><th bgcolor="lavender">GSTIN</th><th>03AWBPP8756K592</th></tr>
<tr><th bgcolor="lavender">DATE</th><th>21/April/2023 Friday</th></tr>
<tr><th bgcolor="lavender">INVOICE NO</th><th>ALT21-22/38/728</th></tr>
<tr><th bgcolor="lavender">SUPPLIER'S REF.</th><th>OTERS REFERENCE(S)CASH 12700</th></tr>

<tr><th bgcolor="lavender">Customer Name</th><th><?php echo $_POST['fname'];?></th></tr>
<tr><th bgcolor="lavender">Phone No</th><th><?php echo $_POST['pno'];?></th></tr>
<tr><th bgcolor="lavender">Address (Landmark, PinCode)</th><th><?php echo $_POST['add'] . "<br>" . $_POST['land'] . " , " . $_POST['pin'];?></th></tr>
<tr><th bgcolor="lavender">ID Name</th><th><?php echo $_POST['id'];?></th></tr>
<tr><th bgcolor="lavender">ID No</th><th><?php echo $_POST['idno'];?></th></tr>\
<tr><th bgcolor="lavender">Tourist Guide</th><th><?php echo $_POST['guide']; ?></th></tr>

</table>

<br><br>

<table width="100%">
<tr>
<th bgcolor="yellow">Sr.No</th>
<th bgcolor="yellow">Type Of Room</th>
<th bgcolor="yellow">Duration Of Package</th>
<th bgcolor="yellow">Date Of Travel</th>
<th bgcolor="yellow">Price</th>
<th bgcolor="yellow">Total Price (with discount)</th>
</tr>

<tr height="50px">
<td>1.</td>
<td><?php echo $_POST['hroom'];?></td>
<td>One Week Package</td>
<td><?php echo $_POST['atime'];?></td>
<td>
<?php 
switch($_POST['hroom']) {
    case "Economy Double Room": echo "Rs 18,690"; break;
    case "Standard Double Room": echo "Rs 20,128"; break;
    case "Family Room": echo "Rs 22,525"; break;
    case "Kingsize Bed": echo "Rs 32,093"; break;
}
?>
</td>
<td rowspan="4">
<?php
// New discount logic
$name = $_POST['fname'];
$phone = $_POST['pno'];
$mail = $_POST['email'];
$add = $_POST['add'];
$state = $_POST['state'];
$pin = $_POST['pin'];
$ld = $_POST['land'];
$hm = $_POST['per'];
$idt = $_POST['id'];
$id = $_POST['idno'];
$date = $_POST['atime'];
$ht = $_POST['hroom'];
$fly = $_POST['flight'];
$loc = $_POST['dest'];

$con = mysqli_connect("localhost", "root", "", "Tour");
if (mysqli_connect_error()) {
    die('Connect error(' . mysqli_connect_errno() . ')' . mysqli_connect_error());
}

// Count user’s previous bookings
$check_query = "SELECT COUNT(*) as count FROM records WHERE Email = '$mail'";
$result = mysqli_query($con, $check_query);
$row = mysqli_fetch_assoc($result);
$booking_count = $row['count'];

// Apply discount
$base_price = 230900 * $hm;
$discount = 0;
if ($booking_count >= 3 && $booking_count < 5) {
    $discount = 0.05;
} elseif ($booking_count >= 5) {
    $discount = 0.10;
}
$discount_amount = $base_price * $discount;
$final_price = $base_price - $discount_amount;

echo "₹" . $final_price;
echo "<br><span style='color:green; font-weight:bold;'>Discount Applied: " . ($discount * 100) . "%</span>";
echo "<br><span style='color:blue;'>You Saved: ₹" . number_format($discount_amount, 2) . "</span>";
echo "<br>(*Hotels, Flights & Others Included)";

?>
</td>
</tr>

<tr>
<th></th>
<th bgcolor="yellow">Name Of Flight</th>
<th bgcolor="yellow">Departure Time</th>
<th bgcolor="yellow">Arrival Time</th>
<th bgcolor="yellow">Price</th>
</tr>

<tr>
<td>2</td>
<td><?php echo $_POST['flight'] ?></td>
<td>
<?php
switch($_POST['flight']) {
    case "Qatar Airways": echo "03:25 New Delhi"; break;
    case "Swiss": echo "01:15 New Delhi"; break;
    case "Vistara": echo "19:00 New Delhi"; break;
    case "Air Arabia": echo "20:30 New Delhi"; break;
}
?>
</td>
<td>
<?php
switch($_POST['flight']) {
    case "Qatar Airways": echo "15:58 Bern"; break;
    case "Swiss": echo "09:28 Bern"; break;
    case "Vistara": echo "11:58 Bern"; break;
    case "Air Arabia": echo "11:58 Bern"; break;
}
?>
</td>
<td>
<?php
switch($_POST['flight']) {
    case "Qatar Airways": echo "Rs 86,883"; break;
    case "Swiss": echo "Rs 98,067"; break;
    case "Vistara": echo "Rs 1,50,042"; break;
    case "Air Arabia": echo "Rs 1,50,042"; break;
}
?>
</td>
</tr>
</table>

<?php
// Save booking
$var2 = "INSERT INTO records(Name, Email, Address, phoneme, Pincode, id_type, ID_proofno, state, landmark, how_many, dot, hotel, flight, whereto, discount_percent, guide)
         VALUES('$name','$mail','$add',$phone,$pin,'$idt','$id','$state','$ld',$hm,'$date','$ht','$fly','$loc', " . ($discount * 100) . ", '" . $_POST['guide'] . "')";

mysqli_query($con, $var2);
echo "<h3>Record Created Successfully</h3>";
mysqli_close($con);
?>
</html>
