<?php if ( is_active_sidebar( 'footer-a' ) || is_active_sidebar( 'footer-b' ) || is_active_sidebar( 'footer-c' ) ) : ?>

	<div class="footer section">
		
		<div class="footer-inner section-inner group">

			<?php

			$widget_areas = array( 'footer-a', 'footer-b', 'footer-c' );

			foreach ( $widget_areas as $widget_area ) :
				if ( ! is_active_sidebar( $widget_area ) ) continue;
				?>

				<div class="<?php echo esc_attr( $widget_area ); ?> widgets">
					<?php dynamic_sidebar( $widget_area ); ?>
				</div><!-- .widgets -->

				<?php
			endforeach;
			?>
		
		</div><!-- .footer-inner -->
	
	</div><!-- .footer -->

<?php endif; ?>

<div class="credits section">

	<div class="credits-inner section-inner">

		<p class="credits-left">
		
			<span><?php _e( 'Copyright', 'lingonberry' ); ?></span> &copy; <?php echo date( 'Y' ) ?> <a href="<?php echo home_url(); ?>" title="<?php bloginfo( 'name' ); ?>"><?php bloginfo( 'name' ); ?></a>
		
		</p>
		
		<p class="credits-right">
			
			<span><?php printf( __( 'Theme by <a href="%s">Anders Noren</a>', 'lingonberry' ), 'https://www.andersnoren.se' ); ?> &mdash; </span><a title="<?php _e( 'To the top', 'lingonberry' ); ?>" class="tothetop"><?php _e( 'Up', 'lingonberry' ); ?> &uarr;</a>
			
		</p>
		
		<div class="clear"></div>
	
	</div><!-- .credits-inner -->
	
</div><!-- .credits -->

<?php wp_footer(); ?>

</body>
</html>