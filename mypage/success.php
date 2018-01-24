<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/mypage.css" rel="stylesheet">
</head>
<body class="sub mypage"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- pgae-header -->
    <div class="page-header">
        <!-- 폴더별 타이틀 -->
        <h2>회원탈퇴</h2>
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
    <main id="content" class="success"><!-- 페이지명 클래스 -->
        <div class="container">
            <article>
                <h4>회원님의 탈퇴가 완료되었습니다.</h4>
                <p class="summary">
                    앞으로도 회원님들께 더 나은 서비스를 제공하기<br>
                    위하여 더욱 노력하는 앙쥬가 되겠습니다.</p>
                <figure>
                    <img src="/assets/images/mypage/img_success.png" alt="">
                </figure>
                <div class="btn-area">
                    <p>
                        <a href="#" class="btn btn-sm btn-pink" role="button">확인</a>
                    </p>
                </div>
            </article>
        </div>
    </main>
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
    <script src="/assets/js/common.js"></script>
</body>
</html>