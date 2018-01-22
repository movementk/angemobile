<?php require_once($_SERVER["DOCUMENT_ROOT"]."./inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/community.css" rel="stylesheet">
</head>
<body class="sub community"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."./inc/header.php"); ?>
    <!-- pgae-header -->
    <div class="page-header">
        <!-- 폴더별 타이틀 -->
        <h2>모유수유 QnA</h2>
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
        <article class="qna-list">
            <div class="container">
                <div class="article-header">
                    <figure>
                        <img src="/assets/images/community/none_img_qna_list.jpg" alt="">
                    </figure>
                </div>
                <div class="article-content">
                    <div class="search-form">
                        <form action="#">
                            <div class="form-group">
                                <select class="form-control">
                                    <option>제목</option>
                                </select>
                                <input type="text" id="search" class="form-control" placeholder="검색어를 입력해 주세요">
                                <label for="search" class="sr-only">검색하기</label>
                            </div>
                            <div class="search-btn">
                                <button type="submit" class="btn btn-default">
                                    <i class="icon-search">
                                        <span class="sr-only">검색버튼</span>
                                    </i>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="board-type-2">
                        <ul>
                            <li>
                                <a href="#">
                                    <h4>토론 제목이 노출되는 영역입니다.</h4>
                                    <ul class="icon-list">
                                        <li class="user">무브먼트</li>
                                        <li class="date"><span>2017-10-10</span></li>
                                    </ul>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <h4>토론 제목이 노출되는 영역입니다.</h4>
                                    <ul class="icon-list">
                                        <li class="user">무브먼트</li>
                                        <li class="date"><span>2017-10-10</span></li>
                                    </ul>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <h4>토론 제목이 노출되는 영역입니다.</h4>
                                    <ul class="icon-list">
                                        <li class="user">무브먼트</li>
                                        <li class="date"><span>2017-10-10</span></li>
                                    </ul>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <h4>토론 제목이 노출되는 영역입니다.</h4>
                                    <ul class="icon-list">
                                        <li class="user">무브먼트</li>
                                        <li class="date"><span>2017-10-10</span></li>
                                    </ul>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <h4>토론 제목이 노출되는 영역입니다.</h4>
                                    <ul class="icon-list">
                                        <li class="user">무브먼트</li>
                                        <li class="date"><span>2017-10-10</span></li>
                                    </ul>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <h4>토론 제목이 노출되는 영역입니다.</h4>
                                    <ul class="icon-list">
                                        <li class="user">무브먼트</li>
                                        <li class="date"><span>2017-10-10</span></li>
                                    </ul>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <h4>토론 제목이 노출되는 영역입니다.</h4>
                                    <ul class="icon-list">
                                        <li class="user">무브먼트</li>
                                        <li class="date"><span>2017-10-10</span></li>
                                    </ul>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <h4>토론 제목이 노출되는 영역입니다.</h4>
                                    <ul class="icon-list">
                                        <li class="user">무브먼트</li>
                                        <li class="date"><span>2017-10-10</span></li>
                                    </ul>
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
            </div>
        </article>
    </main>
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."./inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."./inc/docfoot.php"); ?>
    <script src="/assets/js/common.js"></script>
</body>
</html>