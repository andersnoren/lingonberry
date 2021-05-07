<?php get_header(); ?>

<main id="site-content" class="content section-inner">
																	                    
	<?php if ( have_posts() ) : ?>
	
		<div class="posts">
	
			<?php
		
			$archive_title 			= get_the_archive_title();
			$archive_description 	= get_the_archive_description( '', '' );

			if ( $archive_title || $archive_description ) : ?>

				<header class="archive-header">

					<?php if ( $archive_title ) : ?>
						<h1 class="archive-title"><?php echo wp_kses_post( $archive_title ); ?></h1>
					<?php endif; ?>

					<?php if ( $archive_description ) : ?>
						<div class="archive-description"><?php echo wpautop( wp_kses_post( $archive_description ) ); ?></div>
					<?php endif; ?>
					
				</header><!-- .archive-header -->

				<?php 
			endif;
				
			while ( have_posts() ) {
				the_post(); 
				get_template_part( 'content', get_post_format() ); 
			}
			
			get_template_part( 'pagination' ); 
			
			?>
	
		</div><!-- .posts -->

	<?php endif; ?>
		
</main><!-- #site-content -->

<?php get_footer(); ?>