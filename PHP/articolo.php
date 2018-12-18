<!DOCTYPE html>
<html lang="it">

<head>
	<title>TitoloArticolo | Il Filo di Arianna</title>
	<meta name="title" content="TitoloArticolo | Filo di Arianna" />
	<meta name="description" content="Gestisci le pagine create" />
	<meta name="keyword" content="Filo, Arianna, greco, mitologia, TitoloArticolo" />
	<meta name="author" content="Benedetto Cosentino" />
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="../CSS/style.css" />
	<link rel="stylesheet" type="text/css" href="../CSS/aiuti_nav.css" />
	<link rel="stylesheet" type="text/css" href="../CSS/article.css" />
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
				<li class="breadcrumb-item" aria-current="page">TitoloArticolo</li>
			</ol>
		</nav>
		<section id="articolo">
			<div id="article-title">
				<h1>Titolo</h1>
				<p id="article-id">0000000</p>
			</div>
			<div>
				<figure id="article-image">
					<img class="img-fluid" src="query" alt="Immagine di TitoloArticolo">
				</figure>
				<p id="article-content">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dui dolor, iaculis quis nunc vitae, efficitur malesuada mauris. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus consequat aliquam nibh. Nunc pretium hendrerit neque, et gravida ligula cursus in. Fusce quis convallis massa. Phasellus vel sagittis sem. Vestibulum dictum vitae magna quis posuere. Vestibulum eget congue purus, in euismod nisi. Aenean sagittis odio eu odio viverra varius. Sed dictum enim nec aliquet dictum. Morbi luctus risus ac rhoncus faucibus.

					Etiam massa felis, varius et placerat non, mattis at elit. Vivamus in eleifend felis. Cras vel sapien at lacus volutpat finibus. Nam ut sapien magna. Suspendisse potenti. Fusce non lacinia nunc, nec dapibus risus. Cras efficitur enim non accumsan condimentum. Duis molestie quis odio et scelerisque. Vestibulum efficitur est ut consequat egestas. Mauris at sodales velit, fermentum bibendum ex. Aliquam vitae velit vel ex euismod aliquet. Fusce luctus mauris erat, sed vestibulum justo dignissim hendrerit. Etiam luctus vestibulum mattis.

					Morbi iaculis turpis ut tellus malesuada commodo. Aenean non sem eu mi rhoncus scelerisque sed id ligula. Fusce vel sapien nec turpis lobortis condimentum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean nec tellus orci. Sed molestie massa eget rhoncus pellentesque. Maecenas sit amet mollis arcu. Etiam nec metus ac augue lacinia dignissim euismod nec eros. Vestibulum tempor non lacus ut tincidunt.

					Phasellus interdum eget velit eu pretium. Aenean maximus tempus sollicitudin. Suspendisse ac rhoncus arcu. Nunc placerat tortor nunc, nec malesuada nisi egestas at. Nullam fringilla tortor nulla. Ut elementum mattis quam at laoreet. Nam porttitor mi vel quam aliquam, in tempus elit faucibus. Praesent ut blandit massa, vel auctor quam. In turpis odio, fringilla id tellus et, ornare tristique lectus.

					Pellentesque tempus lorem convallis venenatis auctor. Quisque tincidunt blandit ex, eget porta nulla tincidunt eu. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec in ultricies quam. Morbi ultrices diam id mi porta aliquam. Nam vitae feugiat arcu. Praesent risus augue, tempor eget commodo nec, condimentum ut magna.
				</p>
			</div>
		</section>
	</div>
	<!-- FOOTER -->
	<?php require_once "footer.html" ?>
</body>

</html>
