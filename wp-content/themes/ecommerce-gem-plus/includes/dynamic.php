<?php
/**
 * Dynamic Options hook.
 *
 * This file contains option values from customizer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package eCommerce_Gem
 */

if ( ! function_exists( 'ecommerce_gem_dynamic_options' ) ) :

    function ecommerce_gem_dynamic_options(){

        global $ecommerce_gem_google_fonts;

        $body_font                  =  ecommerce_gem_get_option( 'body_font' );
        $identity_font              =  ecommerce_gem_get_option( 'site_identity_font' );
        $menu_font                  =  ecommerce_gem_get_option( 'menu_font' );
        $heading_font               =  ecommerce_gem_get_option( 'heading_font' );
        $paragraph_font             =  ecommerce_gem_get_option( 'paragraph_font' );

        $primary_color              =  ecommerce_gem_get_option( 'primary_color' );
        $site_title_color           =  ecommerce_gem_get_option( 'site_title_color' );
        $site_tagline_color         =  ecommerce_gem_get_option( 'site_tagline_color' ); 
        $top_header_bg              =  ecommerce_gem_get_option( 'top_header_bg' );
        $top_header_color           =  ecommerce_gem_get_option( 'top_header_color' );
        $top_header_divider_color   =  ecommerce_gem_get_option( 'top_header_divider_color' );
        $top_header_search_bg       =  ecommerce_gem_get_option( 'top_header_search_bg' );
        $main_menu_color            =  ecommerce_gem_get_option( 'main_menu_color' );
        $active_hover_color         =  ecommerce_gem_get_option( 'active_hover_color' );
        $mobile_menu_bg             =  ecommerce_gem_get_option( 'mobile_menu_bg' );
        $breadcrumb_bg              =  ecommerce_gem_get_option( 'breadcrumb_bg' );
        $breadcrumb_color           =  ecommerce_gem_get_option( 'breadcrumb_color' );
        $top_footer_bg              =  ecommerce_gem_get_option( 'top_footer_bg' );
        $top_footer_title_color     =  ecommerce_gem_get_option( 'top_footer_title_color' );
        $top_footer_text_color      =  ecommerce_gem_get_option( 'top_footer_text_color' );
        $top_footer_social_icon_bg  =  ecommerce_gem_get_option( 'top_footer_social_icon_bg' );
        $bottom_footer_bg           =  ecommerce_gem_get_option( 'bottom_footer_bg' );
        $bottom_footer_text         =  ecommerce_gem_get_option( 'bottom_footer_text' );
        $scroll_top_bg              =  ecommerce_gem_get_option( 'scroll_top_bg' );

        ?>               
            
        <style type="text/css">

            body{
                font-family: '<?php echo esc_attr( $ecommerce_gem_google_fonts[$body_font] ); ?>';
            }

            #masthead .site-title a{
                font-family: '<?php echo esc_attr( $ecommerce_gem_google_fonts[$identity_font] ); ?>';
                color: <?php echo esc_attr( $site_title_color ); ?>;
            }

            .main-navigation ul li a{
                font-family: '<?php echo esc_attr( $ecommerce_gem_google_fonts[$menu_font] ); ?>';
            }

            h1, h1 a,
            h2, h2 a,
            h3, h3 a,
            h4, h4 a,
            h5, h5 a,
            h6, h6 a,
            .entry-header h2.entry-title a{
                font-family: '<?php echo esc_attr( $ecommerce_gem_google_fonts[$heading_font] ); ?>';
            }

            p, ul li, ul li a, ol li, ol li a, 
            #footer-widgets ul li a, 
            .tagcloud a, 
            .top-info-left .recent-stories-holder span{
                font-family: '<?php echo esc_attr( $ecommerce_gem_google_fonts[$paragraph_font] ); ?>';
            }

            .site-description{
                color: <?php echo esc_attr( $site_tagline_color ); ?>;
            }

            .top-header{
                background: <?php echo esc_attr( $top_header_bg ); ?>;
            }

            .top-left span,
            .top-left span a,
            .top-left span i,
            .top-header .ecommerce_gem_widget_social ul li a::before,
            .top-account-wrapper a, 
            .top-header .top-cart-wrapper a, 
            .search-holder a,
            .top-account-wrapper a i,
            .top-header .top-cart-wrapper a i,
            .top-header .top-cart-wrapper .top-icon-wrap .cart-value,
            .top-menu-holder .menu li a{
                color: <?php echo esc_attr( $top_header_color ); ?>;
            }

            .top-left span,
            .top-header .top-account-wrapper, 
            .top-header .top-cart-wrapper, 
            .top-header .top-social-menu,
            .top-menu-holder .menu li a{
                border-right: 1px solid <?php echo esc_attr( $top_header_divider_color ); ?>;
            }

            .top-header .search-holder .search-btn{
                background: <?php echo esc_attr( $top_header_search_bg ); ?>;
            }

            .main-navigation ul li a,
            .main-navigation ul li.menu-item-has-children ul.sub-menu li a, 
            .home.page .header-collapse ul li a{
                color: <?php echo esc_attr( $main_menu_color ); ?>;
            }

            .main-navigation ul li.current-menu-item a, 
            .main-navigation ul li a:hover,
            .main-navigation ul li.menu-item-has-children ul.sub-menu li a:hover,
            .main-navigation ul li.menu-item-has-children ul.sub-menu li.current-menu-item a{
                color: <?php echo esc_attr( $active_hover_color ); ?>;
            }

            .mean-container a.meanmenu-reveal span,
            .mean-container .mean-nav ul li a{
                background: <?php echo esc_attr( $mobile_menu_bg ); ?>;
            }

            .mean-container a.meanmenu-reveal{
                color: <?php echo esc_attr( $mobile_menu_bg ); ?>;
            }

            #breadcrumb{
                background: <?php echo esc_attr( $breadcrumb_bg ); ?>;
            }

            #breadcrumb .breadcrumb-trail li,
            #breadcrumb .breadcrumbs ul li a,
            #breadcrumb .breadcrumbs ul li a:after{
                color: <?php echo esc_attr( $breadcrumb_color ); ?>;
            }

            #footer-widgets{
                background: <?php echo esc_attr( $top_footer_bg ); ?>;
            }

            #footer-widgets .widget .widget-title,
            #footer-widgets .ecommerce_gem_widget_features .feature-item .feature-text-wrap h2, 
            #footer-widgets .ecommerce_gem_widget_features .feature-item .feature-text-wrap h4{
                color: <?php echo esc_attr( $top_footer_title_color ); ?>;
            }

            #footer-widgets p,
            #footer-widgets .textwidget p,
            #footer-widgets .ecommerce_gem_widget_features .feature-item .feature-text-wrap p, 
            #footer-widgets .ecommerce_gem_widget_contact .contact-item .contact-text-wrap p,
            #footer-widgets .ecommerce_gem_widget_features .feature-item .feature-icon span, 
            #footer-widgets .ecommerce_gem_widget_contact .contact-item .contact-icon span,
            #footer-widgets li,
            #footer-widgets ul li a,
            #footer-widgets ul li:before,
            #footer-widgets .widget_popular_posts .news-item .news-text-wrap h2, 
            #footer-widgets .widget_popular_posts .news-item .news-text-wrap a,
            #footer-widgets .tagcloud a{
                color: <?php echo esc_attr( $top_footer_text_color ); ?>;
            }

            .ecommerce_gem_widget_social li a{
                background: <?php echo esc_attr( $top_footer_social_icon_bg ); ?>;
            }

            #colophon{
                background-color: <?php echo esc_attr( $bottom_footer_bg ); ?>;
            }

            #colophon .copyright, 
            #colophon .copyright span, 
            #colophon .copyright a, 
            #colophon .site-info, 
            #colophon .site-info a{
                color: <?php echo esc_attr( $bottom_footer_text ); ?>;
            }

            .scrollup:hover{
                background: <?php echo esc_attr( $scroll_top_bg ); ?>;
                border-color: <?php echo esc_attr( $scroll_top_bg ); ?>;
            }


            button, 
            .comment-reply-link, 
            a.button, input[type="button"], 
            input[type="reset"], 
            input[type="submit"],
            .main-slider .slider-caption .caption-wrap .button,
            .slick-dots li.slick-active button,
            .ecommerce_gem_widget_call_to_action .cta-widget:before,
            .blog-item .blog-text-wrap .date-header,
            #sidebar-primary .widget .widget-title:after, 
            #primary .page-header .page-title:after,
            .woocommerce nav.woocommerce-pagination ul li .page-numbers, 
            .pagination .nav-links .page-numbers,
            .nav-links .page-numbers.current, 
            .nav-links a.page-numbers:hover,
            .error-404.not-found form.search-form input[type="submit"], 
            .search-no-results form.search-form input[type="submit"],
            .error-404.not-found form.search-form input[type="submit"]:hover,
            .woocommerce span.onsale,
            .woocommerce .products-carousel-wrap .product span.onsale,
            li.product .product-thumb-wrap:before,
            #add_payment_method .wc-proceed-to-checkout a.checkout-button, 
            .woocommerce-cart .wc-proceed-to-checkout a.checkout-button, 
            .woocommerce-checkout .wc-proceed-to-checkout a.checkout-button, 
            .woocommerce .cart .button, 
            .woocommerce .cart input.button, 
            .call-to-action-wrap a.button.cta-button.cta-button-primary,
            .woocommerce #payment #place_order, 
            .woocommerce-page #payment #place_order, 
            .woocommerce #respond input#submit.alt, 
            .woocommerce a.button.alt, 
            .woocommerce button.button.alt, 
            .woocommerce input.button.alt, 
            .woocommerce #review_form #respond .form-submit input,
            .woocommerce .widget_price_filter .ui-slider .ui-slider-range,
            .woocommerce .widget_price_filter .ui-slider .ui-slider-handle{
                background: <?php echo esc_attr( $primary_color ); ?>;
            }

            .ecommerce_gem_widget_call_to_action .call-to-action-offer .call-to-action-offer-inner .offer-percent,
            .ecommerce_gem_widget_call_to_action .call-to-action-offer .call-to-action-offer-inner .offer-text,
            #primary .post .entry-title:hover a, 
            #primary .page .entry-title:hover a,
            .entry-meta > span::before, 
            .entry-footer > span::before, 
            .single-post-meta > span::before,
            .nav-links .nav-previous a:hover, 
            .nav-links .nav-next a:hover,
            .comment-navigation .nav-next a:hover:after, 
            .comment-navigation .nav-previous a:hover:before, 
            .nav-links .nav-previous a:hover:before, 
            .nav-links .nav-next a:hover:after,
            #commentform input[type="submit"]:hover,
            .comment-meta .comment-author a.url,
            .comment-meta .comment-metadata a,
            .comment .comment-body .comment-content a,
            .comments-area form#commentform p.logged-in-as a,
            .woocommerce nav.woocommerce-pagination ul li a:focus, 
            .woocommerce nav.woocommerce-pagination ul li a:hover, 
            .woocommerce nav.woocommerce-pagination ul li span.current, 
            .pagination .nav-links .page-numbers.current,
            .product .price, .woocommerce ul.products li.product .price,
            .product_meta .posted_in a,
            .product_meta .tagged_as a,
            .woocommerce-product-rating a.woocommerce-review-link,
            .woocommerce p.stars a::before,
            .woocommerce-message::before, 
            .woocommerce-info::before,
            .shop_table .product-name a,
            .woocommerce-info a.showcoupon{
                color: <?php echo esc_attr( $primary_color ); ?>;
            }

            #home-page-advertisement-area .advertisement-widget .advertisement-wrap .advertisement-buttons .button.advertisement-button:hover, 
            #home-page-widget-area .advertisement-widget .advertisement-wrap .advertisement-buttons .button.advertisement-button:hover,
            .woocommerce div.product .woocommerce-tabs ul.tabs li,
            #home-page-widget-area .ecommerce_gem_widget_call_to_action .cta-widget-default .call-to-action-button a.button{
                background: <?php echo esc_attr( $primary_color ); ?>;
                border-color: <?php echo esc_attr( $primary_color ); ?>;
            }

            #commentform input[type="submit"],
            .woocommerce nav.woocommerce-pagination ul li .page-numbers, 
            .pagination .nav-links .page-numbers,
            .nav-links .page-numbers.current, 
            .nav-links a.page-numbers:hover,
            #add_payment_method .wc-proceed-to-checkout a.checkout-button, 
            .woocommerce-cart .wc-proceed-to-checkout a.checkout-button, 
            .woocommerce-checkout .wc-proceed-to-checkout a.checkout-button, 
            .woocommerce .cart .button, 
            .woocommerce .cart input.button, 
            .woocommerce #payment #place_order, 
            .woocommerce-page #payment #place_order, 
            .woocommerce #respond input#submit.alt, 
            .woocommerce a.button.alt, 
            .woocommerce button.button.alt, 
            .woocommerce input.button.alt, 
            .woocommerce #review_form #respond .form-submit input,
            .main-slider .slider-caption .caption-wrap .button {
                border: 1px solid <?php echo esc_attr( $primary_color ); ?>;
            }

            .woocommerce div.product .woocommerce-tabs ul.tabs::before{
                border-bottom: 1px solid <?php echo esc_attr( $primary_color ); ?>;
            }

            .woocommerce-message, .woocommerce-info {
                border-top-color: <?php echo esc_attr( $primary_color ); ?>;
            }

        </style>

        <?php
    }

endif;

add_action( 'wp_head', 'ecommerce_gem_dynamic_options' );