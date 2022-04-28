let slideIndex2 = 1;
showSlides2(slideIndex2);


function plusSlides2(n) {
  showSlides2(slideIndex2 += n);
}


function currentSlide2(n) {
  showSlides2(slideIndex2 = n);
}

function showSlides2(n) {
  let a;
  let slides2 = document.getElementsByClassName("slider-game");
  let dots2 = document.getElementsByClassName("dot-2");
  if (n > slides2.length) {slideIndex2 = 1}
  if (n < 1) {slideIndex2 = slides2.length}
  for (a = 0; a < slides2.length; a++) {
    slides2[a].style.display = "none";
  }
  for (a = 0; a < dots2.length; a++) {
    dots2[a].className = dots2[a].className.replace(" active", "");
  }
  slides2[slideIndex2-1].style.display = "block";
  dots2[slideIndex2-1].className += " active";
}