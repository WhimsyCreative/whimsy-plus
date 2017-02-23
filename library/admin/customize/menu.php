<?php
/**
 * @since  1.0.0
 * @access public
 * @return void
 */

    // Menu bg color
    $wp_customize->add_setting(
        'whimsy_menu_background_color',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_hex_color'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'whimsy_menu_background_color',
            array(
                'label'     => __( 'Menu Background Color', 'whimsy-customizer-colors' ),
                'section'   => 'whimsy_extend_menu_colors_section',
                'settings'  => 'whimsy_menu_background_color'
            )
        )
    );	

    // Menu link color
    $wp_customize->add_setting(
        'whimsy_menu_link_color',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_hex_color'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'whimsy_menu_link_color',
            array(
                'label'     => __( 'Menu link color', 'whimsy-customizer-colors' ),
                'section'   => 'whimsy_extend_menu_colors_section',
                'settings'  => 'whimsy_menu_link_color'
            )
        )
    );  

    // Menu link color :hover
    $wp_customize->add_setting(
        'whimsy_menu_link_hover_color',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_hex_color'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'whimsy_menu_link_hover_color',
            array(
                'label'     => __( 'Menu link hover color', 'whimsy-customizer-colors' ),
                'section'   => 'whimsy_extend_menu_colors_section',
                'settings'  => 'whimsy_menu_link_hover_color'
            )
        )
    );  


    // Submenu bg color
    $wp_customize->add_setting(
        'whimsy_submenu_background_color',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_hex_color'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'whimsy_submenu_background_color',
            array(
                'label'     => __( 'Sub-menu background color', 'whimsy-customizer-colors' ),
                'section'   => 'whimsy_extend_menu_colors_section',
                'settings'  => 'whimsy_submenu_background_color'
            )
        )
    );  

    // Submenu link color
    $wp_customize->add_setting(
        'whimsy_submenu_link_color',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_hex_color'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'whimsy_submenu_link_color',
            array(
                'label'     => __( 'Sub-Menu link color', 'whimsy-customizer-colors' ),
                'section'   => 'whimsy_extend_menu_colors_section',
                'settings'  => 'whimsy_submenu_link_color'
            )
        )
    ); 
