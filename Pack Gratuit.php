			<?php
				if(isset($_POST['formsend'])){

					

					$header="MIME-Version: 1.0\r\n";
					$header.='From:"gmail.com"<vvertimo@gmail.com>'."\n";
					$header.='Content-Type:text/html; charset="uft-8"'."\n";
					$header.='Content-Transfer-Encoding: 8bit';

function message($nom, $prenom, $email, $nombot, $logobot, $discord){
	return <<<HTML
				<html>
					<body>
						<div>
							<h1>Nouvelle Commande de {$nom} {$prenom} </h1><br />
							<p></p>Son mail est {$email}<br />
							<p>Il veut un bot qui s'appelle {$nombot} avec comme logo {$logobot}</p>
							<p>Son discord est {$discord}</p>
						</div>
					</body>
				</html>
HTML;
		}
					



					mail("vvertimo@gmail.com", "New Commande", message($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['nombot'], $_POST['logobot'], $_POST['discord']), $header);

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
					


		

		<form method="POST">
			<div class="centre">
				<div class="centre1">
					<div class="boxform">
						<h1 class="t" id="qui1">Formulaire :</h1>
						<p class="az">Information :</p>
						<input class="formulaire" type="text" name="nom" id="nom" placeholder="Votre nom" required=""/><br/>
						<input class="formulaire" type="text" name="prenom" id="prénom" placeholder="Votre prenom" required=""/><br/>
						<input class="formulaire" type="email" name="email" id="email" placeholder="Votre Email" required=""/><br/>
						<input class="formulaire" type="text" name="discord" id="discord" placeholder="Votre discord" ><br/>
						<input class="formulaire" type="text" name="nombot" id="nombot" placeholder="Nom du bot" required=""/><br/>
						<input class="formulaire" type="url" name="logobot" id="logobot" placeholder="Logo du bot" required=""/><br/>
						<div class="boutton1">
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