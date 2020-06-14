/*************REDIRECTS************/
//profile link
function profile() {
    window.location.href = "http://ahthomas9.webfactional.com/";
};

//github link
function github() {
    window.location.href = "https://github.com/ahthomas9";
};

/*************CAROUSEL************/
var slideIndex = 0;

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("skinCare");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 4500); //change pic 4.5 seconds 
}
/*************SLIDE************/
$(document).ready(function() {
  $('a[href^="#"]').on("click", function(e) {
    e.preventDefault(); //stop the snap-to
    
    var $anchor = $(this);
    var nav = $($anchor.attr('href'));

    if (nav.length) {
      $("html,body").stop().animate({
        scrollTop: $($anchor.attr('href')).offset().top
      }, 1000, 'swing');
    }
  });
});