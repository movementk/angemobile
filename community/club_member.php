<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/community.css" rel="stylesheet">
</head>
<body class="sub community"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- pgae-header -->
    <div class="page-header">
        <!-- 폴더별 타이틀 -->
        <h2>회원사 소개</h2>
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
    
    <!-- sub content start -->
    <main id="content">
        <article class="club-member">
            <div class="container">
                <div class="club-tab-menu type-2">
                    <ul>
                        <li class="active"><a href="/community/club_member.php">앙쥬클럽 회원사 소개</a></li>
                        <li><a href="/community/sponsor.php">앙쥬클럽 후원사 소개</a></li>
                    </ul>
                </div>
                <div class="article-content">
                    <div class="member-company msd">
                        <figure>
                            <img src="/assets/images/community/img_company01.jpg" class="img-responsive" alt="">
                        </figure>
                        <div class="company-info">
                            <p class="logo"><img src="/assets/images/community/logo_msd.jpg" alt=""></p>
                            <h3>MSD(한국엠에스디)</h3>
                            <a href="http://www.msd-korea.com/" target="_blank">http://www.msd-korea.com/</a>
                            <p class="summary">
                                한국MSD는 글로벌 헬스케어 기업인 머크(Merck &amp; Co., Inc)의 한국법인으로 1994년 설립된 이후 우수 의약품과 전문 의학정보를 제공 해왔습니다. 머크의 창립자인 조지 W.머크(George W. Merck)가 남긴 “의약품은 환자를 위한 것이지 기업의 이윤을 위한 것이 아니다.”라는 말은 오늘날 머크의 ‘건강한 세계’ 를 만들기 위 한 모든 노력의 근간입니다.
                            </p>
                        </div>
                        <div class="company-item">
                            <p class="item-img"><img src="/assets/images/community/mds_item.jpg" alt=""></p>
                            <h4>로타바이러스</h4>
                            <p>
                                로타바이러스는 매우 쉽게 감염되는 바이러스로, 전세계적으로 5세 미만의 거의 모든 아이들이 로타바이러스에 감염됩니다. 로타바이러스에 의한 위장관염은 영아와 어린아이들에게 설사를 일으키는 주요 원인입니다. 로타바이러스 질환을 일으키는 로타바이러스에는 여러가지 타입이 있고 해마다 지역이 바뀌기 때문에 로타바이러스 백신으로 가장 흔한 5가지 로타바이러스 타입을 예방하는 것이 중요합니다.
                            </p>
                            <h4>로타텍</h4>
                            <p>
                                로타텍®은 전 세계적으로 로타바이러스 감염의 95%를 차지하는 가장 흔한 5가지 G타입에 대해 예방을 도울 수 있는 경구용 5가 로타바이러 스 생백신입니다. 로타텍은 액상제제의 경구용 백신으로 3회 접종합니다. 로타텍의 1차투여는 생후 6-12주에 하고, 이 후 각 투여간 4주내지 10주의 간격을 두고 추가투여 합니다.
                            </p>
                        </div>
                    </div>
                    <div class="member-company sanofi">
                        <figure>
                            <img src="" class="img-reponsive" alt="">
                        </figure>
                    </div>
                    <div class="member-company edu-challenge">
                        <figure>
                            <img src="" class="img-reponsive" alt="">
                        </figure>
                    </div>
                    <div class="member-company greenfinger">
                        <figure>
                            <img src="" class="img-reponsive" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </article>
    </main>
    
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
    <script src="/assets/js/common.js"></script>
</body>
</html>