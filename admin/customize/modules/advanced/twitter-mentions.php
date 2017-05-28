<?php
/**
 * Sharing icons
 * 
 * @since  1.0.0
 * @access public
 * @return void
 */

add_action( 'init', 'whimsy_plus_link_twitter_mention', 40 );

if ( ! function_exists( 'whimsy_plus_plus_link_twitter_mention' ) ) :
function whimsy_plus_link_twitter_mention() {
    
        if ( Kirki::get_option( 'whimsy_plus_enable_twitter_mentions' ) == true ) { 

            function whimsy_link_twitter_mention($content) {
            return preg_replace('/([^a-zA-Z0-9-_&])@([0-9a-zA-Z_]+)/', "$1<a href=\"http://twitter.com/$2\" target=\"_blank\" rel=\"nofollow\">@$2</a>", $content);
        }

        add_filter('the_content', 'whimsy_link_twitter_mention');   
        add_filter('comment_text', 'whimsy_link_twitter_mention');
        
    }
}
endif;