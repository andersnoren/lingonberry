<?php 

global $wp_query;

if ( $wp_query->max_num_pages > 1 ) : ?>
			
	<div class="archive-nav post-nav">
	
		<?php echo get_next_posts_link( __( '&laquo; Older<span> posts</span>', 'lingonberry' ) ); ?>
					
		<?php echo get_previous_posts_link( __( 'Newer<span> posts</span> &raquo;', 'lingonberry' ) ); ?>
		
	</div><!-- .archive-nav -->

<?php endif; ?>