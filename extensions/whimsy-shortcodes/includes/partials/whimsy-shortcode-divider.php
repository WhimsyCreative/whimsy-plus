<?php
/**
 * Add [divider] shortcode
 *
 * @since 1.0.0
 */

// Font Awesome Shortcodes
function whimsy_sc_divider($atts) {

    // Attributes
    extract(shortcode_atts(array(
        'style'  => 'default',
        'class' => '',
    ), $atts));

    // Code Output
    $whimsy_sc_fa = '<div class="whimsy-divider whimsy-divider-'.$style.' '.$class.'"></div>';
    return $whimsy_sc_fa;
}
  
add_shortcode('divider', 'whimsy_sc_divider');