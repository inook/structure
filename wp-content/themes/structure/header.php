<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?php bloginfo('name'); ?></title>

	<!-- WORDPRESS -->
	<?php wp_head(); ?>

	<!-- CSS -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/src/style.min.css">

	<!-- HTML5 for IE -->
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>

<body <?php body_class();?> >

	<header>

		<!-- Menu -->
		<nav>

			<div class="nav-desktop">
				<?php wp_nav_menu( $args ); ?>
			</div>

			<div class="nav-mobile">
				<img src="<?php bloginfo('template_url'); ?>/img/header/menu.svg" width="28" height="20">
			</div>

		</nav> 

		<!-- Logo -->
		<div class="logo logo-large">
			<h1>
				<a href="<?php bloginfo('url'); ?>">
					STRUCTURE
				</a>
			</h1>
		</div>

		<!-- Logo small -->
		<div class="logo logo-small">
			<h1>
				<a href="<?php bloginfo('url'); ?>">
					ST.
				</a>
			</h1>
		</div>

		<!-- Cart -->
		<div class="cart">
			<div class="cart-inner">
				<span class="cart-title">View cart</span>
				<span class="cart-count">12</span>
			</div>
		</div>

	</header>
