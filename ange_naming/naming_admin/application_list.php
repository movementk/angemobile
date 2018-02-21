<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/ange_naming.css" rel="stylesheet">
</head>
<body class="sub ange-naming"><!-- 폴더별 클레스 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    
    <!-- pgae-header -->
    <div class="page-header">
        <!-- 폴더별 타이틀 -->
        <div class="page-title">
            <h2>스페셜작명</h2>
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
    
    <!-- sub content start -->
    <main id="content">
        <article class="application-list"> <!-- 페이지명 클래스 -->
            <div class="container">
                <div class="article-content">
                    <div class="table-wrap default-table">
                        <table class="table table-bordered">
                            <colgroup>
                                <col style="width: 20%;">
                                <col style="width: 20%;">
                                <col style="width: 15%;">
                                <col style="width: 25%;">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th>신청자</th>
                                    <th>신청일</th>
                                    <th>결제/승인</th>
                                    <th>작명 진행 상태</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>채옥성/회원</td>
                                    <td class="date">2018-02-20 11:33:23</td>
                                    <td>가상계좌/결제</td>
                                    <td>
                                        <div class="btn-proceed">
                                            <a href="#" class="btn btn-xs btn-white" role="button">이름추천</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>유병섭/회원</td>
                                    <td class="date">2018-02-20 11:33:23</td>
                                    <td>신용카드/결제</td>
                                    <td>
                                        <div class="btn-proceed">
                                            <a href="#" class="btn btn-xs btn-white" role="button">선우(선택)</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>서호석/회원</td>
                                    <td class="date">2018-02-20 11:33:23</td>
                                    <td>신용카드/결제</td>
                                    <td>
                                        <div class="btn-proceed">
                                            <a href="#" class="btn btn-xs btn-white" role="button">은우(선택)</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>안종윤/회원</td>
                                    <td class="date">2018-02-20 11:33:23</td>
                                    <td>신용카드/결제</td>
                                    <td>
                                        <div class="btn-proceed">
                                            <a href="#" class="btn btn-xs btn-white" role="button">유찬(선택)</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>이경주/회원</td>
                                    <td class="date">2018-02-20 11:33:23</td>
                                    <td>가상계좌/결제</td>
                                    <td>
                                        <div class="btn-proceed">
                                            <a href="#" class="btn btn-xs btn-white" role="button">완료</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
    <script src="/assets/js/common.js"></script>
</body>
</html>