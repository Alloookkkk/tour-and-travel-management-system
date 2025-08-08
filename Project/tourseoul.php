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
<table width="100%ss" ><tr>
        <th> <img height="110" width="100" src="https://i.pinimg.com/originals/2e/cf/73/2ecf7364cd78b7222311518159a72179.jpg">
        </th>
        <th> The World Travel Guide (WTG)
        </th>
    </tr>
        </table>
    <hr style="height:6px;border-width:0;color:rgb(4, 2, 2);background-color:rgb(19, 1, 1)">
    <table align="left">
<tr>
<th bgcolor="lavender"><b> GSTIN </th> </b>
<b><th> 03AWBPP8756K592 </th> </b>
</th>
<tr><th bgcolor="lavender"><b>DATE</th>
<th><b>21/April/2023 Friday</th></tr>
    <tr><th bgcolor="lavender"><b>INVOICE NO</th>
        <th><b>ALT21-22/38/728</th></tr>
            <tr><th bgcolor="lavender"><b>SUPPLIER'S REF.</th>
                <td><b>OTERS REFERENCE(S)CASH 12700</th></tr>
 
<br> <br>
<tr><th colspan="4"></th></tr>
<tr><th colspan="4"></th></tr>
<tr><th colspan="4"></th></tr>
<tr><th colspan="4"></th></tr>
<tr><th colspan="4"></th></tr>
<tr><th colspan="4"></th></tr>
<tr><th colspan="4"></th></tr>
<tr><th colspan="4"></th></tr>
<tr><th colspan="4"></th></tr>
<tr><th colspan="4"></th></tr>

<tr><th bgcolor="lavender"><b>Coustmer Name </th> <th><?php echo $_POST['fname'];?></tr></th>
<tr><th bgcolor="lavender"><b> Phone No</th> <th><?php echo $_POST['pno'];?></th></tr>
<tr><th bgcolor="lavender">Address <br> (Landmark , PinCode)</th><th><?php echo $_POST['add']; echo"<br>"; echo$_POST['land']; echo " , "; echo $_POST['pin'];?></th></tr>
<tr><th bgcolor="lavender">ID Name </th> <th><?php echo $_POST['id'];?></tr></th>
<tr><th bgcolor="lavender">ID No  </th> <th><?php echo $_POST['idno'];?></tr></th>

</table>
<br><br>
<table 
width=100%ss>
<tr>
<tr><th colspan="4"></th></tr>
<tr><th colspan="4"></th></tr>
<tr><th colspan="4"></th></tr>
<tr><th colspan="4"></th></tr>
<tr><th colspan="4"></th></tr>

<th bgcolor="yellow">Sr.No </th>
<th bgcolor="yellow">Type Of Room </th>
<th bgcolor="yellow">Duration Of Package</th>
<th bgcolor="yellow">Date Of Travel</th>
<th bgcolor="yellow">Price</th>
<th bgcolor="yellow" >Total Price</th>
</tr><tr height="50px">
<td><center>1.</td>
<td><center><?php echo $_POST['hroom'];?></td>
<td><center>One Week Package</td>
<td><center><?php echo $_POST['atime'];?></td>
<td><center><?php 
switch($_POST['hroom'])
{
    case "Room with Lounge or Club Access":
    echo "Rs 6,638";
    break;
    case "Deluxe Double Room (Low Floor, No View)":
    echo "Rs 8,083";
    break;
    case "Premier King Room (No Lounge Access)- No View":
    echo "Rs 13,967";
    break;
    case "Executive King Room with Free Lounge Access":
    echo "Rs 13,967";
    break;
   
}
?></td>
<td rowspan="4"> <?php
if($_POST['per']==1)
{
echo "₹230900";
}elseif($_POST['per']==2)
{
    $a=2*230900;
    echo "₹".$a;   
}elseif($_POST['per']==3)
{
    $a=3*230900;
    echo "₹".$a;   
}elseif($_POST['per']==4)
{
    $a=4*230900;
    echo "₹".$a;   
}elseif($_POST['per']==5)
{
    $a=5*230900;
    echo "₹".$a;   
}
echo "<br>";
echo "(*Hotels , Flight And";
echo "<br>";
echo "Other Entites Included)";
?></td>
</tr>
<tr>
<th></th>
<th bgcolor="yellow">Name Of Flight</th>
<th bgcolor="yellow">Depature Time</th>
<th bgcolor="yellow">Arrival Time</th>
<th bgcolor="yellow">Price</th>
</tr>
<tr>
<td>2</td>
<td><?php echo $_POST['flight'] ?></td>


<td>
<?php
switch($_POST['flight'])
{
    case "VietJet Air":
    echo " 00:05
    \n New Delhi";
    break;
    case "Air Astana":
    echo "11:35
    \n New Delhi";
    break;
    case "Air India":
    echo "00:05
    \n New Delhi";
    break;
    case "Malaysia Airlines":
    echo "23:00\n New Delhi";
    break; 
    }
?>  
</td>
<td>
<?php
switch($_POST['flight'])
{
    case "VietJet Air":
    echo "
    19:25
    Seoul-Incheon";
    break;
    case "Air Astana":
    echo "09:45+ 1 DAY
    Seoul-Incheon";
    break;
    case "Air India":
    echo "10:30
    Seoul-Incheon";
    break;
    case "Malaysia Airlines":
    echo "07:10 + 2 DAY
    Seoul-Incheon";
    break; 
    }
?> 
</td>
<td><?php  
switch($_POST['flight'])
{
    case "VietJet Air":
    echo "Rs 27,798";
    break;
    case "Air Astana":
    echo "Rs 40,009 ";
    break;
    case "Air India":
    echo "Rs 36,088";
    break;
    case "Malaysia Airlines":
    echo "Rs 48,114";
    break;
   
}
?></td>
</tr>
</table>
<?php
$name=$_POST['fname'];
$phone=$_POST['pno'];
$mail=$_POST['email'];
$add=$_POST['add'];
$state=$_POST['state'];
$pin=$_POST['pin'];
$ld=$_POST['land'];
$hm=$_POST['per'];
$idt=$_POST['id'];
$id=$_POST['idno'];
$date=$_POST['atime'];
$ht=$_POST['hroom'];
$fly=$_POST['flight'];
$loc=$_POST['dest'];
$con=mysqli_connect("localhost","root","","Tour");
if(mysqli_connect_error())
{
	die('Connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
}
else
{
	echo "connected";
}
$var2="insert into Record(Name,Email,Address,Phoneno,Pincode,id_type,ID_proofno,state,landmark,how_many,dot,hotel,flight,whereto)values('$name','$mail','$add',$phone,$pin,'$idt','$id','$state','$ld',$hm,'$date','$ht','$fly','$loc')";
mysqli_query($con,$var2);
echo "Record created Successfully";
mysqli_close($con);
?>
</body>
</html>