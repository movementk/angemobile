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
    <main id="content" class="hotdeal-basket01"><!-- 페이지명 클래스 -->
        <div class="container">
            <section>
                <div class="section-header">
                    <!-- step-list 공통-->
                    <ol class="step-list">
                        <li class="active">
                            <div>
                                <p class="icon-img">
                                    <img src="/assets/images/ange_mall/icon_basket01_active.png" alt="step01">
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
                        <li>
                            <div>
                                <p class="icon-img">
                                    <img src="/assets/images/sub/icon_step03.png" alt="step03">
                                </p>
                                주문완료
                            </div>
                        </li>
                    </ol>
                    
                </div>
                <div class="section-content">
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
                                        <dd>
                                            <div class="form-group">
                                                <select class="form-control">
                                                    <option>1</option>
                                                </select>
                                            </div>
                                        </dd>
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
                                        <dt>가격</dt>
                                        <dd>
                                        	<i>11,000</i>
                                        </dd>
                                    </dl>
                                    <div class="btn-area">
                                        <a href="#" class="btn btn-md btn-white" role="button">삭제</a>
                                        <a href="#" class="btn btn-md btn-pink" role="button">구매</a>
                                    </div
>                                </div>
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
                                        <dt>가격</dt>
                                        <dd>
                                        	<i>11,000</i>
                                        </dd>
                                    </dl>
                                    <div class="btn-area">
                                        <a href="#" class="btn btn-md btn-white" role="button">삭제</a>
                                        <a href="#" class="btn btn-md btn-pink" role="button">구매</a>
                                    </div
>                                </div>
                            </li>
                        </ul>
                    </article>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-sm btn-pink" role="button">전체 구매하기</a>
                            <a href="#" class="btn btn-sm btn-white" role="button">쇼핑 계속하기</a>
                        </p>
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