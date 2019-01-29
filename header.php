<?php
/**
 * The header for the theme
 *
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body>
	
<a class="screen-reader-text" href="#content">Skip to content</a>

<header class="site-header">
	<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>

	<nav class="main-navigation">
		<?php
		wp_nav_menu( array(
			'theme_location' => 'menu-1',
			'menu_id'        => 'primary-menu',
            'fallback'        => 'NavWalker::fallback',
            'walker'          => new NavWalker()
		) );

        wp_nav_menu(array(
            'theme_location' => 'menu-1',
            'menu_id'        => 'primary-menu',
            'depth'           => 2,
            'container'       => false,
            'menu_class'      => 'nav nav-pills pull-right',
            'fallback'        => 'NavWalker::fallback',
            'walker'          => new NavWalker()
        ));

        ?>
	</nav>
</header>

<div id="content" class="site-content">
	