<?php get_header(); ?>

<h1>blog</h1>
<?php sh_posts(); ?>

<div class="articles -multiColumn">
  <div class="section">
    <div class="section-content">
      <div class="grid spaced align-top">
        <div class="grid-items">
          <div class="col"></div>
          <div class="col"></div>
          <div class="col"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
  
    var cols = document.querySelectorAll('.articles.-multiColumn .col');
    var colsLength = cols.length;
    var articles = document.querySelectorAll('.articles.-singleColumn .article');
    var articlesLength = articles.length;
    var c = 0;
    for (var i = 0; i < articlesLength; i++) {
      article = articles[i];  
      article = article.cloneNode(true);
      cols[c].appendChild(article);
      c++;
      if(c >= colsLength) {
        c = 0;
      }
    }
  
    var stickyElements = document.getElementsByClassName('sticky');
    for (var i = stickyElements.length - 1; i >= 0; i--) {
        Stickyfill.add(stickyElements[i]);
    }
  
  });
  
</script>

<?php get_footer(); ?>