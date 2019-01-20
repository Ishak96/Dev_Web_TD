<?php

	/**
	*fonction qui retourne la date du jour en français par défaut, 
	et en anglais (format US) si un paramètre correspondant (« fr » respectivement « en ») 
	*@param $lang (chaîne de caractères) qui définit le langages souhaité 
	*@return $date(chaîne de caractères) qui stock le résultat sous forme de paragraphe
	*/
	
	function dateDay($lang="fr") {
		
		/*Les quatre tableau utiliser  en Française et en Anglais*/
		$Jours=array(1=>'Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche');
		$Mois=array(1=>'Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre');
		$Days=array(1=>'Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday');
		$Mounths=array(1=>'January','February','March','April','May','June','July','August','September','October','November','December');
		
		$date = "<p class='positionAuteurDate'>";	
		
		/*petit teste sur la valeur passé en paramètre*/
			if($lang=="fr") {	
				$date .= $Jours[date("N")]." ".date("d")." ".$Mois[date("n")]." ".date("Y");
			}
			else {
				$date .= $Days[date("N")].",".date("d").",".$Mounths[date("n")].",".date("Y");
			}
		$date .= "</p>";
		
		return $date;		
	}
	
	/**
	*cette fonction identifie le navigateur de l’internaute et la plat forme 
	*@return $nav (chaîne de caractères) le résultat sous forme de paragraphe 
	*/
	
	function userNavigateur() {
		/*$_SERVER -- $HTTP_SERVER_VARS [Supprimé] — Variables de serveur et d'exécution*/
		$u_agent = $_SERVER['HTTP_USER_AGENT']; 
		$bname = 'Unknown';
		$platform = 'Unknown';
		
		/*preg_match — Effectue une recherche de correspondance avec une expression rationnelle standard*/		
		//la plat forme?
		if (preg_match('/linux/i', $u_agent)) {
			$platform = 'linux';
		}	 
		elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
			$platform = 'mac';
		}
		elseif (preg_match('/windows|win32/i', $u_agent)) {
 			$platform = 'windows';
		}
    
		// La version du navigateur?
		if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent)) { 
			$bname = 'Internet Explorer'; 
		} 
		elseif(preg_match('/Firefox/i',$u_agent)) { 
			$bname = 'Mozilla Firefox'; 
		} 
		elseif(preg_match('/Chrome/i',$u_agent)) { 
			$bname = 'Google Chrome';  
		} 
		elseif(preg_match('/Safari/i',$u_agent)) { 
			$bname = 'Apple Safari'; 
		} 
		elseif(preg_match('/Opera/i',$u_agent)) { 
			$bname = 'Opera'; 
		} 
		elseif(preg_match('/Netscape/i',$u_agent)) { 
			$bname = 'Netscape'; 
		} 
		
		/*mise en forme du résultat*/	
		$nav = "<p class='positionAuteurDate'> Votre browser: <strong>".$bname."</strong>, Plate Forme: <strong>".$platform."</strong></p>";

		return $nav;
	}
	
	/**
	*fonction qui récupère (le protocole, TLD, l'organisme, le nom de la machine) d'un URL quelconque passé en paramètre
	*@param $URL (chaîne de caractères)
	*@return $table(chaîne de caractères) qui représente notre tableaux HTML
	*/
	
	function splitProtocole($URL) {
		$saut="\n";
		$tab="\t";
		
		/*parse_url — Analyse une URL et retourne ses composants*/
		$host=parse_url($URL, PHP_URL_HOST);
		/*explode — Coupe une chaîne en segments*/
		$hostComponents=explode('.',$host);
		/*tableaux php utilisé pour bien illustré le TLD extrais*/
		$tld = array("com"=>"commercial (.com)","org"=>"organisation (.org)","net"=>"network (.net)",
					"fr"=>"France (.fr)");

		$protocol=parse_url($URL,PHP_URL_SCHEME);
		$engine=$hostComponents["0"];
		$organism=$hostComponents["1"];
		$indexTld=$hostComponents["2"];
		$topLevelDomain=$tld[$indexTld];
		
		/*mise en forme du résultat*/
		$table="<p class='styleparag'>Exemple : <a href='".$URL."'>".$URL."</a></p>".$saut;		

		$table.="<div class='enum' id='proto'>".$saut;
		$table.=$tab."<table>".$saut;
		$table.=$tab.$tab."<tr>".$saut;
		$table.=$tab.$tab.$tab."<th>le protocole</th>".$saut;
		$table.=$tab.$tab.$tab."<th>le nom de la machine</th>".$saut; 
		$table.=$tab.$tab.$tab."<th>l'organisme</th>".$saut;
		$table.=$tab.$tab.$tab."<th>Top Level Domain</th>".$saut;
		$table.=$tab.$tab."</tr>".$saut;		
			
		$table.=$tab.$tab."<tr>".$saut;
		$table.=$tab.$tab.$tab."<td>".$protocol."</td>".$saut;
		$table.=$tab.$tab.$tab."<td>".$engine."</td>".$saut;				
		$table.=$tab.$tab.$tab."<td>".$organism."</td>".$saut;
		$table.=$tab.$tab.$tab."<td>".$topLevelDomain."</td>".$saut;
		$table.=$tab.$tab."</tr>".$saut;
			
		$table.=$tab."</table>".$saut;
		$table.="</div>".$saut;
		
		return $table;
	}
	
	/**
	*cette fonction nous retourne un tableau HTML qui contiens les sept premier valeur octal,binaire,notation numérique
	*@return $table(chaîne de caractères) qui représente notre tableaux HTML	
	*/
	
	function tableTriple(){
		$saut="\n";
		$tab="\t";
		
		/*array utilisé pour les th du tableaux HTML*/
		$thTable=array("Triplet","Nombre binaire","Nombre octal");
		
		/*mise en forme du tableaux*/
		$table="<div style='margin-left: 25%;padding-bottom: 5%;' class='enum' id='proto'>".$saut;
		$table.=$tab."<table>".$saut;
		$table.=$tab.$tab."<tr>".$saut;
		
		/*remplissages des th du tableaux*/
			for($i=0; $i<3; $i++){
				$table.=$tab.$tab.$tab."<th>".$thTable[$i]."</th>".$saut;		
			}
			
		$table.=$tab.$tab."</tr>".$saut;
		
			for($i=0; $i<8; $i++){
				
				/*appelle de la fonction qui convertis l'octal en binaire*/
				$bin=octbin($i);
				
				/*appelle de la fonction qui convertis le binaire en notation numérique*/
				$chmod= binChmod($bin);
				
				$table.=$tab.$tab."<tr>".$saut;
				
				$table.=$tab.$tab.$tab."<td>".$chmod."</td>".$saut;
				$table.=$tab.$tab.$tab."<td>".$bin."</td>".$saut;
				$table.=$tab.$tab.$tab."<td>".decoct($i)."</td>".$saut;
				
				$table.=$tab.$tab."</tr>".$saut;
			}
			
		$table.=$tab."</table>".$saut;
		$table.="</div>".$saut;
			
		return $table;
	}

	/**
	*cette fonctions ne convertie une chaine de caractères passée en paramètres en notation numérique "chmod"
	*@param $octal (une chaîne de caractères) composé de trois valeurs
	*@return $paragraphe (une chaîne de caractères) qui représente le paragraphe a affichée 
	*/	
	
	function chmodValue($octal, $isDiractory) {
		$saut="\n";
		$tab="\t";
		$chmod="";

		for($i=0; $i<3; $i++){
			/*appelle de la fonction qui convertis l'octal en binaire*/
			$bin=octbin($octal[$i]);
			
			/*appelle de la fonction qui convertis le binaire en notation numérique*/
			$chmod.= binChmod($bin);
		}
		if($isDiractory){
			$paragraphe=$tab."<p style='color: darkblue; margin-left:42%;' class='styleparag'>".$octal." => « d ".$chmod." »</p>".$saut;
		}
		else {
			$paragraphe=$tab."<p style='color: darkblue; margin-left:42%;' class='styleparag'>".$octal." => « - ".$chmod." »</p>".$saut;
		}
		return $paragraphe;
	}
	
	/**
	*cette fonction nous converties n'importe quelle valeur de l'octal au binaire 
	*@parm $number (Entier)
	*@return $bin_3bits forme binaire représenter en trois bits
	*/
	
	function octbin($number) {

		$dec = octdec($number);
		$bin = decbin($dec);
		
		$bin_3bits="";
		
		for($k=0;$k<(3-strlen($bin));$k++){
			$bin_3bits.="0";
		}
		
		$bin_3bits.=$bin;
		return $bin_3bits;	
	}
	
	/**
	*cette fonction nous permet de récupérer la notation numérique d'un nombre écrit en base binaire
	*@param $bin un nombre binaire écrit en trois bits
	*@return $chmod (chaine de caractères) qui représente notation numérique
	*/	

	function binChmod($bin) {		
		$chmod="";
		
		for($i=0; $i<3; $i++){
			
			if($bin[$i] == 0){
				$chmod.="-";
			}
			else {
				if($i == 0){
					$chmod.="r";				
				}
				elseif($i == 1) {
					$chmod.="w";
				}
				else {
					$chmod.="x";
				}
			}
		}
		
		$chmod.=" ";
		return $chmod;
	}
	
	/**
	*celle fonction nous revoie un tableau HTML qui représente un calendrier d'un moi dans une année 
	*@param $month (Entier) le moi a affichée $year (Entier) l'année
	*@return $table notre tableaux HTML	
	*/	

	function monthCalendar($month, $year, $alone=true) {
		$saut="\n";
		$tab="\t";
		
		/*deux tableaux PHP utilisée pour récupéré les jours et les mois*/
		$Jours=array(1=>'Lu','Ma','Me','Je','Ve','Sa','Di');
		$Mois=array(1=>'Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre');
		
		/*cal_days_in_month — Retourne le nombre de jours dans un mois, pour une année et un calendrier donné, pour savoir d'ou commence notre moi*/
		$nombresDeJours = cal_days_in_month(CAL_GREGORIAN, $month, $year);
		
		$table=$tab."<table>".$saut;
		
		$table.=$tab.$tab."<thead>".$saut;
		
		if($alone){
			$table.=$tab.$tab.$tab."<tr>".$saut;
			$table.=$tab.$tab.$tab.$tab."<td style='background-color: #9683EC; height: 10%; border-style: none;' colspan='7'>".$year."</td>".$saut;
			$table.=$tab.$tab.$tab."</tr>".$saut;		
		}
		
		$table.=$tab.$tab.$tab."<tr>".$saut;
		$table.=$tab.$tab.$tab.$tab."<td style='background-color: #9683EC; height: 10%; border-style: none;' colspan='7'>".$Mois[$month]."</td>".$saut;
		$table.=$tab.$tab.$tab."</tr>".$saut;
		
		$table.=$tab.$tab."</thead>".$saut;
		
		$table.=$tab.$tab."<tbody>".$saut;
		
		$table.=$tab.$tab.$tab."<tr>".$saut;
		
			for($i=1; $i<=7; $i++){
				$table.=$tab.$tab.$tab.$tab."<th style='background-color: #1E87FF; font-family: sans-serif;'>".$Jours[$i]."</th>".$saut;		
			}
			
		$table.=$tab.$tab.$tab."</tr>".$saut;
		
		/*mktime — Retourne le timestamp UNIX d'une date*/
		$Jour = date("N", mktime(0, 0, 0, $month, 1,$year));
		$actualDay = date("d");
		$i=1;
		
			/*mise en forme du calendrier */
			while($i<=$nombresDeJours) {
				$table.=$tab.$tab.$tab."<tr>".$saut;
				for($j=1; $j<=7; $j++){	
					if($i<=$nombresDeJours && $j>=$Jour){
						if($i==$actualDay && $month == date("m") && $year == date("Y")){
							$table.=$tab.$tab.$tab.$tab."<td style='background-color: red; font-style: italic;'>".$i."</td>".$saut;
						}
						elseif($j==6 || $j==7) {
							$table.=$tab.$tab.$tab.$tab."<td style='background-color: darkgray; font-style: italic;'>".$i."</td>".$saut;
						}
						else {
							$table.=$tab.$tab.$tab.$tab."<td style='font-style: italic;'>".$i."</td>".$saut;
						}
						$i++;
					}
					else {
						$table.=$tab.$tab.$tab.$tab."<td style='border-style: none; opacity: 0.0;'> </td>".$saut;
					}
				}
				$Jour=0;	
				$table.=$tab.$tab.$tab."</tr>".$saut;		
			}
		
		$table.=$tab.$tab."</tbody>".$saut;
				
		$table.=$tab."</table>".$saut;
		
		return $table;
	}
	
	/**
	*cette fonction affiche une année (passée en paramètre) soit au format 4 x 3 (par défaut), soit dans un autre format
	* L'année sera complète si elle est précisée et partielle si elle est absente (dans ce cas, sur 3 mois avec le mois courant "au milieu
	*@param $year(un Entier) représente l'année a représenté $format (un Entier) la forme du calendrier 4*3 6*2
	*@return $table	
	*/	

	function year($year=3, $format=4) {
		$saut="\n";
		$tab="\t";
		
		if($year==3){
			$table=$tab."<table style='border-left: 2px dotted black;'>".$saut;
			$table.=$tab."<caption style='caption-side: bottom; text-align: left;'><em>Illustration 1 :f() => 3 mois (capture du ".date("d/m/Y").")</em></caption>".$saut;
			$table.=$tab.$tab.$tab."<tr>".$saut;
			for($i=-1; $i<2; $i++) {
				$table.=$tab.$tab.$tab.$tab."<td style='vertical-align: text-top; border: 1px solid black;'>".$saut."<div class='calendar'>".$saut.monthCalendar(date("n")+$i,date("Y"),false)."</div></td>".$saut;
			}
				
			$table.=$tab.$tab.$tab."</tr>".$saut;		
		}
		else {
			$table=$tab."<table style='border-left: 2px dotted black;border-bottom: 2px dotted black;'>".$saut;
			if($format == 4){
				$table.=$tab."<caption style='caption-side: bottom; text-align: left;'><em>Illustration 2 :f(".$year.") =>  une année complète au format 4 x 3 par défaut.</em></caption>".$saut;
			}
			else {
				$table.=$tab."<caption style='caption-side: bottom; text-align: left;'><em>Illustration 2 :f(".$year.",".$format.") =>  une année complète au format 6 x 2.</em></caption>".$saut;
			}
			$ligne = 12/$format;
			
			$table.=$tab.$tab.$tab."<tr>".$saut;
			$table.=$tab.$tab.$tab.$tab."<td style='background-color: #9683EC; height: 10%; border-style: none; color: black' colspan=".$format.">".$year."</td>".$saut;
			$table.=$tab.$tab.$tab."</tr>".$saut;
			
			$m=1;
			for($j=0; $j<$ligne; $j++) {
				$table.=$tab.$tab.$tab."<tr>".$saut;
				for($i=0; $i<$format; $i++) {	
					$table.="<td style='vertical-align: text-top; border: 1px solid black;'>".$saut."<div class='calendar'>".$saut.monthCalendar($m,$year,false)."</div></td>".$saut;
					$m++;
				}
				$table.=$tab.$tab.$tab."</tr>".$saut;
			}
		}
		
		$table.=$tab."</table>".$saut;
		
		return $table;
		
	}
	
	/**
 	* fonction permettant de récupérer le nom de la feuille de style passé par url 
 	* et de la lier à la page web. si aucune feuille de style est passée par url, ou cette dernière n'existe pas alors la *feuille de style par défaut est appliquée
 	*/
 	
	function applyStyle($index=false){
		if(!$index) {
			if(isset($_GET['style'])){
				$style = $_GET['style'];
				if($style=="bleu"){
					echo "<link rel='stylesheet' type='text/css' href='../css/styletd8.css' title='rose' />\n";
				}
				elseif($style=="blanc") {
					echo "<link rel='stylesheet' type='text/css' href='../css/style.css' title='blanc' />\n";
				}
			}
		}
		else {
			if(isset($_GET['style'])){
				$style = $_GET['style'];
				if($style=="bleu"){
					echo "<link rel='stylesheet' type='text/css' href='./css/styletd8.css' title='rose' />\n";
				}
				elseif($style=="blanc") {
					echo "<link rel='stylesheet' type='text/css' href='./css/style.css' title='blanc' />\n";
				}
			}
		}		
	}
	
	function check_cookies(){
		session_start();
        if(isset($_COOKIE['style'])){
            if(isset($_GET['style'])){
                if($_COOKIE['style']!=$_GET['style']){
                    unset($_COOKIE['style']);
                    setcookie('style',$_GET['style'],time() + (86400 * 30), "/");
                }
            }
            else{
                $url=strtok($_SERVER["REQUEST_URI"],'?').'?style='.$_COOKIE['style'];
                header("Location: ".$url);
            }
        }
        else{
            if(isset($_GET['style'])){
                setcookie('style',$_GET['style'],time() + (86400 * 30), "/");
            }
        }
    }
	/**
 	*fonction permettant de récupérer le nom de la langue passé par url 
 	* et de l'appliquer à la page web. si aucun parametre de langue est passé par url, alors la fonction applique la *langue fançaise par défaut
 	*/
 	
	function applyLanguage(){
		$lang="";
		if(isset($_GET['lang'])){
			$lang=$_GET['lang'];
			echo dateDay($lang);
		}
	}

	/**
	*cette fonction nous donne une explication textuelle d'une valeur numérique 'Droit'
	*@param $number (Entier) une valeur octale
	*@return $equi une chaîne de caractères
	*/		
	
	function get_textual_equivalents($number) {
		switch($number) {
			case 7:
				$equi="tous les droits (lecture, écriture et exécution)";
				break;
			case 6:
				$equi="lecture et écriture";
				break;
			case 5:
				$equi="lecture et exécution";
				break;
			case 4:
				$equi="lecture seulement";
				break;
			case 3:
				$equi="écriture et exécution";
				break;
			case 2:
				$equi="écriture seulement";
				break;
			case 1:
				$equi="exécution seulement";
				break;
			default:
				$equi="aucun droit";
				break;
		}
		return $equi;
	}
	
	/**
	*cette fonction ne retourne un tableaux HTML avec des commentaires pour les Droits
	*@param $octal un (Entier) , $type une (chaîne de caractères)
	*@return $table un tableaux HTML
	*/
	
	function table_equi($octal, $type) {
		$saut="\n";
		$tab="\t";
		
		$table="<div id='droit'>".$saut;
		$table.=$tab."<table>".$saut;
		
		$table.=$tab.$tab."<tr>".$saut;
		$table.=$tab.$tab.$tab.$tab."<th colspan='3'>".$type."</th>".$saut;
		$table.=$tab.$tab."</tr>".$saut;
		
		$table.=$tab.$tab."<tr>".$saut;
		$table.=$tab.$tab.$tab."<th>propriétaire</th>".$saut;
		$table.=$tab.$tab.$tab."<th>groupe</th>".$saut; 
		$table.=$tab.$tab.$tab."<th>les autres</th>".$saut;
		$table.=$tab.$tab."</tr>".$saut;
		
		$table.=$tab.$tab."<tr>".$saut;
		for($i=0; $i<3; $i++){
			$number=$octal[$i];
			$table.=$tab.$tab.$tab."<td>".get_textual_equivalents($number)."</td>".$saut;
		}
		$table.=$tab.$tab."</tr>".$saut;

		$table.=$tab."</table>".$saut;
		$table.="</div>".$saut;		
		
		return $table;
	}
	/**
 	* cette fonction écrit le nombre de rafraichissements des pages de site dans un fichier text
 	* puis retourner son contenu
 	*@return le contenu de fichier sous forme de paragraphe
 	*/	
	function hitsCount() {
		$content = file_get_contents('./hits.txt');
		$pageWasRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']);
		
		if($pageWasRefreshed){
			$content++;
			file_put_contents('./hits.txt', $content);					
		}
		
		return "\t\t<p class='positionAuteurDate'>Vous avez consulter <strong style='background: red;'>".$content." </strong>fois cette page web</p>\n";	
	}

	/**
 	*cette fonction permet l'affichage d'une image prise au hazard dans le dossier d'images
 	*@return $aside
 	*		  une balise <aside> contenant une image choisie aléatoirement
 	*/	
	
	function randPics() {
		$saut = "\n";
		$tab = "\t";
		
		$departemen = array(1=>'Alger','Tissemsilt','Bejaia','Tizi ouzou','Oran','Tlemcen','Tiaret','Skikda','Setif','Belida','Tamanrasset','Constantine');
		
		$chem_img = "../td10/images";
		$handle = opendir($chem_img);
		
		while($file = readdir($handle)) {
			if(preg_match("!(\.png|\.jpeg|\.gif|\.bmp|\.png)$!i", $file)){
				$listFile[] = $file;
			}
		}
		
		$rand_img = rand(0, count($listFile)-1);
		$size = getimagesize($chem_img."/".$listFile[$rand_img]);
		
		$largeur_maxi = 300;
		
		if($size[0] > $largeur_maxi){
			$width = $largeur_maxi;
			$theight = ($size[0]/$largeur_maxi);
			$height = $size[1]/$theight;		
		}
		else {
			$width = $size[0];	
			$height = $size[1];
		}
		closedir($handle);
	
		$aside = $tab."<aside style='margin-left:27%;'>".$saut;
		$aside.= $tab."<figure>".$saut;	
		$aside.= $tab.$tab."<img style='border:3px solid black; width: ".$width."px; height: ".$height."px;' src='".$chem_img."/".$listFile[$rand_img]."' alt='".$listFile[$rand_img]."' />".$saut;		
		$image = explode(".",$listFile[$rand_img])[0];		
		$aside.= $tab."<figcaption style='caption-side: bottom;'><em>Ville : ".$departemen[$image]."</em></figcaption>".$saut;		
		$aside.= $tab."</figure>".$saut;		
		$aside.= $tab."</aside>".$saut;	
		
		return $aside;
	}
?>