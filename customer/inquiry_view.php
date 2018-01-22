<?php require_once($_SERVER["DOCUMENT_ROOT"]."./inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/customer.css" rel="stylesheet">
</head>
<body class="sub customer"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."./inc/header.php"); ?>
    <!-- pgae-header -->
    <div class="page-header">
        <!-- 폴더별 타이틀 -->
        <h2>회원문의</h2>
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
    <main id="content" class="inquiry-view"><!-- 페이지명 클래스 -->
        <div class="container">
            <section>
                <h4 class="title">회원문의</h4>
                <div class="section-content">
                    <article class="board-view">
                        <div class="article-header">
                            <h4>애독자엽서 &lt;비트루트 4종 세트&gt; 당첨자 구성품 변경 안내 (5월 엽서 이용)</h4>
                            <ul class="icon-list">
                                <li class="like"><span>123</span></li>
                                <li class="comment"><span>123</span></li>
                                <li class="date"><span>2017-10-10</span></li>
                            </ul>
                        </div>
                        <div class="article-content">
                            <div class="view-content">
                                <p>
                                    안녕하세요 앙쥬입니다.<br>
                                    &lt;앙쥬 신규 가입회원 샘플팩 9월_82차&gt;<br>
                                    발표일이 금일 10일 발표 예정이었으나 <br>
                                    선정이 조금 늦어져 11일에 발표 될 예정입니다.<br>
                                    양해 부탁드립니다.<br>
                                    감사합니다.
                                </p>
                            </div>
                            <dl class="attach">
                                <dt>첨부파일</dt>
                                <dd>
                                    <a href="#">첨부파일.jpg</a>
                                    <a href="#">첨부파일.jpg</a>
                                </dd>
                            </dl>
                            <div class="btn-area">
                                <p>
                                    <a href="#" class="btn btn-xs btn-white" role="button">수정</a>
                                    <a href="#" class="btn btn-xs btn-white" role="button">삭제</a>
                                    <a href="#" class="btn btn-xs btn-pink" role="button">목록</a>
                                </p>
                            </div>
                            <div class="page-link">
                                <ul>
                                    <li class="prev">
                                        <a href="#">(6월9일발송)샘플팩 베베쿡 프로바이오맘 쿠폰 안내</a>
                                    </li>
                                    <li class="next">
                                        <a href="#">사이트 서버 점검 안내</a>
                                    </li>
                                </ul>
                            </div>
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