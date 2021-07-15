$(function() {
  $('#is-open').click(function() {
    $('#overlay').fadeIn();
    $('#g-nav').css('right', 0);
  });
  $('#is-close').on('click', function() {
    $('#overlay').fadeOut();
    $('#g-nav').css('right', '-100vw');

  })

});
