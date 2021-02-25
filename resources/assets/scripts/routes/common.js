export default {
  init() {
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
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
