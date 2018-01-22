<?php require_once($_SERVER["DOCUMENT_ROOT"]."./inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/mypage.css" rel="stylesheet">
</head>
<body class="sub mypage"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."./inc/header.php"); ?>
    <!-- pgae-header -->
    <div class="page-header">
        <!-- 폴더별 타이틀 -->
        <h2>내가 쓴 글</h2>
        <div class="btn-controls">
            <a href="#" class="prev">
                <i class="icon-left-open-big">
                    <span class="sr-only">이전 페이지</span>
                </i>
            </a>
            <a href="/mypage/message_list.php" class="next">
                <i class="icon-right-open-big">
                    <span class="sr-only">다음 페이지</span>
                </i>
            </a>
        </div>
    </div>
    
    <!-- sub content start -->
    <main id="content" class="my-history"><!-- 페이지명 클래스 -->
        <div class="container">
            <section class="my-board">
                <h3>내가 쓴 게시물</h3>
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
                <div class="section-content">
                    <article class="board-type-2">
                        <ul>
                            <li>
                                <a href="#">
                                    <h4>내가 쓴 게시물 제목이 노출되는 영역입니다</h4>
                                    <ul class="icon-list">
                                        <li class="date"><span>2017-10-10</span></li>
                                    </ul>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <h4>내가 쓴 게시물 제목이 노출되는 영역입니다</h4>
                                    <ul class="icon-list">
                                        <li class="date"><span>2017-10-10</span></li>
                                    </ul>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <h4>내가 쓴 게시물 제목이 노출되는 영역입니다</h4>
                                    <ul class="icon-list">
                                        <li class="date"><span>2017-10-10</span></li>
                                    </ul>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <h4>내가 쓴 게시물 제목이 노출되는 영역입니다</h4>
                                    <ul class="icon-list">
                                        <li class="date"><span>2017-10-10</span></li>
                                    </ul>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <h4>내가 쓴 게시물 제목이 노출되는 영역입니다</h4>
                                    <ul class="icon-list">
                                        <li class="date"><span>2017-10-10</span></li>
                                    </ul>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <h4>내가 쓴 게시물 제목이 노출되는 영역입니다</h4>
                                    <ul class="icon-list">
                                        <li class="date"><span>2017-10-10</span></li>
                                    </ul>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <h4>내가 쓴 게시물 제목이 노출되는 영역입니다</h4>
                                    <ul class="icon-list">
                                        <li class="date"><span>2017-10-10</span></li>
                                    </ul>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <h4>내가 쓴 게시물 제목이 노출되는 영역입니다</h4>
                                    <ul class="icon-list">
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
                    </article>
                </div>
            </section>
            <section class="my-comment">
                <h5>내가 쓴 댓글</h5>
                <div class="section-content">
                    <article class="board-type-3">
                        <div class="article-header">
                            <ul>
                                <li>제목</li>
                                <li class="date">작성일</li>
                            </ul>
                        </div>
                        <div class="article-content">
                            <div class="table-wrap">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="subject"><a href="#">딸램의 잠투정도 이제 클라우드비로 안녕~</a></td>
                                            <td class="date">2017-12-01</td>
                                        </tr>
                                        <tr>
                                            <td class="subject"><a href="#">유비케어 건강식품앱/건강한알 앱으로 우리아이가</a></td>
                                            <td class="date">2017-12-01</td>
                                        </tr>
                                        <tr>
                                            <td class="subject"><a href="#">건강식품앱 추천:: 유비케어 건강한알이면 영유아영..</a></td>
                                            <td class="date">2017-12-01</td>
                                        </tr>
                                        <tr>
                                            <td class="subject"><a href="#">[아기크림] 쫀득한 킨더퍼페츠 모짜렐라 크림 고보습[아기크림] 쫀득한 킨더퍼페츠 모짜렐라 크림 고보습~</a></td>
                                            <td class="date">2017-12-01</td>
                                        </tr>
                                        <tr>
                                            <td class="subject"><a href="#">출산선물로 좋은 모윰젖병소독기 사용해봤어요</a></td>
                                            <td class="date">2017-12-01</td>
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
            </section>
        </div>
    </main>
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."./inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."./inc/docfoot.php"); ?>
    <script src="/assets/js/common.js"></script>
</body>
</html>