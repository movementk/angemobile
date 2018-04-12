<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/ange_mall.css" rel="stylesheet">
</head>
<body class="sub ange_mall"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- pgae-header -->
    <div class="page-header">
        <!-- 폴더별 타이틀 -->
        <h2>마일리지몰</h2>
        <div class="btn-controls">
            <a href="#" class="prev">
                <i class="icon-left-open-big">
                    <span class="sr-only">이전 페이지</span>
                </i>
            </a>
            <a href="/ange_mall/big_deal.php" class="next">
                <i class="icon-right-open-big">
                    <span class="sr-only">다음 페이지</span>
                </i>
            </a>
        </div>
    </div>
    
    <!-- sub content start --> 
    <main id="content" class="hotdeal-view"><!-- 페이지명 클래스 -->
        <div class="container">
            <section class="product-report">
                <div class="section-header">
                    <figure>
                        <img src="/assets/images/ange_mall/img_product.jpg" alt="">
                    </figure>
                    <div class="sns-like">
                        <ul class="sns-share">
                            <li>
                                <a href="#">
                                    <img src="/assets/images/ange_mall/img_icon_blog.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/assets/images/ange_mall/img_icon_tweeter.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/assets/images/ange_mall/img_icon_facebook.png" alt="">
                                </a>
                            </li>
                        </ul>
                        <p class="btn-like">
                            <a href="#" class="btn btn-xs btn-white" role="button">
                                123<i class="icon-heart"></i>
                            </a>
                        </p>
                    </div>
                    <div class="information">
                        <div class="info-head">
                            <h3>
                                착용해보시개 &lt;벨라베이비해피 기저귀&gt; 체험단이벤트</h3>
                            <p>
                                눅눅함을 잡는 강한 흡수력! 유럽 프리미엄 기저귀 벨라베이비해피
                            </p>
                        </div>
                        <div class="info-body">
                            <div class="info-first">
                                <dl>
                                    <dt>판매가격</dt>
                                    <dd>200,000 원</dd>
                                    <dt>타임세일 기간</dt>
                                    <dd>
                                    	<i class="time-date">18.04.02 13:00 ~ 18.04.07 15:00</i>
                                    </dd>
                                    <dt>타임세일 가격</dt>
                                    <dd>
                                    	<i class="time-price">150,000 원</i>
                                    </dd>
                                    <dt>배송비</dt>
                                    <dd>2,500 원</dd>
                                    <dt>판매사</dt>
                                    <dd>포그네</dd>
                                </dl> 
                            </div>
                            <div class="info-second">
                                <dl>
                                    <dt>전체수량</dt>
                                    <dd>
                                    	<i>9개</i>
                                    </dd>
                                    <dt><label for="amount">구입수량</label></dt>
                                    <dd>
                                    	<div class="form-group">
                                    		<input type="text" id="amount" class="form-control" placeholder="0">
                                    	</div>
                                    </dd>
                                    <dt><label for="mileage">마일리지</label></dt>
                                    <dd>
                                    	<div class="form-group">
                                    		<input type="text" id="mileage" class="form-control">
                                    	</div>
                                    </dd>
                                    <dt>옵션</dt>
                                    <dd>
                                    	<div class="form-group">
											<select class="form-control">
												<option>선택</option>
											</select>
										</div>
                                    </dd>
                                    <dt>배송비</dt>
                                    <dd>
                                    	<i>2,500 원 착불</i>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-md btn-pink" role="button">장바구니</a>
                            <a href="#" class="btn btn-md btn-white" role="button">쇼핑하기</a>
                            <a href="#" class="btn btn-lg btn-naver" role="button">
                            	구매하기
                            </a>
                        </p>
                    </div>
                </div>
                
                <div class="section-content">
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
                                        <figure>
                                            <img src="/assets/images/ange_mall/img_product_content.png" alt="">
                                        </figure>
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
                                        <a href="#">
                                            <figure>
                                                <img src="/assets/images/ange_mall/img_product_banner.jpg" alt="">
                                            </figure>
                                        </a>
                                        <!-- 리뷰 리스트 -->
                                        <article class="board-type-2 mileage-review-list">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <h4>
                                                            자주하는 질문 제목이 노출되는 영역입니다.
                                                            <span class="icon icon-new"></span>
                                                            <span class="icon icon-lock"></span>
                                                            <span class="icon icon-file"></span>
                                                            <span class="icon icon-img"></span>
                                                        </h4>
                                                        <ul class="icon-list">
                                                            <li class="user">무브먼트</li>
                                                            <li class="date"><span>2017-12-01</span></li>
                                                        </ul>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <h4>자주하는 질문 제목이 노출되는 영역입니다.</h4>
                                                        <ul class="icon-list">
                                                            <li class="user">무브먼트</li>
                                                            <li class="date"><span>2017-12-01</span></li>
                                                        </ul>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <h4>자주하는 질문 제목이 노출되는 영역입니다.</h4>
                                                        <ul class="icon-list">
                                                            <li class="user">무브먼트</li>
                                                            <li class="date"><span>2017-12-01</span></li>
                                                        </ul>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <h4>자주하는 질문 제목이 노출되는 영역입니다.</h4>
                                                        <ul class="icon-list">
                                                            <li class="user">무브먼트</li>
                                                            <li class="date"><span>2017-12-01</span></li>
                                                        </ul>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <h4>자주하는 질문 제목이 노출되는 영역입니다.</h4>
                                                        <ul class="icon-list">
                                                            <li class="user">무브먼트</li>
                                                            <li class="date"><span>2017-12-01</span></li>
                                                        </ul>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <h4>자주하는 질문 제목이 노출되는 영역입니다.</h4>
                                                        <ul class="icon-list">
                                                            <li class="user">무브먼트</li>
                                                            <li class="date"><span>2017-12-01</span></li>
                                                        </ul>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <h4>자주하는 질문 제목이 노출되는 영역입니다.</h4>
                                                        <ul class="icon-list">
                                                            <li class="user">무브먼트</li>
                                                            <li class="date"><span>2017-12-01</span></li>
                                                        </ul>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <h4>자주하는 질문 제목이 노출되는 영역입니다.</h4>
                                                        <ul class="icon-list">
                                                            <li class="user">무브먼트</li>
                                                            <li class="date"><span>2017-12-01</span></li>
                                                        </ul>
                                                    </a>
                                                </li>
                                            </ul>
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
                                            <div class="btn-area">
                                                <p>
                                                    <a href="#" class="btn btn-xs btn-pink" role="button">후기 등록</a>
                                                </p>
                                            </div>
                                        </article>
                                        
                                        <br><br><br>
                                        <!-- 리뷰 뷰 -->
                                        <article class="board-view mileage-review-view">
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
                                            </div>
                                        </article>
                                        
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
                                        <article class="board-type-5">
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
                                        <figure>
                                            <img src="/assets/images/ange_mall/img_careful.jpg" alt="">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
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