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
			<h1>Klinika Fikcyjna-Med</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. 
			Cras vel lorem. Etiam pellentesque aliquet tellus.</p>
			
			<p>Stwórz w PHP tablicę z poniższymi elementami i wyświetl je w pętli</p>
			
			<ul>

			<?php
				$tablica = array('Innowacyjność','Najnowocześniejszy sprzęt','Najlepsi lekarze','Niskie ceny');

				for($i=0; $i<count($tablica);$i++){
					echo "<li>".$tablica[$i]."</li> ";
				}
			?>

			</ul>


			</div>
</body>
</html>