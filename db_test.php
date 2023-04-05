<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mijndb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
echo "<br>";

$sql = "SELECT * FROM `users`";
$result = mysqli_query($conn, $sql);

echo "<table>";
while($row = mysqli_fetch_assoc($result)) {
  echo "<tr><td>".$row['login']."<td><td>".$row['password']."<td><td>".$row['voornaam']."<td><td>".$row['achternaam']."<td><tr>";
}
echo "<table>";
?>