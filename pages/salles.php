<!DOCTYPE html>
<html>
	<!-- en-têtes de la page HTML -->
	<head>
		<title>Salles</title>
		<meta charset="UTF-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="/PPE/css/site.css" />
		<link rel="icon" href="/PPE/img/m2l.png"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="/PPE/js/responsive_menu.js">
		</script>
	</head>

	
	<!-- contenus de la page HTML -->
	<body>
		<header>
			<div class="menu" id="menu">
				<!-- Entête -->
				<!--span id = "nom_site" >Maison des ligues</span-->
				<ul>
					<img id="logo_site" src="/PPE/img/m2l_sans_text.png">
					<li><a href="/PPE/pages/accueil.php">Accueil</a></li>
					<li><a href="/PPE/pages/annuaire_des_ligues.php">Annuaire des ligues</a></li>
					<li><a href="/PPE/pages/formations.php">Formations</a></li>
					<li><a class=current href="/PPE/pages/salles.php">Salles</a></li>
					<li><a href="/PPE/pages/contacts.html">Contacts</a></li>
					<a href="javascript:void(0);" class="icon" onclick="switchResponsive()">
							<i class="fa fa-bars"></i>
					</a>
				</ul>
			</div>
		</header>


		<!-- Contenu de la page -->
		<main>
			<h1>Salles</h1>
			
			<table style="width=100%">
				<thead>
					<tr>
						<th>Nom</th>
						<th>Description</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$pdo = new PDO("mysql:host=localhost;dbname=mdl", "root", "root" , array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
						$requete = "SELECT nomSalle, caracteristique FROM SALLE";
						$stmt = $pdo->query($requete);

						foreach ($stmt as $collumn)
						{
							echo "<tr>";
							echo "<td>" . $collumn["nomSalle"] . "</td>";
							echo "<td>" . $collumn["caracteristique"] . "</td>";
							echo "</tr>";
						}
					?>
				</tbody>
			</table>

			<a href="http://localhost/PPE/pages/reservation.html" class="button">Réservation</a>
		</main>


		<footer>
			<!-- Pied de page -->
			<hr style="margin-top:0">
			<a href="" style="float:left">Facebook</a>
			<a href="" style="float:right">Favicons</a>
			<br>
			<a href="" style="float:left">Twitter</a>
			<a href="" style="float:right">Mentions légales</a>
		</footer>
	</body>
</html>