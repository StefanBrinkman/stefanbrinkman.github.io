<!-- Stefan Brinkman -->
<html>
	<head>
		<meta charset="utf-8">
		<title>Stefan Brinkman Portfolio!</title>
		<link rel="stylesheet" href="portfolio.css">
		<!-- <script src="portfolio.js"></script> -->
	</head>
	
	<body>
		<header>
			<a href="welkom.html"><button>Home</button></a>
			<a href="opleiding.html"><button>Opleiding</button></a>
			<a href="overmij.html"><button>Over mij</button></a>
			<a href="contact.html"><button><strong>Contact</strong></button></a>
		</header>
		
		<div id="formulier"><br><br>
			<form method="POST" action="database/sendinfo.php">
				<fieldset>
					Voornaam:<br><input required type="text" name="vnaam" placeholder=" Voornaam "><br><br>
					Achternaam:<br><input required type="text" name="anaam" placeholder=" Achternaam "><br><br>
					E-mail:<br><input required type="text" name="email" placeholder=" Emailadres "><br><br>
					Onderwerp:<br>
					<select required name="onderwerp">
						<option name=""></option>
						<option name="School">School</option>
						<option name="Frontend">Frontend</option>
						<option name="Backend">Backend</option>
						<option name="Kennis">Kennis</option>
						<option name="Anders">Anders..</option>
					</select>
					
					<br><br><textarea required rows="7" cols="40" placeholder="Wat u wilt weten?:" name ="vraag"></textarea>
					<br><input type="submit" name="verzenden">
				</fieldset>
			</form><br>
		</div>
			
		<div id="vragen">
		<?php
			require("database/laadinfo.php");
		?>
		</div>
			
		<footer>
			<p id="foot">Gemaakt door Stefan Brinkman. 2018 &copy; Alle rechten voorbehouden</p>
		</footer>
	</body>
</html>