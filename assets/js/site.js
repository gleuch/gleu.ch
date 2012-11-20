jQuery(document).ready(function() {


  if (jQuery('.featured_images')) {
    jQuery('.featured_images').on('mouseover', function() {
      jQuery('.item_intro').addClass('lower');
    }).on('mouseout', function() {
      jQuery('.item_intro').removeClass('lower');
    });

    var els = jQuery('.featured_images .carousel').children(), n = els.size(), i;
    if (n > 1) {
      jQuery('.featured_images .carousel, .featured_images .carousel_buttons').addClass('running');
      carousel_index = 0;
      carousel_interval = setInterval(function() {carousel_rotate(1);}, carousel_timeout);

      jQuery('.carousel_buttons a.prev').on('click', function() {
        clearTimeout(carousel_interval);
        carousel_rotate(-1);
      });

      jQuery('.carousel_buttons a.next').on('click', function() {
        clearTimeout(carousel_interval);
        carousel_rotate(1);
      });
    } else {
      jQuery('.carousel_buttons').hide();
    }
  }


});


var carousel_index = 0, carousel_interval, carousel_timeout = 5000;

function carousel_rotate(dir) {
  if (!dir || dir === undefined) dir = 1;
  var els = jQuery('.featured_images .carousel').children(), next_index = dir + carousel_index;

  if (dir > 0) {
    if (next_index == els.size()) next_index = 0;
  } else {
    if (next_index < 0) next_index = (els.size() - 1);
  }

  var cur = jQuery(els[carousel_index]), nex = jQuery(els[next_index]);
  cur.addClass('hide');
  nex.removeClass('hide');
  carousel_index = next_index;
}