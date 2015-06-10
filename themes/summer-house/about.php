<div id="about" class="plx-layers">
  <div class="plx-layer -back" style="background-image: url('<?php echo wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large')[0];?>')"></div>
  <div class="plx-layer -fore">
    <div class="plx-layer-content">
      <div class="content -narrow -align-center nest-3">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</div>