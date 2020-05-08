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
$choice=$_REQUEST['cn'];
$query='NULL';

$sql =$query; // Create query string
/*
echo'
<P>
<a href="register.html" > <button  type="button" class="register_btn"> GO to menu </button></a> </p>';*/

echo" YOUR QUERY STRING SEARCH RESULT"."<br>";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn)
 { 
die("Connection failed: ". mysqli_connect_error());
}
 // Send the query to the database
	
	if($choice=='F904')
	{ 
		$query="select * from termproject.classschedule where Room ='".$choice."'";
				$result = mysqli_query($conn, $query);
						include('classgrid.html');
					echo "<br>";
					echo"  <tr>
							<th> Day </th>
							<th> First Day </th>
							<th> Second Day </th>
							<th> Third Day </th>
							<th> COURSE </th>
							<th> total hours </th>
							</tr>";
					if (mysqli_num_rows($result) > 0) // if there are rows present
					{
					while($row = mysqli_fetch_assoc($result))
					 { // fetch next row
					echo "<tr><td>"
					.$row["Day"]."</td><td>"
					.$row["First Day"]."</td><td>"
					.$row["Second Day"]."</td><td>"
					.$row["Third Day"]."</td><td>"
					.$row["courseNo"]."</td><td>"
					.$row["hours"]."</td><td>"."</td></tr>"; // output data of that row
					}
						echo "</table>";
					} 

					else {
					echo "No results";
					}
					mysqli_free_result($result);
					$conn->close();
				}


	elseif($choice=='F905')
				{ 
					$query="select * from termproject.classschedule where Room ='".$choice."'";
							$result = mysqli_query($conn, $query);
						include('classgrid.html');
					echo "<br>";
					echo"  <tr>
							<th> Day </th>
							<th> First Day </th>
							<th> Second Day </th>
							<th> Third Day </th>
							<th> COURSE </th>
							<th> total hours </th>
							</tr>";
					if (mysqli_num_rows($result) > 0) // if there are rows present
					{
					while($row = mysqli_fetch_assoc($result))
					 { // fetch next row
					echo "<tr><td>"
					.$row["Day"]."</td><td>"
					.$row["First Day"]."</td><td>"
					.$row["Second Day"]."</td><td>"
					.$row["Third Day"]."</td><td>"
					.$row["courseNo"]."</td><td>"
					.$row["hours"]."</td><td>"."</td></tr>"; // output data of that row
					}
						echo "</table>";
					} 

					else {
					echo "No results";
					}
					mysqli_free_result($result);
					$conn->close();
				}

elseif($choice=='F906')
				{ 
					$query="select * from termproject.classschedule where Room ='".$choice."'";
							$result = mysqli_query($conn, $query);
									include('classgrid.html');
					echo "<br>";
					echo"  <tr>
							<th> Day </th>
							<th> First Day </th>
							<th> Second Day </th>
							<th> Third Day </th>
							<th> COURSE </th>
							<th> total hours </th>
							</tr>";
					if (mysqli_num_rows($result) > 0) // if there are rows present
					{
					while($row = mysqli_fetch_assoc($result))
					 { // fetch next row
					echo "<tr><td>"
					.$row["Day"]."</td><td>"
					.$row["First Day"]."</td><td>"
					.$row["Second Day"]."</td><td>"
					.$row["Third Day"]."</td><td>"
					.$row["courseNo"]."</td><td>"
					.$row["hours"]."</td><td>"."</td></tr>"; // output data of that row
						
					} 
					echo "</table>";

				}

					else {
					echo "No results";
					}
					mysqli_free_result($result);
					$conn->close();
				}

