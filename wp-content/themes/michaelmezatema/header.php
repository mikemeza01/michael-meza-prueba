<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title( ' | ', true, 'right' ); bloginfo( 'name' ); ?></title>
	
	<?php 
        wp_head();
    ?>

</head>

<body>
	
	<div id="global-container">
		
		
		<header id="main-header">
			
			<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		
		</header><!-- /#main-header -->
		
		
		<nav id="main-nav">
			<ul class="menu">
				<?php wp_list_pages('title_li='); ?>
			</ul>
		</nav><!-- /#main-nav -->
		
		
		<section id="global-content" class="cf">

