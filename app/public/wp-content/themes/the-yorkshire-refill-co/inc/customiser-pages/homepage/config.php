<?php

// Homepage Settings Panel
$wp_customize->add_panel( 'homepage_panel', array(
    'priority'       => 10,
     'theme_supports' => '',
     'title'          => 'Customise Homepage',
     'description'    => 'Customise the Homepage Content',
   ) );


/** ----------------------------------------------------------------------- */

// Homepage Hero Settings
$wp_customize->add_section(
		'sec_homepage_hero', array(
			'title'			=> 'Hero Settings',
            'description'	=> 'Hero Section',
            'panel'         => 'homepage_panel'
		)
	);

			// Field 1 - Hero Heading
			$wp_customize->add_setting(
				'set_hero_text', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_hero_text', array(
					'label'			=> 'Hero Heading Copy',
					'description'	=> 'Add the homepage heading here',
					'section'		=> 'sec_homepage_hero',
					'type'			=> 'text'
				)
            );
            
            // Field 2 - Hero CTA Text
			$wp_customize->add_setting(
				'set_hero_cta_text', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_hero_cta_text', array(
					'label'			=> 'Hero CTA copy',
					'description'	=> 'Add the homepage CTA copy here',
					'section'		=> 'sec_homepage_hero',
					'type'			=> 'text'
				)
            );

            // Field 2 - Hero CTA URL
			$wp_customize->add_setting(
				'set_hero_cta_url', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'esc_url_raw'
				)
			);

			$wp_customize->add_control(
				'set_hero_cta_url', array(
					'label'			=> 'Hero CTA url',
					'description'	=> 'Add the homepage CTA URL here',
					'section'		=> 'sec_homepage_hero',
					'type'			=> 'url'
				)
            );

            // Field 4 - Hero Image
			$wp_customize->add_setting(
				'set_hero_image', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
                new WP_Customize_Image_Control( $wp_customize, 'set_hero_image', array(
                    'label' => 'Upload Hero Image',
                    'priority' => 20,
                    'section' => 'sec_homepage_hero',
                    'settings' => 'set_hero_image',
                    'button_labels' => array(// All These labels are optional
                                'select' => 'Select Hero Image',
                                'remove' => 'Remove  Hero Image',
                                'change' => 'Change  Hero Image',
                                )
                ))
            );


/** ----------------------------------------------------------------------- */

// How We Work Section
$wp_customize->add_section(
    'sec_how_we_work', array(
        'title'			=> 'How We Work',
        'description'	=> 'How We Work Section',
        'panel'         => 'homepage_panel'
    )
);

        // Field 1 - How we work header
        $wp_customize->add_setting(
            'set_how_we_work_header', array(
                'type'					=> 'theme_mod',
                'default'				=> '',
                'sanitize_callback'		=> 'sanitize_text_field'
            )
        );

        $wp_customize->add_control(
            'set_how_we_work_header', array(
                'label'			=> 'How We Work Header',
                'description'	=> 'Add the How We Work heading here',
                'section'		=> 'sec_how_we_work',
                'type'			=> 'text'
            )
        );

         // Field 2 - How we work CTA copy
         $wp_customize->add_setting(
            'set_how_we_work_CTA_copy', array(
                'type'					=> 'theme_mod',
                'default'				=> '',
                'sanitize_callback'		=> 'sanitize_text_field'
            )
        );

        $wp_customize->add_control(
            'set_how_we_work_CTA_copy', array(
                'label'			=> 'How We Work CTA Text',
                'description'	=> 'Add the CTA Text here',
                'section'		=> 'sec_how_we_work',
                'type'			=> 'text'
            )
        );

         // Field 3 - How we work CTA url
         $wp_customize->add_setting(
            'set_how_we_work_CTA_url', array(
                'type'					=> 'theme_mod',
                'default'				=> '',
                'sanitize_callback'		=> 'esc_url_raw'
            )
        );

        $wp_customize->add_control(
            'set_how_we_work_CTA_url', array(
                'label'			=> 'How We Work CTA url',
                'description'	=> 'Add the CTA url here (eg "/how-we-work")',
                'section'		=> 'sec_how_we_work',
                'type'			=> 'url'
            )
        );


        // How we work steps - Images, Title and copy
        for ($x = 1; $x <= 4; $x++) {
            // Field 4 - How we work Image
            $wp_customize->add_setting(
				'set_how_we_work_image_step_'.$x, array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
                new WP_Customize_Image_Control( $wp_customize, 'set_how_we_work_image_step_'.$x, array(
                    'label' => 'Upload How We Work Image Step '.$x,
                    'section' => 'sec_how_we_work',
                    'settings' => 'set_how_we_work_image_step_'.$x,
                    'button_labels' => array(// All These labels are optional
                                'select' => 'Select Image for step '.$x,
                                'remove' => 'Remove Image for step '.$x,
                                'change' => 'Change Image for step '.$x,
                                )
                ))
            );

             // Field 5 - How we work step title
            $wp_customize->add_setting(
                'set_how_we_work_step_title'.$x, array(
                    'type'					=> 'theme_mod',
                    'default'				=> '',
                    'sanitize_callback'		=> 'sanitize_text_field'
                )
            );

            $wp_customize->add_control(
                'set_how_we_work_step_title'.$x, array(
                    'label'			=> 'How we work title, step '.$x,
                    'description'	=> 'Add the title for how we work step '.$x,
                    'section'		=> 'sec_how_we_work',
                    'type'			=> 'text'
                )
            );

             // Field 6 - How we work step description
             $wp_customize->add_setting(
                'set_how_we_work_step_description'.$x, array(
                    'type'					=> 'theme_mod',
                    'default'				=> '',
                    'sanitize_callback'		=> 'sanitize_text_field'
                )
            );

            $wp_customize->add_control(
                'set_how_we_work_step_description'.$x, array(
                    'label'			=> 'How we work description, step '.$x,
                    'description'	=> 'Add the description for how we work step '.$x,
                    'section'		=> 'sec_how_we_work',
                    'type'			=> 'text'
                )
            );
        }


