<?php
/**
 * Google Fonts Options.
 *
 * @package eCommerce_Gem
 */

global $ecommerce_gem_google_fonts;

// Font setting starts.
$wp_customize->add_section( 'section_fonts',
	array(
		'title'      => esc_html__( 'Font Options', 'ecommerce-gem-plus' ),
		'panel'      => 'theme_option_panel',
	)
);

// Setting body_font.
$wp_customize->add_setting( 'theme_options[body_font]',
	array(
		'default'           => $default['body_font'],
		'sanitize_callback' => 'ecommerce_gem_sanitize_select',
	)
);
$wp_customize->add_control( 'theme_options[body_font]',
	array(
		'label'       => esc_html__( 'Body Font', 'ecommerce-gem-plus' ),
		'section'     => 'section_fonts',
		'type'        => 'select',
		'choices'     => $ecommerce_gem_google_fonts,
	)
);

// Setting site_identity_font.
$wp_customize->add_setting( 'theme_options[site_identity_font]',
	array(
		'default'           => $default['site_identity_font'],
		'sanitize_callback' => 'ecommerce_gem_sanitize_select',
	)
);
$wp_customize->add_control( 'theme_options[site_identity_font]',
	array(
		'label'       => esc_html__( 'Site Identity Font', 'ecommerce-gem-plus' ),
		'description' => esc_html__( 'Applied to site title', 'ecommerce-gem-plus' ),
		'section'     => 'section_fonts',
		'type'        => 'select',
		'choices'     => $ecommerce_gem_google_fonts,
	)
);

// Setting menu_font.
$wp_customize->add_setting( 'theme_options[menu_font]',
	array(
		'default'           => $default['menu_font'],
		'sanitize_callback' => 'ecommerce_gem_sanitize_select',
	)
);
$wp_customize->add_control( 'theme_options[menu_font]',
	array(
		'label'       => esc_html__( 'Menu Font', 'ecommerce-gem-plus' ),
		'section'     => 'section_fonts',
		'type'        => 'select',
		'choices'     => $ecommerce_gem_google_fonts,
	)
);

// Setting heading_font.
$wp_customize->add_setting( 'theme_options[heading_font]',
	array(
		'default'           => $default['heading_font'],
		'sanitize_callback' => 'ecommerce_gem_sanitize_select',
	)
);
$wp_customize->add_control( 'theme_options[heading_font]',
	array(
		'label'       => esc_html__( 'Headings Font', 'ecommerce-gem-plus' ),
		'description' => esc_html__( 'Applied to H1 - H6', 'ecommerce-gem-plus' ),
		'section'     => 'section_fonts',
		'type'        => 'select',
		'choices'     => $ecommerce_gem_google_fonts,
	)
);

// Setting paragraph_font.
$wp_customize->add_setting( 'theme_options[paragraph_font]',
	array(
		'default'           => $default['paragraph_font'],
		'sanitize_callback' => 'ecommerce_gem_sanitize_select',
	)
);
$wp_customize->add_control( 'theme_options[paragraph_font]',
	array(
		'label'       => esc_html__( 'Paragraph Font', 'ecommerce-gem-plus' ),
		'description' => esc_html__( 'Applied to p, span, ul, li and other tags', 'ecommerce-gem-plus' ),
		'section'     => 'section_fonts',
		'type'        => 'select',
		'choices'     => $ecommerce_gem_google_fonts,
	)
);

// reset_fonts
$wp_customize->add_setting( 'theme_options[reset_fonts]', 
	array(
		'default'           => $default['reset_fonts'],	
		'transport'         => 'postMessage',		
		'sanitize_callback' => 'ecommerce_gem_sanitize_checkbox',
	)
);

$wp_customize->add_control( 'theme_options[reset_fonts]',
	array(
		'label'    => esc_html__( 'Reset Fonts', 'ecommerce-gem-plus' ),
		'description' =>  esc_html__( 'This will replace all fonts with default font of the theme. Please reload page to see changes.', 'ecommerce-gem-plus' ),
		'section'  => 'section_fonts',
		'type'     => 'checkbox',
	)
);