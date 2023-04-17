<?php

if ( class_exists("Kirki")){

	// LOGO

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'fitness_coaching_logo_resizer',
		'label'       => esc_html__( 'Adjust Your Logo Size ', 'fitness-coaching' ),
		'section'     => 'title_tagline',
		'default'     => 70,
		'choices'     => [
			'min'  => 10,
			'max'  => 300,
			'step' => 10,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_coaching_enable_logo_text',
		'section'     => 'title_tagline',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'fitness-coaching' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fitness_coaching_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'fitness-coaching' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fitness-coaching' ),
			'off' => esc_html__( 'Disable', 'fitness-coaching' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fitness_coaching_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'fitness-coaching' ),
		'section'     => 'title_tagline',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fitness-coaching' ),
			'off' => esc_html__( 'Disable', 'fitness-coaching' ),
		],
	] );

	// FONT STYLE TYPOGRAPHY

	Kirki::add_panel( 'fitness_coaching_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Typography', 'fitness-coaching' ),
	) );

	Kirki::add_section( 'fitness_coaching_font_style_section', array(
		'title'      => esc_attr__( 'Typography Option',  'fitness-coaching' ),
		'priority'   => 2,
		'capability' => 'edit_theme_options',
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_coaching_all_headings_typography',
		'section'     => 'fitness_coaching_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading Of All Sections',  'fitness-coaching' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'fitness_coaching_all_headings_typography',
		'label'       => esc_attr__( 'Heading Typography',  'fitness-coaching' ),
		'description' => esc_attr__( 'Select the typography options for your heading.',  'fitness-coaching' ),
		'section'     => 'fitness_coaching_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'h1','h2','h3','h4','h5','h6', ),
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_coaching_body_content_typography',
		'section'     => 'fitness_coaching_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Body Content',  'fitness-coaching' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'fitness_coaching_body_content_typography',
		'label'       => esc_attr__( 'Content Typography',  'fitness-coaching' ),
		'description' => esc_attr__( 'Select the typography options for your content.',  'fitness-coaching' ),
		'section'     => 'fitness_coaching_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'body', ),
			),
		),
	) );

	// PANEL

	Kirki::add_panel( 'fitness_coaching_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Options', 'fitness-coaching' ),
	) );

	// Additional Settings

	Kirki::add_section( 'fitness_coaching_additional_settings', array(
	    'title'          => esc_html__( 'Additional Settings', 'fitness-coaching' ),
	    'description'    => esc_html__( 'Scroll To Top', 'fitness-coaching' ),
	    'panel'          => 'fitness_coaching_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'fitness_coaching_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'fitness-coaching' ),
		'section'     => 'fitness_coaching_additional_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'menu_text_transform_fitness_coaching',
		'label'       => esc_html__( 'Menus Text Transform', 'fitness-coaching' ),
		'section'     => 'fitness_coaching_additional_settings',
		'default'     => 'UPPERCASE',
		'placeholder' => esc_html__( 'Choose an option', 'fitness-coaching' ),
		'choices'     => [
			'CAPITALISE' => esc_html__( 'CAPITALISE', 'fitness-coaching' ),
			'UPPERCASE' => esc_html__( 'UPPERCASE', 'fitness-coaching' ),
			'LOWERCASE' => esc_html__( 'LOWERCASE', 'fitness-coaching' ),

		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'fitness_coaching_container_width',
		'label'       => esc_html__( 'Theme Container Width', 'fitness-coaching' ),
		'section'     => 'fitness_coaching_additional_settings',
		'default'     => 100,
		'choices'     => [
			'min'  => 50,
			'max'  => 100,
			'step' => 1,
		],
	] );

	// Woocommerce Settings

	Kirki::add_section( 'fitness_coaching_woocommerce_settings', array(
			'title'          => esc_html__( 'Woocommerce Settings', 'fitness-coaching' ),
			'description'    => esc_html__( 'Shop Page', 'fitness-coaching' ),
			'panel'          => 'fitness_coaching_panel_id',
			'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'fitness_coaching_shop_sidebar',
		'label'       => esc_html__( 'Here you can enable or disable shop page sidebar.', 'fitness-coaching' ),
		'section'     => 'fitness_coaching_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'fitness_coaching_product_sidebar',
		'label'       => esc_html__( 'Here you can enable or disable product page sidebar.', 'fitness-coaching' ),
		'section'     => 'fitness_coaching_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	// Color

	Kirki::add_section( 'fitness_coaching_section_color', array(
	    'title'          => esc_html__( 'Global Color', 'fitness-coaching' ),
	    'description'    => esc_html__( 'Theme Color Settings', 'fitness-coaching' ),
	    'panel'          => 'fitness_coaching_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_coaching_global_colors',
		'section'     => 'fitness_coaching_section_color',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Here you can change your theme color on one click.', 'fitness-coaching' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'fitness_coaching_global_color',
		'label'       => __( 'Choose Your First Color', 'fitness-coaching' ),
		'section'     => 'fitness_coaching_section_color',
		'default'     => '#48daff',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'fitness_coaching_global_color_2',
		'label'       => __( 'Choose Your Second Color', 'fitness-coaching' ),
		'section'     => 'fitness_coaching_section_color',
		'default'     => '#ffb750',
	] );

	// POST SECTION

	Kirki::add_section( 'fitness_coaching_section_post', array(
	    'title'          => esc_html__( 'Post Settings', 'fitness-coaching' ),
	    'description'    => esc_html__( 'Here you can get different post settings', 'fitness-coaching' ),
	    'panel'          => 'fitness_coaching_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_coaching_enable_post_heading',
		'section'     => 'fitness_coaching_section_post',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Post Settings.', 'fitness-coaching' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fitness_coaching_blog_admin_enable',
		'label'       => esc_html__( 'Post Author Enable / Disable Button', 'fitness-coaching' ),
		'section'     => 'fitness_coaching_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fitness-coaching' ),
			'off' => esc_html__( 'Disable', 'fitness-coaching' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fitness_coaching_blog_comment_enable',
		'label'       => esc_html__( 'Post Comment Enable / Disable Button', 'fitness-coaching' ),
		'section'     => 'fitness_coaching_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fitness-coaching' ),
			'off' => esc_html__( 'Disable', 'fitness-coaching' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fitness_coaching_blog_admin_enable',
		'label'       => esc_html__( 'Post Author Enable / Disable Button', 'fitness-coaching' ),
		'section'     => 'fitness_coaching_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fitness-coaching' ),
			'off' => esc_html__( 'Disable', 'fitness-coaching' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_coaching_enable_post_main_heading',
		'section'     => 'fitness_coaching_section_post',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Number Of Text.', 'fitness-coaching' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'fitness_coaching_post_excerpt_number',
		'label'       => esc_html__( 'Post Content Range', 'fitness-coaching' ),
		'section'     => 'fitness_coaching_section_post',
		'default'     => 15,
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
	] );

	// HEADER SECTION

	Kirki::add_section( 'fitness_coaching_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'fitness-coaching' ),
	    'panel'          => 'fitness_coaching_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_coaching_phone_number_heading_2',
		'section'     => 'fitness_coaching_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Choose Your Icon Here', 'fitness-coaching' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'dashicons',
		'settings' => 'fitness_coaching_dashicons_setting_1',
		'label'    => esc_html__( 'Select Appropriate Icon', 'fitness-coaching' ),
		'section'  => 'fitness_coaching_section_header',
		'default'  => 'dashicons dashicons-phone',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_coaching_phone_number_heading',
		'section'     => 'fitness_coaching_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Phone Number', 'fitness-coaching' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fitness_coaching_header_phone_number',
		'section'  => 'fitness_coaching_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_coaching_phone_number_heading_2',
		'section'     => 'fitness_coaching_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Choose Your Icon Here', 'fitness-coaching' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'dashicons',
		'settings' => 'fitness_coaching_dashicons_setting_2',
		'label'    => esc_html__( 'Select Appropriate Icon', 'fitness-coaching' ),
		'section'  => 'fitness_coaching_section_header',
		'default'  => 'dashicons dashicons-email',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_coaching_email_address_heading',
		'section'     => 'fitness_coaching_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Email Address', 'fitness-coaching' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fitness_coaching_header_email_address',
		'section'  => 'fitness_coaching_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_coaching_enable_search',
		'section'     => 'fitness_coaching_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Search Box', 'fitness-coaching' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fitness_coaching_search_box_enable',
		'label'       => esc_html__( 'Search Enable / Disable Button', 'fitness-coaching' ),
		'section'     => 'fitness_coaching_section_header',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fitness-coaching' ),
			'off' => esc_html__( 'Disable', 'fitness-coaching' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_coaching_enable_cart',
		'section'     => 'fitness_coaching_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Cart', 'fitness-coaching' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fitness_coaching_cart_box_enable',
		'label'       => esc_html__( 'Cart Enable / Disable Button', 'fitness-coaching' ),
		'section'     => 'fitness_coaching_section_header',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fitness-coaching' ),
			'off' => esc_html__( 'Disable', 'fitness-coaching' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_coaching_enable_account',
		'section'     => 'fitness_coaching_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable My Account', 'fitness-coaching' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fitness_coaching_account_box_enable',
		'label'       => esc_html__( 'My Account Enable / Disable Button', 'fitness-coaching' ),
		'section'     => 'fitness_coaching_section_header',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fitness-coaching' ),
			'off' => esc_html__( 'Disable', 'fitness-coaching' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_coaching_enable_socail_link',
		'section'     => 'fitness_coaching_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'fitness-coaching' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'section'     => 'fitness_coaching_section_header',
		'priority'    => 10,
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Icon', 'fitness-coaching' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'fitness-coaching' ),
		'settings'     => 'fitness_coaching_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'fitness-coaching' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'fitness-coaching' ),
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'fitness-coaching' ),
				'description' => esc_html__( 'Add the social icon url here.', 'fitness-coaching' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 5
		],
	] );

	// SLIDER SECTION

	Kirki::add_section( 'fitness_coaching_blog_slide_section', array(
        'title'          => esc_html__( ' Slider Settings', 'fitness-coaching' ),
        'description'    => esc_html__( 'You have to select post category to show slider.', 'fitness-coaching' ),
        'panel'          => 'fitness_coaching_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_coaching_enable_heading',
		'section'     => 'fitness_coaching_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Slider', 'fitness-coaching' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fitness_coaching_blog_box_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'fitness-coaching' ),
		'section'     => 'fitness_coaching_blog_slide_section',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fitness-coaching' ),
			'off' => esc_html__( 'Disable', 'fitness-coaching' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fitness_coaching_slide_second_title_enable_disable',
		'label'       => esc_html__( 'Slide Title Enable / Disable', 'fitness-coaching' ),
		'section'     => 'fitness_coaching_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fitness-coaching' ),
			'off' => esc_html__( 'Disable', 'fitness-coaching' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fitness_coaching_slide_text_enable_disable',
		'label'       => esc_html__( 'Slide Text Enable / Disable', 'fitness-coaching' ),
		'section'     => 'fitness_coaching_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fitness-coaching' ),
			'off' => esc_html__( 'Disable', 'fitness-coaching' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_coaching_slider_heading',
		'section'     => 'fitness_coaching_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider', 'fitness-coaching' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'fitness_coaching_blog_slide_number',
		'label'       => esc_html__( 'Slide Content Range', 'fitness-coaching' ),
		'section'     => 'fitness_coaching_blog_slide_section',
		'default'     => 3,
		'choices'     => [
			'min'  => 0,
			'max'  => 5,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'fitness_coaching_blog_slide_category',
		'label'       => esc_html__( 'Select the category to show slider ( Image Dimension 1600 x 600 )', 'fitness-coaching' ),
		'section'     => 'fitness_coaching_blog_slide_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'fitness-coaching' ),
		'priority'    => 10,
		'choices'     => fitness_coaching_get_categories_select(),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_coaching_slider_extra_heading',
		'section'     => 'fitness_coaching_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider Extra Title', 'fitness-coaching' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fitness_coaching_slider_main_title',
		'section'  => 'fitness_coaching_blog_slide_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_coaching_slider_text_heading',
		'section'     => 'fitness_coaching_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Number Of Text', 'fitness-coaching' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'fitness_coaching_slide_excerpt_number',
		'label'       => esc_html__( 'Number of text to show', 'fitness-coaching' ),
		'section'     => 'fitness_coaching_blog_slide_section',
		'default'     => 20,
		'choices'     => [
			'min'  => 0,
			'max'  => 50,
			'step' => 1,
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_coaching_slider_button_heading',
		'section'     => 'fitness_coaching_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider Button Text', 'fitness-coaching' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fitness_coaching_slider_button_text',
		'section'  => 'fitness_coaching_blog_slide_section',
		'default'  => '',
		'priority' => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'fitness_coaching_slider_content_alignment',
		'label'       => esc_html__( 'Slider Content Alignment', 'fitness-coaching' ),
		'section'     => 'fitness_coaching_blog_slide_section',
		'default'     => 'CENTER-ALIGN',
		'placeholder' => esc_html__( 'Choose an option', 'fitness-coaching' ),
		'choices'     => [
			'LEFT-ALIGN' => esc_html__( 'LEFT-ALIGN', 'fitness-coaching' ),
			'CENTER-ALIGN' => esc_html__( 'CENTER-ALIGN', 'fitness-coaching' ),
			'RIGHT-ALIGN' => esc_html__( 'RIGHT-ALIGN', 'fitness-coaching' ),

		],
	] );


	// SERVICES SECTION

	Kirki::add_section( 'fitness_coaching_featured_post_section', array(
        'title'          => esc_html__( 'Services Settings', 'fitness-coaching' ),
        'description'    => esc_html__( 'You have to select post category to show services.', 'fitness-coaching' ),
        'panel'          => 'fitness_coaching_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_coaching_services_enable_heading',
		'section'     => 'fitness_coaching_featured_post_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Services Section', 'fitness-coaching' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fitness_coaching_services_box_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'fitness-coaching' ),
		'section'     => 'fitness_coaching_featured_post_section',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fitness-coaching' ),
			'off' => esc_html__( 'Disable', 'fitness-coaching' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_coaching_services_main_heading',
		'section'     => 'fitness_coaching_featured_post_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Services Main Title', 'fitness-coaching' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fitness_coaching_services_main_title',
		'section'  => 'fitness_coaching_featured_post_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_coaching_services_heading',
		'section'     => 'fitness_coaching_featured_post_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Services Title', 'fitness-coaching' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fitness_coaching_services_title',
		'section'  => 'fitness_coaching_featured_post_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_coaching_post_heading',
		'section'     => 'fitness_coaching_featured_post_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Services', 'fitness-coaching' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'fitness_coaching_services_number',
		'label'       => esc_html__( 'Number of services to show', 'fitness-coaching' ),
		'section'     => 'fitness_coaching_featured_post_section',
		'default'     => 5,
		'choices'     => [
			'min'  => 0,
			'max'  => 10,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'fitness_coaching_services_category',
		'label'       => esc_html__( 'Select the category to show services', 'fitness-coaching' ),
		'section'     => 'fitness_coaching_featured_post_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'fitness-coaching' ),
		'priority'    => 10,
		'choices'     => fitness_coaching_get_categories_select(),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'fitness_coaching_service_excerpt_number',
		'label'       => esc_html__( 'Number of Content Show in Single Service Pages', 'fitness-coaching' ),
		'section'     => 'fitness_coaching_featured_post_section',
		'default'     => 15,
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
	] );

	// FOOTER SECTION

	Kirki::add_section( 'fitness_coaching_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'fitness-coaching' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'fitness-coaching' ),
        'panel'          => 'fitness_coaching_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_coaching_footer_text_heading',
		'section'     => 'fitness_coaching_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'fitness-coaching' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fitness_coaching_footer_text',
		'section'  => 'fitness_coaching_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_coaching_footer_enable_heading',
		'section'     => 'fitness_coaching_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'fitness-coaching' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fitness_coaching_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'fitness-coaching' ),
		'section'     => 'fitness_coaching_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fitness-coaching' ),
			'off' => esc_html__( 'Disable', 'fitness-coaching' ),
		],
	] );
}
