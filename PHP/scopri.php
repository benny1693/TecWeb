<!DOCTYPE html>
<html lang="it">

<head>
	<meta name="title" content="Scopri | Filo di Arianna" />
	<title>Scopri | Filo di Arianna</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="description" content="Scopri le voci sulla mitologia greca dell'enciclopedia più ellenica del web" />
	<meta name="author" content="Benedetto Cosentino" />
	<meta name="keywords" content="greco, antico, ellenico, grecia, enciclopedia, mitologia" />
	<meta name="language" content="italian it" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="../CSS/style.css" />
	<link rel="stylesheet" type="text/css" href="../CSS/scopri.css" />
	<link rel="stylesheet" type="text/css" href="../CSS/aiuti_nav.css" />
	<link rel="stylesheet" type="text/css" media="print" href="../CSS/print.css" />
	<script src="../JS/custom.js"></script>
</head>

<body>
	<!-- HEADER -->
	<?php require_once "header.php" ?>
	<div id="page-content-wrapper" class="container-fluid">
		<nav aria-label="breadcrumb">
			<p class="sr-only">Ti trovi in:</p>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Scopri</li>
			</ol>
		</nav>
		<h1>Scopri le voci</h1>
		<ul id="macrocategories">
			<li>
				<a href="#eventi" class="sr-only">Salta lista</a>
				<h2><a href="personaggi.php">Personaggi</a></h2>
				<ul>
					<li><a href="umani.php">Esseri Umani</a></li>
					<li><a href="semidei.php">Semidivinit&agrave;/Eroi</a></li>
					<li><a href="dei.php">Divinit&agrave;</a></li>
					<li><a href="creature.php">Creature</a></li>
				</ul>
			</li>

			<li id="eventi">
				<a href="#luoghi" class="sr-only">Salta lista</a>
				<h2><a href="eventi.php">Eventi</a></h2>
				<ul>
					<li><a href="eventidei.php">Epoca degli Dei</a></li>
					<li><a href="eventiuomini.php">Epoca degli Dei e degli Uomini</a></li>
					<li><a href="eventieroi.php">Epoca degli Eroi</a></li>
				</ul>
			</li>

			<li id="luoghi">
				<a href="#scroll-back-button" class="sr-only">Salta lista</a>
				<h2><a href="luoghi.php">Luoghi</a></h2>
				<ul>
					<li><a href="luoghimitologici.php">Mitologici</a></li>
					<li><a href="luoghireali.php">Reali</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<!-- FOOTER -->
	<?php require_once "footer.html"?>
</body>

</html>
