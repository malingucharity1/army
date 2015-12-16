<?php
$conn = mysql_connect("localhost","root","");
$db = mysql_select_db("army_registration",$conn);  
?>
<?php
$fname=$_POST['fname'];
$sname=$_POST['sname'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$country=$_POST['country'];

$sql="INSERT into  contact values('$Id','$fname','$sname','$tel','$email','$country')";
$qury=mysql_query($sql);
if(!$qury)
echo mysql_error();
else 
echo "successfully entered";
?>