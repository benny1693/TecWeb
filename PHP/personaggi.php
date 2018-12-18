<!DOCTYPE html>
<html lang="it">

<head>
	<meta name="title" content="Personaggi | Filo di Arianna" />
	<title>Personaggi | Filo di Arianna</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="description" content="Scopri le voci sui personaggi della mitologia greca dell'enciclopedia più ellenica del web" />
	<meta name="author" content="Benedetto Cosentino" />
	<meta name="keywords" content="greco, antico, ellenico, grecia, enciclopedia, mitologia, personaggi" />
	<meta name="language" content="italian it" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="../CSS/style.css" />
	<link rel="stylesheet" type="text/css" href="../CSS/aiuti_nav.css" />
	<link rel="stylesheet" type="text/css" href="../CSS/scopri.css" />
	<script src="../JS/custom.js"></script>
</head>

<body>
	<!-- HEADER / SIDEBAR -->
	<?php require_once "header.php" ?>
	<div id="page-content-wrapper" class="container-fluid">
		<nav aria-label="breadcrumb">
			<p class="sr-only">Ti trovi in:</p>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Home</a></li>
				<li class="breadcrumb-item"><a href="scopri.php">Scopri</a></li>
				<li class="breadcrumb-item active" aria-current="page">Personaggi</li>
			</ol>
		</nav>
		<section>
			<h1>Personaggi</h1>
			<ul id="macrocategories">
				<li>
					<a href="articolo.phpsemidei" class="sr-only">Salta lista</a>
					<h2><a href="umani.php">Esseri Umani</a></h2>
					<ul class="categories">
						<li><a href="articolo.php">articolo1</a></li>
						<li><a href="articolo.php">articolo2</a></li>
					</ul>
				</li>

				<li id="semidei">
					<a href="articolo.phpdei" class="sr-only">Salta lista</a>
					<h2><a href="semidei.php">Semidivinit&agrave; ed Eroi</a></h2>
					<ul class="categories">
						<li><a href="articolo.php">articolo1</a></li>
						<li><a href="articolo.php">articolo2</a></li>
					</ul>
				</li>

				<li id="dei">
					<a href="articolo.phpcreature" class="sr-only">Salta lista</a>
					<h2><a href="dei.php">Divinit&agrave;</a></h2>
					<ul class="categories">
						<li><a href="articolo.php">articolo1</a></li>
						<li><a href="articolo.php">articolo2</a></li>
					</ul>
				</li>

				<li id="creature">
					<a href="articolo.phpscroll-back-button" class="sr-only">Salta lista</a>
					<h2><a href="creature.html">Creature</a></h2>
					<ul class="categories">
						<li><a href="articolo.php">articolo1</a></li>
						<li><a href="articolo.php">articolo2</a></li>
					</ul>
				</li>
			</ul>
		</section>
	</div>
	<!-- FOOTER -->
	<?php require_once "footer.html"?>
</body>

</html>
