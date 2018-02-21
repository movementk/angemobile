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
        <section class="fortune-step03 name-step03">
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
                    <article class="middle-stroke">
                        <h4 class="naming-title">중간자의 획순만을 선택</h4>
                        <div class="article-content">
                            <div class="table-wrap default-table">
                                <table class="table table-bordered">
                                    <colgroup>
                                        <col style="width: 22%">
                                        <col style="width: 26%">
                                        <col style="width: 26%">
                                        <col style="width: 26%">
                                    </colgroup>
                                    <tbody>
                                        <tr>
                                            <td rowspan="3" class="th-bg">성 김( 金 )</td>
                                            <td class="th-bg">성씨 : 金</td>
                                            <td class="th-bg">중간자</td>
                                            <td class="th-bg">끝자</td>
                                        </tr>
                                        <tr>
                                            <td>임</td>
                                            <td>木</td>
                                            <td>木</td>
                                        </tr>
                                        <tr>
                                            <td>8획</td>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control">
                                                        <option>3</option>
                                                    </select>
                                                    획
                                                </div>
                                            </td>
                                            <td>0,5,10,13,21 획</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="btn-area">
                                    <p>
                                        <a href="#" class="btn btn-sm btn-pink" role="button">진행하기</a>
                                        <a href="#" class="btn btn-sm btn-white" role="button">바구니 보기</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="selection-name">
                        <h4 class="naming-title">원하는 글자를 선택</h4>
                        <p class="summary">
                            음오행에 맞는 한자가 선택되어 다양하게 나옵니다. 마음에 드는 중간자와 끝자를 하나씩 선택하시고 마음에 드는 글자는 <i>[이름저장]</i>을 누르고 저장하면 됩니다.
                        </p>
                        <div class="article-content">
                            <ul>
                                <li>
                                    <strong>좋은한자</strong>
                                    <p>(이름에 좋은 한자)</p>
                                </li>
                                <li>
                                    <strong>상용한자</strong>
                                    <p>(이름에 쓸 수 있는 한자)</p>
                                </li>
                                <li>
                                    <strong>평이한자</strong>
                                    <p>(이름에 평범하게 쓰는 한자)</p>
                                </li>
                            </ul>
                        </div>
                    </article>
                    <article class="middle-name">
                        <h4 class="naming-title">
                            중간글자
                            <p>: 획</p>
                        </h4>
                        <div class="article-content">
                            <!--
                                tr class=""
                                좋은한자  >>  .fine
                                상용한자  >>  .available
                                평이한자  >>  .ordinary
                            -->
                            <div class="table-wrap t-responsive">
                                <table class="table table-bordered">
                                    <colgroup>
                                        <col style="width: 25%;">
                                        <col style="width: 25%;">
                                        <col style="width: 25%;">
                                        <col style="width: 25%;">
                                    </colgroup>
                                    <tbody>
                                        <tr>
                                            <td>한자</td>
                                            <td>음</td>
                                            <td>운</td>
                                            <td>선택</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">
                                                <div class="table-wrap">
                                                    <table class="table table bordered">
                                                        <colgroup>
                                                            <col style="width: 25%;">
                                                            <col style="width: 25%;">
                                                            <col style="width: 25%;">
                                                            <col style="width: 25%;">
                                                        </colgroup>
                                                        <tbody>
                                                            <tr class="fine">
                                                                <td>工</td>
                                                                <td>장인</td>
                                                                <td>공</td>
                                                                <td><input type="radio"></td>
                                                            </tr>
                                                            <tr class="fine">
                                                                <td>久</td>
                                                                <td>오랠</td>
                                                                <td>구</td>
                                                                <td><input type="radio"></td>
                                                            </tr>
                                                            <tr class="fine">
                                                                <td>弓</td>
                                                                <td>활</td>
                                                                <td>궁</td>
                                                                <td><input type="radio"></td>
                                                            </tr>
                                                            <tr class="fine">
                                                                <td>己</td>
                                                                <td>몸</td>
                                                                <td>기</td>
                                                                <td><input type="radio"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>干</td>
                                                                <td>방패</td>
                                                                <td>간</td>
                                                                <td><input type="radio"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </article>
                    <article class="last-name">
                        <h4 class="naming-title">끝글자</h4>
                        <div class="article-content">
                            <!--
                                tr class=""
                                좋은한자  >>  .fine
                                상용한자  >>  .available
                                평이한자  >>  .ordinary
                            -->
                            <div class="table-wrap t-responsive">
                                <table class="table table-bordered">
                                    <colgroup>
                                        <col style="width: 25%;">
                                        <col style="width: 25%;">
                                        <col style="width: 25%;">
                                        <col style="width: 25%;">
                                    </colgroup>
                                    <tbody>
                                        <tr>
                                            <td>한자</td>
                                            <td>음</td>
                                            <td>운</td>
                                            <td>선택</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">
                                                <div class="table-wrap">
                                                    <table class="table table bordered">
                                                        <colgroup>
                                                            <col style="width: 25%;">
                                                            <col style="width: 25%;">
                                                            <col style="width: 25%;">
                                                            <col style="width: 25%;">
                                                        </colgroup>
                                                        <tbody>
                                                            <tr class="fine">
                                                                <td>工</td>
                                                                <td>장인</td>
                                                                <td>공</td>
                                                                <td><input type="radio"></td>
                                                            </tr>
                                                            <tr class="fine">
                                                                <td>久</td>
                                                                <td>오랠</td>
                                                                <td>구</td>
                                                                <td><input type="radio"></td>
                                                            </tr>
                                                            <tr class="fine">
                                                                <td>弓</td>
                                                                <td>활</td>
                                                                <td>궁</td>
                                                                <td><input type="radio"></td>
                                                            </tr>
                                                            <tr class="fine">
                                                                <td>己</td>
                                                                <td>몸</td>
                                                                <td>기</td>
                                                                <td><input type="radio"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>干</td>
                                                                <td>방패</td>
                                                                <td>간</td>
                                                                <td><input type="radio"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </article>
                    <article class="result-name">
                        <h4 class="naming-title">선택한 이름</h4>
                        <p class="summary">
                            선택한 이름이 보입니다. <br>
                            원하는 이름이면 <i>[이름저장]</i>을 누르고 저장하면 됩니다.
                        </p>
                        <div class="article-content">
                            <div class="table-wrap default-table">
                                <table class="table table-bordered">
                                    <colgroup>
                                        <col style="width: 33.33%">
                                        <col style="width: 33.33%">
                                        <col style="width: 33.33%">
                                    </colgroup>
                                    <thead>
                                        <tr>
                                            <th>성(姓)</th>
                                            <th>중간자</th>
                                            <th>끝자</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>임</td>
                                            <td>지</td>
                                            <td>우</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="btn-area">
                                <p>
                                    <a href="#" class="btn btn-sm btn-pink" role="button">이름저장</a>
                                    <a href="#" class="btn btn-sm btn-white" role="button">바구니 보기</a>
                                </p>
                            </div>
                        </div>
                    </article>
                    <article class="disuse-name">
                        <h4 class="naming-title">불용문자 설명</h4>
                        <p>불용문자는 이름에 사용하기에 좋지 않은 뜻을 가진 문자입니다.</p>
                        <div class="article-content">
                            <div class="table-wrap default-table">
                                <table class="table table-bordered">
                                    <colgroup>
                                        <col style="width: 25%">
                                        <col style="width: 25%">
                                        <col style="width: 50%">
                                    </colgroup>
                                    <thead>
                                        <tr>
                                            <th>한자</th>
                                            <th>음/운</th>
                                            <th>뜻</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>夏</td>
                                            <td>여름 하</td>
                                            <td>파란이 많고 도모함은 있으나 이루어짐이 없습니다.</td>
                                        </tr>
                                        <tr>
                                            <td>夏</td>
                                            <td>여름 하</td>
                                            <td>성품이 온화하고 고결하여 많은 사람의 존경을 받을 수 있으나 재물이 모아지지 아니하고 항상 외롭고 고독이 따릅니다.</td>
                                        </tr>
                                        <tr>
                                            <td>夏</td>
                                            <td>여름 하</td>
                                            <td>많은 사람에게 사랑을 받고 또한 남편의 사랑을 한몸에 받기를 소원하여 여성에게 많이 쓰이나 그와는 반대 현상으로 비애의 표본으로 전락하기가 쉽습니다.</td>
                                        </tr>
                                        <tr>
                                            <td>夏</td>
                                            <td>여름 하</td>
                                            <td>수려한 인품에 총명하여 길운을 지니고 있으나 천수를 제대로 누리지 못하고 단명합니다.</td>
                                        </tr>
                                        <tr>
                                            <td>夏</td>
                                            <td>여름 하</td>
                                            <td>화류계의 여성이름으로는 무방하나 부부운이 불길하다.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
    </main>
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
    <script src="/assets/js/common.js"></script>
</body>
</html>