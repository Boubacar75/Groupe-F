<html>
  
<head> 

	<title> Registration Page</title>
<link href="stylesheet.css" rel="stylesheet">
<style type="text/css">
	table{
		border-collapse: collapse;
		width: 100%;
		color: white;
		font-family: monospace;
		font-size: 25px;
		text-align: left;
	}

	th{
		background-color: green;
		color: black;
	}
	tr:nth-child(even){background-color: #4d0026;}
</style>
 </head>
<body>
	<table>
<?php

//echo'<link href="stylesheet.css" rel="stylesheet">';

$servername="localhost";
$username="root";
$password="";
//$query="select * from termproject.classschedule where Room ='F904'";
$query=$_REQUEST['cn'];
echo'
<P>
<a href="register.html" > <button  type="button" class="register_btn"> GO to menu </button></a> </p>';

echo" YOUR BOTTON RESULT"."<br>";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn)
 { 
die("Connection failed: ". mysqli_connect_error());
}
$sql =$query; // Create query string
$result = mysqli_query($conn, $sql); // Send the query to the database
						
					


if($sql=='select CourseNo, Title from termproject.courseinformation')
						{echo "<br>";
							echo"  <tr>
							<th> COURSE No </th>
							<th> Title </th>
							</tr>";
						//echo "<br><br><br>";
						//echo" <pre>COURSE NUMBER 			title</pre>";
						if (mysqli_num_rows($result) > 0) // if there are rows present
						{
						while($row = mysqli_fetch_assoc($result)) { // fetch next row
							
						echo "<tr><td>".$row["CourseNo"]. "</td><td>" . $row["Title"]. "</td><td></td></tr>"; // output data of that row
						}
						echo "</table>";

						} 
						else {
						echo "No results";
						}
						

						mysqli_free_result($result);
						$conn->close();
						}



elseif($sql=='select * from termproject.courseinformation')
						{
						echo "<br>";
						echo"  <tr>
							<th> COURSE Number </th>
							<th> Title </th>
							<th> Credit </th>
							<th> Section number </th>
							<th> Rooms </th>
							<th> Instructor </th>
							<th> Email </th>
							<th> position </th>
							<th> phone </th>
							</tr>";

						if (mysqli_num_rows($result) > 0) // if there are rows present
						{
						while($row = mysqli_fetch_assoc($result))
						 { 
						echo"<tr><td>" .$row["courseNo"]."</td><td>"
						.$row["Title"]. "</td><td>"
						.$row["credit"]."</td><td>"
						.$row["sectionNo"]."</td><td>"
						.$row["room"]."</td><td>"
						.$row["instructor"]."</td><td>"
						.$row["email"]."</td><td>"
						.$row["position"]."</td><td>"
						.$row["phone"]. "</td><td></td></tr>"; // output data of that row
						}
						echo "</table>";
						} 
						else {
						echo "No results";
						}
						
						mysqli_free_result($result);
						$conn->close();
						}


elseif ($sql=='select * from termproject.course')
						{
						echo "<br>";
						echo"  <tr>
							<th> COURSE Number </th>
							<th> Title </th>
							<th> Credit </th>
							</tr>";
						if (mysqli_num_rows($result) > 0) // if there are rows present
						{
						while($row = mysqli_fetch_assoc($result)) { // fetch next row
						echo "<tr><td>" .$row["courseNo"]."</td><td>".$row["Title"]. "</td><td>".$row["credit"]."</td><td></td></tr>";
; // output data of that row
						}
								echo "</table>";
						} 
						else {
						echo "No results";
						}

						mysqli_free_result($result);
						$conn->close();
						}
	

