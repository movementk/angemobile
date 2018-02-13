<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/ange_naming.css" rel="stylesheet">
</head>
<body class="sub ange-naming"><!-- 폴더별 클레스 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    
    <!-- pgae-header -->
    <div class="page-header">
        <!-- 폴더별 타이틀 -->
        <div class="page-title">
            <h2>네이밍 서비스 안내</h2>
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
    
    <!-- sub content start -->
    <main id="content">
        <article class="naming-intro"><!-- 페이지 클레스 -->
            <div class="container">
                <ul>
                    <li>
                        <figure>
                            <img src="/assets/images/ange_naming/img_intro01.jpg" class="img-responsive" alt="">
                            <figcaption>
                                <h4>
                                    실시간 작명
                                    <small>Real-time Naming</small>
                                </h4>
                                <p>
                                    10년간 수집된 좋은 이름중에서 모든 성명학 이론을 포함하여<br>
                                    사주를 고려한 대한민국 최고의 실시간 작명 시스템
                                </p>
                            </figcaption>
                        </figure>
                        <div class="btn-area">
                            <p>
                                <a href="#" class="btn btn-md btn-pink" role="button">자세히 보기</a>
                            </p>
                        </div>
                    </li>
                    <li>
                        <figure>
                            <img src="/assets/images/ange_naming/img_intro02.jpg" class="img-responsive" alt="">
                            <figcaption>
                                <h4>
                                    셀프 작명
                                    <small>Self Naming</small>
                                </h4>
                                <p>
                                    신세대 부모를 위한 정말 쉬운 아기 이름 짓기!<br>
                                    전문가 못지 않은 좋은 이름을 손쉽게 따라가며 지을 수 있습니다.
                                </p>
                            </figcaption>
                        </figure>
                        <div class="btn-area">
                            <p>
                                <a href="#" class="btn btn-md btn-pink" role="button">자세히 보기</a>
                            </p>
                        </div>
                    </li>
                    <li>
                        <figure>
                            <img src="/assets/images/ange_naming/img_intro03.jpg" class="img-responsive" alt="">
                            <figcaption>
                                <h4>
                                    스페셜 작명
                                    <small>Special Naming</small>
                                </h4>
                                <p>
                                    사주에 맞는 작명을 원하신다면 작명가 선생님이 직접 아기 이름을<br>
                                    지어드립니다.원하는 이름을 선택하면 작명증서를 보내드립니다. 
                                </p>
                            </figcaption>
                        </figure>
                        <div class="btn-area">
                            <p>
                                <a href="#" class="btn btn-md btn-pink" role="button">자세히 보기</a>
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </article>
    </main>
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
    <script src="/assets/js/common.js"></script>
</body>
</html>