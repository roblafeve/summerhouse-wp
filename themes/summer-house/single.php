<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  
<p>
<a href="<?php the_permalink(); ?>">
  <h1><?php the_title(); ?></h1>
</a>
<?php the_content(); ?>
</p>

<p>test</p>

<?php endwhile; endif; ?>