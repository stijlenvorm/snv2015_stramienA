<!DOCTYPE html>
<html lang="">
<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

	<?php wp_head(); ?>
</head>
<body <?php body_class( ); ?>>

	<header class="pageHeader">
		<div class="container">	
				<div class="logo">
					<a href="<?php echo get_site_url(); ?>" title="<?php echo bloginfo('name'); ?> - <?php echo bloginfo('description'); ?>"><img src="<?php echo get_option('home-logo'); ?>" alt="<?php echo bloginfo( 'name' ); ?>"></a>
				</div>

				<div class="menuHolder">
					<div class="mobile_menuToggle">
						<span></span>
						<span></span>
						<span></span>
					</div>

					<nav role="navigation" id="main_navigation" class="header_menu hideMenuMobile">
						<?php wp_nav_menu( array( 'header_menu' => 'header-menu' ) ); ?>
					</nav>		
				</div>
			</div>
		</div>
	</header>
	
	<div class="pushTop"></div> <?php // offsets the top cause of the fixed header, being calculated by JS on DOM rdy, resize and scroll.. ?>