<?php
/**
 * About configuration
 *
 * @package eCommerce_Gem
 */

$config = array(
	'menu_name' => esc_html__( 'About eCommerce Gem', 'ecommerce-gem-plus' ),
	'page_name' => esc_html__( 'About eCommerce Gem', 'ecommerce-gem-plus' ),

	/* translators: theme version */
	'welcome_title' => sprintf( esc_html__( 'Welcome to %s - ', 'ecommerce-gem-plus' ), 'eCommerce Gem' ),

	/* translators: 1: theme name */
	'welcome_content' => sprintf( esc_html__( 'We hope this page will help you to setup %1$s with few clicks. We believe you will find it easy to use and perfect for your website development.', 'ecommerce-gem-plus' ), 'eCommerce Gem' ),

	// Quick links.
	'quick_links' => array(
		'theme_url' => array(
			'text' => esc_html__( 'Theme Details','ecommerce-gem-plus' ),
			'url'  => 'https://www.prodesigns.com/wordpress-themes/downloads/ecommerce-gem/',
			),
		'demo_url' => array(
			'text' => esc_html__( 'View Demo','ecommerce-gem-plus' ),
			'url'  => 'https://www.prodesigns.com/wordpress-themes/demo/ecommerce-gem/',
			),
		'documentation_url' => array(
			'text'   => esc_html__( 'View Documentation','ecommerce-gem-plus' ),
			'url'    => 'https://www.prodesigns.com/wordpress-themes/documentation/ecommerce-gem/',
			),
		'rate_url' => array(
			'text' => esc_html__( 'Rate This Theme','ecommerce-gem-plus' ),
			'url'  => 'https://wordpress.org/support/theme/ecommerce-gem/reviews/',
			),
		'pro_url' => array(
			'text' => esc_html__( 'Upgrade To Pro Theme','ecommerce-gem-plus' ),
			'url'  => 'https://www.prodesigns.com/wordpress-themes/downloads/ecommerce-gem-plus',
			'button' => 'primary',
			),
		),

	// Tabs.
	'tabs' => array(
		'getting_started'     => esc_html__( 'Getting Started', 'ecommerce-gem-plus' ),
		'recommended_actions' => esc_html__( 'Recommended Actions', 'ecommerce-gem-plus' ),
		'useful_plugins'      => esc_html__( 'Useful Plugins', 'ecommerce-gem-plus' ),
		'demo_content'        => esc_html__( 'Demo Content', 'ecommerce-gem-plus' ),
		'support'             => esc_html__( 'Support', 'ecommerce-gem-plus' ),
		'free_pro'            => esc_html__( 'FREE VS. PRO', 'ecommerce-gem-plus' ),
	),

	// Getting started.
	'getting_started' => array(
		array(
			'title'               => esc_html__( 'Theme Documentation', 'ecommerce-gem-plus' ),
			'text'                => esc_html__( 'Find step by step instructions with video documentation to setup theme easily.', 'ecommerce-gem-plus' ),
			'button_label'        => esc_html__( 'View documentation', 'ecommerce-gem-plus' ),
			'button_link'         => 'https://www.prodesigns.com/wordpress-themes/documentation/ecommerce-gem/',
			'is_button'           => false,
			'recommended_actions' => false,
			'is_new_tab'          => true,
		),
		array(
			'title'               => esc_html__( 'Recommended Actions', 'ecommerce-gem-plus' ),
			'text'                => esc_html__( 'We recommend few steps to take so that you can get complete site like shown in demo.', 'ecommerce-gem-plus' ),
			'button_label'        => esc_html__( 'Check recommended actions', 'ecommerce-gem-plus' ),
			'button_link'         => esc_url( admin_url( 'themes.php?page=ecommerce-gem-about&tab=recommended_actions' ) ),
			'is_button'           => false,
			'recommended_actions' => false,
			'is_new_tab'          => false,
		),
		array(
			'title'               => esc_html__( 'Customize Everything', 'ecommerce-gem-plus' ),
			'text'                => esc_html__( 'Start customizing every aspect of the website with customizer.', 'ecommerce-gem-plus' ),
			'button_label'        => esc_html__( 'Go to Customizer', 'ecommerce-gem-plus' ),
			'button_link'         => esc_url( wp_customize_url() ),
			'is_button'           => true,
			'recommended_actions' => false,
			'is_new_tab'          => false,
		),

		array(
			'title'        			=> esc_html__( 'Youtube Video Tutorials', 'ecommerce-gem-plus' ),
			'text'         			=> esc_html__( 'Please check our youtube channel for video instructions of eCommerce Gem setup and customization.', 'ecommerce-gem-plus' ),
			'button_label' 			=> esc_html__( 'Video Tutorials', 'ecommerce-gem-plus' ),
			'button_link'  			=> 'https://www.youtube.com/watch?v=YUBUosw64AA&list=PL-Ic437QwxQ8cW5jX4XC0or7vYzUhZX7s',
			'is_button'    			=> false,
			'recommended_actions' 	=> false,
			'is_new_tab'   			=> true,
		),

		array(
			'title'        			=> esc_html__( 'Pro Version', 'ecommerce-gem-plus' ),
			'text'         			=> esc_html__( 'Upgrade to pro version for additional features and options.', 'ecommerce-gem-plus' ),
			'button_label' 			=> esc_html__( 'View Pro Version', 'ecommerce-gem-plus' ),
			'button_link'  			=> 'https://www.prodesigns.com/wordpress-themes/downloads/ecommerce-gem-plus/',
			'is_button'    			=> true,
			'recommended_actions' 	=> false,
			'is_new_tab'   			=> true,
		),

		'first' => array(
			'title'        			=> esc_html__( 'Contact Support', 'ecommerce-gem-plus' ),
			'text'         			=> esc_html__( 'If you have any problem, feel free to create ticket on our dedicated Support forum.', 'ecommerce-gem-plus' ),
			'button_label' 			=> esc_html__( 'Contact Support', 'ecommerce-gem-plus' ),
			'button_link'  			=> esc_url( 'https://www.prodesigns.com/wordpress-themes/support/item/ecommerce-gem/' ),
			'is_button'    			=> false,
			'recommended_actions' 	=> false,
			'is_new_tab'   			=> true,
		),
	),

	// Recommended actions.
	'recommended_actions' => array(
		'content' => array(
			'woocommerce' => array(
				'title'       => esc_html__( 'WooCommerce', 'ecommerce-gem-plus' ),
				'description' => esc_html__( 'Please install WooCommerce plugin.', 'ecommerce-gem-plus' ),
				'check'       => class_exists( 'WooCommerce' ),
				'plugin_slug' => 'woocommerce',
				'id'          => 'woocommerce',
			),
			'woocommerce-pages' => array(
				'title'       => esc_html__( 'WooCommerce Pages', 'ecommerce-gem-plus' ),
				'description' => sprintf( esc_html__( 'Please make sure all WooCommerce pages are set properly. %1$s', 'ecommerce-gem-plus' ), '<a href="https://docs.woocommerce.com/document/woocommerce-pages/" target="_blank">' . esc_html__( 'Reference', 'ecommerce-gem-plus' ) . '</a>' ),
				'check'       => ecommerce_gem_woocommerce_pages_status(),
				'id'          => 'woocommerce-pages',
				'help'        => ecommerce_gem_woocommerce_pages_status_message(),
			),
			'front-page' => array(
				'title'       => esc_html__( 'Setting Static Front Page','ecommerce-gem-plus' ),
				'description' => esc_html__( 'Create a new page to display on front page ( Ex: Home ) and assign "Home" template. Select A static page then Front page and Posts page to display front page specific sections. Note: Static page will be set automatically when you import demo content.', 'ecommerce-gem-plus' ),
				'id'          => 'front-page',
				'check'       => ( 'page' === get_option( 'show_on_front' ) ) ? true : false,
				'help'        => '<a href="' . esc_url( wp_customize_url() ) . '?autofocus[section]=static_front_page" class="button button-secondary">' . esc_html__( 'Static Front Page', 'ecommerce-gem-plus' ) . '</a>',
			),

			'one-click-demo-import' => array(
				'title'       => esc_html__( 'One Click Demo Import', 'ecommerce-gem-plus' ),
				'description' => esc_html__( 'Please install the One Click Demo Import plugin to import the demo content. After activation go to Appearance >> Import Demo Data and import it.', 'ecommerce-gem-plus' ),
				'check'       => class_exists( 'OCDI_Plugin' ),
				'plugin_slug' => 'one-click-demo-import',
				'id'          => 'one-click-demo-import',
			),
		),
	),

	// Useful plugins.
	'useful_plugins' => array(
		'description'        => esc_html__( 'This theme supports some helpful WordPress plugins to enhance your website.', 'ecommerce-gem-plus' ),
		'plugins_list_title' => esc_html__( 'Useful Plugins List:', 'ecommerce-gem-plus' ),
	),

	// Demo content.
	'demo_content' => array(
		'description' => sprintf( esc_html__( 'Install %1$s plugin to import demo content. Demo data are bundled within the theme, Please make sure plugin is installed and activated. After plugin activation, go to Import Demo Data menu under Appearance and import it.', 'ecommerce-gem-plus' ), '<a href="https://wordpress.org/plugins/one-click-demo-import/" target="_blank">' . esc_html__( 'One Click Demo Import', 'ecommerce-gem-plus' ) . '</a>' ),
		),

	// Support.
	'support_content' => array(
		'first' => array(
			'title'        => esc_html__( 'Contact Support', 'ecommerce-gem-plus' ),
			'icon'         => 'dashicons dashicons-sos',
			'text'         => esc_html__( 'If you have any problem, feel free to create ticket on our dedicated Support forum.', 'ecommerce-gem-plus' ),
			'button_label' => esc_html__( 'Contact Support', 'ecommerce-gem-plus' ),
			'button_link'  => esc_url( 'https://www.prodesigns.com/wordpress-themes/support/item/ecommerce-gem/' ),
			'is_button'    => true,
			'is_new_tab'   => true,
		),
		'second' => array(
			'title'        => esc_html__( 'Theme Documentation', 'ecommerce-gem-plus' ),
			'icon'         => 'dashicons dashicons-book-alt',
			'text'         => esc_html__( 'Kindly check our theme documentation for detailed information and video instructions.', 'ecommerce-gem-plus' ),
			'button_label' => esc_html__( 'View Documentation', 'ecommerce-gem-plus' ),
			'button_link'  => 'https://www.prodesigns.com/wordpress-themes/documentation/ecommerce-gem/',
			'is_button'    => false,
			'is_new_tab'   => true,
		),
		'third' => array(
			'title'        => esc_html__( 'Pro Version', 'ecommerce-gem-plus' ),
			'icon'         => 'dashicons dashicons-products',
			'icon'         => 'dashicons dashicons-star-filled',
			'text'         => esc_html__( 'Upgrade to pro version for additional features and options.', 'ecommerce-gem-plus' ),
			'button_label' => esc_html__( 'View Pro Version', 'ecommerce-gem-plus' ),
			'button_link'  => 'https://www.prodesigns.com/wordpress-themes/downloads/ecommerce-gem-plus/',
			'is_button'    => true,
			'is_new_tab'   => true,
		),
		'fourth' => array(
			'title'        => esc_html__( 'Youtube Video Tutorials', 'ecommerce-gem-plus' ),
			'icon'         => 'dashicons dashicons-video-alt3',
			'text'         => esc_html__( 'Please check our youtube channel for video instructions of eCommerce Gem setup and customization.', 'ecommerce-gem-plus' ),
			'button_label' => esc_html__( 'Video Tutorials', 'ecommerce-gem-plus' ),
			'button_link'  => 'https://www.youtube.com/watch?v=YUBUosw64AA&list=PL-Ic437QwxQ8cW5jX4XC0or7vYzUhZX7s',
			'is_button'    => false,
			'is_new_tab'   => true,
		),
		'fifth' => array(
			'title'        => esc_html__( 'Customization Request', 'ecommerce-gem-plus' ),
			'icon'         => 'dashicons dashicons-admin-tools',
			'text'         => esc_html__( 'We have dedicated team members for theme customization. Feel free to contact us any time if you need any customization service.', 'ecommerce-gem-plus' ),
			'button_label' => esc_html__( 'Customization Request', 'ecommerce-gem-plus' ),
			'button_link'  => 'https://www.prodesigns.com/contact-us/',
			'is_button'    => false,
			'is_new_tab'   => true,
		),
		'sixth' => array(
			'title'        => esc_html__( 'Child Theme', 'ecommerce-gem-plus' ),
			'icon'         => 'dashicons dashicons-admin-customizer',
			'text'         => esc_html__( 'If you want to customize theme file, you should use child theme rather than modifying theme file itself.', 'ecommerce-gem-plus' ),
			'button_label' => esc_html__( 'About child theme', 'ecommerce-gem-plus' ),
			'button_link'  => 'https://developer.wordpress.org/themes/advanced-topics/child-themes/',
			'is_button'    => false,
			'is_new_tab'   => true,
		),
	),

    // Free vs pro array.
    'free_pro' => array(

	    array(
		    'title'     => esc_html__( 'WooCommerce Ready', 'ecommerce-gem-plus' ),
		    'desc'      => esc_html__( 'Theme supports/works with WooCommerce plugin', 'ecommerce-gem-plus' ),
		    'free'      => esc_html__('yes','ecommerce-gem-plus'),
		    'pro'       => esc_html__('yes','ecommerce-gem-plus'),
	    ),

	    array(
		    'title'     => esc_html__( 'Slider Support', 'ecommerce-gem-plus' ),
		    'desc'      => esc_html__( 'Supports Slider Revolution, Layer Slider, Hero Slider, etc.', 'ecommerce-gem-plus' ),
		    'free'      => esc_html__('no','ecommerce-gem-plus'),
		    'pro'       => esc_html__('yes','ecommerce-gem-plus'),
	    ),
	    array(
		    'title'     => esc_html__( 'Google Fonts', 'ecommerce-gem-plus' ),
		    'desc' 		=> esc_html__( 'Google fonts options for changing the overall site fonts', 'ecommerce-gem-plus' ),
		    'free'  	=> 'no',
		    'pro'   	=> esc_html__('100+','ecommerce-gem-plus'),
	    ),
	    array(
		    'title'     => esc_html__( 'Primary Color Option', 'ecommerce-gem-plus' ),
		    'desc'      => esc_html__( 'Option to change primary color of the site', 'ecommerce-gem-plus' ),
		    'free'      => esc_html__('yes','ecommerce-gem-plus'),
		    'pro'       => esc_html__('yes','ecommerce-gem-plus'),
	    ),
        array(
    	    'title'     => esc_html__( 'Advance Color Options', 'ecommerce-gem-plus' ),
    	    'desc'      => esc_html__( 'Options to change color of individual sections like top header, site title, menu, footer, etc of the site', 'ecommerce-gem-plus' ),
    	    'free'      => esc_html__('no','ecommerce-gem-plus'),
    	    'pro'       => esc_html__('yes','ecommerce-gem-plus'),
        ),
        array(
    	    'title'     => esc_html__( 'Latest Product Carousel', 'ecommerce-gem-plus' ),
    	    'desc'      => esc_html__( 'Widget to display latest products in carousel mode', 'ecommerce-gem-plus' ),
    	    'free'      => esc_html__('yes','ecommerce-gem-plus'),
    	    'pro'       => esc_html__('yes','ecommerce-gem-plus'),
        ),

        array(
    	    'title'     => esc_html__( 'Featured Product Carousel', 'ecommerce-gem-plus' ),
    	    'desc'      => esc_html__( 'Widget to display featured products in carousel mode', 'ecommerce-gem-plus' ),
    	    'free'      => esc_html__('yes','ecommerce-gem-plus'),
    	    'pro'       => esc_html__('yes','ecommerce-gem-plus'),
        ),
        array(
    	    'title'     => esc_html__( 'Hide Footer Credit', 'ecommerce-gem-plus' ),
    	    'desc'      => esc_html__( 'Option to enable/disable Powerby(Designer) credit in footer', 'ecommerce-gem-plus' ),
    	    'free'      => esc_html__('no','ecommerce-gem-plus'),
    	    'pro'       => esc_html__('yes','ecommerce-gem-plus'),
        ),
        array(
    	    'title'     => esc_html__( 'Override Footer Credit', 'ecommerce-gem-plus' ),
    	    'desc'      => esc_html__( 'Option to Override existing Powerby credit of footer', 'ecommerce-gem-plus' ),
    	    'free'      => esc_html__('no','ecommerce-gem-plus'),
    	    'pro'       => esc_html__('yes','ecommerce-gem-plus'),
        ),
	    array(
		    'title'     => esc_html__( 'SEO', 'ecommerce-gem-plus' ),
		    'desc' 		=> esc_html__( 'Developed with high skilled SEO tools.', 'ecommerce-gem-plus' ),
		    'free'  	=> 'yes',
		    'pro'   	=> 'yes',
	    ),
	    array(
		    'title'     => esc_html__( 'Support Forum', 'ecommerce-gem-plus' ),
		    'desc'      => esc_html__( 'Highly experienced and dedicated support team for your help plus online chat.', 'ecommerce-gem-plus' ),
		    'free'      => esc_html__('yes', 'ecommerce-gem-plus'),
		    'pro'       => esc_html__('High Priority', 'ecommerce-gem-plus'),
	    )

    ),

);
eCommerce_Gem_About::init( apply_filters( 'ecommerce_gem_about_filter', $config ) );
