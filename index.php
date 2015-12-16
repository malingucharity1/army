<?php
//Start the session
session_start();

include_once 'dbconnect.php';

if(isset($_SESSION['user'])!="")
{
 header("Location: dashboard.php");
}
if(isset($_POST['btn-login']))
{
 $email = mysql_real_escape_string($_POST['email']);
 $upass = mysql_real_escape_string($_POST['pass']);
 $res=mysql_query("SELECT * FROM users WHERE email='$email'");
 $row=mysql_fetch_array($res);
 if($row['password']==md5($upass))
 {
  $_SESSION['user'] = $row['user_id'];
  header("Location: dashboard.php");
 }
 else
 {
  ?>
        <script>alert('wrong details');</script>
        <?php
 }
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Form</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body bgcolor="#009933">
	<div id="main">
<h1 align="center" style="color:#FF0000"><u>WELCOME TO ARMY SYSTEM</u></h1>
<p><img src="tee/home.PNG" name="west" width="302" height="201" border="0" usemap="#east" id="west"> <img src="tee/arm.PNG" width="511" height="141"></p>
<h1><i><b>login to access the UPDF information about mostly recruitments</b></i></h1>
<div id="login">
<h2>Login Form</h2>
<form method="post">
	<label>Email :</label>
    <p>
      <input id="name" type="text" name="email" placeholder="Your Email" required>
    </p>
    <p>&nbsp;</p>
    <label>Password :</label>
    <p>
      <input id="password" type="password" name="pass" placeholder="Your Password" required>
    </p>
    <p>
      
      <input type="submit" name="btn-login" value=" Login ">
    </p>
    <p>&nbsp;    </p>
    <center><a href="register.php">Sign Up</a></center>

  </form>
</div>

</body>
</html>

