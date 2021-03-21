<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "cabinet";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$name = $_GET["nom"];
$prenom = $_GET["prenom"];
$mail = $_GET["mail"];
$phone = $_GET["phone"];
$ancien = $_GET["type"];
$motif = $_GET["motif"];
$date = $_GET["date"];
if ($ancien == "Nouveau client") {
  $sql = "INSERT INTO client (nom, prenom, email, num) VALUES ('$name','$prenom','$mail','$phone')";
  $sql3 = "INSERT INTO rdv(motif,date,id_client) VALUES ('$motif','$date','$id_client')";
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
