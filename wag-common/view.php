	<header id="masthead" class="site-header">
		<div id="header1">
			<div class="site-branding">
				<?php
				the_custom_logo(); ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'wellmadetheme' ); ?></button>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'main-navigation',
					'menu_id'        => 'main-navigation',
				) );
				?>
			</nav><!-- #site-navigation -->
		</div>	
	</header><!-- #masthead -->