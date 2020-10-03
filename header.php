<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php bloginfo( 'name' ); ?></title>
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
	<?php wp_head(); ?>
</head>
<body>

<header>
	<div class="container">
		<h1 class="white"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
		<small class="whitedesc"><a href="<?php bloginfo('url'); ?>"><?php bloginfo( 'description' ) ?></a></small>
	</div>
</header>
<nav class="main-nav">
	<div class="container">
		<?php 
			$args = array(
				'theme_location'	=> 'primary'
			);
		 ?>
		 <?php wp_nav_menu($args); ?>
	</div>
</nav>