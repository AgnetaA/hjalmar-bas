					<?php
					$contact_area_heading = get_theme_mod ( 'contact_area_heading' );
					$contact_area_phone = get_theme_mod ( 'contact_area_phone' );
					$contact_area_mail = get_theme_mod ( 'contact_area_mail' );
					$contact_area_address1 = get_theme_mod ( 'contact_area_address1' );
					$contact_area_address2 = get_theme_mod ( 'contact_area_address2' );
					$contact_area_address3 = get_theme_mod ( 'contact_area_address3' );

					$sidebar_form_heading = get_theme_mod ( 'sidebar_form_heading' ); 
					$sidebar_form_shortcode = get_theme_mod ( 'sidebar_form_shortcode' ); 

					$show_sidebar_blog = get_theme_mod ( 'show_sidebar_blog' ); 
					$sidebar_blog_heading = get_theme_mod ( 'sidebar_blog_heading' ); 

					?>





					<div class="sidebar-contact">
						<h3><?php echo $contact_area_heading; ?></h3>

						<div id="contact-info-box" class="contact-info-box">

							<? if ( $contact_area_phone != "" ) { ?>
							<span class="dashicons dashicons-phone"></span><a class="contact-phone-link" href="tel:<?php echo $contact_area_phone ?>">&nbsp&nbsp<?php echo $contact_area_phone; ?></a><br> <?php } ?>

							<? if ( $contact_area_mail != "" ) { ?>
								<span class="dashicons dashicons-email-alt"></span><a id="contact-e-mail-link" class="contact-e-mail-link" href="mailto:<?php echo $contact_area_mail ?>">&nbsp&nbsp<?php echo $contact_area_mail; ?></a><br> <?php } ?>

							<? if ( $contact_area_address1 != "" ) { ?>
								<span class="dashicons dashicons-location"></span>
									<span>&nbsp<?php echo $contact_area_address1; ?></span><br> <?php } 
							if ( $contact_area_address2 != "" ) { ?>
									<span class="address-row"><?php echo $contact_area_address2; ?></span><br> <?php } 
							if ( $contact_area_address2 != "" ) { ?>	
									<span class="address-row"><?php echo $contact_area_address3; ?></span> <?php } ?>

						</div>
	
					</div>


					<?php 
					if ($show_sidebar_blog == 1 ) { ?> 
					<div class="latest-blog-posts">
						<h3><?php echo $sidebar_blog_heading; ?></h3>


						<?php $the_query = new WP_Query( 'posts_per_page=5' ); 
						while ($the_query -> have_posts()) : ?>


							<div class="new-post-headings"> 
								<?php $the_query -> the_post(); ?>

								<p class="blog-title"><a href="<?php the_permalink(); ?>"> 
								<?php 
									the_title(); 
								echo '</a></p>'; ?>
			
							</div>

						<?php
						endwhile;

						wp_reset_postdata(); ?>
							
					</div>
					<?php } ?>
					

					<?php 
					if ($sidebar_form_shortcode != '' || $sidebar_form_heading != '' ) { ?> 
					<div class="sidebar-form">
						<h3><?php echo $sidebar_form_heading; ?></h3>

						<div>
							<?php
							if ($sidebar_form_shortcode != '') { 
							echo '<div class="sidebar-shortcode">' . do_shortcode($sidebar_form_shortcode) . '</div>'; } ?>	
						</div>		

					</div>	
					<?php } ?>


					<?php if ( is_active_sidebar( 'sidebar_widget' ) ) : ?>
						<div id="sidebar-sidebar" class="sidebar-sidebar widget-area" role="complementary">
							<?php dynamic_sidebar( 'sidebar_widget' ); ?>
						</div>
					<?php endif; ?>