(function($) {
    // gnb nav
    $(document).on("click", "#header .btn-open-nav", function(e) {
        $("body").addClass("gnb-opened");
        e.preventDefault();
    });
    $(document).on("click", "#gnb-nav .nav-backdrop, #gnb-nav .btn-close", function(e) {
        $("body").removeClass("gnb-opened");
    });

    // mypage nav
    $(document).on("click", "#header .btn-open-mypage", function(e) {
        $("body").addClass("mypage-opened");
        e.preventDefault();
    });
    $(document).on("click", "#mypage-nav .nav-backdrop, #mypage-nav .btn-close", function(e) {
        $("body").removeClass("mypage-opened");
    });


    // 메뉴 관련 
    $(document).on("click", "#gnb-nav .nav-container .nav-body .gnb-menu > ul > li > a", function(e) {		
        if ($(this).parent().hasClass("active")) {
            $(this).parent().removeClass("active");
        } else {
            $(this).parent().siblings(".active").removeClass("active");
            $(this).parent().addClass("active");
        }
        e.preventDefault();
    });
})(jQuery);