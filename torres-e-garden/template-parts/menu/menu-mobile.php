<?php
/**
 * Displays mobile menu
 *
 * @package Cenote
 */

?>
<nav id="mobile-navigation" class="cenote-mobile-navigation">

                <nav class="main-navigation cenote-sticky-navigation tg-site-menu--default">
                        <!-- Torres Digital Logo Sticky -->
                    <a id="torres-digital-logo-sticky" class="torres-digital-logo-sticky" href="/"></a>
				</nav>
	<?php
	wp_nav_menu( array(
		'theme_location' => 'tg-menu-primary',
		'menu_id'        => 'primary-menu',
	) );
	?>
</nav><!-- #mobile-navigation -->
