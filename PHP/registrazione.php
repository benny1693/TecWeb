<!DOCTYPE html>
<html lang="it">

<head>
	<meta name="title" content="Accesso | Filo di Arianna" />
	<title>Pagina di registrazione | Filo di Arianna</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Accedi al tuo profilo o registrati." />
	<meta name="keywords" content="greco, antico, ellenico, grecia, enciclopedia, mitologia, registrazione, registrati" />
	<link rel="stylesheet" type="text/css" href="../CSS/style.css" />
	<link rel="stylesheet" type="text/css" href="../CSS/provelaura.css" />
	<link rel="stylesheet" type="text/css" href="../CSS/aiuti_nav.css" />
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
				<li class="breadcrumb-item active" aria-current="page">Registrazione</li>
			</ol>
		</nav>

		<section id="registrazione">
			<h1>Registrati</h1>

			<form data-toggle="validator">
				<div class="form-group row">
					<label for="inputEmail1" class="col-sm-3 col-form-label">Email</label>
					<div class="col-sm-9">
						<input type="email" class="form-control" id="inputEmail1" placeholder="Email" data-error="Mail invalida" required>
						<!-- <div class="help-block with-errors"></div> -->
					</div>
				</div>

				<div class="form-group row">
					<label for="inputUsername1" class="col-sm-3 col-form-label">Username</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="inputUsername1" placeholder="Username">
					</div>
				</div>

				<div class="form-group row">
					<label for="inputPassword1" class="col-sm-3 col-form-label">Password</label>
					<div class="col-sm-9">
						<input type="password" data-minlength="6" data-maxlength="12" class="form-control" id="inputPassword1" placeholder="Password" required>
						<p class="help-block">La password deve contenere tra 6-12 caratteri.</p>
					</div>
					<label for="inputPasswordConfirm" class="col-sm-3 col-form-label">Conferma password</label>
					<div class="col-sm-9">
						<input type="password" class="form-control" id="inputPasswordConfirm" placeholder="Conferma password" required>
						<!-- <div class="help-block with-errors"></div> -->
						<div class="invalid-feedback">
							Le password non combaciano.
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-sm-offset-3">
					<button type="submit" class="btn  btn-outline-primary">Fatto</button>
				</div>
			</form>
		</section>
	</div>
	<?php require_once "footer.html"?>
</body>

</html>
