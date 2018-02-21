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
            <h2>스페셜 작명</h2>
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
        <section class="application-view special-view">
            <div class="container">
                <form action="#">
                    <article>
                        <h4 class="naming-title">신청인 정보</h4>
                        <div class="article-content">
                            <div class="table-wrap">
                                <table class="table table-bordered table-write type-1">
                                    <tbody>
                                        <tr>
                                            <th>신청인</th>
                                            <td>관리자</td>
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
                                            <td>0100000000</td>
                                        </tr>
                                        <tr>
                                            <th>이메일</th>
                                            <td>angeweb@ange.co.kr</td>
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
                                            <th>성별</th>
                                            <td>남</td>
                                        </tr>
                                        <tr>
                                            <th>생년월일</th>
                                            <td>2018년 1월1일 0분 ( 양력 / 평달 )</td>
                                        </tr>
                                        <tr>
                                            <th>출생지</th>
                                            <td>서울</td>
                                        </tr>
                                        <tr>
                                            <th>성(姓)씨</th>
                                            <td>與</td>
                                        </tr>
                                        <tr>
                                            <th>형제서열</th>
                                            <td>2녀중 차녀</td>
                                        </tr>
                                        <tr>
                                            <th class="v-top">돌림자</th>
                                            <td>
                                                사용안함 金<br>
                                                <p>(돌림자가 사주에 맞지 않는 경우 : )</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="v-top">부모성명</th>
                                            <td>
                                                <ul>
                                                    <li>
                                                        <div class="parent-name">
                                                            <dl>
                                                                <dt>부</dt>
                                                                <dd>이몽룡</dd>
                                                            </dl>
                                                        </div>
                                                        <div class="parent-details">
                                                            <p>2018년 1월 1일 1시 0분 (양력)</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="parent-name">
                                                            <dl>
                                                                <dt>모</dt>
                                                                <dd>성춘향</dd>
                                                            </dl>
                                                        </div>
                                                        <div class="parent-details">
                                                            <p>2018년 1월 1일 1시 0분 (양력)</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>형제성명</th>
                                            <td>ㅇ</td>
                                        </tr>
                                        <tr>
                                            <th class="v-top">하고싶은말씀</th>
                                            <td>ㅇ</td>
                                        </tr>
                                        <tr>
                                            <th class="v-top">작명가 알림</th>
                                            <td>ㅇ</td>
                                        </tr>
                                        <tr>
                                            <th>선택한이름</th>
                                            <td>ㅇ</td>
                                        </tr>
                                        <tr>
                                            <th class="v-top">추천이름(3개)</th>
                                            <td class="recommend-name">
                                                <div class="form-group">
                                                    <label for="recommend01" class="sr-only"></label>
                                                    <input type="text" id="recommend01" class="form-control">
                                                    <label for="recommend02" class="sr-only"></label>
                                                    <input type="text" id="recommend02" class="form-control">
                                                    <label for="recommend03" class="sr-only"></label>
                                                    <input type="text" id="recommend03" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="v-top">추천서1</th>
                                            <td class="file">
                                                <p class="attention">업로드시 가급적 파일이름을 한글이름이 아닌 영문이나 숫자로 업로드해주세요.</p>
                                                <div class="form-group">
                                                    <input type="file" id="attach01" class="form-control">
                                                    <label for="attach01">파일선택</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>추천서2</th>
                                            <td class="file">
                                                <div class="form-group">
                                                    <input type="file" id="attach02" class="form-control">
                                                    <label for="attach02">파일선택</label>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="guide-box">
                                    <img src="images.jpg" alt="이미지" class="img-reponsive">
                                </div>
                            </div>
                        </div>
                    </article>
                    <div class="btn-area">
                        <p>
                            <button type="submit" class="btn btn-sm btn-pink">저장하기</button>
                            <a href="#" class="btn btn-sm btn-white" role="button">목록보기</a>
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