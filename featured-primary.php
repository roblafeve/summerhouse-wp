<div id="primary" class="plx-layers">
  <div style="background-image: url('<?php echo wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'sh_large')[0];?>')" class="plx-layer -back"></div>
  <div class="plx-layer -fore">
    <div class="plx-layer-content">
      <div class="content -narrow">
        <h1><?php the_title(); ?></h1>
        <h4><a href="<?php the_permalink(); ?>">Read post</a></h4>
      </div>
    </div>
  </div>
  <div class="plx-layers-down"></div>
</div>
