<?php 
/*
*
* Template name: Geen sidebar
*
*/
get_header(); ?>

<?php the_post(); ?>

<?php do_action('contentheader'); ?>

<div class="container">

	<div class="row">

		<div class="col-xd-12 col-sm-12" role="main">
			<div id="breadcrumb">
				<?php
				if ( function_exists( 'yoast_breadcrumb' ) ) {
					yoast_breadcrumb();
				}
				?>
			</div>
			<div class="main-content nopadding">
				<h1><?php the_title( ); ?></h1>
				
				<div>
					<?php the_content( ); ?>
				</div>
			</div>
		</div>

	</div>

</div>

<?php get_footer(); ?>

