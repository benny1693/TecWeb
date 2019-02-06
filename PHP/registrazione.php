<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it-IT" lang="it-IT">

<head>
	<title>Pagina di registrazione | Filo di Arianna</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Accedi al tuo profilo o registrati." />
	<meta name="keywords" content="greco, antico, ellenico, grecia, enciclopedia, mitologia, registrazione, registrati" />
	<link rel="stylesheet" type="text/css" href="../CSS/style.css" />
	<link rel="stylesheet" type="text/css" media="print" href="../CSS/print.css" />
	<script src="../JS/custom.js"></script>
</head>

<body>
	<!-- HEADER / SIDEBAR -->
	<div id="page-content-wrapper" class="container-fluid">
		<nav aria-label="breadcrumb">
			<p class="sr-only">Ti trovi in:</p>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="../index.html">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Registrazione</li>
			</ol>
		</nav>

		<section id="registrazione">
			<h1>Registrati</h1>

			<form data-toggle="validator">

				<div class="form-group row">
					<label for="inputName" class="col-sm-3 col-form-label">Nome</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="inputName" placeholder="Nome" data-error="Nome non valido" required="required" />
					</div>
				</div>

				<div class="form-group row">
					<label for="inputSurename" class="col-sm-3 col-form-label">Cognome</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="inputSurename" placeholder="Cognome" data-error="Cognome non valido" required="required" />
					</div>
				</div>

				<!-- <fieldset class="form-group"> -->
				 <fieldset class="form-group row">
					 <legend class="col-sm-3 col-form-label">Sesso</legend>
					 <div class="col-sm-9">
						 <div class="form-check">
							 <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked="checked" />
							 <label class="form-check-label" for="gridRadios1">
								 Maschio
							 </label>
						 </div>
						 <div class="form-check">
							 <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2"/>
							 <label class="form-check-label" for="gridRadios2">
								 Femmina
							 </label>
						 </div>
					 </div>
				 </fieldset>
			<!--  </fieldset> -->

				<div class="form-group row">
				      <label for="inputDate" class="col-sm-3 col-form-label">Data di nascita</label>
							<div class="col-sm-9">
				      <input type="date" class="form-control" id="inputDate" />
				    </div>
				</div>

				<div class="form-group row">
					<label for="inputEmail" class="col-sm-3 col-form-label" lang="en">Email</label>
					<div class="col-sm-9">
						<input type="email" class="form-control" id="inputEmail" placeholder="Email" data-error="Mail non valida" required="required" />
						<!-- <div class="help-block with-errors"></div> -->
					</div>
				</div>

				<div class="form-group row">
					<label for="inputUsername" class="col-sm-3 col-form-label" lang="en">Username</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="inputUsername" placeholder="Username" required="required" />
					</div>
				</div>

				<div class="form-group row">

					<label for="inputPassword" class="col-sm-3 col-form-label" lang="en">Password</label>
					<div class="col-sm-9">
						<input type="password" data-minlength="6" data-maxlength="12" class="form-control" id="inputPassword" placeholder="Password" required="required" />
						<p class="help-block">La password deve contenere tra 6-12 caratteri.</p>
					</div>
					<label for
					="inputPasswordConfirm" class="col-sm-3 col-form-label">Conferma password</label>
					<div class="col-sm-9">
						<input type="password" class="form-control" id="inputPasswordConfirm" placeholder="Conferma password" required="required" />
						<!-- <div class="help-block with-errors"></div> -->
					</div>
				</div>

				<div class="col-sm-10 col-sm-offset-3">
					<button type="submit" class="btn  btn-outline-primary">Fatto</button>
				</div>
			</form>

		</section>
	</div>
</body>

</html>
