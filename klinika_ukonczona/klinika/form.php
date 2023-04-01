<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Refresh" content="0;url=http://localhost/klinika/index.php?strona=strona_glowna">
    <title>Document</title>
</head>
<body>



<?php

$imie = $_POST["imie"];
$nazwisko = $_POST["nazwisko"];
$telefon = $_POST["telefon"];
$celWizyty = $_POST["celwizyty"];
$rok = $_POST["rok"];
$uwagi = $_POST["uwagi"];

$mysqli = new mysqli("localhost","klinika","haslo123","klinika");

// Check connection
if ($mysqli -> connect_errno) {
echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
exit();
}

// Perform query
$sql = "INSERT INTO rezerwacje (imie, nazwisko, rok, telefon, cel_wizyty, uwagi) VALUES ('$imie', '$nazwisko', $rok, '$telefon', '$celWizyty', '$uwagi')";


if ($mysqli->query($sql) === TRUE) {
    echo "Udało się";
  } else {
    echo "Błąd: " . $sql . "<br>" . $mysqli->error;
  }
$mysqli->close();

?>

</body>
</html>