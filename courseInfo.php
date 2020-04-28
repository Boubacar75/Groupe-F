
<?php
$servername="localhost";
$username="root";
$password="";
$query=$_REQUEST['cn'];
//echo'<link rel="stylesheet" href="stylesheets.css"  >';
echo" YOUR QUERY STRING SEARCH RESULT"."<br>";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn)
 { 
die("Connection failed: ". mysqli_connect_error());
}

$sql =$query; //"select * from sciencemajor.courseinformation"; // Create query string
$result = mysqli_query($conn, $sql); // Send the query to the database


if($sql=='select CourseNo, Title from sciencemajor.courseinformation')
	{
	echo "<br>";
	if (mysqli_num_rows($result) > 0) // if there are rows present
	{
	while($row = mysqli_fetch_assoc($result)) { // fetch next row
	echo $row["CourseNo"]. "		" . $row["Title"]. "<br>"; // output data of that row
	}

	} 
	else {
	echo "No results";
	}
	$conn->close();

	mysqli_free_result($result);
	$conn->close();
	}



elseif($sql=='select * from sciencemajor.courseinformation')
	{
	echo "<br>";
	if (mysqli_num_rows($result) > 0) // if there are rows present
	{
	while($row = mysqli_fetch_assoc($result))
	 { 
	echo $row["courseNo"]."		".$row["Title"]. "		".$row["credit"]."		".$row["sectionNo"]."		".$row["room"]."		".$row["instruction"]."		".$row["email"]."		" .$row["position"]."		" .$row["phone"]."<br>"; // output data of that row
	}

	} 
	else {
	echo "No results";
	}
	$conn->close();
	mysqli_free_result($result);
	$conn->close();
	}

elseif($sql=='select Title from sciencemajor.courseinformation')
	{
	echo "<br>";
	if (mysqli_num_rows($result) > 0) // if there are rows present
	{
	while($row = mysqli_fetch_assoc($result)) { // fetch next row
	echo $row["Title"]."<br>"; // output data of that row
	}

	} 
	else {
	echo "No results";
	}
	$conn->close();
	mysqli_free_result($result);
	$conn->close();
	}

elseif($sql=='select Title, room from sciencemajor.courseinformation')
	{
	echo "<br>";
	if (mysqli_num_rows($result) > 0) // if there are rows present
	{
	while($row = mysqli_fetch_assoc($result)) { // fetch next row
	echo $row["Title"]."   ".$row["room"]."<br>"; // output data of that row
	}

	} 
	else {
	echo "No results";
	}
	$conn->close();
	mysqli_free_result($result);
	$conn->close();
	}


elseif($sql=='select email, phone from sciencemajor.courseinformation')
	{
	echo "<br>";
	if (mysqli_num_rows($result) > 0) // if there are rows present
	{
	while($row = mysqli_fetch_assoc($result)) { // fetch next row
	echo $row["email"]."            ".$row["phone"]."<br>"; // output data of that row
	}

	} 
	else {
	echo "No results";
	}
	$conn->close();
	mysqli_free_result($result);
	$conn->close();
	}

else
echo"QUERY STRING ERROR";
?>