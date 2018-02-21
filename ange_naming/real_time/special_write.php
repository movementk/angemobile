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
            <h2>스페셜 작명전환 하기</h2>
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
        <section class="special-write">
            <div class="container">
                <div class="section-header">
                    <div class="caution-box">
                        <strong>스페셜 작명전환 안내</strong>
                        <ul class="hyphen-list">
                            <li>이용했던 작명 서비스(실시간 작명/셀프작명) 에서 스페셜 작명으로 전환을 원할 경우 이용할 수 있습니다.</li>
                            <li>실시간 작명 신청 후 <b>1주일 이내</b>에만 가능합니다.</li>
                            <li><i>전환신청을 하시면 신청했던 작명서비스(실시간 작명/셀프 작명)은 사용할 수 없습니다.</i></li>
                            <li><b>50,000원의 추가비용이 발생</b>하오니 결제해주셔야 합니다.</li>
                        </ul>
                    </div>
                </div>
                <div class="section-content">
                    <form action="#">
                        <article class="offeror-info">
                            <div class="article-content">
                                <p class="attention">서비스를 이용하신 후에는 서비스대금 환불이 불가합니다.</p>
                                <p class="attention">신청후 1일이내 입금이 안되는 경우 별도 연락없이 신청삭제가 됩니다.</p>
                                <h4 class="naming-title">신청인 정보</h4>
                                <div class="table-wrap">
                                    <table class="table table-bordered type-1">
                                        <tbody>
                                            <tr>
                                                <th>신청종류</th>
                                                <td>스페셜작명</td>
                                            </tr>
                                            <tr>
                                                <th><label for="name-pay">작명<br>서비스 금액</label></th>
                                                <td class="default-td">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <input type="text" id="pay" class="form-control"> 원
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th><label for="u-name">신청인</label></th>
                                                <td class="default-td">
                                                    <div class="form-group">
                                                        <input type="text" id="u-name" class="form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th><label for="u-id">회원 ID</label></th>
                                                <td class="default-td">
                                                    <div class="form-group">
                                                        <input type="text" id="u-id" class="form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th><label for="u-zip-code">우편번호</label></th>
                                                <td class="zip-code">
                                                    <div class="form-group">
                                                        <input type="text" id="u-zip-code" class="form-control" placeholder="우편번호">
                                                        <label for="new-addr" class="sr-only">우편번호</label>
                                                        <div class="btn-overlap-confirm">
                                                            <a href="#" class="btn btn-default" role="button">우편번호</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="v-top">주소</th>
                                                <td class="addr">
                                                    <div class="form-group">
                                                        <input type="text" id="addr" class="form-control" placeholder="기본주소">
                                                        <label for="basic-addr" class="sr-only">기본주소</label>
                                                        <input type="text" id="addr_detail" class="form-control" placeholder="상세주소">
                                                        <label for="details-addr" class="sr-only">상세주소</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="v-top">전화번호<br>(자택)</th>
                                                <td class="contact">
                                                    <div class="form-group">
                                                        <input type="text" id="u-tel1" class="form-control"> -
                                                        <label for="u-tel1" class="sr-only">전화번호</label>
                                                        <input type="text" id="u-tel2" class="form-control"> -
                                                        <label for="u-tel2" class="sr-only">전화번호</label>
                                                        <input type="text" id="u-tel3" class="form-control">
                                                        <label for="u-tel3" class="sr-only">전화번호</label>
                                                    </div>
                                                    <p class="note">예)033-1234-1234</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="v-top">전화번호<br>(휴대폰)</th>
                                                <td class="contact">
                                                    <div class="form-group">
                                                        <input type="text" id="u-phone1" class="form-control"> -
                                                        <label for="u-phone1" class="sr-only">휴대폰</label>
                                                        <input type="text" id="u-phone2" class="form-control"> -
                                                        <label for="u-phone2" class="sr-only">휴대폰</label>
                                                        <input type="text" id="u-phone3" class="form-control">
                                                        <label for="u-phone3" class="sr-only">휴대폰</label>
                                                    </div>
                                                    <p class="note">예)033-1234-1234</p>
                                                    <p class="attention">추천이름완료 메세지를 휴대폰 문자로 보내드립니다.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="v-top"><label for="u-email">이메일</label></th>
                                                <td class="mail">
                                                    <div class="form-group">
                                                        <input type="text" id="u-email" class="form-control"> @
                                                        <input type="text" id="domain" class="form-control">
                                                        <label for="domain" class="sr-only">도메인주소</label>
                                                        <select class="form-control">
                                                            <option>직접입력</option>
                                                            <option>네이버</option>
                                                        </select>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="v-top">알게된 경로</th>
                                                <td class="route">
                                                    <div class="form-group">
                                                        <div>
                                                            잡지 (
                                                            <label><input type="radio"> 병원</label>
                                                            <label><input type="radio"> 산후조리원</label>
                                                            <label><input type="radio"> 정기구독</label>
                                                            <label><input type="radio"> 기타</label>
                                                            )
                                                        </div>
                                                        <div>
                                                            <label><input type="radio"> 인터넷 검색</label>
                                                            <label><input type="radio"> 소개</label>
                                                            <label><input type="radio"> 기타</label>
                                                            <input type="text" id="etc" class="form-control">
                                                            <label for="etc" class="sr-only">기타</label>
                                                        </div>
                                                    </div>
                                                </td>
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
                                                <td class="sex">
                                                    <div class="form-group">
                                                        <label><input type="radio"> 남자</label>
                                                        <label><input type="radio"> 여자</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>생년월일</th>
                                                <td class="birth-date">
                                                    <div class="form-group">
                                                        <select class="form-control years">
                                                            <option>2018</option>
                                                        </select>
                                                        년
                                                        <select class="form-control">
                                                            <option>11</option>
                                                        </select>
                                                        월
                                                        <select class="form-control">
                                                            <option>11</option>
                                                        </select>
                                                        일
                                                        <select class="form-control">
                                                            <option>11</option>
                                                        </select>
                                                        시
                                                        <select class="form-control">
                                                            <option>11</option>
                                                        </select>
                                                        분
                                                    </div>
                                                    <div class="form-group">              
                                                        <select class="form-control">
                                                            <option>양력</option>
                                                        </select>
                                                        <select class="form-control">
                                                            <option>평달</option>
                                                        </select>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th><label for="birthplace">출생지</label></th>
                                                <td class="default-td">
                                                    <div class="form-group">
                                                        <input type="text" id="birthplace" class="form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>성(姓)씨</th>
                                                <td class="zip-code">
                                                    <div class="form-group">
                                                        <input type="text" id="name-change" class="form-control">
                                                        <label for="name-change" class="sr-only">성(姓)씨</label>
                                                        <div class="btn-overlap-confirm">
                                                            <a href="#" class="btn btn-default" role="button">한자변환</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th><label for="grade">형제서열</label></th>
                                                <td class="default-td">
                                                    <div class="form-group">
                                                        <input type="text" id="grade" class="form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>돌림자</th>
                                                <td class="zip-code rotate">
                                                    <label><input type="radio"> 사용안함</label>
                                                    <label><input type="radio"> 중간자</label>
                                                    <label><input type="radio"> 끝자</label>
                                                    <div class="form-group">
                                                        <input type="text" id="name-change" class="form-control">
                                                        <label for="name-change" class="sr-only">성(姓)씨</label>
                                                        <div class="btn-overlap-confirm">
                                                            <a href="#" class="btn btn-default" role="button">한자변환</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="v-top">부모성명</th>
                                                <td class="parent">
                                                    <div class="form-group">
                                                        <ul>
                                                            <li>
                                                                <div class="parent-name">
                                                                    <dl>
                                                                        <dt>부</dt>
                                                                        <dd>
                                                                            <label for="father-name">이름</label>
                                                                            <input type="text" id="father-name" class="form-control">
                                                                        </dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="parent-details">
                                                                    <dl>
                                                                        <dt>생년월일</dt>
                                                                        <dd>
                                                                            <select class="form-control">
                                                                                <option>2018</option>
                                                                            </select> 년
                                                                            <select class="form-control">
                                                                                <option>1</option>
                                                                                <option>2</option>
                                                                            </select> 월
                                                                            <select class="form-control">
                                                                                <option>1</option>
                                                                                <option>2</option>
                                                                            </select> 일
                                                                            <select class="form-control">
                                                                                <option>1</option>
                                                                                <option>2</option>
                                                                            </select> 시
                                                                            <select class="form-control">
                                                                                <option>0</option>
                                                                            </select> 분
                                                                            <select class="form-control">
                                                                                <option>양력</option>
                                                                            </select>
                                                                        </dd>
                                                                    </dl>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="parent-name">
                                                                    <dl>
                                                                        <dt>모</dt>
                                                                        <dd>
                                                                            <label for="mother-name">이름</label>
                                                                            <input type="text" id="mother-name" class="form-control">
                                                                        </dd>
                                                                    </dl>
                                                                </div>
                                                                <div class="parent-details">
                                                                    <dl>
                                                                        <dt>생년월일</dt>
                                                                        <dd>
                                                                            <select class="form-control">
                                                                                <option>2018</option>
                                                                            </select> 년
                                                                            <select class="form-control">
                                                                                <option>1</option>
                                                                                <option>2</option>
                                                                            </select> 월
                                                                            <select class="form-control">
                                                                                <option>1</option>
                                                                                <option>2</option>
                                                                            </select> 일
                                                                            <select class="form-control">
                                                                                <option>1</option>
                                                                                <option>2</option>
                                                                            </select> 시
                                                                            <select class="form-control">
                                                                                <option>0</option>
                                                                            </select> 분
                                                                            <select class="form-control">
                                                                                <option>양력</option>
                                                                            </select>
                                                                        </dd>
                                                                    </dl>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
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
                                                <th>신정종류</th>
                                                <td><b>스페셜 작명</b></td>
                                            </tr>
                                            <tr>
                                                <th>결제방법</th>
                                                <td>
                                                    <div class="form-group">
                                                        <label><input type="radio"> 신용카드결제</label>
                                                        <label><input type="radio"> 무통장입금(가상계)</label>
                                                    </div>
                                                    <p class="attention">자세한 안내를 원하실 경우 저희 고객센터로 연락해주십시요. 02-333-4650 (내선 4번)</p>
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
            </div>
        </section>
    </main>
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
    <script src="/assets/js/common.js"></script>
</body>
</html>