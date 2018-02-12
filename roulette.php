<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/sub_popup.css" rel="stylesheet">
</head>
<body class="sub roulette"><!-- 폴더별 클레스 -->
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
        <button type="button" class="drop-open-btn">
            <span class="sr-only">메뉴 열기</span>
        </button>
    </div>
    
    <!-- dropdowns-menu -->
    <div class="dropdowns-menu">
        <div class="drop-container">
            <ul>
                <li><a href="#">E-BOOK</a></li>
                <li class="has-child">
                    <a href="#">임신/출산</a>
                    <ul>
                        <li><a href="#">주차별 정보</a></li>
                        <li><a href="#">임신준비&amp;태교</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <button type="button" class="drop-close-btn">
            <span class="sr-only">메뉴 닫기</span>
        </button>
    </div>
    
    <!-- sub content start -->
    <main id="content"><!-- 페이지 클레스 -->
        <div class="container">
            <article class="roulette-event">
                <div class="article-header">
                    <h3><img src="/assets/images/roulette/roulette_title.png" alt=""></h3>
                    <p>하루 한번! 룰렛만 돌리면 상품이 쏟아집니다.</p>
                    <small> 추가 참여는 마일리지1,000점에 1회씩<br>추가 3 회 제공 (마일리지 소진용)</small>
                    <dl>
                        <dt>이벤트 기간</dt>
                        <dd>2/1~2/14까지</dd>
                    </dl>
                </div>
                <div class="article-content">
                    <p class="fix-angle">
                        <img src="/assets/images/roulette/fix_angle.png" alt="">
                    </p>
                    <div class="roulette-board">
                        <img src="/assets/images/roulette/roulette_board.png" alt="">
                        <p class="roulette-btn">
                            <a href="#">
                                <img src="/assets/images/roulette/btn_roulette.png" alt="">
                            </a>
                        </p>
                    </div>
                </div>
            </article>

        </div>
    </main>
    
    <a href="#layerPopup" class="btn-popup" role="button">팝업버튼</a>
    
    <!-- layer-popup -->
    <div class="layer-popup roulette-result" id="layerPopup">
        <div class="pop-backdrop"></div>
        <div class="popup-area">
            <div class="layer-container">
                <div class="content">
                    <div class="pop-header">
                        <a class="btn-pop-close" href="#none"><img src="/assets/images/community/btn_close.png" alt=""></a>
                    </div>
                    <div class="pop-body">
                        <strong>아쉽지만<br>다음기회에...</strong>
                        <p>마일리지를 사용해 다시<br>도전해 보세요<i>!</i></p>
                        <div class="btn-area">
                            <p>
                                <a href="#" class="btn btn-sm btn-pink" role="button">확인</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
    <script src="/assets/js/common.js"></script>
    <script>
        $(function($){
            // 팝업 레이어
            $('.btn-popup').on('click', function(e) {
                e.preventDefault();
                
                var el = $($(this).attr('href'));
                
                if (!el.hasClass('open')) {
                    el.addClass('open');
                } else {
                    el.removeClass('open');
                }
            });

            $('.btn-pop-close, .pop-backdrop').on('click', function(e) {
                $(this).closest('.layer-popup').removeClass('open');
            });
        }(jQuery));
    </script>
</body>
</html>