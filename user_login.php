<?php
session_start();
$user_is = $_POST['user_is'];
$pwd_is = $_POST['pwd_is'];
mysql_connect("servername", "username","password")
or die(mysql_error()); //Connect to server
mysql_select_db("database") or die("Cannot connect to database"); //Connect to database
$query = mysql_query("SELECT * from user_is WHERE user_is='$user_is'");
//Query the users table if there are matching rows equal to $username
$exists = mysql_num_rows($query);
//Checks if username exists
$table_users = "";
$table_password = "";
if($exists > 0) //IF there are no returning rows or no existing username
{
while($row = mysql_fetch_assoc($query)) //display all rows from query
{
$table_users = $row['user_is'];
// the first username row is passed on to $table_users, and so on until the query is finished 
$table_password = $row['pwd_is']; // the first password row is passed on to $table_users, 
}
if(($user_is == $table_users) && ($pwd_is == $table_password))
// checks if there are any matching fields
{
if($pwd_is == $table_password)
{
$_SESSION['user_is'] = $user_is; //set the username in a session.
header("location: home.php"); // redirects the user to the authenticated home page
}
}
else
{
Print '<script>alert("Incorrect Password!");</script>'; //Prompts the user
Print '<script>window.location.assign("log.php");</script>'; // redirects to login.php
}
}
else
	{
Print '<script>alert("Incorrect Username!");</script>'; //Prompts the user
Print '<script>window.location.assign("log.php");</script>'; // redirects to login.php
	}
?>