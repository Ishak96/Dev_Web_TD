<?php
	function boucle($var) {
		
			$liste="<ul>";
				for($i=1;$i<=$var;$i++) {
					$liste.="<li>hello numéro ".$i."</li>";
				}		
			$liste.="</ul>";
			
			return $liste;
	}
	function multiplication($max) {
		$saut="\n";
		$table="<table style='margin-left: 25%;'>".$saut;
		$table.="<tr>".$saut;
		for($i=0;$i<=$max;$i++) {
			if($i==0){
				$table.="<th>X</th>".$saut;
			}else{
				$table.="<th>".$i."</th>".$saut;
			}		
		}
		$table.="</tr>".$saut;
		$fixed=1;
		for($i=1;$i<=$max;$i++) {
			$table.="<tr>".$saut;	
			for($j=0;$j<=$max;$j++) {
				if($j==0){
					$table.="<td>".$fixed."</td>".$saut;
					$fixed++;
				}else{
					$multi=$i*$j;
					$table.="<td>".$multi."</td>".$saut;
				}
			}
			$table.="</tr>".$saut;
		}
		$table.="</table>".$saut;
		
		return $table;
	}
	
	function hexa($last) {
		$saut="\n";
	$table="<table>".$saut;
		$table.="<tr>".$saut;
			$table.="<th>décimale</th>".$saut;
		for($i=0;$i<=$last;$i++){
			$table.="<th>".$i."</th>".$saut;
		}
		$table.="</tr>".$saut;
		$table.="<tr>".$saut;
			$table.="<td>hexadécimale</td>".$saut;
		for($i=0;$i<=15;$i++){
			$hexa=dechex($i);
			$table.="<td>".$hexa."</td>".$saut;
		}
		$table.="</tr>".$saut;
	$table.="</table>".$saut;	
	return $table;
	}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Les Bases Du Langage PHP</title>
<meta charset="utf-8"/>
<link rel="stylesheet" href="../css/styletd5.css" />
<?php
	include_once"../include/util.inc.php";
	echo applyStyle();
	
	echo check_cookies();
