function Animate() {
 
  $(".scroll-down").addClass("animated  infinite bounce");
  
   $(".scroll-to-top").delay(3000).addClass("animated shake");
}

  // scrolling to links on page
  $('a[href^="#"]').on('click', function(event) {
    var target = $(this.getAttribute('href'));
    if (target.length) {
      event.preventDefault();
      $('html, body').stop().animate({
        scrollTop: target.offset().top
      }, 1000);
    }
  });
});