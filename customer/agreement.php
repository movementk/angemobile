<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/customer.css" rel="stylesheet">
</head>
<body class="sub customer"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- sub content start -->
    <main id="content" class="agreement"><!-- 페이지명 클래스 -->
        <div class="container">
            <section class="agreement-list">
                <div class="section-header">
                    <h3 class="section-title">회원가입</h3>
                    <!-- Step-list 공통 -->
                    <ol class="step-list">
                        <li class="active">
                            <div>
                                <p class="icon-img">
                                    <img src="/assets/images/sub/icon_step01_active.png" alt="step01">
                                </p>
                                약관동의
                            </div>
                        </li>
                        <li>
                            <div>
                                <p class="icon-img">
                                    <img src="/assets/images/sub/icon_step02.png" alt="step02">
                                </p>
                                회원정보입력
                            </div>
                        </li>
                        <li>
                            <div>
                                <p class="icon-img">
                                    <img src="/assets/images/sub/icon_step03.png" alt="step03">
                                </p>
                                가입완료
                            </div>
                        </li>
                    </ol>
                </div>
                
                <div class="section-content">
                    <form action="#">
                        <article class="terms">
                            <h3>이용약관 <i class="necessary">필수</i></h3>
                            <div class="content">
                                이용약관 내용
                            </div>
                            <label><input type="checkbox">위의 내용을 읽어보았으며, 내용에 동의합니다.</label>
                        </article>
                        <article class="terms">
                            <h3>개인정보처리 방침 <i class="necessary">필수</i></h3>
                            <div class="content">
                                개인정보처리 방침 내용
                            </div>
                            <label><input type="checkbox">위의 내용을 읽어보았으며, 내용에 동의합니다.</label>
                        </article>
                        <article class="terms">
                            <h3>제 3자 정보제공동의 <i>선택</i></h3>
                            <div class="content">
                                제 3자 정보제공동의 영역
                            </div>
                            <label><input type="checkbox">위의 내용을 읽어보았으며, 내용에 동의합니다.</label>
                        </article>
                        <hr>
                        <label class="all"><input type="checkbox">[전체동의] 이용약관, 개인정보취급방침, 제 3자 정보제공 모두 동의합니다.</label>
                        <div class="btn-area">
                            <div class="check-box">
                                <p>
                                    <button type="submit" class="btn btn-sm btn-pink">다음</button>
                                    <a href="#" class="btn btn-sm btn-white" role="button">취소</a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </main>
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
    <script src="/assets/js/common.js"></script>
</body>
</html>