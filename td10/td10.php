<?php
	include_once"../include/fonctions.inc.php";
	include_once"../include/util.inc.php";
	include_once"../include/outille.inc.php";
	echo titlePage("PHP - fichiers et dossiers");
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
		echo menuNavigation(3,"Non");
	?>
	
	<section id="exo1"><h2 style="text-indent: 20px;font-style: italic;font-size: 18px;">Exercice n°1 :</h2>
	<article style="height: 95%;width: 73%;"><h3 style="text-indent: 20px;font-style: italic;font-size: 22px;"> compteur de «hits» et fichier:</h3>
	<p class="styleparag">Réaliser un compteur de fréquentation avec un fichier texte. 
	le compteur comptabilisera lenombre de «hits» sur les pages du site et sera sauvegardé dans un fichier texte</p>	
	<p class="styleparag">Le rafraîchissement de la page incrémentera la valeur du compteur.</p>	
	<h3 style="font-style: italic; border-bottom: 1px dotted black; width: 13%; margin-left: 2%;">Explication :</h3>
	<p class="styleparag">file — Lit le fichier et renvoie le résultat dans un tableau</p>
	<ul class="styleparag">
		<li><a href="http://php.net/manual/fr/function.readfile.php">readfile()</a> - Affiche un fichier</li>
		<li><a href="http://php.net/manual/fr/function.fopen.php">fopen()</a> - Ouvre un fichier ou une URL</li>
		<li><a href="http://php.net/manual/fr/function.fsockopen.php">fsockopen()</a> - Ouvre un socket de connexion Internet ou Unix</li>
		<li><a href="http://php.net/manual/fr/function.popen.php">popen()</a> - Crée un processus de pointeur de fichier</li>
		<li><a href="http://php.net/manual/fr/function.file-get-contents.php">file_get_contents()</a> - Lit tout un fichier dans une chaîne</li>
		<li><a href="http://php.net/manual/fr/function.include.php">include</a> - include</li>
		<li><a href="http://php.net/manual/fr/function.stream-context-create.php">stream_context_create()</a> - Crée un contexte de flux</li>
	</ul>
	<h3 style="font-style: italic; border-bottom: 1px dotted black; width: 7%; margin-left: 2%;">Teste :</h3>
		<?php
			echo hitsCount();
		?>
	</article>
	</section>
	
	<section id="exo2"><h2 style="text-indent: 20px;font-style: italic;font-size: 18px;">Exercice n°2 :</h2>
	<article style="height: 95%;width: 73%;"><h3 style="text-indent: 20px;font-style: italic;font-size: 22px;"> affichage aléatoire et dossier:</h3>		
	<p class="styleparag">Sélectionner dynamiquement dans un dossier "photos" une image au hasard à afficher sur lapage HTML 5 de votre site dans la zone «aside» (le rafraîchissement de la page entraîneral'affichage aléatoire d'une autre image). 
	Vous utiliserez les balises &lt;figure&gt; et &lt;figcaption&gt;</p>		
		<?php		
			echo randPics();
		?>
	</article>
	</section>
	
	<section id="exo3"><h2 style="text-indent: 20px;font-style: italic;font-size: 18px;">Exercice n°3 :</h2>
	<article style="height: 95%;width: 73%;"><h3 style="text-indent: 20px;font-style: italic;font-size: 22px;"> fichier CSV:</h3>
	<p class="styleparag"> Créer un fichier CSV contenant les identifiants, mots de passe crypté (vous utiliserez depréférence les fonctions de type password_hash et password_verify), prénoms et noms desutilisateurs autorisés à se connecter au site.</p>
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
				verify('data.csv',$_POST['username'],$_POST['password']);
			}
			echo loginFomula("td10.php#exo3");
		}
		
		else if(isset($_POST['INSCRIRE'])){
			echo inscriptionFomula("td10.php#exo3");
		}
		
		else if(isset($_POST['login'])) {
			if(isset($_POST['username']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['password']) && isset($_POST['tchek']) ){					
				$identifiant = $_POST['username'];
				$nom = $_POST['nom'];
				$prenom = $_POST['prenom'];
				$password = $_POST['password'];
				$check = $_POST['tchek'];
					
				if($password == $check){
					echo loginFomula("td10.php#exo3");
					writeData("data.csv",$prenom,$nom,$identifiant,$password);
				}
				else {
					echo inscriptionFomula("td10.php#exo3");
					echo"<p style='margin-left:40%; color:red;'>ressaisie votre mot de passe</p>\n";
				}					
			}	
		}
		else {
			echo loginFomula("td10.php#exo3");	
		}
	?>
	</article>
	</section>
	
	<?php
		include_once"../include/footer.inc.php";
	?>