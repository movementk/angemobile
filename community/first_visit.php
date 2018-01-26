<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/community.css" rel="stylesheet">
</head>
<body class="sub community"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- pgae-header -->
    <div class="page-header">
        <!-- 폴더별 타이틀 -->
        <h2>첫 방문이신가요?</h2>
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
        <article class="first-visit">
            <div class="container">
                <div class="club-tab-menu">
                    <ul>
                        <li><a href="/community/club_intro.php">클럽소개</a></li>
                        <li><a href="/community/education_intro.php">교육팀장 소개</a></li>
                        <li class="active"><a href="/community/first_visit.php">첫 방문이신가요?</a></li>
                    </ul>
                </div>
                <div class="article-content">
                    <ul class="question">
                        <li>
                            <h3>앙쥬클럽에 가입하셨나요?</h3>
                            <div class="details">   
                                <h4>조리원에서 가입하셨다면 앙쥬클럽회원이십니다.</h4>
                                <p>
                                    로그인하시면 앙쥬 간호사 선생님들이 임신,수유,육아에 관련한 전문적인 상담으로 도와드립니다.  로그인 후 [클럽게시판 상담방]을 이용하세요!
                                </p>
                            </div>
                        </li>
                        <li>
                            <h3>아이디와 비밀번호를 잊으셨나요?</h3>
                            <div class="details">   
                                <p>
                                    아이디(이메일 전체주소)/비밀번호(생년월일(주민번호상에 기재된 6자리)로 로그인이 안되시는 경우 아이디/비밀번호 찾기를 통해 검색해 보세요. 로그인 후 <i>새로운 아이디와 비번으로 변경하시면 포인트 적립을 통해 앙쥬에서 더 많은 혜택을 누리실 수 있습니다.</i>
                                </p>
                            </div>
                        </li>
                        <li>
                            <h3>앙쥬클럽은 어떻게 가입하나요?</h3>
                            <div class="details">   
                                <p>
                                    앙쥬클럽은 산후조리원에서 산모교육을 받으신 후 서면가입을 한 회원입니다. 앙쥬클럽에 가입하시고 싶으신분들은 산후조리원으로 문의하시기 바랍니다.  <span>(현재 서울/경기, 부산지역만 가능)</span>
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </article>
    </main>
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
    <script src="/assets/js/common.js"></script>
</body>
</html>