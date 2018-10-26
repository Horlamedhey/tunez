/*dashboard*/
(function ($) {
  $('#username1').slideToggle();
  $('#username2').slideToggle();
  $('#username3').slideToggle();
  $('#username4').slideToggle();

  $('#stats1').click(() => {
    $('#username1').slideToggle();
  });
  $('#stats2').click(() => {
    $('#username2').slideToggle();
  });
  $('#stats3').click(() => {
    $('#username3').slideToggle();
  });
  $('#stats4').click(() => {
    $('#username4').slideToggle();
  });


})(jQuery);