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
        <article class="five-elements">
            <div class="container">
                <div class="article-header">
                    <div class="caution-box gray">
                        <strong>작명 진행 안내</strong>
                        <ol class="decimal-list">
                            <li>로그인 → 신청서 작성 → 결제 → [진행하기] 메뉴 선택</li>
                            <li>서비스는 30일 동안 이용 가능하며 서비스를 이용하신 후에는 <i>환불이 불가</i>합니다.</li>
                        </ol>
                        <p class="note">추천 이름은 입력하신 데이터에 따라 다르며 (3~20개 사이) 추천 이름 데이터가 전혀 없는 경우는 관리자에게 연락주십시오 (네이밍 고객센터 : 02-333-4560 내선 1번)</p>
                    </div>
                </div>
                <div class="article-content">
                    <h3 class="naming-title">당사자 오행정보</h3>
                    <div class="table-wrap">
                        <table class="table type-1">
                            <caption>작명/개명 오행정보</caption>
                            <tbody>
                                <tr>
                                    <th>생년월일</th>
                                    <td>2018년 1월 1일 1시 0분 양력/평달</td>
                                </tr>
                                <tr>
                                    <th>성(姓)씨</th>
                                    <td>김</td>
                                </tr>
                                <tr>
                                    <th>성(姓)씨 오행</th>
                                    <td>김</td>
                                </tr>
                                <tr>
                                    <th>성별</th>
                                    <td>여자</td>
                                </tr>
                                <tr>
                                    <th>사주명식</th>
                                    <td>
                                        丁酉<br>
                                        壬子<br>
                                        癸巳<br>
                                        壬子
                                    </td>
                                </tr>
                                <tr>
                                    <th>오행</th>
                                    <td>
                                        火金<br>
                                        水水<br>
                                        水火<br>
                                        水水
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <div class="graph">
                                            <img src="/assets/images/ange_naming/img_graph.jpg" class="img-responsive" alt="" >
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-sm btn-pink" role="button">실시간 작명 신청</a>
                        </p>
                        <p>
                            <a href="#" class="btn btn-md btn-white btn-more" role="button">사주오행으로 이름짓기</a>
                            <a href="#" class="btn btn-md btn-white btn-more" role="button">돌림자로 이름짓기</a>
                        </p>
                        <p>
                            <a href="#" class="btn btn-lg btn-white btn-more" role="button">저장된 이름 보기</a>
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