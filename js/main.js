$(function(){	

  //ページ内リンクアニメーション
  $(function(){
	  $('a[href^="#"]').click(function(){
	    var time = 500;
	    var href= $(this).attr("href");
	    var target = $(href == "#" ? 'html' : href);
	    var distance = target.offset().top;
	    $("html, body").animate({scrollTop:distance}, time, "swing");
	    return false;
	  });
	});

  //ページトップアニメーション
  $(function() {
  var pagetop = $('#pagetop');
  $(window).scroll(function () {
    if ($(this).scrollTop() > 20) {
      pagetop.fadeIn();
     }else {
      pagetop.fadeOut();
    }
  });
  pagetop.click(function () {
    $('body, html').animate({ scrollTop: 0 }, 500);
    return false;
  });
});

});
