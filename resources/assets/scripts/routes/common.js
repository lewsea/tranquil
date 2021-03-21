export default {
  init() {
    jQuery(".recent-smol").slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      dots: false,
      autoplay: true,
      autoplaySpeed: 4000,
    });

    jQuery(".book-slick-container").slick({
      infinite: true,
      slidesToShow: 4,
      slidesToScroll: 1,
      dots: false,
      autoplay: true,
      autoplaySpeed: 4000,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: false,
          },
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
          },
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
      ],
    });

    jQuery(function ($) {
      const btn = $("#scroll-top-button");

      $(window).scroll(function () {
        if ($(window).scrollTop() > 300) {
          btn.addClass("show");
        } else {
          btn.removeClass("show");
        }
      });

      btn.on("click", function (e) {
        e.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, "300");
      });
    });

    // Show the first tab and hide the rest
    jQuery("#navs-tab li:first-child").addClass("active");
    jQuery(".tab-content").hide();
    jQuery(".tab-content:first").show();
    jQuery("#navs-tab li:first-child .bookmark").addClass("bookmark-active");

    // Click function
    jQuery("#navs-tab li").click(function () {
      jQuery("#navs-tab li").removeClass("active");
      jQuery("#navs-tab li .bookmark").removeClass("bookmark-active");
      jQuery(this).find(".bookmark").addClass("bookmark-active");
      //   jQuery(this).addClass("bookmark-active");
      jQuery(".tab-content").hide();

      var activeTab = jQuery(this).find("a").attr("href");
      jQuery(activeTab).show();
      return false;
    });
  },
  finalize() {
    var colors = [
      "#749ee8",
      "#53f2d6",
      "#5cbef7",
      "#907cc9",
      "#85F9B3",
      "#41E8F0",
      "#98E8F1",
    ];
    jQuery(".book").each(function () {
      jQuery(this).css(
        "background-color",
        colors[Math.floor(Math.random() * colors.length)]
      );
    });
  },
};
