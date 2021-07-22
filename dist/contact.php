<?php $page = 'contact';
$title = 'Contactez-nous'; ?>

<?php include('php/header.php'); ?>

<section class="contact" id="contact">
	<div class="container-narrow">
		<h1 class="contact-title h2-like">Nous contacter</h1>
		<form action="send_contact.php" method="post" class="contact-form">
			<ul class="field-list" role="list">
				<li class="field-item">
					<label for="name">Votre nom</label>
					<input type="text" id="name" name="user_name" aria-label="Votre nom" placeholder="Entrez votre nom">
				</li>
				<li class="field-item">
					<label for="mail">Votre e-mail</label>
					<input type="email" id="mail" name="user_mail" aria-label="Votre e-mail" placeholder="Entrez votre adresse e-mail">
				</li>
				<li class="field-item">
					<label for="msg">Votre message</label>
					<textarea id="msg" name="user_message" aria-label="Votre message" placeholder="Tapez votre message" rows="10"></textarea>
				</li>
			</ul>
			<button class="contact-button btn submit-button">
				Envoyer
				<img src="img/ico_arrow_right.svg" alt="Une icone de flèche vers la droite">
			</button>
		</form>
	</div>
</section>

<?php include('php/footer.php'); ?>