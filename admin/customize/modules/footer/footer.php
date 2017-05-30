<?php
/**
 * @since  1.0.0
 * @access public
 * @return void
 */

Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'radio-image',
	'settings'    => 'whimsy_framework_layout_footer',
	'label'       => __( 'Widget Layout', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_footer',
	'default'     => 'footer-3',
	'priority'    => 10,
	'choices'     => array(
		'footer-1'   => get_template_directory_uri() . '/library/img/footer-1.png',
		'footer-2' => get_template_directory_uri() . '/library/img/footer-2.png',
		'footer-3'  => get_template_directory_uri() . '/library/img/footer-3.png',
	),
) );
Kirki::add_field( 'whimsy_plus', array(
    'type'        => 'toggle',
    'settings'    => 'whimsy_plus_add_custom_footer_text',
    'label'       => __( 'Add custom footer text.', 'whimsy-plus' ),
    'section'     => 'whimsy_plus_footer',
    'default'     => 0,
    'priority'    => 10,
) );
Kirki::add_field( 'whimsy_plus', array(
	'type'     => 'textarea',
	'settings' => 'whimsy_plus_footer_custom_credit',
	'label'    => __( 'Footer Credit', 'whimsy-plus' ),
	'section'  => 'whimsy_plus_footer',
	'priority' => 10,
    'required'    => array(
        array(
            'setting'  => 'whimsy_plus_add_custom_footer_text',
            'operator' => '==',
            'value'    => 1,
        ),
    ),
    'transport'    => 'refresh',
    'js_vars'      => array(
        array(
            'function' => 'html',
        ),
    )
) );
