<?php get_header(); ?>

<div class="plx">

  <!-- Featured - Primary -->

  <?php sh_posts('featured-primary') ?>


  <!-- Featured Work -->
  
  <div id="work" class="plx-layer -spacer">
    <div class="plx-layer-content">
      <div class="content -align-left">
        <h2>Our Work</h2>
        <div class="content-grid">
          <div class="grid -wrapped">
            <?php sh_posts('featured-work') ?>
          </div>
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