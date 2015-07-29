<div id="parallax_bottom">
	<div class="cover"></div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-9">
				<h6>Wilt u meer informatie over mijn diensten? <br>Laat het mij weten!</h6>
			</div> 
			<div class="col-sm-3">
				<?php echo do_shortcode('[gravityform id="2" title="false" description="false" ajax="true" tabindex="100"]'); ?>
			</div>
		</div>
	</div>
</div>
<footer role="contentinfo">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6">
				<div class="bottomText">
					© <?php echo date('Y') ?> <?php bloginfo( 'name' ); ?> | webdesign door <a href="http://www.stijlenvorm.nl/" target="_blank" <?php if ( !is_front_page() ) echo 'rel="nofollow"' ?>> Stijl en Vorm</a>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6">

				<div class="social_media">
					<span>Volg mij: </span>
					<?php if(get_option('facebook')){ ?>
						<a href="http://facebook.com/<?php echo get_option('facebook'); ?>" target="_blank" class="social-icon facebook">
							<i class="fa fa-facebook"></i>
						</a>
					<?php } ?>
					<?php if(get_option('twitter')){ ?>
						<a href="http://twitter.com/<?php echo get_option('twitter'); ?>" target="_blank" class="social-icon twitter">
							<i class="fa fa-twitter"></i>
						</a>
					<?php } ?>
					<?php if(get_option('linkedin')){ ?>
						<a href="http://linkedin.com/<?php echo get_option('linkedin'); ?>" target="_blank" class="social-icon linkedin">
							<i class="fa fa-linkedin"></i>
						</a>
					<?php } ?>
					<?php if(get_option('pinterest')){ ?>
						<a href="http://pinterest.com/<?php echo get_option('pinterest'); ?>" target="_blank" class="social-icon pinterest">
							<i class="fa fa-pinterest-p"></i>
						</a>
					<?php } ?>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6">
				<?php if(get_option('adres')){ ?>
					<i class="fa fa-map-marker"></i> <?php echo get_option('adres'); ?>
				<?php } ?> , 
				<?php if(get_option('postcode')){ ?>
					<?php echo get_option('postcode'); ?>
				<?php } ?>
				<?php if(get_option('woonplaats')){ ?>
					<?php echo get_option('woonplaats'); ?>
				<?php } ?>
			</div>
			<div class="col-xs-12  col-sm-6 text-right">
				<div class="contact-details-footer">
					<?php if(get_option('email')){ ?>
						<a href="mailto:<?php echo get_option('email'); ?>"><i class="fa fa-envelope"></i> <?php echo get_option('email'); ?></a>
					<?php } ?>,
					<?php if(get_option('telefoon')){ ?>
						<i class="fa fa-phone"></i> <?php echo get_option('telefoon'); ?>
					<?php } ?>
				</div>
			</div>

		</div>
	</div>

	

</footer>



<?php wp_footer(); ?>

</body>

</html>