elseif($choice=='F907')
					{ 
						$query="select * from termproject.classschedule where Room ='".$choice."'";
								$result = mysqli_query($conn, $query);
										include('classgrid.html');
					echo "<br>";
					echo"  <tr>
							<th> Day </th>
							<th> First Day </th>
							<th> Second Day </th>
							<th> Third Day </th>
							<th> COURSE </th>
							<th> total hours </th>
							</tr>";
					if (mysqli_num_rows($result) > 0) // if there are rows present
					{
					while($row = mysqli_fetch_assoc($result))
					 { // fetch next row
					echo "<tr><td>"
					.$row["Day"]."</td><td>"
					.$row["First Day"]."</td><td>"
					.$row["Second Day"]."</td><td>"
					.$row["Third Day"]."</td><td>"
					.$row["courseNo"]."</td><td>"
					.$row["hours"]."</td><td>"."</td></tr>"; // output data of that row
					}
						echo "</table>";
					} 

					else {
					echo "No results";
					}
					mysqli_free_result($result);
					$conn->close();
				}


	elseif($choice=='F908')
				{ 
					$query="select * from termproject.classschedule where Room ='".$choice."'";
							$result = mysqli_query($conn, $query);
									include('classgrid.html');
					echo "<br>";
					echo"  <tr>
							<th> Day </th>
							<th> First Day </th>
							<th> Second Day </th>
							<th> Third Day </th>
							<th> COURSE </th>
							<th> total hours </th>
							</tr>";
					if (mysqli_num_rows($result) > 0) // if there are rows present
					{
					while($row = mysqli_fetch_assoc($result))
					 { // fetch next row
					echo "<tr><td>"
					.$row["Day"]."</td><td>"
					.$row["First Day"]."</td><td>"
					.$row["Second Day"]."</td><td>"
					.$row["Third Day"]."</td><td>"
					.$row["courseNo"]."</td><td>"
					.$row["hours"]."</td><td>"."</td></tr>"; // output data of that row
					}
						echo "</table>";
					} 

					else {
					echo "No results";
					}
					mysqli_free_result($result);
					$conn->close();
				}

	elseif($choice=='F1113')
					{ 
						$query="select * from termproject.classschedule where Room ='".$choice."'";
								$result = mysqli_query($conn, $query);
										include('classgrid.html');
					echo "<br>";
					echo"  <tr>
							<th> Day </th>
							<th> First Day </th>
							<th> Second Day </th>
							<th> Third Day </th>
							<th> COURSE </th>
							<th> total hours </th>
							</tr>";
					if (mysqli_num_rows($result) > 0) // if there are rows present
					{
					while($row = mysqli_fetch_assoc($result))
					 { // fetch next row
					echo "<tr><td>"
					.$row["Day"]."</td><td>"
					.$row["First Day"]."</td><td>"
					.$row["Second Day"]."</td><td>"
					.$row["Third Day"]."</td><td>"
					.$row["courseNo"]."</td><td>"
					.$row["hours"]."</td><td>"."</td></tr>"; // output data of that row
					}
						echo "</table>";
					} 

					else {
					echo "No results";
					}
					mysqli_free_result($result);
					$conn->close();
				}


	elseif($choice=='F1201')
					{ 
						$query="select * from termproject.classschedule where Room ='".$choice."'";
								$result = mysqli_query($conn, $query);
								include('classgrid.html');
							echo "<br>";
							echo"  <tr>
							<th> Day </th>
							<th> First Day </th>
							<th> Second Day </th>
							<th> Third Day </th>
							<th> COURSE </th>
							<th> total hours </th>
							</tr>";
					if (mysqli_num_rows($result) > 0) // if there are rows present
					{
					while($row = mysqli_fetch_assoc($result))
					 { // fetch next row
					echo "<tr><td>"
					.$row["Day"]."</td><td>"
					.$row["First Day"]."</td><td>"
					.$row["Second Day"]."</td><td>"
					.$row["Third Day"]."</td><td>"
					.$row["courseNo"]."</td><td>"
					.$row["hours"]."</td><td>"."</td></tr>"; // output data of that row
					}
						echo "</table>";
					} 

					else {
					echo "No results";
					}
					mysqli_free_result($result);
					$conn->close();
				}


	elseif($choice=='F1203')
				{ 
					$query="select * from termproject.classschedule where Room ='".$choice."'";
							$result = mysqli_query($conn, $query);
									include('classgrid.html');
								echo "<br>";
								echo"  <tr>
							<th> Day </th>
							<th> First Day </th>
							<th> Second Day </th>
							<th> Third Day </th>
							<th> COURSE </th>
							<th> total hours </th>
							</tr>";

					if (mysqli_num_rows($result) > 0) // if there are rows present
					{
					while($row = mysqli_fetch_assoc($result))
					 { // fetch next row
					echo "<tr><td>"
					.$row["Day"]."</td><td>"
					.$row["First Day"]."</td><td>"
					.$row["Second Day"]."</td><td>"
					.$row["Third Day"]."</td><td>"
					.$row["courseNo"]."</td><td>"
					.$row["hours"]."</td><td>"."</td></tr>"; // output data of that row
					}
						echo "</table>";
					} 

					else {
					echo "No results";
					}
					mysqli_free_result($result);
					$conn->close();
				}

	elseif($choice=='F1204')
					{ 
						$query="select * from termproject.classschedule where Room ='".$choice."'";
								$result = mysqli_query($conn, $query);
								include('classgrid.html');
							echo "<br>";
							echo"  <tr>
							<th> Day </th>
							<th> First Day </th>
							<th> Second Day </th>
							<th> Third Day </th>
							<th> COURSE </th>
							<th> total hours </th>
							
							
							</tr>";
					if (mysqli_num_rows($result) > 0) // if there are rows present
					{
					while($row = mysqli_fetch_assoc($result))
					 { // fetch next row
					echo "<tr><td>"
					.$row["Day"]."</td><td>"
					.$row["First Day"]."</td><td>"
					.$row["Second Day"]."</td><td>"
					.$row["Third Day"]."</td><td>"
					.$row["courseNo"]."</td><td>"
					.$row["hours"]."</td><td>"."</td></tr>"; // output data of that row
					}
						echo "</table>";
					} 

					else {
					echo "No results";
					}
					mysqli_free_result($result);
					$conn->close();
				}
	elseif($choice=='M1209')
								{ 
				$query="select * from termproject.classschedule where Room ='".$choice."'";
						$result = mysqli_query($conn, $query);
								include('classgrid.html');
							echo "<br>";
							echo"  <tr>
							<th> Day </th>
							<th> First Day </th>
							<th> Second Day </th>
							<th> Third Day </th>
							<th> COURSE </th>
							<th> total hours </th>
							
									
									</tr>";
							if (mysqli_num_rows($result) > 0) // if there are rows present
							{
							while($row = mysqli_fetch_assoc($result))
							 { // fetch next row
							echo "<tr><td>"
					.$row["Day"]."</td><td>"
					.$row["First Day"]."</td><td>"
					.$row["Second Day"]."</td><td>"
					.$row["Third Day"]."</td><td>"
					.$row["courseNo"]."</td><td>"
					.$row["hours"]."</td><td>"."</td></tr>"; // output data of that row
					}
						echo "</table>";
					} 

					else {
					echo "No results";
					}
					mysqli_free_result($result);
					$conn->close();
				}
?>
</table>
</body>
</html>				