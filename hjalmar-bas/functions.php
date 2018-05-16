<?php 
add_theme_support( 'custom-logo' );




/*---CUSTOMIZERS---*/

function hjalmar_bas_customize_register( $wp_customize ) {

	/*--------------------------------------------------------HEADER--------------------------------------------------------*/
	$wp_customize->add_panel( 'header_content', array(
		'title'          => __( 'Header', 'hjalmar-bas' ),
	) );

	$wp_customize->add_section( 'logo_and_background' , array(
	'title'      => __( 'Logga och bakgrund', 'hjalmar-bas' ),
	'panel'		 => 'header_content',
	) ); 

	$wp_customize->add_section( 'menu_styling' , array(
	'title'      => __( 'Meny', 'hjalmar-bas' ),
	'panel'		 => 'header_content',
	) ); 


	// Background Color
	$wp_customize->add_setting( 'header_background_color', array(
		'default'	 => '#1d1a22',
      	'transport'  => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_background_color', array(
        'label'          => __( 'Bakgrundsfärg', 'hjalmar-bas' ), 
        'section'        => 'logo_and_background',
        'settings'       => 'header_background_color',
    ) ) );

    //Logo Size
    $wp_customize->add_setting( 'logo_size', array(
  		'default' => 'mellan (100px)',
	) );

	$wp_customize->add_control( 'logo_size', array(
  		'type' => 'radio',
  		'section' => 'logo_and_background', 
  		'label' => __( 'Logotypens storlek' ),
  		'choices' => array(
    		'liten (50px)' => __( 'liten (50px)' ),
    		'mellan (100px)' => __( 'mellan (100px)' ),
    		'stor (150px)' => __( 'stor (150px)' ),
  	),
	) );

	//Logo Padding
	$wp_customize->add_setting( 'logo_padding', array(
  		'default' => '10px',
	) );

	$wp_customize->add_control( 'logo_padding', array(
  		'type' => 'radio',
  		'section' => 'logo_and_background', 
  		'label' => __( 'Övre + Nedre Padding' ),
  		'choices' => array(
    		'10px' => __( '10px' ),
    		'30px' => __( '30px' ),
    		'50px' => __( '50px' ),
  	),
	) );

	//Menu Decoration
	 $wp_customize->add_setting( 'menu_decoration', array(
  		'default' => 'ram',
	) );

	$wp_customize->add_control( 'menu_decoration', array(
  		'type' => 'radio',
  		'section' => 'menu_styling', 
  		'label' => __( 'Menydekoration' ),
  		'choices' => array(
    		'ram' => __( 'ram' ),
    		'oval' => __( 'oval' ),
    		'streck under' => __( 'streck under' ),
    		'ingen' => __( 'ingen' ),
  	),
	) ); 

	//Menu Color
    $wp_customize->add_setting( 'menu_text_color', array(
		'default'	 => '#ffffff',
      	'transport'  => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_text_color', array(
        'label'          => __( 'Menyfärg', 'hjalmar-bas' ), 
        'section'        => 'menu_styling',
        'settings'       => 'menu_text_color',
    ) ) );

    $wp_customize->add_setting( 'menu_hover_color', array(
      	'transport'  => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_hover_color', array(
        'label'          => __( 'Hoverfärg', 'hjalmar-bas' ), 
        'section'        => 'menu_styling',
        'settings'       => 'menu_hover_color',
    ) ) );

    $wp_customize->add_setting( 'mobile_menu_background_color', array(
		'default'	 => '#ffffff',
      	'transport'  => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mobile_menu_background_color', array(
        'label'          => __( 'Menyknapp för mobil, bakgrund', 'hjalmar-bas' ), 
        'section'        => 'menu_styling',
        'settings'       => 'mobile_menu_background_color',
    ) ) );

    $wp_customize->add_setting( 'mobile_menu_icon_color', array(
		'default'	 => '#000000',
      	'transport'  => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mobile_menu_icon_color', array(
        'label'          => __( 'Menyknapp för mobil, ikon', 'hjalmar-bas' ), 
        'section'        => 'menu_styling',
        'settings'       => 'mobile_menu_icon_color',
    ) ) );

    $wp_customize->add_setting( 'header_menu_textfont', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_menu_textfont', array(
            'label'          => __( 'Typsnitt', 'hjalmar-bas' ),
            'section'        => 'menu_styling',
            'settings'       => 'header_menu_textfont',
            'type'           => 'select',
            'choices'        => array(
            	''    	                => __( '(välj)' ),
                'arial'    				=> __( 'Arial' ),  //sans serif
                'arial black'    		=> __( 'Arial Black' ),
                'verdana'    			=> __( 'Verdana' ),
                'impact'    			=> __( 'Impact' ),   
                'courier new'  			=> __( 'Courier New' ),  //monospace
                'lucida console'   		=> __( 'Lucida Console' ),
                'times new roman'   	=> __( 'Times New Roman' ),  //serif
                'georgia'   			=> __( 'Georgia' ),
                'comic sans ms'   		=> __( 'Comic Sans MS' ),  //cursive  
                //Google fonts :
               	'roboto'   				=> __( 'Roboto (Google)' ),  //sans serif 
               	'montserrat'   			=> __( 'Montserrat (Google)' ), 
               	'josefin sans'   		=> __( 'Josefin Sans (Google)' ), 
               	'pathway gothic one'   	=> __( 'Pathway Gothic One (Google)' ), 
               	'acme'   				=> __( 'Acme (Google)' ), 
               	'orbitron'   			=> __( 'Orbitron (Google)' ), 
               	'julius sans one'    	=> __( 'Julius Sans One (Google)' ),
               	'lato'    	            => __( 'Lato (Google)' ), 
               	'vidaloka'   			=> __( 'Vidaloka (Google)' ), //serif
               	'alice'   				=> __( 'Alice (Google)' ), 
               	'indie flower'   		=> __( 'Indie Flower (Google)' ),  //Cursive
               	'gloria hallelujah'   	=> __( 'Gloria Hallelujah (Google)' ), 
               	'great vibes'   		=> __( 'Great Vibes (Google)' ),
               	'permanent marker'   	=> __( 'Permanent Marker (Google)' ),
               	'dancing script'   		=> __( 'Dancing Script (Google)' ),
               	'cookie'   				=> __( 'Cookie (Google)' ),
               	  
    ) ) ) );

    $wp_customize->add_setting( 'header_menu_font_google_link', array(
      	'transport'  => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_menu_font_google_link', array(
            'label'          => __( 'Välj Google Font (https://fonts.google.com/)', 'hjalmar-bas' ),
            'description' 	 => __( 'Länk', 'hjalmar-bas' ),
            'section'        => 'menu_styling',
            'settings'       => 'header_menu_font_google_link',
            'type'           => 'input',
    ) ) );

    $wp_customize->add_setting( 'header_menu_font_google_css', array(
      	'transport'  => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_menu_font_google_css', array(
            'description' 	 => __( 'CSS-kod', 'hjalmar-bas'),
            'section'        => 'menu_styling',
            'settings'       => 'header_menu_font_google_css',
            'type'           => 'input',
    ) ) );

    $wp_customize->add_setting( 'header_menu_fontsize', array(
      	'transport'  => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_menu_fontsize', array(
            'label'          => __( 'Textstorlek', 'hjalmar-bas' ),
            'section'        => 'menu_styling',
            'settings'       => 'header_menu_fontsize',
            'type'           => 'input',
            'input_attrs' 	 => array(
            	'placeholder' => __( '16px' ),
    ) ) ) );

    $wp_customize->add_setting( 'header_menu_font_weight', array(
      	'transport'  => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_menu_font_weight', array(
            'label'          => __( 'Fetstil', 'hjalmar-bas' ),
            'section'        => 'menu_styling',
            'settings'       => 'header_menu_font_weight',
            'type'           => 'checkbox',
    ) ) );


    /*--------------------------------------------------CONTENT---------------------------------------------------------*/

    $wp_customize->add_panel( 'page_content', array(
		'title'          => __( 'Sidor', 'hjalmar-bas' ),
	) );

	$wp_customize->add_section( 'all_pages' , array(
	'title'      => __( 'Allmänna inställningar - alla sidor', 'hjalmar-bas' ),
	'panel'		 => 'page_content',
	) ); 

	$wp_customize->add_section( 'blog_settings' , array(
	'title'      => __( 'Blogg', 'hjalmar-bas' ),
	) ); 

	$wp_customize->add_section( 'social_media_settings' , array(
	'title'      => __( 'Sociala medier - länkar', 'hjalmar-bas' ),
	) ); 

	$wp_customize->add_section( 'text_appearance' , array(
	'title'      => __( 'Typografi', 'hjalmar-bas' ),
	) );

	$wp_customize->add_section( 'front_page_content_image' , array(
	'title'      => __( 'Framsida - övre bild', 'hjalmar-bas' ),
	'panel'		 => 'page_content',
	) ); 

	$wp_customize->add_section( 'front_page_content_columnlinks' , array(
	'title'      => __( 'Framsida - puffar', 'hjalmar-bas' ),
	'panel'		 => 'page_content',
	) ); 

	$wp_customize->add_section( 'contact_page_content_map' , array(
	'title'      => __( 'Kontaktsida - karta', 'hjalmar-bas' ),
	'panel'		 => 'page_content',
	) ); 

	$wp_customize->add_section( 'contact_page_content_coworkers' , array(
	'title'      => __( 'Kontaktsida - medarbetare', 'hjalmar-bas' ),
	'panel'		 => 'page_content',
	) ); 


	//Frontpage image + text
	 $wp_customize->add_setting( 'frontpage_image', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'frontpage_image', array(
    	'label'   	=> 'Övre bild',
      	'section' 	=> 'front_page_content_image',
      	'settings' 	=> 'frontpage_image',
    ) ) );

    $wp_customize->add_setting( 'frontpage_upper_image_text', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'frontpage_upper_image_text', array(
    	'label'   	=> 'Bildtext',
      	'section' 	=> 'front_page_content_image',
      	'settings' 	=> 'frontpage_upper_image_text',
     	'type'		=> 'input',
    ) ) );

    $wp_customize->add_setting( 'frontpage_upper_image_textfont', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'frontpage_upper_image_textfont', array(
            'label'          => __( 'Typsnitt', 'hjalmar-bas' ),
            'section'        => 'front_page_content_image',
            'settings'       => 'frontpage_upper_image_textfont',
            'type'           => 'select',
            'choices'        => array(
            	''    	                => __( '(välj)' ),
                'arial'    				=> __( 'Arial' ),  //sans serif
                'arial black'    		=> __( 'Arial Black' ),
                'verdana'    			=> __( 'Verdana' ),
                'impact'    			=> __( 'Impact' ),   
                'courier new'  			=> __( 'Courier New' ),  //monospace
                'lucida console'   		=> __( 'Lucida Console' ),
                'times new roman'   	=> __( 'Times New Roman' ),  //serif
                'georgia'   			=> __( 'Georgia' ),
                'comic sans ms'   		=> __( 'Comic Sans MS' ),  //cursive  
                //Google fonts :
               	'roboto'   				=> __( 'Roboto (Google)' ),  //sans serif 
               	'montserrat'   			=> __( 'Montserrat (Google)' ), 
               	'josefin sans'   		=> __( 'Josefin Sans (Google)' ), 
               	'pathway gothic one'   	=> __( 'Pathway Gothic One (Google)' ), 
               	'acme'   				=> __( 'Acme (Google)' ), 
               	'orbitron'   			=> __( 'Orbitron (Google)' ), 
               	'julius sans one'    	=> __( 'Julius Sans One (Google)' ),
               	'lato'    	            => __( 'Lato (Google)' ), 
               	'vidaloka'   			=> __( 'Vidaloka (Google)' ), //serif
               	'alice'   				=> __( 'Alice (Google)' ), 
               	'indie flower'   		=> __( 'Indie Flower (Google)' ),  //Cursive
               	'gloria hallelujah'   	=> __( 'Gloria Hallelujah (Google)' ), 
               	'great vibes'   		=> __( 'Great Vibes (Google)' ),
               	'permanent marker'   	=> __( 'Permanent Marker (Google)' ),
               	'dancing script'   		=> __( 'Dancing Script (Google)' ),
               	'cookie'   				=> __( 'Cookie (Google)' ),
               	  
    ) ) ) );

    $wp_customize->add_setting( 'frontpage_upper_image_font_google_link', array(
      	'transport'  => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'frontpage_upper_image_font_google_link', array(
            'label'          => __( 'Välj Google Font (https://fonts.google.com/)', 'hjalmar-bas' ),
            'description' 	 => __( 'Länk', 'hjalmar-bas' ),
            'section'        => 'front_page_content_image',
            'settings'       => 'frontpage_upper_image_font_google_link',
            'type'           => 'input',
    ) ) );


    $wp_customize->add_setting( 'frontpage_upper_image_font_google_css', array(
      	'transport'  => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'frontpage_upper_image_font_google_css', array(
            'description' 	 => __( 'CSS-kod', 'hjalmar-bas'),
            'section'        => 'front_page_content_image',
            'settings'       => 'frontpage_upper_image_font_google_css',
            'type'           => 'input',
    ) ) );

    $wp_customize->add_setting( 'frontpage_upper_image_text_color', array(
    	'default'	=> '#ffffff',
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'frontpage_upper_image_text_color', array(
    	'label'   	=> 'Färg',
      	'section' 	=> 'front_page_content_image',
      	'settings' 	=> 'frontpage_upper_image_text_color',
    ) ) );

    $wp_customize->add_setting( 'frontpage_upper_image_fontsize', array(
      	'transport'  => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'frontpage_upper_image_fontsize', array(
            'label'          => __( 'Textstorlek', 'hjalmar-bas' ),
            'description' 	 => 'px, em, vw...',
            'section'        => 'front_page_content_image',
            'settings'       => 'frontpage_upper_image_fontsize',
            'type'           => 'input',
            'input_attrs' 	 => array(
            	'placeholder' => __( '40px' ),
    ) ) ) );

    $wp_customize->add_setting( 'frontpage_upper_image_font_weight', array(
      	'transport'  => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'frontpage_upper_image_font_weight', array(
            'label'          => __( 'Fetstil', 'hjalmar-bas' ),
            'section'        => 'front_page_content_image',
            'settings'       => 'frontpage_upper_image_font_weight',
            'type'           => 'checkbox',
    ) ) );

    $wp_customize->add_setting( 'frontpage_upper_image_text_background', array(
      	'transport'  => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'frontpage_upper_image_text_background', array(
            'label'          => __( 'Vit bakgrund', 'hjalmar-bas' ),
            'section'        => 'front_page_content_image',
            'settings'       => 'frontpage_upper_image_text_background',
            'type'           => 'checkbox',
    ) ) );


    //Frontpage 4 img links

    //links
    $wp_customize->add_setting( 'frontpage_number_links_two', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'frontpage_number_links_two', array(
    	'label'   	=> '2 puffar',
      	'section' 	=> 'front_page_content_columnlinks',
      	'settings' 	=> 'frontpage_number_links_two',
      	'type' 		=> 'checkbox',
    ) ) );

    $wp_customize->add_setting( 'frontpage_number_links_three', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'frontpage_number_links_three', array(
    	'label'   	=> '3 puffar',
      	'section' 	=> 'front_page_content_columnlinks',
      	'settings' 	=> 'frontpage_number_links_three',
      	'type' 		=> 'checkbox',
    ) ) );


    $wp_customize->add_setting( 'frontpage_number_links_four', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'frontpage_number_links_four', array(
    	'label'   	=> '4 puffar',
      	'section' 	=> 'front_page_content_columnlinks',
      	'settings' 	=> 'frontpage_number_links_four',
      	'type' 		=> 'checkbox',
    ) ) );


    $wp_customize->add_setting( 'frontpage_link1_header', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'frontpage_link1_header', array(
    	'label'   		=> 'Puff 1',
    	'description' 	=> 'Rubrik 1',
      	'section' 		=> 'front_page_content_columnlinks',
      	'settings' 		=> 'frontpage_link1_header',
      	'type' 			=> 'input',
    ) ) ); 

    $wp_customize->add_setting( 'frontpage_link1_linkto', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'frontpage_link1_linkto', array(
    	'description'   => 'Länk 1',
      	'section' 		=> 'front_page_content_columnlinks',
      	'settings' 		=> 'frontpage_link1_linkto',
      	'type' 			=> 'text',
    ) ) ); 

   $wp_customize->add_setting( 'frontpage_link1_image', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'frontpage_link1_image', array(
    	'description'   => 'Bild 1',
      	'section' 		=> 'front_page_content_columnlinks',
      	'settings' 		=> 'frontpage_link1_image',
    ) ) );

     $wp_customize->add_setting( 'frontpage_links_button1_text', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'frontpage_links_button1_text', array(
    	'description'   => 'Text, knapp 1',
      	'section' 		=> 'front_page_content_columnlinks',
      	'settings' 		=> 'frontpage_links_button1_text',
      	'type' 			=> 'input',
    ) ) );

    $wp_customize->add_setting( 'frontpage_link2_header', array(
      	'transport' => 'refresh',
    ) );


    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'frontpage_link2_header', array(
    	'label'   		=> 'Puff 2',
    	'description' 	=> 'Rubrik 2',
      	'section' 		=> 'front_page_content_columnlinks',
      	'settings' 		=> 'frontpage_link2_header',
      	'type' 			=> 'input',
    ) ) ); 

    $wp_customize->add_setting( 'frontpage_link2_linkto', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'frontpage_link2_linkto', array(
    	'description'   => 'Länk 2',
      	'section' 		=> 'front_page_content_columnlinks',
      	'settings' 		=> 'frontpage_link2_linkto',
      	'type' 			=> 'text',
    ) ) ); 

    $wp_customize->add_setting( 'frontpage_link2_image', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'frontpage_link2_image', array(
    	'description'   => 'Bild 2',
      	'section' 		=> 'front_page_content_columnlinks',
      	'settings' 		=> 'frontpage_link2_image',
    ) ) );

    $wp_customize->add_setting( 'frontpage_links_button2_text', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'frontpage_links_button2_text', array(
    	'description'   => 'Text, knapp 2',
      	'section' 		=> 'front_page_content_columnlinks',
      	'settings' 		=> 'frontpage_links_button2_text',
      	'type' 			=> 'input',
    ) ) );

    $wp_customize->add_setting( 'frontpage_link3_header', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'frontpage_link3_header', array(
    	'label'   		=> 'Puff 3',
    	'description'	=> 'Rubrik 3',
      	'section' 		=> 'front_page_content_columnlinks',
      	'settings' 		=> 'frontpage_link3_header',
      	'type' 			=> 'input',
    ) ) ); 

    $wp_customize->add_setting( 'frontpage_link3_linkto', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'frontpage_link3_linkto', array(
    	'description'   => 'Länk 3',
      	'section' 		=> 'front_page_content_columnlinks',
      	'settings' 		=> 'frontpage_link3_linkto',
      	'type' 			=> 'text',
    ) ) ); 

    $wp_customize->add_setting( 'frontpage_link3_image', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'frontpage_link3_image', array(
    	'description'   => 'Bild 3',
      	'section' 		=> 'front_page_content_columnlinks',
      	'settings' 		=> 'frontpage_link3_image',
    ) ) );

    $wp_customize->add_setting( 'frontpage_links_button3_text', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'frontpage_links_button3_text', array(
    	'description'   => 'Text, knapp 3',
      	'section' 		=> 'front_page_content_columnlinks',
      	'settings' 		=> 'frontpage_links_button3_text',
      	'type' 			=> 'input',
    ) ) );

    $wp_customize->add_setting( 'frontpage_link4_header', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'frontpage_link4_header', array(
    	'label'   		=> 'Puff 4',
    	'description' 	=> 'Rubrik 4',
      	'section' 		=> 'front_page_content_columnlinks',
      	'settings' 		=> 'frontpage_link4_header',
      	'type' 			=> 'input',
    ) ) ); 

    $wp_customize->add_setting( 'frontpage_link4_linkto', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'frontpage_link4_linkto', array(
    	'description'   	=> 'Länk 4 ',
      	'section' 	=> 'front_page_content_columnlinks',
      	'settings' 	=> 'frontpage_link4_linkto',
      	'type' 		=> 'text',
    ) ) ); 

    $wp_customize->add_setting( 'frontpage_link4_image', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'frontpage_link4_image', array(
    	'description'   => 'Bild 4',
      	'section' 		=> 'front_page_content_columnlinks',
      	'settings' 		=> 'frontpage_link4_image',
    ) ) );

    $wp_customize->add_setting( 'frontpage_links_button4_text', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'frontpage_links_button4_text', array(
    	'description'   => 'Text, knapp 4',
      	'section' 		=> 'front_page_content_columnlinks',
      	'settings' 		=> 'frontpage_links_button4_text',
      	'type' 			=> 'input',
    ) ) );

	$wp_customize->add_setting( 'frontpage_links_headings_color', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'frontpage_links_headings_color', array(
    	'label'   	=> 'Rubrikfärg',
      	'section' 	=> 'front_page_content_columnlinks',
      	'settings' 	=> 'frontpage_links_headings_color',
    ) ) );

    $wp_customize->add_setting( 'frontpage_links_headings_fontsize', array(
      	'transport'  => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'frontpage_links_headings_fontsize', array(
            'label'          => __( 'Rubrikstorlek', 'hjalmar-bas' ),
            'section'        => 'front_page_content_columnlinks',
            'settings'       => 'frontpage_links_headings_fontsize',
            'type'           => 'input',
            'input_attrs' 	 => array(
            	'placeholder' => __( '20px' ),
    ) ) ) );

    $wp_customize->add_setting( 'frontpage_links_image_padding', array(
      	'transport'  => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'frontpage_links_image_width', array(
            'label'          => __( 'Bildbredd i %', 'hjalmar-bas' ),
            'description'	 => 'skriv bara siffra (max 103)',
            'section'        => 'front_page_content_columnlinks',
            'settings'       => 'frontpage_links_image_padding',
            'type'           => 'input',
            'input_attrs' 	 => array(
            	'placeholder' => __( '100' ),
    ) ) ) );

   	$wp_customize->add_setting( 'frontpage_links_headings', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'frontpage_links_headings', array(
    	'label'   	=> 'Göm rubriker',
      	'section' 	=> 'front_page_content_columnlinks',
      	'settings' 	=> 'frontpage_links_headings',
      	'type' 		=> 'checkbox',
    ) ) );

    $wp_customize->add_setting( 'frontpage_links_buttons', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'frontpage_links_buttons', array(
    	'label'   	=> 'Göm knappar',
      	'section' 	=> 'front_page_content_columnlinks',
      	'settings' 	=> 'frontpage_links_buttons',
      	'type' 		=> 'checkbox',
    ) ) );


    //Content general settings

    $wp_customize->add_setting( 'all_links_color', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'all_links_color', array(
    	'label'   	=> 'Länkar',
      	'section' 	=> 'all_pages',
      	'settings' 	=> 'all_links_color',
    ) ) );

    $wp_customize->add_setting( 'all_links_hover_color', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'all_links_hover_color', array(
    	'label'   	=> 'Länkar - hoverfärg',
      	'section' 	=> 'all_pages',
      	'settings' 	=> 'all_links_hover_color',
    ) ) );

    $wp_customize->add_setting( 'all_buttons_color', array(
      	'transport' => 'refresh',
      	'default'  	=> '#1d1a22'
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'all_buttons_color', array(
    	'label'   	=> 'Knappfärg',
      	'section' 	=> 'all_pages',
      	'settings' 	=> 'all_buttons_color',
    ) ) );

    $wp_customize->add_setting( 'all_buttons_text_color', array(
      	'transport' => 'refresh',
      	'default'  	=> '#ffffff'
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'all_buttons_text_color', array(
    	'label'   	=> 'Knappar - textfärg',
      	'section' 	=> 'all_pages',
      	'settings' 	=> 'all_buttons_text_color',
    ) ) );

    $wp_customize->add_setting( 'page_background_color', array(
      	'transport' => 'refresh',
      	'default'  	=> '#ffffff'
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'page_background_color', array(
    	'label'   	=> 'Bakgrundsfärg - hela sidan',
      	'section' 	=> 'all_pages',
      	'settings' 	=> 'page_background_color',
    ) ) );

    $wp_customize->add_setting( 'page_sections_background_color', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'page_sections_background_color', array(
    	'label'   	=> 'Bakgrundsfärg - alla sektioner',
      	'section' 	=> 'all_pages',
      	'settings' 	=> 'page_sections_background_color',
    ) ) );

    //Text appearance
    $wp_customize->add_setting( 'all_headings_textfont', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'all_headings_textfont', array(
            'label'          => __( 'Rubriker - typsnitt', 'hjalmar-bas' ),
            'section'        => 'text_appearance',
            'settings'       => 'all_headings_textfont',
            'type'           => 'select',
            'choices'        => array(
            	''    	                => __( '(välj)' ),
                'arial'    				=> __( 'Arial' ),  //sans serif
                'arial black'    		=> __( 'Arial Black' ),
                'verdana'    			=> __( 'Verdana' ),
                'impact'    			=> __( 'Impact' ),   
                'courier new'  			=> __( 'Courier New' ),  //monospace
                'lucida console'   		=> __( 'Lucida Console' ),
                'times new roman'   	=> __( 'Times New Roman' ),  //serif
                'georgia'   			=> __( 'Georgia' ),
                'comic sans ms'   		=> __( 'Comic Sans MS' ),  //cursive  
                //Google fonts :
               	'roboto'   				=> __( 'Roboto (Google)' ),  //sans serif 
               	'montserrat'   			=> __( 'Montserrat (Google)' ), 
               	'josefin sans'   		=> __( 'Josefin Sans (Google)' ), 
               	'pathway gothic one'   	=> __( 'Pathway Gothic One (Google)' ), 
               	'acme'   				=> __( 'Acme (Google)' ), 
               	'orbitron'   			=> __( 'Orbitron (Google)' ), 
               	'julius sans one'    	=> __( 'Julius Sans One (Google)' ),
               	'lato'    	            => __( 'Lato (Google)' ), 
               	'vidaloka'   			=> __( 'Vidaloka (Google)' ), //serif
               	'alice'   				=> __( 'Alice (Google)' ), 
               	'indie flower'   		=> __( 'Indie Flower (Google)' ),  //Cursive
               	'gloria hallelujah'   	=> __( 'Gloria Hallelujah (Google)' ), 
               	'great vibes'   		=> __( 'Great Vibes (Google)' ),
               	'permanent marker'   	=> __( 'Permanent Marker (Google)' ),
               	'dancing script'   		=> __( 'Dancing Script (Google)' ),
               	'cookie'   				=> __( 'Cookie (Google)' ),
               	  
    ) ) ) );

    $wp_customize->add_setting( 'all_headings_font_google_link', array(
      	'transport'  => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'all_headings_font_google_link', array(
            'label'          => __( 'Välj Google Font (https://fonts.google.com/)', 'hjalmar-bas' ),
            'description' 	 => __( 'Länk', 'hjalmar-bas' ),
            'section'        => 'text_appearance',
            'settings'       => 'all_headings_font_google_link',
            'type'           => 'input',
    ) ) );

    $wp_customize->add_setting( 'all_headings_font_google_css', array(
      	'transport'  => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'all_headings_font_google_css', array(
            'description' 	 => __( 'CSS-kod', 'hjalmar-bas'),
            'section'        => 'text_appearance',
            'settings'       => 'all_headings_font_google_css',
            'type'           => 'input',
    ) ) );

    $wp_customize->add_setting( 'all_headings_text_color', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'all_headings_text_color', array(
    	'label'   	=> 'Rubrikfärg',
      	'section' 	=> 'text_appearance',
      	'settings' 	=> 'all_headings_text_color',
    ) ) );

    $wp_customize->add_setting( 'all_h1_fontsize', array(
      	'transport'  => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'all_h1_fontsize', array(
            'label'          => __( 'Rubrikstorlekar', 'hjalmar-bas' ),
            'description' 	 => 'H1',
            'section'        => 'text_appearance',
            'settings'       => 'all_h1_fontsize',
            'type'           => 'input',
            'input_attrs' 	 => array(
            	'placeholder' => __( '32px' ),
    ) ) ) );

    $wp_customize->add_setting( 'all_h2_fontsize', array(
      	'transport'  => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'all_h2_fontsize', array(
            'description' 	 => 'H2',
            'section'        => 'text_appearance',
            'settings'       => 'all_h2_fontsize',
            'type'           => 'input',
            'input_attrs' 	 => array(
            	'placeholder' => __( '24px' ),
    ) ) ) );

    $wp_customize->add_setting( 'all_h3_fontsize', array(
      	'transport'  => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'all_h3_fontsize', array(
            'description' 	 => 'H3',
            'section'        => 'text_appearance',
            'settings'       => 'all_h3_fontsize',
            'type'           => 'input',
            'input_attrs' 	 => array(
            	'placeholder' => __( '19px' ),
    ) ) ) );

    $wp_customize->add_setting( 'all_h4_fontsize', array(
      	'transport'  => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'all_h4_fontsize', array(
            'description' 	 => 'H4',
            'section'        => 'text_appearance',
            'settings'       => 'all_h4_fontsize',
            'type'           => 'input',
            'input_attrs' 	 => array(
            	'placeholder' => __( '16px' ),
    ) ) ) );

    $wp_customize->add_setting( 'all_h5_fontsize', array(
      	'transport'  => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'all_h5_fontsize', array(
            'description' 	 => 'H5',
            'section'        => 'text_appearance',
            'settings'       => 'all_h5_fontsize',
            'type'           => 'input',
            'input_attrs' 	 => array(
            	'placeholder' => __( '13px' ),
    ) ) ) );

    $wp_customize->add_setting( 'all_h6_fontsize', array(
      	'transport'  => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'all_h6_fontsize', array(
            'description' 	 => 'H6',
            'section'        => 'text_appearance',
            'settings'       => 'all_h6_fontsize',
            'type'           => 'input',
            'input_attrs' 	 => array(
            	'placeholder' => __( '11px' ),
    ) ) ) );

    $wp_customize->add_setting( 'all_headings_font_weight', array(
      	'transport'  => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'all_headings_font_weight', array(
            'label'          => __( 'Fetstil - gäller alla rubriker', 'hjalmar-bas' ),
            'section'        => 'text_appearance',
            'settings'       => 'all_headings_font_weight',
            'type'           => 'checkbox',
    ) ) );

    $wp_customize->add_setting( 'all_headings_center', array(
      	'transport'  => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'all_headings_center', array(
            'label'          => __( 'Centrera alla rubriker', 'hjalmar-bas' ),
            'section'        => 'text_appearance',
            'settings'       => 'all_headings_center',
            'type'           => 'checkbox',
    ) ) );

    $wp_customize->add_setting( 'all_paragraphs_textfont', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'all_paragraphs_textfont', array(
            'label'          => __( 'Brödtext - typsnitt', 'hjalmar-bas' ),
            'section'        => 'text_appearance',
            'settings'       => 'all_paragraphs_textfont',
            'type'           => 'select',
            'choices'        => array(
            	''    	                => __( '(välj)' ),
                'arial'    				=> __( 'Arial' ),  //sans serif
                'arial black'    		=> __( 'Arial Black' ),
                'verdana'    			=> __( 'Verdana' ),
                'impact'    			=> __( 'Impact' ),   
                'courier new'  			=> __( 'Courier New' ),  //monospace
                'lucida console'   		=> __( 'Lucida Console' ),
                'times new roman'   	=> __( 'Times New Roman' ),  //serif
                'georgia'   			=> __( 'Georgia' ),
                'comic sans ms'   		=> __( 'Comic Sans MS' ),  //cursive  
                //Google fonts :
               	'roboto'   				=> __( 'Roboto (Google)' ),  //sans serif 
               	'montserrat'   			=> __( 'Montserrat (Google)' ), 
               	'josefin sans'   		=> __( 'Josefin Sans (Google)' ), 
               	'pathway gothic one'   	=> __( 'Pathway Gothic One (Google)' ), 
               	'acme'   				=> __( 'Acme (Google)' ), 
               	'orbitron'   			=> __( 'Orbitron (Google)' ), 
               	'julius sans one'    	=> __( 'Julius Sans One (Google)' ),
               	'lato'    	            => __( 'Lato (Google)' ), 
               	'vidaloka'   			=> __( 'Vidaloka (Google)' ), //serif
               	'alice'   				=> __( 'Alice (Google)' ), 
               	'indie flower'   		=> __( 'Indie Flower (Google)' ),  //Cursive
               	'gloria hallelujah'   	=> __( 'Gloria Hallelujah (Google)' ), 
               	'great vibes'   		=> __( 'Great Vibes (Google)' ),
               	'permanent marker'   	=> __( 'Permanent Marker (Google)' ),
               	'dancing script'   		=> __( 'Dancing Script (Google)' ),
               	'cookie'   				=> __( 'Cookie (Google)' ),
               	  
    ) ) ) );

    $wp_customize->add_setting( 'all_paragraphs_font_google_link', array(
      	'transport'  => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'all_paragraphs_font_google_link', array(
            'label'          => __( 'Välj Google Font (https://fonts.google.com/)', 'hjalmar-bas' ),
            'description' 	 => __( 'Länk', 'hjalmar-bas' ),
            'section'        => 'text_appearance',
            'settings'       => 'all_paragraphs_font_google_link',
            'type'           => 'input',
    ) ) );

    $wp_customize->add_setting( 'all_paragraphs_font_google_css', array(
      	'transport'  => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'all_paragraphs_font_google_css', array(
            'description' 	 => __( 'CSS-kod', 'hjalmar-bas'),
            'section'        => 'text_appearance',
            'settings'       => 'all_paragraphs_font_google_css',
            'type'           => 'input',
    ) ) );

    $wp_customize->add_setting( 'all_paragraphs_text_color', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'all_paragraphs_text_color', array(
    	'label'   	=> 'Textfärg',
      	'section' 	=> 'text_appearance',
      	'settings' 	=> 'all_paragraphs_text_color',
    ) ) );

    $wp_customize->add_setting( 'all_paragraphs_fontsize', array(
      	'transport'  => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'all_paragraphs_fontsize', array(
            'label'          => __( 'Textstorlek', 'hjalmar-bas' ),
            'section'        => 'text_appearance',
            'settings'       => 'all_paragraphs_fontsize',
            'type'           => 'input',
            'input_attrs' 	 => array(
            	'placeholder' => __( '16px' ),
    ) ) ) );

    $wp_customize->add_setting( 'all_paragraphs_font_weight', array(
      	'transport'  => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'all_paragraphs_font_weight', array(
            'label'          => __( 'Fetstil - all brödtext', 'hjalmar-bas' ),
            'section'        => 'text_appearance',
            'settings'       => 'all_paragraphs_font_weight',
            'type'           => 'checkbox',
    ) ) );

    $wp_customize->add_setting( 'all_paragraphs_center', array(
      	'transport'  => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'all_paragraphs_center', array(
            'label'          => __( 'Centrera all text', 'hjalmar-bas' ),
            'section'        => 'text_appearance',
            'settings'       => 'all_paragraphs_center',
            'type'           => 'checkbox',
    ) ) );

    
    //Contact-page
    //map
    $wp_customize->add_setting( 'contact_page_map_heading', array(
      	'transport'  => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_page_map_heading', array(
            'label' 	     => 'Rubrik för karta',
            'section'        => 'contact_page_content_map',
            'settings'       => 'contact_page_map_heading',
            'type'           => 'input',
    ) ) );

    $wp_customize->add_setting( 'contact_page_map_embed', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_page_map_embed', array(
    	'label'   		=> 'Bädda in karta',
    	'description' 	=> 'Lägg in en iframe från exv Googles eller Eniros kartor (alt. lägg in en bild)',
      	'section' 		=> 'contact_page_content_map',
      	'settings' 		=> 'contact_page_map_embed', 
      	'type' 			=> 'textarea',
    ) ) );

    //co-workers
    //map
    $wp_customize->add_setting( 'contact_page_coworkers_heading', array(
      	'transport'  => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_page_coworkers_heading', array(
            'label' 	     => 'Rubrik för medarbetare',
            'section'        => 'contact_page_content_coworkers',
            'settings'       => 'contact_page_coworkers_heading',
            'type'           => 'input',
    ) ) );



