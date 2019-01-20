<?php
	include_once"../include/fonctions.inc.php";
	include_once"../include/util.inc.php";
	include_once"../include/outille.inc.php";
	echo titlePage("PHP - cookies, sessions,redirections & upload");
	include_once"../include/header.inc.php";
?>

<body>
	<?php

	echo headerPage("PHP -  fichiers et dossiers");
	
	echo menuPage(11);
	
	?>
	
	<div class="cont">
	<div class='calendar'>
	<?php
		echo monthCalendar(date("n"),date("Y"),false);
	?>
	</div>
	</div>

	<?php
		echo menuNavigation(5,"Non");
	?>
	
	<section id="exo1"><h2 style="text-indent: 20px;font-style: italic;font-size: 18px;">Exercice n°1 :</h2>
	<article style="height: 95%;width: 73%;"><h3 style="text-indent: 20px;font-style: italic;font-size: 22px;">cookie :</h3>
	<p class="styleparag">Reprendre l'exercice permettant le choix de la charte graphique en mettant en place un cookie 
	afin de permettre une mémorisation du choix de la charte graphique 
	(celle-ci étant conservée sur les pages du site et lors d'une visite ultérieure depuis le même navigateur).</p>
	<p class="styleparag">Si la valeur du cookie est erronée, supprimez-le.</p>
	
	<a style="padding-right: 10%;" href="td11.php?style=bleu#exo1"><img style="border: 2px solid black; margin-left: 40%; " src="../images/bleu.PNG" alt="bleu" height="40" width="40"></a>
	<a href="td11.php?style=blanc#exo1"><img style="border: 2px solid black;" src="../images/blanc.PNG" alt="blanc" height="40" width="40"></a>	

	</article>
	</section>

	<section id="exo2"><h2 style="text-indent: 20px;font-style: italic;font-size: 18px;">Exercice n°2 :</h2>
	<article style="height: 95%;width: 73%;"><h3 style="text-indent: 20px;font-style: italic;font-size: 22px;">session :</h3>
	<p class="styleparag">Reprendre l'exercice de connexion (login/password) en ajoutant un traitement: 
	après connexion l'internaute a accès à un contenu à accès restreint et un message d'accueil personnalisé (avec ses noms et prénom) s'affiche avec son login; 
	il peut également changer de page en conservant sa connexion (il faut donc prévoir au moins 2 pages à accès restreint).</p>
	
	<p class="styleparag">Ajoutez ensuite un lien de déconnexion.</p>
	
	<div style="border-left: 2px solid red;">	
	<p class="styleparag">si vous voulez testé directement sans passé par l'étape d'inscription voici un utilisateur déjà inscrit</p>
	<ul class="styleparag">
		<li>Identifiant : ishakayad</li>	
		<li>Mot de passe : 0123456789</li>
	</ul>
	<p class="styleparag">si-non je vous invite a testé le formulaire d'inscription</p>
	</div>
	<?php
		if(isset($_POST['CONNECTER'])){
			if(isset($_POST['username']) && isset($_POST['password'])){
				if(verify('../td10/data.csv',$_POST['username'],$_POST['password'])){
					echo loginFomula("connexion.php");
				}
				else {
					echo loginFomula("connexion.php");
				}
			}
		}
		
		else if(isset($_POST['INSCRIRE'])){
			echo inscriptionFomula("td11.php#exo2");
		}
		
		else if(isset($_POST['login'])) {
			if(isset($_POST['username']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['password']) && isset($_POST['tchek']) ){					
				$identifiant = $_POST['username'];
				$nom = $_POST['nom'];
				$prenom = $_POST['prenom'];
				$password = $_POST['password'];
				$check = $_POST['tchek'];
					
				if($password == $check){
					echo loginFomula("connexion.php");
					writeData("../td10/data.csv",$prenom,$nom,$identifiant,$password);
				}
				else {
					echo inscriptionFomula("td11.php#exo2");
					echo"<p style='margin-left:40%; color:red;'>ressaisie votre mot de passe</p>\n";
				}					
			}	
		}
		else {
			echo loginFomula("connexion.php");	
		}
	?>
	</article>
	</section>
	
	<section id="exo3"><h2 style="text-indent: 20px;font-style: italic;font-size: 18px;">Exercice n°3 :</h2>
	<article style="height: 95%;width: 73%;"><h3 style="text-indent: 20px;font-style: italic;font-size: 22px;">redirection HTML, coté client :</h3>
	
	
	</article>
	</section>
	
	<section id="exo4"><h2 style="text-indent: 20px;font-style: italic;font-size: 18px;">Exercice n°4 :</h2>
	<article style="height: 95%;width: 73%;"><h3 style="text-indent: 20px;font-style: italic;font-size: 22px;">redirection PHP, coté serveur :</h3>
	
	
	</article>
	</section>

	<section id="exo5"><h2 style="text-indent: 20px;font-style: italic;font-size: 18px;">Exercice n°5 :</h2>
	<article style="height: 95%;width: 73%;"><h3 style="text-indent: 20px;font-style: italic;font-size: 22px;">upload d’une image depuis le navigateur vers le serveurredirection PHP, coté serveur :</h3>
		<form style="margin-left: 10%;" method="post" action="td11.php#exo5" enctype="multipart/form-data">
		     <label for="image">Image (JPG, PNG ou GIF | max. 150 Ko) :</label>
		     <input type="hidden" name="MAX_FILE_SIZE" value="153600" />
		     <input type="file" name="image" id="image" />
		     <input type="submit" name="submit" value="Envoyer" />
		</form>
	</article>
	</section>	
	
	<?php
		include_once"../include/footer.inc.php";
	?>