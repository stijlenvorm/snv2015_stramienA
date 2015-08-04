<?php // standard sidebar ?>
<div id="sidebar">

	<?php // contact form ?>

	<section class="sidebarBlock">
		<?php get_search_form(); ?>
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