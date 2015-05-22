<?php


define('WP_DEBUG', true);


// Feature Taxonomy

function create_feature_tax() {
  register_taxonomy(
    'feature',
    'post',
    array(
      'label' => __( 'Feature' ),
      'public' => true,
      'rewrite' => false,
      'hierarchical' => false,
      // 'show_in_menu' => false,
    )
  );
};

add_action( 'init', 'create_feature_tax' );


// Feature Taxonomy - Terms

function create_feature_tax_terms() {
  if (term_exists('Homepage - Main') == false) {
    wp_insert_term(
      'Homepage - Main', // the term 
      'feature', // the taxonomy
      array(
        'description'=> 'A post with this feature tag will appear at the top of the homepage.',
        'slug' => 'homepage-main'
      )
    );
  };
  if (term_exists('Homepage - Work') == false) {
    wp_insert_term(
      'Homepage - Work', // the term 
      'feature', // the taxonomy
      array(
        'description'=> 'A post with this feature tag will appear in the list of work homepage.',
        'slug' => 'homepage-work'
      )
    );
  };
};

add_action( 'init', 'create_feature_tax_terms' );


// Post Queries

function posts($type) {

  switch ($type) {

    case 'feature-main':
      query_posts(array('category_name' => 'feature-main', 'posts_per_page' => 1));
      while ( have_posts() ) : the_post();
        get_template_part('feature');
      endwhile;
      wp_reset_query();

    case 'feature-work':
      query_posts(array('category_name' => 'feature-1', 'posts_per_page' => 1));
      while ( have_posts() ) : the_post();
        get_template_part('test');
      endwhile;
      wp_reset_query();
    
  }

}


?>