elseif($sql=='select * from termproject.coursesection')
							{
							echo "<br>";
						echo"  <tr>
							<th> COURSE Number </th>
							<th> section No </th>
							<th> room </th>
							</tr>";
							if (mysqli_num_rows($result) > 0) // if there are rows present
							{
							
							while($row = mysqli_fetch_assoc($result))
							 { 
							echo "<tr><td>" .$row["courseNo"]."</td><td>"
							.$row["sectionNo"]."</td><td>".$row["room"]."</td><td></td></tr>"; // output data of that row
							}
								echo "</table>";
							} 
							else {
							echo "No results";
							}
							mysqli_free_result($result);
							$conn->close();
							}





elseif($sql=='select Title from termproject.courseinformation')
						{
						echo "<br>";
						echo"  <tr>
							<th> Title </th>
							</tr>";
						if (mysqli_num_rows($result) > 0) // if there are rows present
						{
						while($row = mysqli_fetch_assoc($result)) { // fetch next row
						echo "<tr><td>" .$row["Title"]."</td><td></td></tr>"; // output data of that row
						}
							echo "</table>";
						} 
						else {
						echo "No results";
						}
						mysqli_free_result($result);
						$conn->close();
						}

elseif($sql=='select Title, room from termproject.courseinformation')
						{
						echo "<br>";
						echo"  <tr>
							<th> Title </th>
							<th> Room </th>
							</tr>";
						if (mysqli_num_rows($result) > 0) // if there are rows present
						{
						while($row = mysqli_fetch_assoc($result)) { // fetch next row
						echo "<tr><td>".$row["Title"]."</td><td>".$row["room"]."</td><td></td></tr>"; // output data of that row
						}
							echo "</table>";
						} 
						else {
						echo "No results";
						}
						mysqli_free_result($result);
						$conn->close();
						}


elseif($sql=='select email, phone from termproject.instructor')
					{
					echo "<br>";
					echo"  <tr>
							<th> email </th>
							<th> phone number </th>
							</tr>";
					if (mysqli_num_rows($result) > 0) // if there are rows present
					{
					while($row = mysqli_fetch_assoc($result))
					 { // fetch next row
					echo "<tr><td>".$row["email"]."</td><td>".$row["phone"]."</td></tr>"; // output data of that row
					}
						echo "</table>";
					} 

					else {
					echo "No results";
					}
					mysqli_free_result($result);
					$conn->close();
					}


	elseif($sql=='select * from termproject.classschedule')
					{
					echo "<br>";
					echo"  <tr>
							<th> course Number section </th>
							<th> Room </th>
							<th> Day </th>
							<th> First Day </th>
							<th> Second Day </th>
							<th> Third Day </th>
							<th> hours </th>
							</tr>";
					if (mysqli_num_rows($result) > 0) // if there are rows present
					{
					while($row = mysqli_fetch_assoc($result))
					 { // fetch next row
					echo "<tr><td>"
					.$row["courseNo"]."</td><td>"
					.$row["Room"]."</td><td>"
					.$row["Day"]."</td><td>"
					.$row["First Day"]."</td><td>"
					.$row["Second Day"]."</td><td>"
					.$row["Third Day"]."</td><td>"
					.$row["hours"]."</td></tr>"; // output data of that row
					}
						echo "</table>";
					} 

					else {
					echo "No results";
					}
					mysqli_free_result($result);
					$conn->close();
					}



elseif($sql=='select+*+from%20termproject.classschedule%20where%20Room%20=F904')
	
					{	include('classgrid.html');
					echo "<br>";
					echo"  <tr>
							<th> Day </th>
							<th> hours </th>
							<th> course </th>
							</tr>";
					if (mysqli_num_rows($result) > 0) // if there are rows present
					{
					while($row = mysqli_fetch_assoc($result))
					 { // fetch next row
					echo "<tr><td>".$row["Day"]."</td><td>".$row["hours"]."</td><td>".$row["courseNo"]."</td></tr>"; // output data of that row
					}
						echo "</table>";
					} 

					else {
					echo "No results";
					}
					mysqli_free_result($result);
					$conn->close();
					}

else
echo"QUERY STRING ERROR";


					

?>
</table>
</body>
</html>