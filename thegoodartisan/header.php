<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package thegoodartisan
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'thegoodartisan' ); ?></a>

	<header id="masthead" class="site-header">
		<nav class="navbar navbar-expand-md navbar-light bg-light">
			<div class="container">
				
			
			  	<!-- wp dynamic logo -->		 
			    <div id="thegoodartisan-logo" class="site-branding">
					<h1>
						<a class="navbar-brand" title="The Good Artisan Logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">							
							<?php							
								//the_custom_logo();//<a ...><img></a>	
								//info from https://codex.wordpress.org/Theme_Logo
								if ( has_custom_logo() ) {

										$custom_logo_id = get_theme_mod( 'custom_logo' );//add_theme_support( 'custom-logo')
										$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );	

								        echo '<img class="img-fluid" src="'. esc_url( $logo[0] ) .'"> <span class="site-title">' . get_bloginfo( 'name' ) . '</span>';
								} else {
								        echo get_bloginfo( 'name' );
								}

							?>						

						</a>
						
					</h1>	
					<?php			
						$tga_underscores_description = get_bloginfo( 'description', 'display' );
						if ( $tga_underscores_description || is_customize_preview() ) :
					?>
							<p class="site-description"><?php echo $tga_underscores_description; /* WPCS: xss ok. */ ?></p>
					<?php 
						endif; 
					?>			         
			    </div><!-- #thegoodartisan-logo .site-branding -->


			  <!-- mobile menu toggler -->
			  <button class="navbar-toggler pt-3 pb-3" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">	
			  	
			  	<!-- mobile toggle hamburger menu -->
			  	<!-- 	
			  		<span class="navbar-toggler-icon"></span> 
			  	-->	     
				<span class="navbar-toggler-menu">
					<?php 	
						esc_html_e( 'Menu', 'thegoodartisan' ); 
					?>	
				</span>
			  </button>

				  <!-- wp dynamic markup --> 
				<?php
					 wp_nav_menu( array( 
			            'theme_location'    => 'menu-1',
			            'menu_id'        	=> 'primary-menu',
			            'depth'             => 2,
			            'container'         => 'div', 
			            'container_class'   => 'collapse navbar-collapse',
			            'container_id'      => 'navbarNavDropdown',//data-target value
			            'menu_class'        => 'navbar-nav ml-auto',//ul classess. Add 'ml-auto' class to align right
			            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback', 
			            'walker'            => new WP_Bootstrap_Navwalker()
					) );
				?>
			</div><!-- .container -->
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content container"> 







