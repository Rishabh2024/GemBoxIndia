$(document).ready(function () {
  "user strict";

  $(".sidebar-tab a").on("click", function () {
    $(this).addClass("active").siblings().removeClass("active");
  })
  $(".sm-menubar-btn, .close-sidebar-btn").on("click", function () {
    $(".leftsidebar").toggleClass("show");
    $("html").toggleClass("noscroll")
    $(".backdrop").toggleClass("show");

  })
  $(".collection-btn").on("click", function () {
    $(".leftsidebar").toggleClass("show");

  })
  $(".article-btn").on("click", function () {
    $(".leftsidebar").toggleClass("show");

  })

  $(".showcase-carousel").owlCarousel({
    margin: 0,
    loop: true,
    dots: true,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1
      },
      480: {
        items: 1
      },
      768: {
        items: 1
      },
      1024: {
        items: 1
      }
    }
  })
  $(".product-carousel").owlCarousel({
    margin: 0,
    loop: true,
    dots: false,
    autoplay: false,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1,
        dots: true
      },
      480: {
        items: 2
      },
      768: {
        items: 2
      },
      1024: {
        items: 3
      }
    }
  })
  $(".products-carousel").owlCarousel({
    margin: 0,
    loop: true,
    dots: false,
    autoplay: false,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1,
        dots: true
      },
      480: {
        items: 2
      },
      768: {
        items: 2
      },
      1024: {
        items: 2
      }
    }
  })
})

window.onscroll = function () { stickyFunc() };


let header = document.getElementById("topHeader");

let sticky = header.offsetTop;

const stickyFunc = () => {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky")
  }
}

document.addEventListener("DOMContentLoaded", function () {
  var lazyloadImages = document.querySelectorAll("img.lazy");
  var lazyloadThrottleTimeout;

  function lazyload() {
    if (lazyloadThrottleTimeout) {
      clearTimeout(lazyloadThrottleTimeout);
    }

    lazyloadThrottleTimeout = setTimeout(function () {
      var scrollTop = window.pageYOffset;
      lazyloadImages.forEach(function (img) {
        if (img.offsetTop < (window.innerHeight + scrollTop)) {
          img.src = img.dataset.src;
          img.classList.remove('lazy');
        }
      });
      if (lazyloadImages.length == 0) {
        document.removeEventListener("scroll", lazyload);
        window.removeEventListener("resize", lazyload);
        window.removeEventListener("orientationChange", lazyload);
      }
    }, 20);
  }

  document.addEventListener("scroll", lazyload);
  window.addEventListener("resize", lazyload);
  window.addEventListener("orientationChange", lazyload);
});

let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides((slideIndex += n));
}

function currentSlide(n) {
  showSlides((slideIndex = n));
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("imgSlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
  captionText.innerHTML = dots[slideIndex - 1].alt;
}

function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
// shopcart_tab
        document.addEventListener('DOMContentLoaded', function () {
            var hasChildElements = document.querySelectorAll('.has_child');
            hasChildElements.forEach(function (element) {
                element.addEventListener('click', function (event) {
                    event.preventDefault(); // To prevent default anchor behavior

                    var clickedUl = this.querySelector('ul');
                    var allUlElements = document.querySelectorAll('.has_child ul');

                    // Close all open ul elements
                    allUlElements.forEach(function (ul) {
                        if (ul !== clickedUl) {
                            ul.style.display = 'none';
                        }
                    });

                    // Toggle display of clicked ul
                    clickedUl.style.display = (clickedUl.style.display === 'block' ? 'none' : 'block');
                });
            });
        });
        $(document).ready(function () {
            $('.has_child').click(function (event) {
                event.preventDefault(); // To prevent default anchor behavior

                var clickedUl = $(this).find('ul');
                var allUlElements = $('.has_child ul').not(clickedUl);

                // Close all open ul elements except the clicked one
                allUlElements.removeClass('slide-right');

                // Toggle sliding effect for clicked ul
                clickedUl.toggleClass('slide-right');
            });
        });


// shopcart_tab