(function($) {
    // 드랍다운 메뉴 관련
    $(document).on('click', '.page-header .drop-open-btn', function() {
        $('body').addClass('open-dropdown');
    });
    $(document).on('click', '.dropdowns-menu .drop-close-btn', function() {
        $('body').removeClass('open-dropdown');
    });
    // 하위 메뉴 활성화 관련
    $(document).on("click", ".dropdowns-menu > .drop-container > ul > .has-child > a", function(e) {		
        if ($(this).parent().hasClass("active")) {
            $(this).parent().removeClass("active");
        } else {
            $(this).parent().siblings(".active").removeClass("active");
            $(this).parent().addClass("active");
        }
        e.preventDefault();
    });
})(jQuery);