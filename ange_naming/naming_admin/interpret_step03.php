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
            <h2>진행하기</h2>
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
        <section class="interpret-step03">
            <div class="container">
                <div class="section-header">
                    <div class="caution-box">
                        <strong>작명 진행 안내</strong>
                        <ol class="decimal-list">
                            <li>로그인 → 신청서 작성 → 결제 → [진행하기] 메뉴 선택</li>
                            <li>서비스는 30일 동안 이용 가능하며 서비스를 이용하신 후에는 <i>환불이 불가</i>합니다.
                            </li>
                        </ol>
                        <p class="attention">
                            추천 이름은 입력하신 데이터에 따라 다르며 (3~20개 사이) 추천 이름 데이터가 전혀 없는 경우는 관리자에게 연락주십시오 (네이밍 고객센터 : <a href="tel:02-333-4560">02-333-4560</a> 내선 1번)
                        </p>
                    </div>
                </div>
                <div class="section-content">
                    <article>
                        <h4 class="naming-title">회원님의 이름풀이 입력확인</h4>
                        <p class="summary">이름풀이에 따른 한자를 확인하시기 바랍니다.</p>
                        <div class="article-content">
                            <div class="article-content">
                                <div class="table-wrap">
                                    <table class="table table-bordered type-1">
                                        <tbody>
                                            <tr>
                                                <th>이름 (한글)</th>
                                                <td>김경규</td>
                                            </tr>
                                            <tr>
                                                <th>이름 (한자)</th>
                                                <td>金經圭</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="">
                        <h4 class="naming-title">음오행</h4>
                        <p class="summary">회원님의 음오행에 따른 이름평가를 보여드립니다.</p>
                        <div class="article-content five-elements">
                            <p>
                                정, 기, 신 모두가 쇠로 되어 있는 형상이다<br>
                                우주의 기운은 크게 분류하여 다섯 가지로 구성되어 있는데
                                그 중에서 금기인 쇠 만으로 정, 기, 신이 가득 차 있다<br><br>
                                한쪽 방면으로 완벽한 구성은 이루었으나 다른 이면을 갖추기에는 어딘가 모르게 부족한 부분이 있다<br><br>
                                이 이름은 말 그대로 쇠나 칼과 같은 모양이다<br><br>
                                따라서 이 이름을 가진 사람은 성질은 과감하기 그지없고 의리가 있고 불의를 보면 참지 못하고 쉽사리 움직이지도 않지만 움직였다 하면 결단을 보고야 마는 성격이다
                            </p>
                        </div>
                    </article>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-sm btn-pink" role="button">증서 출력</a>
                            <a href="#" class="btn btn-sm btn-white" role="button" onclick="onPopupWindow()">이름풀이 출력</a>
                            <a href="#" class="btn btn-sm btn-white" role="button">바구니 보기</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
    <script src="/assets/js/common.js"></script>
    <script>
        function onPopupWindow(){  
            window.open('interpret_popup.php', '_blank', 'scrollbars=yes');
        }
    </script>
</body>
</html>