<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="img/favicon.ico">
	<link rel="stylesheet" href="css/main.min.css">
	<title><?php if (isset($title)) {
				echo $title . ' - ';
			} ?>DWWM</title>
</head>

<body>

	<header id="header" class="header">
		<div class="container">
			<div class="site-nav">
				<p class=logo-text>
					<a class="logo-link" href="index.php">DWWM</a>
				</p>
				<nav class="nav-menu">
				<button class="toggle-menu" aria-expanded="false" aria-controls="menu">Menu</button>
					<ul class="nav-list menu" role="list" hidden>
						<li class="nav-item">
							<a href="index.php" class="nav-link">Accueil</a>
						</li>
						<li class="nav-item">
							<a href="formation.php" class="nav-link">La formation</a>
						</li>
						<li class="nav-item">
							<a href="students.php" class="nav-link">Les étudiants</a>
						</li>
						<li class="nav-item">
							<a href="news.php" class="nav-link">Actualités</a>
						</li>
						<li class="nav-item">
							<a href="contact.php" class="nav-link">Nous contacter</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</header>

	<main class="site-main">