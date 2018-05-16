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


			<div class="single-post">			

				<?php 
				if (have_posts()) :
					while (have_posts()) : ?>

						<div class="one-post-single">
							<?php the_post(); ?>


							<?php if ( has_post_thumbnail() ) { ?>
								<div class="blog-img-single" >
									<?php
									the_post_thumbnail() 
									?>
								</div>
								<?php } ?>


							<div class="blog-list-text">
								<h2 class="blog-title"><a href="<?php the_permalink(); ?>"> 
								<?php 
									the_title(); 
								echo '</a></h2>'; ?>

								<p class="blog-time">
					    			<?php the_time('Y-m-d'); ?>
					    		</p>
						
								<p class="blog-author">
									Författare: <?php the_author(); ?>
								</p>

								<p class="blog-text">
									<?php the_content(); ?>
								</p>

								<br><br>



								<div class="nextPrevLink">
									<div class="alignleft"> 
										<?php previous_post_link( '<span class="dashicons dashicons-arrow-left"></span>%link' ); ?>  
									</div>  
									<div class="alignright">
										<?php next_post_link( '%link<span class="dashicons dashicons-arrow-right"></span>' ); ?>
									</div> 


								</div>

								
								
								
							</div>

							
						</div> 

						<?php
					endwhile;
				endif; ?>

					
			</div> <!-- End single-post -->



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