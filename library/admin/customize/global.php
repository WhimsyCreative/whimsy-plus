<?php
/**
 * @since  1.0.0
 * @access public
 * @return void
 */

    // Add Color Controls
	$wp_customize->add_setting(
	    'whimsy_link_color',
	    array(
	        'default' => '',
	        'sanitize_callback' => 'sanitize_hex_color'
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'whimsy_link_color',
	        array(
	            'label' 	=> __( 'Link Color', 'whimsy-customizer-colors' ),
	            'section' 	=> 'whimsy_extend_global_colors_section',
	            'settings' 	=> 'whimsy_link_color'
	        )
	    )
	);

    // Add Color Controls
	$wp_customize->add_setting(
	    'whimsy_link_hover_color',
	    array(
	        'default' => '',
	        'sanitize_callback' => 'sanitize_hex_color'
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'whimsy_link_hover_color',
	        array(
	            'label' 	=> __( 'Link Hover Color', 'whimsy-customizer-colors' ),
	            'section' 	=> 'whimsy_extend_global_colors_section',
	            'settings' 	=> 'whimsy_link_hover_color'
	        )
	    )
	);

	$wp_customize->add_setting(
	    'whimsy_alt_color',
	    array(
	        'default' => '',
	        'sanitize_callback' => 'sanitize_hex_color'
	    )
	);
    
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'whimsy_alt_color',
	        array(
	            'label' 	=> __( 'Highlight Color', 'whimsy-customizer-colors' ),
	            'section' 	=> 'whimsy_extend_global_colors_section',
	            'settings' 	=> 'whimsy_alt_color'
	        )
	    )
	);

	$wp_customize->add_setting(
	    'whimsy_body_color',
	    array(
	        'default' => '',
	        'sanitize_callback' => 'sanitize_hex_color'
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'whimsy_body_color',
	        array(
	            'label' 	=> __( 'Body Text Color', 'whimsy-customizer-colors' ),
	            'section' 	=> 'whimsy_extend_global_colors_section',
	            'settings' 	=> 'whimsy_body_color'
	        )
	    )
	);