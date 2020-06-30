<?php
/**
 * Advance Color Options.
 *
 * @package eCommerce_Gem
 */

//Color Setting Starts
// Add Color Options Panel.
$wp_customize->add_panel( 'color_option_panel',
	array(
		'title'      => esc_html__( 'Advance Color Options', 'ecommerce-gem-plus' ),
		'priority'   => 90,
	)
);

// Primary Color Section.
$wp_customize->add_section( 'section_primary_color',
	array(
		'title'      => esc_html__( 'General Colors', 'ecommerce-gem-plus' ),
		'panel'      => 'color_option_panel',
	)
);

// Setting site primary color.
$wp_customize->add_setting( 'theme_options[primary_color]',
	array(
		'default'           => $default['primary_color'],
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'theme_options[primary_color]',
		array(
			'label'       => esc_html__( 'Primary Color', 'ecommerce-gem-plus' ),
			'description' => esc_html__( 'Applied to main color of site.', 'ecommerce-gem-plus' ),
			'section'     => 'section_primary_color',	
		)
	)
);

// Setting site title color.
$wp_customize->add_setting( 'theme_options[site_title_color]',
	array(
		'default'           => $default['site_title_color'],
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'theme_options[site_title_color]',
		array(
			'label'       => esc_html__( 'Site Title Color', 'ecommerce-gem-plus' ),
			'section'     => 'section_primary_color',	
		)
	)
);

// Setting site tagline color.
$wp_customize->add_setting( 'theme_options[site_tagline_color]',
	array(
		'default'           => $default['site_tagline_color'],
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'theme_options[site_tagline_color]',
		array(
			'label'       => esc_html__( 'Site Tagline Color', 'ecommerce-gem-plus' ),
			'section'     => 'section_primary_color',	
		)
	)
);

// Top Header Section.
$wp_customize->add_section( 'section_top_header_color',
	array(
		'title'      => esc_html__( 'Top Header', 'ecommerce-gem-plus' ),
		'panel'      => 'color_option_panel',
	)
);

// Setting top header background.
$wp_customize->add_setting( 'theme_options[top_header_bg]',
	array(
		'default'           => $default['top_header_bg'],
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'theme_options[top_header_bg]',
		array(
			'label'       => esc_html__( 'Top Header Background', 'ecommerce-gem-plus' ),
			'description' => esc_html__( 'Applied to background color of top header.', 'ecommerce-gem-plus' ),
			'section'     => 'section_top_header_color',	
		)
	)
);

// Setting top header color.
$wp_customize->add_setting( 'theme_options[top_header_color]',
	array(
		'default'           => $default['top_header_color'],
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'theme_options[top_header_color]',
		array(
			'label'       => esc_html__( 'Top Header Color', 'ecommerce-gem-plus' ),
			'description' => esc_html__( 'Applied to color of text and links on top header.', 'ecommerce-gem-plus' ),
			'section'     => 'section_top_header_color',	
		)
	)
);

// Setting top header verticle divider color.
$wp_customize->add_setting( 'theme_options[top_header_divider_color]',
	array(
		'default'           => $default['top_header_divider_color'],
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'theme_options[top_header_divider_color]',
		array(
			'label'       => esc_html__( 'Divider Color', 'ecommerce-gem-plus' ),
			'description' => esc_html__( 'Applied to color of the verticle divider of information and social icons used in top header.', 'ecommerce-gem-plus' ),
			'section'     => 'section_top_header_color',	
		)
	)
);

// Setting top header search background.
$wp_customize->add_setting( 'theme_options[top_header_search_bg]',
	array(
		'default'           => $default['top_header_search_bg'],
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'theme_options[top_header_search_bg]',
		array(
			'label'       => esc_html__( 'Search Icon Background', 'ecommerce-gem-plus' ),
			'description' => esc_html__( 'Applied to background of search icon used in top header.', 'ecommerce-gem-plus' ),
			'section'     => 'section_top_header_color',	
		)
	)
);

