<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<?php
error_reporting(0);
session_start(); //starts the session
if($_SESSION['user_is']){
//checks if user is logged in
}
else{
header("location:index.php"); // redirects if user is not logged in
}
$user_is = $_SESSION['user_is']; //assigns user value

$con = mysql_connect("servername", "username","password") or die(mysql_error()); //Connect to server
mysql_select_db(  "databasename") or die("Cannot connect to database"); //Connect to database

$query1= mysql_query("SELECT email_is from user_is WHERE user_is='$user_is'");
$query2 = mysql_query("SELECT id_is from user_is WHERE user_is='$user_is'");
$query3 = mysql_query("SELECT fname from user_is WHERE user_is='$user_is'");
$query4 = mysql_query("SELECT lname from user_is WHERE user_is='$user_is'");
$query5 = mysql_query("SELECT tick from user_is WHERE user_is='$user_is'");
$row1 = mysql_fetch_assoc($query1);
$row2 = mysql_fetch_assoc($query2);
$row3 = mysql_fetch_assoc($query3);
$row4 = mysql_fetch_assoc($query4);
$row5 = mysql_fetch_assoc($query5);
$email_is = $row1['email_is'];
$id_is = $row2['id_is'];
$name_f = $row3['fname'];
$name_l = $row4['lname'];
$tick = $row5['tick'];


?>

<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<style type="text/css">
.style1 {
	color: #245D31;
}
.style2 {
	color: #FF0000;
}
.style3 {
	color: #5B5529;
}
</style>
</head>
<body>

<div style="height: 520px; width: 600px; background-color: #FFFFFF;" id="main">

	<div style="height: 76px" id="header">
	<h1 class="style1"> SbmWeb Web-hosting Portal</h1>
	<p class="style2"><em>#. Please do not refresh the page. </em> </p>
		
	</div>
<div id="body" style="height: 393px">
		 <h3><em>Client Details</em></h3>
		<p>&nbsp; Name : <?php Print "$name_f" ?> <?php Print "$name_l"?></p>
		 <p>Username : <?php Print "$user_is"?></p>
		 <p>Email: <?php Print "$email_is"?></p>
		 <p class="style2">Website status: <?php Print "$tick"?></p>
		 <p>&nbsp;</p>
		<p>&nbsp;</p>
		&nbsp; <a href="logout_is.php"><em><span class="style3">LOGOUT</span></em></a>
		

	</div>
		<div id="footer" style="height: 45px">
			&nbsp;&nbsp;&nbsp;&nbsp;
		</div>
</div>

</body>

</html>
