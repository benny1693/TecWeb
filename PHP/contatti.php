<!DOCTYPE html>
<html lang="it">

<head>
	<meta name="title" content="Contatti | Filo di Arianna" />
	<title>Contatti | Filo di Arianna</title>
	<meta charset="utf-8" />
	<meta name="description" content="Elenco dei contatti dell'associazione Filo di Arianna" />
	<meta name="keywords" content="greco, antico, ellenico, grecia, enciclopedia, mitologia, contatti" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="author" content="Laura Cameran" />
	<link rel="stylesheet" type="text/css" href="../CSS/style.css" />
	<link rel="stylesheet" type="text/css" href="../CSS/aiuti_nav.css" />
	<link rel="stylesheet" type="text/css" href="../CSS/provelaura.css" />
	<link rel="stylesheet" type="text/css" media="print" href="../CSS/print.css" />
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
				<li class="breadcrumb-item active" aria-current="page">Contatti</li>
			</ol>
		</nav>

		<section class="container-fluid">

			<div id="recapiti" class="row">
				<div id="contattomail" class="col-md-6">
					<h1> <span lang="en">E-mail</span> </h1>
					<p>La nostra <span lang="en">mail</span>: <span class="information">filo_arianna@gmail.com</span>.</p>
				</div>

				<div id="contattotelefonico" class="col-md-6">
					<h1>Telefono</h1>
					<p>Puoi chiamarci ogni giorno dalle 8:00 alle 20:00 al numero: <span class="information">011 3456221</span>.</p>
				</div>
			</div>

			<div id="contattomessaggio" class="row">
				<h1>Oppure.. manda qui il tuo messaggio!</h1>

				<form>
					<div class="form-group row">
						<!--<label for="FormControlTextarea1">Scrivi</label>-->
						<textarea class="form-control" id="FormControlTextarea" rows="17"></textarea>
					</div>

					<div class="form-group row">
						<button type="submit" class="btn btn-outline-primary">Invia</button>
					</div>
				</form>
			</div>

		</section>
	</div>

	<!-- FOOTER -->
	<?php require_once "footer.html" ?>
</body>

</html>
