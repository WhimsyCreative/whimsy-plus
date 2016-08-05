<?php
/**
 * The template for displaying single color scheme posts.
 *
 * @package whimsy-colors
 */

get_header(); ?>

<?php whimsy_content_before(); ?>

<div id="content" class="container row">

	<div id="primary" class="c9">

		<?php whimsy_main_before(); ?>

		<main id="main" class="site-main" role="main">
		
			<?php whimsy_main_inside_before(); ?>

			<?php while ( have_posts() ) : the_post(); ?>
		
			<?php whimsy_post_before(); ?>
            
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <div id="whimsy-colors" class="row">
                        
                        <?php 
                        
                            function get_whimsy_color_hex($field_name){
                                
                                return get_post_meta(get_the_ID(),$field_name,'true');
                                
                            }

                        ?>
                        
                        <div class="c2">
                                                        
                            <?php echo get_whimsy_color_hex('color-1'); ?>
                            
                        </div>
                        
                        <div class="c2"><?php echo get_post_meta(get_the_ID(), 'color-2', true); ?></div>
                        
                        <div class="c2"><?php echo get_post_meta(get_the_ID(), 'color-3', true); ?></div>
                        
                        <div class="c2 end"><?php echo get_post_meta(get_the_ID(), 'color-4', true); ?></div>  
                        		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'whimsy-framework' ) ); ?>

                        
                    </div>
                    
                </article>
            
				<?php whimsy_post_nav(); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php whimsy_post_after(); ?>

			<?php endwhile; // end of the loop. ?>

			<?php whimsy_main_inside_after(); ?>

		</main><!-- #main -->

		<?php whimsy_main_after(); ?>

	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>