<?php get_header(); ?>
<?php do_action('contentheader'); ?>

<div class="paginaHeader"></div>
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
				<h1 class="mainTitle"><?php printf(single_cat_title( '', false ) . '' ); ?></h1>

				<?php if ( have_posts() ) : ?>
					<section>
						<?php while ( have_posts() ) : the_post(); ?>
							<article>
								
								<?php 
								if ( has_post_thumbnail() ) { ?>
								<a href="<?php echo the_permalink(); ?>">
								<?php the_post_thumbnail('long-thumb'); ?>
								</a>
								<?php } ?> 			
								
								<a href="<?php echo the_permalink(); ?>">
									<h3><?php  the_title() ?></h3>
								</a>
								<div class="post_meta">
									<span class="date"><i class="fa fa-calendar"></i> <?php the_date(); ?> </span> | 
									<span class="category"><i class="fa fa-folder"></i> <?php the_category(); ?></span> | 
									<span class="auteur"><i class="fa fa-user"></i> <?php the_author(); ?> </span>
								</div>
								<div>
									<?php the_excerpt(); ?>
								</div>
							</article>
						<?php endwhile; ?>

						<div>
							<?php the_posts_pagination( ); ?>	
						</div>

					</section>

				<?php else: ?>

					geen resultaten...

				<?php endif; ?>
			</div>
		</div>

		<div class="hidden-xs col-sm-3" role="complementary">
			<?php get_template_part('sidebar'); ?>
		</div>
	</div>
</div>




<?php get_footer(); ?>

