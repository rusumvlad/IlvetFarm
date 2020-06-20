$(document).ready(function() {
   $("#carouselExampleIndicators").swiperight(function() {
      $(this).carousel('prev');
    });
   $("#carouselExampleIndicators").swipeleft(function() {
      $(this).carousel('next');
   });
});