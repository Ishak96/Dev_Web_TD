<?php
	include_once"../include/fonctions.inc.php";
	include_once"../include/util.inc.php";
	include_once"../include/outille.inc.php";
	echo titlePage("PHP - tableaux & fonctions");
	include_once"../include/header.inc.php";
?>
<body>
	<?php
	echo headerPage("PHP - tableaux & fonctions");
	
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
	
	echo menuNavigation(5,"Oui");
	?>
	<section id="exo0"><h2 style="text-indent: 20px;font-style: italic;font-size: 18px;">Exercice n°0 :</h2>
	<article style="height: 95%;width: 73%;"><h3 style="text-indent: 20px;font-style: italic;font-size: 22px;"> compléments sur les liens:</h3>
		<p class="styleparag">Html (Hyper Text Markup Language) est un langage hypertexte (et hypergraphique) qui vous permet en cliquant sur un mot, 
		généralement souligné (ou une image) de vous transporter;</p>
		<ul class="styleparag">
			<li>vers un autre endroit du document.</li>
			<li>vers un autre fichier Html situé sur votre ordinateur.</li>
			<li>vers un autre ordinateur situé sur le Web.</li>
		</ul>
		<p class="styleparag">Ce système d'hypertexte vous est familier car se sont ces liens qui vous permettent de surfer de page en page et qui constituent l'essence du Web et des documents Html.</p>
		<p class="styleparag">La syntaxe de ces liens entre plusieurs pages, est simple mais entraînera de nombreux commentaires :</p>
		<p style="margin-left: 30%; font-style: italic; color: darkblue; font-size: 15pt;">&lt;A HREF="URL ou Adresse"&gt;...&lt;/A&gt;</p>	
	</article>
	</section>
	
	<section id="exo1"><h2 style="text-indent: 20px;font-style: italic;font-size: 18px;">Exercice n°1 :</h2>
	<article style="height: 95%;width: 73%;"><h3 style="text-indent: 20px;font-style: italic;font-size: 22px;"> fonctions et construction multi-fichiers (suite du TD précédent):</h3>
		<p class="styleparag">La fonction <strong style="background-color: darkgray;">phpinfo()</strong> , affiche de nombreuses informations sur PHP, concernant sa configuration courante : 
		options de compilation, extensions, version, informations sur le serveur, et l'environnement (lorsqu'il est compilé comme module), 
		environnement PHP, informations sur le système, 
		chemins, valeurs générales et locales de configuration, en-têtes HTTP et la licence PHP.</p>
		<p class="styleparag">en s'inspirant de <strong style="background-color: darkgray;">phpinfo()</strong> , on peut écrire une fonction qui affiche toute une page HTML (contenant les exercices 1 à 4 du TD 5).</p>
		<ul><li style="list-style-type: none; margin-left: 45%;"><a href="./td5info.php"><img src="../images/td5.png" height="50" width="70" alt="php logo"></a></li></ul>
	</article>
	</section>
	
	<section id="exo2"><h2 style="text-indent: 20px;font-style: italic;font-size: 18px;">Exercice n°2 :</h2>
	<article style="height: 95%;width: 73%;"><h3 style="text-indent: 20px;font-style: italic;font-size: 22px;"> fonction et tableaux PHP: chmod</h3>
	<h3 style="width: 21%; color: black; border-bottom: 1px solid black;">Notation numérique</h3>
	<p class="styleparag">L'avantage de la notation numérique sur la précédente est de permettre sur un fichier la définition absolue des droits de toutes les catégories en même temps selon la syntaxe :</p>
	<p class="styleparag">chmod serie-de-3-chiffres fichier </p>
	<p class="styleparag">Ainsi on remplace chacun des triplets par un nombre compris entre 0 et 7. 
	Ce qui nous fait un nombre à trois chiffres en guise de notation numérique. 
	Le tableau ci-après permet de faire la convertion entre les différentes triplets possibles et leur notation octale (nombre en base 8).</p>
	<div id="chmod">
	<?php
		echo tableTriple();
	?>
		<form style="margin-left: 45%;" name="inscription" method="post" action="td8.php#chmod">
			<div style="padding-bottom: 2%;">
				Valeur octal : <input style="width: 5%; color: red;" type="text" name="chmod" title="Droits de lecture"/>
			</div>
			<div style="padding-bottom: 2%;">
				<label for="nome">dossier</label>
				<input  type="radio" name="doc" id="nome" value="dossier" />
				<label for="nom">fichier</label>
				<input type="radio" name="fic" id="nom" value="fichier" />
			</div>
			<input style="margin-left: 10%;" type="submit" name="valider" value="OK"/>
      </form>
	</div>	
	<?php
		if(isset($_POST['chmod'])){
			$number=$_POST['chmod'];
			if(isset($_POST['doc']) && isset($_POST['doc']) == "dossier"){
				echo chmodValue($number,true);
			}
			
			if(isset($_POST['fic']) && isset($_POST['fic']) == "fichier"){
				echo chmodValue($number,false);
			}
		}
	?>
	</article>
	</section>
	
	<section id="exo3"><h2 style="text-indent: 20px;font-style: italic;font-size: 18px;">Exercice n°3 :</h2>
	<article style="height: 95%;width: 73%;"><h3 style="text-indent: 20px;font-style: italic;font-size: 22px;"> liens paramétrés:</h3>
	<p class="styleparag">les liens paramétré , Créer une seconde feuilles de style externe alternative, puis tester les liens paramétrés de type 
	<strong style="background-color: gray;">&#60;a href="page.php?style=alternatif"&#62;</strong>en récupérant l’information utile dans le tableau super-global <strong style="background-color: gray;">« $_GET »</strong>.</p>
	<p style="opacity:0.7; width:21%; margin-left:40%; background-color: red;"><strong>Combinaison possible :</strong></p>		
		<a style="padding-right: 10%;" href="td8.php?style=bleu#exo3"><img style="border: 2px solid black; margin-left: 40%; " src="../images/bleu.PNG" alt="bleu" height="40" width="40"></a>
		<a href="td8.php?style=blanc#exo3"><img style="border: 2px solid black;" src="../images/blanc.PNG" alt="blanc" height="40" width="40"></a>
		
		<a style="padding-right: 10%;" href="td8.php?lang=fr#exo3"><img style="border: 2px solid black; margin-left: 40%; background-color: white;" src="../images/fr.png" alt="rose" height="40" width="40"></a>
		<a href="td8.php?lang=en#exo3"><img style="border: 2px solid black;background-color: white;" src="../images/en.png" alt="blanc" height="40" width="40"></a>
		
		<a style="padding-right: 10%;" href="td8.php?lang=fr&style=bleu#exo3"><img style="border: 2px solid black; margin-left: 40%; background-color: #0E8BCA;" src="../images/fr.png" alt="rose" height="40" width="40"></a>
		<a href="td8.php?lang=en&style=bleu#exo3"><img style="border: 2px solid black; background-color: #0E8BCA	;" src="../images/en.png" alt="blanc" height="40" width="40"></a>	
		<div style="opacity:0.9; width:25%;margin-left: 38%; background-color: red;">
			<?php
					applyLanguage();
			?>
		</div>	
		
	</article>
	</section>
	
	<section id="exo4"><h2 style="text-indent: 20px;font-style: italic;font-size: 18px;">Exercice n°4 :</h2>
	<article style="height: 95%;width: 73%;"><h3 style="text-indent: 20px;font-style: italic;font-size: 22px;"> tableaux PHP et tableaux HTML:</h3>
	<div class='calendar' id="todetcalender">
	<p class="styleparag">Écrire une fonction qui affiche un mois (le numéro du mois et l'année seront passés en paramètre. 
	Par défaut, le mois courant est affiché, et par défaut on considérera l'année courante) sous la forme d'un petit tableau. 
	La date courante sera mise en évidence :</p>
	<?php
		echo monthCalendar(date("n"),date("Y"),false);
	?>
	</div>
	</article>
	</section>
	
	<section id="exo5"><h2 style="text-indent: 20px;font-style: italic;font-size: 18px;">Exercice n°5 :</h2>
	<article style="height: 95%;width: 73%;"><h3 style="text-indent: 20px;font-style: italic;font-size: 22px;"> réutilisation d'une fonction, valeurs par défaut, tests et bouclestableaux PHP et tableaux HTML:</h3>
	<p class="styleparag">Écrire une fonction qui affiche une année (passée en paramètre) soit au format 4 x 3 (par défaut),
	 soit dans un autre format (liste des formats possibles à définir). 
	 L'année sera complète si elle est précisée et partielle si elle est absente (dans ce cas, sur 3 mois avec le mois courant "au milieu" ex. 
    : Février + Mars + Avril si la date est en Mars). exemple :</p>
    <ul class="styleparag">
		<li>f() affiche 3 mois avec le mois courant </li>
		<li>f(2014) affiche l'année complète au format 4 x 3</li>
		<li>f(2014, 6) affiche l'année complète au format 6 x 2 </li>    
    </ul>
	<div class='year' style='overflow: auto;'>
	<div style="padding-bottom: 5%;">
		<form style="margin-left: 35%; font-style: italic;" name="inscription" method="post" action="td8.php#exo5">
			Année : <input style="width: 7%; margin-right: 3%;" type="text" name="annee" title="Année"/>
			x <input style="width: 3%; margin-left: 3%;" type="text" name="display" title="Display"/>
			<input type="submit" name="valider" value="OK"/>
      </form>	
	</div>
	<?php
	if(isset($_POST['annee'])){
		$annee=$_POST['annee'];
		$display=$_POST['display'];
		
		if($display==0 && $annee==0){
			echo year();
		}
		elseif($display==0) {
			echo year($annee);
		}
		else {
			echo year($annee,$display);
		}
	}
	?>
	</div>
	</article>
	</section>
	
<?php
	include_once"../include/footer.inc.php";
?>