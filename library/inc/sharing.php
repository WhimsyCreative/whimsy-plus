<?php
/**
 * Sharing icons
 * 
 * @since  1.0.0
 * @access public
 * @return void
 */

add_action( 'whimsy_post_meta_after', 'whimsy_plus_social_sharing_icons', 4 );

if ( ! function_exists( 'whimsy_plus_social_sharing_icons' ) ) :
function whimsy_plus_social_sharing_icons() {
    
    if ( Kirki::get_option( 'whimsy_plus_add_social_sharing_icons' ) == true ) : // If there's a header image and Header as a Background is ENABLED then the header image should be displayed as a background style. ?>
        <div id="social-sharing">
            <span>Share This:</span>

            <span class="sharing-icon facebook-icon">
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php if(is_home()){echo home_url();}else{the_permalink();} ?>" target="_blank" title="Share this page on Facebook">
                    <i class="fa fa-facebook"></i>
                </a>
            </span>
            <span class="sharing-icon twitter-icon">
                <a href="http://twitter.com/share?url=<?php if(is_home()){echo home_url();}else{the_permalink();} ?>&text=<?php the_title(); ?>&via=<?php $options = get_option('whimsy_twitter');echo $options['whimsy_twitter'];?>" target="_blank" title="Tweet this post on Twitter">
                        <i class="fa fa-twitter"></i>
                </a>
            </span>
            <span class="sharing-icon pinterest-icon"> 
                <a href="//www.pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php if( function_exists( 'the_post_thumbnail' ) ) echo wp_get_attachment_url(get_post_thumbnail_id()); ?>&description=<?php echo get_the_title(); ?>" class="pin-it-button" data-pin-do="buttonPin" data-pin-config="above">
                    <i class="fa fa-pinterest"></i>
                </a>
            </span>
        </div>
 

    <?php endif; // End check for header image. 
}
endif;
