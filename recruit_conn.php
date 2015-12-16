<?php
$conn = mysql_connect("localhost","root","");
$db = mysql_select_db("army_registration",$conn);  
?>
<?php
$fn=$_POST['fn'];
$sn=$_POST['sn'];
$tel=$_POST['tel'];
$ed_l=$_POST['ed_l'];
$district=$_POST['district'];
$ln=$_POST['ln'];
$par=$_POST['par'];
$m_status=$_POST['m_status'];
$loc=$_POST['loc'];
$date=$_POST['date'];
$date_b=$_POST['date_b'];
$gender=$_POST['gender'];
$age=$_POST['age'];

$sql="INSERT into  recruit values('$Id','$fn','$sn','$tel','$ed_l','$district','$ln','$par','$m_status','$loc','$date','$date_b','$gender','$age')";
$qury=mysql_query($sql);
if(!$qury)
echo mysql_error();
else 
echo "successfully entered";
?>