console.log('components.js loaded');

!function(t){t.fn.bcSwipe=function(e){var n={threshold:50};return e&&t.extend(n,e),this.each(function(){function e(t){1==t.touches.length&&(u=t.touches[0].pageX,c=!0,this.addEventListener("touchmove",o,!1))}function o(e){if(c){var o=e.touches[0].pageX,i=u-o;Math.abs(i)>=n.threshold&&(h(),t(this).carousel(i>0?"next":"prev"))}}function h(){this.removeEventListener("touchmove",o),u=null,c=!1}var u,c=!1;"ontouchstart"in document.documentElement&&this.addEventListener("touchstart",e,!1)}),this}}(jQuery);

jQuery(function($) {
  $(document).ready(function() {

    // SimpleBar
    new SimpleBar(document.getElementById('mob_nav'), { autoHide: false })
    $('.galleries').bcSwipe({ threshold: 50 });

    $('.my_projects').html('MY PROJECTS');

    var CURRENT_POST_IND = 0;

    deliver_(['post_titles', 'paste_title', 'paste_content'],CURRENT_POST_IND);

  });

  function deliver_(jobs, job_index) {

    for (var i = 0; i < jobs.length; i++) {

      if (  jobs[i] == 'post_titles' ) {
        var fetch_projects = '';
        for (var j = 0; j < POSTS_ARR_CONTENT.length; j++) {
          var img = POSTS_ARR_CONTENT[j].thumbnail;
          var ttl = POSTS_ARR_CONTENT[j].title;
          fetch_projects = fetch_projects + '<a href="#" class="col-xl-6 col-lg-12 col-sm-12 col-12 mar-bottom bor-rad " style="padding:15px; border-radius:30px;">' +
            '<div class=" bor-rad  hover-opacity-par moving-background"style=" padding:0.8em; display:flex;">' +
            '<div class="bor-rad-left" style=" width:9em; height:6em;background-image:url('+ img +
            '); background-size:97px; background-position:top center; background-repeat:repeat;  background-attachment: fixed;"></div>' +
            ' <p class="bor-rad-right hover-opacity" style="background-color:rgba(0,0,0,0.7);width:auto;padding:1em 1em 0 2em; width:100%; ">' + ttl + '</p>' +
          '</div> </a>';
        }
        $('.my_projects_items').html(fetch_projects);
      }

      if ( jobs[i] == 'paste_title'  ) {
        for (var j = 0; j < POSTS_ARR_CONTENT.length; j++) {
          if (j === job_index) {
            $('.post_title').html(POSTS_ARR_CONTENT[job_index].title);
          }
        }
      }

      if ( jobs[i] == 'paste_content'  ) {
        for (var j = 0; j < POSTS_ARR_CONTENT.length; j++) {
          if (j === job_index) {
            $('.paste_content').html(POSTS_ARR_CONTENT[job_index].content);
          }
        }
      }

    }


  } //end of work function



});
