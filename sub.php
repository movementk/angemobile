<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
</head>
<body class="sub"><!-- 폴더별 클레스 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    
    <!-- pgae-header -->
    <div class="page-header">
        <!-- 폴더별 타이틀 -->
        <div class="page-title">
            <h2>e-book</h2>
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
    
    <!-- dropdowns-menu -->
    <div class="dropdowns-menu">
        <div class="drop-container">
            <ul>
                <li><a href="#">E-BOOK</a></li>
                <li class="has-child">
                    <a href="#">임신/출산</a>
                    <ul>
                        <li><a href="#">주차별 정보</a></li>
                        <li><a href="#">임신준비&amp;태교</a></li>
                        <li><a href="#">건강</a></li>
                        <li><a href="#">요리&amp;푸드</a></li>
                        <li><a href="#">출산준비&amp;용품</a></li>
                        <li><a href="#">산후관리</a></li>
                    </ul>
                </li>
                <li class="has-child">
                    <a href="#">성장/건강</a>
                    <ul>
                        <li><a href="#">1~24개월별 정보</a></li>
                        <li><a href="#">3세</a></li>
                        <li><a href="#">4세</a></li>
                        <li><a href="#">5세 이상</a></li>
                        <li><a href="#">이유식&amp;푸드</a></li>
                    </ul>
                </li>
                <li class="has-child">
                    <a href="#">놀이/교육</a>
                    <ul>
                        <li><a href="#">DIY&amp;놀이법</a></li>
                        <li><a href="#">훈육노하우</a></li>
                        <li><a href="#">부모교육</a></li>
                        <li><a href="#">육아용품</a></li>
                    </ul>
                </li>
                <li class="has-child">
                    <a href="#">리빙/헬스</a>
                    <ul>
                        <li><a href="#">데코</a></li>
                        <li><a href="#">실용정보</a></li>
                        <li><a href="#">뷰티&amp;패션</a></li>
                        <li><a href="#">부모건강</a></li>
                    </ul>
                </li>
                <li class="has-child">
                    <a href="#">앙쥬스토리</a>
                    <ul>
                        <li><a href="#">커버스토리</a></li>
                        <li><a href="#">닥터앙쥬 전문가 QNA</a></li>
                        <li><a href="#">영상으로 배우는 육아</a></li>
                        <li><a href="#">브랜드스토리</a></li>
                    </ul>
                </li>
                <li class="has-child">
                    <a href="#">리빙/헬스</a>
                    <ul>
                        <li><a href="#">데코</a></li>
                        <li><a href="#">실용정보</a></li>
                        <li><a href="#">뷰티&amp;패션</a></li>
                        <li><a href="#">부모건강</a></li>
                    </ul>
                </li>
                <li class="has-child">
                    <a href="#">리빙/헬스</a>
                    <ul>
                        <li><a href="#">데코</a></li>
                        <li><a href="#">실용정보</a></li>
                        <li><a href="#">뷰티&amp;패션</a></li>
                        <li><a href="#">부모건강</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <button type="button" class="drop-close-btn">
            <span class="sr-only">메뉴 닫기</span>
        </button>
    </div>
    
    <!-- sub content start -->
    <main id="content"><!-- 페이지 클레스 -->
        <section>
            <div class="container">
                <!-- 페이지 타이틀 -->
                <div class="section-header">
                    <h3 class="section-title">당첨자 발표</h3>
                    <p class="summary">아이디가 기억나지 않으세요?  본인확인 후 아이디를 확인하실 수 있습니다.</p>
                </div>
                <div class="section-content">
                    <!-- 검색영역 -->
                    <p class="ex-txt">STEP LIST</p>
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
                    
                    <!-- 검색영역 -->
                    <p class="ex-txt">검색폼</p>
                    <div class="search-form">
                        <form action="#">
                            <div class="form-group">
                                <select class="form-control">
                                    <option>제목</option>
                                </select>
                                <input type="text" id="search" class="form-control" placeholder="검색어를 입력해 주세요">
                                <label for="search" class="sr-only">검색하기</label>
                            </div>
                            <div class="search-btn">
                                <button type="submit" class="btn btn-default">
                                    <i class="icon-search">
                                        <span class="sr-only">검색버튼</span>
                                    </i>
                                </button>
                            </div>
                        </form>
                    </div>
                    
                    <!-- 달력
                    <p class="ex-txt">달력</p>
                    <div class="search-date">
                        <form action="#">
                            <div class="calendar">
                                <div class="form-group">
                                    <input type="text" id="datepicker1" class="form-control">
                                    <label for="datepicker1">
                                        <i class="icon-calendar-1"></i>
                                    </label>
                                </div>
                                <span>~</span>
                                <div class="form-group">
                                    <input type="text" id="datepicker1" class="form-control">
                                    <label for="datepicker1">
                                        <i class="icon-calendar-1"></i>
                                    </label>
                                </div>
                            </div>
                            <div class="btn-area">
                                <p>
                                    <button class="btn btn-lg btn-pink">조회하기</button>
                                </p>
                            </div>
                        </form>
                    </div>
                    -->
                    
                    <!-- 자주하는 질문 -->
                    <p class="ex-txt">탭메뉴 1</p>
                    <nav class="tab-list">
                        <ul>
                            <li class="active"><a href="#">전체</a></li>
                            <li><a href="#">회원관련</a></li>
                            <li><a href="#">마일리지</a></li>
                            <li><a href="#">이벤트/체험단</a></li>
                            <li><a href="#">커뮤니티</a></li>
                            <li><a href="#">스토어</a></li>
                            <li><a href="#">네이밍</a></li>
                        </ul>
                    </nav>
                    
                    <!-- 탭메뉴 -->
                    <p class="ex-txt">탭메뉴 2</p>
                    <article class="tab-menu">
                        <div class="tab-list-2">
                            <ul>
                                <li class="active"><a href="#">상세 정보</a></li>
                                <li><a href="#">신청자한마디</a></li>
                                <li><a href="#">체험후기</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            컨텐츠 내용
                        </div>
                    </article>
                    
                    <!-- 탭메뉴 3 -->
                    <p class="ex-txt">탭메뉴 3</p>
                    <div class="tab-accordion">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        상품안내
                                    </a>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        content 1
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        상품후기
                                    </a>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        content 2
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        관련상품
                                    </a>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        content 3
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFour">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        주의사항
                                    </a>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                    <div class="panel-body">
                                        content 4
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 인증받기 -->
                    <p class="ex-txt">휴대폰 인증</p>
                    <article class="authentication">
                        <b>회원정보에 등록된 휴대전화 번호와<br>일치해야, 인증번호를 받을 수 있습니다.</b>
                        <p>
                            [인증하기]을 클릭하시면 본인 휴대폰으로<br>실명인증이 가능합니다.<br>일치하는 정보가 없을 시 인증메세지가 뜨지 않습니다.
                        </p>
                        <div class="form">
                            <div class="btn-sms">
                                <a href="#" class="btn btn-white" role="button">휴대폰 인증하기</a>
                            </div>
                            <br><!-- 사용시 br 제거 -->
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="인증번호 입력">
                                <a href="#" class="btn btn-gray" role="button">확인</a>
                            </div>
                        </div>
                    </article>
                    
                    <!-- 검색영역 -->
                    <p class="ex-txt">아이콘 리스트</p>
                    <!-- 폰트 스타일 roboto 일때 span 태그로 적용 -->
                    <ul class="icon-list">
                        <li class="like"><span>123</span></li>
                        <li class="comment"><span>123</span></li>
                        <li class="date"><span>2017-10-10</span></li>
                        <li class="sympathy">공감</li>
                        <li class="user">무브먼트</li>
                        <li class="d-day"><span>D-12</span></li>
                        <li class="point"><span>+1,000</span></li>
                    </ul>
                    
                    <!-- 검색영역 -->
                    <p class="ex-txt">게시판 보기</p>
                    <article class="board-view">
                        <div class="article-header">
                            <h4>애독자엽서 &lt;비트루트 4종 세트&gt; 당첨자 구성품 변경 안내 (5월 엽서 이용)</h4>
                            <ul class="icon-list">
                                <li class="like"><span>123</span></li>
                                <li class="comment"><span>123</span></li>
                                <li class="date"><span>2017-10-10</span></li>
                                <li class="sympathy"><a href="#">공감</a></li>
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
                    
                    <!-- 검색영역 -->
                    <p class="ex-txt">의견 쓰기</p>
                    <article class="review-write">
                        <form action="#">
                            <div class="article-header">
                                <h4>의견쓰기</h4>
                                <div class="form-group">
                                    <textarea id="u-content" class="form-control" placeholder="타인비방, 모욕, 개인정보 노출, 상업광고, 홍보글 등은 공지없이 바로 삭제됩니다."></textarea>
                                    <label for="u-content" class="sr-only"></label>
                                </div>
                                <div class="btn-register">
                                    <button type="submit" class="btn btn-lg btn-gray">등록하기</button>
                                </div>
                            </div>
                            <div class="article-content">
                                <p class="inform">총 <b>120</b>개의 댓글이 있습니다.</p>
                                <ul class="review-list">
                                    <li>
                                        <div class="writer-info">
                                            <h5>영이시니</h5>
                                            <p class="date">2017-10-22</p>
                                        </div>
                                        <div class="review-content">
                                            <p>
                                                38준데 가급적 자연분만하고싶네요 그래도 만약에 재왕절개하게 된다면 참고할 좋은정보 감사해요
                                            </p>
                                            <div class="btn-more">
                                                <a href="#" class="btn btn-xs btn-gray">댓글</a>
                                                <a href="#" class="btn btn-xs btn-gray">수 정</a>
                                                <a href="#" class="btn btn-xs btn-gray">삭 제</a>
                                                <a href="#" class="btn btn-xs btn-gray">신 고</a>
                                                <a href="#" class="btn btn-xs btn-gray">블라인드</a>
                                            </div>
                                        </div>
                                        <div class="reply">
                                            <div class="writer-info">
                                                <h5>영이시니</h5>
                                                <p class="date">2017-10-22</p>
                                            </div>
                                            <div class="reply-content">
                                                38준데 가급적 자연분만하고싶네요 그래도 만약에 재왕절개하게 된다면 참고할 좋은정보 감사해요
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="writer-info">
                                            <h5>영이시니</h5>
                                            <p class="date">2017-10-22</p>
                                        </div>
                                        <div class="review-content">
                                            <p>
                                                38준데 가급적 자연분만하고싶네요 그래도 만약에 재왕절개하게 된다면 참고할 좋은정보 감사해요
                                            </p>
                                            <div class="btn-more">
                                                <a href="#" class="btn btn-xs btn-gray">댓글</a>
                                                <a href="#" class="btn btn-xs btn-gray">수 정</a>
                                                <a href="#" class="btn btn-xs btn-gray">삭 제</a>
                                                <a href="#" class="btn btn-xs btn-gray">신 고</a>
                                                <a href="#" class="btn btn-xs btn-gray">블라인드</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="writer-info">
                                            <h5>영이시니</h5>
                                            <p class="date">2017-10-22</p>
                                        </div>
                                        <div class="review-content">
                                            <p>
                                                38준데 가급적 자연분만하고싶네요 그래도 만약에 재왕절개하게 된다면 참고할 좋은정보 감사해요
                                            </p>
                                            <div class="btn-more">
                                                <a href="#" class="btn btn-xs btn-gray">댓글</a>
                                                <a href="#" class="btn btn-xs btn-gray">수 정</a>
                                                <a href="#" class="btn btn-xs btn-gray">삭 제</a>
                                                <a href="#" class="btn btn-xs btn-gray">신 고</a>
                                                <a href="#" class="btn btn-xs btn-gray">블라인드</a>
                                            </div>
                                            <!-- 댓글수정시 -->
                                            <div class="form-group">
                                                <textarea id="m-content" class="form-control" placeholder="38준데 가급적 자연분만하고싶네요 그래도 만약에 재왕절개하게 된다면 참고할 좋은정보 감사해요"></textarea>
                                                <label for="m-content" class="sr-only"></label>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </form>
                    </article>
                    
                    <!-- 리스트 아이콘 -->
                    <p class="ex-txt">리스트 아이콘</p>
                    <span class="icon icon-new"></span>
                    <span class="icon icon-lock"></span>
                    <span class="icon icon-file"></span>
                    <span class="icon icon-img"></span>
                    
                    <!-- 게시판 리스트 type-1 -->
                    <p class="ex-txt">게시판 리스트 type-1</p>
                    <article class="board-type-1">
                        <ul>
                            <li>
                                <a href="#">
                                    <div class="list-header">
                                        <h4>체험 이벤트 후기 제목 노출 영역입니다.</h4>
                                        <ul class="icon-list">
                                            <li class="user">무브먼트</li>
                                            <li class="date"><span>2017-10-10</span></li>
                                            <li class="like"><span>123</span></li>
                                            <li class="comment"><span>123</span></li>
                                        </ul>
                                    </div>
                                    <div class="details">
                                        <div class="item-img">
                                            <figure>
                                                <img src="/assets/images/sub/board_none_img.jpg" alt="">
                                            </figure>
                                        </div>
                                        <p class="content">
                                            체험 이벤트 후기 컨텐츠 내용이 노출되는 영역입니다. 체험 이벤트 후기 컨텐츠 내용이 노출되는 영역입니다. 체험 이벤트 후기 컨텐츠 내용이 노출되는 영역입니다. 체험 ...
                                        </p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </article>
                    
                    <!-- 게시판 리스트 type-2 -->
                    <p class="ex-txt">게시판 리스트 type-2</p>
                    <article class="board-type-2">
                        <ul>
                            <li>
                                <a href="#">
                                    <h4>당첨자 발표 제목이 노출되는 영역입니다.</h4>
                                    <ul class="icon-list">
                                        <li class="user">무브먼트</li>
                                        <li class="date"><span>2017-10-10</span></li>
                                    </ul>
                                </a>
                            </li>
                        </ul>
                    </article>
                    
                    <!-- 게시판 리스트 -->
                    <p class="ex-txt">게시판 리스트 type-3</p>
                    <article class="board-type-3">
                        <div class="article-header">
                            <ul>
                                <li>적립내용</li>
                                <li class="mileage">적립금</li>
                            </ul>
                        </div>
                        <div class="article-content">
                            <div class="table-wrap">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="subject"><a href="#">딸램의 잠투정도 이제 클라우드비로 안녕~</a></td>
                                            <td class="mileage"><span>333</span> P</td>
                                        </tr>
                                        <tr>
                                            <td class="subject"><a href="#">[아기크림] 쫀득한 킨더퍼페츠 모짜렐라 크림 고보습[아기크림] 쫀득한 킨더퍼페츠 모짜렐라 크림 고보습~</a></td>
                                            <td class="mileage"><span>333</span> P</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </article>
                    
                    <!-- 게시판 리스트 -->
                    <p class="ex-txt">게시판 리스트 type-4</p>
                    <article class="board-type-4">
                        <ul>
                            <li>
                                <div class="list-header">
                                    <a href="#">
                                        <figure>
                                            <img src="/assets/images/sub/img_product01.png" alt="">
                                        </figure>
                                        <p class="item-title">
                                            Botanical Therapy 스텝원 베이비치약 (무불소, 블루베리향) 
                                        </p>
                                    </a>
                                </div>
                                <div class="details-info">
                                    <dl>
                                        <dt>수량</dt>
                                        <dd>1</dd>
                                        <dt>재고</dt>
                                        <dd>있음</dd>
                                        <dt>적립금</dt>
                                        <dd>630</dd>
                                        <dt>가격</dt>
                                        <dd>71,900</dd>
                                    </dl>
                                    <div class="btn-area">
                                        <a href="#" class="btn btn-xs btn-white" role="button">취소</a>
                                        <a href="#" class="btn btn-xs btn-white" role="button">문의</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="list-header">
                                    <a href="#">
                                        <figure>
                                            <img src="/assets/images/sub/img_product01.png" alt="">
                                        </figure>
                                        <p class="item-title">
                                            Botanical Therapy 스텝원 베이비치약 (무불소, 블루베리향) 
                                        </p>
                                    </a>
                                </div>
                                <div class="details-info">
                                    <dl>
                                        <dt>수량</dt>
                                        <dd>
                                            <div class="form-group">
                                                <select class="form-control">
                                                    <option>1</option>
                                                </select>
                                            </div>
                                        </dd>
                                        <dt>재고</dt>
                                        <dd>있음</dd>
                                        <dt>적립금</dt>
                                        <dd>630</dd>
                                        <dt>가격</dt>
                                        <dd>71,900</dd>
                                    </dl>
                                    <div class="btn-area">
                                        <a href="#" class="btn btn-md btn-white" role="button">취소</a>
                                        <a href="#" class="btn btn-md btn-pink" role="button">문의</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </article>
                    
                    <!-- 게시판 리스트 -->
                    <p class="ex-txt">게시판 리스트 type-5</p>
                    <article class="board-type-5">
                        <ul class="row">
                            <li class="col-xs-6">
                                <a href="#">
                                    <figure>
                                        <img src="/assets/images/sub/img_product02.jpg" alt="">
                                    </figure>
                                    <div class="details">
                                        <p>Botanical Therapy 스텝원 베이비 치약 (무불소, 블루베리향)</p>
                                        <small>5,600 P</small>
                                    </div>
                                </a>
                            </li>
                            <li class="col-xs-6">
                                <a href="#">
                                    <figure>
                                        <img src="/assets/images/sub/img_product03.jpg" alt="">
                                    </figure>
                                    <div class="details">
                                        <p>드림베이비 가스레인지 &amp; 오븐 손잡이 보호대</p>
                                        <small>5,600 P</small>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        
                        <p class="ex-txt">border 값이 있을경우</p>
                        <!-- border 값이 있을경우 -->
                        <ul class="row border-line">
                            <li class="col-xs-6">
                                <a href="#">
                                    <figure>
                                        <img src="/assets/images/sub/img_product02.jpg" alt="">
                                    </figure>
                                    <div class="details">
                                        <p>Botanical Therapy 스텝원 베이비 치약 (무불소, 블루베리향)</p>
                                        <small>5,600 P</small>
                                    </div>
                                </a>
                            </li>
                            <li class="col-xs-6">
                                <a href="#">
                                    <figure>
                                        <img src="/assets/images/sub/img_product03.jpg" alt="">
                                    </figure>
                                    <div class="details">
                                        <p>드림베이비 가스레인지 &amp; 오븐 손잡이 보호대</p>
                                        <small>5,600 P</small>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </article>
                    
                    <!-- 게시판 리스트 -->
                    <p class="ex-txt">게시판 리스트 type-6</p>
                    <article class="board-type-6">
                        <!--
                            진행중 : ongoing
                            종료 : finish
                        -->
                        <ul>
                            <li>
                                <div>
                                    <div class="situation">
                                        <span class="ongoing">진행중</span>
                                        <p class="date">2017-12-01 ~ 2017-12-01</p>
                                    </div>
                                    <p class="subject">
                                        공지사항 제목이 노출되는 영역입니다.공지 사항 제목이 노출되는 영역입니다.
                                    </p>
                                    <div class="btn-result">
                                        <a href="#" class="btn btn-xs btn-white" role="button">결과보기</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <div class="situation">
                                        <span class="finish">완 료</span>
                                        <p class="date">2017-12-01 ~ 2017-12-01</p>
                                    </div>
                                    <p class="subject">
                                        공지사항 제목이 노출되는 영역입니다.공지 사항 제목이 노출되는 영역입니다.
                                    </p>
                                    <div class="btn-result">
                                        <a href="#" class="btn btn-xs btn-white" role="button">결과보기</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </article>
                    
                    
                    <!-- 테이블 -->
                    <p class="ex-txt">테이블 type-1</p>
                    <div class="table-wrap">
                        <!-- caption 이 들어갈 경우 클래스 table-bordered 제거 -->
                        <table class="table type-1">
                            <caption>
                                <h4>회원정보</h4>
                                <div class="btn-link">
                                    <a href="#" class="btn btn-default" role="button">회원정보 수정</a>
                                </div>
                            </caption>
                            <tbody>
                                <tr>
                                    <th>신청자</th>
                                    <td>무브먼트(movementk)</td>
                                </tr>
                                <tr>
                                    <th class="essential"><label for="u-name">아이디</label></th>
                                    <td class="overlap-confirm">
                                        <div class="form-group">
                                            <input type="text" id="u-name" class="form-control">
                                            <div class="btn-overlap-confirm">
                                                <a href="#" class="btn btn-default" role="button">중복확인</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="essential"><label for="u-zip-code">우편번호</label></th>
                                    <td class="zip-code">
                                        <div class="form-group">
                                            <input type="text" id="u-zip-code" class="form-control">
                                            <div class="btn-overlap-confirm">
                                                <a href="#" class="btn btn-default" role="button">우편번호</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="u-sns">SNS 주소</label></th>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" id="u-sns" class="form-control">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>파일첨부</th>
                                    <td class="file">
                                        <div class="form-group">
                                            <input type="file" id="attach" class="form-control">
                                            <label for="attach">찾아보기</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="u-blog">블로그 주소</label></th>
                                    <td>
                                        <div class="form-group add-input">
                                            <input type="text" id="u-blog" class="form-control">
                                            <div class="add-btn">
                                                <a href="#" class="plus">
                                                    <i class="icon-plus-1">
                                                        <span class="sr-only">추가하기</span>
                                                    </i>
                                                </a>
                                                <a href="#" class="minus">
                                                    <i class="icon-minus">
                                                        <span class="sr-only">제거하기</span>
                                                    </i>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <!-- 공통 게시판 쓰기 -->
                        <p class="ex-txt">게시판 쓰기</p>
                        <table class="table table-bordered table-write type-1">
                            <tbody>
                                <tr>
                                    <th class="v-top"><label for="subject">제목</label></th>
                                    <td>
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option>구분</option>
                                            </select>
                                            <input type="text" id="subject" class="form-control">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="v-top"><label for="u-content">내용</label></th>
                                    <td>
                                        <div class="form-group">
                                            <textarea id="u-content" class="form-control"></textarea>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>파일첨부</th>
                                    <td class="file">
                                        <div class="form-group">
                                            <input type="file" id="attach" class="form-control">
                                            <label for="attach">찾아보기</label>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <p class="ex-txt">상품정보</p>
                    <div class="view-details">
                        <div class="product">
                            <a href="#">
                                <figure>
                                    <img src="/assets/images/sub/img_product01.png" alt="">
                                </figure>
                                <p class="item-title">Botanical Therapy 스텝원 베이비치약 (무불소, 블루베리향) </p>
                            </a>
                            <dl>
                                <dt>수량</dt>
                                <dd>1</dd>
                                <dt>재고</dt>
                                <dd>있음</dd>
                                <dt>적립금</dt>
                                <dd>630</dd>
                                <dt>가격</dt>
                                <dd>71,900</dd>
                            </dl>
                        </div>
                        <div class="total">
                            <ul>
                                <li>합계 40,000 원</li>
                                <li>배송비 0 원(착불)</li>
                            </ul>
                            <p class="payment">총 결제금액 <strong>71,900</strong> <span>원</span></p>
                        </div>
                    </div>
                    
                    <!-- 주의사항 -->
                    <p class="ex-txt">주의사항</p>
                    <div class="attention-box">
                        <strong>주의사항</strong>
                        <ol class="decimal-list">
                            <li>반드시 임신부만 응모하세요 (남자회원 신청불가)</li>
                            <li>임신부 증거자료는 1장만 등록 가능하며 사진이 미흡할 경우 당첨이 취소됩니다. (관련없는 사진, 예정일이 없는 사진을 올려줄 경우)</li>
                            <li>임신부 증거자료가 본인의 것이 아니거나 중복해서 등록할 경우 선정에서 제외됩니다.</li>
                            <li>당첨자 발표 후 별도 주소확인은 하지 않으며 주소가 불분명할 경우 선물은 발송되지 않습니다. (번지수가 없거나 아파트 동, 호수 없는 경우)</li>
                        </ol>
                    </div>
                    
                    <!-- paging -->
                    <p class="ex-txt">페이징</p>
                    <nav class="paging" aria-label="Page navigation">
                        <ul class="pagination">
                            <li class="first">
                                <a href="#" aria-label="Previous">
                                    <i class="icon-angle-double-left"></i>
                                </a>
                            </li>
                            <li class="prev">
                                <a href="#" aria-label="Previous">
                                    <i class="icon-angle-left"></i>
                                </a>
                            </li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li class="next">
                                <a href="#" aria-label="Next">
                                    <i class="icon-angle-right"></i>
                                </a>
                            </li>
                            <li class="last">
                                <a href="#" aria-label="Next">
                                    <i class="icon-angle-double-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    
                    <!-- 이벤트 아이템 -->
                    <p class="ex-txt">이벤트 아이템</p>
                    <aritlce>
                        <!--
                            오늘오픈 > today-event
                            오늘마감 > today-closing
                            응모종료 > finish-event
                        -->
                        <ul class="event-list">
                            <li class="event-item today-event">
                                <a href="#">
                                    <div class="item">
                                        <img src="/assets/images/sub/img_event_item01.jpg" alt="">
                                        <div class="event-backdrop">
                                            <p>오늘<br>오픈</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="event-item today-closing">
                                <a href="#">
                                    <div class="item">
                                        <img src="/assets/images/sub/img_event_item01.jpg" alt="">
                                        <div class="event-backdrop">
                                            <p>오늘<br>마감</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="event-item finish-event">
                                <a href="#">
                                    <div class="item">
                                        <img src="/assets/images/sub/img_event_item01.jpg" alt="">
                                        <div class="event-backdrop">
                                            <p>응모<br>종료</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </aritlce>
                    
                    
                    <!-- 버튼 종류 -->
                    <p class="ex-txt">버튼 종류</p>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-xs btn-white" role="button">수정</a>
                            <a href="#" class="btn btn-xs btn-white" role="button">삭제</a>
                            <a href="#" class="btn btn-xs btn-pink" role="button">목록</a>
                            <a href="#" class="btn btn-xs btn-gray" role="button">목록</a>
                        </p>
                        <br>
                        <p>
                            <a href="#" class="btn btn-sm btn-white" role="button">확인</a>
                            <a href="#" class="btn btn-sm btn-pink" role="button">취소</a>
                        </p>
                        <br>
                        <p>
                            <a href="#" class="btn btn-md btn-white" role="button">확인</a>
                            <a href="#" class="btn btn-md btn-pink" role="button">취소</a>
                        </p>
                        <br>
                        <p>
                            <a href="#" class="btn btn-lg btn-white" role="button">구경가기</a>
                        </p>
                        <br>
                        <p>
                            <a href="#" class="btn btn-lg btn-pink" role="button">응모하기</a>
                        </p>
                        <br>
                        <p>
                            <a href="#" class="btn btn-lg btn-white btn-more" role="button">자세히보기</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
    <script src="/assets/js/common.js"></script>
    <script src="/assets/js/common2.js"></script>
</body>
</html>