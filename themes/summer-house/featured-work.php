<div class="col">
  <a href="<?php the_permalink(); ?>" class="post">
    <div class="post-image" style="background-image: url('<?php echo wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'small')[0];?>')"></div>
    <div class="post-content">
      <div class="post-title">
        <h3><?php the_title(); ?></h3>
      </div>
      <div class="post-excerpt"><?php the_excerpt(); ?></div>
    </div>
  </a>
</div>