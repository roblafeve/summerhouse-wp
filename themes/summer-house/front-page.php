<?php get_header(); ?>

<div class="plx">

  <!-- Featured - Primary -->

  <?php sh_posts('featured-primary') ?>


  <!-- Featured Work -->
  
  <div id="work" class="plx-layer -spacer">
    <div class="plx-layer-content">
      <div class="content -align-left">
        
        <h2>Work</h2>

        <div class="posts -singleColumn">
          <?php sh_posts('featured-work'); ?>
        </div>

        <div class="posts -multiColumn">
          <div class="grid -fixed -spaced -align-top"></div>
        </div>

      </div>
    </div>
  </div>




  <!-- Featured - Secondary -->

  <?php sh_posts('featured-secondary') ?>


  <!-- About -->

  <?php sh_about(); ?>
  

  <!-- Contact -->

  <?php sh_contact(); ?>

</div>

<?php get_footer(); ?>