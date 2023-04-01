<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="tekst">
			
				<h1>Opinie naszych klientów</h1>
				<table>
					<?php

						$mysqli = new mysqli("localhost","klinika","haslo123","klinika");

						// Check connection
						if ($mysqli -> connect_errno) {
						echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
						exit();
						}

						// Perform query
						$sql = "SELECT id, imie, opinia FROM opinie";
						$result = $mysqli->query($sql);

						if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {


							echo "<h2>" . $row["imie"]. "</h2> " . $row["opinia"]. "<br> <br>";


						}
						} else {
						echo "0 results";
						}
						$mysqli->close();
					?>
				</table>
			
			</div>
</body>
</html>