jQuery(document).ready(function($) {


  function stackPosts(colCount) {


    var
      columns = [],
      c = 0,
      posts = document.querySelectorAll('.posts.-singleColumn .post'),
      grid  = document.querySelectorAll('.posts.-multiColumn > .grid')[0];

    grid.innerHTML = '';


    for (var i = 0; i < colCount; i++) {
      var col = document.createElement("div");
      col.classList.add('col');
      grid.appendChild(col);
    }

    columns = document.querySelectorAll('.posts.-multiColumn .col');

    for (var i = 0; i < posts.length; i++) {
      post = posts[i];
      post = post.cloneNode(true);
      columns[c].appendChild(post);
      c++;
      if(c >= columns.length) {
        c = 0;
      }
    }
  }


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

  var mqls = [
    window.matchMedia("(max-width: 1400px)"),
    window.matchMedia("(max-width: 960px)"),
    window.matchMedia("(max-width: 640px)")
  ];

  for (var i = 0; i < mqls.length; i++){ // loop through queries
    mediaqueryresponse(mqls[i]) // call handler function explicitly at run time
    mqls[i].addListener(mediaqueryresponse) // call handler function whenever the media query is triggered
  }
  stackPosts(4);
  function mediaqueryresponse(mql){
    if (mqls[0].matches){ // do something when width: 1024px media query matches
      stackPosts(4);
    }
    if (mqls[1].matches){ // do something when width: 800px media query matches
      stackPosts(3);
    }
    if (mqls[2].matches){ // do something when height: 640px media query matches
      stackPosts(1);
    }
  }



});
