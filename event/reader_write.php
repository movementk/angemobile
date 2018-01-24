<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/event.css" rel="stylesheet">
</head>
<body class="sub event"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
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
    <main id="content" class="reader-write"><!-- 페이지명 클래스 -->
        <div class="container">
            <section>
                <h3>당첨자 발표</h3>
                <div class="section-content">
                    <form action="#">
                        <article class="post-form">
                            <div class="table-wrap">
                                <table class="table type-1">
                                    <caption>
                                        <h4>애독자 엽서 양식</h4>
                                        <div class="btn-link">
                                            <p>
                                                <a href="#" class="btn btn-default" role="button">회원정보 수정</a>
                                            </p>
                                        </div>
                                    </caption>
                                    <tbody>
                                        <tr>
                                            <th class="essential"><label for="u-name">신청자명</label></th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" id="u-name" class="form-control" placeholder="무브먼트">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="essential"><label for="u-tel">전화번호</label></th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" id="u-tel" class="form-control" placeholder="02-123-5678">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="essential"><label for="u-phone">핸드폰 번호</label></th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" id="u-phone" class="form-control" placeholder="010-1234-5678">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="essential"><label for="u-addr">받으실 곳</label></th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" id="u-addr" class="form-control" placeholder="(12345) 서울시 서초구 양재동 120-1번지 2층 양재빌딩">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <dl>
                                                    <dt class="essential"><label for="u-review">이달의 앙쥬를 본 소감</label></dt>
                                                    <dd>
                                                        <div class="form-group">
                                                            <textarea id="u-review" class="form-control"></textarea>
                                                        </div>
                                                    </dd>
                                                </dl>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <dl>
                                                    <dt class="essential"><label for="u-wish">다음달에 실었으면 하는 기사</label></dt>
                                                    <dd>
                                                        <div class="form-group">
                                                            <textarea id="u-wish" class="form-control"></textarea>
                                                        </div>
                                                    </dd>
                                                </dl>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <dl>
                                                    <dt class="essential">앙쥬를 만난 곳은 어디입니까?</dt>
                                                    <dd>
                                                        <div class="form-group opacity">
                                                            <label><input type="radio"> 병원</label>
                                                            <label><input type="radio"> 산후조리원</label>
                                                            <label><input type="radio"> 백화점/마트</label>
                                                            <label><input type="radio"> 온라인</label>
                                                            <label><input type="radio"> 기타</label>
                                                        </div>
                                                    </dd>
                                                </dl>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="space">
                                                <dl>
                                                    <dt class="essential"><label for="baby-month">임신주차 또는 아기 개월 수를 입력해주세요</label></dt>
                                                    <dd>
                                                        <div class="form-group">
                                                            <input type="text" id="baby-month" class="form-control">
                                                        </div>
                                                    </dd>
                                                </dl>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="space">
                                                <dl>
                                                    <dt class="essential"><label for="hope-gift1">희망선물 1</label></dt>
                                                    <dd>
                                                        <div class="form-group">
                                                            <input type="text" id="hope-gift1" class="form-control">
                                                        </div>
                                                    </dd>
                                                </dl>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="space">
                                                <dl>
                                                    <dt class="essential"><label for="hope-gift2">희망선물 2</label></dt>
                                                    <dd>
                                                        <div class="form-group">
                                                            <input type="text" id="hope-gift2" class="form-control">
                                                        </div>
                                                    </dd>
                                                </dl>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="space">
                                                <dl>
                                                    <dt class="essential"><label for="hope-gift3">희망선물 3</label></dt>
                                                    <dd>
                                                        <div class="form-group">
                                                            <input type="text" id="hope-gift3" class="form-control">
                                                        </div>
                                                    </dd>
                                                </dl>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <dl>
                                                    <dt>
                                                        <label for="question">[ 앙쥬에게 물어보세요 ]</label>
                                                        <p>
                                                            평소 궁금했던 건강/질병/심리/발달/돌보기/교육/임신/출산 등 임신출산육아 관련 질문을 적어주세요. 질문을 선정해 전문가가 답변하고 &lt;앙쥬&gt; 지면에도 게재됩니다.
                                                        </p>
                                                    </dt>
                                                    <dd>
                                                        <div class="form-group">
                                                            <textarea id="question" class="form-control"></textarea>
                                                        </div>
                                                    </dd>
                                                </dl>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </article>
                        
                        <article class="gift-list">
                            <div class="article-header">
                                <h3>애독자 선물 구성</h3>
                            </div>
                            <div class="article-content">
                                <ul>
                                    <li>
                                        <div class="gift-item">
                                            <figure>
                                                <img src="/assets/images/event/img_reader_write.jpg" alt="">
                                            </figure>
                                            <p class="person">1명</p>
                                        </div>
                                        <div class="details">
                                            <h4>[잉글레시나] 트릴로지 컬러스</h4>
                                            <p>
                                                (주)끄레델에서 &lt;앙쥬&gt; 독자들을 위해 잉글레시나 유모차 ‘트릴
                                                로지 컬러스’를 선물한다. 
                                                트릴로지 컬러스는 잉글레시나에서 새롭게 기획한 스페셜 에디션 
                                                제품으로, 시티 블랙 프레임을 적용해 복잡한 도심에서 안정적인 
                                                주행이 가능하게 설계됐다. 
                                                원액션 폴딩과 셀프 스탠딩 기능 등 트릴로지 컬러스만의 장점은 
                                                그대로 유지하면서 4가지 비비드 컬러를 추가해 기존의 클래식한 
                                                느낌과는 다른 화사하고 산뜻한 분위기를 연출할 수 있다.
                                            </p>
                                            <ul>
                                                <li>
                                                    <dl>
                                                        <dt>연락처</dt>
                                                        <dd>1600-0716</dd>
                                                    </dl>
                                                </li>
                                                <li>
                                                    <dl>
                                                        <dt>홈페이지</dt> 
                                                        <dd>
                                                            <a href="http://www.crederemall.co.kr/shop/main/index.php" target="_blank">www.crederemall.co.kr</a>
                                                        </dd>
                                                    </dl>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="gift-item">
                                            <figure>
                                                <img src="/assets/images/event/img_reader_write.jpg" alt="">
                                            </figure>
                                            <p class="person">1명</p>
                                        </div>
                                        <div class="details">
                                            <h4>[잉글레시나] 트릴로지 컬러스</h4>
                                            <p>
                                                (주)끄레델에서 &lt;앙쥬&gt; 독자들을 위해 잉글레시나 유모차 ‘트릴
                                                로지 컬러스’를 선물한다. 
                                                트릴로지 컬러스는 잉글레시나에서 새롭게 기획한 스페셜 에디션 
                                                제품으로, 시티 블랙 프레임을 적용해 복잡한 도심에서 안정적인 
                                                주행이 가능하게 설계됐다. 
                                                원액션 폴딩과 셀프 스탠딩 기능 등 트릴로지 컬러스만의 장점은 
                                                그대로 유지하면서 4가지 비비드 컬러를 추가해 기존의 클래식한 
                                                느낌과는 다른 화사하고 산뜻한 분위기를 연출할 수 있다.
                                            </p>
                                            <ul>
                                                <li>
                                                    <dl>
                                                        <dt>연락처</dt>
                                                        <dd>1600-0716</dd>
                                                    </dl>
                                                </li>
                                                <li>
                                                    <dl>
                                                        <dt>홈페이지</dt> 
                                                        <dd>
                                                            <a href="http://www.crederemall.co.kr/shop/main/index.php" target="_blank">www.crederemall.co.kr</a>
                                                        </dd>
                                                    </dl>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </article>
                        
                        <div class="attention-box">
                            <strong>주의사항</strong>
                            <ul>
                                <li>한번 등록한 내용은 변경하실 수 없습니다.</li>
                                <li>엽서등록확인은 마이페이지 마이앙쥬 > 내 활동 조회에서 확인가능 합니다.</li>
                                <li>애독자 선물의 종류와 수량은 사진과 다를 수 있으며, 구성은 업체 사정으로 공지없이 변경될 수 있습니다.</li>
                                <li>당첨자 발표 후 별도 주소확인은 하지 않으며 주소가 불분명할 경우 선물은 발송되지 않습니다. (번지수가 없거나 아파트 동, 호수 없는 경우)</li>
                                <li>회원 탈퇴 후 재가입하여 신청하더라도 신청기록은 남기 때문에 샘플팩 선정에서 제외됩니다.</li>
                            </ul>
                        </div>
                        <div class="btn-area">
                            <p>
                                <a href="#" class="btn btn-sm btn-pink" role="button">신청</a>
                                <a href="#" class="btn btn-sm btn-white" role="button">취소</a>
                            </p>
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