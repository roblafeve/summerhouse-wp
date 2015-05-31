<?php get_header(); ?>

<div class="plx">

  <!-- Featured - Primary -->

  <?php sh_posts('featured-primary') ?>


  <!-- Featured Work -->
  
  <div class="plx-layer -spacer">
    <div class="plx-layer-content">
      <div class="content -align-left">
        <h2>Our Work</h2>
        <?php sh_posts('featured-work') ?>
      </div>
    </div>
  </div>


  <!-- Featured - Secondary -->

  <?php sh_posts('featured-secondary') ?>


  <!-- Featured - Secondary -->

  <div class="plx-layers">
    <div style="background-image: url('assets/images/summerhouse-lake.jpg')" class="plx-layer -back"></div>
    <div class="plx-layer -fore">
      <div class="plx-layer-content">
        <div class="content -align-center nest-3">
          <h1>About Summer House</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam tempora aperiam, architecto, eius sit voluptatibus minus asperiores similique incidunt, expedita harum! Veniam, at praesentium! Consequatur neque laborum magnam ipsam alias.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="plx-layer -spacer">
    <div class="plx-layer-content">
      <div class="content -align-center nest-3">
        <h1>Contact</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam dolorem quasi, voluptas magnam ut alias consequuntur! Vero quis mollitia deserunt, ipsum obcaecati at, cupiditate fugit expedita praesentium voluptate nam, itaque.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat sequi quae ullam. Cupiditate assumenda, sint expedita, alias minima excepturi numquam veniam laboriosam, vero commodi voluptatibus quis aut sed labore repudiandae!</p>
      </div>
    </div>
  </div>

</div>

<?php get_footer(); ?>