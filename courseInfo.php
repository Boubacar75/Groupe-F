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

echo" YOUR BUTTON RESULT"."<br>";

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


elseif($sql=='select instructor_name, phone, email from termproject.instructor')
					{
					echo "<br>";
					echo"  <tr>
							<th> instructor name </th>
							<th> phone number </th>
							<th> email </th>
							</tr>";
					if (mysqli_num_rows($result) > 0) // if there are rows present
					{
					while($row = mysqli_fetch_assoc($result))
					 { // fetch next row
					echo "<tr><td>"
					.$row["instructor_name"]."</td><td>"
					.$row["phone"]."</td><td>"
					.$row["email"]."</td></tr>"; // output data of that row
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
							<th> Room </th>
							<th> course Number </th>
							<th> section No </th>
							<th> Monday </th>
							<th> Tuesday </th>
							<th> Wednesday </th>
							<th> Thursday </th>
							<th> Friday </th>
							<th> Saturday </th>
							<th> Sunday </th>
							<th> Total hours </th>
							</tr>";
					if (mysqli_num_rows($result) > 0) // if there are rows present
					{
					while($row = mysqli_fetch_assoc($result))
					 { // fetch next row
					echo "<tr><td>"
					.$row["Room"]."</td><td>"
					.$row["courseNo"]."</td><td>"
					.$row["SectionNo"]."</td><td>"
					.$row["monday"]."</td><td>"
					.$row["tuesday"]."</td><td>"
					.$row["wednesday"]."</td><td>"
					.$row["thursday"]."</td><td>"
					.$row["friday"]."</td><td>"
					.$row["saturday"]."</td><td>"
					.$row["sunday"]."</td><td>"
					.$row["total hours"]."</td></tr>"; // output data of that row
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