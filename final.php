<?php
//

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$reporter = $_POST["reporter"];
$winner = $_POST["winner"];
$date = $_POST["date"];
$gamesWon = $_POST["gamesWon"];
$gamesLost = $_POST["gamesLost"];
$mode = $_POST["mode"];
$veto = $_POST["veto"];



}

//


$servername = "localhost";
$username = "root";
$password = "LeomanPassword@@22";
$dbname = "cod";

//
$conn = mysqli_connect($servername, $username, $password, $dbname);
// إ
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO daily_input (reporter, winner, date_input, games_won ,games_lost, mode, veto)
VALUES ('$reporter', '$winner', '$date', '$gamesWon' , '$gamesLost', '$mode', '$veto')";

if (mysqli_query($conn, $sql)) {
    header("Location: return.html");
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
