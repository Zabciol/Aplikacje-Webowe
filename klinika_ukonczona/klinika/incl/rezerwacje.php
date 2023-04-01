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
				<form action="form.php" method="post">
				
					<p>Podaj swoje imię<br>
					<input type="text" class="poletekstowe" name="imie"></p>
					
					<p>Podaj swoje nazwisko<br>
					<input type="text" class="poletekstowe" name="nazwisko"></p>
					
					<p>Podaj swój numer telefonu<br>
					<input type="text" class="poletekstowe" name="telefon"></p>
					
					<p>Cel wizyty:<br>
						<?php
						$tablica = array('Medycyna estetyczna', 'Chirurgia', 'Porady specjalistów', 'Badania specjalistyczne');
	
						for($i=0; $i<count($tablica);$i++){
							echo "<input type='radio' name='celwizyty' value='.$tablica[$i].'>$tablica[$i]<br>";
						}
					?>
					</p>
					
					<p>Podaj swój rok urodzenia<br>
					<select name="rok">
						
						<?php
						
						for($rok = 1950; $rok <= 2000; $rok++)
						{
							echo "<option value=".$rok.">$rok</option>";
						}
						?>
					</select></p>
					
					<p>Dodatkowe uwagi<br>
					<textarea name="uwagi"></textarea></p>
					
					<input type="submit" class="przycisk" value="Rezerwuj wizytę">
				
				</form>
			</div>
</body>
</html>