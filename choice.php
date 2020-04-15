<?php
$choice1= $_request['login'];
$choice2= $_request['signup'];
header('Content-type: text/plain');
if ($choice1='login')
{
	echo'  
<html>
  LOG IN PLEASE
<head> <title> log in page </title>
<link href="stylesheet.css" rel="stylesheet" type="text/css">
 </head>
<body>

<form action="data.php" method="POST">

	<p> USER NAME:
	<input type="text" name="myname" value="enter user name"></p>

	<p> PASSWORD: 
	<input type="text" name="myage"  value="enter password"></p>

<p> 
<input type="submit" name="submit" value="submit info" class="submit"> </p>
</form>

</body>

</html>
	  ';
}
elseif($choice2='signup')
echo''

?>