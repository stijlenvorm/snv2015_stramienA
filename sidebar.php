<?php // standard sidebar ?>
<div id="sidebar">

	<?php // contact form ?>

	<section class="sidebarBlock">
		<?php get_search_form(); ?>
		<img class="itsme alignnone wp-image-21 size-full" src="http://denniskemperman.nl/wp-content/uploads/2015/07/modal-luuk.jpg" alt="modal-luuk" width="262" height="414">
		<div class="contact">
			<h5>Neem contact met mij op</h5>
			<?php if(get_option('telefoon')){ ?>
				<a href="tel:<?php echo get_option('telefoon'); ?>">
					<i class="fa fa-phone"></i> <?php echo get_option('telefoon'); ?>
				</a>
			<?php } ?>
			<br>
			<?php if(get_option('email')){ ?>
				<a href="mailto:<?php echo get_option('email'); ?>">
					<i class="fa fa-envelope"></i> <?php echo get_option('email'); ?>
				</a>
			<?php } ?>
		</div>
		<div>

		</div>

	</section>
</div>