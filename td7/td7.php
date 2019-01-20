<?php
	include_once"../include/fonctions.inc.php";
	include_once"../include/util.inc.php";
	include_once"../include/outille.inc.php";
	echo titlePage(" PHP - fonctions, constantes,tableaux et constructions multi-fichiers");
	include_once"../include/header.inc.php";
	include_once"../include/outille.inc.php";
?>
<body>
<?php
	echo headerPage("Développement Web : PHP - fonctions, constantes, tableaux et constructions multifichiers");
	
	echo menuPage(11);
?>
	<div class="menu" id="manuposition">
		<ul style="margin-top: 4%;">
			<li style="background-color: transparent;"><a href="#"><img src="../images/home.png" alt="home" height="30" width="30"></a>
				<ul class="submenu">
					<li><a href="#exo1">Exercice n°1</a></li>
					<li><a href="#exo2">Exercice n°2</a></li>
					<li><a href="#exo3">Exercice n°3</a></li>
					<li><a href="#exo4">Exercice n°4</a></li>
					<li><a href="#exo5">Exercice n°5</a></li>
				</ul>			
			</li>
		</ul>	
	</div>

	<section id="exo1"><h2 style="text-indent: 20px;font-style: italic;font-size: 18px;">Exercice n°1 :</h2>
	<article style="height: 95%;width: 90%;"><h3 style="text-indent: 20px;font-style: italic;font-size: 22px;"> fonctions et construction multi-fichiers (1ère partie):</h3>	
	<p class="styleparag">Rassembler toutes les fonctions déjà écrite (table de multiplication, table ASCII, palette Web, bases de numération) dans 1 fichier unique « fonctions.inc.php ».</p>
	<p class="styleparag">Pour Vérifier les appels aux différentes fonctions ,sur le code PHP il suffit de choisir le nom de la fonction parmi :</p>
	<ul style="list-style-type: upper-latin;">
		<li>table de multiplication</li>
		<li>table ASCII</li>
		<li>bases de numération</li>
		<li>palette Web</li>	
	</ul>
	<div> 
		<form name="inscription" method="post" action="td7.php#exo1">
			Nome de la Fonction : <input style="margin-right: 10%;"type="text" name="fonction" title="Extraire"/>
			Maximum : <input type="text" name="max" title="Extraire"/>
			<input type="submit" name="valider" value="OK"/>
      </form>
	</div>
	<p class="styleparag" style="color: red;">Si c'est pour table de multiplication ou bases de numération il faudra rentré un autre paramètre qui délimitera notre fonction.</p>
		<?php
			if(isset($_POST['fonction'])){
				$Fonction=$_POST['fonction'];
				$max=$_POST['max'];
				echo choose($Fonction,$max);
			}
        ?>
	</article>
	</section>

	<section id="exo2"><h2 style="text-indent: 20px;font-style: italic;font-size: 18px;">Exercice n°2 :</h2>
	<article style="height: 95%;width: 90%;"><h3 style="text-indent: 20px;font-style: italic;font-size: 22px;"> fonctions, constantes et constructions multifichiers (2ème partie):</h3>
		<?php	
			echo enumTab(17,"Ligne");
		?>
	<div class="direc">
		<h4>Comparaison des directives :</h4>
			<ul>
				<li>
					<strong>require</strong>: inclut le contenu d'un autre fichier appelé, et provoque une erreur bloquante s'il est indisponible.
				</li>
				<li>
					<strong>require_once</strong>: même chose que require, mais ne le fait qu'une seule fois en tout et pour tout dans le même document, si require a déjà été appelé auparavant avec le même nom de fichier.
				</li>
				<li>
					<strong>include</strong>: inclut le contenu d'un autre fichier appelé, mais ne provoque pas 	d'erreur bloquante s'il est indisponible.
				</li>
				<li>
					<strong>include_once</strong>: même chose que include, mais ne le fait qu'une seule fois en tout et pour tout dans le même document si require a déjà été appelé auparavant avec le même nom de fichier.
				</li>
			</ul>		
	</div>
	</article>
	</section>
	
	<section id="exo3"><h2 style="text-indent: 20px;font-style: italic;font-size: 18px;">Exercice n°3 :</h2>
	<article style="height: 95%;width: 90%;"><h3 style="text-indent: 20px;font-style: italic;font-size: 22px;"> fonctions PHP et tableaux PHP:</h3>
		<p class="styleparag">Construire 4 tableaux PHP (pour les jours de la semaine et pour les mois de l’année en anglais et en français) Réaliser une fonction qui retourne la date du jour en français au format : « lundi 5 mars 2018 » par défaut, 
		et en anglais (format US) si un paramètre correspondant (« fr » respectivement « en »)est passé à la fonction 
		: « Monday, March 05, 2018 ».La fonction réalisée sera placée dans un fichier « util.inc.php », 
		lui-même placé dans le répertoire « include ». 
		Associer cette fonctionnalité à la partie « footer » de votre site.</p>
		<ul style="list-style-type: none;">
			<li><?php echo dateDay("fr"); ?></li>
			<li><?php echo dateDay("en"); ?></li>
		</ul>	
	</article>
	</section>
	
	<section id="exo4"><h2 style="text-indent: 20px;font-style: italic;font-size: 18px;">Exercice n°4 :</h2>
	<article style="height: 95%;width: 90%;"><h3 style="text-indent: 20px;font-style: italic;font-size: 22px;"> détecter le navigateur de l’internaute:</h3>
	<p class="styleparag">Reprendre le résultat de la fonction phpinfo() et identifier la variable permettant de connaître le navigateur de l’internaute.Ajouter cette information dans la zone « footer » de votre page.</p>
	<p class="styleparag">la variable permettant de connaître le navigateur de l’internaute est : <strong style="background-color: gray;">$_SERVER -- $HTTP_SERVER_VARS</strong></p>		
	<p class="styleparag"><strong style="background-color: gray;">$_SERVER</strong> est un tableau contenant des informations comme les en-têtes, dossiers et chemins du script. 
	Les entrées de ce tableau sont créées par le serveur web. 
	Il n'y a aucune garantie que tous les serveurs les rempliront tous ; 
	certains en oublieront quelques-unes et en rajouteront de nouvelles non mentionnées ici. Cependant, 
	un grand nombre de ces variables fait partie des »
	<a href="http://www.faqs.org/rfcs/rfc3875.html" >CGI/1.1</a> , et vous pouvez donc vous attendre à les retrouver.</p>
		<?php
			echo userNavigateur();
		?>
	</article>
	</section>
	
	<section id="exo5"><h2 style="text-indent: 20px;font-style: italic;font-size: 18px;">Exercice n°5 :</h2>
	<article style="height: 95%;width: 90%;"><h3 style="text-indent: 20px;font-style: italic;font-size: 22px;"> fonction et tableau PHP : URL</h3>
		<p class="styleparag">À partir d'une URL quelconque (ex. http://www.u-cergy.fr) passée en paramètre d’une fonction,
		extraire (en utilisant par exemple la fonction « explode() » de PHP ou une autre solution plus adaptée):le protocole (ex. http),
		le TLD (Top Level Domain )(ex. : France) à partir d'un tableau associatif php : vous pourrez vous limiter aux TLD suivantes 
		: com, org, net, fr),l'organisme (ex. : u-cergy),le nom de la machine (ex. : www)</p>		
		<div> 
			<form name="inscription" method="post" action="td7.php#exo5">
            URL : <input type="text" name="url" title="Extraire"/>
            <input type="submit" name="valider" value="OK"/>
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
	<?php
		include_once"../include/footer.inc.php";
	?>