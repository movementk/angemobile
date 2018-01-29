<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
</head>
<body class="sub"><!-- 폴더별 클레스 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- pgae-header -->
    <div class="page-header">
        <!-- 폴더별 타이틀 -->
        <div class="page-title">
            <h2>검색</h2>
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
    </div>
    
    <!-- sub content start -->
    <main id="content"><!-- 페이지 클레스 -->
        <section class="search-result">
            <div class="container">
                <div class="section-header">
                    <h3 class="section-title">검색결과</h3>
                </div>
                <div class="section-content">
                    <article class="s-stroy">
                        <div class="article-header">
                            <h3 class="article-title">스토리</h3>
                        </div>
                        <div class="article-content">
                            <div class="story-list list-type-1">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <figure>
                                                <img src="/assets/images/e_magazine/img_week_list.jpg" alt="">
                                                <figcaption>
                                                    <ul class="icon-list">
                                                        <li class="like">123</li>
                                                        <li class="comment">123</li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                            <div class="details">
                                                <p>출산준비</p>
                                                <h4>산후우울증 자가진단법</h4>
                                                <ul class="icon-list">
                                                    <li class="user">홍길동</li>
                                                    <li class="date">2017-10-10</li>
                                                </ul>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <figure>
                                                <img src="/assets/images/e_magazine/img_week_list.jpg" alt="">
                                                <figcaption>
                                                    <ul class="icon-list">
                                                        <li class="like">123</li>
                                                        <li class="comment">123</li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                            <div class="details">
                                                <p>출산준비</p>
                                                <h4>출산 전 몸매로 컴백! 산후 다이어트</h4>
                                                <ul class="icon-list">
                                                    <li class="user">홍길동</li>
                                                    <li class="date">2017-10-10</li>
                                                </ul>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <figure>
                                                <img src="/assets/images/e_magazine/img_week_list.jpg" alt="">
                                                <figcaption>
                                                    <ul class="icon-list">
                                                        <li class="like">123</li>
                                                        <li class="comment">123</li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                            <div class="details">
                                                <p>출산준비</p>
                                                <h4>제왕절개수술 정말 정말 흉터 자국이 고민이에요</h4>
                                                <ul class="icon-list">
                                                    <li class="user">홍길동</li>
                                                    <li class="date">2017-10-10</li>
                                                </ul>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <figure>
                                                <img src="/assets/images/e_magazine/img_week_list.jpg" alt="">
                                                <figcaption>
                                                    <ul class="icon-list">
                                                        <li class="like">123</li>
                                                        <li class="comment">123</li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                            <div class="details">
                                                <p>출산준비</p>
                                                <h4>산후우울증 자가진단법</h4>
                                                <ul class="icon-list">
                                                    <li class="user">홍길동</li>
                                                    <li class="date">2017-10-10</li>
                                                </ul>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- paging -->
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
                    <article class="s-community">
                        <div class="article-header">
                            <h3 class="article-title">커뮤니티</h3>
                        </div>
                        <div class="article-content">
                            <div class="table-wrap">
                                <table class="table table-bordered">
                                    <colgroup>
                                        <col style="width: 55%">
                                        <col style="width: 20%">
                                        <col style="width: 25%">
                                    </colgroup>
                                    <thead>
                                        <tr>
                                            <th>제목</th>
                                            <th>작성자</th>
                                            <th>작성일</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="#">[당첨자 발표] 당첨자 발표 리스트입니다. <span class="icon icon-new"></span><span class="icon icon-lock"></span><span class="icon icon-file"></span><span class="icon icon-img"></span></a>
                                            </td>
                                            <td>홍길동</td>
                                            <td class="date">2017-12-01</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#">[당첨자 발표] 당첨자 발표 리스트입니다.</a>
                                            </td>
                                            <td>홍길동</td>
                                            <td class="date">2017-12-01</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#">[당첨자 발표] 당첨자 발표 리스트입니다.</a>
                                            </td>
                                            <td>홍길동</td>
                                            <td class="date">2017-12-01</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#">[당첨자 발표] 당첨자 발표 리스트입니다.</a>
                                            </td>
                                            <td>홍길동</td>
                                            <td class="date">2017-12-01</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#">[당첨자 발표] 당첨자 발표 리스트입니다.</a>
                                            </td>
                                            <td>홍길동</td>
                                            <td class="date">2017-12-01</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#">[당첨자 발표] 당첨자 발표 리스트입니다.</a>
                                            </td>
                                            <td>홍길동</td>
                                            <td class="date">2017-12-01</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- paging -->
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
                    <article class="s-photo-list">
                        <div class="article-header">
                            <h3 class="article-title">사진게시판</h3>
                        </div>
                        <div class="article-content">
                            <ul class="sponsor-list">
                                <li>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <figure>
                                                <img src="/assets/images/community/img_sponsor.jpg" alt="">
                                            </figure>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="details">
                                                <h3>메리포핀스 스튜디오</h3>
                                                <ul>
                                                    <li class="contact"><a href="tel:12341234">1234-1234</a></li>
                                                    <li class="home-page"><a href="http://www.ange.co.kr/main" target="_blank">http://www.ange.co.kr/main</a></li>
                                                </ul>
                                                <p>산후조리원 퇴소 후 집으로 돌아왔다. 충분한 영양섭취가 중요하...</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <figure>
                                                <img src="/assets/images/community/img_sponsor.jpg" alt="">
                                            </figure>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="details">
                                                <h3>메리포핀스 스튜디오</h3>
                                                <ul>
                                                    <li class="contact"><a href="tel:12341234">1234-1234</a></li>
                                                    <li class="home-page"><a href="http://www.ange.co.kr/main" target="_blank">http://www.ange.co.kr/main</a></li>
                                                </ul>
                                                <p>산후조리원 퇴소 후 집으로 돌아왔다. 충분한 영양섭취가 중요하...</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <figure>
                                                <img src="/assets/images/community/img_sponsor.jpg" alt="">
                                            </figure>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="details">
                                                <h3>메리포핀스 스튜디오</h3>
                                                <ul>
                                                    <li class="contact"><a href="tel:12341234">1234-1234</a></li>
                                                    <li class="home-page"><a href="http://www.ange.co.kr/main" target="_blank">http://www.ange.co.kr/main</a></li>
                                                </ul>
                                                <p>산후조리원 퇴소 후 집으로 돌아왔다. 충분한 영양섭취가 중요하...</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <!-- paging -->
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
        </section>
    </main>
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
    <script src="/assets/js/common.js"></script>
    <script src="/assets/js/common2.js"></script>
</body>
</html>