jQuery(document).ready(function($) {


  function scrollsaw() {

    [].forEach.call(document.querySelectorAll('.titlebar a'), function (el) {

      var url  = el.getAttribute('href'), 
          hash = url.substring(url.indexOf('#')), 
          $dest;

      if(el.hash) {
        $dest = $(document.querySelectorAll(el.hash)[0]);
        el.addEventListener('click', function(e) {
          if($('html').hasClass('home')) {
            e.preventDefault();
          }
          $('.plx').scrollTo($dest, 1000, {queue: false});
        }, false);
      }

    });

  }
  

  scrollsaw();



});