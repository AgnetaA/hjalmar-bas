	<?php

		get_header(); ?>


		<div class="content-wrap">

			<?php 
			$promo_show = get_theme_mod ( 'promo_show' );
			$promo_location = get_theme_mod( 'promo_location' ); 
			$promo_heading = get_theme_mod( 'promo_heading' );
			$promo_image = get_theme_mod( 'promo_image' );
			$promo_text = get_theme_mod( 'promo_text' );
			$promo_link = get_theme_mod( 'promo_link' );
			$promo_link_link = get_theme_mod( 'promo_link_link' );

			$blog_post_short = get_theme_mod( 'blog_post_short' );

			if ( $promo_show == 1 && $promo_location == 'allasidor') { ?>

				<?php if ($promo_link == 1 ) { ?>
				<a href="<?php echo $promo_link_link; ?>">
				<?php } ?>

					<div class="promo">

						<?php if ($promo_heading != '' ) { ?>
							<h1><?php echo $promo_heading; ?></h1>
						<?php } ?>
						<?php if ($promo_image != '' ) { ?>	
							<img class="promo-img" src="<?php echo $promo_image ?>" />
						<?php } ?>
						<?php if ($promo_text != '' ) { ?>
							<p class="promo-text"><?php echo $promo_text; ?></p>
						<?php } ?>
		
					</div>


				<?php if ($promo_link == 1 ) { ?>
					</a>
				<?php } ?>


			<?php } ?>


			<div class="all-posts">


			

				<?php 
				if (have_posts()) :
					while (have_posts()) : ?>

						<div class="one-post">
							<?php the_post(); ?>

							<?php if ( has_post_thumbnail() ) { ?>
								<div class="blog-list-img" >
								<?php echo '<a href="' . get_the_permalink() . '">'; ?><?php
								the_post_thumbnail() 
								?></a>
							</div>
							<?php } ?>

							<div class="blog-list-text">
								<h2 class="blog-title"><a href="<?php the_permalink(); ?>"> 
								<?php 
									the_title(); 
								echo '</a></h2>'; ?>

								<p class="blog-time">
					    			<?php the_time('Y-m-d'); /*time: H:i*/ ?>  
					    		</p>
						
								<p class="blog-author">
									Författare: <?php the_author(); ?>
								</p>


								<?php if ($blog_post_short == 0 ) { ?>
								<p class="blog-text">
									<?php the_content(); ?>
								</p>
								<?php } ?>

								<?php if ( $blog_post_short == 1) { ?>
								<p class="blog-text">
									 <?php echo wp_trim_words( get_the_content(), 50, '[...] <a href="' . get_the_permalink() . '">Läs mer...</a>' ); ?>
									
								</p>
								<?php } ?>

								

							</div>

						</div> 

						<?php
					endwhile;
				endif; ?>


				
				<div class="nextPrevPage"><?php posts_nav_link(' ','<div class="postNav postNavLeft"><span class="dashicons dashicons-arrow-left"></span>Föregående Sida</div>','<div class="postNav postNavRight">Nästa Sida<span class="dashicons dashicons-arrow-right"></span></div>'); ?></div>

					
			</div> <!-- End all-posts -->



			<div class="sidebar-content">
				<?php get_sidebar(); ?>
			</div> <!-- End sidebar-content -->	


		</div> <!-- End content-wrap -->

	<div class="footer-container">
		<?php get_footer(); ?>
	</div>

</div> <!-- end wrap-all -->	

</body>
</html>