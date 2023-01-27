/*var wid = $(window).width(),
hei = $(window).height();
alert("width:" + wid +"px and height: " + hei + "px.")
*/

$(document).ready(function () {
  /*function bannerheight(){
	    var head_height = $("header").outerHeight(true);
	    $("body").css("padding-top",head_height + "px")
		$(".banner-sec").css("min-height","calc(100vh - " + head_height + "px)")
	};
	bannerheight();
	$(window).resize(bannerheight);*/

  $(".navbar-toggler").click(function () {
    $("html").toggleClass("show-menu");
  });

  function scrolling() {
    var sticky = $("header"),
      scroll = $(window).scrollTop();

    if (scroll >= 15) sticky.addClass("fixed");
    else sticky.removeClass("fixed");
  }
  scrolling();
  $(window).scroll(scrolling);

  // hide #back-top first
  $("#myBtn").hide();

  // fade in #back-top
  $(function () {
    $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {
        $("#myBtn").fadeIn();
      } else {
        $("#myBtn").fadeOut();
      }
    });

    // scroll body to 0px on click
    $("#myBtn").click(function () {
      $("body,html").animate(
        {
          scrollTop: 0,
        },
        1000
      );
      return false;
    });
  });
});

//cursor

$(".menu").click(function () {
  $(this).toggleClass("open");
});

// Owl-carousel Slider

$(document).ready(function () {
  $("#client-testimonial").owlCarousel({
    loop: true,
    margin: 35,
    nav: true,
    navText: [
      '<i class="fa-solid fa-chevron-left"></i>',
      '<i class="fa-solid fa-chevron-right"></i>',
    ],
    dots: true,
    stagePadding:10,
    responsive: {
      0: {
        items: 1,
      
      },
      600: {
        items: 2,
        margin: 10,
        stagePadding:0,
      },
      1200: {
        items: 3,
        margin: 20,
      },
    },
  });
});
