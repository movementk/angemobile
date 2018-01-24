<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/mypage.css" rel="stylesheet">
<link rel="stylesheet" property="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" type="text/css">
</head>
<body class="sub mypage"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- pgae-header -->
    <div class="page-header">
        <!-- 폴더별 타이틀 -->
        <h2>주문현황</h2>
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
    
    <!-- sub content start -->
    <main id="content" class="order-info"><!-- 페이지명 클래스 -->
        <div class="container">
            <section class="mileage-order">
                <div class="section-header">
                    <div class="search-date">
                        <form action="#">
                            <div class="calendar">
                                <div class="form-group">
                                    <input type="text" id="datepicker1" class="form-control">
                                    <label for="datepicker1">
                                        <i class="icon-calendar-1"></i>
                                    </label>
                                </div>
                                <span>~</span>
                                <div class="form-group">
                                    <input type="text" id="datepicker2" class="form-control">
                                    <label for="datepicker2">
                                        <i class="icon-calendar-1"></i>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group search">
                                <input type="text" id="date-search" class="form-control" placeholder="검색어를 입력해 주세요">
                                <label for="date-search" class="sr-only">검색어를 입력하세</label>
                            </div>
                            <div class="btn-area">
                                <p>
                                    <button class="btn btn-lg btn-pink">조회하기</button>
                                </p>
                            </div>
                        </form>
                    </div>
                    <h3>마일리지몰 주문현황</h3>
                </div>
                <div class="section-content">
                    <article class="board-type-4">
                        <ul>
                            <li>
                                <div class="list-header">
                                    <a href="#">
                                        <figure>
                                            <img src="/assets/images/sub/img_product01.png" alt="">
                                        </figure>
                                        <p class="item-title">
                                            Botanical Therapy 스텝원 베이비치약 (무불소, 블루베리향) 
                                        </p>
                                    </a>
                                </div>
                                <div class="details-info">
                                    <dl>
                                        <dt>수량</dt>
                                        <dd>1</dd>
                                        <dt>재고</dt>
                                        <dd>있음</dd>
                                        <dt>적립금</dt>
                                        <dd>630</dd>
                                        <dt>가격</dt>
                                        <dd>71,900</dd>
                                    </dl>
                                    <div class="btn-area">
                                        <a href="#" class="btn btn-xs btn-white" role="button">취소</a>
                                        <a href="#" class="btn btn-xs btn-white" role="button">문의</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="list-header">
                                    <a href="#">
                                        <figure>
                                            <img src="/assets/images/sub/img_product01.png" alt="">
                                        </figure>
                                        <p class="item-title">
                                            Botanical Therapy 스텝원 베이비치약 (무불소, 블루베리향) 
                                        </p>
                                    </a>
                                </div>
                                <div class="details-info">
                                    <dl>
                                        <dt>수량</dt>
                                        <dd>1</dd>
                                        <dt>재고</dt>
                                        <dd>있음</dd>
                                        <dt>적립금</dt>
                                        <dd>630</dd>
                                        <dt>가격</dt>
                                        <dd>71,900</dd>
                                    </dl>
                                    <div class="btn-area">
                                        <a href="#" class="btn btn-xs btn-white" role="button">취소</a>
                                        <a href="#" class="btn btn-xs btn-white" role="button">문의</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <nav class="paging" aria-label="Page navigation">
                            <ul class="pagination">
                                <li class="first">
                                    <a href="#" aria-label="Previous">
                                        <i class="icon-angle-double-left"></i>
                                    </a>
                                </li>
                                <li class="prev">
                                    <a href="#" aria-label="Previous">
                                        <i class="icon-angle-left"></i>
                                    </a>
                                </li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li class="next">
                                    <a href="#" aria-label="Next">
                                        <i class="icon-angle-right"></i>
                                    </a>
                                </li>
                                <li class="last">
                                    <a href="#" aria-label="Next">
                                        <i class="icon-angle-double-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </article>
                </div>
            </section>
            <section class="big-deal">
                <h3>앙주빅딜 주문현황</h3>
                <article class="board-type-4">
                    <ul>
                        <li>
                            <div class="list-header">
                                <a href="#">
                                    <figure>
                                        <img src="/assets/images/sub/img_product01.png" alt="">
                                    </figure>
                                    <p class="item-title">
                                        Botanical Therapy 스텝원 베이비치약 (무불소, 블루베리향) 
                                    </p>
                                </a>
                            </div>
                            <div class="details-info">
                                <dl>
                                    <dt>수량</dt>
                                    <dd>1</dd>
                                    <dt>재고</dt>
                                    <dd>있음</dd>
                                    <dt>적립금</dt>
                                    <dd>630</dd>
                                    <dt>가격</dt>
                                    <dd>71,900</dd>
                                </dl>
                                <div class="btn-area">
                                    <a href="#" class="btn btn-xs btn-white" role="button">취소</a>
                                    <a href="#" class="btn btn-xs btn-white" role="button">문의</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="list-header">
                                <a href="#">
                                    <figure>
                                        <img src="/assets/images/sub/img_product01.png" alt="">
                                    </figure>
                                    <p class="item-title">
                                        Botanical Therapy 스텝원 베이비치약 (무불소, 블루베리향) 
                                    </p>
                                </a>
                            </div>
                            <div class="details-info">
                                <dl>
                                    <dt>수량</dt>
                                    <dd>1</dd>
                                    <dt>재고</dt>
                                    <dd>있음</dd>
                                    <dt>적립금</dt>
                                    <dd>630</dd>
                                    <dt>가격</dt>
                                    <dd>71,900</dd>
                                </dl>
                                <div class="btn-area">
                                    <a href="#" class="btn btn-xs btn-white" role="button">취소</a>
                                    <a href="#" class="btn btn-xs btn-white" role="button">문의</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <nav class="paging" aria-label="Page navigation">
                        <ul class="pagination">
                            <li class="first">
                                <a href="#" aria-label="Previous">
                                    <i class="icon-angle-double-left"></i>
                                </a>
                            </li>
                            <li class="prev">
                                <a href="#" aria-label="Previous">
                                    <i class="icon-angle-left"></i>
                                </a>
                            </li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li class="next">
                                <a href="#" aria-label="Next">
                                    <i class="icon-angle-right"></i>
                                </a>
                            </li>
                            <li class="last">
                                <a href="#" aria-label="Next">
                                    <i class="icon-angle-double-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </article>
            </section> 
        </div>
    </main>
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
    <script src="/assets/js/common.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(function($) {
            $.datepicker.setDefaults({
                dateFormat: 'yy-mm-dd',
                prevText: '이전 달',
                nextText: '다음 달',
                monthNames: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
                monthNamesShort: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
                dayNames: ['일', '월', '화', '수', '목', '금', '토'],
                dayNamesShort: ['일', '월', '화', '수', '목', '금', '토'],
                dayNamesMin: ['일', '월', '화', '수', '목', '금', '토'],
                showMonthAfterYear: true,
                yearSuffix: '년'
            });
            $('#datepicker1').datepicker();
            $('#datepicker2').datepicker();
        }(jQuery));
    </script>
</body>
</html>