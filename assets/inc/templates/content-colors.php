<?php
/**
 * @package whimsy-colors
 */
?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <div id="whimsy-colors" class="row">

                <div class="c2"><?php echo get_post_meta(get_the_id(), 'color-1', true); ?></div>

                <div class="c2"><?php echo get_post_meta(get_the_id(), 'color-2', true); ?></div>

                <div class="c2"><?php echo get_post_meta(get_the_id(), 'color-3', true); ?></div>

                <div class="c2 end"><?php echo get_post_meta(get_the_id(), 'color-4', true); ?></div>  

            </div>

        </article>