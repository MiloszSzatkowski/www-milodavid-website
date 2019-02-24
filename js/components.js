console.log('components.js loaded');

!function(t){t.fn.bcSwipe=function(e){var n={threshold:50};return e&&t.extend(n,e),this.each(function(){function e(t){1==t.touches.length&&(u=t.touches[0].pageX,c=!0,this.addEventListener("touchmove",o,!1))}function o(e){if(c){var o=e.touches[0].pageX,i=u-o;Math.abs(i)>=n.threshold&&(h(),t(this).carousel(i>0?"next":"prev"))}}function h(){this.removeEventListener("touchmove",o),u=null,c=!1}var u,c=!1;"ontouchstart"in document.documentElement&&this.addEventListener("touchstart",e,!1)}),this}}(jQuery);

var CURRENT_POST_IND = 0;

jQuery(function($) {
  $(document).ready(function() {

    // SimpleBar
    $('.galleries').bcSwipe({ threshold: 50 });

    // $('.my_projects').html('MY PROJECTS');

    // color_line();

    function color_line() {
      var tt = $('.line');
      var arr = $.makeArray(tt);
      // arr.reverse();
      for(i=0;i<arr.length;i++){
        setTimeout( (function(i){ return function(){
          arr[i].style.color = 'rgb(' + (240/(i+0.3)) + ',' + (i*0) + ',' + (i*5)  + ')';
        }})(i), i*400 );
      }
    }

    $("#explore").click(function (event) {
      event.preventDefault();
          $('#right').animate({
            scrollTop: $('.projects').offset().top
        }, 500, function () {
          $('#introduction-container').css('display', 'none');
        });
      });


    deliver_(['post_titles', 'paste_title', 'paste_content', 'create_gallery','warp_in_gallery_titles'],CURRENT_POST_IND,0);

  });

  function deliver_(jobs, job_index, inner_gal_job_index) {

    for (var i = 0; i < jobs.length; i++) {

      if (  jobs[i] == 'post_titles' ) {
        var fetch_projects = '';
        for (var j = 0; j < POSTS_ARR_CONTENT.length; j++) {
          var img = POSTS_ARR_CONTENT[j].thumbnail;
          var ttl = POSTS_ARR_CONTENT[j].title;
          var post_type = POSTS_ARR_CONTENT[j].post_type ;
          var color_;
          if (post_type == 'design') {
            color_ = '#ff5722';
          } else  if (post_type == 'programming') {
            color_ = '#4caf50';
          } else {   color_ = '#ff397d';   }

          if ((j > 0) && (j !== POSTS_ARR_CONTENT.length)) {
            if (POSTS_ARR_CONTENT[j-1].post_type !== POSTS_ARR_CONTENT[j].post_type) {
              fetch_projects = fetch_projects + '<div class="col-md-12" style:"margin-top:1em;margin-bottom:1em;"><hr></div>';
            }
          }

          fetch_projects = fetch_projects +
          '<div class="col-sm-4 col-6 post_change_link" style="padding:1em;"' +
          'data-index="' + POSTS_ARR_CONTENT[j].ind +
          '">' +
            '<div class="background_color padding_medium" style=" border-top:1px solid ' + color_ +  ';">' +
            '  <div><p style="display:block;clear:both;float:right;color:' + color_ +  ';">'+ post_type +'</p></div>' +
            '  <div style="overflow:hidden;display:block;width:100%;"><img src="'+ img +'" alt="" style="width:100%;"></div>' +
            '<div class="">              <p style="padding-top:0.4em;">'+ ttl +'</p>            </div>           </div>          </div>';

        }
        $('.my_projects_items').html(fetch_projects);
        $('.post_change_link').on('click', function (event) {
          var that = this;
          $('.post_change_link').fadeIn();
          $(that).css('display', 'none');
          event.preventDefault();
          var index_of_change = parseInt($(this).data("index"));
          CURRENT_POST_IND = index_of_change;
          deliver_(['post_titles', 'paste_title', 'paste_content', 'warp_in_gallery_titles'],CURRENT_POST_IND,0);
        });
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

      if ( jobs[i] == 'warp_in_gallery_titles'  ) {
        var all_titles = [];
        for (var j = 0; j < POSTS_ARR_CONTENT.length; j++) {
          if (j === job_index) {
            for (var k = 0; k < POSTS_ARR_CONTENT[job_index].gallery_tags.length; k++) {
              var gal_tag = POSTS_ARR_CONTENT[job_index].gallery_tags[k][0];
              if (gal_tag != null) {
                all_titles.push(gal_tag);
              }
            }
            if (all_titles.length > 0) {
              var accum = '';
              for (var l = 0; l < all_titles.length; l++) {
                accum = accum + ' <a href="#" class="on_click_load_new_gall"> ' + all_titles[l] + ' </a> ';
                if (l!==(all_titles.length-1)) {
                  accum = accum + ' | ';
                }
              }
              $('.warp_in_gallery_titles').html(accum);
              $('.on_click_load_new_gall').on("click", function (event) {
                event.preventDefault();
                $('.on_click_load_new_gall').removeClass('a_hovered');
                $(this).addClass('a_hovered');
                deliver_('create_gallery', CURRENT_POST_IND , parseInt( $(this).index() )  );
              });
            }
          }
        }
      }

      if ( jobs[i] == 'create_gallery'  ) {


        gallery_nav = '<div data-target="#nav__0" data-slide-to="0" class="active" style="bottom:0%;">' +
          '<img src="http://milosciszaman.pl/wp-content/uploads/2017/12/22281935_1446576892085878_6620871302545168209_n-150x150-50x50.jpg"' +
          'alt="" style="height:5vh; margin-left:0.2em; margin-right:0.2em;">' +
        '</div>';

        gallery_inner = '    <div class="carousel-item active">' +
          '<img id="" class="d-block img-fluid gallery_img" data-src="" alt=""' +
        '    src="" data-holder-rendered="true"' +
        '  style="background-image:url(http://milosciszaman.pl/wp-content/uploads/2017/12/22281935_1446576892085878_6620871302545168209_n.jpg);">' +
          '</div>';

          $('.carousel-indicators').html(gallery_nav);

          $('.carousel-inner').html(gallery_inner);

      }

    }


  } //end of work function



});
