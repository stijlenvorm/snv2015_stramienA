<?php get_header(); ?>
<?php do_action('contentheader'); ?>
<?php the_post(); ?>

<div class="container">

	<div class="row">

		<div class="col-xd-12 col-sm-9" role="main">
			<div id="breadcrumb">
				<?php
				if ( function_exists( 'yoast_breadcrumb' ) ) {
					yoast_breadcrumb();
				}
				?>
			</div>
			<div class="main-content">
				<h1><?php the_title( ); ?></h1>

				<div>
					<?php the_content( ); ?>
				</div>
			</div>
		</div>

		<div class="hidden-xs col-sm-3" role="complementary">
			<?php get_template_part( 'sidebar' ); ?>
		</div>

	</div>
	
</div>

<?php get_footer(); ?>

