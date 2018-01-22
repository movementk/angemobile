<?php require_once($_SERVER["DOCUMENT_ROOT"]."./inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/customer.css" rel="stylesheet">
</head>
<body class="sub customer"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."./inc/header.php"); ?>
    <!-- sub content start -->
    <main id="content" class="join"><!-- 페이지명 클래스 -->
        <div class="container">
            <section class="join-write">
                <div class="section-header">
                    <h3 class="section-title">회원가입</h3>
                    <ol class="step-list">
                        <li class="active">
                            <div>
                                <p class="icon-img">
                                    <img src="/assets/images/sub/icon_step01_active.png" alt="step01">
                                </p>
                                약관동의
                            </div>
                        </li>
                        <li>
                            <div>
                                <p class="icon-img">
                                    <img src="/assets/images/sub/icon_step02.png" alt="step02">
                                </p>
                                회원정보입력
                            </div>
                        </li>
                        <li>
                            <div>
                                <p class="icon-img">
                                    <img src="/assets/images/sub/icon_step03.png" alt="step03">
                                </p>
                                가입완료
                            </div>
                        </li>
                    </ol>
                </div>
                <div class="section-content">
                    <form action="#">
                        <article class="join-form">
                            <div class="table-wrap">
                                <table class="table table-bordered type-1">
                                    <tbody>
                                        <tr>
                                            <th class="essential"><label for="u-id">아이디</label></th>
                                            <td class="overlap-confirm">
                                                <div class="form-group">
                                                    <input type="text" id="u-id" class="form-control">
                                                    <div class="btn-overlap-confirm">
                                                        <a href="#" class="btn btn-default" role="button">중복확인</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="essential"><label for="u-pw">비밀번호</label></th>
                                            <td class="overlap-confirm">
                                                <div class="form-group">
                                                    <input type="password" id="u-pw" class="form-control">
                                                    <div class="btn-overlap-confirm">
                                                        <a href="#" class="btn btn-default" role="button">중복확인</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="pw-find">비밀번호 확인</label></th>
                                            <td class="overlap-confirm">
                                                <div class="form-group">
                                                    <input type="password" id="pw-find" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="essential"><label for="u-name">이름</label></th>
                                            <td class="overlap-confirm">
                                                <div class="form-group">
                                                    <input type="text" id="u-name" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="essential"><label for="u-nickname">닉네임</label></th>
                                            <td class="overlap-confirm">
                                                <div class="form-group">
                                                    <input type="text" id="u-nickname" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="essential"><label for="u-birthday">생년월일</label></th>
                                            <td class="birthday">
                                                <div class="form-group">
                                                    <select class="form-control">
                                                        <option>양력</option>
                                                    </select>
                                                    <input type="text" id="u-birthday" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="essential">성별</th>
                                            <td>
                                                <div class="form-group">
                                                    <label><input type="radio">남자</label>
                                                    <label><input type="radio">여자</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="essential"><label for="u-zip-code">우편번호</label></th>
                                            <td class="zip-code">
                                                <div class="form-group">
                                                    <input type="text" id="u-zip-code" class="form-control">
                                                    <div class="btn-overlap-confirm">
                                                        <a href="#" class="btn btn-default" role="button">우편번호</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="essential v-top"><label for="addr-1">주소</label></th>
                                            <td class="addr">
                                                <div class="form-group">
                                                    <input type="text" id="addr-1" class="form-control" placeholder="기본주소">
                                                    <label for="addr-2" class="sr-only">상세주소</label>
                                                    <input type="text" id="addr-2" class="form-control" placeholder="상세주소">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="u-tel">유선전화</label></th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" id="u-tel" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="essential"><label for="u-phone">휴대폰</label></th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" id="u-phone" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="essential"><label for="e-mail">이메일</label></th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="email" id="e-mail" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>아바타등록</th>
                                            <td class="avatar">
                                                <div class="form-group">
                                                    <input type="file" id="avatar-add" class="form-control">
                                                </div>
                                                <div class="avatar-add">
                                                    <label for="avatar-add" class="btn btn-default">파일선택</label>
                                                    <a href="#" class="btn btn-default" role="button">아바타 선택</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="v-top">정보수신동의</th>
                                            <td>
                                                <div class="form-group">
                                                    <label><input type="checkbox">이메일</label>
                                                    <label><input type="checkbox">SMS</label>
                                                </div>
                                                <p class="note">
                                                    앙쥬의 각종 소식(이벤트/체험단 정보/당첨안내)등을 받아보실 수 있습니다.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>가입일시</th>
                                            <td>2017-12-01 07:58:12</td>
                                        </tr>
                                        <tr>
                                            <th class="essential v-top">결혼여부</th>
                                            <td>
                                                <div class="form-group">
                                                    <label><input type="radio"> 기혼</label>
                                                    <label><input type="radio"> 미혼</label>
                                                </div>
                                                <div class="form-group outside">
                                                    <label for="wedding-anniversary">결혼기념일</label>
                                                    <input type="text" id="wedding-anniversary" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="essential v-top">임신여부</th>
                                            <td>
                                                <div class="form-group">
                                                    <label><input type="radio"> 해당없음</label>
                                                    <label><input type="radio"> 해당됨</label>
                                                </div>
                                                <div class="form-group outside">
                                                    <label for="due-date">출산예정일</label>
                                                    <input type="text" id="due-date" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="essential v-top">아이정보</th>
                                            <td>
                                                <div class="child-info">
                                                    <div class="form-group inside">
                                                        <input type="text" id="child-name1" class="form-control" placeholder="이름">
                                                        <label for="child-name1" class="sr-only">아이이름</label>
                                                        <div>
                                                            <label><input type="radio"> 남</label>
                                                            <label><input type="radio"> 여</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group outside">
                                                        <label for="child-birthday1">생년월일</label>
                                                        <input type="text" id="child-birthday1" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="child-info">
                                                    <div class="form-group inside">
                                                        <input type="text" id="child-name2" class="form-control" placeholder="이름">
                                                        <label for="child-name2" class="sr-only">아이이름</label>
                                                        <div>
                                                            <label><input type="radio"> 남</label>
                                                            <label><input type="radio"> 여</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group outside">
                                                        <label for="child-birthday2">생년월일</label>
                                                        <input type="text" id="child-birthday2" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="child-info">
                                                    <div class="form-group inside">
                                                        <input type="text" id="child-name3" class="form-control" placeholder="이름">
                                                        <label for="child-name3" class="sr-only">아이이름</label>
                                                        <div>
                                                            <label><input type="radio"> 남</label>
                                                            <label><input type="radio"> 여</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group outside">
                                                        <label for="child-birthday3">생년월일</label>
                                                        <input type="text" id="child-birthday3" class="form-control">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <p class="summary">
                                한번 입력된 기념일은 수정할 수 없으니 정확히 입력해주시기 바랍니다. <br>
                                기념일 (본인생일, 아이생일, 결혼기념일)을 등록하시면 기념일 일주일 전 축하 마일리지가 자동 적립됩니다.
                            </p>
                        </article>
                        <article class="interest">
                            <h4>추가정보 (관심분야)</h4>
                            <div class="table-wrap">
                                <table class="table table-bordered type-1">
                                    <tbody>
                                        <tr>
                                            <th class="v-top">컨텐츠</th>
                                            <td>
                                                <ul>
                                                    <li><label><input type="checkbox"> 임신/출산</label></li>
                                                    <li><label><input type="checkbox"> 성장/건강</label></li>
                                                    <li><label><input type="checkbox"> 놀이/교육</label></li>
                                                    <li><label><input type="checkbox"> 리빙/헬스</label></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>체험이벤트</th>
                                            <td>
                                                <ul>
                                                    <li><label><input type="checkbox"> 진행중</label></li>
                                                    <li><label><input type="checkbox"> 당첨자발표</label></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="v-top">커뮤니티</th>
                                            <td>
                                                <ul>
                                                    <li><label><input type="checkbox"> 앙쥬POLL</label></li>
                                                    <li><label><input type="checkbox"> 육아 노하우</label></li>
                                                    <li><label><input type="checkbox"> 레시피</label></li>
                                                    <li><label><input type="checkbox"> 리빙/헬스</label></li>
                                                    <li><label><input type="checkbox"> 아이 데리고 여기</label></li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </article>
                        <article class="authentication">
                            <b>회원정보에 등록된 휴대전화 번호와<br>일치해야, 인증번호를 받을 수 있습니다.</b>
                            <p>
                                [인증하기]을 클릭하시면 본인 휴대폰으로<br>실명인증이 가능합니다.<br>일치하는 정보가 없을 시 인증메세지가 뜨지 않습니다.
                            </p>
                            <div class="form">
                                <div class="btn-sms">
                                    <a href="#" class="btn btn-white" role="button">휴대폰 인증하기</a>
                                </div>
                            </div>
                        </article>
                        <div class="btn-area">
                            <p>
                                <button type="submit" class="btn btn-sm btn-pink">다음</button>
                                <a href="#" class="btn btn-sm btn-white" role="button">취소</a>
                            </p>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </main>
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."./inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."./inc/docfoot.php"); ?>
    <script src="/assets/js/common.js"></script>
</body>
</html>