// Main Nav Section.
$wp_customize->add_section( 'section_main_nav_color',
	array(
		'title'      => esc_html__( 'Main Navigation', 'ecommerce-gem-plus' ),
		'panel'      => 'color_option_panel',
	)
);

// Setting main menu color
$wp_customize->add_setting( 'theme_options[main_menu_color]',
	array(
		'default'           => $default['main_menu_color'],
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'theme_options[main_menu_color]',
		array(
			'label'       => esc_html__( 'Main Menu Text Color', 'ecommerce-gem-plus' ),
			'description' => esc_html__( 'Applied to text color of main menu items', 'ecommerce-gem-plus' ),
			'section'     => 'section_main_nav_color',	
		)
	)
);

// Setting active menu and hover color
$wp_customize->add_setting( 'theme_options[active_hover_color]',
	array(
		'default'           => $default['active_hover_color'],
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'theme_options[active_hover_color]',
		array(
			'label'       => esc_html__( 'Active Menu + Hover Color', 'ecommerce-gem-plus' ),
			'description' => esc_html__( 'Applied to text color of active menu item and mouse hover color of all menu items', 'ecommerce-gem-plus' ),
			'section'     => 'section_main_nav_color',	
		)
	)
);

// Setting mobile menu background
$wp_customize->add_setting( 'theme_options[mobile_menu_bg]',
	array(
		'default'           => $default['mobile_menu_bg'],
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'theme_options[mobile_menu_bg]',
		array(
			'label'       => esc_html__( 'Mobile Menu Background', 'ecommerce-gem-plus' ),
			'description' => esc_html__( 'Applied to background of mobile menu', 'ecommerce-gem-plus' ),
			'section'     => 'section_main_nav_color',	
		)
	)
);

// Breadcrumb Section.
$wp_customize->add_section( 'section_breadcrumb_color',
	array(
		'title'      => esc_html__( 'Breadcrumb', 'ecommerce-gem-plus' ),
		'panel'      => 'color_option_panel',
	)
);

// Setting breadcrumb background.
$wp_customize->add_setting( 'theme_options[breadcrumb_bg]',
	array(
		'default'           => $default['breadcrumb_bg'],
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'theme_options[breadcrumb_bg]',
		array(
			'label'       => esc_html__( 'Breadcrumb Background', 'ecommerce-gem-plus' ),
			'description' => esc_html__( 'Applied to background of breadcrumb', 'ecommerce-gem-plus' ),
			'section'     => 'section_breadcrumb_color',	
		)
	)
);

// Setting breadcrumb text color.
$wp_customize->add_setting( 'theme_options[breadcrumb_color]',
	array(
		'default'           => $default['breadcrumb_color'],
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'theme_options[breadcrumb_color]',
		array(
			'label'       => esc_html__( 'Text Color', 'ecommerce-gem-plus' ),
			'description' => esc_html__( 'Applied to color of texts used in breadcrumb', 'ecommerce-gem-plus' ),
			'section'     => 'section_breadcrumb_color',	
		)
	)
);

// Top Footer Section.
$wp_customize->add_section( 'section_top_footer_color',
	array(
		'title'      => esc_html__( 'Top Footer', 'ecommerce-gem-plus' ),
		'panel'      => 'color_option_panel',
	)
);

// Setting top footer background.
$wp_customize->add_setting( 'theme_options[top_footer_bg]',
	array(
		'default'           => $default['top_footer_bg'],
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'theme_options[top_footer_bg]',
		array(
			'label'       => esc_html__( 'Top Footer Background', 'ecommerce-gem-plus' ),
			'description' => esc_html__( 'Applied to background of top footer section', 'ecommerce-gem-plus' ),
			'section'     => 'section_top_footer_color',	
		)
	)
);

// Setting top footer title color.
$wp_customize->add_setting( 'theme_options[top_footer_title_color]',
	array(
		'default'           => $default['top_footer_title_color'],
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'theme_options[top_footer_title_color]',
		array(
			'label'       => esc_html__( 'Title Color', 'ecommerce-gem-plus' ),
			'description' => esc_html__( 'Applied to color of widget title used in top footer', 'ecommerce-gem-plus' ),
			'section'     => 'section_top_footer_color',	
		)
	)
);

