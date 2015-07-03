<?php get_header(); ?>

<h1>Blog</h1>

<div class="posts -singleColumn">
  <?php sh_posts(); ?>
</div>

<div class="posts -multiColumn">
  <div class="grid -fixed -spaced -align-top">
    <div class="col"></div>
    <div class="col"></div>
    <div class="col"></div>
    <div class="col"></div>
  </div>
</div>

<?php get_footer(); ?>