

$(document).ready(function(){
  var $openNavEl = $('#openNavMenu'), $navMenu = $('#mainNav-links');

  $openNavEl.bind('click',function(){
    $navMenu.slideToggle('fast');
  })

  $(window).resize(function(){
    var windowWidth = $(window).innerWidth();
    setTimeout(function(){
      if(windowWidth <= 768){
          $navMenu.attr('style','')
      }
    },10)
  })

  $('.page-me a').bind('click',function(e){
    var $anchor = $(this);
    e.preventDefault();
    var thisUrl = $anchor.attr('href');
    $('html, body').animate({
      scrollTop:$(thisUrl).offset().top
    }, 500)
  })


  // $(window).on('scroll', function(event) {
  //   var scrollValue = $(window).scrollTop();
  //   var windowHeight = $(document).height();
  //   if (scrollValue - 100  >= (windowHeight)) {
  //     $('.scrollDown').hide();
  //   } else {
  //     $('.scrollDown').show();
  //   }
  //   console.log(scrollValue)
  //   console.log(windowHeight)
  //   console.log($(window).height())
  // });
})
