<?php 
/* Template name: Homepage  */

get_header(); ?>
<?php the_post(); ?>

<div class="paginaHeader">
	<video id="headerVideo" width="100%" height="1050" autoplay loop muted>
		<source src="<?php echo get_stylesheet_directory_uri(); ?>/video/video.mp4" type="video/mp4">	
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
	<div class="container">
		<div class="row nomargin">
					
			<div class="col-xs-12 col-sm-4 nopadding">
				<div class="block">
					<?php echo do_shortcode('[pageblock pageid="2"]'); ?>
				</div>
			</div>

			<div class="col-xs-12 col-sm-4 nopadding">
				<div class="block">
					<?php echo do_shortcode('[pageblock pageid="2"]'); ?>
				</div>
			</div>

			<div class="col-xs-12 col-sm-4 nopadding">
				<div class="block">
					<?php echo do_shortcode('[pageblock pageid="2"]'); ?>
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
					<?php if ( shortcode_exists('gravityform')): ?>
						<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true" tabindex="20"]'); ?>						
					<?php else : ?>
						<p>Gravity forms is niet geinstalleerd....</p>
					<?php endif ?>
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
