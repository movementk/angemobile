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
        <section class="interpret-step02">
            <div class="container">
                <div class="section-header">
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
                <div class="section-content">
                    <article>
                        <h4 class="naming-title">이름풀이 입력요약</h4>
                        <div class="article-content">
                            <div class="table-wrap">
                                <table class="table table-bordered type-1">
                                    <tbody>
                                        <tr>
                                            <th>이름 (한글)</th>
                                            <td>김경규</td>
                                        </tr>
                                        <tr>
                                            <th>이름 (한자)</th>
                                            <td>金經圭</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </article>
                    <article class="score">
                        <h4 class="naming-title">이름풀이 점수표</h4>
                        <div class="table-wrap default-table">
                            <table class="table table-bordered">
                                <colgroup>
                                    <col style="width: 20%;">
                                    <col style="width: 20%;">
                                    <col style="width: 20%;">
                                    <col style="width: 20%;">
                                    <col style="width: 20%;">
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th>음오행</th>
                                        <th>초년운</th>
                                        <th>장년운</th>
                                        <th>중년운</th>
                                        <th>말년운</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>좋음 (100)</td>
                                        <td>좋음 (100)</td>
                                        <td>좋음 (100)</td>
                                        <td>좋음 (100)</td>
                                        <td>좋음 (100)</td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">이름풀이 총평가 ( <b>500점</b> )</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </article>
                    <article class="remainder">
                        <h4 class="naming-title">나머지 한자의 휙순 선택</h4>
                        <div class="table-wrap">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>점수</th>
                                        <th>평가</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>400점 ~ 500점</td>
                                        <td class="result-name">이름이 매우 좋습니다.</td>
                                    <tr>
                                        <td>300점 ~ 399점</td>
                                        <td>보통이름으로 무난합니다.</td>
                                    </tr>
                                    <tr>
                                        <td>200점 ~ 299점</td>
                                        <td>이름이 귀하의 운을 해하고 있습니다.</td>
                                    </tr>
                                    <tr>
                                        <td>0점 ~ 199점</td>
                                        <td>개명하시는 것이 좋을 듯 싶습니다.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </article>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-sm btn-pink" role="button">이름풀이</a>
                            <a href="#" class="btn btn-sm btn-white" role="button">바구니보기</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
    <script src="/assets/js/common.js"></script>
</body>
</html>