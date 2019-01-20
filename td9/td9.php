<?php
	include_once"../include/fonctions.inc.php";
	include_once"../include/util.inc.php";
	include_once"../include/outille.inc.php";
	echo titlePage("PHP - formulaires HTML et PHP");
	include_once"../include/header.inc.php";
?>
<body>
	<?php
	echo headerPage("PHP - formulaires HTML et PHP");
	
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
		echo menuNavigation(7,"Non");
	?>
	
	<section id="exo1"><h2 style="text-indent: 20px;font-style: italic;font-size: 18px;">Exercice n°1 :</h2>
	<article style="height: 95%;width: 73%;"><h3 style="text-indent: 20px;font-style: italic;font-size: 22px;"> test de la méthode get:</h3>
	<p class="styleparag">Proposer un formulaire (fichier HTML) avec un champ de type texte permettant à l’utilisateur
	de saisir une chaîne de caractère (en minuscules) et un bouton de validation.</p>
	
	<p>L'élément HTML <strong style="background-color: gray;">&lt;form&gt;</strong>représente une section d'un document qui contient des contrôles interactifs permettant à un utilisateur d'envoyer des données à un serveur web.</p>	

	<form style="margin-left: 35%; width: 35%; padding-bottom: 5%;" name="inscription" method="get" action="td9.php#exo1">
	<fieldset style="background-color: #424558; color: white;">
	<legend style="color: black;">Change casse :</legend>
	<input style="width: 40%; font-weight: bold; margin-left: 15%;" placeholder="change casse" type="text" name="text" title="Chaine de caractères"/>
	<input style="margin-left: 10%; background-color: bisque;" type="submit" name="valider" value="OK"/>
		<?php
		if(isset($_GET['text'])) {
			$string=$_GET['text'];
			echo"<p style='font-weight: bold; margin-left: 40%; padding-top: 3%; resize: none;'>".strtoupper($string)."</p>";
		}	
		?>
	</fieldset>
	</form>	
	<p class="styleparag">un formulaire (fichier HTML) avec un champ de saisie <strong style="background-color: gray;">textarea</strong>, 
	et deux <strong style="background-color: gray;">input</strong> du type <strong style="background-color: gray;">radio</strong>.</p>
	<form style="margin-left: 35%; width: 35%;" name="inscription" method="get" action="td9.php#textarea">
	<fieldset style="background-color: #424558; color: white;" id="textarea">
	<legend style="color: black;">Change casse :</legend>
		<div style="padding-bottom: 4%;">
			<label>Chaîne de caractères : </label>
		</div>
		<textarea cols='21' rows='5' name="textarea" placeholder="change casse" style="margin-left: 12%; font-weight: bold; resize: none;"></textarea>
		<div style="padding-bottom: 4%; margin-left: 8%;">
			<label for="nome">Majuscule</label>
			<input style="margin-right: 5%;"  type="radio" name="maj" value="Majuscule" />
			<label for="nom">Minuscule</label>
			<input type="radio" name="maj" value="Minuscule" />
		</div>
		<input style="margin-left: 40%; background-color: bisque;" type="submit" name="valider" value="OK"/>
		<?php
		if(isset($_GET['textarea'])) {
			$string=$_GET['textarea'];
			if(isset($_GET['maj']) && $_GET['maj'] == "Majuscule"){
				echo"<textarea cols='21' rows='5' style='font-weight: bold; margin-left: 12%; padding-top: 3%; resize: none;'>".strtoupper($string)."</textarea>";
			}
			else if(isset($_GET['maj']) && $_GET['maj'] == "Minuscule") {
				echo"<textarea cols='21' rows='5' style='font-weight: bold; margin-left: 12%; padding-top: 3%; resize: none;'>".strtolower($string)."</textarea>";
			}
		}	
		?>
	</fieldset>
	</form>
	</article>
	</section>	
	
	<section id="exo2"><h2 style="text-indent: 20px;font-style: italic;font-size: 18px;">Exercice n°2 :</h2>
	<article style="height: 95%;width: 73%;"><h3 style="text-indent: 20px;font-style: italic;font-size: 22px;"> test des méthodes get et post:</h3>
	<h3 style="text-indent: 20px;font-style: italic;font-size: 18px;">La méthode GET ajoute les données à l'URL</h3>	
	<p class="styleparag">Avec cette méthode, les données du formulaire seront encodées dans une URL. 
	Celle-ci est composée du nom de la page ou du script à charger avec les données de formulaire empaquetée dans une chaîne.
	Les données sont séparées de l'adresse de la page pas le code ? et entre elles par le code &. </p>	
	<form style="margin-left: 35%; width: 40%;" name="inscription2" method="get" action="td9.php#exo2">
		<fieldset style="background-color: #424558; color: white;">
		<legend style="color: black;">Méthode «Get»</legend>
		<label>Valeur décimale : </label>
		<input style="width: 20%; font-weight: bold; margin-left: 6%;" type="number" min="0" placeholder="0.." name="valeur" title="Chaine de caractères"/>
		<input style="margin-left: 3%; background-color: bisque;" type="submit" name="valider" value="OK"/>
	<?php
		if(isset($_GET['valeur'])) {
			
			$number=$_GET['valeur'];
			echo "<p style='margin-left: 45%;opacity: 0.9; color:red; width: blod; font-size: 18pt;'>".strtoupper(dechex($number))."</p>";
		}
	?>
	</fieldset>
	</form>

	<h3 style="text-indent: 20px;font-style: italic;font-size: 18px;">La méthode POST n'a pas de taille limite </h3>
	<p class="styleparag">Elle envoit un en-tête et un corps de message au serveur. Le corps est généralement constitué des données entrées dans le champ de formulaire par l'utilisateur.</p>	
	
	<form style="margin-left: 35%; margin-top: 3%; width: 40%;" name="inscription" method="post" action="td9.php#exo2">
		<fieldset style="background-color: #424558; color: white;">
		<legend style="color: black;">Méthode «Post»</legend>
		<label>Valeur décimale : </label>
		<input style="width: 20%; font-weight: bold; margin-left: 6%;" type="number" min="0" placeholder="0.." name="valeur" title="decimale"/>
		<input style="margin-left: 3%; background-color: bisque;" type="submit" name="valider" value="OK"/>
	<?php
		if(isset($_POST['valeur'])) {
			
			$number=$_POST['valeur'];
			echo "<p style='margin-left: 45%;opacity: 0.9; color:red; width: blod; font-size: 18pt;'>".strtoupper(dechex($number))."</p>";
		}
	?>
	</fieldset>
	</form>
	</article>
	</section>
	
	<section id="exo3"><h2 style="text-indent: 20px;font-style: italic;font-size: 18px;">Exercice n°3 :</h2>
	<article style="height: 95%;width: 73%;"><h3 style="text-indent: 20px;font-style: italic;font-size: 22px;"> formulaire de saisie d'URL:</h3>
		<p class="styleparag">À partir d'une URL quelconque (ex. http://www.u-cergy.fr) passée en paramètre d’une fonction,
		extraire (en utilisant par exemple la fonction « explode() » de PHP ou une autre solution plus adaptée):le protocole (ex. http),
		le TLD (Top Level Domain )(ex. : France) à partir d'un tableau associatif php : vous pourrez vous limiter aux TLD suivantes 
		: com, org, net, fr),l'organisme (ex. : u-cergy),le nom de la machine (ex. : www)</p>		
		<div> 
			<form style="width: 30%; margin-left: 18%;" name="inscription" method="post" action="td9.php#exo3">
			<fieldset style="background-color: #424558; color: white;">
			<legend style="color: black;">Saisie d'URL</legend>
				<label > URL : </label>
           	<input type="text" name="url" title="Extraire"/>
           	<div style="margin-left: 45%; padding-top: 5%;"><input style="background-color: bisque;" type="submit" name="valider" value="OK"/></div>
         </fieldset>
      	</form>
        <?php
        if(isset($_POST['url'])){
            $URL=$_POST['url'];
         echo "<p class='styleparag'>L'URL est une description complète de l'emplacement d'une ressource sur Internet. 
			Elle se compose de plusieurs parties accessibles par une application. 
			Ces parties sont illustrées dans le tableau suivante :</p>";	
            echo splitProtocole($URL);
        }
        ?>
		</div>
		<p class="styleparag">La première partie "<strong>Le Protocole</strong>" (qui n'appartient pas techniquement à l'URL) identifie le protocole (http).
		Cette partie peut spécifier d'autres protocoles comme https (secure http), ftp, etc.</p>
		<p class="styleparag">La deuxième "<strong>le nom de la machine</strong>" c'est le préfixe qui, ajouté devant le nom de domaine, et séparé de ce dernier par un point, 
		constitue un nom de sous-domaine. L'usage (facutatif) de la chaîne de caractères "www" est un "clin d'oeil" au World Wild Web mais n'est pas une règle formelle. 
		Toute chaîne de caractères peut être utilisée, pour former un nom de sous-domaine,</p>
		<p class="styleparag">La troisième partie  "<strong>L'organisme</strong>" correspond au nom de domaine. Il indique le serveur web auquel le navigateur s'adresse pour échanger le contenu. À la place du nom de domaine, 
		on peut utiliser une adresse IP, ce qui sera moins pratique (et qui est donc moins utilisé sur le Web).</p>
		<p class="styleparag">La dernier partie "<strong>TLD</strong>", un nom de domaine (NDD en notation abrégée française ou DN pour Domain Name en anglais) est, 
		dans le système de noms de domaine, un identifiant de domaine internet. 
		Un domaine est un ensemble d'ordinateurs reliés à Internet et possédant une caractéristique commune. 
		Par exemple, un domaine tel que .fr est l'ensemble des ordinateurs hébergeant des activités pour des personnes ou des organisations qui se sont enregistrées auprès de l'Association française pour le nommage Internet en coopération (AFNIC) qui est le registre responsable du domaine de premier niveau .fr ; 
		en général, ces personnes ou ces entreprises ont une certaine relation (qui peut être ténue dans certains cas) avec la France 
		; le domaine paris.fr est l'ensemble des ordinateurs hébergeant des activités pour la ville de Paris.</p>
	
	</article>
	</section>		
	
	<section id="exo4"><h2 style="text-indent: 20px;font-style: italic;font-size: 18px;">Exercice n°4 :</h2>
	<article style="height: 95%;width: 73%;"><h3 style="text-indent: 20px;font-style: italic;font-size: 22px;"> formulaire avec liste d'options:</h3>
	<p class="styleparag">L'élément HTML <strong style="background-color: gray;">&lt;select&gt;</strong> représente un contrôle qui fournit une liste d'options parmi lesquelles l'utilisateur pourra choisir</p>		
		
		<form style="margin-left: 35%; width: 30%; padding-bottom: 5%;" method="post" action="td9.php#exo4" name="munliplaction">
		<fieldset style="background-color: #424558; color: white;">	
		<legend style="color: black;">Table Multiplication</legend>
		<label>Choisir un nombre:</label>
		<?php
			echo listOption(16);
		?>
		<div style="padding-top: 3%; margin-left: 40%;">
			<input style="background-color: bisque;" type="submit" value="ok"/>
		</div>
		</fieldset>
		</form>
		<?php
			if(!empty($_POST["number"])){
				$max=$_POST["number"];
				$explode=explode('x',$max);
				$max=$explode[0];
				
				echo multiplication($max);
			}		
		?>
	</article>
	</section>	
	
	<section id="exo5"><h2 style="text-indent: 20px;font-style: italic;font-size: 18px;">Exercice n°5 :</h2>
	<article style="height: 95%;width: 73%;"><h3 style="text-indent: 20px;font-style: italic;font-size: 22px;"> formulaire avec cases à cocher:</h3>
	<p class="styleparag">L'élément HTML <strong style="background-color: gray;">&lt;input&gt;</strong> 
	est utilisé pour créer un contrôle interactif dans un formulaire web qui permet à l'utilisateur de saisir des données. Les saisies possibles et le comportement de l'élément  
	<strong style="background-color: gray;">&lt;input&gt;</strong> dépend fortement de la valeur indiquée dans son attribut type.</p>	
	<p class="styleparag">Les éléments <strong style="background-color: gray;">&lt;input&gt;</strong> 
	de type <strong style="background-color: gray;">checkbox</strong> sont affichés sous la forme de boîtes à cocher qui sont cochées lorsqu'elles sont activées. 
	Elle permettent de sélectionner une ou plusieurs valeurs dans un formulaire.</p>	
	
	<form method="post" action="td9.php#exo5">
	<?php
	if(isset($_POST['o']) || isset($_POST['g']) || isset($_POST['u'])) {
		$numeriqueU = "";
		$numeriqueO = "";
		$numeriqueG = "";
					
		if(!empty($_POST['o'])){
			$others = $_POST['o'];
		
			for($i=0; $i<sizeof($others); $i++) {
				$numeriqueO.=$others[$i];
			}
		}
		
		if(!empty($_POST['u'])) {
			$user = $_POST['u'];
			
			for($i=0; $i<sizeof($user); $i++) {
				$numeriqueU.=$user[$i];
			}
		}
		
		if(!empty($_POST['g'])){		
			$group = $_POST['g'];
		
			for($i=0; $i<sizeof($group); $i++) {
				$numeriqueG.=$group[$i];
			}
			
		}

		$numerique = array(1=>$numeriqueU, $numeriqueG, $numeriqueO);		
		
		echo cochCases($numerique);
	}
	else {
		echo cochCases();	
	}
	?>
	</form>
	</article>
	</section>		
	
	<section id="exo6"><h2 style="text-indent: 20px;font-style: italic;font-size: 18px;">Exercice n°6 :</h2>
	<article style="height: 95%;width: 73%;"><h3 style="text-indent: 20px;font-style: italic;font-size: 22px;"> formulaire généré par des boucles PHP avec liste d'options:</h3>
	<p class="styleparag">On considère sur cette unique page un formulaire et son traitement:</p>
	<p class="styleparag">le formulaire proposera une liste déroulante d'options pour choisir un mois et une autre liste
	pour choisir une année (par exemple entre 2000 et 2030). La page de traitement affichera le mois de
	l'année sélectionnée</p>
	<p class="styleparag">Si le mois n'est pas spécifié, on affiche l'année complète.</p>
	<p class="styleparag">Cliquez sur le calendrier !</p>
	<a style="padding-right: 10%;" href="calendrier.php"><img style="margin-left: 50%;" src="../images/calendrier.png" alt="rose" height="40" width="40"></a>	
	</article>
	</section>		
	
	<section id="exo7"><h2 style="text-indent: 20px;font-style: italic;font-size: 18px;">Exercice n°7 :</h2>
	<article style="height: 95%;width: 73%;"><h3 style="text-indent: 20px;font-style: italic;font-size: 22px;"> formulaire avec bouton radio:</h3>
	<h3 style="width: 21%; color: black; border-bottom: 1px solid black;">Notation numérique</h3>	
	<p class="styleparag">L'avantage de la notation numérique sur la précédente est de permettre sur un fichier la définition absolue des droits de toutes les catégories en même temps selon la syntaxe :</p>
	<p class="styleparag">chmod serie-de-3-chiffres fichier </p>
	<p class="styleparag">Ainsi on remplace chacun des triplets par un nombre compris entre 0 et 7. 
	Ce qui nous fait un nombre à trois chiffres en guise de notation numérique. 
	Le tableau ci-après permet de faire la convertion entre les différentes triplets possibles et leur notation octale (nombre en base 8).</p>
	<div id="chm">
	<?php
		echo tableTriple();
	?>
		<form style="margin-left: 45%;" name="inscription" method="post" action="td9.php#chm">
			<div style="padding-bottom: 2%;">
				Valeur octal : <input style="width: 5%; color: red;" type="text" name="chmod" title="Droits de lecture"/>
			</div>
			<div style="padding-bottom: 2%;">
				<label for="nome">dossier</label>
				<input type="radio" name="fic" id="nome" value="dossier" />
				<label for="nom">fichier</label>
				<input type="radio" name="fic" id="nom" value="fichier" />
			</div>
			<input style="margin-left: 10%; background-color: bisque;" type="submit" name="valider" value="OK"/>
      </form>
	</div>	
	<?php
		if(isset($_POST['chmod'])){
			$number=$_POST['chmod'];
			if(isset($_POST['fic']) && $_POST['fic'] == "dossier"){
				echo chmodValue($number,true);
				echo table_equi($number,"Dossier");
			}
			
			if(isset($_POST['fic']) && $_POST['fic'] == "fichier"){
				echo chmodValue($number,false);
				echo table_equi($number,"Fichier");
			}
		}
	?>
	</article>
	</section>		
	<?php
		include_once"../include/footer.inc.php";
	?>