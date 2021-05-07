<?php get_header(); ?>

<div class="content section-inner">
											        
	<?php 	
	if ( have_posts() ) : 
		while ( have_posts() ) : 
			the_post();

			?>

			<div class="singular-container">

				<?php
				
				get_template_part( 'content', get_post_format() ); 

				$next_post = get_next_post_link( '%link' );
				$prev_post = get_previous_post_link( '%link' );
				
				if ( $next_post || $prev_post ) : 
					?>
							
					<div class="post-nav">
						<?php echo $next_post . $prev_post; ?>
					</div><!-- .post-nav -->

					<?php
				endif;
				
				comments_template( '', true ); 

				?>

			</div><!-- .singular-container -->

			<?php

		endwhile;
	endif;
	?>

</div><!-- .content section-inner -->
		
<?php get_footer(); ?>