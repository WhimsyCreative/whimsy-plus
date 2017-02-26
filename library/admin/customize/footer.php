<?php
/**
 * @since  1.0.0
 * @access public
 * @return void
 */

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