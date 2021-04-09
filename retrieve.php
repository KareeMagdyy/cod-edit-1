<!DOCTYPE html>
<html>
<head>
	<title>Retrieving Data</title>
	<link rel="stylesheet" type="text/css" href="retrieveStyle.css">
</head>
<body>
<table>
	<tr>
		<th>#</th>
		<th>Reporter</th>
		<th>Winner</th>
		<th>Date</th>
		<th>Games Won</th>
		<th>Games Lost</th>
		<th>Mode</th>
		<th>Veto</th>
	</tr>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cod-test";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM submission";
$result = $conn-> query($sql);

if ($result-> num_rows > 0){

	while ($row = $result-> fetch_assoc()) {

		echo  "<tr><td>". $row["index"]. "</td><td>". $row["reporter"].  "</td><td>". $row["winner"]. "</td><td>". $row["date_input"]. "</td><td>". $row["games_won"]. "</td><td>". $row["games_lost"]. "</td><td>". $row["mode"]. "</td> <td>". $row["veto"]. "</td> </tr>";
	}
}
mysqli_close($conn);


?>

</table>
</body>
</html>