$i = 1;

for($i = 1; $i < 16; $i++) {

    $wp_customize->add_setting( 'person_'.$i.'_photo', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'person_'.$i.'_photo', array(
    	'label'   		=> 'Medarbetare '.$i,
    	'description'   => 'Foto',
      	'section' 		=> 'contact_page_content_coworkers',
      	'settings' 		=> 'person_'.$i.'_photo',
    ) ) );

    $wp_customize->add_setting( 'person_'.$i.'_name', array(
      	'transport'  => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'person_'.$i.'_name', array(
            'description' 	 => 'Namn',
            'section'        => 'contact_page_content_coworkers',
            'settings'       => 'person_'.$i.'_name',
            'type'           => 'input',
    ) ) );

    $wp_customize->add_setting( 'person_'.$i.'_title', array(
      	'transport'  => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'person_'.$i.'_title', array(
            'description' 	 => 'Titel',
            'section'        => 'contact_page_content_coworkers',
            'settings'       => 'person_'.$i.'_title',
            'type'           => 'input',
    ) ) );

    $wp_customize->add_setting( 'person_'.$i.'_phone', array(
      	'transport'  => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'person_'.$i.'_phone', array(
            'description' 	 => 'Telefon',
            'section'        => 'contact_page_content_coworkers',
            'settings'       => 'person_'.$i.'_phone',
            'type'           => 'input',
    ) ) );

    $wp_customize->add_setting( 'person_'.$i.'_email', array(
      	'transport'  => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'person_'.$i.'_email', array(
            'description' 	 => 'Email',
            'section'        => 'contact_page_content_coworkers',
            'settings'       => 'person_'.$i.'_email',
            'type'           => 'input',
    ) ) );

    $wp_customize->add_setting( 'person_'.$i.'_info', array(
      	'transport'  => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'person_'.$i.'_info', array(
            'description' 	 => 'Fritext',
            'section'        => 'contact_page_content_coworkers',
            'settings'       => 'person_'.$i.'_info',
            'type'           => 'textarea',
    ) ) );

}


    /*--------------------------------------------------SIDEBAR---------------------------------------------------------*/

   	$wp_customize->add_panel( 'sidebar_content', array(
		'title'          => __( 'Sidebar', 'hjalmar-bas' ),
	) );

	$wp_customize->add_section( 'contact_info' , array(
	'title'      => __( 'Kontaktuppgifter', 'hjalmar-bas' ),
	'panel'		 => 'sidebar_content',
	) ); 

	$wp_customize->add_section( 'sidebar_form' , array(
	'title'      => __( 'Formulär', 'hjalmar-bas' ),
	'panel'		 => 'sidebar_content',
	) ); 

    $wp_customize->add_section( 'sidebar_blog' , array(
	'title'      => __( 'Blogg', 'hjalmar-bas' ),
	'panel'		 => 'sidebar_content',
	) ); 


	//Contact info
	$wp_customize->add_setting( 'contact_area_heading', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_area_heading', array(
    	'label'   	=> 'Rubrik',
      	'section' 	=> 'contact_info',
      	'settings' 	=> 'contact_area_heading', 
      	'type' 		=> 'input',
      	'input_attrs' => array(
            'placeholder' => __( 'ex: Kontakta oss' ),
        )
    ) ) );

    $wp_customize->add_setting( 'contact_area_phone', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_area_phone', array(
    	'label'   	=> 'Telefonnummer',
      	'section' 	=> 'contact_info',
      	'settings' 	=> 'contact_area_phone', 
      	'type' 		=> 'input',
    ) ) );

    $wp_customize->add_setting( 'contact_area_mail', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_area_mail', array(
    	'label'   	=> 'E-post',
      	'section' 	=> 'contact_info',
      	'settings' 	=> 'contact_area_mail', 
      	'type' 		=> 'input',
    ) ) );

    $wp_customize->add_setting( 'contact_area_address1', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_area_address1', array(
    	'label'   	=> 'Adress',
    	'description' => 'Rad 1',
      	'section' 	=> 'contact_info',
      	'settings' 	=> 'contact_area_address1', 
      	'type' 		=> 'text',
    ) ) );
    $wp_customize->add_setting( 'contact_area_address2', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_area_address2', array(
    	'description' => 'Rad 2',
      	'section' 	=> 'contact_info',
      	'settings' 	=> 'contact_area_address2', 
      	'type' 		=> 'text',
    ) ) );

    $wp_customize->add_setting( 'contact_area_address3', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_area_address3', array(
    	'description' => 'Rad 3',
      	'section' 	=> 'contact_info',
      	'settings' 	=> 'contact_area_address3', 
      	'type' 		=> 'text',
    ) ) );


    //Contact Form
	$wp_customize->add_setting( 'sidebar_form_heading', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_form_heading', array(
    	'label' 		=> 'Rubrik',
      	'section' 		=> 'sidebar_form',
      	'settings' 		=> 'sidebar_form_heading',
     	'type'			=> 'text',
    ) ) );

    $wp_customize->add_setting( 'sidebar_form_shortcode', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_form_shortcode', array(
    	'label' 		=> 'Shortcode',
    	'description'   => 'Kod från plugin',
      	'section' 		=> 'sidebar_form',
      	'settings' 		=> 'sidebar_form_shortcode',
     	'type'			=> 'text',
    ) ) );




    /*---------------------------------------------------FOOTER------------------------------------------------------*/

    $wp_customize->add_panel( 'footer_content', array(
		'title'          => __( 'Footer', 'hjalmar-bas' ),
	) );

	$wp_customize->add_section( 'footer_general_settings' , array(
	'title'      => __( 'Allmänna inställningar', 'hjalmar-bas' ),
	'panel'		 => 'footer_content',
	) ); 

	$wp_customize->add_section( 'footer_columns' , array(
	'title'      => __( 'Övre footer - kolumner', 'hjalmar-bas' ),
	'panel'		 => 'footer_content',
	) ); 

	$wp_customize->add_section( 'lower_footer' , array(
	'title'      => __( 'Nedre footer', 'hjalmar-bas' ),
	'panel'		 => 'footer_content',
	) ); 


	//General Settings

	$wp_customize->add_setting( 'footer_column_number', array(
  		'default' => '3 kolumner',
	) );

	$wp_customize->add_control( 'footer_column_number', array(
  		'type' => 'radio',
  		'section' => 'footer_general_settings', 
  		'label' => __( 'Antal kolumner' ),
  		'choices' => array(
    		'3 kolumner' => __( '3 kolumner' ),
    		'2 kolumner' => __( '2 kolumner' ),
  	),
	) );

	$wp_customize->add_setting( 'footer_background_color', array(
		'default'	 => '#1d1a22',
      	'transport'  => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_background_color', array(
        'label'          => __( 'Bakgrundsfärg', 'hjalmar-bas' ), 
        'section'        => 'footer_general_settings',
        'settings'       => 'footer_background_color',
    ) ) );

    $wp_customize->add_setting( 'footer_text_color', array(
		'default'	 => '#ffffff',
      	'transport'  => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_text_color', array(
        'label'          => __( 'Textfärg', 'hjalmar-bas' ), 
        'section'        => 'footer_general_settings',
        'settings'       => 'footer_text_color',
    ) ) );

     $wp_customize->add_setting( 'footer_heading_color', array(
      	'transport'  => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_heading_color', array(
        'label'          => __( 'Rubrikfärg', 'hjalmar-bas' ), 
        'section'        => 'footer_general_settings',
        'settings'       => 'footer_heading_color',
    ) ) );

    $wp_customize->add_setting( 'footer_link_color', array(
		'default'	 => '#ffffff',
      	'transport'  => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_link_color', array(
        'label'          => __( 'Länkar', 'hjalmar-bas' ), 
        'section'        => 'footer_general_settings',
        'settings'       => 'footer_link_color',
    ) ) );

    $wp_customize->add_setting( 'footer_link_hover_color', array(
		'default'	 => '#ffffff',
      	'transport'  => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_link_hover_color', array(
        'label'          => __( 'Länkar - hovra', 'hjalmar-bas' ), 
        'section'        => 'footer_general_settings',
        'settings'       => 'footer_link_hover_color',
    ) ) );

    $wp_customize->add_setting( 'center_footer_content', array(
		'default'	 => '',
      	'transport'  => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'center_footer_content', array(
            'label'          => __( 'Centrera text i kolumner', 'hjalmar-bas' ), 
            'section'        => 'footer_general_settings',
            'settings'       => 'center_footer_content',
            'type'           => 'checkbox',
    ) ) );

    $wp_customize->add_setting( 'footer_show_menu', array(
		'default'	 => 1,
      	'transport'  => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_show_menu', array(
            'label'          => __( 'Visa nedre meny', 'hjalmar-bas' ), 
            'section'        => 'footer_general_settings',
            'settings'       => 'footer_show_menu',
            'type'           => 'checkbox',
    ) ) );

    $wp_customize->add_setting( 'footer_show_divider', array(
		'default'	 => 1,
      	'transport'  => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_show_divider', array(
            'label'          => __( 'Visa avdelare för nedre footer', 'hjalmar-bas' ), 
            'section'        => 'footer_general_settings',
            'settings'       => 'footer_show_divider',
            'type'           => 'checkbox',
    ) ) );


	//3 Footer Columns

	//Column 1 texarea
	$wp_customize->add_setting( 'footer_column1_text', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_column1_text', array(
    	'label'   		=> 'Kolumn 1',
    	'description' 	=> 'Text (html)',
      	'section' 		=> 'footer_columns',
      	'settings' 		=> 'footer_column1_text', 
      	'type' 			=> 'textarea',
    ) ) );

	//Column 1 shortcode
    $wp_customize->add_setting( 'footer_column1_shortcode', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_column1_shortcode', array(
    	'description'   => 'Shortcode',
      	'section' 		=> 'footer_columns',
      	'settings' 		=> 'footer_column1_shortcode',
     	'type'			=> 'text',
    ) ) );

    //Column 2 texarea
	$wp_customize->add_setting( 'footer_column2_text', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_column2_text', array(
    	'label'   		=> 'Kolumn 2',
    	'description' 	=> 'Text (html)',
      	'section' 		=> 'footer_columns',
      	'settings' 		=> 'footer_column2_text', 
      	'type' 			=> 'textarea',
    ) ) );

	//Column 2 shortcode
    $wp_customize->add_setting( 'footer_column2_shortcode', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_column2_shortcode', array(
    	'description'   => 'Shortcode',
      	'section' 		=> 'footer_columns',
      	'settings' 		=> 'footer_column2_shortcode',
     	'type'			=> 'text',
    ) ) );

    //Column 3 texarea
	$wp_customize->add_setting( 'footer_column3_text', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_column3_text', array(
    	'label'   		=> 'Kolumn 3',
    	'description' 	=> 'Text (html)',
      	'section' 		=> 'footer_columns',
      	'settings' 		=> 'footer_column3_text', 
      	'type' 			=> 'textarea',
    ) ) );

	//Column 3 shortcode
    $wp_customize->add_setting( 'footer_column3_shortcode', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_column3_shortcode', array(
    	'description'  	=> 'Shortcode',
      	'section' 		=> 'footer_columns',
      	'settings' 		=> 'footer_column3_shortcode',
     	'type'			=> 'text',
    ) ) );
	
	//Lower footer text
	$wp_customize->add_setting( 'lower_footer_textarea', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'lower_footer_textarea', array(
    	'label'   		=> 'Text/html',
      	'section' 		=> 'lower_footer',
      	'settings' 		=> 'lower_footer_textarea', 
      	'type' 			=> 'textarea',
    ) ) );

    /*------------------------------------------------------Blog------------------------------------------------*/

	$wp_customize->add_setting( 'hide_blog_date', array(
		'default'	=> 0,
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hide_blog_date', array(
            'label'          => __( 'Göm datum', 'hjalmar-bas' ),
            'section'        => 'blog_settings',
            'settings'       => 'hide_blog_date',
            'type'           => 'checkbox',
    ) ) );

    $wp_customize->add_setting( 'hide_blog_author', array(
		'default'	=> 0,
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hide_blog_author', array(
            'label'          => __( 'Göm författare', 'hjalmar-bas' ),
            'section'        => 'blog_settings',
            'settings'       => 'hide_blog_author',
            'type'           => 'checkbox',
    ) ) );

    $wp_customize->add_setting( 'hide_blog_nav', array(
		'default'	=> 0,
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hide_blog_nav', array(
            'label'          => __( 'Göm navigering mellan enskilda blogginlägg', 'hjalmar-bas' ),
            'section'        => 'blog_settings',
            'settings'       => 'hide_blog_nav',
            'type'           => 'checkbox',
    ) ) );

    $wp_customize->add_setting( 'blog_post_short', array(
		'default'	=> 0,
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'blog_post_short', array(
            'label'          => __( 'Visa endast utdrag av blogginlägg', 'hjalmar-bas' ),
            'section'        => 'blog_settings',
            'settings'       => 'blog_post_short',
            'type'           => 'checkbox',
    ) ) );

    $wp_customize->add_setting( 'show_sidebar_blog', array(
		'default'	=> 0,
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'show_sidebar_blog', array(
            'label'          => __( 'Visa länkar till de senaste blogginläggen i sidebaren', 'hjalmar-bas' ),
            'section'        => 'sidebar_blog',
            'settings'       => 'show_sidebar_blog',
            'type'           => 'checkbox',
    ) ) );

     $wp_customize->add_setting( 'sidebar_blog_heading', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_blog_heading', array(
    	'label'   		=> 'Rubrik i sidebar',
      	'section' 		=> 'sidebar_blog',
      	'settings' 		=> 'sidebar_blog_heading',
     	'type'			=> 'input',
    ) ) );

    /*-----------------------------------------------Social media links-----------------------------------------*/

    $wp_customize->add_setting( 'facebook_link', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'facebook_link', array(
    	'label'   	=> 'Facebook URL',
      	'section' 	=> 'social_media_settings',
      	'settings' 	=> 'facebook_link',
     	'type'		=> 'input',
    ) ) );

    $wp_customize->add_setting( 'google_plus_link', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'google_plus_link', array(
    	'label'   	=> 'Google Plus URL',
      	'section' 	=> 'social_media_settings',
      	'settings' 	=> 'google_plus_link',
     	'type'		=> 'input',
    ) ) );

    $wp_customize->add_setting( 'instagram_link', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'instagram_link', array(
    	'label'   	=> 'Instagram URL',
      	'section' 	=> 'social_media_settings',
      	'settings' 	=> 'instagram_link',
     	'type'		=> 'input',
    ) ) );

    $wp_customize->add_setting( 'linkedin_link', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'linkedin_link', array(
    	'label'   	=> 'LinkedIn URL',
      	'section' 	=> 'social_media_settings',
      	'settings' 	=> 'linkedin_link',
     	'type'		=> 'input',
    ) ) );

    $wp_customize->add_setting( 'pinterest_link', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pinterest_link', array(
    	'label'   	=> 'Pinterest URL',
      	'section' 	=> 'social_media_settings',
      	'settings' 	=> 'pinterest_link',
     	'type'		=> 'input',
    ) ) );

    $wp_customize->add_setting( 'soundcloud_link', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'soundcloud_link', array(
    	'label'   	=> 'SoundCloud URL',
      	'section' 	=> 'social_media_settings',
      	'settings' 	=> 'soundcloud_link',
     	'type'		=> 'input',
    ) ) );

    $wp_customize->add_setting( 'twitter_link', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'twitter_link', array(
    	'label'   	=> 'Twitter URL',
      	'section' 	=> 'social_media_settings',
      	'settings' 	=> 'twitter_link',
     	'type'		=> 'input',
    ) ) );

    $wp_customize->add_setting( 'youtube_link', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'youtube_link', array(
    	'label'   	=> 'YouTube URL',
      	'section' 	=> 'social_media_settings',
      	'settings' 	=> 'youtube_link',
     	'type'		=> 'input',
    ) ) );


   
   	/*------------------------------------------------------Promo-----------------------------------------------*/
    $wp_customize->add_panel( 'promo_space' , array(
	'title'      => __( 'Kampanj/Erbjudande', 'hjalmar-bas' ),
	) ); 

	$wp_customize->add_section( 'promo_space_show' , array(
	'title'      => __( 'Visningsalternativ', 'hjalmar-bas' ),
	'panel'		 => 'promo_space',
	) ); 

	$wp_customize->add_section( 'promo_space_content' , array(
	'title'      => __( 'Innehåll', 'hjalmar-bas' ),
	'panel'		 => 'promo_space',
	) ); 


	//Promo

	$wp_customize->add_setting( 'promo_show', array(
		'default'	=> 0,
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'promo_show', array(
            'label'          => __( 'Visa kampanj/erbjudande', 'hjalmar-bas' ),
            'section'        => 'promo_space_show',
            'settings'       => 'promo_show',
            'type'           => 'checkbox',
    ) ) );

    $wp_customize->add_setting( 'promo_location', array(
  		'default' => 'framsidan',
  		'transport' => 'refresh',
	) );

	$wp_customize->add_control( 'promo_location', array(
  		'type' => 'radio',
  		'section' => 'promo_space_show', 
  		'label' => __( 'Visas:' ),
  		'choices' => array(
    		'framsidan' => __( 'bara på framsidan' ),
    		'allasidor' => __( 'på alla sidor' ),
  	),
	) );

	$wp_customize->add_setting( 'promo_link', array(
		'default'	=> 0,
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'promo_link', array(
            'label'          => __( 'Gör till länk', 'hjalmar-bas' ),
            'section'        => 'promo_space_show',
            'settings'       => 'promo_link',
            'type'           => 'checkbox',
    ) ) );

    $wp_customize->add_setting( 'promo_link_link', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'promo_link_link', array(
    	'label'   		=> 'Länk',
      	'section' 		=> 'promo_space_show',
      	'settings' 		=> 'promo_link_link',
     	'type'			=> 'input',
    ) ) );

    $wp_customize->add_setting( 'promo_background_color', array(
      	'transport'  => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'promo_background_color', array(
        'label'          => __( 'Bakgrundsfärg', 'hjalmar-bas' ), 
        'section'        => 'promo_space_show',
        'settings'       => 'promo_background_color',
    ) ) );

    $wp_customize->add_setting( 'promo_frame_color', array(
      	'transport'  => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'promo_frame_color', array(
        'label'          => __( 'Ram', 'hjalmar-bas' ), 
        'section'        => 'promo_space_show',
        'settings'       => 'promo_frame_color',
    ) ) );

    $wp_customize->add_setting( 'promo_text_color', array(
      	'transport'  => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'promo_text_color', array(
        'label'          => __( 'Textfärg (rubrik + text)', 'hjalmar-bas' ), 
        'section'        => 'promo_space_show',
        'settings'       => 'promo_text_color',
    ) ) );

    $wp_customize->add_setting( 'promo_heading', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'promo_heading', array(
    	'label'   		=> 'Rubrik',
      	'section' 		=> 'promo_space_content',
      	'settings' 		=> 'promo_heading',
     	'type'			=> 'input',
    ) ) );

    $wp_customize->add_setting( 'promo_image', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'promo_image', array(
    	'label'   		=> 'Bild',
      	'section' 		=> 'promo_space_content',
      	'settings' 		=> 'promo_image',
    ) ) );

    $wp_customize->add_setting( 'promo_text', array(
      	'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'promo_text', array(
    	'label'   		=> 'Text',
      	'section' 		=> 'promo_space_content',
      	'settings' 		=> 'promo_text',
     	'type'			=> 'textarea',
    ) ) );

   	

}

