<div class="plx-layers">
  <div style="background-image: url('<?php echo wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large')[0];?>')" class="plx-layer -back"></div>
  <div class="plx-layer -fore">
    <div class="plx-layer-content"> 
      <div class="content -narrow">
        <h1><?php the_title(); ?></h1>
      </div>
    </div>
  </div>
</div>
<div class="plx-layer -spacer">
  <div class="plx-layer-content">
    <div class="content -narrow -align-left nest-3 sub-all">

      <h2><?php the_title(); ?></h2>
      <?php the_excerpt(); ?>

      <h3><a href="<?php the_permalink(); ?>">View full post</a></h3>

    </div>
  </div>
</div>