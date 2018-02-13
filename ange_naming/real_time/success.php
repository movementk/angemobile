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
        <article class="success">
            <div class="article-content">
                <figure>
                    <img src="/assets/images/ange_naming/img_success.jpg" alt="">
                </figure>
                <div class="details">
                    <h4>결제가 완료되었습니다.</h4>
                    <p>
                        신청하신 작명 서비스의 결제가 완료되었습니다.<br>
                        문의사항은 고객센터 <i>02-333-4650 (내선 １번)</i>으로 연락주십시오.
                    </p>
                </div>
                <div class="table-wrap">
                    <table class="table table-bordered table-write type-1">
                        <tbody>
                            <tr>
                                <th>신청종류</th>
                                <td>실시간 작명</td>
                            </tr>
                            <tr>
                                <th>결제금액</th>
                                <td>50,000 </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="btn-area">
                <p>
                    <a href="#" class="btn btn-sm btn-pink" role="button">진행하기</a>
                    <a href="#" class="btn btn-sm btn-white" role="button">이전화면</a>
                </p>
            </div>
        </article>
    </main>
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
    <script src="/assets/js/common.js"></script>
</body>
</html>