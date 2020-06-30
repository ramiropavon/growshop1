<?php
/**
 * Custom widgets.
 *
 * @package eCommerce_Gem
 */

if ( ! class_exists( 'eCommerce_Gem_Callout_Widget' ) ) :

	/**
	 * Callout widget class.
	 *
	 * @since 1.0.0
	 */
	class eCommerce_Gem_Callout_Widget extends WP_Widget {

		/**
		 * Constructor.
		 *
		 * @since 1.0.0
		 */
		function __construct() {
			$opts = array(
				'classname'   => 'ecommerce_gem_widget_callout ecommerce_gem_widget_call_to_action',
				'description' => esc_html__( 'Callout widget to display important information with button and parallax background.', 'ecommerce-gem-plus' ),
			);
			parent::__construct( 'ecommerce-gem-callout', esc_html__( 'eC-Gem: Callout', 'ecommerce-gem-plus' ), $opts );
		}

		/**
		 * Echo the widget content.
		 *
		 * @since 1.0.0
		 *
		 * @param array $args     Display arguments including before_title, after_title,
		 *                        before_widget, and after_widget.
		 * @param array $instance The settings for the particular instance of the widget.
		 */
		function widget( $args, $instance ) {

			$title    		= apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );

			$callout_page   = !empty( $instance['callout_page'] ) ? $instance['callout_page'] : '';

			$button_text 	= ! empty( $instance['button_text'] ) ? esc_html( $instance['button_text'] ) : '';

			$button_url  	= ! empty( $instance['button_url'] ) ? esc_url( $instance['button_url'] ) : '';

			// Add background image.
			$bg_pic = get_the_post_thumbnail_url( $callout_page, 'full' );

			if ( ! empty( $bg_pic ) ) {
				$background_style = '';
				$background_style .= ' style="background-image:url(' . esc_url( $bg_pic ) . ');" ';
				$args['before_widget'] = implode( $background_style . ' ' . 'class="bg_enabled ', explode( 'class="', $args['before_widget'], 2 ) );
			}else{

				$args['before_widget'] = implode( 'class="bg_disabled ', explode( 'class="', $args['before_widget'], 2 ) );

			}

			echo $args['before_widget']; ?>

			<div class="callout-content-holder cta-widget-default callout-widget-gem">

				<?php

				if ( ! empty( $title ) ) {
					echo $args['before_title'] . esc_html( $title ) . $args['after_title'];
				}  

				if ( $callout_page ) { 

					$callout_args = array(
									'posts_per_page' => 1,
									'page_id'	     => absint( $callout_page ),
									'post_type'      => 'page',
									'post_status'  	 => 'publish',
								);

					$callout_query = new WP_Query( $callout_args );	

					if( $callout_query->have_posts()){

						while( $callout_query->have_posts()){

							$callout_query->the_post(); ?>

							<div class="call-to-action-content">
								<?php the_content(); ?>
							</div>

							<?php

						}

						wp_reset_postdata();

					} ?>
					
				<?php } ?>

				<div class="call-to-action-button">

					<?php if ( ! empty( $button_text ) ) : ?>
						<a href="<?php echo esc_url( $button_url ); ?>" class="button cta-button cta-button-primary"><?php echo esc_html( $button_text ); ?></a>
					<?php endif; ?>

				</div><!-- .call-to-action-button -->

			</div><!-- .cta-widget -->

			<?php
			echo $args['after_widget'];

		}

		/**
		 * Update widget instance.
		 *
		 * @since 1.0.0
		 *
		 * @param array $new_instance New settings for this instance as input by the user via
		 *                            {@see WP_Widget::form()}.
		 * @param array $old_instance Old settings for this instance.
		 * @return array Settings to save or bool false to cancel saving.
		 */
		function update( $new_instance, $old_instance ) {

			$instance = $old_instance;

			$instance['title'] 			= sanitize_text_field( $new_instance['title'] );

			$instance['callout_page'] 	= absint( $new_instance['callout_page'] );

			$instance['button_text'] 	= sanitize_text_field( $new_instance['button_text'] );

			$instance['button_url'] 	= esc_url_raw( $new_instance['button_url'] );

			return $instance;
		}

		/**
		 * Output the settings update form.
		 *
		 * @since 1.0.0
		 *
		 * @param array $instance Current settings.
		 */
		function form( $instance ) {

			$instance = wp_parse_args( (array) $instance, array(
				'title'      	=> '',
				'callout_page'  => '',
				'button_text' 	=> esc_html__( 'Shop Now', 'ecommerce-gem-plus' ),
				'button_url'  	=> '',
			) );
			?>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><strong><?php esc_html_e( 'Title:', 'ecommerce-gem-plus' ); ?></strong></label>
				<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['title'] ); ?>" />
			</p>
			<p>
				<label for="<?php echo $this->get_field_id( 'callout_page' ); ?>">
					<strong><?php esc_html_e( 'Callout Page:', 'ecommerce-gem-plus' ); ?></strong>
				</label>
				<?php
				wp_dropdown_pages( array(
					'id'               => $this->get_field_id( 'callout_page' ),
					'class'            => 'widefat',
					'name'             => $this->get_field_name( 'callout_page' ),
					'selected'         => $instance[ 'callout_page' ],
					'show_option_none' => esc_html__( '&mdash; Select &mdash;', 'ecommerce-gem-plus' ),
					)
				);
				?>
				<small>
		        	<?php esc_html_e('Content of this page will be used as content of callout section and featured image will be used as parallax background.', 'ecommerce-gem-plus'); ?>	
		        </small>
			</p>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'button_text' ) ); ?>"><strong><?php esc_html_e( 'Button Text:', 'ecommerce-gem-plus' ); ?></strong></label>
				<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'button_text' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'button_text' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['button_text'] ); ?>" />
			</p>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'button_url' ) ); ?>"><strong><?php esc_html_e( 'Button URL:', 'ecommerce-gem-plus' ); ?></strong></label>
				<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'button_url' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'button_url' ) ); ?>" type="text" value="<?php echo esc_url( $instance['button_url'] ); ?>" />
			</p>
		<?php
		} 
	
	}

endif;