<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  
<div class="plx">

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

        <?php the_content(); ?>

      </div>
    </div>
  </div>

</div>

<?php endwhile; endif; ?>
<?php get_footer(); ?>