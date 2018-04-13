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
    <main id="content" class="hotdeal-basket02"><!-- 페이지명 클래스 -->
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
                        <li class="active">
                            <div>
                                <p class="icon-img">
                                    <img src="/assets/images/sub/icon_step02_active.png" alt="step02">
                                </p>
                                주문 / 결제
                            </div>
                        </li>
                        <li>
                            <div>
                                <p class="icon-img">
                                    <img src="/assets/images/sub/icon_step03.png" alt="step03">
                                </p>
                                주문완료
                            </div>
                        </li>
                    </ol>
                    
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
								<dt>금액</dt>
								<dd>
									10,000원
									<span>&#40;+1,000원&#41;</span>
								</dd>
								<dt>옵션명</dt>
								<dd>
									<ul class="option">
										<li>
											옵션1
											<span>&#40;+1,000원&#41;</span>
										</li>
										<li>
											옵션2
											<span>&#40;+4,000원&#41;</span>
										</li>
										<li>
											옵션3
											<span>&#40;+4,000원&#41;</span>
										</li>
									</ul>
								</dd>
								<dt>결제액</dt>
								<dd>
									<i>11,000</i>
								</dd>
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
                                    <h4>결제정보</h4>
                                </caption>
                                <tbody>
                                    <tr>
                                        <th>상품금액</th>
                                        <td>10,000 원</td>
                                    </tr>
                                    <tr>
                                        <th class="v-top">옵션명</th>
                                        <!--<td>옵션1 <span>&#40;+1,000 원&#41;</span></td>-->
                                        <td>
                                        	<ul>
                                        		<li>
                                        			옵션
                                        			<span>&#40;+1,000 원&#41;</span>
                                        		</li>
                                        		<li>
                                        			옵션
                                        			<span>&#40;+1,000 원&#41;</span>
                                        		</li>
                                        		<li>
                                        			옵션
                                        			<span>&#40;+1,000 원&#41;</span>
                                        		</li>
                                        		<li>
                                        			옵션
                                        			<span>&#40;+1,000 원&#41;</span>
                                        		</li>
                                        	</ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>총 결제금액</th>
                                        <td>11,000 원</td>
                                    </tr>
                                    <tr>
                                    	<th class="v-top">
                                    		<label for="u-mileage">사용가능<br> 마일리지</label>
                                    	</th>
                                    	<td>
                                    		<div class="form-group">
                                    			<input type="text" id ="u-mileage" class="form-control" placeholder="사용할 마일리지">
                                    		</div>
                                    		<p>
                                    			사용 가능한 최대 마일리지는 최대 <i class="max">5,000 M</i>입니다.
                                    			현재 회원님이 보유하고 계신 마일리지는 <i class="have">5,653 M</i>입니다.
                                    		</p>
                                    	</td>
                                    </tr>
                                    <tr>
                                        <th>결제수단 선택</th>
                                        <td>
                                            <label><input type="radio">신용카드 결제</label>
                                            <label><input type="radio">무통장입금(가상계좌)</label>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            
                            <div class="radio-box">
                                <div class="form-group">
                                    <label><input type="radio">주문자와 동일</label>
                                    <label><input type="radio">새로운 주소</label>
                                </div>
                            </div>
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
                                        <th class="v-top">배송 주소</th>
                                        <td>서울 서초구 양재동 120-1번지 양재빌딩 2층</td>
                                    </tr>
                                    <tr>
                                        <th>추가정보</th>
                                        <td>02-1234-5678</td>
                                    </tr>
                                    <tr>
                                        <th class="v-top"><label for="u-blog">신청이유</label></th>
                                        <td>
                                            <div class="form-group">
                                                <textarea id="reason" class="form-control"></textarea>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="v-top">
                                        <th class="v-top"><label for="speech">신청 한마디</label></th>
                                        <td>
                                            <div class="form-group">
                                                <textarea id="speech" class="form-control"></textarea>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="btn-area">
                                <p>
                                    <button type="submit" class="btn btn-sm btn-pink">결제하기</button>
                                    <a href="#" class="btn btn-sm btn-white">취소하기</a>
                                </p>
                            </div>
                        </form>
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