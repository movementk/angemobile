<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/samplepack.css" rel="stylesheet">
</head>
<body class="sub samplepack"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- pgae-header -->
    <div class="page-header">
        <!-- 폴더별 타이틀 -->
        <h2>앙쥬 샘플팩</h2>
        <div class="btn-controls">
            <a href="/samplepack/sample_list.php" class="prev">
                <i class="icon-left-open-big">
                    <span class="sr-only">이전 페이지</span>
                </i>
            </a>
            <a href="/samplepack/sample_list.php" class="next">
                <i class="icon-right-open-big">
                    <span class="sr-only">다음 페이지</span>
                </i>
            </a>
        </div>
    </div>
    
    <!-- sub content start -->
    <main id="content" class="sample-apply"><!-- 페이지명 클래스 -->
        <div class="container">
            <section>
                <h3 class="section-title">샘플팩 신청하기</h3>
                <div class="table-wrap">
                    <form action="#">
                        <table class="table type-1">
                            <caption>
                                <h4>샘플팩 신청자 정보</h4>
                                <div class="btn-link">
                                    <a href="#" class="btn btn-default" role="button">회원정보 수정</a>
                                </div>
                            </caption>
                            <tbody>
                                <tr>
                                    <th class="essential"><label for="u-name">신청자명</label></th>
                                    <td>
                                        <div class="form-group basic-group">
                                            <input type="text" id="u-name" class="form-control" placeholder="무브먼트케이">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="essential"><label for="u-tel">전화번호</label></th>
                                    <td>
                                        <div class="form-group basic-group">
                                            <input type="text" id="u-tel" class="form-control" placeholder="02-123-5678">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="essential"><label for="u-phone">핸드폰 번호</label></th>
                                    <td>
                                        <div class="form-group basic-group">
                                            <input type="text" id="u-phone" class="form-control" placeholder="010-1234-5678">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="essential"><label for="u-addr">받으실 곳</label></th>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" id="u-addr" class="form-control" placeholder="(12345) 서울시 서초구 양재동 120-1번지 2층 양재빌딩">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="essential">증빙자료</th>
                                    <td class="file">
                                        <div class="form-group">
                                            <input type="file" id="u-file" class="form-control">
                                            <label for="u-file" class="file-btn">찾아보기</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="essential v-top"><label for="feel">태동느낌 </label></th>
                                    <td>
                                        <div class="form-group">
                                            <textarea id="feel" class="form-control"></textarea>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="btn-area">
                            <p>
                                <button type="submit" class="btn btn-sm btn-pink">신청</button>
                                <a href="#" class="btn btn-sm btn-white" role="button">취소</a>
                            </p>
                        </div>
                    </form>
                </div>
            
                <div class="attention-box">
                    <strong>주의사항</strong>
                    <ol class="decimal-list">
                        <li><b class="text-pink">한번 등록한 내용은 변경하실 수 없습니다.</b></li>
                        <li>반드시 <b class="text-blue">임신부만 응모</b>하세요 <b class="text-black">(남자회원 신청불가)</b></li>
                        <li>임신부 증거자료는 1장만 등록 가능하며 <b class="text-blue">사진이 미흡할 경우 당첨이 취소</b>됩니다. (관련없는 사진, 예정일이 없는 사진을 올려줄 경우)</li>
                        <li>임신부 증거자료가 본인의 것이 아니거나 중복해서 등록할 경우 선정에서 제외됩니다.</li>
                        <li>당첨자 발표 후 별도 주소확인은 하지 않으며 주소가 불분명할 경우 선물은 발송되지 않습니다. (번지수가 없거나 아파트 동, 호수 없는 경우)</li>
                        <li>회원 탈퇴 후 재가입하여 신청하더라도 신청기록은 남기 때문에 샘플팩 선정에서 제외됩니다.</li>
                        <li>샘플팩의 종류와 수량은 사진과 다를 수 있으며, 구성은 업체 사정으로 공지없이 변경될 수 있습니다.</li>
                    </ol>
                </div>
            </section>
        </div>
    </main>
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
    <script src="/assets/js/common.js"></script>
</body>
</html>