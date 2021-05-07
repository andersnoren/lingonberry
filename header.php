<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head profile="http://gmpg.org/xfn/11">
		
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >
		 
		<?php wp_head(); ?>
	
	</head>
	
	<body <?php body_class(); ?>>

		<?php 
		if ( function_exists( 'wp_body_open' ) ) {
			wp_body_open(); 
		}
		?>

		<a class="skip-link button" href="#site-content"><?php esc_html_e( 'Skip to the content', 'lingonberry' ); ?></a>
	
		<div class="navigation">
				
			<div class="navigation-inner section-inner">
		
				<ul class="blog-menu">
				
					<?php if ( has_nav_menu( 'primary' ) ) {
																		
						wp_nav_menu( array( 
							'container'			=> '', 
							'items_wrap' 		=> '%3$s',
							'theme_location' 	=> 'primary', 
						) ); 
					
					} else {
					
						wp_list_pages( array(
							'container' => '',
							'title_li' 	=> '',
						) );
						
					} ?>
					
				 </ul>
				 
				 <?php get_search_form(); ?>
				 
				 <div class="clear"></div>
			 
			</div><!-- .navigation-inner -->
		 
		</div><!-- .navigation -->
	
		<div class="header section">
				
			<div class="header-inner section-inner group">

				<button class="nav-toggle">
					<div class="bar"></div>
					<div class="bar"></div>
					<div class="bar"></div>
				</button>
			
				<?php if ( get_header_image() != '' ) : ?>
							
					<a href="<?php echo esc_url( home_url() ); ?>/" title="<?php echo esc_attr( get_bloginfo( 'title' ) ); ?> | <?php echo esc_attr( get_bloginfo( 'description' ) ); ?>" rel="home" class="logo">
						<img src="<?php header_image(); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
					</a>
					
				<?php else : ?>
				
					<a href="<?php echo esc_url( home_url() ); ?>/" title="<?php echo esc_attr( get_bloginfo( 'title' ) ); ?> &mdash; <?php echo esc_attr( get_bloginfo( 'description' ) ); ?>" rel="home" class="logo noimg"></a>
				
				<?php endif; ?>
			        				
				<h1 class="blog-title">
					<a href="<?php echo esc_url( home_url() ); ?>/" title="<?php echo esc_attr( get_bloginfo( 'title' ) ); ?> &mdash; <?php echo esc_attr( get_bloginfo( 'description' ) ); ?>" rel="home"><?php echo esc_attr( get_bloginfo( 'title' ) ); ?></a>
				</h1>
																							
			</div><!-- .header section -->
			
		</div><!-- .header-inner section-inner -->