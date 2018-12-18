<!DOCTYPE html>
<html lang="it">

<head>
	<meta charset="utf-8" />
	<meta name="title" content="Ricerca" />
	<!-- Questa pagina di ricerca non la si vuole indicizzare -->
	<meta name="robots" content="noindex">
	<meta name="author" content="Matteo Ranzato" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Filo di Arianna</title>
	<link rel="stylesheet" type="text/css" href="../CSS/style.css" />
	<link rel="stylesheet" type="text/css" href="../CSS/style_list.css" />
	<link rel="stylesheet" type="text/css" href="../CSS/aiuti_nav.css" />
	<link rel="stylesheet" type="text/css" media="print" href="../CSS/print.css" />
	<script src="JS/custom.js"></script>
</head>

<body>
	<!--HEADER-->
	<?php require_once "header.php" ?>
	<div id="page-content-wrapper" class="container-fluid">
		<nav aria-label="breadcrumb">
			<p class="sr-only">Ti trovi in: </p>
			<ol class="breadcrumb">
				<li class="breadcrumb-item" lang="en"><a href="index.php">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page" lang="en">Ricarca</li>
			</ol>
		</nav>
		<section>
			<h1>Risultati di ricerca</h1>
			<nav aria-label="Paginazione" class="nav-pages">
				<ul class="pagination">
					<li class="page-item disabled"><a href="#">&laquo;</a></li>
					<li class="page-item disabled"><a href="#">&lsaquo;</a></li>
					<li class="page-item disabled"><a href="#" class="page-link">1</a></li>
					<li class="page-item"><a href="#" class="page-link">2</a></li>
					<li class="page-item"><a href="#" class="page-link">3</a></li>
					<li class="page-item"><a href="#" class="page-link">&rsaquo;</a></li>
					<li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
				</ul>
			</nav>
			<ul class="query">
				<li>
					<a href="articolo.php">
						<img src="query" alt="imago" class="image" />
						<p>Nome</p>
						<p>Descrizione</p>
					</a>
				</li>
			</ul>
			<nav aria-label="Paginazione" class="nav-pages">
				<ul class="pagination">
					<li class="page-item disabled"><a href="#">&laquo;</a></li>
					<li class="page-item disabled"><a href="#">&lsaquo;</a></li>
					<li class="page-item disabled"><a href="#" class="page-link">1</a></li>
					<li class="page-item"><a href="#" class="page-link">2</a></li>
					<li class="page-item"><a href="#" class="page-link">3</a></li>
					<li class="page-item"><a href="#" class="page-link">&rsaquo;</a></li>
					<li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
				</ul>
			</nav>
		</section>
	</div>
	<!--FOOTER-->
	<?php require_once "footer.html"?>
</body>

</html>
