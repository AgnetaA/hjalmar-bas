<?php

		get_header(); ?>


		<?php
		$frontpage_image = get_theme_mod( 'frontpage_image' );
		$frontpage_upper_image_text = get_theme_mod( 'frontpage_upper_image_text' );
		$promo_heading = get_theme_mod( 'promo_heading' );
		$promo_image = get_theme_mod( 'promo_image' );
		$promo_text = get_theme_mod( 'promo_text' );
		$promo_link = get_theme_mod( 'promo_link' );
		$promo_link_link = get_theme_mod( 'promo_link_link' );
		?>

		<?php if ( $frontpage_image != '') { ?>
			<div class="frontpage-top-image" > 
				<div class="front-page-image-inner-div"><h3 id="upper-image-text"><span><?php echo $frontpage_upper_image_text; ?></span></h3></div>
			</div>
		<?php } ?>	


		<div class="content-wrap">



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





				<!--image-links-->
			<?php

			$frontpage_number_links_two = get_theme_mod( 'frontpage_number_links_two' );
			$frontpage_number_links_three = get_theme_mod( 'frontpage_number_links_three' );
			$frontpage_number_links_four = get_theme_mod( 'frontpage_number_links_four' );
			$frontpage_link1_image = get_theme_mod( 'frontpage_link1_image' );
			$frontpage_link2_image = get_theme_mod( 'frontpage_link2_image' );
			$frontpage_link3_image = get_theme_mod( 'frontpage_link3_image' );
			$frontpage_link4_image = get_theme_mod( 'frontpage_link4_image' );
			$frontpage_link1_header	= get_theme_mod( 'frontpage_link1_header' );
			$frontpage_link2_header	= get_theme_mod( 'frontpage_link2_header' );
			$frontpage_link3_header	= get_theme_mod( 'frontpage_link3_header' );
			$frontpage_link4_header	= get_theme_mod( 'frontpage_link4_header' );
			$frontpage_links_button1_text = get_theme_mod( 'frontpage_links_button1_text' );
			$frontpage_links_button2_text = get_theme_mod( 'frontpage_links_button2_text' );
			$frontpage_links_button3_text = get_theme_mod( 'frontpage_links_button3_text' );
			$frontpage_links_button4_text = get_theme_mod( 'frontpage_links_button4_text' );
			$frontpage_link1_linkto = get_theme_mod( 'frontpage_link1_linkto' );
			$frontpage_link2_linkto = get_theme_mod( 'frontpage_link2_linkto' );
			$frontpage_link3_linkto = get_theme_mod( 'frontpage_link3_linkto' );
			$frontpage_link4_linkto = get_theme_mod( 'frontpage_link4_linkto' );


				if ($frontpage_number_links_four == 1) { ?>
				<div class="four-img-links">
					<div class="img-link-fourth"><h3><?php echo $frontpage_link1_header ?></h3><a href="<?php echo $frontpage_link1_linkto ?>"><img src="<?php echo $frontpage_link1_image ?>" /></a>
						<div class="link-button-div"><a href="<?php echo $frontpage_link1_linkto ?>" class="link-button"><?php echo $frontpage_links_button1_text ?></a></div></div>
					<div class="img-link-fourth"><h3><?php echo $frontpage_link2_header ?></h3><a href="<?php echo $frontpage_link2_linkto ?>"><img src="<?php echo $frontpage_link2_image ?>" /></a>
						<div class="link-button-div"><a href="<?php echo $frontpage_link2_linkto ?>" class="link-button"><?php echo $frontpage_links_button2_text ?></a></div></div>
					<div class="img-link-fourth"><h3><?php echo $frontpage_link3_header ?></h3><a href="<?php echo $frontpage_link3_linkto ?>"><img src="<?php echo $frontpage_link3_image ?>" /></a>
						<div class="link-button-div"><a href="<?php echo $frontpage_link3_linkto ?>" class="link-button"><?php echo $frontpage_links_button3_text ?></a></div></div>
					<div class="img-link-fourth"><h3><?php echo $frontpage_link4_header ?></h3><a href="<?php echo $frontpage_link4_linkto ?>"><img src="<?php echo $frontpage_link4_image ?>" /></a>
						<div class="link-button-div"><a href="<?php echo $frontpage_link4_linkto ?>" class="link-button"><?php echo $frontpage_links_button4_text ?></a></div></div>
				</div>
				<?php } 

				if ($frontpage_number_links_three == 1 && $frontpage_number_links_four == 0) { ?>
				<div class="three-img-links">
					<div class="img-link-third"><h3><?php echo $frontpage_link1_header ?></h3><a href="<?php echo $frontpage_link1_linkto ?>"><img src="<?php echo $frontpage_link1_image ?>" /></a>
						<div class="link-button-div"><a href="<?php echo $frontpage_link1_linkto ?>" class="link-button"><?php echo $frontpage_links_button1_text ?></a></div></div>
					<div class="img-link-third"><h3><?php echo $frontpage_link2_header ?></h3><a href="<?php echo $frontpage_link2_linkto ?>"><img src="<?php echo $frontpage_link2_image ?>" /></a>
						<div class="link-button-div"><a href="<?php echo $frontpage_link2_linkto ?>" class="link-button"><?php echo $frontpage_links_button2_text ?></a></div></div>
					<div class="img-link-third"><h3><?php echo $frontpage_link3_header ?></h3><a href="<?php echo $frontpage_link3_linkto ?>"><img src="<?php echo $frontpage_link3_image ?>" /></a>
						<div class="link-button-div"><a href="<?php echo $frontpage_link3_linkto ?>" class="link-button"><?php echo $frontpage_links_button3_text ?></a></div></div>
				</div>

				<?php } 

				if ($frontpage_number_links_two == 1 && $frontpage_number_links_three == 0 && $frontpage_number_links_four == 0) { ?>
				<div class="two-img-links">
					<div class="img-link-half"><h3><?php echo $frontpage_link1_header ?></h3><a href="<?php echo $frontpage_link1_linkto ?>"><img src="<?php echo $frontpage_link1_image ?>" /></a>
						<div class="link-button-div"><a href="<?php echo $frontpage_link1_linkto ?>" class="link-button"><?php echo $frontpage_links_button1_text ?></a></div></div>
					<div class="img-link-half"><h3><?php echo $frontpage_link2_header ?></h3><a href="<?php echo $frontpage_link2_linkto ?>"><img src="<?php echo $frontpage_link2_image ?>" /></a>
						<div class="link-button-div"><a href="<?php echo $frontpage_link2_linkto ?>" class="link-button"><?php echo $frontpage_links_button2_text ?></a></div></div>
				</div>

				<?php } ?>


				<?php if ( is_active_sidebar( 'frontpage_widget' ) ) : ?>
					<div id="frontpage-sidebar" class="frontpage-sidebar widget-area" role="complementary">
						<?php dynamic_sidebar( 'frontpage_widget' ); ?>
					</div>
				<?php endif; ?>

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