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
        <article class="interpret-step01">
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
                    <h4 class="naming-title">스페셜 작명 소개</h4>
                    <div class="table-wrap">
                        <table class="table table-bordered">
                            <colgroup>
                                <col style="25%;">
                                <col style="25%;">
                                <col style="25%;">
                                <col style="25%;">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>성(姓)</th>
                                    <th>이름</th>
                                    <th>이름</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>음오행</td>
                                    <td>임</td>
                                    <td>지</td>
                                    <td>우</td>
                                </tr>
                                <tr>
                                    <td>획수</td>
                                    <td>林</td>
                                    <td>地</td>
                                    <td>友</td>
                                </tr>
                                <tr>
                                    <td>뜻</td>
                                    <td>성</td>
                                    <td>빛날</td>
                                    <td>별</td>
                                </tr>
                                <tr>
                                    <td>한자</td>
                                    <td>8</td>
                                    <td>8</td>
                                    <td>9</td>
                                </tr>
                                <tr>
                                    <td>한글</td>
                                    <td>林</td>
                                    <td>林</td>
                                    <td>林</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-sm btn-pink" role="button">이름풀이</a>
                            <a href="#" class="btn btn-sm btn-white" role="button">바구니보기</a>
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