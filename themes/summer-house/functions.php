<?php

// define('WP_DEBUG', true);
// define('WP_DEBUG_DISPLAY', true);

// Create Featured Categories

function insert_featured_primary_cat() {
  wp_insert_term(
    "Featured - Primary", 
    "category", 
    array(
      'description' => "Displays post at the top of the homepage (limit of 1)",
    )
  );
}

add_action( 'init', 'insert_featured_primary_cat' );


function insert_featured_secondary_cat() {
  wp_insert_term(
    "Featured - Secondary", 
    "category", 
    array(
      'description' => "Displays post on homepage below work (No limit. Use 'Order' field to adjust the display order.)",
    )
  );
}

add_action( 'init', 'insert_featured_secondary_cat' );


function insert_featured_work_cat() {
  wp_insert_term(
    "Featured - Work", 
    "category", 
    array(
      'description' => "Displays post in work section on homepage (Limit of 8. User 'Order' field to adjust display order.)",
    )
  );
}

add_action( 'init', 'insert_featured_work_cat' );


// Add `order` to posts

function add_post_order() {
  add_post_type_support( 'post', 'page-attributes' );
}
add_action('init', 'add_post_order');


// Post Queries

function sh_posts($type = null) {

  switch ($type) {

    case 'featured-primary':
      $args = array(
        'category_name' => 'featured-primary',
        'posts_per_page' => 1,
        'orderby' => 'date',
        'order' => 'DESC',
      );
      $query = new WP_Query($args);
      while ($query->have_posts() ) : $query->the_post();
        get_template_part('featured', 'primary');
      endwhile;
      wp_reset_postdata();
      wp_reset_query();
      break;

    case 'featured-secondary':
      $args = array(
        'category_name' => 'featured-secondary', 
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'posts_per_page' => -1,
      );
      $query = new WP_Query($args);
      while ($query->have_posts() ) : $query->the_post();
        get_template_part('featured', 'secondary');
      endwhile;
      wp_reset_postdata();
      wp_reset_query();
      break;

    case 'featured-work':
      $args = array(
        'category_name' => 'featured-work',
        'posts_per_page' => 8,
        'orderby' => 'menu_order',
        'order' => 'ASC',
      );
      $query = new WP_Query($args);
      while ($query->have_posts() ) : $query->the_post();
        get_template_part('featured', 'work');
      endwhile;
      wp_reset_postdata();
      wp_reset_query();
      break;

    case null:
      if (have_posts()) : while (have_posts()) : the_post();
        get_template_part('listing');
      endwhile; endif;
      break;
    
  }

}


// Add Post Thumbnails

if ( function_exists( 'add_theme_support' ) ) { 
  add_theme_support( 'post-thumbnails' );
  set_post_thumbnail_size( 400, 400 ); // default Post Thumbnail dimensions (cropped)

  // additional image sizes
  // delete the next line if you do not need additional image sizes
  add_image_size( 'large', 1500, 9999 ); //300 pixels wide (and unlimited height)
}


?>