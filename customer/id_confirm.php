<?php require_once($_SERVER["DOCUMENT_ROOT"]."./inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/customer.css" rel="stylesheet">
</head>
<body class="sub customer"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."./inc/header.php"); ?>
    <!-- sub content start -->
    <main id="content" class="id-confirm"><!-- 페이지명 클래스 -->
        <div class="container">
            <section class="id-find">
                <div class="section-header">
                    <h3 class="section-title">아이디 찾기</h3>
                    <p class="summary">아이디가 기억나지 않으세요?  본인확인 후 아이디를 확인하실 수 있습니다.</p>
                </div>
                <div class="section-content">
                    <form action="#">
                        <div class="table-wrap">
                            <table class="table table-bordered table-write type-1">
                                <tbody>
                                    <tr>
                                        <th class="essential"><label for="u-name">이름</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="u-name" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="essential"><label for="u-phone">휴대전화번호</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="u-phone" class="form-control" placeholder="휴대폰 번호 입력">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <article class="authentication">
                            <b>회원정보에 등록된 휴대전화 번호와<br>일치해야, 인증번호를 받을 수 있습니다.</b>
                            <p>
                                [인증하기]을 클릭하시면 본인 휴대폰으로<br>실명인증이 가능합니다.<br>일치하는 정보가 없을 시 인증메세지가 뜨지 않습니다.
                            </p>
                            <div class="form">
                                <div class="btn-sms">
                                    <a href="#" class="btn btn-white" role="button">휴대폰 인증하기</a>
                                </div>
                            </div>
                        </article>
                        <article class="authentication">
                            <b>회원정보에 등록된 휴대전화 번호와<br>일치해야, 인증번호를 받을 수 있습니다.</b>
                            <p>
                                [인증하기]을 클릭하시면 본인 휴대폰으로<br>실명인증이 가능합니다.<br>일치하는 정보가 없을 시 인증메세지가 뜨지 않습니다.
                            </p>
                            <div class="form">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="인증번호 입력">
                                    <button type="submit" class="btn btn-gray">확인</button>
                                </div>
                            </div>
                        </article>
                    </form>
                    <div class="result">
                        <p>사용자 아이디는 <i>movementk</i> 입니다.</p>
                    </div>
                    <div class="btn-area">
                        <p>
                            <a href="#" role="button" class="btn btn-sm btn-pink">
                                <i class="icon-home"></i>메인으로
                            </a>
                        </p>
                    </div>
                </div>
            </section>
        </div>
    </main>
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."./inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."./inc/docfoot.php"); ?>
    <script src="/assets/js/common.js"></script>
</body>
</html>