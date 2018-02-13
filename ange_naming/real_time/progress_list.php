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
            <h2>네이밍 서비스 안내</h2>
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
        <article class="progress-list">
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
                <p class="attention">작명승인번호를 클릭해주세요.</p>
                <div class="board-type-2">
                    <ul>
                        <li>
                            <a href="#">
                                <h4>2018년 1월 1일 1시 0분 양력/평달</h4>
                                <p class="code-num"></p>
                                <ul class="icon-list">
                                    <li class="date"><span>2017-12-01</span></li>
                                    <li class="account"><span>가상계좌</span></li>
                                    <li class="approval"><span>미승인</span></li>
                                </ul>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </article>
    </main>
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
    <script src="/assets/js/common.js"></script>
</body>
</html>