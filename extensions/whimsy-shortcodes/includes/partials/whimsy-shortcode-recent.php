<?
// Add Category Posts Shortcode
function whimsy_recent_shortcode( $atts, $content = null ) {
  extract(shortcode_atts(array(
      'limit' => '3',
      'query' => '',
    ), $atts));

  global $wp_query,$post;

  $temp = $wp_query;

  $wp_query= null;

  $wp_query = new WP_Query();

    if(!empty($limit)){
      $query .= '&posts_per_page='.$limit;
    }

  $wp_query->query($query);

  ob_start();

  ?>

  <ul class="whimsy-recent-loop">
    <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
      <li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>
    <?php endwhile; ?>
  </ul>

  <?php 

  $wp_query = null; $wp_query = $temp;

  $content  = ob_get_contents();

  ob_end_clean();
  
  return $content;
}
add_shortcode('recent', 'whimsy_recent_shortcode');