<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
// $mysqli = new mysqli("localhost","root","","limerence");
try{
  $pdo = new PDO("mysql:host=localhost;dbname=limerence", 'root', null);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e){
  $error_mess = 'khong the ket noi';
}


// Check connection
// if ($mysqli->connect_error) {
//   die("Connection failed: " . $mysqli->connect_error);
// }

?>

