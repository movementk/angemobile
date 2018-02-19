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
            <h2>진행하기</h2>
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
        <article class="basket-list">
            <div class="container">
                <div class="article-header">
                    <div class="caution-box">
                        <strong>작명 진행 안내</strong>
                        <ol class="decimal-list">
                            <li>로그인 → 신청서 작성 → 결제 → [진행하기] 메뉴 선택</li>
                            <li>서비스는 30일 동안 이용 가능하며 서비스를 이용하신 후에는 <i>환불이 불가</i>합니다.
                            </li>
                        </ol>
                        <p class="attention">
                            추천 이름은 입력하신 데이터에 따라 다르며 (3~20개 사이) 추천 이름 데이터가 전혀 없는 경우는 관리자에게 연락주십시오 (네이밍 고객센터 : <a href="tel:02-333-4560">02-333-4560</a> 내선 1번)
                        </p>
                    </div>
                </div>
                <div class="article-content">
                    <div class="selection-btn">
                        <p>
                            <a href="#" class="btn btn-xs btn-white" role="button">전체 선택</a>
                            <a href="#" class="btn btn-xs btn-white" role="button">전체 해제</a>
                            <a href="#" class="btn btn-xs btn-white" role="button">선택 삭제</a>
                        </p>
                    </div>
                    <ul>
                        <li>
                            <div class="list-header">
                                <dl>
                                    <dt>음오행</dt>
                                    <dd>
                                        <p>林林林</p>
                                        <input type="checkbox">
                                    </dd>
                                    <dt>이름</dt>
                                    <dd>김경규</dd>
                                </dl>
                            </div>
                            <div class="table-wrap">
                                <table class="table table-bordered">
                                    <colgroup>
                                        <col style="width: 25%">
                                        <col style="width: 25%">
                                        <col style="width: 25%">
                                        <col style="width: 25%">
                                    </colgroup>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>한자</td>
                                            <td>훈과음</td>
                                            <td>획수</td>
                                        </tr>
                                        <tr>
                                            <td>성(姓)</td>
                                            <td>申</td>
                                            <td>납신</td>
                                            <td>5</td>
                                        </tr>
                                        <tr>
                                            <td>가운데자</td>
                                            <td>尙</td>
                                            <td>오히려 상</td>
                                            <td>8</td>
                                        </tr>
                                        <tr>
                                            <td>끝자</td>
                                            <td>炅</td>
                                            <td>빛날 경</td>
                                            <td>10</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="btn-area">
                                <p>
                                    <a href="#" class="btn btn-lg btn-white" role="button">이름풀이</a>
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="list-header">
                                <dl>
                                    <dt>음오행</dt>
                                    <dd>
                                        <p>林林林</p>
                                        <input type="checkbox">
                                    </dd>
                                    <dt>이름</dt>
                                    <dd>김경규</dd>
                                </dl>
                            </div>
                            <div class="table-wrap">
                                <table class="table table-bordered">
                                    <colgroup>
                                        <col style="width: 25%">
                                        <col style="width: 25%">
                                        <col style="width: 25%">
                                        <col style="width: 25%">
                                    </colgroup>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>한자</td>
                                            <td>훈과음</td>
                                            <td>획수</td>
                                        </tr>
                                        <tr>
                                            <td>성(姓)</td>
                                            <td>申</td>
                                            <td>납신</td>
                                            <td>5</td>
                                        </tr>
                                        <tr>
                                            <td>가운데자</td>
                                            <td>尙</td>
                                            <td>오히려 상</td>
                                            <td>8</td>
                                        </tr>
                                        <tr>
                                            <td>끝자</td>
                                            <td>炅</td>
                                            <td>빛날 경</td>
                                            <td>10</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="btn-area">
                                <p>
                                    <a href="#" class="btn btn-lg btn-white" role="button">이름풀이</a>
                                </p>
                            </div>
                        </li>
                    </ul>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-sm btn-pink" role="button">진행하기</a>
                            <a href="#" class="btn btn-sm btn-white" role="button">이전화면</a>
                        </p>
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