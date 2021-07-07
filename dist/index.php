<?php $page = 'home';
$title = 'Accueil'; ?>

<?php include('php/header.php'); ?>

<section id="hero" class="hero">
	<div class="container">
		<div class="title-card">
			<h1 class="hero-title">Bienvenue sur le site de la <br>promotion DWWM2021-3</h1>
			<ul class="cta-list" role="list">
				<li class="cta-item">
					<a href="students.php" class="cta-link btn">Rencontrez nos étudiants</a>
				</li>
			</ul>
		</div>
	</div>
</section>

<section id="news" class="news">
	<div class="container">
		<h2 class="title-news h1-like">Les dernières actualités</h2>
		<ul class="news-list" role="list">
			<li class="news-item card">
				<img src="img/photo_terminal.webp" alt="Photo d'un écran qui affiche un terminal" class="news-image">
				<div class="news-content">
					<div class="news-date">
						<img src="img/ico_calendar.svg" alt="L'icone d'un calendrier" class="calendar">
						<time class="news-date">12/02/2021</time>
					</div>
					<h3 class="news-title">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</h3>
					<p class="news-desc">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, …</p>
				</div>
				<a href="news_detail.php" class="news-link btn">Lire la suite<img src="img/ico_arrow_right.svg" alt="Une icone de flèche vers la droite"></a>
			</li>
			<li class="news-item card">
				<img src="img/photo_mackbook.webp" alt="Photo d'un Macbook et d'une plante" class="news-image">
				<div class="news-content">
					<div class="news-date">
						<img src="img/ico_calendar.svg" alt="L'icone d'un calendrier" class="calendar">
						<time class="news-date">12/02/2021</time>
					</div>
					<h3 class="news-title">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</h3>
					<p class="news-desc">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, …</p>
				</div>
				<a href="news_detail.php" class="news-link btn">Lire la suite<img src="img/ico_arrow_right.svg" alt="Une icone de flèche vers la droite"></a>
			</li>
			<li class="news-item card">
				<img src="img/photo_keyboard.webp" alt="Photo d'un clavier" class="news-image">
				<div class="news-content">
					<div class="news-date">
						<img src="img/ico_calendar.svg" alt="L'icone d'un calendrier" class="calendar">
						<time class="news-date">12/02/2021</time>
					</div>
					<h3 class="news-title">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</h3>
					<p class="news-desc">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, …</p>
				</div>
				<a href="news_detail.php" class="news-link btn">Lire la suite<img src="img/ico_arrow_right.svg" alt="Une icone de flèche vers la droite"></a>
			</li>
		</ul>
	</div>
</section>

<section id="students" class="students">
	<div class="container">
		<h2 class="student-title h1-like">Rencontrez les étudiants</h2>
		<ul class="student-list" role="list">
			<li class="student-item">
				<img src="img/ava_francine.webp" alt="Photo de Francine Auhi" class="student-avatar">
				<p class="student-name">Francine Auhi</p>
				<a href="students_detail.php" class="student-link">En savoir plus</a>
			</li>
			<li class="student-item">
				<img src="img/ava_ali.webp" alt="Photo de Ali Korn" class="student-avatar">
				<p class="student-name">Ali Korn</p>
				<a href="students_detail.php" class="student-link">En savoir plus</a>
			</li>
			<li class="student-item">
				<img src="img/ava_jean.webp" alt="Photo de Jean Vascrit" class="student-avatar">
				<p class="student-name">Jean Vascrit</p>
				<a href="students_detail.php" class="student-link">En savoir plus</a>
			</li>
			<li class="student-item">
				<img src="img/ava_lara.webp" alt="Photo de Lara Velle" class="student-avatar">
				<p class="student-name">Lara Velle</p>
				<a href="students_detail.php" class="student-link">En savoir plus</a>
			</li>
		</ul>
	</div>
</section>

<section id="formation" class="formation"></section>
<div class="container">
	<h2 class="h1-like">Les modules de la formation</h2>
	<ul class="formation-list" role="list">
		<li class="formation-item card">
			<img src="img/photo_code_html.webp" alt="Photo" class="formation-image">
			<div class="formation-content">
				<h3 class="formation-title">Module HTML/CSS</h3>
				<p class="formation-desc">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, …</p>
			</div>
			<a href="formation_detail.php" class="formation-link btn">Lire la suite<img src="img/ico_arrow_right.svg" alt="Une icone de flèche vers la droite"></a>
		</li>
		<li class="formation-item card">
			<img src="img/photo_custom_keyboard.webp" alt="" class="formation-image">
			<div class="formation-content">
				<h3 class="formation-title">Module JavaScript</h3>
				<p class="formation-desc">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, …</p>
			</div>
			<a href="formation_detail.php" class="formation-link btn">Lire la suite<img src="img/ico_arrow_right.svg" alt="Une icone de flèche vers la droite"></a>
		</li>
	</ul>
</div>
</section>

<?php include('php/footer.php'); ?>