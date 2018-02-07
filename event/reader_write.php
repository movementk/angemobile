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
                                                <img src="/assets/images/event/reader_gift01.jpg" alt="">
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
                                                        <dd>
                                                            <a href="tel:16000716">1600-0716</a></dd>
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
                                                <img src="/assets/images/event/reader_gift02.jpg" alt="">
                                            </figure>
                                            <p class="person">20명</p>
                                        </div>
                                        <div class="details">
                                            <h4>[블랑가또] 코끼리 애착인형</h4>
                                            <p>
                                                제이코퍼레이션에서 &lt;앙쥬&gt; 독자들을 위해 '코끼리 애착인형'을 선물한다. 부드러운 소재로 만든 코끼리 애착인형은 엄마 품처럼 포근해 아기가 편안하게 잠들도록 돕는다. 특히 인형의 
                                                다리부분이 아이의 몸을 감싸 정서적 안정감을 느끼게 한다. 인테리어 소품뿐 아니라 책을 읽거나 놀이할 때도 사용할 수 있어 활용도가 높다. 스몰,미디엄,라지 사이즈로 구성되며 
                                                스몰사이즈는 아이가 안고 다닐수 있을 정도로 작고 가벼워 외출 시 유모차용 장난감으로 사용할 수 있다. 생후 6개월 이전 아이들의 수면인형으로는 미디엄 사이즈가 적합하고 라지 사이즈는 어른이 몸을 기대는
                                                용도로 쓰기에 좋다.
                                            </p>
                                            <ul>
                                                <li>
                                                    <dl>
                                                        <dt>연락처</dt>
                                                        <dd>
                                                            <a href="tel:031-528-7995">031-528-7995</a>
                                                        </dd>
                                                    </dl>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="gift-item">
                                            <figure>
                                                <img src="/assets/images/event/reader_gift03.jpg" alt="">
                                            </figure>
                                            <p class="person">4명</p>
                                        </div>
                                        <div class="details">
                                            <h4>[포브] 미니프리저</h4>
                                            <p>
                                                (주)동인기연에서 &lt;앙쥬&gt; 독자들을 위해 냉장고형 기저귀 가방 ‘미니프리저’를 선물한다. 미니프리저는 국내 최초로 기저귀 가방과 냉장고 기능을 일체화한 제품으로 각종 용품의 간편 수납은 물론 식품의 신선한 보관이 가능하다. 최대 24시간 지속 가능한 보온·보냉 특수 메커니즘을 적용해 별도의 보온·보냉 주머니를 준비하지 않아도 분유, 이유식, 과일, 냉음료 등 온도 유지가 필요한 음식들을 변질 없이 안전하게 보관할 수 있다. 미니프리저만의 퀵뷰 수납은 각종 용품을 쉽고 간편하게 수납할 수 있게 도와주며, 오픈형 지퍼로 편리하고 효율적인 내부 공간 활용이 가능하다. 아기 기저귀 교환 시 청결 유지를 위한 프리미엄 방수 패드와 액체 보관용 드라이 파우치가 내장되어 있다.
                                            </p>
                                            <ul>
                                                <li>
                                                    <dl>
                                                        <dt>연락처</dt>
                                                        <dd><a href="tel:0805797000">080-579-7000</a></dd>
                                                    </dl>
                                                </li>
                                                <li>
                                                    <dl>
                                                        <dt>홈페이지</dt> 
                                                        <dd>
                                                            <a href="http://www.myforb.com/" target="_blank">
                                                                www.myforb.com
                                                            </a>
                                                        </dd>
                                                    </dl>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="gift-item">
                                            <figure>
                                                <img src="/assets/images/event/reader_gift04.jpg" alt="">
                                            </figure>
                                            <p class="person">8명</p>
                                        </div>
                                        <div class="details">
                                            <h4>[베베쿡] 우리 아이 처음 먹는 유산균 프로바이오 4종 시리즈</h4>
                                            <p>
                                                베베쿡이 &lt;앙쥬&gt; 독자들을 위해 ‘우리 아이 처음 먹는 유산균 프로바이오 4종 시리즈’를 선물한다. 베베쿡 프로바이오 시리즈는 이유식을 시작하면서 아이 장 트러블로 고생하는 엄마들의 고민을 해결하기 위해 유산균 분야의 권위자인 지근억 교수 연구팀과 베베쿡이 공동으로 개발한 2중 기능성 건강기능식품이다. 특허 받은 60억 유산균에 면역력을 강화하는 아연이 추가된 ‘프로바이오 베베’, 비타민D가 추가된 ‘프로바이오 썬’, 철분이 추가된 ‘프로바이오 에프’, 멀티비타민이 추가된 ‘프로바이오 패밀리’ 등 총 4가지가 있어 아이부터 성인까지 연령별, 상황에 맞게 제품을 선택할 수 있다. 위산과 담즙산에 강한 특허 받은 유산균이 장까지 살아서 도달하며, 장에 잘 정착하는 것이 특징이다.
                                            </p>
                                            <ul>
                                                <li>
                                                    <dl>
                                                        <dt>연락처</dt>
                                                        <dd><a href="tel:15882655">1588-2655</a></dd>
                                                    </dl>
                                                </li>
                                                <li>
                                                    <dl>
                                                        <dt>홈페이지</dt> 
                                                        <dd>
                                                            <a href="http://www.bebecook.com" target="_blank">www.bebecook.com</a>
                                                        </dd>
                                                    </dl>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="gift-item">
                                            <figure>
                                                <img src="/assets/images/event/reader_gift05.jpg" alt="">
                                            </figure>
                                            <p class="person">2명</p>
                                        </div>
                                        <div class="details">
                                            <h4>[포맘스] 프리미엄 전자동 바운서 락카루</h4>
                                            <p>
                                                (주)비앤케이커뮤니케이션즈에서 &lt;앙쥬&gt; 독자들을 위해 엄마 품보다 더 엄마 같은 ‘포맘스 프리미엄 전자동 바운서 락카루’를 선물한다. 신생아부터 사용 가능한 락카루 바운서는 신생아 성장 발육 상태에 맞춘 인체 공학적 시트 디자인으로 신생아에게 가장 안정적인 자세를 만들어준다. 또한 자동제어 시스템으로 바운서가 앞뒤로 움직이는 동안 아이의 머리가 흔들리지 않도록 안전하게 설계했다. 스마트폰과 MP3를 연결해 아기에게 클래식, 자장가 등을 들려줄 수 있으며 출산 후 손목 통증을 완화해주는 스마트한 바운서다.
                                            </p>
                                            <ul>
                                                <li>
                                                    <dl>
                                                        <dt>연락처</dt>
                                                        <dd><a href="tel:0315281618">031-528-1618</a></dd>
                                                    </dl>
                                                </li>
                                                <li>
                                                    <dl>
                                                        <dt>홈페이지</dt> 
                                                        <dd>
                                                            <a href="http://www.imbaby.co.kr" target="_blank">www.imbaby.co.kr</a>
                                                        </dd>
                                                    </dl>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="gift-item">
                                            <figure>
                                                <img src="/assets/images/event/reader_gift06.jpg" alt="">
                                            </figure>
                                            <p class="person">15명</p>
                                        </div>
                                        <div class="details">
                                            <h4>[조아제약] 디노키즈 오메가3</h4>
                                            <p>
                                                조아제약에서 &lt;앙쥬&gt; 독자들을 위해 ‘디노키즈 오메가3’를 선물한다. 어린이 건기식 디노키즈 오메가3는 무균 배양한 해조류에서 추출한 식물성 오메가 -3를 함유해 중금속, 방사능 등의 우려가 없고 특유의 비린내가 없는 건강기능식품이다. 또한 아이 성장 발달에 좋은 스위스산 프리미엄 비타민 D3와 아연, 9종의 아미노산, 비타민 E를 함유했으며 합성 첨가물은 넣지 않았다. 츄어블 연질캡슐 타입이라 목넘김이 힘든 아이들도 씹어서 섭취하거나 내용물만 짜 먹을 수 있어 간편하며, 공룡 캐릭터의 케이스 디자인과 새싹 모양의 귀여운 캡슐로 아이들이 즐겁게 섭취할 수 있다.
                                            </p>
                                            <ul>
                                                <li>
                                                    <dl>
                                                        <dt>연락처</dt>
                                                        <dd><a href="tel:0809888888">080-988-8888</a></dd>
                                                    </dl>
                                                </li>
                                                <li>
                                                    <dl>
                                                        <dt>홈페이지</dt> 
                                                        <dd>
                                                            <a href="http://www.choa.co.kr" target="_blank">www.choa.co.kr</a>
                                                        </dd>
                                                    </dl>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="gift-item">
                                            <figure>
                                                <img src="/assets/images/event/reader_gift07.jpg" alt="">
                                            </figure>
                                            <p class="person">2명</p>
                                        </div>
                                        <div class="details">
                                            <h4>[치코] 유아용 침대 넥스투미</h4>
                                            <p>
                                                트러스메틱스주식회사에서 &lt;앙쥬&gt; 독자들을 위해 치코의 '넥스투미'를 선물한다. 프리미엄 이동형 아기 침대로 어디에서나 빠르고 간편하게 설치해 사용할 수 있다. 높이를 자유롭게 조절할 수 있어 어른 침대에 맞춰 옆에 놓으면 수유 시 편리하다. 치코 넥스투미는 한쪽 옆면을 개방해 낮에는 아기의 놀이 공간으로, 밤에는 잠자리로 용도 변경이 가능하다. 옆면을 그물 타입 창으로 만들어 공기가 원할하게 순환돼 아이가 잘 수 있는 쾌적한 수면 환경을 만든다. 아이분 아니라 엄마, 아빠의 편안한 수면 환경까지 보장해줘 온 가족의 수면 질을 높인다.
                                            </p>
                                            <ul>
                                                <li>
                                                    <dl>
                                                        <dt>연락처</dt>
                                                        <dd><a href="tel:15995510">1599-5510</a></dd>
                                                    </dl>
                                                </li>
                                                <li>
                                                    <dl>
                                                        <dt>홈페이지</dt> 
                                                        <dd>
                                                            <a href="http://www.chicco.co.kr" target="_blank">www.chicco.co.kr</a>
                                                        </dd>
                                                    </dl>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="gift-item">
                                            <figure>
                                                <img src="/assets/images/event/reader_gift08.jpg" alt="">
                                            </figure>
                                            <p class="person">14명</p>
                                        </div>
                                        <div class="details">
                                            <h4>[보솜이] 프리미엄 천연코튼 17년형</h4>
                                            <p>
                                                깨끗한나라(주)에서 &lt;앙쥬&gt; 독자들을 위해 ‘프리미엄 천연코튼’을 선물한다. 365일 아기 엉덩이에 닿는 기저귀도 옷처럼 건강해야 한다는 생각으로 만든 제품이다. 새롭게 태어난 보솜이 천연코튼 17년형은 100% 미국산 천연 코튼이 안 커버에 들어 있어 연약하고 민감한 아기 피부를 부드럽게 감싼다. 아기 몸에 편안한 초슬림 매직핏으로 10% 더 얇아져 옷맵시를 살렸으며 활동성도 높아졌다. 6,600여 개의 매직 흡수홀과 360도 숨쉬는 에어 커버로 쾌적함을 느낄 수 있다.
                                            </p>
                                            <ul>
                                                <li>
                                                    <dl>
                                                        <dt>연락처</dt>
                                                        <dd><a href="tel:0800822100">080-082-2100</a></dd>
                                                    </dl>
                                                </li>
                                                <li>
                                                    <dl>
                                                        <dt>홈페이지</dt> 
                                                        <dd>
                                                            <a href="http://www.bosomi.co.kr" target="_blank">www.bosomi.co.kr</a>
                                                        </dd>
                                                    </dl>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="gift-item">
                                            <figure>
                                                <img src="/assets/images/event/reader_gift09.jpg" alt="">
                                            </figure>
                                            <p class="person">4명</p>
                                        </div>
                                        <div class="details">
                                            <h4>[큐비앤맘] 출산 준비물 세트(배냇저고리, 손싸개, 턱받이, 속싸개, 방수요, 짱구베개, 바스타월, 대형 욕조)</h4>
                                            <p>
                                                임신, 출산, 유아용품 전문 브랜드 큐비앤맘이 앙쥬 독자들을 위해 8종의 상품으로 구성된 출산 준비물 세트를 선물한다. 큐비앤맘은 국내에 생산 기반이 없는 일부 제품을 제외하고는 국내 생산을 원칙으로 하고 있으며 면제품의 경우 순면 100% 무형광 원단으로 제품을 만들기 때문에 연약하고 민감한 아이 피부에 좋으며 흡수성과 통기성이 뛰어나다. 출산 준비에 꼭 필요한 기본 용품들인 배냇저고리, 손싸개, 턱받이, 속싸개, 방수요, 짱구베개 및 목욕 후 아기 몸을 닦아줄 수 있으며 속싸개로도 사용가능한 대형 바스타월과 오랜 기간에 걸쳐 엄마들에게 인정받은 대형 욕조 등 8종의 선물을 구성해 선물한다. 요즘 인기 트렌드인 북유럽풍의 디자인을 접목했고 부엉이, 고양이, 기린, 곰, 토끼 등 다양하고 귀여운 캐릭터들이 제품에 녹아들어 아기의 편안함과 귀여움을 강조하고 산뜻함과 세련미를 제공한다.
                                            </p>
                                            <ul>
                                                <li>
                                                    <dl>
                                                        <dt>연락처</dt>
                                                        <dd><a href="tel:0319698364">031-969-8364</a></dd>
                                                    </dl>
                                                </li>
                                                <li>
                                                    <dl>
                                                        <dt>홈페이지</dt> 
                                                        <dd>
                                                            <a href="http://www.cubynmom.com" target="_blank">www.cubynmom.com</a>
                                                        </dd>
                                                    </dl>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="gift-item">
                                            <figure>
                                                <img src="/assets/images/event/reader_gift10.jpg" alt="">
                                            </figure>
                                            <p class="person">7명</p>
                                        </div>
                                        <div class="details">
                                            <h4>[캐나다 에코크린] 친환경 패밀리 세제 세트</h4>
                                            <p>
                                                (주)에이치비인터내셔날에서 &lt;앙쥬&gt; 독자들을 위해 캐나다 친환경 세제 ‘에코크린’을 선물한다. 에코크린은 65년 역사를 자랑하는 캐나다 친환경 세제 No.1 생산기업의 글로벌 브랜드다. 천연 식물 성분과 OECD 테스트를 인증받은 생분해 가능 원료를 사용했으며, 세척력까지 우수한 친환경 세제다. 식물성 계면활성제를 함유해 온 가족이 함께 쓸 수 있는 친환경 패밀리 세제 세트(세탁 세제, 주방 세제, 천연소다 표백제, 베이비 세제)로 가족의 건강은 물론 환경까지 지킬 수 있다.
                                            </p>
                                            <ul>
                                                <li>
                                                    <dl>
                                                        <dt>연락처</dt>
                                                        <dd><a href="tel:028590707">02-859-0707</a></dd>
                                                    </dl>
                                                </li>
                                                <li>
                                                    <dl>
                                                        <dt>홈페이지</dt> 
                                                        <dd>
                                                            <a href="http://www.hbmarket.net" target="_blank">www.hbmarket.net</a>
                                                        </dd>
                                                    </dl>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="gift-item">
                                            <figure>
                                                <img src="/assets/images/event/reader_gift11.jpg" alt="">
                                            </figure>
                                            <p class="person">3명</p>
                                        </div>
                                        <div class="details">
                                            <h4>[세이프티 퍼스트] 노미 유모차</h4>
                                            <p>
                                                (주)유진로봇에서 &lt;앙쥬&gt; 독자들을 위해 세이프티 퍼스트의 ‘노미 유모차’를 선물한다. 아이들의 안전과 건강을 최우선 가치로 고려해 박테리아 증식을 억제하고 땀 냄새를 줄여주는 첨단 항균소재를 사용했다. 특히 땀이 잘 차는 엉덩이 부분을 통풍성이 뛰어난 입체원단으로 하고 캐노피는 자외선 차단 기능이 뛰어난 소재로 만들어 아이들이 오랜 시간 동안 쾌적하게 외출을 즐길 수 있다. 안정적인 주행도 눈에 띄는 특징 중 하나. 앞바퀴의 서스펜션이 지면의 충격을 흡수하고 방향 고정 스위치가 울퉁불퉁한 길에서도 부드럽게 움직이게 돕는다.
                                            </p>
                                            <ul>
                                                <li>
                                                    <dl>
                                                        <dt>연락처</dt>
                                                        <dd><a href="tel:15227310">1522-7310</a></dd>
                                                    </dl>
                                                </li>
                                                <li>
                                                    <dl>
                                                        <dt>홈페이지</dt> 
                                                        <dd>
                                                            <a href="http://safety1st-korea.com" target="_blank">safety1st-korea.com</a>
                                                        </dd>
                                                    </dl>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="gift-item">
                                            <figure>
                                                <img src="/assets/images/event/reader_gift12.jpg" alt="">
                                            </figure>
                                            <p class="person">8명</p>
                                        </div>
                                        <div class="details">
                                            <h4>[해즈브로] 디즈니 프린세스 공주옷 갈아입히기</h4>
                                            <p>
                                                해즈브로에서 &lt;앙쥬&gt; 독자들을 위해 2016년 출시한 패션 인형 ‘디즈니 프린세스 공주옷 갈아입히기’를 선물한다. 영화 속 공주와 똑같은 얼굴, 드레스, 각종 소품은 물론 공주의 친구들까지 그대로 재현해 영화 속 세상을 현실 세계로 데려온 듯한 뛰어난 디테일을 자랑한다. 디즈니 프린세스 공주옷 갈아입히기는 제품에 포함되어 있는 풀 스커트, 티렝스 스커트, 페플렘을 원하는 대로 레이어드해 공주를 나만의 스타일로 꾸밀 수 있어 아이들에게 큰 사랑을 받고 있다. (라푼젤과 신데렐라 세트로 발송)
                                            </p>
                                            <ul>
                                                <li>
                                                    <dl>
                                                        <dt>연락처</dt>
                                                        <dd><a href="tel:0236678536">02-3667-8536</a></dd>
                                                    </dl>
                                                </li>
                                                <li>
                                                    <dl>
                                                        <dt>홈페이지</dt> 
                                                        <dd>
                                                            <a href="http://www.hasbroshop.co.kr" target="_blank">www.hasbroshop.co.kr</a>
                                                        </dd>
                                                    </dl>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="gift-item">
                                            <figure>
                                                <img src="/assets/images/event/reader_gift13.jpg" alt="">
                                            </figure>
                                            <p class="person">6명</p>
                                        </div>
                                        <div class="details">
                                            <h4>[한성컴퍼니] tgm 실리콘 젖병ㆍ식기류</h4>
                                            <p>
                                                (주)한성컴퍼니에서 &lt;앙쥬&gt; 독자들을 위해 안전한 실리콘 소재로 만든 'tgm 실리콘 젖병ㆍ식기류'를 선물한다. 국내 생산으로 특허 받은 에어밸브 시스템의 tgm 실리콘 젖병은 FDA 승인을 받은 부드러운 실리콘과 PPSU가 결합된 일체형으로 안전하게 설계되었다. 또한 배앓이 방지 및 온도 감지 센서 기능이 있고 180ml ,260ml 두 가지 용량으로 구성됐다. tgm 실리콘 식기류는 안전한 실리콘 소재에 감성적인 컬러와 창의적인 디자인을 적용한 제품으로 볼,수프볼,플레이트,물컴으로 구성됐다. tgm 제품은 아기의 시각과 상상력을 발달시킬 뿐 아니라 아이에게 먹는 즐거움을 제공한다.
                                            </p>
                                            <ul>
                                                <li>
                                                    <dl>
                                                        <dt>연락처</dt>
                                                        <dd><a href="tel:0319478551">031-947-8551</a></dd>
                                                    </dl>
                                                </li>
                                                <li>
                                                    <dl>
                                                        <dt>홈페이지</dt> 
                                                        <dd>
                                                            <a href="http://www.heartmom.co.kr" target="_blank">www.heartmom.co.kr</a>
                                                        </dd>
                                                    </dl>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="gift-item">
                                            <figure>
                                                <img src="/assets/images/event/reader_gift14.jpg" alt="">
                                            </figure>
                                            <p class="person">3명</p>
                                        </div>
                                        <div class="details">
                                            <h4>[소다스트림] 소스+에이드믹스 시럽 3종</h4>
                                            <p>
                                                소다스트림에서 &lt;앙쥬&gt; 독자들을 위해 홈메이드 천연 탄산수 제조기 ‘소스(SOURCE)’를 선물한다. 3단계 LED 표시기로 탄산의 강도를 확인할 수 있으며, 전기를 사용하지 않아 휴대가 간편하다. 탄산수 전용 병을 쉽게 탈착할 수 있는 스냅락 기술이 적용되었으며, 독일 화산 암반층에서 추출한 천연 탄산가스를 사용해 임신부와 아이도 안심하고 마실 수 있다. 한 개의 실린더로 60L의 탄산수를 제조, 한 잔당 약 60원의 비용이 들어 경제적이다. 세계 유명 디자이너 이브 베하가 디자인한 제품으로 우아함과 실용성을 겸비해 인테리어 아이템으로도 뛰어나다. 탄산수에 혼합해 마실 수 있는 탄산수 시럽 에이드믹스 3종 포함. 색상은 임의 발송.
                                            </p>
                                            <ul>
                                                <li>
                                                    <dl>
                                                        <dt>연락처</dt>
                                                        <dd><a href="tel:16610016">1661-0016</a></dd>
                                                    </dl>
                                                </li>
                                                <li class="home-page">
                                                    <dl>
                                                        <dt>홈페이지</dt> 
                                                        <dd>
                                                            <a href="http://www.sodastream.kr" target="_blank">www.sodastream.kr</a>
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