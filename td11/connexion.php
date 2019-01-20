<?php
session_start();
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
	
	<section><h2 style="text-indent: 20px;font-style: italic;font-size: 18px;"><?php echo $_SESSION['username']; ?> :</h2>
	<article style="height: 50%;width: 73%;"><h3 style="text-indent: 20px;font-style: italic;font-size: 22px;">session :</h3>
	<?php
		echo "<p class='styleparag' style='color:green; margin-left:30%;'>Bienvenue a votre session ". $_SESSION['username']."</p>\n";
		echo "<p class='styleparag' style='color:green; margin-left:30%;'>Votre identifiant est : ".$_SESSION['id']."</p>\n";		
		//echo "<p class='styleparag' style='color:green; margin-left:30%;'>Vous vous êtes connecté le :".$_SESSION['time']."</p>\n";
	?>
	</article>
	</section>
	
	<?php
		include_once"../include/footer.inc.php";
	?>