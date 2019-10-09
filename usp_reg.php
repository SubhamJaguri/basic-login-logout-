<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
$user_is = $_POST['user_is'];
$pwd_is = $_POST['pwd_is'];
$email_is = $_POST['email_is'];
$cpwd_is = $_POST['cpwd_is'];
$name_f = $_POST['name_f'];
$name_l = $_POST['name_l'];
$site = $_POST['site'];
$tick = 'Not Created';
$etc = 'etc';

if($pwd_is==$cpwd_is)
{
$bool = true;
$connection = mysql_connect('servername', 'username', 'password') or die ("<p class='error'>Sorry, we were unable to connect to the database server.</p>");
$database = "database";
mysql_select_db($database, $connection) or die ("<p class='error'>Sorry, we were unable to connect to the database.</p> ");


$query = mysql_query("Select * from user_is  "); //Query the users table
while($row = mysql_fetch_array($query)) //display all rows from query
{
$table_users = $row['user_is']; // the first username row is passed on to $table_users
if($user_is == $table_users) // checks if there are any matching fields
{
$bool = false; // sets bool to false
Print ' <script> alert("Username has been taken!"); </script> '; //Prompts the user
Print ' <script>window.location.assign("reg.php");</script> '; // redirects to register.php
}
}
if($bool) // checks if bool is true
{
mysql_query("INSERT INTO user_is (user_is, pwd_is , email_is , fname , lname , sname , tick , etc ) VALUES ('$user_is','$pwd_is','$email_is', '$name_f' , '$name_l' , '$site' , '$tick' , '$etc' )");
//Inserts the value to table users
Print '<script>window.location.assign("s_reg.php");</script>'; // redirects to register.php
}
}
else
{Print ' <script> alert("password does not match! TRY AGAIN!!!!!"); </script> '; //Prompts the user
Print ' <script>window.location.assign("reg.php");</script> '; // redirects to register.php

}

}
?>
