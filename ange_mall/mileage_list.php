<?php require_once($_SERVER["DOCUMENT_ROOT"]."./inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/ange_mall.css" rel="stylesheet">
</head>
<body class="sub ange_mall"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."./inc/header.php"); ?>
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
    <main id="content" class="mileage-list"><!-- 페이지명 클래스 -->
        <div class="container">
            <section>
                <div class="section-header">
                    <nav class="tab-list">
                        <ul>
                            <li class="active"><a href="#">전체</a></li>
                            <li><a href="#">~10,000 P</a></li>
                            <li><a href="#">~30,000 P</a></li>
                            <li><a href="#">~50,000 P</a></li>
                            <li><a href="#">~100,000 P</a></li>
                            <li><a href="#">100,000 P ~</a></li>
                        </ul>
                    </nav>
                </div>
                
                <div class="section-content">
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
                    </article>
                </div>
            </section>
        </div>
    </main>
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."./inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."./inc/docfoot.php"); ?>
    <script src="/assets/js/common.js"></script>
</body>
</html>