?>
<link rel="shortcut icon" href="../images/Web.png" type="images/png" />
<style>
.logoclass{
	padding-top: 1%;
	margin-left: 1%;
	padding-bottom: 0%;
}
.logoclass h2{
	font-size: 18px; 
	color: white; 
	margin-left: 40%;
	position: absolute;
	padding-top: 1%;
	margin-top: 6%;
	margin-left: 80%;
}
.logoclass h1{
	color: white; 
	margin-left: 27%;
	position: absolute;
	padding-top: 1%;
}
.center{
	margin-left: 15%;
}
.verticalline{
	background-color: red;
	height: 10px;
	width: 3px;
}
#imagecenter img{
	margin-right: 30%;
}
section h2{
	color: white;
}
.text-wrapper{
	width: 100%;
	position: relative;
	margin-top: -35%;
	margin-right: 20%;
}
.text-wrapper h4{
	text-align: center;
	margin-right: 43%;
	color: blue;
	font-size: 25px;
}
</style>
</head>
<body>
	<header id="head">
		<div class="logoclass">
			<h1>Développement Web : PHP - introduction</h1>
			<h2>Les rendu de AYAD Ishak</h2>
			<a href="https://www.u-cergy.fr/fr/index.html"><img src="../images/cergylogo.png" alt="Cergy université" height="120" width="250"></a>
		</div>
	</header>
	<nav>
		<ul>
			<li><a href="../index.php">Accueil</a></li>
			<li><a href="td5.php">TD n°5</a></li>
			<li><a href="../td6/td6.php">TD n°6</a></li>
			<li><a href="../td7/td7.php">TD n°7</a></li>
			<li><a href="../td8/td8.php">TD n°8</a></li>
			<li><a href="../td9/td9.php">TD n°9</a></li>
			<li><a href="../td10/td10.php">TD n°10</a></li>
			<li><a href="../td11/td11.php">TD n°11</a></li>	
			<li><a href="../tds/pageunderconstruction.html">TD n°12</a></li>		
		</ul>
	</nav>
	<div class="menu" id="manuposition">
		<ul style="margin-top: 4%;">
			<li style="background-color: transparent;"><a href="#"><img src="../images/home.png" alt="home" height="30" width="30"></a>
				<ul class="submenu">
					<li><a href="#exo1">Exercice n°1</a></li>
					<li><a href="#exo2">Exercice n°2</a></li>
					<li><a href="#exo3">Exercice n°3</a></li>
					<li><a href="#exo4">Exercice n°4</a></li>
					<li><a href="#exo5">Exercice n°5</a></li>
					<li><a href="#exo6">Exercice n°6</a></li>
				</ul>			
			</li>
		</ul>	
	</div>
	<section id="exo1"><h2 style="	text-indent: 20px;font-style: italic;font-size: 18px;">Exercice n°1 :</h2>
	<article style="height: 95%;"><h3 style="text-indent: 20px;font-style: italic;font-size: 22px;">boucles et PHP-INFO:</h3>
	<p>Cette page affiche alors une liste complète des fonctionnalités disponibles sur votre hébergeur et notamment les versions de PHP et de MySQL actuellement en place.</p>
	<ul><li style="list-style-type: none; margin-left: 40%;"><a href="./phpinfo.php"><img src="../images/php.png" height="30" width="50" alt="php logo"></a></li></ul>
	<p class="styleparag">principe : for (initialisation; test; incrémentions ){...}: initialisation est exécuté une seule fois avant toutes les boucles,
	 test est vériﬁé avant chaque boucle, incrémentions est exécuté après chaque boucle (de ce fait une boucle for peut ne jamais être exécutée).</p>
	<?php
		echo boucle(20);
	?>
	</article>
	</section>
	<section id="exo2"><h2 style="	text-indent: 20px;font-style: italic;font-size: 18px;">Exercice n°2 :</h2>
	<article style="height: 80%;"><h3 style="text-indent: 20px;font-style: italic;font-size: 22px;">fonction prédéfinie :</h3>
	<p class="styleparag">Avec PHP il est fort simple d'afficher la date du jour mais aussi de savoir quel jour nous serons dans 432 jours et réciproquement dans le passé</p>
	<p class="styleparag">C'est donc la fonction date() qui permet d'obtenir l'heure locale du serveur, mais attention l'heure locale est fonction de la situation géographique du serveur en lui-même. 
	En effet un serveur situé au canada vous donnera l'heure du Canada !</p>
	<?php
		$datetime = date("H:i:s");
		echo"<h3 style='margin-left: 32%;'>date du serveur :</h3>";
		echo"<figure style='margin-left: 25%;'>";
		echo"<img src='../images/dateser.jpg' alt='horloge image' height='250' width='250'/>";
		echo"<div class='text-wrapper'>";
		echo"<h4>".$datetime."</h4>";
		echo"</div>";
		echo"<figcaption style='font-size: 18px;margin-left: 19%;font-style: italic;padding-top: 13%;'>server time</figcaption>";
		echo"</figure>";
	?>
	</article>
	</section>
	<section id="exo3"><h2 style="	text-indent: 20px;font-style: italic;font-size: 18px;">Exercice n°3 :</h2>
	<article style="height: 50%;"><h3 style="text-indent: 20px;font-style: italic;font-size: 22px;"> fonctions prédéfinies et boucles :</h3>
	<p class="styleparag">Premier méthode : l'utilisation des tableau et la fonction prédéfinit dechex.</p>
	<?php
	echo hexa(15);
	echo"<p class='styleparag'>Deuxième méthode : l'utilisation de la fonction prédéfinit printf.</p>";
	echo"<div class='center'>";
		for($i=0;$i<2;$i++) {
			if($i == 0){
				printf("décimale :&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;");
			}else{
				printf("hexadécimale :&nbsp;");
			}
			for($j=0;$j<=15;$j++) {
				if($i==0){
					printf($j." &nbsp;");
				}else {
					printf("%X &nbsp; ",$j);
				}
			}
			echo"<br >";
	}
	echo"</div>";
	?>
	</article>
	</section>
	<section id="exo4"><h2 style="	text-indent: 20px;font-style: italic;font-size: 18px;">Exercice n°4 :</h2>
	<article style="height: 70%;"><h3 style="text-indent: 20px;font-style: italic;font-size: 22px;"> boucles PHP + tableau HTML (table / tr / th / td) :</h3>
	<p class="styleparag">Pour cet exercice on doit bien savoir manipulé les tableau HTML et de bien manipuler les Boucles,
	pour réaliser une structure qui nous permet de définir une table de multiplication puis on englobe cet structure en une fonction,
	Pour que ce dernier puisse nous donne n'importe quelle table de multiplication bornée par un chiffre.</p>
	<?php
		echo multiplication(10);
	?>
	</article>
	</section>
	<section id="exo5"><h2 style="	text-indent: 20px;font-style: italic;font-size: 18px;">Exercice n°5 :</h2>
	<article style="height: 70%;"><h3 style="text-indent: 20px;font-style: italic;font-size: 22px;"> conversions ASCII :</h3>
	<p class="styleparag">La norme ASCII est largement utilisée en informatique pour coder les caractères. 
	Ce nom provient de l'acronyme anglais "American Standard Code for Information Interchange" qui signifie en français "Code américain normalisé pour l'échange d'information"</p>
	<p class='styleparag'>La premier méthode l'utilisation de <strong>hexdec</strong>+<strong>chr</strong> :</p>
		<div style="margin-left: 20%; padding-top: 0%;">
		<?php
			echo"<ul>";
			echo"<li>";			
			echo "Ox41 = ".hexdec(41)." = ".chr(hexdec(41));
			echo "</li>";
			echo "<li>";
      	echo "Ox2B = ".hexdec("2B")." = ".chr(hexdec("2B"));
			echo "</li>";
			echo"</ul>";		
		?>
	</div>
	<p class='styleparag'>La deuxième méthode l'utilisation de <strong>dechex</strong>+<strong>ord</strong> :</p>
		<div style="margin-left: 20%; padding-top: 0%;">
		<?php
			echo"<ul>";
			echo"<li>";			
			echo "A = ox".dechex("65")." = ".ord("A");
			echo "</li>";
			echo "<li>";
      	echo "B = ox".dechex("43")." = ".ord("+");
			echo "</li>";
			echo"</ul>";		
		?>
	</div>
	</article>
	</section>
	<section id="exo6"><h2 style="	text-indent: 20px;font-style: italic;font-size: 18px;">Exercice n°6 :</h2>
	<article style="height: 90%;"><h3 style="text-indent: 20px;font-style: italic;font-size: 22px;"> boucles PHP, fonctions prédéfinies et tableau HTML :</h3>
		<?php
		echo"<table style='margin-left: 25%;' id='tableblue'>";
			echo"<tr>";
				echo"<th>binaire</th>";
				echo"<th>octal</th>";
				echo"<th>décimal</th>";
				echo"<th>hexadécimal</th>";
			echo"</tr>";
			for($i=0;$i<=17;$i++) {
				$bin=decbin($i);
				$oct=decoct($i);
				$hex=dechex($i);
			echo"<tr>";
				if($i==0 || $i==1){
					echo"<td>0000000".$bin."</td>";
				}elseif($i>1 && $i<=3) {
					echo"<td>000000".$bin."</td>";
				}elseif($i>3 && $i<=7) {
					echo"<td>00000".$bin."</td>";
				}elseif($i>7 && $i<=15) {
					echo"<td>0000".$bin."</td>";	
				}else {
					echo"<td>000".$bin."</td>";
				}	
				if($oct<10) {	
					echo"<td>0".$oct."</td>";
				}else{
					echo"<td>".$oct."</td>";
				}
				if($i<10){
					echo"<td>0".$i."</td>";
				}else {
					echo"<td>".$i."</td>";
				}
				if($hex<10 || $hex=='a' || $hex=='b' || $hex=='c' || $hex=='d' || $hex=='e' || $hex=='f') {
					echo"<td>0".$hex."</td>";
				}else {
					echo"<td>".$hex."</td>";	
				}
			echo"</tr>";
			}
		echo"</table>";
		?>
	</article>
	</section>
	<footer style="height: 12%">	
		<p class="positionAuteurDate">Auteur : <strong>Ayad Ishak</strong></p>
		<ul>
			<li><a href="https://cours.u-cergy.fr/user/profile.php?id=8810"><img src="../images/cergy.png" height="30" width="30" alt="Cergy logo"></a></li>
			<li><a href="mailto:ishakayad96@outlook.fr"><img src="../images/mailto.png" height="30" width="30" alt="mail"/></a></li>
			<li><a href="https://www.facebook.com/profile.php?id=100009990018834"><img src="../images/facebook.png" height="30" width="30" alt="facebook"></a></li>	
		</ul>
	</footer>
</body>
</html>
