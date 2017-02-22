<?php
/**
 * Add [icon] shortcode
 *
 * @since 1.0.0
 */

// Font Awesome Shortcodes
function whimsy_sc_font_awesome($atts) {
    extract(shortcode_atts(array(
        'type'  => '',
        'size' => '',
        'rotate' => '',
        'flip' => '',
        'border' => '',
        'pull' => '',
        'animated' => '',
        'class' => '',
    ), $atts));
 
    $classes  = ($type) ? 'fa-'.$type. '' : 'fa-star';
    $classes .= ($size) ? ' fa-'.$size.'' : '';
    $classes .= ($rotate) ? ' fa-rotate-'.$rotate.'' : '';
    $classes .= ($flip) ? ' fa-flip-'.$flip.'' : '';
    $classes .= ($border) ? ' fa-border' : '';
    $classes .= ($pull) ? ' pull-'.$pull.'' : '';
    $classes .= ($animated) ? ' fa-spin' : '';
    $classes .= ($class) ? ' '.$class : '';
 
    $whimsy_sc_fa = '<i class="fa '.esc_html($classes).'"></i>';
      
    return $whimsy_sc_fa;
}
  
add_shortcode('icon', 'whimsy_sc_font_awesome');