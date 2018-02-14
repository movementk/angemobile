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
            <h2>실시간 작명 안내</h2>
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
        <article class="access-guide">
            <div class="container">
                <p class="summary">실시간작명을 하시는 순서를 정리한 내용이니 참고하시길 바랍니다</p>
                <ol class="guide-list">
                    <li>
                        <h4><span>01</span>로그인을 합니다. (회원만 이용가능합니다.)</h4>
                    </li>
                    <li>
                        <h4><span>02</span>실시간 작명 신청서를 작성 및 결제후 [실시간 작명] &gt; [진행하기] 메뉴를 클릭합니다.</h4>
                    </li>
                    <li>
                        <h4><span>03</span>신청내역에서 승인번호를 클릭합니다.</h4>
                    </li>
                    <li>
                        <h4><span>04</span>"실시간 작명 신청" 버튼을 클릭합니다.</h4>
                        <div class="guide-box">
                            <figure>
                                <img src="/assets/images/ange_naming/img_real_guide01.jpg" class="img-responsive" alt="">
                            </figure>
                        </div>
                    </li>
                    <li>
                        <h4><span>05</span>사주와 오행에 맞게 출력된 실시간 이름중에 선택된 이름을 "이름저장" 한후 "이름풀이"를 이용하여 이름에 담겨져 있는 사주와 오행을 확인합니다.</h4>
                        <div class="guide-box">
                            <figure>
                                <img src="/assets/images/ange_naming/img_real_guide02.jpg" class="img-responsive" alt="">
                            </figure>
                        </div>
                    </li>
                    <li>
                        <h4><span>06</span>이름의 정보를 확인하고 "이름풀이"버튼을 클릭하면 상세한 이름풀이가 보입니다.</h4>
                        <div class="guide-box">
                            <figure>
                                <img src="/assets/images/ange_naming/img_real_guide03.jpg" class="img-responsive" alt="">
                            </figure>
                        </div>
                    </li>
                    <li>
                        <h4><span>07</span>이름풀이의 점수표를 확인합니다.</h4>
                        <div class="guide-box">
                            <figure>
                                <img src="/assets/images/ange_naming/img_real_guide04.jpg" class="img-responsive" alt="">
                            </figure>
                        </div>
                    </li>
                    <li>
                        <h4><span>08</span>이름풀이를 프린터로 출력하실 수 있습니다. <br> 또, 이름을 확정하셨다면 증서를 출력하여 보관하실 수 있습니다.</h4>
                        <div class="guide-box">
                            <figure>
                                <img src="/assets/images/ange_naming/img_real_guide05.jpg" class="img-responsive" alt="">
                            </figure>
                        </div>
                    </li>
                </ol>
            </div>
        </article>
    </main>
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
    <script src="/assets/js/common.js"></script>
</body>
</html>