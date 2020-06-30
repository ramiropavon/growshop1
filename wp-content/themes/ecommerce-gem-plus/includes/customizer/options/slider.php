<?php
/**
 * Slider Options.
 *
 * @package eCommerce_Gem
 */

// Add Slider Options Panel.
$wp_customize->add_panel( 'slider_option_panel',
	array(
		'title'      => esc_html__( 'Featured Slider Options', 'ecommerce-gem-plus' ),
		'priority'   => 100,
	)
);

// Slider Section.
$wp_customize->add_section( 'section_slider',
	array(
		'title'      => esc_html__( 'Slider On/Off', 'ecommerce-gem-plus' ),
		'panel'      => 'slider_option_panel',
	)
);

// Setting slider_status.
$wp_customize->add_setting( 'theme_options[slider_status]',
	array(
		'default'           => $default['slider_status'],
		'sanitize_callback' => 'ecommerce_gem_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[slider_status]',
	array(
		'label'    			=> esc_html__( 'Enable Slider', 'ecommerce-gem-plus' ),
		'section'  			=> 'section_slider',
		'type'     			=> 'checkbox',
		'priority' 			=> 100,
	)
);

// Slider Type 
$wp_customize->add_setting( 'theme_options[slider_type]', 
	array(
		'default'           => $default['slider_type'],			
		'sanitize_callback' => 'ecommerce_gem_sanitize_select'
	)
);

$wp_customize->add_control( 'theme_options[slider_type]', 
	array(
		'label'       => esc_html__('Slider Type', 'ecommerce-gem-plus'),
		'section'     => 'section_slider',   
		'type'        => 'radio',
		'priority' 	  => 100,
		'choices'     => array(
			'pages' 		=> esc_html__( 'Assign Pages', 'ecommerce-gem-plus' ),
			'shortcode' 	=> esc_html__( 'Using Shortcodes', 'ecommerce-gem-plus' ),
		),
		'active_callback' 	=> 'ecommerce_gem_is_featured_slider_active'
	)
);

$slider_number = 5;

for ( $i = 1; $i <= $slider_number; $i++ ) {

	//Slide Details
	$wp_customize->add_setting('theme_options[slide_'.$i.'_info]', 
		array(
			'sanitize_callback' => 'sanitize_text_field',            
		)
	);

	$wp_customize->add_control( 
		new eCommerce_Gem_Info( 
			$wp_customize, 
			'theme_options[slide_'.$i.'_info]', 
			array(
				'label' 			=> esc_html__( 'Slide ', 'ecommerce-gem-plus' ) . ' - ' . $i,
				'section' 			=> 'section_slider',
				'priority' 			=> 100,
				'active_callback' 	=> 'ecommerce_gem_is_featured_slider_type_pages',
			) 
		)
	);

	$wp_customize->add_setting( "theme_options[slider_page_$i]",
		array(
			'sanitize_callback' => 'ecommerce_gem_sanitize_dropdown_pages',
		)
	);
	$wp_customize->add_control( "theme_options[slider_page_$i]",
		array(
			'label'           => esc_html__( 'Select Page', 'ecommerce-gem-plus' ),
			'section'         => 'section_slider',
			'type'            => 'dropdown-pages',
			'active_callback' => 'ecommerce_gem_is_featured_slider_type_pages',
			'priority' 		  => 100,
		)
	);

	$wp_customize->add_setting( "theme_options[caption_position_$i]",
		array(
			'default'           => 'left',
			'sanitize_callback' => 'ecommerce_gem_sanitize_select',
		)
	);

	$wp_customize->add_control( "theme_options[caption_position_$i]",
		array(
			'label'           => esc_html__( 'Caption Position', 'ecommerce-gem-plus' ),
			'section'         => 'section_slider',
			'type'            => 'select',
			'choices'         => array(
				'left'     => esc_html__( 'Left', 'ecommerce-gem-plus' ),
				'right'    => esc_html__( 'Right', 'ecommerce-gem-plus' ),
				'center'   => esc_html__( 'Center', 'ecommerce-gem-plus' ),
			),
			'active_callback' => 'ecommerce_gem_is_featured_slider_type_pages',
			'priority' 		  => 100,
		)
	); 

	// Setting slider readmore text.
	$wp_customize->add_setting( "theme_options[button_text_$i]",
		array(
			'default'           => esc_html__( 'Shop Now', 'ecommerce-gem-plus' ),
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control( "theme_options[button_text_$i]",
		array(
			'label'    => esc_html__( 'Button Text', 'ecommerce-gem-plus' ),
			'section'  => 'section_slider',
			'type'     => 'text',
			'active_callback' => 'ecommerce_gem_is_featured_slider_type_pages',
			'priority' => 100,
		)
	);

	// Setting slider readmore link.
	$wp_customize->add_setting( "theme_options[button_link_$i]",
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control( "theme_options[button_link_$i]",
		array(
			'label'    => esc_html__( 'Button Link', 'ecommerce-gem-plus' ),
			'section'  => 'section_slider',
			'type'     => 'text',
			'active_callback' => 'ecommerce_gem_is_featured_slider_type_pages',
			'priority' => 100,
		)
	);

}

// Setting copyright_text.
$wp_customize->add_setting( 'theme_options[slider_shortcode]',
	array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control( 'theme_options[slider_shortcode]',
	array(
		'label'    			=> esc_html__( 'Slider Shortcode', 'ecommerce-gem-plus' ),
		'description'    	=> esc_html__( 'Shortcode of slider plugins like Slider Revolution, Layer Slider, Hero Slider, Meta Slider and other slider plugins is accepted.', 'ecommerce-gem-plus' ),
		'section'  			=> 'section_slider',
		'type'     			=> 'text',
		'active_callback' 	=> 'ecommerce_gem_is_featured_slider_type_shortcode',
		'priority' 			=> 100,
	)
);

// Slider Options Section.
$wp_customize->add_section( 'section_slider_options',
	array(
		'title'      => esc_html__( 'Slider Setting', 'ecommerce-gem-plus' ),
		'panel'      => 'slider_option_panel',
	)
);

// Setting slider_transition_effect.
$wp_customize->add_setting( 'theme_options[slider_transition_effect]',
	array(
		'default'           => $default['slider_transition_effect'],
		'sanitize_callback' => 'ecommerce_gem_sanitize_select',
	)
);
$wp_customize->add_control( 'theme_options[slider_transition_effect]',
	array(
		'label'           => esc_html__( 'Transition Effect', 'ecommerce-gem-plus' ),
		'section'         => 'section_slider_options',
		'type'            => 'select',
		'choices'         => array(
			'fade'       => esc_html__( 'Fade', 'ecommerce-gem-plus' ),
			'scrollHorz' => esc_html__( 'Scroll', 'ecommerce-gem-plus' ),
		),
	)
);

// Setting slider_transition_delay.
$wp_customize->add_setting( 'theme_options[slider_transition_delay]',
	array(
		'default'           => $default['slider_transition_delay'],
		'sanitize_callback' => 'ecommerce_gem_sanitize_positive_integer',
	)
);
$wp_customize->add_control( 'theme_options[slider_transition_delay]',
	array(
		'label'           => esc_html__( 'Transition Delay', 'ecommerce-gem-plus' ),
		'description'     => esc_html__( 'in seconds', 'ecommerce-gem-plus' ),
		'section'         => 'section_slider_options',
		'type'            => 'number',
		'input_attrs'     => array( 'min' => 1, 'max' => 5, 'step' => 1, 'style' => 'width: 60px;' ),
	)
);


// Setting slider_pager_status.
$wp_customize->add_setting( 'theme_options[slider_pager_status]',
	array(
		'default'           => $default['slider_pager_status'],
		'sanitize_callback' => 'ecommerce_gem_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[slider_pager_status]',
	array(
		'label'           => esc_html__( 'Show Pager', 'ecommerce-gem-plus' ),
		'section'         => 'section_slider_options',
		'type'            => 'checkbox',
	)
);

// Setting slider_autoplay_status.
$wp_customize->add_setting( 'theme_options[slider_autoplay_status]',
	array(
		'default'           => $default['slider_autoplay_status'],
		'sanitize_callback' => 'ecommerce_gem_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[slider_autoplay_status]',
	array(
		'label'           => esc_html__( 'Enable Autoplay', 'ecommerce-gem-plus' ),
		'section'         => 'section_slider_options',
		'type'            => 'checkbox',
	)
);