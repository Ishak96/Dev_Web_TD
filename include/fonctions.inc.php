<?php
	/*Constante utiliser pour l'execice n°2!*/
	define("MAX_NUM","128");
	
	/**
	*cette fonction nous retourne la table de multiplication
	*@param $max (Entier)
	*$table un tableaux HTML
	*/
	
	function multiplication($max) {
		$saut="\n";
		$tab="\t";
		/**la valeur table ==> "stock" les élément de notre tableaux*/
		$table=$tab."<div class='multi' id='tableblue'>".$saut;
		$table.=$tab."<table>".$saut;
		$table.=$tab.$tab."<tr>".$saut;
		
		/*les valeurs fixe sur note tableaux*/
		for($i=0;$i<=$max;$i++) {
			if($i==0){
				$table.=$tab.$tab.$tab."<th>X</th>".$saut;
			}
			else{
				$table.=$tab.$tab.$tab."<th>".$i."</th>".$saut;
			}		
		}
		$table.=$tab.$tab."</tr>".$saut;
		
		/*les valeurs fixé sur la verticale qui change chaque tour*/
		$fixed=1;
		for($i=1;$i<=$max;$i++) {
			$table.=$tab.$tab."<tr>".$saut;	
			for($j=0;$j<=$max;$j++) {
				if($j==0){
					$table.=$tab.$tab.$tab."<td style='background-color: #1E90FF; color: black;'>".$fixed."</td>".$saut;
					$fixed++;
				}
				else{
					$multi=$i*$j;
					$table.=$tab.$tab.$tab."<td>".$multi."</td>".$saut;
				}
			}
			$table.=$tab.$tab."</tr>".$saut;
		}
		$table.=$tab."</table>".$saut;
		$table.="</div>".$saut;
		
		return $table;
	}
	
	/**
	*cette fonction nous permet d'afficher la table ascii
	*@return $table un tableaux HTML
	*/
	
	function asciiTabel(){
		$saut="\n";
		$tab="\t";
		
		$table="<div class='ascii'>".$saut;
		$table.=$tab."<table>".$saut;
		$table.=$tab.$tab."<tr>".$saut;
		$table.=$tab.$tab."<th> </th>".$saut;
		
		/* l'idée est de trouve la valeur ascii des 15 premier nombre et de faire un en-tête du tableaux avec*/
		for($k=0;$k<=15;$k++){
			$hex = dechex($k);
			$table.=$tab.$tab.$tab."<th>$hex</th>".$saut;
		}
		$table.=$tab.$tab."</tr>".$saut;
		
		/*puis on génère le code ascii des 5 premier chiffre en partant de 2*/
		for($i=2;$i<=7;$i++){
			$table.=$tab.$tab."<tr>".$saut;
			
		/*pour le verticale du tableaux*/
			$table.=$tab.$tab.$tab."<td>$i</td>".$saut;
			for($j=0;$j<=15;$j++){
				
				/*générations du code ascii*/
				$jhex=dechex($j);
				$val="$i"."$jhex";
				$asci=chr(hexdec($val));
				
				/*on fait des petit test sur les valeurs ascii pour traiter le visuelle et afficher la table décrite avec
				le couleurs précisé */
				if($asci>='0' && $asci<='9'){
					$table.=$tab.$tab.$tab."<td class='colorred'>$asci</td>".$saut;
				}
				elseif($asci>='A' && $asci<='Z'){
					$table.=$tab.$tab.$tab."<td class='colorgreen'>$asci</td>".$saut;
				}
				elseif ($asci>='a' && $asci<='z') {
					$table.=$tab.$tab.$tab."<td class='colorblue'>$asci</td>".$saut;
				}
				elseif($asci=='>'){
					
					/*le cas de la valeur >*/
					$table.=$tab.$tab.$tab."<td class='othercolor'>&gt;</td>".$saut;
				}
				elseif ($asci=='<'){
					
					/*le cas de la valeur <*/
					$table.=$tab.$tab.$tab."<td class='othercolor'>&lt;</td>".$saut;
				}
				elseif ($val=="7f"){
					
					/*le DEL ne peut pas être afficher sur HTML 5*/
					$table.=$tab.$tab.$tab."<td class='othercolor'>del</td>".$saut;
				}
				else{
					$table.=$tab.$tab.$tab."<td class='othercolor'>$asci</td>".$saut;
				}	
			}
			$table.=$tab.$tab."</tr>".$saut;
		}
		$table.=$tab."</table>".$saut;
		$table.="</div>".$saut;
		
		/*la valeur de retour et un tableaux ASCII qu'on l'afficheras*/
		return $table;
	}
	
	/**
	*cette fonction nous permet d'afficher la Web plate
	*@return $table un tableaux HTML
	*/
	
	function safeWebPlate() {
		
		/*variables utiliser pour réalisée des saut de ligne et des espace 
		pour rendre le code plus lisible*/
		$saut="\n";
		$tab="\t";
		$table="<div id='plate'>".$saut;
		$table.=$tab."<table>".$saut;
		$table.=$tab.$tab."<tr>".$saut;
		
		/*je sauvegarde au début les six principaux chiffres pèsent dans la plate web pour les utiliser plus tard*/
		$clorTab=array('00','33','66','99','CC','FF');
		
		/*une variable "whiteCol" utiliser dans l'algorithme pour afficher la couleur du font en blanc pour chaque ligne!*/
		$whiteCol=6;
		
			/*l'idée est de diviser notre tableau en deux blocs */
			for($i=0; $i<6; $i++){
				$toColor=$whiteCol;
				for($j=0; $j<6; $j++){
					//si notre j est un chiffre paire inférieure a 6 alors on close note premier ligne du tableau et on ouvre une nouvelle
					
					if(($i!=0) && ($j==0) || ($j==2) || ($j==4)) {
						$table.=$tab.$tab."</tr>".$saut;
						$table.=$tab.$tab."<tr>".$saut;
					}
					for($k=0; $k<6; $k++) {
						
						/*gestion de la couleur du texte si l'indice k qui parcours les valeur 
						de la plate web et inférieure a note valeur décrit précédemment alors on mets du blanc*/
						if($k<$toColor){
							$color="#".$clorTab[$i].$clorTab[$j].$clorTab[$k];
							$table.=$tab.$tab.$tab."<td style='color:white; background-color:".$color."'>".$color."</td>".$saut;
						}
						/*si non noire */
						else {
							$color="#".$clorTab[$i].$clorTab[$j].$clorTab[$k];
							$table.=$tab.$tab.$tab."<td style='color:black; background-color:".$color."'>".$color."</td>".$saut;
						}
					}
					$toColor=$toColor-1;	
				}
				
				/*décrémentation de nombres de cases en texte blanc*/
				$whiteCol=$whiteCol-1;
			}
		$table.=$tab.$tab."</tr>".$saut;
		$table.=$tab."</table>".$saut;
		$table.="</div>";
		
		/*la valeur de retour et un tableaux remplie qu'on affichera*/
		return $table;
	}
	
	/**
	*cette fonction nous retourne la table d'enumeration en colonne
	*@param $max (Entier)
	*@return $table un tableaux HTML
	*/
	
	function enumTabColonne($max=17) {
		
		/*un tableau qui contient les quatre valeurs(binaire,octal,...*/
		$enum = array("binaire","octal","décimal","hexadécimal");
		$saut="\n";
		$tab="\t";
		$table="<div class='multi' >".$saut;
		$table.=$tab."<table>".$saut;
		$table.=$tab.$tab."<tr>".$saut;
			
			for($i=0; $i<4; $i++){
				$table.=$tab.$tab.$tab."<th style='background-color: #1E90FF; color: black;'>".$enum[$i]."</th>".$saut;
			}		
			
		$table.=$tab.$tab."</tr>".$saut;
		
			for($i=0;$i<=$max;$i++) {
				
				/*base_convert — Convertit un nombre entre des bases arbitraires*/
				$bin=base_convert($i,10,2);
				$oct=base_convert($i,10,8);
				$hex=base_convert($i,10,16);

				$bin_8bits="";
				$oct_2bits="";
				$hex_2bits="";
				$i_2bits="";
				
				/*strlen — Calcule la taille d'une chaîne*/
				for($k=0;$k<(8-strlen($bin));$k++){
					$bin_8bits.="0";
					if($k<1 && $i<16){
						$hex_2bits.="0";
					}
					if($k<1 && $i<10){
						$i_2bits.="0";
					}
					if($k<1 && $i<8){
						$oct_2bits.="0";
					}
				}
				
				$bin_8bits.=$bin;
				$oct_2bits.=$oct;
				$i_2bits.=$i;
				$hex_2bits.=$hex;
			

				$table.=$tab.$tab."<tr>";
				$table.=$tab.$tab.$tab."<td>"; $table.="$bin_8bits"; $table.="</td>".$saut;
				$table.=$tab.$tab.$tab."<td>"; $table.="$oct_2bits"; $table.="</td>".$saut;
				$table.=$tab.$tab.$tab."<td>"; $table.="$i_2bits"; $table.="</td>".$saut;
				$table.=$tab.$tab.$tab."<td>"; $table.="$hex_2bits"; $table.="</td>".$saut;
				$table.=$tab.$tab."</tr>".$saut;
			}
			
		$table.=$tab."</table>".$saut;
		$table.="</div>".$saut;
		
		return $table;
	}
	
	/**
	*cette fonction nous retourne la table d'enumeration en ligne
	*@param $max (Entier)
	*@return $table un tableaux HTML
	*/
	
	function enumTabLigne($max=17) {
		$saut="\n";
		$tab="\t";
		$table="<div class='enum'>".$saut;
		$table.=$tab."<table>".$saut;
		
			for($j=0;$j<4;$j++){
				$table.=$tab.$tab."<tr>".$saut;
				if($j==0){
					$table.=$tab.$tab.$tab."<td style='background-color: #1E90FF; color: black;'>binaire</td>".$saut;
				}
				elseif($j==1) {
					$table.=$tab.$tab.$tab."<td style='background-color: #1E90FF; color: black;'>octal</td>".$saut;
				}
				elseif($j==2) {
					$table.=$tab.$tab.$tab."<td style='background-color: #1E90FF; color: black;'>décimal</td>".$saut;
				}
				else {
					$table.=$tab.$tab.$tab."<td style='background-color: #1E90FF; color: black;'>hexadécimal</td>".$saut;
				}
				
				for($i=0;$i<=$max;$i++) {
					
					/*decbin — Convertit de décimal en binaire*/
					$bin=decbin($i);
					
					/*decoct — Convertit de décimal en octal*/
					$oct=decoct($i);
					
					/*dechex — Convertit de décimal en hexadécimal*/
					$hex=dechex($i);
					if($j==0){
						if($i==0 || $i==1){
							$table.=$tab.$tab.$tab."<td>0000000".$bin."</td>".$saut;
						}
						elseif($i>1 && $i<=3) {
							$table.=$tab.$tab.$tab."<td>000000".$bin."</td>".$saut;
						}
						elseif($i>3 && $i<=7) {
						$table.=$tab.$tab.$tab."<td>00000".$bin."</td>".$saut;
						}
						elseif($i>7 && $i<=15) {
						$table.=$tab.$tab.$tab."<td>0000".$bin."</td>".$saut;	
						}
						else {
							$table.=$tab.$tab.$tab."<td>000".$bin."</td>".$saut;
						}
					}
					elseif($j==1) {
						if($oct<10) {	
							$table.=$tab.$tab.$tab."<td>0".$oct."</td>".$saut;
						}
						else{
							$table.=$tab.$tab.$tab."<td>".$oct."</td>".$saut;
						}
					}
					elseif($j==2) {
						if($i<10){
							$table.=$tab.$tab.$tab."<td>0".$i."</td>".$saut;
						}
						else {
							$table.=$tab.$tab.$tab."<td>".$i."</td>".$saut;
						}
					}
					else {
						if($hex<10 || $hex=='a' || $hex=='b' || $hex=='c' || $hex=='d' || $hex=='e' || $hex=='f') {
							$table.=$tab.$tab.$tab."<td>0".$hex."</td>".$saut;
						}
						else {
							$table.=$tab.$tab.$tab."<td>".$hex."</td>".$saut;	
						}
					}
				}
				
				$table.=$tab.$tab."</tr>".$saut;
		}
		$table.=$tab."</table>".$saut;
		$table.="</div>".$saut;
		return $table;
	}
	
	/**
	*cette fonction effectue un teste sur la valeur passé "max" et la constante définie, aussi sur le cois de l'affichage 
	*@param $max, $display (Entier, chaîne de caractères)
	*@return $fonction($max) appelle de la fonction avec le display choisie
	*/
	
	function enumTab($max,$display="Colonne") {
		
		/*Constante*/
		if($max>constant("MAX_NUM")){
				$goUntil = constant("MAX_NUM");
		}
		else{
				$goUntil = $max;
		}
		
		/*appelle de la fonction*/
		$function = "enumTab".$display;
		return $function($goUntil);
	}
	
	/**
	*appelle dynamiques des fonction
	*@param $name, $max (chaîne de caractères, Entier)
	*@return $fonction($max) appelle de la fonction choisie 
	*/
	
	function choose($name, $max) {
		switch($name) {
			case "table de multiplication":
				$fonction="multiplication";
			break;
			case "table ASCII":
				$fonction="asciiTabel";
			break;
			case "bases de numération":
				$fonction="enumTabColonne";
			break;
			case "palette Web":
				$fonction="safeWebPlate";
			break;
		}
		return $fonction($max);
	}
	
	/**
	*cette fonction Affiche n fois "hello numéro i" (en remplacent i par le numéro du message, de 1 à 20) dans une liste
	*@param $until (Entier)
	*@return $liste une liste HTML
	*/
	
	function boucles($until) {
		
		$liste="<ul style='border-left: 1px dashed black; margin-left: 30%;'>";
		
		for($i=1;$i<=$until;$i++) {
			$liste.="<li>hello numéro ".$i."</li>";
		}		
		
		$liste.="</ul>";
		return $liste;
	}
	
	/**
	*cette fonction Affiche l'heure du serveur en utilisant la fonction date( ).
	*@return $paragraphe (l'ensemble du code HTML regroupant le résultat)
	*/
	
	function servertime() {
		
		$datetime = date("H:i:s");
		$paragraphe="<h3 style='margin-left: 32%;'>date du serveur :</h3>";
		$paragraphe.="<figure style='margin-left: 25%;'>";
		$paragraphe.="<img src='../images/dateser.jpg' alt='horloge image' height='250' width='250'/>";
		$paragraphe.="<div class='text-wrapper'>";
		$paragraphe.="<h4>".$datetime."</h4>";
		$paragraphe.="</div>";
		$paragraphe.="<figcaption style='font-size: 18px;margin-left: 19%;font-style: italic;padding-top: 13%;'>server time</figcaption>";
		$paragraphe.="</figure>";
		
		return $paragraphe;
	}

	/**
	*Affiche, les chiffres hexadécimaux de 0 a F (en explorent la fonctions PHP dechex( ))
	*@param $last (Entier)
	*@return $table un tableaux HTML	
	*/
	
	function hexaTable($last) {
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
		
		for($i=0;$i<=$last;$i++){
			$hexa=dechex($i);
			$table.="<td>".$hexa."</td>".$saut;
		}
		
		$table.="</tr>".$saut;
		$table.="</table>".$saut;
			
		return $table;
	}

	/**
	*écrit, les chiffres hexadécimaux de 0 a F (en explorent la fonctions PHP printf( ))
	*/
	
	function hexaPrintf() {
		
		echo"<div class='center'>";
		
		for($i=0;$i<2;$i++) {
			if($i == 0){
				echo"<p>décimale :</p>";
			}
			else{
				echo"<p>hexadécimale :</p>";
			}
			
			for($j=0;$j<=15;$j++) {
				if($i==0){
					printf($j." &nbsp;");
				}
				else {
					printf("%X &nbsp; ",$j);
				}
			}
		}
		
		echo"</div>";
	}
	
	/**
	* conversions ASCII
	*@return $liste une liste HTML
	*/
	
	function  conversionsASCII() {
		
		$liste="<ul style='margin-left: 30%;'>";
		$liste.="<li>Ox41 = ".hexdec(41)." = ".chr(hexdec(41))."</li>";
		$liste.="<li>Ox2B = ".hexdec("2B")." = ".chr(hexdec("2B"))."</li>";
		$liste.="</ul>";
		
		$liste.="<ul style='margin-left: 30%;'>";
		$liste.="<li>A = ox".dechex("65")." = ".ord("A")."</li>";
		$liste.="<li>B = ox".dechex("43")." = ".ord("+")."</li>";
		$liste.="</ul>";
		
		return $liste;
	}
	
	/**
	*cette fonction  affiche toute une page HTML (contenant les exercices 1 à 4 du TD 5) à la manière de phpinfo();	
	*/
	
	function td5info() {
		
		include_once"../include/fonctions.inc.php";
		include_once"../include/util.inc.php";
		include_once"../include/outille.inc.php";
		
		/*génération du titre de la page WEB*/
		echo titlePage("TD5info");
		
		/*header*/
		include_once"../include/header.inc.php";
		
		echo headerPage("fonctions et construction multi-fichiers");
		
		/*génération du menu principale et de navigation de la page WEB*/
		echo menuPage(10);
		echo menuNavigation(0,"Oui");
		
		echo "<section id='exo0'><h2 style='text-indent: 20px;font-style: italic;font-size: 18px;'>Exercice n°0 :</h2>";
		echo "<article style='height: 95%;width: 60%;'><h3 style='text-indent: 20px;font-style: italic;font-size: 22px;'>fonctions et construction multi-fichiers</h3>";
	
		echo"<h3 style='margin-left: 3%; width: 17%; color: black; border-bottom: 1px solid black;'>Exercice n°1:</h3>";
		echo boucles(20);
		
		echo"<h3 style='margin-left: 3%; width: 17%; color: black; border-bottom: 1px solid black;'>Exercice n°2</h3>";
		echo servertime();
		
		echo"<h3 style='margin-left: 3%; width: 17%; color: black; border-bottom: 1px solid black;'>Exercice n°3</h3>";
		echo hexaTable(15);
		hexaPrintf();
		
		echo"<h3 style='margin-left: 3%; width: 17%; color: black; border-bottom: 1px solid black;'>Exercice n°4</h3>";
		echo multiplication(10)	;
	
		echo"</article>";
		echo"</section>";
		
		include_once"../include/footer.inc.php";
	}
?>