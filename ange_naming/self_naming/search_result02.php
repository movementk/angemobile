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
        <section class="search-result search-result02">
            <div class="container">
                <div class="section-header">
                    <div class="caution-box gray">
                        <strong>작명 진행 안내</strong>
                        <ol class="decimal-list">
                            <li>로그인 → 신청서 작성 → 결제 → [진행하기] 메뉴 선택</li>
                            <li>서비스는 30일 동안 이용 가능하며 서비스를 이용하신 후에는 <i>환불이 불가</i>합니다.</li>
                        </ol>
                        <p class="note">추천 이름은 입력하신 데이터에 따라 다르며 (3~20개 사이) 추천 이름 데이터가 전혀 없는 경우는 관리자에게 연락주십시오 (네이밍 고객센터 : 02-333-4560 내선 1번)</p>
                    </div>
                </div>
                <div class="section-content">
                    <article>
                        <div class="article-header">
                            <h3 class="naming-title">작명신청</h3>
                            <ul>
                                <li>실시간 이름은 작명가의 손길로 하나하나 다듬은 명품(名品)의 이름입니다.</li>
                                <li>원하는 한글이름이나 다른 성별(중성적 이름을 원할 때)의 이름을 다시 검색할 수 있습니다.</li>
                                <li>통계청에 등록된 275개의 모든 성씨(姓氏)를 기준으로 하여 직접 작명(作名)한 것이기 때문에 원하는 이름이나 다양한 맞춤 이름이 부족할 수 있습니다.</li>
                                <li>돌림자(특정한자) 및 사주오행 작명하기 메뉴와 함께 이용하시면 최상(最上)의 이름을 정할 수 있습니다.</li>
                                <li>본 실시간 이름은 성씨+2글자(예, 홍+길동) 이름만 이용 가능합니다.</li>
                                <li>
                                    <i>한글이름(부분 또는 전체)으로 또는 다른 성별을 다시 검색할 수 있습니다.</i><br>
                                    (한글이름이 성명학의 조건에 맞지 않을 경우 검색되지 않을 수 있습니다.)
                                </li>
                            </ul>
                            <div class="naming-search">
                                <form action="#">
                                    <ul class="">
                                        <li>
                                            <dl>
                                                <dt>한글이름</dt>
                                                <dd>
                                                    <div class="form-group">
                                                        <p>林</p>
                                                        <input type="text" id="u-name-1" class="form-control">
                                                        <label for="u-name-1" class="sr-only">name</label>
                                                        <input type="text" id="u-name-2" class="form-control">
                                                        <label for="u-name-2" class="sr-only">name</label>
                                                    </div>
                                                </dd>
                                            </dl>
                                        </li>
                                        <li>
                                            <dl>
                                                <dt>성별</dt>
                                                <dd>
                                                    <div class="form-group">
                                                        <select class="form-control">
                                                            <option>모두</option>
                                                        </select>
                                                        <div class="btn-area">
                                                            <p>
                                                                <a href="#" class="btn btn-xs btn-pink" role="button">검색하기</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </dd>
                                            </dl>
                                        </li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                        <div class="article-content">
                            <div class="btn-area">
                                <p>
                                    <a href="#" class="btn btn-md btn-white" role="button">더 많은 실시간이름 보기</a>
                                </p>
                            </div>
                            <div class="table-wrap default-table">
                                <table class="table table-bordered">
                                    <colgroup>
                                        <col style="width: 10%;">
                                        <col style="width: 12%;">
                                        <col style="width: 12%;">
                                        <col style="width: 20%;">
                                        <col style="width: 20%;">
                                        <col style="width: 26%;">
                                    </colgroup>
                                    <thead>
                                        <tr>
                                            <th>
                                                <lable>
                                                    <input type="checkbox">
                                                </lable>
                                            </th>
                                            <th>성씨</th>
                                            <th>성별</th>
                                            <th>이름(한글)</th>
                                            <th>이름(한지)</th>
                                            <th>저장하기</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="6">
                                                <div class="none-data">
                                                    <h5>검색된 이름이 존재하지 않습니다.</h5>
                                                    <p>
                                                        사주나 성씨에 따라 검색된 이름이 존재하지 않을 수 있습니다.
                                                        고객센터로 문의 바랍니다.(Tel : <a href="tel:023336650">02-333-6650</a> 내선1번)
                                                    </p>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="btn-area">
                                    <p>
                                        <a href="#" class="btn btn-sm btn-white" role="button">이전화면</a>
                                        <a href="#" class="btn btn-sm btn-pink" role="button">바구니보기</a>
                                    </p>
                                </div>
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