add_action( 'customize_register', 'hjalmar_bas_customize_register' );



//put CSS into wp_head
function hjalmarbas_customizer_head_styles() {

	$header_background_color = get_theme_mod( 'header_background_color' ); 
	$logo_size = get_theme_mod ( 'logo_size' );
	$logo_padding = get_theme_mod ( 'logo_padding' );
	$menu_text_color = get_theme_mod ( 'menu_text_color' );
	$menu_hover_color = get_theme_mod ( 'menu_hover_color' );
	$mobile_menu_background_color = get_theme_mod ( 'mobile_menu_background_color' );
	$mobile_menu_icon_color = get_theme_mod ( 'mobile_menu_icon_color' );
	$menu_decoration = get_theme_mod ( 'menu_decoration' );

	/*Header*/
	if ( $header_background_color != '#1d1a22' ) :
	?>
		<style type="text/css">
			header {
				background-color: <?php echo $header_background_color ?>;
			}
		</style>
	<?php
	endif;

	if ( $logo_size == 'liten (50px)' ) :
	?>
		<style>
			.header-logo-space a img{
				height: 50px;
			}
			header .navbar {
				height: 50px;
			}
			header .navbar div {
				padding-top: 0px;
			}
			.mobile-nav-icon {
				height: 50px;
			}
		</style>
	<?php
	endif;
	if ( $logo_size == 'mellan (100px)' ) :
	?>
		<style>
			.header-logo-space a img{
				height: 100px;
			}
			header .navbar {
				height: 100px;
			}
			header .navbar div {
				padding-top: 25px;
			}
			.mobile-nav-icon {
				height: 100px;
			}
		</style>
	<?php
	endif;
	if ( $logo_size == 'stor (150px)' ) :
	?>
		<style>
			.header-logo-space a img{
				height: 150px;
			}
			header .navbar {
				height: 150px;
			}
			header .navbar div {
				padding-top: 50px;
			}
			.mobile-nav-icon {
				height: 150px;
			}
		</style>
	<?php
	endif;

	if ( $logo_padding == '10px' ) :
	?>
		<style>
			.header-logo-space {
				padding-top: 10px;
				padding-bottom: 10px;
			}
			header .navbar {
				margin-top: 14px;
			}
			.mobile-nav-icon {
				padding-top: 0px;
			}
		</style>
	<?php
	endif;
	if ( $logo_padding == '30px' ) :
	?>
		<style>
			.header-logo-space {
				padding-top: 30px;
				padding-bottom: 30px;
			}
			header .navbar {
				margin-top: 34px;
			}
			.mobile-nav-icon {
				padding-top: 20px;
			}
		</style>
	<?php
	endif;
	if ( $logo_padding == '50px' ) :
	?>
		<style>
			.header-logo-space {
				padding-top: 50px;
				padding-bottom: 50px;
			}
			header .navbar {
				margin-top: 54px;
			}
			.mobile-nav-icon {
				padding-top: 35px;
			}
		</style>
	<?php
	endif;

	if ( $logo_size == 'liten (50px)' && $logo_padding == '10px' || $logo_size == 'liten (50px)' && $logo_padding == '30px' || $logo_size == 'liten (50px)' && $logo_padding == '50px' || $logo_size == 'mellan (100px)' && $logo_padding == '10px' || $logo_size == 'mellan (100px)' && $logo_padding == '30px' || $logo_size == 'mellan (100px)' && $logo_padding == '50px' ) :
	?>
		<style>
			@media screen and (max-width: 500px) {
				.header-logo-space {
					padding-top: 10px;
					padding-bottom: 10px;
				}
				header .navbar div {
					padding: 0;
					padding-top: 0px;
					margin: 0;
					height: 0px;
				}
				header nav#navbar {
					margin-top:0px;
					padding-top:0px;
				}
				.mobile-nav-icon {
					height: 60px;
					padding-top: 0px;
					padding-bottom: 15px;
				}
			}
			
		</style>
	<?php
	endif;

	if ( $logo_size == 'stor (150px)' && $logo_padding == '10px' || $logo_size == 'stor (150px)' && $logo_padding == '30px' || $logo_size == 'stor (150px)' && $logo_padding == '50px' ) :
	?>
		<style>
			@media screen and (max-width: 500px) {
				.header-logo-space {
					padding-top: 10px;
					padding-bottom: 0px;
				}
				header .navbar div {
					padding: 0;
					padding-top: 0px;
					margin: 0;
					height: 0px;
				}
				header nav#navbar {
					margin-top:0px;
					padding-top:0px;
				}
				.mobile-nav-icon {
					height: 60px;
					padding-top: 0px;
					padding-bottom: 15px;
				}	
			}
			
		</style>
	<?php
	endif;

	if ( $menu_text_color != '#ffffff' ) :
	?>
		<style>
			header .navbar ul li a {
				color: <?php echo $menu_text_color ?>;
			}

		</style>
	<?php
	endif; ?>

	<?php if ( $menu_decoration == 'ram' ) : ?>
		<style>
			header .navbar ul li a:hover, header .navbar ul li.current-menu-item a {
				border: 2px solid <?php echo $menu_text_color ?>;
				color: <?php echo $menu_text_color ?>;
			}
		</style>
	<?php endif; ?> 
	<?php if ( $menu_decoration == 'oval' ) : ?>
		<style>
			header .navbar ul li a:hover, header .navbar ul li.current-menu-item a {
				border: 2px solid <?php echo $menu_text_color ?>;
				border-radius: 50%;
				color: <?php echo $menu_text_color ?>;
			}
		</style>
	<?php endif; ?>
	<?php if ( $menu_decoration == 'streck under' ) : ?>
		<style>
			header .navbar ul li a:hover, header .navbar ul li.current-menu-item a {
				border-top: 2px solid transparent;
				border-left: 2px solid transparent;
				border-right: 2px solid transparent;
				border-bottom: 2px solid <?php echo $menu_text_color ?>;
				color: <?php echo $menu_text_color ?>;
			}
		</style>
	<?php endif; ?>
	<?php if ( $menu_decoration == 'ingen' ) : ?>
		<style>
			header .navbar ul li a:hover, header .navbar ul li.current-menu-item a {
				border: 2px solid transparent;
				color: <?php echo $menu_text_color ?>;
			}
		</style>
	<?php endif; ?>

	<?php if ( $menu_hover_color != '' ) :
	?>
		<style>
			header .navbar ul li a:hover {
				color: <?php echo $menu_hover_color ?>;
				border: 2px solid <?php echo $menu_hover_color ?>;
			}
			<?php if ( $menu_decoration == 'streck under' ) { ?>
				header .navbar ul li a:hover {
					border-top: 2px solid transparent;
					border-left: 2px solid transparent;
					border-right: 2px solid transparent;
					border-bottom: 2px solid <?php echo $menu_hover_color ?>;
					color: <?php echo $menu_hover_color ?>;
				}
			<?php } ?>
			<?php if ( $menu_decoration == 'ingen' ) { ?>
				header .navbar ul li.current-menu-item a, header .navbar ul li a:hover {
					border: 2px solid transparent;	
					color: <?php echo $menu_hover_color ?>;
				}
			<?php } ?>
		</style>
	<?php
	endif;

	if ( $mobile_menu_background_color != '#ffffff' ) :
		?>
		<style>
			header .dashicons-menu {
				background-color: <?php echo $mobile_menu_background_color ?>;
			}
		</style>
	<?php
	endif;

	if ( $mobile_menu_icon_color != '#000000' ) :
		?>
		<style>
			header .dashicons-menu {
				color: <?php echo $mobile_menu_icon_color ?>;
			}
		</style>
	<?php
	endif;


	/*Content*/

	$frontpage_image = get_theme_mod( 'frontpage_image' );
	$frontpage_upper_image_text_color = get_theme_mod ( 'frontpage_upper_image_text_color' );
	$frontpage_upper_image_fontsize = get_theme_mod ( 'frontpage_upper_image_fontsize' );
	$frontpage_upper_image_font_weight = get_theme_mod ( 'frontpage_upper_image_font_weight' );
	$frontpage_upper_image_text_background = get_theme_mod ( 'frontpage_upper_image_text_background' );
	$frontpage_links_buttons = get_theme_mod ( 'frontpage_links_buttons' );
	$frontpage_links_headings = get_theme_mod ( 'frontpage_links_headings' );
	$frontpage_links_image_width = get_theme_mod ( 'frontpage_links_image_padding' );
	$frontpage_links_headings_color = get_theme_mod ( 'frontpage_links_headings_color' );
	$frontpage_links_headings_fontsize = get_theme_mod ( 'frontpage_links_headings_fontsize' );
	$all_buttons_color = get_theme_mod ( 'all_buttons_color' );
	$all_buttons_text_color = get_theme_mod ( 'all_buttons_text_color' );
	$page_background_color = get_theme_mod ( 'page_background_color' );
	$page_sections_background_color = get_theme_mod ( 'page_sections_background_color' );
	$all_links_color = get_theme_mod ( 'all_links_color' );
	$all_links_hover_color = get_theme_mod ( 'all_links_hover_color' );
	$promo_show = get_theme_mod ( 'promo_show' );
	$promo_location = get_theme_mod( 'promo_location' ); 
	$promo_background_color = get_theme_mod( 'promo_background_color' ); 
	$promo_text_color = get_theme_mod( 'promo_text_color' ); 
	$promo_frame_color = get_theme_mod( 'promo_frame_color' );
	$hide_blog_date = get_theme_mod( 'hide_blog_date' );
	$hide_blog_author = get_theme_mod( 'hide_blog_author' );
	$hide_blog_nav = get_theme_mod( 'hide_blog_nav' );

	$facebook_link = get_theme_mod( 'facebook_link' );
	$google_plus_link = get_theme_mod( 'google_plus_link' );
	$instagram_link = get_theme_mod( 'instagram_link' );
	$linkedin_link = get_theme_mod( 'linkedin_link' );
	$pinterest_link = get_theme_mod( 'pinterest_link' );
	$soundcloud_link = get_theme_mod( 'soundcloud_link' );
	$twitter_link = get_theme_mod( 'twitter_link' );
	$youtube_link = get_theme_mod( 'youtube_link' ); 

	
				


	/*social*/

	if ( $facebook_link == '' && $google_plus_link == '' && $instagram_link == '' && $linkedin_link == '' && $pinterest_link == '' && $soundcloud_link == '' && $twitter_link == '' && $youtube_link == '' ) { ?>
		<style>
			.social-links {
				display: none;
			}	
		</style>

	<?php } 


	/*blog*/
	if ( $hide_blog_date == 1 ) { ?>
		<style>
			.blog-time {
				display: none;
			}	
		</style>
	<?php }

	if ( $hide_blog_author == 1 ) { ?>
		<style>
			.blog-author {
				display: none;
			}	
		</style>
	<?php }

	if ( $hide_blog_nav == 1 ) { ?>
		<style>
			.nextPrevLink {
				display: none;
			}	
		</style>
	<?php }

	
	/*promo*/
	if ( $promo_show == 0 ) { ?>
		<style>
			.promo {
				display: none;
			}	
		</style>
	<?php }

	if ( $promo_background_color != '' ) { ?>
		<style>
			.promo {
				background-color: <?php echo $promo_background_color; ?>;
			}	
		</style>
	<?php }

	if ( $promo_frame_color != '' ) { ?>
		<style>
			.promo {
				border: 2px solid <?php echo $promo_frame_color; ?>;
			}	
		</style>
	<?php }

	if ( $promo_text_color != '' ) { ?>
		<style>
			.promo h1, .promo p{
				color: <?php echo $promo_text_color; ?>;
			}	
		</style>
	<?php }


	
	$k = 1;
	for ($k=1; $k < 16; $k++) { 
		$person_photo = get_theme_mod( 'person_'.$k.'_photo' );

		if ( $person_photo != '') { ?>
		<style>
			.coworkers .image-box<?php echo $k ?> {
				background-image: url('<?php echo $person_photo; ?>');
				background-position: center;
				background-size: cover;
			}	
		</style>
	<?php }
	}
	

	if ( $page_background_color != '#ffffff' ) { ?>
	 	<style>
			.content-wrap {
				background-color: <?php echo $page_background_color; ?>;
			}	
		</style>
	<?php } 

	if ( $all_links_color != '' ) { ?>
	 	<style>
			.content-wrap a {
				color: <?php echo $all_links_color; ?>;
			}	
		</style>
	<?php }

	if ( $all_links_hover_color != '' ) { ?>
	 	<style>
			.content-wrap a:hover {
				color: <?php echo $all_links_hover_color; ?>;
			}	
			.content-wrap .editor-content a:hover, .content-wrap .contact-content a:hover, .all-posts a:hover, .single-post a:hover {
				text-decoration: none;
			}	
		</style>
	<?php }

	if ( $page_sections_background_color != '' ) { ?>
	 	<style>
			.editor-content, .contact-content, .sidebar-contact, .sidebar-form, .one-post, .one-post-single, .latest-blog-posts, .sidebar-sidebar {
				background-color: <?php echo $page_sections_background_color; ?>;
			}	
		</style>
	<?php } 

	if ( $frontpage_image != '' ) { ?>
	 	<style>
			div.frontpage-top-image {
				clear: both;
				width: 100%;
				height: 460px;
				display: table;
				background-image: url('<?php echo $frontpage_image; ?>');
				background-position: center;
				background-size: cover;
				border-bottom: 4px solid <?php echo $header_background_color; ?>;
			}	
		</style>
	<?php } 

	if ( $frontpage_links_image_width != '' ) { ?>
	 	<style>
			.img-link-fourth img, .img-link-third img, .img-link-half img {
				width: <?php echo $frontpage_links_image_width; ?>%;
			}	
		</style>
	<?php } 

	if ( $frontpage_links_image_width != '' && $frontpage_links_image_width >= 103 ) { ?>
	 	<style>
			.img-link-fourth img, .img-link-third img, .img-link-half img {
				width: 103%;
				border-radius: 0px;
			}	
		</style>
	<?php } 

	if ( $frontpage_upper_image_text_background == 1 ) { ?>
		<style>
			.frontpage-top-image h3#upper-image-text span {
				background-color: rgba(255, 255, 255, 0.5);
				border-radius: 2px;
				padding: 10px;
				padding-left: 15px;
				padding-right: 15px;
			} 
		</style>
	<?php }

	if ( $frontpage_links_buttons == 1 ) { ?>
		<style>
			.link-button-div {
				display: none;
			} 
		</style>
	<?php }

	if ( $all_buttons_color != '' ) { ?>
		<style>
			.img-link-fourth a.link-button, .img-link-third a.link-button, .img-link-half a.link-button, .sidebar-content form input[type=submit], form input[type=submit], button, .widget-area .textwidget form input[type=submit] {
				background-color: <?php echo $all_buttons_color; ?>;
				border: 2px solid <?php echo $all_buttons_color; ?>;
				color: #ffffff;
			} 

			.img-link-fourth a.link-button:hover, .img-link-third a.link-button:hover, .img-link-half a.link-button:hover, .sidebar-content form input[type=submit]:hover, form input[type=submit]:hover, button:hover, .widget-area .textwidget form input[type=submit]:hover {
				border: 2px solid <?php echo $all_buttons_color; ?>;
				background-color: #ffffff;
				color: <?php echo $all_buttons_color; ?>;
			}
		</style>
	<?php }

	if ( $all_buttons_text_color != '' ) { ?> 
		<style>
			.img-link-fourth a.link-button, .img-link-third a.link-button, .img-link-half a.link-button, .sidebar-content form input[type=submit], form input[type=submit], button, .widget-area .textwidget form input[type=submit] {
				background-color: #1d1a22;
				border: 2px solid #1d1a22;
				color: <?php echo $all_buttons_text_color; ?>;
			} 

			.img-link-fourth a.link-button:hover, .img-link-third a.link-button:hover, .img-link-half a.link-button:hover, .sidebar-content form input[type=submit]:hover, form input[type=submit]:hover, button:hover, .widget-area .textwidget form input[type=submit]:hover {
				background-color: <?php echo $all_buttons_text_color; ?>;
				border: 2px solid #1d1a22;
				color: #1d1a22;
			}
		</style>
	<?php }

	if ( $all_buttons_color != '' && $all_buttons_text_color != '' ) { ?> 
		<style>
			.img-link-fourth a.link-button, .img-link-third a.link-button, .img-link-half a.link-button, .sidebar-content form input[type=submit], form input[type=submit], button, .widget-area .textwidget form input[type=submit] {
				background-color: <?php echo $all_buttons_color; ?>;
				border: 2px solid <?php echo $all_buttons_color; ?>;
				color: <?php echo $all_buttons_text_color; ?>;
			} 

			.img-link-fourth a.link-button:hover, .img-link-third a.link-button:hover, .img-link-half a.link-button:hover, .sidebar-content form input[type=submit]:hover, form input[type=submit]:hover, button:hover, .widget-area .textwidget form input[type=submit]:hover {
				background-color: <?php echo $all_buttons_text_color; ?>;
				border: 2px solid <?php echo $all_buttons_color; ?>;
				color: <?php echo $all_buttons_color; ?>;
			}
		</style>
	<?php }

	if ( $frontpage_links_headings == 1 ) { ?>
		<style>
			.four-img-links h3, .three-img-links h3, .two-img-links h3 {
				display: none;
			} 
		</style>
	<?php }

	if ( $frontpage_links_headings_color != '' ) { ?>
		<style>
			.four-img-links h3, .three-img-links h3, .two-img-links h3 {
				color: <?php echo $frontpage_links_headings_color; ?>;
			} 
		</style>
	<?php }

	if ( $frontpage_links_headings_fontsize != '' ) { ?>
		<style>
			.four-img-links h3, .three-img-links h3, .two-img-links h3 {
				font-size: <?php echo $frontpage_links_headings_fontsize; ?>;
			} 
		</style>
	<?php }





	/*Footer*/

	$footer_background_color = get_theme_mod( 'footer_background_color' );
	$footer_text_color = get_theme_mod( 'footer_text_color' );
	$footer_heading_color = get_theme_mod( 'footer_heading_color' );
	$footer_link_color = get_theme_mod( 'footer_link_color' );
	$footer_link_hover_color = get_theme_mod( 'footer_link_hover_color' );
	$center_footer_content = get_theme_mod( 'center_footer_content' );
	$footer_show_menu = get_theme_mod( 'footer_show_menu' );
	$footer_show_divider = get_theme_mod( 'footer_show_divider' );


	?>
	<style>
		footer form input{
			border-color: <?php echo $footer_text_color ?>;
		}
	</style>

	<?php


	if ( $footer_background_color != '#1d1a22' ) :
	?>
		<style>
			footer {
				background-color: <?php echo $footer_background_color ?>;
			}
		</style>
	<?php
	endif;

	if ( $footer_text_color != '#ffffff' ) :
	?>
		<style>
			footer, footer h1, footer h2, footer h3, footer h4, footer h5, footer h6 {
				color: <?php echo $footer_text_color ?>;
			}
		</style>
	<?php
	endif;

	if ( $footer_heading_color != '' ) :
	?>
		<style>
			footer h1, footer h2, footer h3, footer h4, footer h5, footer h6 {
				color: <?php echo $footer_heading_color ?>;
			}
		</style>
	<?php
	endif;

	if ( $footer_link_color != '#ffffff' ) :
	?>
		<style>
			footer a, footer .navbar ul li a, footer .navbar ul li.current-menu-item a {
				color: <?php echo $footer_link_color ?>;
			}
		</style>
	<?php
	endif;

	if ( $footer_link_hover_color != '#ffffff' ) :
	?>
		<style>
			footer a:hover, footer .navbar ul li a:hover {
				color: <?php echo $footer_link_hover_color ?>;
			} 
		</style>
	<?php
	endif;
	
	if ( $footer_link_color != '#ffffff' && $footer_link_hover_color != '#ffffff' ) :
		?>
		<style>
			footer .third-column form input[type=submit], footer .half-column form input[type=submit] {
				color: #ffffff;
				background-color: <?php echo $footer_link_color; ?>;
				border: 2px solid #ffffff;
			} 

			footer .third-column form input[type=submit]:hover, footer .half-column form input[type=submit]:hover {
				color: #ffffff;
				background-color: <?php echo $footer_link_hover_color; ?>;
				border: 2px solid #ffffff;
			} 
		</style>
	<?php
	endif;
	

	if ( $center_footer_content == 1 ) :
	?>
		<style>
			footer .footer-text-or-code{
				text-align: center;
			}
			footer .third-column .footer-text-or-code img, footer .half-column .footer-text-or-code img {
				width: 100%;
				margin: auto;
			}
	
		</style>
	<?php
	endif;

	if ( $footer_show_menu != 1 ) :
	?>
		<style>
			.footer-foot .navbar{
				display: none;
			}
	
		</style>
	<?php
	endif;

	if ( $footer_show_divider != 1 ) :
	?>
		<style>
			.footer-foot {
				border-top: none;
			}
	
		</style>
	<?php
	endif;





	/*---------------------------------------------------FONTS-------------------------------------------------------*/
	//get theme mods
	$frontpage_upper_image_textfont = get_theme_mod ( 'frontpage_upper_image_textfont' );
	$frontpage_upper_image_font_google_link = get_theme_mod ( 'frontpage_upper_image_font_google_link' );
	$frontpage_upper_image_font_google_css = get_theme_mod ( 'frontpage_upper_image_font_google_css' );

	$all_headings_textfont = get_theme_mod ( 'all_headings_textfont' );
	$all_headings_font_google_link = get_theme_mod ( 'all_headings_font_google_link' );
	$all_headings_font_google_css = get_theme_mod ( 'all_headings_font_google_css' );
	$all_headings_text_color = get_theme_mod ( 'all_headings_text_color' );
	$all_h1_fontsize = get_theme_mod ( 'all_h1_fontsize' );
	$all_h2_fontsize = get_theme_mod ( 'all_h2_fontsize' );
	$all_h3_fontsize = get_theme_mod ( 'all_h3_fontsize' );
	$all_h4_fontsize = get_theme_mod ( 'all_h4_fontsize' );
	$all_h5_fontsize = get_theme_mod ( 'all_h5_fontsize' );
	$all_h6_fontsize = get_theme_mod ( 'all_h6_fontsize' );
	$all_headings_font_weight = get_theme_mod ( 'all_headings_font_weight' );
	$all_headings_center = get_theme_mod ( 'all_headings_center' );
	$all_paragraphs_center = get_theme_mod ( 'all_paragraphs_center' );

	$all_paragraphs_textfont = get_theme_mod ( 'all_paragraphs_textfont' );
	$all_paragraphs_font_google_link = get_theme_mod ( 'all_paragraphs_font_google_link' );
	$all_paragraphs_font_google_css = get_theme_mod ( 'all_paragraphs_font_google_css' );
	$all_paragraphs_text_color = get_theme_mod ( 'all_paragraphs_text_color' );
	$all_paragraphs_fontsize = get_theme_mod ( 'all_paragraphs_fontsize' );
	$all_paragraphs_font_weight = get_theme_mod ( 'all_paragraphs_font_weight' );

	$header_menu_textfont = get_theme_mod ( 'header_menu_textfont' );
	$header_menu_font_google_link = get_theme_mod ( 'header_menu_font_google_link' );
	$header_menu_font_google_css = get_theme_mod ( 'header_menu_font_google_css' );
	$header_menu_fontsize = get_theme_mod ( 'header_menu_fontsize' );
	$header_menu_font_weight = get_theme_mod ( 'header_menu_font_weight' );



	//CSS-selectors
	$frontpage_image_text = "div.frontpage-top-image h3#upper-image-text";
	$all_headings = "h1, h2, h3, h4, h5, h6";
	$all_paragraphs = ".editor-content p, .contact-content p, footer, .sidebar-content, .promo p, .all-posts p, .single-post p, .latest-blog-posts p a";
	$all_paragraphs_not_footer = ".editor-content p, .contact-content p, .sidebar-content, .all-posts p, .single-post p";
	$only_editor_paragraphs = ".editor-content p, .all-posts p, .single-post p, .latest-blog-posts p a";
	$menu_text = "header, footer .navbar";
	$only_header_menu = "header";


	//Set font - function

	function setFont ($font, $selector) {
		if ($font == 'arial' || $font == 'verdana' || $font == 'arial black' || $font == 'impact') { ?>
			<style>
			<?php echo $selector; ?> {
				font-family: <?php echo $font; ?>, Helvetica, sans-serif; 
			}
			</style>
		<?php } 
		else if ($font == 'courier new' || $font == 'lucida console') { ?> 
			<style>
			<?php echo $selector; ?> {
				font-family: <?php echo $font; ?>, monospace; 
			}
			</style>
		<?php } 

		else if ($font == 'times new roman' || $font == 'georgia') { ?>
			<style>
			<?php echo $selector; ?> {
				font-family: <?php echo $font; ?>, serif; 
			}
			</style>
		<?php } 

		else if ($font == 'comic sans ms') { ?>
			<style>
			<?php echo $selector; ?> {
				font-family: <?php echo $font; ?>, cursive; 
			}
			</style>
		<?php } 

		else if ($font == 'roboto') { ?>
			<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
			<style>
			<?php echo $selector; ?> {
				font-family: 'Roboto', sans-serif; 
			}
			</style>
		<?php } 

		else if ($font == 'montserrat') { ?>
			<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">  
			<style>
			<?php echo $selector; ?> {
				font-family: 'Montserrat', sans-serif;
			}
			</style>
		<?php } 

		else if ($font == 'josefin sans') { ?>
			<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">  
			<style>
			<?php echo $selector; ?> {
				font-family: 'Josefin Sans', sans-serif;
			}
			</style>
		<?php } 

		else if ($font == 'pathway gothic one') { ?>
			<link href="https://fonts.googleapis.com/css?family=Pathway+Gothic+One" rel="stylesheet">  
			<style>
			<?php echo $selector; ?> {
				font-family: 'Pathway Gothic One', sans-serif;
			}
			</style>
		<?php } 

		else if ($font == 'acme') { ?>
			<link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet"> 
			<style>
			<?php echo $selector; ?> {
				font-family: 'Acme', sans-serif;
			}
			</style>
		<?php } 

		else if ($font == 'orbitron') { ?>
			<link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">  
			<style>
			<?php echo $selector; ?> {
				font-family: 'Orbitron', sans-serif;
			}
			</style>
		<?php } 

		else if ($font == 'julius sans one') { ?>
			<link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet">   
			<style>
			<?php echo $selector; ?> {
				font-family: 'Julius Sans One', sans-serif;
			}
			</style>
		<?php } 

		else if ($font == 'lato') { ?>
			<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">    
			<style>
			<?php echo $selector; ?> {
				font-family: 'Lato', sans-serif;
			}
			</style>
		<?php } 

		else if ($font == 'vidaloka') { ?>
			<link href="https://fonts.googleapis.com/css?family=Vidaloka" rel="stylesheet"> 
			<style>
			<?php echo $selector; ?> {
				font-family: 'Vidaloka', serif;
			}
			</style>
		<?php } 

		else if ($font == 'alice') { ?>
			<link href="https://fonts.googleapis.com/css?family=Alice" rel="stylesheet">  
			<style>
			<?php echo $selector; ?> {
				font-family: 'Alice', serif;
			}
			</style>
		<?php } 

		else if ($font == 'indie flower') { ?>
			<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet"> 
			<style>
			<?php echo $selector; ?> {
				font-family: 'Indie Flower', cursive;
			}
			</style>
		<?php } 

		else if ($font == 'gloria hallelujah') { ?>
			<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet"> 
			<style>
			<?php echo $selector; ?> {
				font-family: 'Gloria Hallelujah', cursive;
			}
			</style>
		<?php } 

		else if ($font == 'great vibes') { ?>
			<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet"> 
			<style>
			<?php echo $selector; ?> {
				font-family: 'Great Vibes', cursive;
			}
			</style>
		<?php } 

		else if ($font == 'permanent marker') { ?>
			<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet"> 
			<style>
			<?php echo $selector; ?> {
				font-family: 'Permanent Marker', cursive;
			}
			</style>
		<?php } 

		else if ($font == 'dancing script') { ?>
			<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet"> 
			<style>
			<?php echo $selector; ?> {
				font-family: 'Dancing Script', cursive;
			}
			</style>
		<?php } 

		else if ($font == 'cookie') { ?>
			<link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet"> 
			<style>
			<?php echo $selector; ?> {
				font-family: 'Cookie', cursive;
			}
			</style>
		<?php } 
	
		}

		//Functions for font-areas

		function setImageFont ($frontpage_upper_image_textfont, $frontpage_image_text) {

			$font = $frontpage_upper_image_textfont;
			$selector = $frontpage_image_text;

			setFont($font, $selector);
		}

		function setHeadingsFont ($all_headings_textfont, $all_headings) {

			$font = $all_headings_textfont;
			$selector = $all_headings;

			setFont($font, $selector);
		}

		function setParagraphsFont ($all_paragraphs_textfont, $all_paragraphs) {

			$font = $all_paragraphs_textfont;
			$selector = $all_paragraphs;

			setFont($font, $selector);
		}

		function setMenuFont ($header_menu_textfont, $menu_text) {

			$font = $header_menu_textfont;
			$selector = $menu_text;

			setFont($font, $selector);
		}



		//Set font via previous functions or links
		/*image text*/
		if ($frontpage_upper_image_font_google_link != '' && $frontpage_upper_image_font_google_css != '') { 
			echo $frontpage_upper_image_font_google_link; ?>
			<style>
			<?php echo $frontpage_image_text; ?> {
				<?php echo $frontpage_upper_image_font_google_css; ?>
			}
			</style>
		<?php } 

		else if ( $frontpage_upper_image_textfont != '') {
			setImageFont($frontpage_upper_image_textfont, $frontpage_image_text);
		}

		/*headings*/
		if ($all_headings_font_google_link != '' && $all_headings_font_google_css != '') { 
			echo $all_headings_font_google_link; ?>
			<style>
			<?php echo $all_headings; ?> {
				<?php echo $all_headings_font_google_css; ?>
			}
			</style>
		<?php } 

		else if ( $all_headings_textfont != '') {
			setHeadingsFont($all_headings_textfont, $all_headings);
		}

		/*pargraphs*/
		if ($all_paragraphs_font_google_link != '' && $all_paragraphs_font_google_css != '') { 
			echo $all_paragraphs_font_google_link; ?>
			<style>
			<?php echo $all_paragraphs; ?> {
				<?php echo $all_paragraphs_font_google_css; ?>
			}
			</style>
		<?php } 

		else if ( $all_paragraphs_textfont != '') {
			setParagraphsFont($all_paragraphs_textfont, $all_paragraphs);
		}

		/*menu*/
		if ($header_menu_font_google_link != '' && $header_menu_font_google_css != '') { 
			echo $header_menu_font_google_link; ?>
			<style>
			<?php echo $menu_text; ?> {
				<?php echo $header_menu_font_google_css; ?>
			}
			</style>
		<?php } 

		else if ( $header_menu_textfont != '') {
			setMenuFont($header_menu_textfont, $menu_text);
		}



		//Other font-related
		if ($frontpage_upper_image_text_color != '#ffffff') { ?>
			<style>
			<?php echo $frontpage_image_text; ?> {
				color: <?php echo $frontpage_upper_image_text_color; ?>;
			}
			</style>
		<?php } 

		if ($frontpage_upper_image_fontsize != '') { ?>
			<style>
			<?php echo $frontpage_image_text; ?> {
				font-size: <?php echo $frontpage_upper_image_fontsize; ?>;
			}
			</style>
		<?php } 

		if ($frontpage_upper_image_font_weight == 1) { ?>
			<style>
			<?php echo $frontpage_image_text; ?> {
				font-weight: bold;
			}
			</style>
		<?php } 
		else if ($frontpage_upper_image_font_weight == 0) { ?>	
			<style>
				<?php echo $frontpage_image_text; ?> {
					font-weight: normal;
				}
			</style>
		<?php }

		//headings
		if ($all_headings_text_color != '') { ?>
			<style>
			<?php echo $all_headings; ?> {
				color: <?php echo $all_headings_text_color; ?>;
			}
			</style>
		<?php } 

		if ($all_h1_fontsize != '') { ?>
			<style>
			h1 {
				font-size: <?php echo $all_h1_fontsize; ?>;
			}
			</style>
		<?php } 
		if ($all_h2_fontsize != '') { ?>
			<style>
			h2 {
				font-size: <?php echo $all_h2_fontsize; ?>;
			}
			</style>
		<?php } 
		if ($all_h3_fontsize != '') { ?>
			<style>
			h3 {
				font-size: <?php echo $all_h3_fontsize; ?>;
			}
			</style>
		<?php } 
		if ($all_h4_fontsize != '') { ?>
			<style>
			h4 {
				font-size: <?php echo $all_h4_fontsize; ?>;
			}
			</style>
		<?php } 
		if ($all_h5_fontsize != '') { ?>
			<style>
			h5 {
				font-size: <?php echo $all_h5_fontsize; ?>;
			}
			</style>
		<?php } 
		if ($all_h6_fontsize != '') { ?>
			<style>
			h6 {
				font-size: <?php echo $all_h6_fontsize; ?>;
			}
			</style>
		<?php } 

		if ($all_headings_font_weight == 1) { ?>
			<style>
			<?php echo $all_headings; ?> {
				font-weight: bold;
			}
			</style>
		<?php } 
		else if ($all_headings_font_weight == 0) { ?>	
			<style>
				<?php echo $all_headings; ?> {
					font-weight: normal;
				}
			</style>
		<?php }

		
		if ($all_headings_center == 1) { ?>	
			<style>
				<?php echo $all_headings; ?> {
					text-align: center;
				}
			</style>
		<?php }

		if ($all_paragraphs_center == 1) { ?>	
			<style>
				<?php echo $all_paragraphs; ?> {
					text-align: center;
				}
			</style>
		<?php }

		//paragraphs
		if ($all_paragraphs_text_color != '') { ?>
			<style>
			<?php echo $all_paragraphs_not_footer; ?> {
				color: <?php echo $all_paragraphs_text_color; ?>;
			}
			</style>
		<?php } 

		if ($all_paragraphs_fontsize != '') { ?>
			<style>
			<?php echo $only_editor_paragraphs; ?> {
				font-size: <?php echo $all_paragraphs_fontsize; ?>;
			}
			</style>
		<?php } 
		
		if ($all_paragraphs_font_weight == 1) { ?>
			<style>
			<?php echo $all_paragraphs; ?> {
				font-weight: bold;
			}
			</style>
		<?php } 
		else if ($all_paragraphs_font_weight == 0) { ?>	
			<style>
				<?php echo $all_paragraphs; ?> {
					font-weight: normal;
				}
			</style>
		<?php }

		//Menu
		if ($header_menu_fontsize != '') { ?>
			<style>
			<?php echo $only_header_menu; ?> {
				font-size: <?php echo $header_menu_fontsize; ?>;
			}
			</style>
		<?php } 
		
		if ($header_menu_font_weight == 1) { ?>
			<style>
			<?php echo $menu_text; ?> {
				font-weight: bold;
			}
			</style>
		<?php }
		else if ($header_menu_font_weight == 0) { ?>	
			<style>
				<?php echo $menu_text; ?> {
					font-weight: normal;
				}
			</style>
		<?php } 



}
add_action( 'wp_head', 'hjalmarbas_customizer_head_styles' );





//Menues
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' )
     )
   );
 }
 add_action( 'init', 'register_my_menus' );





//add js-files
wp_enqueue_script( 'script', get_template_directory_uri() . '/js/navtoggle.js', array ( 'jquery' ), 1.1, true);
wp_enqueue_script( 'script2', get_template_directory_uri() . '/js/overflowsidebar.js', array ( 'jquery' ), 1.1, true);





//Enqueue the Dashicons script
add_action( 'wp_enqueue_scripts', 'load_dashicons_front_end' );
function load_dashicons_front_end() {
wp_enqueue_style( 'dashicons' );
}



//Featured Image
add_theme_support( 'post-thumbnails' );







function hjalmarbas_widgets_init() {

	register_sidebar( array(
		'name'          => 'Sidebar',
		'id'            => 'sidebar_widget',
		'before_widget' => '<div class="sidebar-widget-area">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget1-heading">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => 'Framsida',
		'id'            => 'frontpage_widget',
		'before_widget' => '<div class="frontpage-widget-area">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget2-heading">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'Alla Sidor',
		'id'            => 'pages_widget',
		'before_widget' => '<div class="pages-widget-area">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget3-heading">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'hjalmarbas_widgets_init' );











?>