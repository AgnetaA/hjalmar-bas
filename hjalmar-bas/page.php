<?php


		get_header(); ?>


		<?php if ( has_post_thumbnail() ) { ?>
		<div class="page-top-image" >
			<?php
			the_post_thumbnail() 
			?>
		</div>
		<?php } ?>


		<div id="content-wrap" class="content-wrap">

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
				


			
			<div class="editor-content">

				<?php                                  /*the content from page editor*/
				if( have_posts()) {

					while( have_posts() ) {

						the_post();

						echo '<div class="page-content">';

							the_content();

						echo '</div>';	
					}
				} ?>


				<?php if ( is_active_sidebar( 'pages_widget' ) ) : ?>
					<div id="pages-sidebar" class="frontpage-sidebar widget-area" role="complementary">
						<?php dynamic_sidebar( 'pages_widget' ); ?>
					</div>
				<?php endif; ?>

			</div> <!-- End editor-content -->



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