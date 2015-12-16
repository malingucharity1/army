<?php
//Start the session
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
 header("Location: index.php");
}
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ARMY MANAEMENT SYSTEM</title>
<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
</head>
<body>
 <form  id="form" method="post" name="form1" action="home.php">
 <table width="896" height="120" border="0" align="center">
  <tr>
    <td width="890" height="71"><h1 align="center" style="color:#009900"><u><u><u>ARMY MANAGEMENT SYSTEM</u></h1>
      <p align="center"><img src="tee/po.PNG" width="150" height="190" /></p></td>
     </tr>    
     
        <tr bgcolor="#006600">
 <td width="950" height="40">\<a href="home.php">HOME</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="about.php">ABOUT US</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="recruit.php">RECRUITMENT</a>&nbsp;&nbsp;&nbsp;<a href="services.php">SERVICES</a>&nbsp;&nbsp;<a href="contact.php">CONTACT US</a>&nbsp;&nbsp;&nbsp;<a href="logout.php">LOGOUT</a></td>
        </tr>
   </table>
      <p align="center">
      <div id="wowslider-container1">
<div class="ws_images"><ul>
		<li><img src="data1/images/a.jpg" alt="a" title="a" id="wows1_0"/></li>
		<li><img src="data1/images/e.jpg" alt="e" title="e" id="wows1_1"/></li>
		<li><img src="data1/images/eret.jpg" alt="eret" title="eret" id="wows1_2"/></li>
		<li><img src="data1/images/f.jpg" alt="f" title="f" id="wows1_3"/></li>
		<li><a href="http://wowslider.com"><img src="data1/images/g.jpg" alt="wowslider" title="g" id="wows1_4"/></a></li>
		<li><img src="data1/images/q.jpg" alt="q" title="q" id="wows1_5"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="a"><span><img src="data1/tooltips/a.jpg" alt="a"/>1</span></a>
		<a href="#" title="e"><span><img src="data1/tooltips/e.jpg" alt="e"/>2</span></a>
		<a href="#" title="eret"><span><img src="data1/tooltips/eret.jpg" alt="eret"/>3</span></a>
		<a href="#" title="f"><span><img src="data1/tooltips/f.jpg" alt="f"/>4</span></a>
		<a href="#" title="g"><span><img src="data1/tooltips/g.jpg" alt="g"/>5</span></a>
		<a href="#" title="q"><span><img src="data1/tooltips/q.jpg" alt="q"/>6</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com">wowslider</a> by WOWSlider.com v8.6</div>
<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section --><td height="155"></p>
 
 <p>&nbsp;</p>
 </form> 


 <table width="849" height="394" border="3" align="center">
   <tr bgcolor="#FF0000">
     <td width="201">THE GOVERNMENT </td>
     <td width="251">TOPICS</td>
     <td width="371" >SERVICES</td>
   </tr>
   <tr bgcolor="#006600">
     <td><p>The President</p>
         <p>The Cabinent</p>
       <p>The parliament</p>
       <p>The Judiciary</p>
       <p>The ministries</p>
       <p>Government Agencies</p>
       <p>Local Government</p>
       <p>&nbsp;</p></td>
     <td><p>Agriculture and Food Baskets</p>
         <p>Art and Entertainment</p>
       <p>Education and sports</p>
       <p>Foreign Affairs and Corporation</p>
       <p>Trade and industry</p>
       <p>Labour and Employement</p>
       <p>Science and technology </p>
       <p>&nbsp;</p></td>
     <td ><p>Emergency services</p>
         <p>working in Uganda</p>
       <p>Uganda Prisons Servives</p>
       <p>Consumer Protection </p>
       <p>Health centres in Uganda</p>
       <p>Legal services</p>
       <p>Tax and customs</p>
       <p>Registration services Buurea </p>
       <p>&nbsp; </p>
       <p>&nbsp;</p></td>
   </tr>
 </table>
 <p>&nbsp;</p>
 <table width="940" height="27" border="1">
   <tr>
     <td bgcolor="#009933" class="ws_bullets"><h1 align="center"><b><i><em>COPYRIGHT &copy; SPECIAL FORCES COMMAND 2014 .</em></i></b></td>
   </tr>
</table>
 <p>&nbsp;</p>
</body>
</html>
