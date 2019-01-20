<!DOCTYPE html>
<html lang="fr">
<head>
<title>Développement Web S4</title>
<meta charset="utf-8"/>
<link rel="stylesheet" href="./css/style.css" />
<?php
	include_once"./include/util.inc.php";
	echo applyStyle(true);
	
	echo check_cookies();
?>
<link rel="shortcut icon" href="./images/Web.png" type="images/png" />
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
	margin-left: 40%;
	position: absolute;
	padding-top: 1%;
}
section h2{
	color: white;
}
table, th, td{
	width: 100%;
	table-layout: fixed;
	text-align: center;
	font-size: 14px;
}
th{
	background-color: white;
}
td{
	color: white;
	background-color: #424558;
}
section, article, p{
	text-indent: 20px;
	font-style: italic;
	font-size: 18px;
}
</style>
</head>
<body>
	<header id="head">
		<div class="logoclass">
			<h1>Développement Web</h1>
			<h2>Les rendu de AYAD Ishak</h2>
			<a href="https://www.u-cergy.fr/fr/index.html"><img src="./images/cergylogo.png" alt="Cergy université" height="120" width="250"></a>
		</div>
	</header>
	<nav>
		<ul>
			<li><a href="index.php">Accueil</a></li>
			<li><a href="./td5/td5.php">TD n°5</a></li>
			<li><a href="./td6/td6.php">TD n°6</a></li>
			<li><a href="./td7/td7.php">TD n°7</a></li>
			<li><a href="./td8/td8.php">TD n°8</a></li>
			<li><a href="./td9/td9.php">TD n°9</a></li>
			<li><a href="./td10/td10.php">TD n°10</a></li>
			<li><a href="./td11/td11.php">TD n°11</a></li>	
			<li><a href="./tds/pageunderconstruction.html">TD n°12</a></li>		
		</ul>
	</nav>
	<div class="calancontainer">
	<div class="mois">
		<h2 style="margin-left: 10%;font-size: 18px;">Calendrier de TD's</h2>
		<h3 style="margin-left: 32%;">Février</h3>
	</div>
	<table>
		<tr>
			<th>lu</th>
			<th>ma</th>
			<th>me</th>
			<th>je</th>
			<th>ve</th>
			<th>sa</th>
			<th>di</th>
		</tr>	
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td>01</td>
			<td>02</td>
			<td>03</td>
			<td>04</td>
		</tr>
		<tr>
			<td style="background-color: #F62E2E">05</td>
			<td>06</td>
			<td>07</td>
			<td>08</td>
			<td>09</td>
			<td>10</td>
			<td>11</td>
		</tr>
		<tr>
			<td style="background-color: #F62E2E">12</td>
			<td>13</td>
			<td>14</td>
			<td>15</td>
			<td>16</td>
			<td>17</td>
			<td>18</td>
		</tr>
		<tr>
			<td style="background-color: #F62E2E">19</td>
			<td>20</td>
			<td>21</td>
			<td>22</td>
			<td>23</td>
			<td>24</td>
			<td>25</td>
		</tr>
		<tr>
			<td>26</td>
			<td>27</td>
			<td>28</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>					
	</table>
		<div class="mois">
		<h3 style="margin-left: 32%;">Mars</h3>
	</div>
	<table>
		<tr>
			<th>lu</th>
			<th>ma</th>
			<th>me</th>
			<th>je</th>
			<th>ve</th>
			<th>sa</th>
			<th>di</th>
		</tr>	
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td>01</td>
			<td>02</td>
			<td>03</td>
			<td>04</td>
		</tr>
		<tr>
			<td style="background-color: #F62E2E">05</td>
			<td>06</td>
			<td>07</td>
			<td>08</td>
			<td>09</td>
			<td>10</td>
			<td>11</td>
		</tr>
		<tr>
			<td style="background-color: #F62E2E">12</td>
			<td>13</td>
			<td>14</td>
			<td>15</td>
			<td>16</td>
			<td>17</td>
			<td>18</td>
		</tr>
		<tr>
			<td style="background-color: #F62E2E">19</td>
			<td>20</td>
			<td>21</td>
			<td>22</td>
			<td>23</td>
			<td>24</td>
			<td>25</td>
		</tr>
		<tr>
			<td style="background-color: #F62E2E">26</td>
			<td>27</td>
			<td>28</td>
			<td>29</td>
			<td>30</td>
			<td>31</td>
			<td></td>
		</tr>					
	</table>
		<div class="mois">
		<h3 style="margin-left: 32%;">Avril</h3>
	</div>
	<table>
		<tr>
			<th>lu</th>
			<th>ma</th>
			<th>me</th>
			<th>je</th>
			<th>ve</th>
			<th>sa</th>
			<th>di</th>
		</tr>	
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td>01</td>
		</tr>
		<tr>
			<td style="background-color: #F62E2E">02</td>
			<td>03</td>
			<td>04</td>
			<td>05</td>
			<td>06</td>
			<td>07</td>
			<td>08</td>
		</tr>
		<tr>
			<td style="background-color: #F62E2E">09</td>
			<td>10</td>
			<td>11</td>
			<td>12</td>
			<td>13</td>
			<td>14</td>
			<td>15</td>
		</tr>
		<tr>
			<td style="background-color: #F62E2E">16</td>
			<td>17</td>
			<td>18</td>
			<td>19</td>
			<td>20</td>
			<td>21</td>
			<td>22</td>
		</tr>
		<tr>
			<td style="background-color: #F62E2E">23</td>
			<td>24</td>
			<td>25</td>
			<td>26</td>
			<td>27</td>
			<td>28</td>
			<td>29</td>
		</tr>
		<tr>
			<td style="background-color: #F62E2E">30</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>					
	</table>
	</div>
	<div class="menu" id="manuposition">
		<ul style="margin-top: 4%;">
			<li style="background-color: transparent;"><a href="#"><img src="./images/home.png" alt="home" height="30" width="30"></a>
				<ul class="submenu">
					<li><a href="#Presentation">Présentation</a></li>
					<li><a href="#chronologiedubigdata">Chronologie Du Big Data</a></li>
					<li><a href="#lesacteursdubigdata">Les acteurs du Big Data</a></li>
					<li><a href="#Document1">Document n°1</a></li>
					<li><a href="#Document2">Document n°2</a></li>
				</ul>			
			</li>
		</ul>	
	</div>
	<section id="Presentation"><h2 style="	text-indent: 20px;font-style: italic;font-size: 18px;">Présentation :</h2>		
		<article><h3 style="text-indent: 20px;font-style: italic;font-size: 22px;">BIG DATA :</h3>
			<p>Tout d’abord le Big Data n’est plus qu’une problématique de volume contrairement à ce que son nom laisse supposer.</p>
			<p>Même s’il est vrai que le Big Data est capable de traiter des volumétries conséquentes, l’enjeu principal est la valorisation de ces données quel que soit leur volume.</p>
			<p>Il y a des tentatives pour remplacer ce terme, soit par une dénomination technique : Fast Data, soit en mettant l’accent sur la valorisation des données : Smart Data.</p>
			<p>Les cas d'utilisation les plus répandus des technologies Big Data :</p>
			<ul id="lise">
				<li>Analyse des logs des serveurs</li>
				<li>Recoupement entre différentes sources de données</li>
				<li>Analyse des informations produits, catalogue, …</li>
				<li>Sécurité des accès (analyse des requêtes du SI)</li>
				<li>Analyse de risque ou panne</li>
				<li>Détection de fraude</li>
				<li>Détection de tendances (analyse sémantique / sentiment analysis)</li>
				<li>Segmentation et ciblage (recommandations, Data Management Platform ...)</li>
				<li>Recherche d’information dans des données non structurées</li>
				<li>Analyse prédictive des comportements</li>
				<li>Prédiction de l’attrition pour mise en place de campagnes ciblées de fidélisation ou de reconquête</li>
				<li>Real-time marketing</li>
				<li>Contrôle de l’image et de la communication par analyse sémantique</li>
				<li>Optimisation opérationnelle de la chaîne d’approvisionnement</li>
				<li>Parcours client type</li>
				<li>Mesure de la performance des campagnes marketing</li>
				<li>Click and collect</li>
				<li>Click to chat</li>
				<li>Moteur de recommandation</li>
				<li>Contenu personnalisé </li>
				<li>Programme promotionnel personnalisé</li>
				<li>Consolidation des données clients (360°)</li>
				<li>....</li>
			</ul>
		</article>	
	</section>
	<section id="chronologiedubigdata"><h2 style="	text-indent: 20px;font-style: italic;font-size: 18px;">Chronologie du Big Data</h2>
		<article><h3 style="text-indent: 20px;font-style: italic;font-size: 22px;">Événements et Dates :</h3>
		<p class="styleparag">Les enjeux et les challenges du Big Data sont loin d’être nouveaux. 
		Si l’on s’intéresse à la chronologie des événements qui ont créé le Big Data tel que nous le connaissons aujourd’hui, 
		on s’aperçoit que cette genèse remonte assez loin dans le temps et qu’il a fallu que les idées convainquent et que les solutions mûrissent afin d’en arriver là.</p>
		<div id="hovereven">
			<table>
				<tr>
					<th style="width: 10%; background: red;">Date</th>
					<th style="background: red;font-size: 18px;">Événements</th>				
				</tr>
				<tr>
					<td>1997</td>
					<td style="font-size: 15px;"><a href="https://open.nasa.gov/blog/what-is-nasa-doing-with-big-data-today/">Première apparition du terme Big Data (NASA) pour désigner le challenge de travailler avec de larges volumes de données non structurées</a></td>
				</tr>
				<tr>
					<td>1998</td>
					<td style="font-size: 15px;"><a href="https://www.mongodb.com/nosql-explained">Première base NoSQL (et utilisation du terme) par Carlo Strozzi</a></td>
				</tr>
				<tr>
					<td>2000</td>
					<td style="font-size: 15px;"><a href="https://neo4j.com/why-graph-databases/">Neo4j (base NoSQL orientée graphes)</a></td>
				</tr>
				<tr>
					<td>2001</td>
					<td style="font-size: 15px;"><a href="https://www.gartner.com/it-glossary/big-data">Première définition du Big Data (Volume/Variété/Vélocité) par Gartner</a></td>
				</tr>	
				<tr>
					<td>2005</td>
					<td style="font-size: 15px;"><a href="./others/Hadoop.pdf">Naissance d’Hadoop</a></td>
				</tr>	
				<tr>
					<td>2005</td>
					<td style="font-size: 15px;"><a href="./others/CouchDB.pdf">Naissance de CouchDB (base NoSQL orientée documents)</a></td>
				</tr>
				<tr>
					<td>2006</td>
					<td style="font-size: 15px;"><a href="https://cloud.google.com/bigtable/?hl=en">Publication Google BigTable</a></td>
				</tr>
				<tr>
					<td>2007</td>
					<td style="font-size: 15px;"><a href="https://hbase.apache.org#News">Naissance HBase (base orientée documents)</a></td>
				</tr>
				<tr>
					<td>2007</td>
					<td style="font-size: 15px;"><a href="https://aws.amazon.com/fr/blogs/big-data/tag/dynamodb/">Publication base orientée colonnes Amazon Dynamo</a></td>
				</tr>	
				<tr>
					<td>2007</td>
					<td style="font-size: 15px;"><a href="https://www.mongodb.com/big-data-explained">Base MongoDB (base orientée documents)</a></td>
				</tr>	
				<tr>
					<td>2007</td>
					<td style="font-size: 15px;">Création société 10Gen (devenue MongoDB)</td>
				</tr>	
				<tr>
					<td>2008</td>
					<td style="font-size: 15px;">Naissance de Cassandra (base NoSQL partitionnée)</td>
				</tr>
				<tr>
					<td>2008</td>
					<td>Hadoop bat le record « Terabyte sort Benchmark »</td>				
				</tr>	
				<tr>
					<td>2009</td>
					<td style="font-size: 15px;">Naissance de Flink</td>				
				</tr>
				<tr>
					<td>2009</td>
					<td style="font-size: 15px;">Base clé/valeur Redis</td>				
				</tr>
				<tr>
					<td>2009</td>
					<td style="font-size: 15px;">Création de la société MapR</td>				
				</tr>
				<tr>
					<td>2009</td>
					<td style="font-size: 15px;">Naissance de Mesos (gestion des ressources)</td>				
				</tr>
				<tr>
					<td>2009</td>
					<td style="font-size: 15px;">Naissance de Spark (analyse de données)</td>				
				</tr>
				<tr>
					<td>2010</td>
					<td style="font-size: 15px;">Création de la société DataStax (Cassandra)</td>				
				</tr>
				<tr>
					<td>2011</td>
					<td style="font-size: 15px;">Création de la société Hortonworks</td>				
				</tr>	
				<tr>
					<td>2012</td>
					<td style="font-size: 15px;">YARN en remplacement de Hadoop v1</td>				
				</tr>
				<tr>
					<td>2013</td>
					<td style="font-size: 15px;">Création de la société DataBricks (Spark)</td>				
				</tr>
				<tr>
					<td>2014</td>
					<td style="font-size: 15px;">Spark bat le record « Terabyte sort Benchmark »</td>				
				</tr>		
			</table>
			<h3 style="font-size: 13px;margin-left: 25%; color: red;font-family: sans-serif;">**Quelque élément sur le tableau sont cliquable**</h3>
		</div>
		<figure	style="margin-left: 9%;">
				<img src="./images/BigData.png" alt="Big Data" height="500" width="500">
				<figcaption style="font-size: 18px;margin-left: 35%;font-style: italic;">Big Data Source</figcaption>
		</figure>
		</article>
	</section>
	<section id="lesacteursdubigdata"><h2 style="text-indent: 20px;font-style: italic;font-size: 18px;">Les acteurs du Big Data</h2>
		<article><h3 style="text-indent: 20px;font-style: italic;font-size: 22px;"> Acteurs :</h3>
			<p>Le Big Data a besoin de nouvelles compétences, il est donc normal de voir apparaître de nouveaux rôles :</p>
			<dl>
				<dt><strong>-Data Engineer :</strong></dt>
					<dd>c’est l’informaticien, spécialiste du Big Data, 
					qui va mettre en oeuvre tous les outils et solutions à destination des utilisateurs  utilisateur final, data scientist, ...). 
					Un Data Architect est un Data Engineer expérimenté apte à concevoir une architecture complète.</dd>
				<dt><strong>-Data Scientist :</strong></dt>
					<dd>poste à double compétence car il est capable d’utiliser les outils informatiques du Big Data (voire de coder en Python, R, ...) et de comprendre les enjeux business de ses analyses</dd>
				<dt><strong>-Data Analyst (Statisticien) :</strong></dt>	
					<dd>lorsque les analyses sur les données sont plus complexes il faut alors faire appel à des statisticiens qui sont  capables d’implémenter de nouveaux algorithmes et définir de nouveau modèles. 
					Ses outils sont plus les modèles mathématiques que les outils de Data Mining</dd>
				<dt><strong>-Chief Data Officer :</strong></dt>
				<dd>dans les grandes entreprises on nomme parfois un directeur des données. Il est en charge des données de l’entreprise qu'elles soient internes ou externes :
						<ol style="list-style-type: upper-latin;">
							<li>gouvernance des données</li>
							<li>acquisition de nouvelles sources de données.</li>						
						</ol>
				</dd>
			</dl>		
			<p>Mais son rôle principal est de monétiser les données de l’entreprise.</p>
		</article>		
	</section>
 	<section id="Document1"><h2 style="	text-indent: 20px;font-style: italic;font-size: 18px;">Document n°1 :</h2>		
		<article><h3 style="text-indent: 20px;font-style: italic;font-size: 22px;">Java :</h3>
			<p class="styleparag">Le but de ce projet est la création d’une petite application qui génère le fichier sitemap.xml et sérialise les informations des fichiers html dans un fichier data.ser qui permets de faire la recehrche par mot-clef.</p>
			<figure style="margin-left: 40%;">
					<a href="./td1/index.html"><img src="./images/java.png" alt="Java image" height="70" width="70"/></a>
					<figcaption id="legande">TD n°1</figcaption>
			</figure>
		</article>	
	</section>
	<section id="Document2"><h2 style="	text-indent: 20px;font-style: italic;font-size: 18px;">Document n°2 :</h2>	
		<article><h3 style="text-indent: 20px;font-style: italic;font-size: 22px;">développement web :</h3>
			<p style="text-indent: 20px;font-style: italic;font-size: 18px;">Dans le cadre d'une manifestation de type "speed-recruting", "forum université - entreprises",nous vous présentons notre projet et nos compétences. </p>
			<figure id="imagecenter">
					<a href="./td2/index.html"><img src="./images/xhtml.png" alt="XHTML image" height="70" width="70"/></a>
					<figcaption style="font-size: 10px;margin-left: 17px;font-style: italic;">TD n°2</figcaption>
			</figure>	
		</article>	
	</section>
	<footer>
		<p class="positionAuteurDate">Auteur : <strong>Ayad Ishak</strong></p>
		<ul>
			<li><a href="https://cours.u-cergy.fr/user/profile.php?id=8810"><img src="./images/cergy.png" height="30" width="30" alt="Cergy logo"></a></li>
			<li><a href="mailto:ishakayad96@outlook.fr"><img src="./images/mailto.png" height="30" width="30" alt="mail"/></a></li>
			<li><a href="https://www.facebook.com/profile.php?id=100009990018834"><img src="./images/facebook.png" height="30" width="30" alt="facebook"></a></li>	
		</ul>
	</footer>
</body>
</html>