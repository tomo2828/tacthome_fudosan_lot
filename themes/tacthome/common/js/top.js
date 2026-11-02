$(window).on('load resize', function(){
  
	var navH = $('nav').height();
  $('main').css({'padding-top':navH});

});

$(function(){
	var urlHash = location.hash;
	var navH = $('nav').height();
	if(urlHash) {
			$('body,html').stop().scrollTop(0);
			setTimeout(function(){
					var target = $(urlHash);
					var position = target.offset().top - navH;
					$('body,html').stop().animate({scrollTop:position}, 400);
			}, 100);
	}
  $('a[href^="#"]').on('click', function(){
      var href = $(this).prop("href");
      var hrefPageUrl = href.split("#")[0];
      var currentUrl = location.href;
      var currentUrl2 = currentUrl.split("#")[0];
      if(hrefPageUrl == currentUrl2){
          href = href.split("#");
          href = href.pop();
          href = "#" + href;
          var target = $(href == "#" || href == "" ? 'html' : href),
            position = target.offset().top - navH;
          $('body,html').stop().animate({scrollTop:position}, 500);
          return false;
      }
  });
});

$(window).on('load resize', function(){
  var fixnav = $('#fix_nav');
  var navheight = $('nav').offset().top;
  
  $(window).scroll(function(){
    var value = $(this).scrollTop();
    if (value > navheight + 50) {
      fixnav.addClass('scroll');
    } else {
      fixnav.removeClass('scroll');
    }
  });
});