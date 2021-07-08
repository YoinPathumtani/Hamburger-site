$(function() {
  $('#is_open').on('click', function() {
    $('.l-header-menu').css('right', 0);
  })
  $('#is_close').on('click', function() {
    $('.l-header-menu').css('right', '-100%');
  })
});
