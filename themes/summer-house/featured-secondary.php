<div class="plx-layers">
  <div style="background-image: url('<?php echo wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large')[0];?>')" class="plx-layer -back"></div>
  <div class="plx-layer -fore">
    <div class="plx-layer-content"> 
      <h1><?php the_title(); ?></h1>
    </div>
  </div>
</div>
<div class="plx-layer -spacer">
  <div class="plx-layer-content">
    <div class="content -align-left">
      <div class="grid -fixed">
        <div class="col"></div>
        <div class="col nest-3">
          <?php the_excerpt(); ?>
          <a href="<?php the_permalink(); ?>">Read on</a>
        </div>
      </div>
    </div>
  </div>
</div>