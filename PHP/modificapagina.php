<!DOCTYPE html>
<html lang="it">

<head>
	<meta name="title" content="Modifica Pagina | Filo di Arianna" />
	<title>Modifica Pagina | Filo di Arianna</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Accedi al tuo profilo o registrati." />
	<meta name="keywords" content="greco, antico, ellenico, grecia, enciclopedia, mitologia, modifica, pagina" />
	<link rel="stylesheet" type="text/css" href="../CSS/style.css" />
	<link rel="stylesheet" type="text/css" href="../CSS/provelaura.css" />
	<link rel="stylesheet" type="text/css" href="../CSS/aiuti_nav.css" />
	<script src="../JS/custom.js"></script>
</head>

<body>
	<!-- HEADER / SIDEBAR -->
	<?php require_once "header.php" ?>
	<!-- INIZIO PAGINA -->
	<div id="page-content-wrapper" class="container-fluid">
		<nav aria-label="breadcrumb">
			<p class="sr-only">Ti trovi in:</p>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Home</a></li>
				<li class="breadcrumb-item"><a href="areapersonale.php">Area Personale</a></li>
				<li class="breadcrumb-item active" aria-current="page">Modifica Pagina</li>
			</ol>
		</nav>

		<section id="modificapagina">
			<h1>Modifica qui la tua pagina numero: #</h1>
			<!--inserire cod pag-->

			<form>
				<div class="form-group">
					<label for="FormControlFile">Carica l'immagine che vuoi sostituire.</label>
					<input type="file" class="form-control-file" id="FormControlFile">
				</div>

				<div class="form-group">
					<label for="inputTitolo">Titolo</label>
					<!--<div class="col-sm-10">-->
					<input type="text" class="form-control" id="inputTitolo" placeholder="">
				</div>

				<div class="form-group">
					<label for="exampleFormControlTextarea1">Descrizione</label>
					<textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
				</div>

				<div class="form-group">
					<label for="InputCorrelati">Pagine correlate</label>
					<input type="text" class="form-control" id="InputCorrelati" aria-describedby="correlatihelp" placeholder="7, 122">
					<small id="correlatihelp" class="form-text">Ricordati di separare ogni codice con una virgola</small>
				</div>

				<div class="form-group submit-button">
					<button type="submit" class="btn  btn-outline-primary">Fatto</button>
				</div>

			</form>
		</section>

	</div>

	<!-- FOOTER -->
	<?php require_once "footer.html"?>
</body>

</html>
