		<footer class="footer">

			<?php

			$footer_column_number = get_theme_mod( 'footer_column_number' );
			$footer_column1_text = get_theme_mod( 'footer_column1_text' ); 
			$footer_column1_shortcode = get_theme_mod( 'footer_column1_shortcode' ); 
			$footer_column2_text = get_theme_mod( 'footer_column2_text' ); 
			$footer_column2_shortcode = get_theme_mod( 'footer_column2_shortcode' );
			$footer_column3_text = get_theme_mod( 'footer_column3_text' ); 
			$footer_column3_shortcode = get_theme_mod( 'footer_column3_shortcode' );
			$lower_footer_textarea = get_theme_mod( 'lower_footer_textarea' );

			?>

			<?php if ( $footer_column_number == '3 kolumner' ) { ?> 
				<div class="three-footer-columns">
					<div class="third-column footer-column1"><div class="footer-text-or-code"><p>
						<?php echo $footer_column1_text; ?></p></div> 
						<?php
						if ($footer_column1_shortcode != '') {
							echo '<div class="shortcode-container footer-column-shortcode">' . do_shortcode($footer_column1_shortcode) . '</div>'; } ?>		
					</div>

					<div class="third-column footer-column2"><div class="footer-text-or-code"><p>
						<?php echo $footer_column2_text; ?></p></div>
						<?php
						if ($footer_column2_shortcode != '') {
							echo '<div class="shortcode-container footer-column-shortcode">' . do_shortcode($footer_column2_shortcode) . '</div>'; } ?>
					</div>

					<div class="third-column footer-column3"><div class="footer-text-or-code"><p>
						<?php echo $footer_column3_text; ?></p></div>
						<?php
						if ($footer_column3_shortcode != '') {
							echo '<div class="shortcode-container footer-column-shortcode">' . do_shortcode($footer_column3_shortcode) . '</div>'; } ?>
					</div>
				</div>
			<?php } ?>

			<?php if ( $footer_column_number == '2 kolumner' ) { ?> 
				<div class="two-footer-columns">
					<div class="half-column footer-column1"><div class="footer-text-or-code"><p>
						<?php echo $footer_column1_text; ?></p></div> 
						<?php
						if ($footer_column1_shortcode != '') {
							echo '<div class="shortcode-container footer-column-shortcode">' . do_shortcode($footer_column1_shortcode) . '</div>'; } ?>		
					</div>

					<div class="half-column footer-column2"><div class="footer-text-or-code"><p>
						<?php echo $footer_column2_text; ?></p></div>
						<?php
						if ($footer_column2_shortcode != '') {
							echo '<div class="shortcode-container footer-column-shortcode">' . do_shortcode($footer_column2_shortcode) . '</div>'; } ?>
					</div>
				</div>
			<?php } ?>


			<div class="footer-foot">
				<div class='navbar'>
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
				</div><br>



				<?php
				$facebook_link = get_theme_mod( 'facebook_link' );
				$google_plus_link = get_theme_mod( 'google_plus_link' );
				$instagram_link = get_theme_mod( 'instagram_link' );
				$linkedin_link = get_theme_mod( 'linkedin_link' );
				$pinterest_link = get_theme_mod( 'pinterest_link' );
				$soundcloud_link = get_theme_mod( 'soundcloud_link' );
				$twitter_link = get_theme_mod( 'twitter_link' );
				$youtube_link = get_theme_mod( 'youtube_link' ); 
				?>


				

				<div class="social-links">

					<?php if ( $facebook_link != '' ) { ?>
					<div class="social-icons icon-fb">
						<a href="<?php echo $facebook_link ?>">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook-640.png">
						</a>
					</div>
					<?php } ?>

					<?php if ( $google_plus_link != '' ) { ?>
					<div class="social-icons icon-gooplus">
						<a href="<?php echo $google_plus_link ?>">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/images/google-plus-640.png">
						</a>
					</div>
					<?php } ?>

					<?php if ( $instagram_link != '' ) { ?>
					<div class="social-icons icon-insta">
						<a href="<?php echo $instagram_link ?>">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/images/instagram-640.png">
						</a>
					</div>
					<?php } ?>

					<?php if ( $linkedin_link != '' ) { ?>
					<div class="social-icons icon-lin">
						<a href="<?php echo $linkedin_link ?>">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/images/linked-in-640.png">
						</a>
					</div>
					<?php } ?>

					<?php if ( $pinterest_link != '' ) { ?>
					<div class="social-icons icon-pin">
						<a href="<?php echo $pinterest_link ?>">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/images/pinterest-640.png">
						</a>
					</div>
					<?php } ?>

					<?php if ( $soundcloud_link != '' ) { ?>
					<div class="social-icons icon-sound">
						<a href="<?php echo $soundcloud_link ?>">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/images/sound-cloud-640.png">
						</a>
					</div>
					<?php } ?>

					<?php if ( $twitter_link != '' ) { ?>
					<div class="social-icons icon-twitter">
						<a href="<?php echo $twitter_link ?>">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter-640.png">
						</a>
					</div>
					<?php } ?>

					<?php if ( $youtube_link != '' ) { ?>
					<div class="social-icons icon-yt">
						<a href="<?php echo $youtube_link ?>">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/images/youtube-640.png">
						</a>
					</div>
					<?php } ?>

				</div>



				<p class="footer-foot-p"><?php echo $lower_footer_textarea; ?></p>
			</div>

			<?php wp_footer(); ?>


		</footer>





	