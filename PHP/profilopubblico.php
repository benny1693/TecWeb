<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it-IT" lang="it-IT">

<head>
	<title>Profilo di CiccioPasticcio | Il Filo di Arianna</title>
	<meta name="description" content="Gestisci le pagine create" />
	<meta name="keywords" content="Filo, Arianna, greco, pagina, profilo, pubblico" />
	<meta name="author" content="Benedetto Cosentino" />
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
				<li class="breadcrumb-item active" aria-current="page">Area personale</li>
			</ol>
		</nav>
		<section>
			<h1>Profilo di CiccioPasticcio</h1>
			<h2>Dati personali</h2>
			<dl id="personalia">
				<dt>Nome</dt>
				<dd>Ciccio</dd>
				<dt>Cognome</dt>
				<dd>Pasticcio</dd>
				<dt>Data di nascita</dt>
				<dd>01/01/2001</dd>
				<dt>Occupazione</dt>
				<dd>Pasticcio</dd>
			</dl>

			<h2>Pagine pubblicate</h2>
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
					<a href="#">
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

	<!-- FOOTER di Matteo -->
</body>

</html>


<!--NOTE 
La visualizzazione e le funzionalità  disponibili della pagina cambiano in base all'utente:

ADMIN:
1)In PAGINE PENDENTI:
vede tutte le pagine che hanno bisogno di approvazione e può accettarle o no(in questo caso viene inviata una mail a chi l'aveva creata per dirgli il perchè)
2)In PAGINE PUBBLICATE:
vede tutte le pagine pubblicate e può eliminarle (in questo caso viene inviata una mail a chi l'aveva creata per dirgli il perchè)

UTENTE:
1)In PAGINE PENDENTI:
vede le pagine che ha creato che attendono approvazione da parte di un admin, può in tempo reale eliminarle o modificarle
2)In PAGINE PUBBLICATE:
vede le pagine che ha creato che sono state pubblicate, può eliminarle o modicarle
Una modifica per essere visibile ha bisogno di approvazione, cioè:
la pagina attuale rimane tra le pagine  pubblicate, ma viene creata una copia con le modifiche apportate sulle pagine pendenti,
se la pagina pendente viene accettata essa sostituisce la versione precedente sulle pagine pubblicate.
Una eliminazione non richiede autorizazioni.
 -->
