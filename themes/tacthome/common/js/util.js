$(window).on('load resize', function(){ 
  $('#pagetop').hide();
});

$(function(){
	$('#pagetop a').on('click', function(){
		$('body,html').stop().animate({scrollTop:0}, 500);
	});
});

$(window).scroll(function(){
  var ptop = $('#pagetop');
  
  if ($(this).scrollTop() > 0) {
    ptop.fadeIn();
  } else {
    ptop.fadeOut();
  }
});