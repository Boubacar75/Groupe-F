<?php  
$user=$_REQUEST['username'];
$pass=$_REQUEST['password'];
if($user=="root" && $pass=="root")
	 include("register.html"); 
	
	else if ($user=="root" && $pass!="root")
	{
		echo "<h5> WRONG PASSWORD <br> Try again </h5>";

		include("login.html");
	}

	else if ($user!="root" && $pass="root")
	{
		echo "<h5>WRONG username <br> Try again </h5>";

		include("login.html");
	}

	else
	{
		echo "<h5> UNKNOWN USER. PLEASE FIX INFO OR SIGN UP </h5>";

		include("login.html");
	}
	

 ?>
  