<?php
/**
 * @since  1.0.0
 * @access public
 * @return void
 */


    /** Content Container Styles **/


    // Content container background color
    $wp_customize->add_setting(
        'whimsy_content_container_bg_color',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_hex_color'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'whimsy_content_container_bg_color',
            array(
                'label'     => __( 'Content Background Color', 'whimsy-customizer-colors' ),
                'section'   => 'whimsy_extend_content_colors_section',
                'settings'  => 'whimsy_content_container_bg_color'
            )
        )
    ); 

    // Content container background color
    $wp_customize->add_setting(
        'whimsy_content_container_text_color',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_hex_color'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'whimsy_content_container_text_color',
            array(
                'label'     => __( 'Content Text Color', 'whimsy-customizer-colors' ),
                'section'   => 'whimsy_extend_content_colors_section',
                'settings'  => 'whimsy_content_container_text_color'
            )
        )
    ); 

    // Content container link color
    $wp_customize->add_setting(
        'whimsy_content_container_link_color',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_hex_color'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'whimsy_content_container_link_color',
            array(
                'label'     => __( 'Content Link Color', 'whimsy-customizer-colors' ),
                'section'   => 'whimsy_extend_content_colors_section',
                'settings'  => 'whimsy_content_container_link_color'
            )
        )
    ); 

    // Content container link hover color
    $wp_customize->add_setting(
        'whimsy_content_container_link_hover_color',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_hex_color'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'whimsy_content_container_link_hover_color',
            array(
                'label'     => __( 'Content Container Link Hover Color', 'whimsy-customizer-colors' ),
                'section'   => 'whimsy_extend_content_colors_section',
                'settings'  => 'whimsy_content_container_link_hover_color'
            )
        )
    ); 



    /** Post Styles **/



    // Post background color
    $wp_customize->add_setting(
        'whimsy_post_bg_color',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_hex_color'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'whimsy_post_bg_color',
            array(
                'label'     => __( 'Post Background Color', 'whimsy-customizer-colors' ),
                'section'   => 'whimsy_extend_content_colors_section',
                'settings'  => 'whimsy_post_bg_color'
            )
        )
    ); 

    // Post background color
    $wp_customize->add_setting(
        'whimsy_post_text_color',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_hex_color'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'whimsy_post_text_color',
            array(
                'label'     => __( 'Post Text Color', 'whimsy-customizer-colors' ),
                'section'   => 'whimsy_extend_content_colors_section',
                'settings'  => 'whimsy_post_text_color'
            )
        )
    ); 

    // Post title text color
    $wp_customize->add_setting(
        'whimsy_post_title_link_color',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_hex_color'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'whimsy_post_title_link_color',
            array(
                'label'     => __( 'Post Title Text Color', 'whimsy-customizer-colors' ),
                'section'   => 'whimsy_extend_content_colors_section',
                'settings'  => 'whimsy_post_title_link_color'
            )
        )
    ); 

    // Post title link hover color
    $wp_customize->add_setting(
        'whimsy_post_title_link_hover_color',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_hex_color'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'whimsy_post_title_link_hover_color',
            array(
                'label'     => __( 'Post Title Hover Color', 'whimsy-customizer-colors' ),
                'section'   => 'whimsy_extend_content_colors_section',
                'settings'  => 'whimsy_post_title_link_hover_color'
            )
        )
    ); 

    // Post link color
    $wp_customize->add_setting(
        'whimsy_post_link_color',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_hex_color'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'whimsy_post_link_color',
            array(
                'label'     => __( 'Post Link Color', 'whimsy-customizer-colors' ),
                'section'   => 'whimsy_extend_content_colors_section',
                'settings'  => 'whimsy_post_link_color'
            )
        )
    ); 

    // Post link hover color
    $wp_customize->add_setting(
        'whimsy_post_link_hover_color',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_hex_color'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'whimsy_post_link_hover_color',
            array(
                'label'     => __( 'Post Link Hover Color', 'whimsy-customizer-colors' ),
                'section'   => 'whimsy_extend_content_colors_section',
                'settings'  => 'whimsy_post_link_hover_color'
            )
        )
    ); 