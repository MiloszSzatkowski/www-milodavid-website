console.log('components.js loaded');

!function(t){t.fn.bcSwipe=function(e){var n={threshold:50};return e&&t.extend(n,e),this.each(function(){function e(t){1==t.touches.length&&(u=t.touches[0].pageX,c=!0,this.addEventListener("touchmove",o,!1))}function o(e){if(c){var o=e.touches[0].pageX,i=u-o;Math.abs(i)>=n.threshold&&(h(),t(this).carousel(i>0?"next":"prev"))}}function h(){this.removeEventListener("touchmove",o),u=null,c=!1}var u,c=!1;"ontouchstart"in document.documentElement&&this.addEventListener("touchstart",e,!1)}),this}}(jQuery);

var CURRENT_POST_IND = 0;

jQuery(function($) {
  $(document).ready(function() {

    // SimpleBar
    $('.galleries').bcSwipe({ threshold: 50 });

    $('.content_styling img').on('click', function() {
      var that = this;
      var src = $(that).attr('src');
      $('body').append(
      '  <div class="modal-init full-page-modal" style="display:none;">' +
      '    <button type="button" class="close" aria-label="Close">' +
      '      <span aria-hidden="true">&times;</span>' +
      '    </button>' +
      '    <div id="" class="" style="background-image:url('+  src +
      '); background-size:contain;width:100%;height:100%;'+
      'background-repeat:no-repeat;background-position:center center;"></div>' +
      '  </div>'
      );
      $('.modal-init').fadeIn(400, function() {
      })
      $('.modal-init').on('click', function () {
        $('.modal-init').fadeOut(400, function() {
          $('.modal-init').remove();
        })();
      })
    });

    $('.next_project').on('click', function () {

      if (CURRENT_POST_IND === POSTS_ARR_CONTENT.length-1) {
        CURRENT_POST_IND = 0;
      } else {
        CURRENT_POST_IND = CURRENT_POST_IND + 1;
      }
      console.log(CURRENT_POST_IND);

      deliver_(['post_titles', 'paste_title', 'paste_content', 'warp_in_gallery_titles',  'create_gallery'],CURRENT_POST_IND);
    });

    $('.prev_project').on('click', function () {

      if (CURRENT_POST_IND === 0) {
        CURRENT_POST_IND = POSTS_ARR_CONTENT.length-1;
      } else {
        CURRENT_POST_IND = CURRENT_POST_IND - 1;
      }
      console.log(CURRENT_POST_IND);
      deliver_(['post_titles', 'paste_title', 'paste_content', 'warp_in_gallery_titles',  'create_gallery'],CURRENT_POST_IND);
    });

    deliver_(['post_titles', 'paste_title', 'paste_content', 'create_gallery','warp_in_gallery_titles'],CURRENT_POST_IND);

  });

  var job_in_progress = false;

  var only_clicked = false;

  function deliver_(jobs, job_index) {


    if (!job_in_progress) {
      job_in_progress = true;


          $("#contento").fadeOut(200, function() {
            $("#contento").fadeIn(500, function() {
            })
          })

          setTimeout(function () {
            for (var i = 0; i < jobs.length; i++) {

              if (  jobs[i] == 'post_titles' ) {
                var fetch_projects = '';
                for (var j = 0; j < POSTS_ARR_CONTENT.length; j++) {
                  var img = POSTS_ARR_CONTENT[j].thumbnail;
                  var ttl = POSTS_ARR_CONTENT[j].title;
                  var post_type = POSTS_ARR_CONTENT[j].post_type ;
                  var color_;

                  var am_of_gal = 0;
                  for (var df = 0; df < 10; df++) {
                    console.log(POSTS_ARR_CONTENT[job_index].gallery_tags[df][0]);
                    if(POSTS_ARR_CONTENT[j].gallery_tags[df][0] ) { am_of_gal++; }
                  }

                  if (am_of_gal === 1) {
                    am_of_gal = am_of_gal + ' gallery'
                  } else {
                    am_of_gal = am_of_gal + ' galleries'
                  }

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
                  '<a class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-6 post_change_link d-block" href="#post_t" style="padding:1em;"' +
                  'data-index="' + POSTS_ARR_CONTENT[j].ind +
                  '">' +
                    '  <div class="background_color padding_medium" style=" height: 100%; border-top:1px solid ' + color_ +  ';">' +
                    '  <div><p style="display:block;clear:both;float:right;color:' + color_ +  ';">'+ post_type +'</p></div>' +
                    '  <div style="overflow:hidden;display:block;width:100%;"><img src="'+ img +'" alt="" style="width:100%;"></div>' +
                    '  <div class="">    <p style="color:'+ color_ +'"> '+ am_of_gal + ' </p>  '+
                    '  <p style="padding-top:0.4em;">'+ ttl +'</p>   </div>           </div>          </a>';

                }
                $('.my_projects_items').html(fetch_projects);

                $('.post_change_link').on('click', function (event) {

                  var index_of_change = parseInt($(this).data("index"));
                  if (CURRENT_POST_IND !== index_of_change) {
                    CURRENT_POST_IND = index_of_change;
                    deliver_(['post_titles', 'paste_title', 'paste_content', 'warp_in_gallery_titles',  'create_gallery'],CURRENT_POST_IND);
                  }
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
                    $('.summary').html(POSTS_ARR_CONTENT[job_index].summary);
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
                      var nm_of_pictures = 0;
                      for (var w = 1; w < POSTS_ARR_CONTENT[job_index].gallery_tags[k].length; w++) {
                        if ( POSTS_ARR_CONTENT[job_index].gallery_tags[k][w] !== null ) {
                          nm_of_pictures++;
                        }
                      }
                      if (gal_tag != null) {
                        all_titles.push({tag: gal_tag, nm_pict: nm_of_pictures});
                      }
                    }
                    if (all_titles.length > 0) {
                      var accum = '';

                      var data_slide_ind = 0;
                      for (var l = 0; l < all_titles.length; l++) {

                        if (l>0) {
                        data_slide_ind++;
                          if (all_titles[l].tag != all_titles[l-1].tag) {
                            data_slide_ind = data_slide_ind + (all_titles[l-1].nm_pict-1);
                          }

                          accum = accum + ' <a href="#" class="on_click_load_new_gall" data-target="#nav__0" '+
                          'data-inner_html="' + all_titles[l].tag  + '" ' +   ' data-slide-to="'  + data_slide_ind +  '" > ' +
                          all_titles[l].tag + ' </a> ';
                        } else if (l===0) {
                          accum = accum + ' <a href="#" class="on_click_load_new_gall a_hovered" data-target="#nav__0" '+
                          'data-inner_html="' + all_titles[l].tag  + '" ' +   ' data-slide-to="'  + 0 +  '" > ' +
                          all_titles[l].tag + ' </a> ';
                        }

                        if (l!==(all_titles.length-1)) {
                          accum = accum + ' | ';
                        }
                      }
                      // console.log(accum);

                      $('.warp_in_gallery_titles').html(accum);
                      $('.on_click_load_new_gall').on("click", function (event) {
                        event.preventDefault();
                        only_clicked = true;
                        var that = this;
                        $('.on_click_load_new_gall').removeClass('a_hovered');
                        $(that).addClass('a_hovered');
                      });
                    }
                  }
                }
              }

              if ( jobs[i] == 'create_gallery'  ) {

                var gallery_objects = [];
                var gallery_objects_tags = [];
                for (var j = 0; j < POSTS_ARR_CONTENT.length; j++) {
                  if (j === job_index) {
                    for (var k = 0; k < POSTS_ARR_CONTENT[job_index].gallery_tags.length; k++) {

                      for (var l = 1; l < POSTS_ARR_CONTENT[job_index].gallery_tags[k].length; l++) {

                          var image_url = POSTS_ARR_CONTENT[job_index].gallery_tags[k][l];
                          if ((image_url != null) && (image_url != undefined)) {
                            gallery_objects_tags.push(POSTS_ARR_CONTENT[job_index].gallery_tags[k][0]);
                            gallery_objects.push(image_url);
                          }

                      }
                    }

                    // console.log(gallery_objects_tags);

                    var gallery_nav = ''; var gallery_inner = '';
                    if (gallery_objects.length > 0) {
                      for (var l = 0; l < gallery_objects.length; l++) {

                        if (l === 0) {
                          var active = 'active';
                        } else {
                          var active = ' ';
                        }

                        gallery_nav = gallery_nav + '<div data-target="#nav__0" data-slide-to="'  + l +  '" class=" '  + active +  '" style="bottom:0%;">'+
                          '<img src=" '+ gallery_objects[l] +
                          '" alt="" style=" margin-left:1em; margin-right:0.2em; opacity:0.5; ">' +
                        '</div>';

                        gallery_inner = gallery_inner + '    <div class="carousel-item ' + active + '" data-inner_html="'+ gallery_objects_tags[l] +' " '+
                        ' " style="padding-top:100px;padding-bottom:0.5%;">  ' +
                          '<span id="" class="d-block img-fluid gallery_img" data-src="" alt="" ' +
                        '    src="" data-holder-rendered="true"  ' +
                        '  style="background-image:url(' + gallery_objects[l] + ');" >'+
                          '  </span> </div> ';

                      }



                    }

                    $('.carousel-indicators').html(gallery_nav);
                    $('.carousel-inner').html(gallery_inner);


                    $('#nav__0').bind('slid.bs.carousel', function (e) {
                      if (!only_clicked) {
                        $('.on_click_load_new_gall').removeClass('a_hovered');

                        var this_ht = $('.carousel-inner .active ').data('inner_html');
                        var this_ht = $.trim(this_ht.toString());
                        var tot_arr = document.getElementsByClassName('on_click_load_new_gall');
                        var check = false;
                        var sett = [];
                        ind_= 0;
                        for (var q = 0; q < tot_arr.length; q++) {
                          sett.push($.trim(tot_arr[q].dataset.inner_html.toString()));
                        }
                          var arraycontainsturtles = (sett.indexOf(this_ht) > -1);
                        if (arraycontainsturtles) {
                            tot_arr[sett.indexOf(this_ht)].classList.add('a_hovered');
                        }
                      } else if(only_clicked) {
                        only_clicked = false;
                      }
                    });

                  }
                }

              }

            }

          }, 300);

          job_in_progress = false;
      }


  } //end of work function


});
