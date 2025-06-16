</div>
<div class="line-top-footer"></div>

	<div class="top-footer">
		<div class="footer-livraison">
			<p class="top-footer-title">Livraison</p>
			<p>Commandez en ligne et choisissez le mode de livraison qui vous convient :</p>
			<div class="choix-livraison">
				<img class="livraison-icon" src="<?= get_stylesheet_directory_uri() . "/assets/images/ebook-icon.png" ?>" alt="Commander un livre au format ebook">
				<img class="livraison-icon" src="<?= get_stylesheet_directory_uri() . "/assets/images/envoi-postal-icon.png" ?>" alt="Commander un livre au format ebook">
			</div>
		</div>
		<div class="footer-paiement">
			<p class="top-footer-title">Paiement</p>
			<img class="paiement-icon" src="<?= get_stylesheet_directory_uri() . "/assets/images/paiement-carte-bancaire-stripe.png" ?>" alt="Paiement carte bancaire sécurisé avec Stripe">
		</div>
		<div class="footer-suivez-nous">
			<p class="top-footer-title">Suivez-nous</p>
			<img class="facebook-icon" src="<?= get_stylesheet_directory_uri() . "/assets/images/facebook.png" ?>" alt="Suivez-nous sur Facebook">
		</div>	
	</div>

	<footer>	
			<p>© Copyright 2025</p>
			<!-- menu footer -->
			<?php
				$defaults = array(
				'theme_location' => 'footer-menu', 
				'container' => '', 
				'menu_class' => 'my-footer-menu', 
				'menu' => 'footer'
				);
				wp_nav_menu($defaults);
			?>
	</footer>
    <?php wp_footer(); ?>
	</body>
</html>