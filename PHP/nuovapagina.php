<!DOCTYPE html>
<html lang="it">

<head>
	<meta name="title" content="Nuova Pagina | Filo di Arianna" />
	<meta charset="utf-8" />
	<title>Nuova Pagina | Filo di Arianna</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Accedi al tuo profilo o registrati." />
	<meta name="author" content="Laura Cameran" />
	<meta name="keywords" content="greco, antico, ellenico, grecia, enciclopedia, mitologia, pagina, creazione, nuova" />
	<link rel="stylesheet" type="text/css" href="../CSS/style.css" />
	<link rel="stylesheet" type="text/css" href="../CSS/aiuti_nav.css" />
	<link rel="stylesheet" type="text/css" href="../CSS/provelaura.css" />
	<link rel="stylesheet" type="text/css" media="print" href="../CSS/print.css" />
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
				<li class="breadcrumb-item active" aria-current="page">Nuova Pagina</li>
			</ol>
		</nav>

		<section id="nuovapagina">
			<h1>Crea una nuova pagina</h1>
			<form>
				<div class="form-group">
					<label for="FormControlFile">Carica l'immagine che vuoi inserire.</label>
					<!-- <input type="file" class="form-control-file" id="FormControlFile"> -->
					<input type="file" class="form-control-file" id="FormControlFile">
				</div>
				<!-- 	ALTERNATIVA
							<div class="custom-file">
						    <input type="file" class="custom-file-input" id="validatedCustomFile" required>
						    <label class="custom-file-label" for="validatedCustomFile">Scegli immagine..</label>
						    <div class="invalid-feedback">Example invalid custom file feedback</div>
						  </div>
							-->

				<div class="form-group">
					<label for="inputTitolo">Titolo</label>
					<!--<div class="col-sm-10">-->
					<input type="text" class="form-control" id="inputTitolo" placeholder="Titolo">
				</div>

				<div class="form-group">
					<label for="FormControlTextarea1">Descrizione</label>
					<textarea class="form-control" id="FormControlTextarea1" rows="10"></textarea>
				</div>

				<div class="form-group">
					<label for="InputCorrelati">Pagine correlate</label>
					<input type="text" class="form-control" id="InputCorrelati" aria-describedby="correlatihelp" placeholder="13, 5, 9">
					<small id="correlatihelp" class="form-text text-muted">Separa ogni codice da una virgola e uno spazio.</small>
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
