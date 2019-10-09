<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<style type="text/css">
.style1 {
	color: #245D31;
}
.style2 {
	color: #FF0000;
}
.style3 {
	margin-top: 46px;
}
</style>
</head>
<body>

<div style="height: 520px; width: 600px; background-color: #FFFFFF;" id="main">

	<div style="height: 76px" id="header">
	<h1 class="style1"> SbmWeb Web-hosting Portal</h1>
	<p class="style2"><em>#. Please do not refresh the page. </em> </p>
	<p class="style2"><em>#. Please Provide correct email address because admin login will be send to it. </em> </p>
		
	</div>
<div id="body" style="height: 393px">
		
		<h1><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<span class="style3">Client Registration</span>&nbsp;</h1>
		<form method="post" action="usp_reg.php">
                        	<p><span>User Name:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" id="username" required="required" name="user_is" class="login_input" />
                            </p>
                            <p><span>First Name:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" id="username"  required="required" name="name_f" class="login_input" />
                            </p>
                            <p><span>Last Name:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" id="username" required="required"  name="name_l" class="login_input" />
                            </p>


                            <p>E<span>mail:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
                            <input type="text" id="email" required="required" name="email_is" class="login_input" />
                            </p>
                            <p><span>Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
                            &nbsp;<input type="password" id="password" required="required"  name="pwd_is" class="login_input" />
                            </p>
                             <p><span>Confirm Password: </span>
                             &nbsp;<input type="password" id="c_password" required="required"  name="cpwd_is" class="login_input" />
                            </p>
                            <p><span>Site Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
                            &nbsp;<input type="text" id="" required="required"  name="site" class="login_input" />
                            </p>

                           <input type="submit" name="submit" id="sign_up" value="Submit " />
                        </form>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="log.php"> <span class="style2"><em>Already user, login here 
		</em></span> </a>

	</div>
</div>

</body>

</html>
