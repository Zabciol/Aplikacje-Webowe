<!DOCTYPE html>
<html>
	<head>
		<title>Fikcyjna-Med</title>
		<meta charset="UTF-8">
		<meta name="description" content="Strona domowa">
		<meta name="keywords" content="słowa, kluczowe">
		
		<link rel="stylesheet" href="incl/css/style.css">
	</head>
	<body>

			<!-- warstwa z logo -->
			<header class="header">
			<div class="logo"><img src="incl/img/logo.png" alt="Logo"></div>
			
			<!-- warstwa z menu -->
            <div class="menu">
				<a href="index.php?strona=strona_glowna">Strona Główna</a>
				<a href="index.php?strona=nasza_klinika">Nasza Klinika</a>
				<a href="index.php?strona=uslugi">Usługi</a>
				<a href="index.php?strona=cennik">Cennik</a>
				<a href="index.php?strona=opinie">Opinie</a>
				<a href="index.php?strona=rezerwacje">Rezerwacja</a>
			</div>
</header>
			
			<!-- warstwa z tekstem -->
			<div class="tekst">

            <?php
			
            
            if (!isset($_GET['strona'])) {
                $strona = 'strona_glowna';
            } else {
                $strona = $_GET['strona'];
            }			
            
            include "incl/$strona.php";
            
            ?>
			</div>

	</body>
</html>