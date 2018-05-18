<?php
/*
Template Name: Kontaktsida
*/


		get_header(); ?>



		<div id="content-wrap" class="content-wrap">


			<div class="contact-content">

				<?php                                  /*the content from page editor*/
				if( have_posts()) {

					while( have_posts() ) {

						the_post();

						echo '<div class="page-content">';

							the_content();

						echo '</div>';	
					}
				} ?>


				<?php
				$contact_page_map_heading = get_theme_mod( 'contact_page_map_heading' ); 
				$contact_page_map_embed = get_theme_mod( 'contact_page_map_embed' ); 
				$contact_page_coworkers_heading = get_theme_mod( 'contact_page_coworkers_heading' );

				?>

				
				<h2><?php echo $contact_page_map_heading; ?></h2>
				<?php if ($contact_page_map_embed != '') { ?> 	
					<div class="contact-map"><?php echo $contact_page_map_embed; ?></div>
				<?php } ?>


				<div class="contact-coworkers">

					<h2><?php echo $contact_page_coworkers_heading; ?></h2>

					

					<div class="coworkers">  

						<?php $i = 1;

						for($i = 1; $i < 16; $i++) { 

						$person_photo = get_theme_mod( 'person_'.$i.'_photo' );  
						$person_name = get_theme_mod( 'person_'.$i.'_name' );
						$person_title = get_theme_mod( 'person_'.$i.'_title' );
						$person_phone = get_theme_mod( 'person_'.$i.'_phone' );
						$person_email = get_theme_mod( 'person_'.$i.'_email' );
						$person_info = get_theme_mod( 'person_'.$i.'_info' );

					 	if ( $person_photo != '' || $person_name != '' || $person_photo != '' && $person_name != '') { ?>
							<div class="coworker coworker<?php echo $i; ?>">
								<?php if ( $person_photo != '' ) { ?>
									<div class="image-box image-box<?php echo $i; ?>">
									</div>
								<?php } ?>	
								<h3><b><?php echo $person_name; ?></b></h3>
								<h4><?php echo $person_title; ?></h4>
								
								<? if ( $person_phone != "" ) { ?>
								<span class="dashicons dashicons-phone"></span><a class="contact-phone-link" href="tel:<?php echo $person_phone ?>">&nbsp<?php echo $person_phone ?></a><br> <?php } ?>

								<? if ( $person_email != "" ) { ?>
									<span class="dashicons dashicons-email-alt"></span><a class="contact-e-mail-link" href="mailto:<?php echo $person_email ?>">&nbsp<?php echo $person_email ?></a><br> <?php } ?>

								<p><?php echo $person_info; ?></p>
							
							</div>
						<?php } 
						} ?>

						

					</div>

				</div>



			</div> <!-- End contact-content -->



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

