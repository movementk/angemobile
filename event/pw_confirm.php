<?php require_once($_SERVER["DOCUMENT_ROOT"]."./inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/event.css" rel="stylesheet">
</head>
<body class="sub event"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."./inc/header.php"); ?>
    <!-- pgae-header -->
    <div class="page-header">
        <!-- 폴더별 타이틀 -->
        <h2>체험 / 이벤트</h2>
        <div class="btn-controls">
            <a href="/event/reader_list.php" class="prev">
                <i class="icon-left-open-big">
                    <span class="sr-only">이전 페이지</span>
                </i>
            </a>
            <a href="/event/prizewinner_list.php" class="next">
                <i class="icon-right-open-big">
                    <span class="sr-only">다음 페이지</span>
                </i>
            </a>
        </div>
    </div>
    
    <!-- sub content start -->
    <main id="content" class="pw-confirm"><!-- 페이지명 클래스 -->
        <div class="container">
            <article class="confirm-form">
                <form action="#">
                    <figure>
                        <img src="/assets/images/event/img_pw_confrim.png" alt="">
                    </figure>
                    <div class="details">
                        <h2>비밀번호 확인</h2>
                        <p class="summary">
                            회원님의 개인정보를 보호하기 위해 비밀번호를 한번 더 확인합니다.<br>
                            타인에게 비밀번호가 노출되지 않도록 항상 주의하세요.
                        </p>
                    </div>
                    <div class="form-group">
                        <input type="password" id="u-pw" class="form-control">
                        <label for="u-pw" class="sr-only">비밀번호 확인</label>
                    </div>
                    <div class="btn-area">
                        <p>
                            <button type="submit" class="btn btn-sm btn-pink">확인</button>
                            <a href="#" class="btn btn-sm btn-white" role="button">취소</a>
                        </p>
                    </div>
                </form>
            </article>
        </div>
    </main>
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."./inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."./inc/docfoot.php"); ?>
    <script src="/assets/js/common.js"></script>
</body>
</html>