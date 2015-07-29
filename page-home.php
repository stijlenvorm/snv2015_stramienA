<?php
/* 
*
*Template name: Homepage 
*
*/

get_header(); ?>
<?php the_post(); ?>

<div class="paginaHeader">
	<div class="cover"></div>
	<video id="headerVideo" width="100%" height="1050" autoplay loop muted>
		<source src="/wp-content/themes/snv2015-child/video/video.mp4" type="video/mp4">
		<source src="/wp-content/themes/snv2015-child/video/video.ogg" type="video/ogg">
		Your browser does not support the video tag.
	</video>

	<h4 class="header_slogan">
		Hier komt een vette slogan
		<span>met nog een subtitel</span>
	</h4>
</div>

<div id="intro_text">
	<div class="container">
		<?php ///the_title( ); ?>

		<?php the_content( ); ?>
	</div>
</div>
<div id="top_blocks">
<?php 
$block1_ID = 51;
$block2_ID = 49;
$block3_ID = 53;
?>

	<div class="container">
		<div class="row nomargin">
			<div class="col-xs-12 col-sm-4 nopadding">
				<div class="block">
					<h3 class="title"><?php echo get_the_title($block1_ID); ?></h3>
					<p>
					<?php
					$temp = $post;
					$post = get_post( $block1_ID );
					setup_postdata( $post );
					?>
					<?php echo get_excerpt(150); ?>

					<?php
					wp_reset_postdata();
					$post = $temp;
					?></p>
					<a href="<?php echo get_the_permalink($block1_ID); ?>" class="btn btn-primary">Lees meer</a>
				</div>
			</div>

			<div class="col-xs-12 col-sm-4 nopadding">
				<div class="block middle">
					<h3 class="title"><?php echo get_the_title($block2_ID); ?></h3>
					<p>
					<?php
					$temp = $post;
					$post = get_post( $block2_ID );
					setup_postdata( $post );
					?>
					<?php echo get_excerpt(150); ?>

					<?php
					wp_reset_postdata();
					$post = $temp;
					?></p>
					<a href="<?php echo get_the_permalink($block2_ID); ?>" class="btn btn-primary">Lees meer</a>
				</div>
			</div>

			<div class="col-xs-12 col-sm-4 nopadding">
				<div class="block">
					<h3 class="title"><?php echo get_the_title($block3_ID); ?></h3>
					<p>
					<?php
					$temp = $post;
					$post = get_post( $block3_ID );
					setup_postdata( $post );
					?>
					<?php echo get_excerpt(150); ?>

					<?php
					wp_reset_postdata();
					$post = $temp;
					?></p>
					<a href="<?php echo get_the_permalink($block3_ID); ?>" class="btn btn-primary">Lees meer</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="c2a_banner">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<span>Heeft u een vraag? Laat het mij weten!</span>
			</div>
			<div class="col-sm-6">
				<a class="btn btn-primary expand_form_btn">Stel uw vraag</a>
			</div>
		</div>
		<div class="form_holder">
			<div style="height:40px;"></div>
			<div class="row">
				<div class="col-sm-8 col-xs-12">
					<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true" tabindex="20"]'); ?>
				</div>
				<div class="col-sm-4 col-xs-12 hidden-xs text-right">
					<div class="phonenumber">
						<span>Bel direct:</span> <br>
						<?php if(get_option('telefoon')){ ?>
							<i class="fa fa-phone"></i> <?php echo get_option('telefoon'); ?>
						<?php } ?>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>

<div id="bottom_blocks">
	<div class="container">
		<div class="row nomargin">
			<div class="col-xs-12 col-sm-4 nopadding">
				<div class="block">
					<!-- <img src="/wp-content/themes/snv2015/images/placeholder1.jpg" /> -->
					<i class="fa fa-thumbs-o-up"></i>
					<h3 class="title">Ik ben flexibel</h3>
					<p>Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus</p>
				</div>
			</div>

			<div class="col-xs-12 col-sm-4 nopadding">
				<div class="block middle">
					<i class="fa fa-coffee"></i>
					<h3 class="title">Jaren lange ervaring</h3>
					<p>Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus</p>
				</div>
			</div>

			<div class="col-xs-12 col-sm-4 nopadding">
				<div class="block">
					<i class="fa fa-users"></i>
					<h3 class="title">Altijd de beste</h3>
					<p>Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus</p>
				</div>
			</div>
		</div>
	</div>
</div>
	
<?php get_footer(); ?>
