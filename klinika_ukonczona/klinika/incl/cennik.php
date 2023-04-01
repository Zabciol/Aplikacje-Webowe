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
			<h1>Cennik</h1>
				
				<ul>

					<?php
						$tablica = array('Konsultacja - 200zł', 'Zabiegi chirurgiczne - od 1000zł', 'Badanie RTG - 100zł','Rezonans magnetyczny - 500zł');

						for($i=0; $i<count($tablica);$i++){
							echo "<li>".$tablica[$i]."</li> ";
						}
					?>

				</ul>
			</div>
</body>
</html>