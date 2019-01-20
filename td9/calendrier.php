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
		echo menuNavigation(0,"Oui");
	?>
	<section id="exo0"><h2 style="text-indent: 20px;font-style: italic;font-size: 18px;">Exercice n°0 :</h2>
	<article style="height: 95%;width: 73%;"><h3 style="text-indent: 20px;font-style: italic;font-size: 22px;"> formulaire généré par des boucles PHP avec liste d'options:</h3>
	<form method="post" action="calendrier.php#exo0">
		<?php
			echo formulair();
		?>
	</form>
	<div class='year' style='overflow: auto;'>	
	<?php
		if(!empty($_POST['year'])){
			$year=$_POST['year'];
			if(!empty($_POST['month'])) {
				$month=$_POST['month'];
				echo"<div class='calendar' id='todetcalender'>\n";
				echo monthCalendar($month, $year);
				echo"</div>\n";
			}
			else {
				echo year($year);					
			}			
		}
		else {
				echo "<p style='margin-left:30%;color:red;'>--- veuillez sélectionnée au moins une année --- <p>";
		}
	?>
	</div>
	</article>
	</section>		
	
	
	<?php
		include_once"../include/footer.inc.php";
	?>