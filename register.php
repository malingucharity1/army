<?php
//Start the session
session_start();

if(isset($_SESSION['user'])!="")
{
 header("Location: index.php");
}
include_once 'dbconnect.php';

//get the value from the form y passing to the btn-login
if(isset($_POST['btn-signup']))
{
 $uname = mysql_real_escape_string($_POST['uname']);
 $email = mysql_real_escape_string($_POST['email']);
 $upass = md5(mysql_real_escape_string($_POST['pass']));
 
 //insert data to mysql
 if(mysql_query("INSERT INTO users(username,email,password) VALUES('$uname','$email','$upass')"))
 {
  ?>
        <script>alert('successfully registered ');</script>
        <?php
 }
 else
 {
  ?>
        <script>alert('error while registering you...');</script>
        <?php
 }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login & Registration System</title>
<link rel="stylesheet" href="style.css" type="text/css" />

</head>
<body bgcolor="#009933">
<div id="main">
<h1 align="center" style="color:#FF0000"><b>UGANDAN ARMY REGISTRATION FORM</b> </h1>
<p align="center"><img src="tee/hom.PNG" width="182" height="200"></p>
<div id="login">
<h2><i>Register Here pliz!!!!!!!!!!!!!!!!!!!!!!!!!!!!!</i></h2>
<form method="post"> 
	<label>UserName :</label>
    <p>
      <input id="name" type="text" name="uname" placeholder="User Name" required />
    </p>
    <label>Email :</label>
    <p>
      <input id="email" type="text" name="email" placeholder="Your Email" required />
      
    </p>
    <label>Password :</label>
	<p>
  <input id="password" type="password" name="pass" placeholder="Your Password" required />
  </p>
    <p><br />
      <input type="submit" name="btn-signup" value=" Create Account ">
    </p>
    <center><a href="index.php">Sign In Here</a></center>

</form>
</div>
</body>
</html>


	

