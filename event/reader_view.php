<?php require_once($_SERVER["DOCUMENT_ROOT"]."./inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/event.css" rel="stylesheet">
</head>
<body class="sub event"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."./inc/header.php"); ?>
    <!-- pgae-header -->
    <div class="page-header">
        <!-- 폴더별 타이틀 -->
        <h2>애독자 엽서</h2>
        <div class="btn-controls">
            <a href="/event/prizewinner_list.php" class="prev">
                <i class="icon-left-open-big">
                    <span class="sr-only">이전 페이지</span>
                </i>
            </a>
            <a href="/event/event_list.php" class="next">
                <i class="icon-right-open-big">
                    <span class="sr-only">다음 페이지</span>
                </i>
            </a>
        </div>
    </div>
    
    <!-- sub content start -->
    <main id="content" class="reader-view"><!-- 페이지명 클래스 -->
        <div class="container">
            <section>
                <div class="section-header">
                   <div class="row">
                        <div class="col-xs-5">
                            <figure>
                                <img src="/assets/images/event/img_reader_view01.jpg" alt="">
                            </figure>
                        </div>
                        <div class="col-xs-7">
                            <div class="details">
                                <small>월간 앙쥬 애독자 엽서</small>
                                <h3>2017년 12월호<br>소중한 의견을 보내주세요</h3>
                                <p>
                                    엄마들의 행복한 놀이터 매거진 앙쥬는 열려있습니다.소중한 의견을 보내주신 분께 당첨을 통해 선물을 드립니다.
                                </p>
                            </div>
                        </div>
                   </div>
                </div>
                
                <div class="section-content">
                    <article class="info">
                        <h5>애독자 엽서 보내기</h5>
                        <dl>
                            <dt>신청기간</dt>
                            <dd>2017.12.01 ~ 2017.12.31</dd>
                            <dt>당첨발표</dt>
                            <dd>앙쥬 12월호</dd>
                            <dt>증정인원</dt>
                            <dd>선물 별 당첨자</dd>
                            <dt>선물발송</dt>
                            <dd>12월 말</dd>
                            <dt>신청방법</dt>
                            <dd>
                                애독자 엽서 보내기 버튼 누른 후 <br>
                                내용 작성(회원만 가능)
                            </dd>
                        </dl>
                    </article>
                    <div class="attention-box">
                        <strong>주의사항</strong>
                        <ul>
                            <li>지정일에 반드시 당첨확인 전화 필요 (02-333-4650 내선 0번)</li>
                            <li>한번 작성하여 보내주신 엽서는 수정할 수 없습니다.</li>
                            <li>보내기에 문제가 생기신 분은 angeweb@ange.co.kr 메일로 해당 내용을 보내주시기 바랍니다.</li>
                        </ul>
                    </div>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-md btn-pink" role="button">앙쥬 회원가입</a>
                            <a href="#" class="btn btn-md btn-white" role="button">애독자 엽서 보내기</a>
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