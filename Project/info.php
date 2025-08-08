<html>
    <body background="https://st2.depositphotos.com/4762275/8877/v/450/depositphotos_88771146-stock-illustration-seamless-pattern-1084.jpg">
<?php
if(isset ($var12)){
$var1=$_POST['fname'];
$var2=$_POST['lname'];
$var3=$_POST['ename'];
$var4=$_POST['add'];
$var5=$_POST['lmark'];
$var6=$_POST['pcode'];
$var7=$_POST['pno'];
$var8=$_POST['hno'];
$var9=$_POST['ono'];
$var10=$_POST['id'];
$var11=$_POST['ino'];
$var12=$_POST['Stay'];
$var13=$_POST['nnight'];
$var14=$_POST['hroom'];
$var15=$_POST['atime'];
}?>
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
        <th> <img height="110" width="100" src="https://img.freepik.com/premium-vector/beach-house-logo-design-template-beach-resort-villa-beach-hotel-logo_98702-711.jpg?w=2000">
        </th>
        <th> 
        <p><b>Royal Hotel<br>
            Near Opposite Satelite Bus Stand <br> Bapujinagar Mysore Road <br>Bangalore 560026</b>
        </p></th>
    <th><img height="110" width="100" src="https://i.pinimg.com/originals/de/f7/b6/def7b694904830d5804ee5975b69e9ed.png"></th></tr>
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
    case "Fairmont Gold Room, 1 King Bed":
    echo "Rs 38,588";
    break;
    case "Junior Suite, 1 King Bed with Sofa bed":
    echo "Rs 38,588";
    break;
    case "One Bedroom Suite, 1 King Bed with Sofa bed":
    echo "Rs 46,316";
    break;
    case "Fairmont Gold Suite, 1 King Bed":
    echo "Rs 46,316";
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
    case "All Nippon Airways":
    echo "18:00 \n New Delhi";
    break;
    case "Delta Air Lines":
    echo "18:00 \n New Delhi";
    break;
    case "Emirates":
    echo "04:15\n New Delhi";
    break;
    case "Lufthansa":
    echo "13:35\n New Delhi";
    break; 
    }
?>  
</td>
<td>
<?php
switch($_POST['flight'])
{
    case "All Nippon Airways":
    echo "18:34 + 1 DAY\n
    Vancouver";
    break;
    case "Delta Air Lines":
    echo "13:08 + 1 DAY
\n    Vancouver";
    break;
    case "Emirates":
    echo "23:01
  \n  Vancouver";
    break;
    case "Lufthansa":
    echo "
    16:45+ 1 DAY
    \n Vancouver";
    break; 
    }
?> 
</td>
<td><?php  
switch($_POST['flight'])
{
    case "All Nippon Airways":
    echo "Rs 51,376";
    break;
    case "Delta Air Lines":
    echo "Rs 59,685 ";
    break;
    case "Emirates":
    echo "Rs 77,447";
    break;
    case "Lufthansa":
    echo "Rs 94,198";
    break;
   
}
?></td>
</tr>
</table>
</body>
</html>