/** ----------------------------------------------------------------------- */

//Popular Products 
$wp_customize->add_section(
    'sec_popular_products', array(
        'title'			=> 'Popular Products',
        'description'	=> 'Popular Products Section',
        'panel'         => 'homepage_panel'
    )
);	

        // Field 1 - Popular Products Title
        $wp_customize->add_setting(
            'set_popular_title', array(
                'type' 				=> 'theme_mod',
                'default' 			=> '',
                'sanitize_callback' => 'sanitize_text_field'
            )
        );

        $wp_customize->add_control(
            'set_popular_title', array(
                'label' 		=> 'Popular Products Title',
                'description' 	=> 'Popular Products Title',
                'section' 		=> 'sec_popular_products',
                'type' 			=> 'text'
            )
        );

        // Field 2 - Popular Products Limit
        $wp_customize->add_setting(
            'set_popular_max_num', array(
                'type'					=> 'theme_mod',
                'default'				=> '',
                'sanitize_callback'		=> 'absint'
            )
        );

        $wp_customize->add_control(
            'set_popular_max_num', array(
                'label'			=> 'Popular Products Max Number',
                'description'	=> 'Popular Products Max Number',
                'section'		=> 'sec_popular_products',
                'type'			=> 'number'
            )
        );

        // Field 3 - Popular Products Columns
        $wp_customize->add_setting(
            'set_popular_max_col', array(
                'type'					=> 'theme_mod',
                'default'				=> '',
                'sanitize_callback'		=> 'absint'
            )
        );

        $wp_customize->add_control(
            'set_popular_max_col', array(
                'label'			=> 'Popular Products Max Columns',
                'description'	=> 'Popular Products Max Columns',
                'section'		=> 'sec_popular_products',
                'type'			=> 'number'
            )
        );

/** ----------------------------------------------------------------------- */

//Product of the Month

// To Do

/** ----------------------------------------------------------------------- */

//New Products

// To Do

/** ----------------------------------------------------------------------- */

//About Me
// How We Work Section
$wp_customize->add_section(
    'sec_about_me', array(
        'title'			=> 'About Me',
        'description'	=> 'About Me Section',
        'panel'         => 'homepage_panel'
    )
            );
            // Field 1 - About Me Description
            $wp_customize->add_setting(
                'set_about_me_description', array(
                    'type'					=> 'theme_mod',
                    'default'				=> '',
                    'sanitize_callback'		=> 'sanitize_text_field'
                )
            );

            $wp_customize->add_control(
                'set_about_me_description', array(
                    'label'			=> 'About Me description',
                    'description'	=> 'Add the About Me description here',
                    'section'		=> 'sec_about_me',
                    'type'			=> 'text'
                )
            );

            // Field 2 - About Me CTA Text
            $wp_customize->add_setting(
                'set_about_me_cta_text', array(
                    'type'					=> 'theme_mod',
                    'default'				=> '',
                    'sanitize_callback'		=> 'sanitize_text_field'
                )
            );

            $wp_customize->add_control(
                'set_about_me_cta_text', array(
                    'label'			=> 'About Me CTA copy',
                    'description'	=> 'Add the About Me CTA copy here',
                    'section'		=> 'sec_about_me',
                    'type'			=> 'text'
                )
            );

            // Field 23 - About Me CTA url
            $wp_customize->add_setting(
                'set_about_me_cta_url', array(
                    'type'					=> 'theme_mod',
                    'default'				=> '',
                    'sanitize_callback'		=> 'esc_url_raw'
                )
            );

            $wp_customize->add_control(
                'set_about_me_cta_url', array(
                    'label'			=> 'About Me CTA url',
                    'description'	=> 'Add the About Me CTA URL here',
                    'section'		=> 'sec_about_me',
                    'type'			=> 'url'
                )
            );

            // Field 4 - Hero Image
            $wp_customize->add_setting(
                'set_about_me_image', array(
                    'type'					=> 'theme_mod',
                    'default'				=> '',
                    'sanitize_callback'		=> 'sanitize_text_field'
                )
            );

            $wp_customize->add_control(
                new WP_Customize_Image_Control( $wp_customize, 'set_about_me_image', array(
                    'label' => 'Upload About Me Image',
                    'priority' => 20,
                    'section' => 'sec_about_me',
                    'settings' => 'set_about_me_image',
                    'button_labels' => array(// All These labels are optional
                                'select' => 'Select About Me Image',
                                'remove' => 'Remove  About Me Image',
                                'change' => 'Change  About Me Image',
                                )
                ))
            );
// To Do

?>