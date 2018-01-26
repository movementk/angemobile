<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
</head>
<body class="sub"><!-- 폴더별 클레스 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- pgae-header -->
    <div class="page-header">
        <!-- 폴더별 타이틀 -->
        <div class="page-title">
            <h2>e-book</h2>
            <div class="btn-controls">
                <a href="#" class="prev">
                    <i class="icon-left-open-big">
                        <span class="sr-only">이전 페이지</span>
                    </i>
                </a>
                <a href="#" class="next">
                    <i class="icon-right-open-big">
                        <span class="sr-only">다음 페이지</span>
                    </i>
                </a>
            </div>
        </div>
        <!-- dropdowns-menu -->
        <button type="button" class="doropdown-btn"></button>
        <div class="dropdowns-menu">
            <div class="drop-container">
                <ul>
                    <li><a href="#">menu</a></li>
                    <li class="has-child">
                        <a href="#">앙쥬맘 노하우</a>
                        <ul>
                            <li><a href="#">전시/행사</a></li>
                            <li><a href="#">전시/행사</a></li>
                            <li><a href="#">전시/행사</a></li>
                            <li><a href="#">전시/행사</a></li>
                            <li><a href="#">전시/행사</a></li>
                        </ul>
                    </li>
                    <li class="has-child">
                        <a href="#">앙쥬맘 노하우</a>
                        <ul>
                            <li><a href="#">전시/행사</a></li>
                            <li><a href="#">전시/행사</a></li>
                            <li><a href="#">전시/행사</a></li>
                            <li><a href="#">전시/행사</a></li>
                            <li><a href="#">전시/행사</a></li>
                        </ul>
                    </li>
                    <li><a href="#">menu</a></li>
                    <li><a href="#">menu</a></li>
                    <li><a href="#">menu</a></li>
                </ul>
            </div>
        </div>
    </div>
    
    <!-- sub content start -->
    <main id="content"><!-- 페이지 클레스 -->
        <section>
            <div class="container">
                <!-- 페이지 타이틀 -->
                <div class="section-header">
                    <h3 class="section-title">당첨자 발표</h3>
                    <p class="summary">아이디가 기억나지 않으세요?  본인확인 후 아이디를 확인하실 수 있습니다.</p>
                </div>
                <div class="section-content">
                    
                </div>
            </div>
        </section>
    </main>
    <!--dropdown-open-->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
    <script src="/assets/js/common.js"></script>
    <script>
        (function($) {
            // 드랍다운 메뉴 관련
            $(document).on('click', '.page-header .doropdown-btn', function() {
                console.log('a')
                $('.page-header').addClass('dropdown-open');
                $('.doropdown-btn').addClass('open-btn');
            });
            $(document).on('click', '.page-header .open-btn', function() {
                $('.page-header').removeClass('dropdown-open');
                $('.doropdown-btn').removeClass('open-btn');
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
    </script>
</body>
</html>