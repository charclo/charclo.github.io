<div class="container-fluid row" role="main">
	<div class="main-menu" >
		<nav id="site-navigation" class="navbar navbar-expand-lg navbar-fixed-top">     
			<div class="container">   
				<div class="navbar-header">
					<?php if ( has_nav_menu( 'main_menu' ) ) : ?>
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-1-collapse">
							<span class="sr-only"><?php esc_html_e( 'Toggle navigation', 'hometard' ); ?></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					<?php endif; ?>
					<div class="site-header" >
						<div class="site-branding-logo">
							<?php the_custom_logo(); ?>
						</div>
						<div class="site-branding-text navbar-brand">
							<?php if ( is_front_page() ) : ?>
								<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php else : ?>
								<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
							<?php endif; ?>

							<?php
							$description = get_bloginfo( 'description', 'display' );
							if ( $description || is_customize_preview() ) :
								?>
								<p class="site-description">
									<?php echo $description; ?>
								</p>
							<?php endif; ?>
						</div><!-- .site-branding-text -->
					</div>
				</div>  
				<?php
				wp_nav_menu( array(
					'theme_location'	 => 'main_menu',
					'depth'				 => 5,
					'container'			 => 'div',
					'container_class'	 => 'collapse navbar-collapse navbar-1-collapse',
					'menu_class'		 => 'nav navbar-nav navbar-right',
					'fallback_cb'		 => 'wp_bootstrap_navwalker::fallback',
					'walker'			 => new wp_bootstrap_navwalker(),
				) );
				?>
			</div>    
		</nav> 
	</div>
</div>
					<?php if ( has_post_thumbnail() ) : ?>
						<div class="single-thumbnail featured-thumbnail">
							<img class="lazy" src="<?php echo get_template_directory_uri() . '/img/placeholder.png' ?>" data-src="<?php the_post_thumbnail_url( 'hometard-single' ); ?>" alt="<?php the_title_attribute(); ?>" />
							<noscript>
								<?php the_post_thumbnail( 'hometard-single' ); ?>
							</noscript>
						</div>
					<?php endif; ?>
<div class="container main-container" role="main">
