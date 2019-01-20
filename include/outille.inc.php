<?php
	include_once"../include/util.inc.php";
	
	/**
	*cette fonction nous retourne le titre de la page WEB + le DOCTYPE..., on précisera le titre de la page comme paramètre.
	*@param $titleOfPage (chaîne de caractères) le titre de la page
	*@retrun  $title le titre de la page WEB
	*/
	
	function titlePage($titleOfPage) {
		$title="<!DOCTYPE html>\n";
		$title.="<html lang='fr'>\n";
		$title.="<head>\n";
		$title.="<title>".$titleOfPage."</title>\n";
		
		return $title;
	}
	
	/**
	*cette fonction nous retourne le header de la page HTML , on précisera le titre de la page.
	*@param $titleOfPage (chaîne de caractères) le titre de la page
	*@retrun  $header le header de la page HTML
	*/
	
	function headerPage($titleOfPage) {
		$saut="\n";
		$tab="\t";
	
		$header=$tab."<header id='head'>".$saut;
		$header.=$tab.$tab."<div class='logoclass'>".$saut;
		$header.=$tab.$tab.$tab."<h1>Développement Web : ".$titleOfPage."</h1>".$saut;
		$header.=$tab.$tab.$tab."<h2>Les rendu de AYAD Ishak</h2>".$saut;
		$header.=$tab.$tab.$tab."<a href='https://www.u-cergy.fr/fr/index.html'><img src='../images/cergylogo.png' alt='Cergy université' height='120' width='250'></a>".$saut;
		$header.=$tab.$tab."</div>".$saut;
		$header.=$tab."</header>".$saut;
	
		return $header;
	}
	
	/**
	*cette fonction nous crée le menu de notre page en passant le nombre de page a les mettre dedans
	*@param $numberOfTD (ENTIER) le nombres de page a précisé leur lien
	*@return	$menu le menu de la page HTML
	*/	

	function menuPage($numberOfTD) {
		
		$saut="\n";
		$tab="\t";
		$menu=$tab."<nav>".$saut;
		$menu.=$tab.$tab."<ul>".$saut;
		$menu.=$tab.$tab.$tab."<li><a href='../index.php'>Accueil</a></li>";
		
		for($i=5; $i<=12; $i++) {
			
			/*la page existe et contien des information sur le td on ajoute sont lien au menu*/
			if($i<=$numberOfTD){
				$menu.=$tab.$tab.$tab."<li><a href='../td".$i."/td".$i.".php'>TD n°".$i."</a></li>".$saut;
			}
			
			/*si non on la met comme page en construction*/
			else {
				$menu.=$tab.$tab.$tab."<li><a href='../tds/pageunderconstruction.html'>TD n°".$i."</a></li>".$saut;
			}
		}	
		$menu.=$tab.$tab."</ul>".$saut;
		$menu.=$tab."</nav>".$saut;	
		
		return $menu;
	}
	
	/**
	*cette fonction ne retourne le menu de navigation de la page WEB 
	*@param $numberOfExo(qui représente le nombre d'exercice a indexé), $inclu0(pour dire si on met l'exercice n°0)
	*@return $menu le menu de navigation sur la page
	*/	

	function menuNavigation($numberOfExo, $inclu0) {
		$saut="\n";
		$tab="\t";
		
		$menu=$tab."<div class='menu' id='manuposition'>".$saut;
		$menu.=$tab.$tab."<ul style='margin-top: 4%;'>".$saut;
		$menu.=$tab.$tab.$tab."<li style='background-color: transparent;'><a href='#'><img src='../images/home.png' alt='home' height='30' width='30'></a>'".$saut;
		$menu.=$tab.$tab.$tab.$tab."<ul class='submenu'>".$saut;
		
			if($inclu0 == "Oui"){
				$menu.=$tab.$tab.$tab.$tab."<li><a href='#exo0'>Exercice n°0</a></li>".$saut;
			}
			
			for($i=1; $i<=$numberOfExo; $i++){		
				$menu.=$tab.$tab.$tab.$tab."<li><a href='#exo".$i."'>Exercice n°".$i."</a></li>".$saut;
			}
			
		$menu.=$tab.$tab."</ul>".$saut;			
		$menu.=$tab.$tab.$tab."</li>".$saut;
		$menu.=$tab.$tab."</ul>".$saut;	
		$menu.=$tab."</div>".$saut;	
		
		return $menu;
	}
	
	/**
	*cette fonction nous retourne une liste d'option HTML a inséré dans une forme
	*@param $until (Entier) la valeur maximale que notre liste d'option peut contenir 
	*@return $options une liste d'option HTML
	*/		

	function listOption($until) {
		$saut="\n";
		$tab="\t";
		$options=$tab."<select name='number'>".$saut;		

		for($i=2; $i<=$until; $i++){
			$options.=$tab.$tab."<option value='".$i."'>".$i."x".$i."</option>".$saut;
		}
		
		$options.=$tab."</select>".$saut;
		
		return $options;
	}
	
	/**
	*cette fonctions nous retourne un tableaux HTML qui contient des cases a coché
	*@param $numerique pour indiquer si oon affiche les valeurs octal ou un 0
	*@return $table un tableaux HTML qui contiens des input de type chekbox
	*/	
	
	function cochCases($numerique=null) {	
		$saut="\n";
		$tab="\t";
		
		//ces array sont utiliser pour récupérer les droit et "les utilisateurs" 
		$arrayDroit=array(1=>"r","w","x");
		$arrayUser=array(1=>"u","g","o");
		$arrayName=array(1=>"user","group","others");
		
		$table="<div style='margin-left: 25%;padding-bottom: 5%;' class='enum' id='chmod'>".$saut;
		$table.=$tab."<table style='border-style: none;'>".$saut;
		
		$table.=$tab.$tab."<tr>".$saut;
		$table.=$tab.$tab.$tab."<td style='background-color:white; border-style: none;'></td>".$saut;
		for($i=1; $i<=3; $i++) {
			$table.=$tab.$tab.$tab."<th>".$arrayDroit[$i]."</th>".$saut;
		}
		$table.=$tab.$tab.$tab."<td>Valeur octale</td>".$saut;
		$table.=$tab.$tab."</tr>".$saut;
		
		for($i=1; $i<=3; $i++){
			$table.=$tab.$tab."<tr>".$saut;
			
			$table.=$tab.$tab.$tab."<th>".$arrayName[$i]."</th>".$saut;
		
			for($j=1; $j<=3; $j++) {
				$table.=$tab.$tab.$tab."<td><input type='checkbox' name='".$arrayUser[$i]."[]' value='".$arrayDroit[$j]."' /></td>".$saut;
			}
			
			if($numerique != null){
				$table.=$tab.$tab.$tab."<td>".convert_numerique_octale($numerique[$i])."</td>".$saut;
			}
			else {
				$table.=$tab.$tab.$tab."<td>0</td>".$saut;
			}
			
			$table.=$tab.$tab."</tr>".$saut;
		}

		$table.=$tab.$tab."<tr>".$saut;
		
		$table.=$tab.$tab.$tab."<td colspan='5' style='background-color: white; border-style: none;'><input style='background-color: bisque;' type='submit' name='chmod' value='calculer' /></td>".$saut;
		
		$table.=$tab.$tab."</tr>".$saut;		
		
		$table.=$tab."</table>".$saut;
		$table.=$tab."</div>".$saut;
		
		return $table;
	}
	
	/**
	*cette fonction nous donne l'octal d'une valeur numérique 'Droit'
	*@param $numerique une chaîne de caractères qui représente les droit d'utilisateurs
	*@return $octale la valeur octal
	*/	
	
	function convert_numerique_octale($numerique) {
		switch($numerique) {
			case "x":
				$octale = 1;
				break;
			case "w":
				$octale = 2;
				break;
			case "wx":
				$octale = 3;
				break;
			case "r":
				$octale = 4;
				break;
			case "rx":
				$octale = 5;
				break;
			case "rw":
				$octale = 6;
				break;
			case "rwx":
				$octale = 7;
				break;
			default:
				$octale = 0;
				break;
		}
		return $octale;
	}
	
	/**
	*cette fonction ne retourne un tableaux HTML qui contient des option pour saisir un moi et une année
	*@return $table un tableaux HTML
	*/	

	function formulair() {
		$saut="\n";
		$tab="\t";
		
		$Mois=array(1=>'Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre');
		
		$NowMount = date("n");
		$NowYear = date("Y");		

		$table=$tab."<table style='border-style: none; margin: auto;' class='formula'>".$saut;
		
		$table.=$tab.$tab."<tr>".$saut;

		$table.=$tab.$tab.$tab."<td><label>Mois</label></td>".$saut;
		$table.=$tab.$tab.$tab."<td><label>Année</label></td>".$saut;		
		
		$table.=$tab.$tab."</tr>".$saut;
		
		$table.=$tab.$tab."<tr>".$saut;
		$table.=$tab.$tab.$tab."<td><select name='month' id='months'>".$saut;
		
			for($i=0; $i<=12; $i++){
				if($i==0){
					$table.=$tab.$tab.$tab."<option disabled selected value> -- Mois -- </option>".$saut;			
				}
				else {
						if($i == $NowMount){
							$table.=$tab.$tab.$tab."<option style='background-color:red;' value='".$i."'>".$Mois[$i]."</option>".$saut;
						}
						else {
							$table.=$tab.$tab.$tab."<option value='".$i."'>".$Mois[$i]."</option>".$saut;	
						}
				}			
			}
			
		$table.=$tab.$tab.$tab."</select></td>".$saut;
		
		$table.=$tab.$tab.$tab."<td><select name='year' id='years'>".$saut;
		
			for($i=1999; $i<=2030; $i++){
				if($i==1999){
					$table.=$tab.$tab.$tab."<option disabled selected value> -- Année -- </option>".$saut;			
				}
				else {
					if($i==$NowYear){
						$table.=$tab.$tab.$tab."<option style='background-color:red;' value='".$i."'>".$i."</option>".$saut;
					}
					else {
						$table.=$tab.$tab.$tab."<option value='".$i."'>".$i."</option>".$saut;	
					}
				}			
			}
			
		$table.=$tab.$tab.$tab."</select></td>".$saut;
		
		$table.=$tab.$tab."</tr>".$saut;
		
		$table.=$tab.$tab."<tr>".$saut;
		
		$table.=$tab.$tab.$tab."<td colspan='2' style='background-color: white; border-style: none;'><input style='background-color: bisque;' type='submit' name='calendrier' value='Ok' /></td>".$saut;
		
		$table.=$tab.$tab."</tr>".$saut;
				
		$table.=$tab."</table>".$saut;
			
		return $table;		
	}
	
	/**
 	*cette fonction permet d'écrire le nom/prénom, identifiant et mot de passe crypté 
 	*dans le fichier csv dont le nom est passé comme paramètre.
 	*/

	function writeData($fileNameCSV,$userFirstName,$userFamilyName,$login,$password){
		$file = fopen($fileNameCSV,'a+');
		$hashedPassWord=password_hash($password,PASSWORD_DEFAULT);
		$listData = array($userFirstName,$userFamilyName,$login,$hashedPassWord);
		$i=fputcsv($file,$listData);
		fclose($file);
	}

	/**
 	*cette fonction permet de vérifier si le login et le mot de passe passés comme parametres
 	*existent bien dans le fichier csv spécifié. si c'est le cas, elle affiche un message de bienvenue
 	*sinon elle affiche un message d'erreur.
 	*/

	function verify($fileNameCSV,$login,$password){
		$file = fopen($fileNameCSV,'r');
		$find = false;
		while (!feof($file) && !$find) {
			$line=fgetcsv($file);
			if($line[0] != "" && $login==$line[2] && password_verify($password,$line[3])) {
				$find=true;
			}
		}
		if($find){
			echo "<p style='color:green; margin-left:40%;'>Bienvenue ".$line[0]." ".$line[1]."</p>";
		}
		else{ 
			echo "<p style='color:red; margin-left:20%;'> échec d'authentification. Veuillez vérifier votre identifiant ou mot de passe</p>";
			echo "<p style='color:red; margin-left:20%;'> si vous êtes pas inscrit je vous invite a passé par le formulaire d'inscription</p>";
		}		
		fclose($file);
	}
	
	function loginFomula() {
		$saut = "\n";
		$tab = "\t";
		
		$form = "<div class='login'>".$saut;
		
		$form.=$tab."<form method='post' action='td10.php#exo3'>".$saut;
		
		$form.=$tab."<h2 style='text-align: center; border-bottom: 2px solid black;'>Login</h2>".$saut;
		
		$form.=$tab.$tab."<div style='margin-bottom: 1%; margin-top: 5%;'>".$saut;
				
		$form.=$tab.$tab."<label for='username'>Identifiant :</label>".$saut;
		$form.=$tab.$tab."<input style='margin-left: 18px;' id='username' name='username' type='text' size='25'/>".$saut;
		
		$form.=$tab.$tab."</div>".$saut;
		
		$form.=$tab.$tab."<div style='margin-bottom: 5%;'>".$saut;
		
		$form.=$tab.$tab."<label for='password'>Mot de passe :</label>".$saut;
		$form.=$tab.$tab."<input id='password' name='password' type='password' size='25' />".$saut;

		$form.=$tab.$tab."</div>".$saut;

		$form.=$tab.$tab."<input type='submit' name='CONNECTER' value='CE CONNECTER'/>".$saut;
		$form.=$tab.$tab."<input style='margin-left: 25%;' type='submit' name='INSCRIRE' value='INSCRIRE'/>".$saut;

		$form.="</form>".$saut;

		$form.="</div>".$saut;
		
		return $form;
	}
	
		function inscriptionFomula() {
		$saut = "\n";
		$tab = "\t";
		
		$form = "<div class='login'>".$saut;
		
		$form.=$tab."<form method='post' action='td10.php#exo3'>".$saut;
		
		$form.=$tab."<h2 style='text-align: center; border-bottom: 2px solid black;'>Inscription</h2>".$saut;
		
		$form.=$tab.$tab."<div style='margin-bottom: 1%; margin-top: 5%;'>".$saut;
				
		$form.=$tab.$tab."<label for='username'>Identifiant :</label>".$saut;
		$form.=$tab.$tab."<input style='margin-left: 18px;' id='username' name='username' type='text' size='25'/>".$saut;
		
		$form.=$tab.$tab."</div>".$saut;
		
		$form.=$tab.$tab."<div style='margin-bottom: 1%;'>".$saut;
		
		$form.=$tab.$tab."<label for='nom'>Nom :</label>".$saut;
		$form.=$tab.$tab."<input id='nom' name='nom' type='text' size='25' style='margin-left:11%;'/>".$saut;

		$form.=$tab.$tab."</div>".$saut;
		
		$form.=$tab.$tab."<div style='margin-bottom: 1%;'>".$saut;
		
		$form.=$tab.$tab."<label for='prenom'>Prénom :</label>".$saut;
		$form.=$tab.$tab."<input id='prenom' name='prenom' type='text' size='25' style='margin-left:7%;'/>".$saut;

		$form.=$tab.$tab."</div>".$saut;		

		$form.=$tab.$tab."<div style='margin-bottom: 1%;'>".$saut;
		
		$form.=$tab.$tab."<label for='password'>Mot de passe :</label>".$saut;
		$form.=$tab.$tab."<input id='password' name='password' type='password' size='25' />".$saut;

		$form.=$tab.$tab."</div>".$saut;
		
		$form.=$tab.$tab."<div style='margin-bottom: 5%;'>".$saut;
		
		$form.=$tab.$tab."<label for='password'>Vérifier :</label>".$saut;
		$form.=$tab.$tab."<input id='password' name='tchek' type='password' size='25' style='margin-left:7%;' />".$saut;

		$form.=$tab.$tab."</div>".$saut;

		$form.=$tab.$tab."<input style='margin-left: 45%;' type='submit' name='login' value='INSCRIRE'/>".$saut;

		$form.="</form>".$saut;

		$form.="</div>".$saut;
		
		return $form;
	}
?>