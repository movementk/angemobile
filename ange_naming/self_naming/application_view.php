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
            <h2>셀프 작성</h2>
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
        <section class="application-view">
            <div class="container">
                <form action="#">
                    <article>
                        <h4 class="naming-title">신청인 정보</h4>
                        <div class="article-content">
                            <div class="table-wrap">
                                <table class="table table-bordered table-write type-1">
                                    <tbody>
                                        <tr>
                                            <th>신청종류</th>
                                            <td>실시간 작명</td>
                                        </tr>
                                        <tr>
                                            <th>신청인</th>
                                            <td>관리자</td>
                                        </tr>
                                        <tr>
                                            <th>회원 ID</th>
                                            <td>admin</td>
                                        </tr>
                                        <tr>
                                            <th>주소</th>
                                            <td>마포구 독막로 155 5층</td>
                                        </tr>
                                        <tr>
                                            <th>전화번호(자택)</th>
                                            <td>07050052810</td>
                                        </tr>
                                        <tr>
                                            <th>휴대전화번호</th>
                                            <td>
                                                0100000000
                                                <p class="attention">
                                                    승인번호는 휴대폰 문자 메세지로 보내드립니다.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>이메일</th>
                                            <td>angeweb@ange.co.kr</td>
                                        </tr>
                                        <tr>
                                            <th>알게된 경로</th>
                                            <td>인터넷 검색</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </article>
                    <article>
                        <h4 class="naming-title">작명 당사자(아기) 정보</h4>
                        <div class="article-content">
                            <div class="table-wrap">
                                <table class="table table-bordered table-write type-1">
                                    <tbody>
                                        <tr>
                                            <th>신청인과의 관계</th>
                                            <td>본인</td>
                                        </tr>
                                        <tr>
                                            <th>생년월일</th>
                                            <td>2018년 1월1일 0분 ( 양력 / 평달 )</td>
                                        </tr>
                                        <tr>
                                            <th>성별</th>
                                            <td>여</td>
                                        </tr>
                                        <tr>
                                            <th>성(姓)씨</th>
                                            <td>與</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </article>
                    <article>
                        <h4 class="naming-title">결제하기</h4>
                        <div class="article-content">
                            <div class="table-wrap">
                                <table class="table table-bordered table-write type-1">
                                    <tbody>
                                        <tr>
                                            <th>결제방법</th>
                                            <td>
                                                <div class="form-group">
                                                    <label><input type="radio"> 신용카드결제</label>
                                                    <label><input type="radio"> 무통장입금(가상계)</label>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </article>
                    <div class="btn-area">
                        <p>
                            <button type="submit" class="btn btn-sm btn-pink">진행하기</button>
                            <a href="#" class="btn btn-sm btn-white" role="button">이전화면</a>
                        </p>
                    </div>
                </form>
            </div>
        </section>
    </main>
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
    <script src="/assets/js/common.js"></script>
</body>
</html>