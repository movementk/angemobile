<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/community.css" rel="stylesheet">
</head>
<body class="sub community"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- pgae-header -->
    <div class="page-header">
        <!-- 폴더별 타이틀 -->
        <h2>수다수다방!</h2>
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
        <article class="movie-list">
            <div class="container">
                <div class="article-header">
                    <figure>
                        <img src="/assets/images/community/none_img_qna_list.jpg" alt="">
                    </figure>
                </div>
                <div class="article-content">
                    <ul class="row">
                        <li class="col-xs-6">
                            <a href="#">
                                <figure>
                                    <img src="/assets/images/community/img_movie01.jpg" alt="">
                                    <figcaption>산후조리할 때 어떤 음식을 챙겨 먹어야 할까요?</figcaption>
                                </figure>
                            </a>
                        </li>
                        <li class="col-xs-6">
                            <a href="#">
                                <figure>
                                    <img src="/assets/images/community/img_movie02.jpg" alt="">
                                    <figcaption>모유 수유 중에 좋은 음식은 무엇인가요?</figcaption>
                                </figure>
                            </a>
                        </li>
                        <li class="col-xs-6">
                            <a href="#">
                                <figure>
                                    <img src="/assets/images/community/img_movie01.jpg" alt="">
                                    <figcaption>산후조리할 때 어떤 음식을 챙겨 먹어야 할까요?</figcaption>
                                </figure>
                            </a>
                        </li>
                        <li class="col-xs-6">
                            <a href="#">
                                <figure>
                                    <img src="/assets/images/community/img_movie02.jpg" alt="">
                                    <figcaption>모유 수유 중에 좋은 음식은 무엇인가요?</figcaption>
                                </figure>
                            </a>
                        </li>
                        <li class="col-xs-6">
                            <a href="#">
                                <figure>
                                    <img src="/assets/images/community/img_movie01.jpg" alt="">
                                    <figcaption>산후조리할 때 어떤 음식을 챙겨 먹어야 할까요?</figcaption>
                                </figure>
                            </a>
                        </li>
                        <li class="col-xs-6">
                            <a href="#">
                                <figure>
                                    <img src="/assets/images/community/img_movie02.jpg" alt="">
                                    <figcaption>모유 수유 중에 좋은 음식은 무엇인가요?</figcaption>
                                </figure>
                            </a>
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
        </article>
    </main>
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
    <script src="/assets/js/common.js"></script>
</body>
</html>