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
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
  
    var columns = document.querySelectorAll('.posts.-multiColumn .col');
    var posts = document.querySelectorAll('.posts.-singleColumn .post');

    var c = 0;
    for (var i = 0; i < posts.length; i++) {
      post = posts[i];  
      post = post.cloneNode(true);
      columns[c].appendChild(post);
      c++;
      if(c >= columns.length) {
        c = 0;
      }
    }

  });
</script>

<?php get_footer(); ?>