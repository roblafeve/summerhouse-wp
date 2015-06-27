<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="article">
  <div class="article-header" style="background-image: url('<?php echo wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'sh_large')[0];?>')">
    <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'sh_large')[0];?>" alt="" />
  </div>
  <div class="article-body">
    <div class="grid -spaced">
      <div class="col">
        <div class="article-body-main">
          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>
        </div>
      </div>
      <div class="col article-body-share">
        <p>
          share
        </p>
      </div>
    </div>
  </div>
  <?php if(get_post_meta(get_the_ID(), 'video')): ?>
  <div class="article-video">
    <iframe src="https://player.vimeo.com/video/<?php echo get_post_meta( get_the_ID(), 'video', true ); ?>?title=0&byline=0&portrait=0" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
  </div>
  <?php endif; ?>
  <?php
  $attachments = get_children( array(
    'post_type' => 'attachment',
    'post_mime_type' => 'image',
    'post_parent' => $post->ID
    ));
  if(count($attachments) > 1) : ?>
  <div class="article-gallery">
    <?php echo do_shortcode('[gallery size="sh_medium" link="none" exclude="' . get_post_thumbnail_id( $post->ID ) . '"]'); ?>
  </div>
  <?php endif; ?>
</div>

<?php endwhile; endif; ?>
<?php get_footer(); ?>
