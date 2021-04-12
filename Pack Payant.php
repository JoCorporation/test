			<?php
				if(isset($_POST['formsend'])){

					

					$header="MIME-Version: 1.0\r\n";
					$header.='From:"gmail.com"<vvertimo@gmail.com>'."\n";
					$header.='Content-Type:text/html; charset="uft-8"'."\n";
					$header.='Content-Transfer-Encoding: 8bit';

function message($nom, $prenom, $email, $nombot, $logobot, $discord, $prefix, $commandesimple1, $commandesimple2, $commandesimple3, $commandesimple4){
	return <<<HTML
				<html>
					<body>
						<div>
							<h1>Nouvelle Commande de {$nom} {$prenom} </h1><br />
							<p></p>Son mail est {$email}<br />
							<p>Il veut un bot qui s'appelle {$nombot} avec comme logo {$logobot} et comme préfix {$prefix}</p>
							<p>Son discord est {$discord}</p><br /><br />
							<h1>Description des commande :</h1><br /><br />
							<p>Commande 1: {$commandesimple1}</p><br /><br />
							<p>Commande 2: {$commandesimple2}</p><br /><br />
							<p>Commande 3: {$commandesimple3}</p><br /><br />
							<p>Commande 4: {$commandesimple4}</p><br /><br />
						</div>
					</body>
				</html>
HTML;
		}
					



					mail("vvertimo@gmail.com", "New Commande", message($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['nombot'], $_POST['logobot'], $_POST['discord'], $_POST['prefix'], $_POST['commandesimple1'], $_POST['commandesimple2'], $_POST['commandesimple3'], $_POST['commandesimple4']), $header);

				}
			 ?>
<!DOCTYPE html>
<html lang="fr">


	<head>
		<title src="logo.jpg">Okacorp</title>
		<!-- Meta tag Keywords -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8" />

		<!-- Custom-Files -->
		<link href="css/font-awesome.min.css" rel="stylesheet">

	</head>

	<body>
		<header>
				<scroll-container>
					<scroll-page id="accueil">
				<div id="gros">
					<!-- numero de telephone -->

					<!-- logo -->
					<h1 class="t"><img src="logo.jpg" class="img"> JoCorp</h1>
				</div>
				</scroll-page>
				</scroll-container>

			</header>
			<!-- haut de page -->
			<!-- menu de navigation -->
			
					
					<ul class="nav">
						<li><a  href="index.php">Accueil</a></li>

						

					</ul>

		
					


		<h1></h1>

		<form method="POST">
			<div class="centre">
				<div class="centre1">
					<div class="boxform1">
						<h1 class="t" id="qui1">Formulaire :</h1>
						<p class="az">Information :</p>
						<input class="formulaire" type="text" name="nom" id="nom" placeholder="Votre nom" required=""/><br/>
						<input class="formulaire" type="text" name="prénom" id="prenom" placeholder="Votre prénom" required=""/><br/>
						<input class="formulaire" type="email" name="email" id="email" placeholder="Votre Email" required=""/><br/>
						<input class="formulaire" type="text" name="discord" id="discord" placeholder="Votre discord" ><br/>
						<input class="formulaire" type="text" name="nombot" id="nombot" placeholder="Nom du bot" required=""/><br/>
						<input class="formulaire" type="url" name="logobot" id="logobot" placeholder="Logo du bot" required=""/><br/>
						<input class="formulaire" type="text" name="prefix" id="prefix" placeholder="Préfix du bot" required=""/><br/>

						<p class="az">Description :</p>

						<textarea class="formulaire1" type="text" name="commande 1" id="commandesimple1" placeholder="Commande 1" required=""></textarea><br/>

						<textarea class="formulaire1" type="text" name="commande 2" id="commandesimple2" placeholder="Commande 2" required=""></textarea><br/>

						<textarea class="formulaire1" type="text" name="commande 3" id="commandesimple3" placeholder="Commande 3" required=""></textarea><br/>

						<textarea class="formulaire1" type="text" name="commande 4" id="commandesimple4" placeholder="Commande 4" required=""></textarea><br/>

						
						<div>
							<input type="submit" name="formsend" id="boutton_commander" value="Commander"/>
						</div>
					</div>
				</div>
			</div>
		</form>




		<!-- bannière principale -->
		
			<!-- haut de page -->
			
				

		<footer>
			<div class="footer-content">
				<h3>Spyrou</h3>
				<p>Un bon site Web est toujours "en construction" !</p>
				<ul class="socials">
					<li><a href="#"><i class="discord">Discord</i></a></li>
					
				</ul>
			</div>
			<div class="footer-bottom">
				<p>Copyright &copy;2021 Spyrou. Designed By <span>Spyrou</span></p>
			</div>
		</footer>
		
		

	</body>

</html>