<?php require_once($_SERVER["DOCUMENT_ROOT"]."./inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/community.css" rel="stylesheet">
</head>
<body class="sub community"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."./inc/header.php"); ?>
    <!-- pgae-header -->
    <div class="page-header">
        <!-- 폴더별 타이틀 -->
        <h2>투데이톡</h2>
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
    <main id="content">
        <article class="today-talk">
            <div class="container">
                <div class="calendar">
                    <strong>2018 . 01</strong>
                    <div class="day">
                        <ul>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li class="active"><a href="#">6</a></li>
                            <li><a href="#">7</a></li>
                            <li><a href="#">8</a></li>
                            <li><a href="#">9</a></li>
                        </ul>
                        <div class="btn-controls">
                            <a href="#" class="prev">
                                <i class="icon-left-small">
                                    <span class="sr-only">이전</span>
                                </i>
                            </a>
                            <a href="#" class="next">
                                <i class="icon-right-small">
                                    <span class="sr-only">다음</span>
                                </i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="article-header">
                    <h3><img src="/assets/images/community/logo.gif" alt="앙쥬 로고"></h3>
                    <p>
                        이거 만큼은 어느 맛집 못지 않다! 앙쥬맘이 가장 잘하는
                        요리 자랑해보아요~ 앙쥬맘이 가장 잘하는 요리 자랑해보아요~
                    </p>
                    <figure>
                        <img src="/assets/images/community/img_today_talk.jpg" alt="">
                    </figure>
                </div>
                <div class="article-content">
                    <h4>투데이 톡 쓰기</h4>
                    <div class="write-form">
                        <form action="#">
                            <figure>
                                <img src="/assets/images/community/img_user_none_profile.png" alt="">
                            </figure>
                            <div class="writing">
                                <div class="form-group">
                                    <textarea id="u-comment" class="form-control" placeholder="">입력창에 작성해 주세요.</textarea>
                                    <label for="u-comment" class="sr-only">투데이톡 쓰기</label>
                                </div>
                                <div class="btn-area">
                                    <button type="submit" class="btn btn-gray">등록하기</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="banner">
                        <a href="#">
                            <figure>
                                <img src="/assets/images/community/talk_none_banner.jpg" alt="">
                            </figure>
                        </a>
                    </div>
                    <div class="talk-list">
                        <ul>
                            <li>
                                <div class="user-profile">
                                    <figure>
                                        <img src="/assets/images/community/img_user_none_profile.png" alt="">
                                    </figure>
                                </div>
                                <div class="details">
                                    <h4>영이시니 <small>2017-10-22</small></h4>
                                    <p>
                                        38준데 가급적 자연분만하고싶네요 그래도 만약에 재왕절개하게된다면 참고할 좋은정보 감사해요
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="user-profile">
                                    <figure>
                                        <img src="/assets/images/community/img_user_none_profile.png" alt="">
                                    </figure>
                                </div>
                                <div class="details">
                                    <h4>영이시니 <small>2017-10-22</small></h4>
                                    <p>
                                        38준데 가급적 자연분만하고싶네요 그래도 만약에 재왕절개하게된다면 참고할 좋은정보 감사해요
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="user-profile">
                                    <figure>
                                        <img src="/assets/images/community/img_user_none_profile.png" alt="">
                                    </figure>
                                </div>
                                <div class="details">
                                    <h4>영이시니 <small>2017-10-22</small></h4>
                                    <p>
                                        38준데 가급적 자연분만하고싶네요 그래도 만약에 재왕절개하게된다면 참고할 좋은정보 감사해요
                                    </p>
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
                </div>
            </div>
        </article>
    </main>
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."./inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."./inc/docfoot.php"); ?>
    <script src="/assets/js/common.js"></script>
</body>
</html>