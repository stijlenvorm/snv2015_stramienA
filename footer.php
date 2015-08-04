	<div id="parallax_bottom" data-stellar-background-ratio="0.3">
		<div class="cover"></div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-9">
					<h6>Wilt u meer informatie over mijn diensten? <br>Laat het mij weten!</h6>
				</div> 
				<div class="col-sm-3">
					<?php if (shortcode_exists('gravityform')): ?>
						<?php echo do_shortcode('[gravityform id="2" title="false" description="false" ajax="true" tabindex="100"]'); ?>					
					<?php else : ?>
						<p>Gravity forms is niet geinstalleerd....</p>
					<?php endif ?>
				</div>
			</div>
		</div>
	</div>

	<footer>
		<div class="container">
			<div class="row">	
				<div class="col-xs-12 col-sm-6">
					© <?php echo date('Y') ?> <?php bloginfo( 'name' ); ?> | webdesign door <a href="http://www.stijlenvorm.nl/" target="_blank" <?php if ( !is_front_page() ) echo 'rel="nofollow"' ?>> Stijl en Vorm</a>
				</div>
				
				<div class="col-xs-12 col-sm-6">
					<div class="social_media">
						<span>Volg mij: </span>
						<?php echo do_shortcode('[socialbuttons class="footerSocialButtons"]' ); ?>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<?php echo do_shortcode('[contactinfo class="inline" include="adres, woonplaats"]' ); ?>
				</div>

				<div class="col-xs-12  col-sm-6 text-right">
					<div class="contact-details-footer">
						<?php echo do_shortcode('[contactinfo class="inline" include="mail, tel"]' ); ?>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<?php wp_footer(); ?>

</body>
</html>