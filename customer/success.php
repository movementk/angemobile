<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/customer.css" rel="stylesheet">
</head>
<body class="sub customer"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- sub content start -->
    <main id="content" class="success"><!-- 페이지명 클래스 -->
        <div class="container">
            <section class="agreement-complete">
                <div class="section-header">
                    <h3 class="section-title">회원가입</h3>
                    <!-- Step-list 공통 -->
                    <ol class="step-list">
                        <li>
                            <div>
                                <p class="icon-img">
                                    <img src="/assets/images/sub/icon_step01.png" alt="step01">
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
                        <li class="active">
                            <div>
                                <p class="icon-img">
                                    <img src="/assets/images/sub/icon_step03_active.png" alt="step03">
                                </p>
                                가입완료
                            </div>
                        </li>
                    </ol>
                </div>
                
                <div class="section-content">
                    <h4>회원가입이 완료되었습니다!</h4>
                    <p class="summary"> 
                    모든 회원가입 절차가 완료되었습니다.<br>
                    로그인 후 모든 서비스를 이용할 수 있습니다.</p>
                    <figure>
                        <img src="/assets/images/customer/img_success.png" alt="">
                    </figure>
                    <div class="table-wrap">
                        <table class="table table-bordered table-write type-1">
                            <tbody>
                                <tr>
                                    <th>이름</th>
                                    <td>무브먼트케이</td>
                                </tr>
                                <tr>
                                    <th>아이디</th>
                                    <td>movementk</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="btn-area">
                    <p>
                        <a href="#" class="btn btn-sm btn-pink" role="button">로그인하기</a>
                        <a href="#" class="btn btn-sm btn-white" role="button">메인으로</a>
                    </p>
                </div>
            </section>
        </div>
    </main>
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
    <script src="/assets/js/common.js"></script>
</body>
</html>