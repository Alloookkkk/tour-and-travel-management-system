<html>
    <body background="https://wallpapercave.com/wp/wp2985908.jpg">
<?php
if(isset ($var12)){
//error_reporting(0);
}?>
<style>
            p{  
  color: rgb(97, 42, 3);
  text-indent: 20px;
  text-transform: uppercase;
  font-size: 100%;
   font-family: cursive;
              }
    td{
        font-weight: bold;
    }
</style>
<table width="100%ss" ><tr>
        <th> <img height="110" width="100" src="https://img.freepik.com/premium-vector/beach-house-logo-design-template-beach-resort-villa-beach-hotel-logo_98702-711.jpg?w=2000">
        </th>
        <th> 
        <p><b>Caravala Beach Resort<br>
            Varca,Beach<br> Margoa <br>Goa 403721</b>
        </p></th>
    <th><img height="110" width="100" src="https://i.pinimg.com/originals/de/f7/b6/def7b694904830d5804ee5975b69e9ed.png"></th></tr>
        </table>
    <hr style="height:6px;border-width:0;color:rgb(4, 2, 2);background-color:rgb(19, 1, 1)">
	<table align="center" border="2" cellpadding="5%">
	<tr><td>
    <table>
<tr>
<br><td bgcolor="Yellow" ><b> GSTIN </th> </b>
<b><th> 03AWBPP8756K592 </th> </b>
</td>
<tr><td bgcolor="blue" ><b>DATE</td>
<td><b>26/Sept/2022 Monday</td></tr>
    <tr><td bgcolor="pink"><b>INVOICE NO</td>
        <td><b>ALT21-22/38/728</td></tr>
            <tr><td bgcolor="orange"><b>SUPPLIER'S REF.</td>
                <td><b>OTERS REFERENCE(S)CASH 12700</td></tr>
                    </table></td>
                    <br>
                    <td><table>
<tr><td bgcolor="MediumSeaGreen">
Coustmer Name </td> <td><?php echo $_POST['fname']; echo $_POST['lname'];?></tr></td>
<tr><td bgcolor="DodgerBlue"><b> Phone No , Office No ,<br> Home Phone No </td> <td><?php echo $_POST['pno'];echo" , "; echo $_POST['ono'];echo" , "; echo $_POST['hno'];?></td></tr>
<tr><td bgcolor="Violet">Address <br> (Landmark , PinCode)</td><td><?php echo $_POST['add']; echo"<br>"; echo$_POST['lmark']; echo " , "; echo $_POST['pcode'];?></td></tr>
<tr><td bgcolor="yellow">ID Name </td> <td><?php echo $_POST['id'];?></tr></td>
<tr><td bgcolor="orange">ID No  </td> <td><?php echo $_POST['ino'];?></tr></td>
<tr><td bgcolor="red">Check in   </td> <td><?php echo $_POST['in'];?></tr></td>
<tr><td bgcolor="olive">Check out   </td> <td><?php echo $_POST['out'];?></tr></td>
</table></td>
</table>
<hr style="height:6px;border-width:0;color:black;background-color:black">                        
<table align="center" border="2" cellpadding="5%" 
width=100%ss>
<tr>
<th bgcolor="yellow">Sr.No </th>
<th bgcolor="yellow">Type Of Room </th>
<th bgcolor="yellow">Stay Duration </th>
<th bgcolor="yellow">Arrival Time</th>
<th bgcolor="yellow">Price</th>
<th bgcolor="yellow">Total Price</th>
</tr><tr height="50px">
<td><center>1.</td>
<td><center><?php echo $_POST['hroom'];?></td>
<td><center><?php echo $_POST['Stay']; echo $_POST['nnight']; echo " Nights ";?></td>
<td><center><?php echo $_POST['atime'];?></td>
<td><center><?php 
switch($_POST['hroom'])
{
    case "Double - Rs 2000" :
    echo "2000";
    break;
    case "King - Rs 5000":
    echo "5000";
    break;
    case "Balcony - Rs 7000":
    echo "7000";
    break;
    case "Ocean View - Rs 10000":
    echo "10000";
    break;
    case "Garden View - Rs 8000":
    echo "8000";
    break;   
}

?></td>
<td><center><?php 
switch($_POST['hroom'])
{
    case "Double - Rs 2000" :
    echo 2000 * $_POST['nnight'];
    break;
    case "King - Rs 5000":
    echo 5000 * $_POST['nnight'];
    break;
    case "Balcony - Rs 7000":
    echo 7000 * $_POST['nnight'];
    break;
    case "Ocean View - Rs 10000":
    echo 10000 * $_POST['nnight'];
    break;
    case "Garden View - Rs 8000":
    echo 8000 * $_POST['nnight'];
    break;  
}?></td></tr>
<tr height="100px"></tr>
<tr width="100%">
<th><?php  
switch($_POST['hroom'])
{
    case "Double - Rs 2000" :
    echo "* SGST(%) : Rs ";
    echo 9/100 * 2000 * $_POST['nnight'];
    echo "<br>";
    echo "* CGST(%) : Rs ";
    echo 9/100 * 2000 * $_POST['nnight'];
    break;
    case "King - Rs 5000":
    echo "* SGST(%) : Rs ";
    echo 9/100 * 5000 * $_POST['nnight'];
    echo "<br>";
    echo "* CGST(%) : Rs ";
    echo 9/100 * 5000 * $_POST['nnight'];    break;
    case "Balcony - Rs 7000":
    echo "* SGST(%) : Rs ";
    echo 9/100 * 7000 * $_POST['nnight'];
    echo "<br>";
    echo "* CGST(%) : Rs ";
    echo 9/100 * 7000 * $_POST['nnight'];    break;
    case "Ocean View - Rs 10000":
    echo "* SGST(%) : Rs ";
    echo 9/100 * 10000 * $_POST['nnight'];
    echo "<br>";
    echo "* CGST(%) : Rs ";
    echo 9/100 * 10000 * $_POST['nnight'];    break;
    case "Garden View - Rs 8000":
    echo "* SGST(%) : Rs ";
    echo 9/100 * 8000 * $_POST['nnight'];
    echo "<br>";
    echo "* CGST(%) : Rs ";
    echo 9/100 * 8000 * $_POST['nnight'];    break;  
}
 ?></th>
</tr>

</body>
</html>