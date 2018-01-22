<?php require_once($_SERVER["DOCUMENT_ROOT"]."./inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/mypage.css" rel="stylesheet">
</head>
<body class="sub mypage"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."./inc/header.php"); ?>
    <!-- pgae-header -->
    <div class="page-header">
        <!-- 폴더별 타이틀 -->
        <h2>마일리지</h2>
        <div class="btn-controls">
            <a href="/mypage/message_list.php" class="prev">
                <i class="icon-left-open-big">
                    <span class="sr-only">이전 페이지</span>
                </i>
            </a>
            <a href="/mypage/order_info.php" class="next">
                <i class="icon-right-open-big">
                    <span class="sr-only">다음 페이지</span>
                </i>
            </a>
        </div>
    </div>
    
    <!-- sub content start -->
    <main id="content" class="mileage"><!-- 페이지명 클래스 -->
        <div class="container">
            <div class="mileage-view">
                <div class="mileage-info">
                    <dl>
                        <dt>관리자 님의 총 마일리지</dt>
                        <dd>999,999,999 P</dd>
                    </dl>
                </div>
                <div class="mileage-info">
                    <dl>
                        <dt>관리자 님의 <i>사용가능</i> 마일리지</dt>
                        <dd>9,999 P</dd>
                    </dl>
                </div>
            </div>
            <div class="mileage-check">
                <div class="search-date">
                    <div class="form-group date-year">
                        <dl>
                            <dt>연도별 조회</dt>
                            <dd>
                                <select class="form-control">
                                    <option>2018</option>
                                    <option>2017</option>
                                    <option>2016</option>
                                </select>
                            </dd>
                        </dl>
                    </div>
                    <div class="form-group date-day">
                        <dl>
                            <dt>월별 조회</dt>
                            <dd>
                                <select class="form-control">
                                    <option>11</option>
                                    <option>10</option>
                                    <option>9</option>
                                </select>
                            </dd>
                        </dl>
                    </div>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-lg btn-pink" role="button">조회하기</a>
                        </p>
                    </div>
                </div>
                <article class="board-type-3">
                    <div class="article-header">
                        <ul>
                            <li>적립내용</li>
                            <li class="mileage">적립금</li>
                        </ul>
                    </div>
                    <div class="article-content">
                        <div class="table-wrap">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="subject"><a href="#">딸램의 잠투정도 이제 클라우드비로 안녕~</a></td>
                                        <td class="mileage"><span>333</span> P</td>
                                    </tr>
                                    <tr>
                                        <td class="subject"><a href="#">[아기크림] 쫀득한 킨더퍼페츠 모짜렐라 크림 고보습[아기크림] 쫀득한 킨더퍼페츠 모짜렐라 크림 고보습~</a></td>
                                        <td class="mileage"><span>333</span> P</td>
                                    </tr>
                                    <tr>
                                        <td class="subject"><a href="#">건강식품앱 추천:: 유비케어 건강한알이면 영유아영.</a></td>
                                        <td class="mileage"><span>333</span> P</td>
                                    </tr>
                                    <tr>
                                        <td class="subject"><a href="#">[아기크림] 쫀득한 킨더퍼페츠 모짜렐라 크림 고보습...</a></td>
                                        <td class="mileage"><span>333</span> P</td>
                                    </tr>
                                    <tr>
                                        <td class="subject"><a href="#">출산선물로 좋은 모윰젖병소독기 사용해봤어요</a></td>
                                        <td class="mileage"><span>333</span> P</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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
                    </div>
                </article>
            </div>
        </div>
    </main>
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."./inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."./inc/docfoot.php"); ?>
    <script src="/assets/js/common.js"></script>
</body>
</html>