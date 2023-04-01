<!DOCTYPE html>
<html>
	<head>
		<title>Fikcyjna-Med</title>
		<meta charset="UTF-8">
		<meta name="description" content="Strona domowa">
		<meta name="keywords" content="słowa, kluczowe">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		
	</head>
	<body>	
			<!-- warstwa z tekstem -->
			<div class="tekst">
			<h1>Oferowane usługi</h1>
				
			<ul>

				<?php
					$tablica = array('Medycyna estetyczna', 'Chirurgia', 'Porady specjalistów', 'Badania specjalistyczne');

					for($i=0; $i<count($tablica);$i++){
						echo "<li>".$tablica[$i]."</li> ";
					}
				?>

			</ul>
				
			</div>

	</body>
</html>
