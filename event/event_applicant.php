<?php require_once($_SERVER["DOCUMENT_ROOT"]."./inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/event.css" rel="stylesheet">
</head>
<body class="sub event"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."./inc/header.php"); ?>
    <!-- pgae-header -->
    <div class="page-header">
        <!-- 폴더별 타이틀 -->
        <h2>체험 / 이벤트</h2>
        <div class="btn-controls">
            <a href="/event/reader_list.php" class="prev">
                <i class="icon-left-open-big">
                    <span class="sr-only">이전 페이지</span>
                </i>
            </a>
            <a href="/event/prizewinner_list.php" class="next">
                <i class="icon-right-open-big">
                    <span class="sr-only">다음 페이지</span>
                </i>
            </a>
        </div>
    </div>
    
    <!-- sub content start -->
    <main id="content" class="event-applicant"><!-- 페이지명 클래스 -->
        <div class="container">
            <section>
                <div class="section-header">
                    <!--
                            오늘오픈 > today-event
                            오늘마감 > today-closing
                            응모종료 > finish-event
                     -->
                    <div class="event-item today-event">
                        <div class="item">
                           <img src="/assets/images/event/img_event_view.jpg" alt="">
                            <div class="event-backdrop">
                                <p>오늘<br>오픈</p>
                            </div>
                        </div>
                        <div class="sns-like">
                            <ul class="sns-share">
                                <li>
                                    <a href="#">
                                        <img src="/assets/images/event/img_icon_blog.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="/assets/images/event/img_icon_tweeter.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="/assets/images/event/img_icon_facebook.png" alt="">
                                    </a>
                                </li>
                            </ul>
                            <p class="btn-like">
                                <a href="#" class="btn btn-xs btn-white" role="button">
                                    123 <i class="icon-heart"></i>
                                </a>
                            </p>
                        </div>
                        
                    </div>
                    <div class="information">
                        <div class="info-head">
                            <h3 class="subject">
                                착용해보시개 &lt;벨라베이비해피 기저귀&gt;
                                체험단이벤트
                            </h3>
                            <p>눅눅함을 잡는 강한 흡수력! 유럽 프리미엄 기저귀 벨라베이비해피</p>
                        </div>
                        <div class="info-body">
                            <dl>
                                <dt>모집기간</dt>
                                <dd>00일 00시간 00분 00초 남음</dd>
                                <dt>체험발표</dt>
                                <dd>00월 00일</dd>
                                <dt>리뷰기간</dt>
                                <dd>00.00 ~ 00.00</dd>
                                <dt>모집인원</dt>
                                <dd>00명</dd>
                                <dt>신청인원</dt>
                                <dd>00명</dd>
                                <dt>관심</dt>
                                <dd>00명</dd>
                            </dl>
                        </div>
                        <div class="btn-area">
                            <p>
                                <a href="#" class="btn btn-md btn-white" role="button">구경가기</a>
                                <a href="#" class="btn btn-md btn-white" role="button">목록</a>
                            </p>
                            <p>
                                <a href="#" class="btn btn-lg btn-pink" role="button">응모하기</a>
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="section-content">
                    <article class="tab-menu">
                        <div class="tab-list-2">
                            <ul>
                                <li ><a href="/event/event_info.php">상세 정보</a></li>
                                <li class="active">
                                    <a href="/event/event_applicant.php">신청자한마디</a>
                                </li>
                                <li><a href="/event/event_review.php">체험후기</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <ul class="review">
                                <li>
                                    <figure>
                                        <img src="/assets/images/event/img_event_applicant.png" alt="">
                                    </figure>
                                    <div class="review-content">
                                        <div class="user-info">
                                            <h4 class="user-name">영이시니</h4>
                                            <p class="date">2017-10-22</p>
                                        </div>
                                        <p class="comment">38준데 가급적 자연분만하고싶네요 그래도 만약에재왕절개하게 된다면 참고할 좋은정보 감사해요</p>
                                    </div>
                                </li>
                                <li>
                                    <figure>
                                        <img src="/assets/images/event/img_event_applicant.png" alt="">
                                    </figure>
                                    <div class="review-content">
                                        <div class="user-info">
                                            <h4 class="user-name">영이시니</h4>
                                            <p class="date">2017-10-22</p>
                                        </div>
                                        <p class="comment">38준데 가급적 자연분만하고싶네요 그래도 만약에재왕절개하게 된다면 참고할 좋은정보 감사해요</p>
                                    </div>
                                </li>
                                <li>
                                    <figure>
                                        <img src="/assets/images/event/img_event_applicant.png" alt="">
                                    </figure>
                                    <div class="review-content">
                                        <div class="user-info">
                                            <h4 class="user-name">영이시니</h4>
                                            <p class="date">2017-10-22</p>
                                        </div>
                                        <p class="comment">38준데 가급적 자연분만하고싶네요 그래도 만약에재왕절개하게 된다면 참고할 좋은정보 감사해요</p>
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
                        </div>
                    </article>
                </div>
            </section>
        </div>
    </main>
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."./inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."./inc/docfoot.php"); ?>
    <script src="/assets/js/common.js"></script>
</body>
</html>