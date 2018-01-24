<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/ange_mall.css" rel="stylesheet">
</head>
<body class="sub ange_mall"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- pgae-header -->
    <div class="page-header">
        <!-- 폴더별 타이틀 -->
        <h2>장바구니</h2>
        <div class="btn-controls">
            <a href="/ange_mall/big_deal.php" class="prev">
                <i class="icon-left-open-big">
                    <span class="sr-only">이전 페이지</span>
                </i>
            </a>
            <a href="/ange_mall/mileage_list.php" class="next">
                <i class="icon-right-open-big">
                    <span class="sr-only">다음 페이지</span>
                </i>
            </a>
        </div>
    </div>
    
    <!-- sub content start -->
    <main id="content" class="success"><!-- 페이지명 클래스 -->
        <div class="container">
            <section>
                <div class="section-header">
                    <!-- step-list 공통-->
                    <ol class="step-list">
                        <li>
                            <div>
                                <p class="icon-img">
                                    <img src="/assets/images/ange_mall/icon_basket01.png" alt="step01">
                                </p>
                                장바구니
                            </div>
                        </li>
                        <li>
                            <div>
                                <p class="icon-img">
                                    <img src="/assets/images/sub/icon_step02.png" alt="step02">
                                </p>
                                주문 / 결제
                            </div>
                        </li>
                        <li class="active">
                            <div>
                                <p class="icon-img">
                                    <img src="/assets/images/sub/icon_step03_active.png" alt="step03">
                                </p>
                                주문완료
                            </div>
                        </li>
                    </ol>
                    
                    <div class="success-info">
                        <figure>
                            <img src="/assets/images/ange_mall/img_success.png" alt="">
                            <figcaption>
                                주문이 정상적으로 완료되었습니다.
                            </figcaption>
                        </figure>
                        <dl>
                            <dt>주문번호</dt>
                            <dd>000000</dd>
                        </dl>
                        <p>
                            주문내역 및 배송현황은 마이페이지 &gt; 주문현황에서 확인하실 수 있습니다.주문완료 후 주소지를 다시한번 확인하시고 주소지가 다를경우 마이페이지의 주문현황에서 문의를 남겨주세요.
                        </p>
                    </div>
                    
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
                    
                </div>
                <div class="section-content">
                    <div class="table-wrap">
                        <form action="#">
                            <table class="table type-1">
                                <caption>
                                    <h4>회원 정보</h4>
                                </caption> 
                                <tbody>
                                    <tr>
                                        <th>신청자</th>
                                        <td>무브먼트(movementk)</td>
                                    </tr>
                                    <tr>
                                        <th>주소</th>
                                        <td>서울 서초구 양재동 120-1번지 양재빌딩 2층</td>
                                    </tr>
                                    <tr>
                                        <th>연락처</th>
                                        <td>02-1234-5678</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table type-1">
                                <caption>
                                    <h4>배송정보</h4>
                                </caption>
                                <tbody>
                                    <tr>
                                        <th>제목</th>
                                        <td>무브먼트(movementk)</td>
                                    </tr>
                                    <tr>
                                        <th>배송 주소</th>
                                        <td>서울 서초구 양재동 120-1번지 양재빌딩 2층</td>
                                    </tr>
                                    <tr>
                                        <th>추가정보</th>
                                        <td>02-1234-5678</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="btn-area">
                                <p>
                                    <button type="submit" class="btn btn-sm btn-white">계속 쇼핑하기</button>
                                    <a href="#" class="btn btn-sm btn-pink">주문/구매내역</a>
                                </p>
                            </div>
                        </form>
                    </div>
                    
                    <div class="attention-box">
                        <ol>
                            <li>
                                <span>1</span>
                                마일리지몰 상품은 제품의 하자가 아닌 경우를 제외하고 교환 및 반품이 불가능합니다.
                            </li>
                            <li>
                                <span>2</span>
                                마일리지몰 상품은 마일리지 금액에 상관없이 배송비가 모두착불로 요청됩니다. 각 상품의 크기, 무게, 형태에 따라 차이가 있을 수 있습니다.
                            </li>
                            <li>
                                <span>3</span>
                                배송지역은 전국 배송이 가능하나 제주도 및 도서지역은 추가
                                배송비가 붙습니다(배송비 3,000원)
                                <p class="attention">
                                    택배사 배송정책에 의해 제주도 및 도서지역은 배송비를선불로 입금해주셔야 합니다(문자로 계좌안내)
                                </p>
                            </li>
                            <li>
                                <span>4</span>
                                배송은 주문일로부터 2~3일내 발송을 원칙으로 하며, 토,일,공휴일은 배송기간에 포함되지 않습니다
                            </li>
                            <li>
                                <span>5</span>
                                상품은 업체사정상 사진과 다를 수 있음을 알려드립니다.
                            </li>
                        </ol>
                    </div>
                </div>
            </section>
        </div>
    </main>
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
    <script src="/assets/js/common.js"></script>
</body>
</html>