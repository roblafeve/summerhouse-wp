<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="article">
  <div class="article-header" style="background-image: url('<?php echo wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large')[0];?>')">
    <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large')[0];?>" alt="" />
  </div>
  <div class="article-body">
    <div class="grid">
      <div class="col">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
      </div>
      <div class="col">
        <p>
          share
        </p>
      </div>
    </div>
  </div>
  <div class="article-gallery">
    <?php echo do_shortcode('[gallery size="medium" link="none" exclude="' . get_post_thumbnail_id( $post->ID ) . '"]'); ?>
  </div>
</div>

<?php endwhile; endif; ?>
<?php get_footer(); ?>