// Setting top footer text and link color.
$wp_customize->add_setting( 'theme_options[top_footer_text_color]',
	array(
		'default'           => $default['top_footer_text_color'],
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'theme_options[top_footer_text_color]',
		array(
			'label'       => esc_html__( 'Text/Link Color', 'ecommerce-gem-plus' ),
			'description' => esc_html__( 'Applied to color of text, links and other elements used in top footer section', 'ecommerce-gem-plus' ),
			'section'     => 'section_top_footer_color',	
		)
	)
);

// Setting top footer social icons background.
$wp_customize->add_setting( 'theme_options[top_footer_social_icon_bg]',
	array(
		'default'           => $default['top_footer_social_icon_bg'],
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'theme_options[top_footer_social_icon_bg]',
		array(
			'label'       => esc_html__( 'Social Icons Background', 'ecommerce-gem-plus' ),
			'description' => esc_html__( 'Applied to background of social icons used in top footer section', 'ecommerce-gem-plus' ),
			'section'     => 'section_top_footer_color',	
		)
	)
);

// Bottom Footer Section.
$wp_customize->add_section( 'section_bottom_footer_color',
	array(
		'title'      => esc_html__( 'Bottom Footer', 'ecommerce-gem-plus' ),
		'panel'      => 'color_option_panel',
	)
);

// Setting bottom footer background.
$wp_customize->add_setting( 'theme_options[bottom_footer_bg]',
	array(
		'default'           => $default['bottom_footer_bg'],
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'theme_options[bottom_footer_bg]',
		array(
			'label'       => esc_html__( 'Bottom Footer Background', 'ecommerce-gem-plus' ),
			'description' => esc_html__( 'Applied to background of bottom footer section/copyright area', 'ecommerce-gem-plus' ),
			'section'     => 'section_bottom_footer_color',	
		)
	)
);

// Setting bottom footer text color.
$wp_customize->add_setting( 'theme_options[bottom_footer_text]',
	array(
		'default'           => $default['bottom_footer_text'],
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'theme_options[bottom_footer_text]',
		array(
			'label'       => esc_html__( 'Bottom Footer Text', 'ecommerce-gem-plus' ),
			'description' => esc_html__( 'Applied to color of text used in bottom footer section', 'ecommerce-gem-plus' ),
			'section'     => 'section_bottom_footer_color',	
		)
	)
);

// Go to top Section.
$wp_customize->add_section( 'section_scroll_top_color',
	array(
		'title'      => esc_html__( 'Scroll/Go To Top', 'ecommerce-gem-plus' ),
		'panel'      => 'color_option_panel',
	)
);

// Setting go to top background.
$wp_customize->add_setting( 'theme_options[scroll_top_bg]',
	array(
		'default'           => $default['scroll_top_bg'],
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'theme_options[scroll_top_bg]',
		array(
			'label'       => esc_html__( 'Scroll/Go To Top Background', 'ecommerce-gem-plus' ),
			'description' => esc_html__( 'Applied to background of scroll/go to top button', 'ecommerce-gem-plus' ),
			'section'     => 'section_scroll_top_color',	
		)
	)
);

// Reset Color Section.
$wp_customize->add_section( 'section_reset_color',
	array(
		'title'      => esc_html__( 'Reset Colors', 'ecommerce-gem-plus' ),
		'panel'      => 'color_option_panel',
	)
);

// reset_colors
$wp_customize->add_setting( 'theme_options[reset_colors]', 
	array(
		'default'           => $default['reset_colors'],	
		'transport'         => 'postMessage',		
		'sanitize_callback' => 'ecommerce_gem_sanitize_checkbox',
	)
);

$wp_customize->add_control( 'theme_options[reset_colors]',
	array(
		'label'       => esc_html__( 'Reset Colors', 'ecommerce-gem-plus' ),
		'description' =>  esc_html__( 'This will replace all colors with default color of the theme. Please reload page to see changes.', 'ecommerce-gem-plus' ),
		'section'     => 'section_reset_color',
		'type'        => 'checkbox',
	)
);