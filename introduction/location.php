<?php require_once($_SERVER["DOCUMENT_ROOT"]."./inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/introduction.css" rel="stylesheet">
</head>
<body class="sub introduction"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."./inc/header.php"); ?>
    <!-- pgae-header -->
    <div class="page-header">
        <!-- 폴더별 타이틀 -->
        <h2>찾아오시는 길</h2>
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
    <main id="content" class="location"><!-- 페이지명 클래스 -->
        <div class="container">
            <div class="maps">
                <img src="/assets/images/introduction/img_map.jpg" alt="">
            </div>
            <div class="table-wrap">
                <table class="table table-bordered type-1">
                    <tbody>
                        <tr>
                            <th class="v-top">주소</th>
                            <td>
                                <p>지번주소 / 서울시 마포구 창전동 253번지 앙쥬빌딩</p>
                                <p>도로주소 / 서울시 마포구 독막로 155 앙쥬빌딩</p>
                            </td>
                        </tr>
                        <tr>
                            <th class="v-top">주소</th>
                            <td>
                                <ul class="contact">
                                    <li class="tel"><a href="#">02-333-4650</a></li>
                                    <li class="fax">02-333-4633</li>
                                </ul>
                                <ul class="contact-point">
                                    <li>내선번호 1번 / 광고마케팅팀</li>
                                    <li>내선번호 2번 / 와인 디자인개발팀</li>
                                    <li>내선번호 3번 / 컨텐츠개발팀</li>
                                    <li>내선번호 4번 / 온라인사업팀</li>
                                    <li>내선번호 0번 / 기타 문의</li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."./inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."./inc/docfoot.php"); ?>
    <script src="/assets/js/common.js"></script>
</body>
</html>