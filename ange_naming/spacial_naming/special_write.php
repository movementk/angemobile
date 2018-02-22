<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/ange_naming.css" rel="stylesheet">
<link href="/assets/css/sub_popup.css" rel="stylesheet">
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
        <section class="special-write">
            <div class="container">
                <div class="section-header">
                    <div class="caution-box">
                        <strong>스페셜 작명신청 안내</strong>
                        <ul class="hyphen-list">
                            <li>신청서를 작성 하신 후 결제 하시면 <i>3~4일내 핸드폰문자로 추천이름완료 메세지</i>보냅니다.</li>
                            <li>&#39;추천이름선택&#39;페이지에서 이름을 선택하실 수 있습니다. (추천은 3개를 올려 드리며, 사주풀이 및 이름풀이는 드리지 않습니다.)</li>
                            <li><b>전환신청을 하시면 신청했던 작명서비스(실시간 작명/셀프 작명)은 사용할 수 없습니다.</b></li>
                        </ul>
                        <p class="attention">
                            신청후 2일이내 미입금시 별도 연락없이 신청삭제가 되며, <i>서비스를 이용하신 후에는 서비스대금 환불이 불가능</i> 합니다.
                        </p>
                    </div>
                </div>
                <div class="section-content">
                    <form action="#">
                        <article class="offeror-info">
                            <div class="article-content">
                                <h4 class="naming-title">신청인 정보</h4>
                                <div class="table-wrap">
                                    <table class="table table-bordered type-1">
                                        <tbody>
                                            <tr>
                                                <th>신청종류</th>
                                                <td><b>스페셜작명</b></td>
                                            </tr>
                                            <tr>
                                                <th><label for="name-pay">작명<br>서비스 금액</label></th>
                                                <td class="default-td">
                                                    <div class="form-group">
                                                        <input type="text" id="name-pay" class="form-control"> 원
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
                                                        <label for="addr" class="sr-only">기본주소</label>
                                                        <input type="text" id="details-addr" class="form-control" placeholder="상세주소">
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
                                                <th class="v-top">생년월일</th>
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
                                                            <a href="#layerPopup" class="btn btn-default btn-popup" role="button">한자변환</a>
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
                                                <th class="v-top">돌림자</th>
                                                <td class="zip-code rotate">
                                                    <label><input type="radio"> 사용안함</label>
                                                    <label><input type="radio"> 중간자</label>
                                                    <label><input type="radio"> 끝자</label>
                                                    <div class="form-group">
                                                        <input type="text" id="family-change" class="form-control">
                                                        <label for="family-change" class="sr-only">성(姓)씨</label>
                                                        <div class="btn-overlap-confirm">
                                                            <a href="#layerPopup" class="btn btn-default btn-popup" role="button">한자변환</a>
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
                                                                    <p>
                                                                        작명이나 개명시 부모의 사주를 꼭 참고하오니 <i>태어난 시간까지 정확히 기재해 주십시오.</i><br>
                                                                        &#40;기혼자의 개명시는 배우자 사주을 참고하오니 생년월일시을 아래 여백란에 기재하여 주십시오.&#41;
                                                                    </p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th><label for="brother-name">형제성명</label></th>
                                                <td>
                                                    <input type="text" id="brother-name" class="form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="v-top">하고싶은말씀</th>
                                                <td class="talk">
                                                    <p>	생각하신 이름, 선호하는 이름의 느낌, 중복되면 안되는 친척이름,기타 작명시 부탁하실 내용등을 간단히 적어 주세요.</p>
                                                    <p class="attention">
                                                        가급적 친척,조카 이름등을 모두 적어주시면 중복되거나 비슷한 이름을 제외하여 작명하는데 도움이됩니다.
                                                    </p>
                                                    <div class="form-group">
                                                        <label for="talkarea" class="sr-only"></label>
                                                        <textarea id="talkarea" class="form-control"></textarea>
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
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
    
    <!-- layer-popup -->
    <div class="layer-popup chinese-character" id="layerPopup">
        <div class="pop-backdrop"></div>
        <div class="popup-area">
            <div class="layer-container">
                <div class="content">
                    <div class="pop-header">
                        <h5 class="pop-title">한자검색</h5>
                        <a class="btn-pop-close" href="#none"><img src="/assets/images/community/btn_close.png" alt=""></a>
                    </div>
                    <div class="pop-body">
                        <div class="table-wrap">
                            <table class="table table-bordered">
                                <colgroup>
                                    <col style="width: 17%">
                                    <col style="width: 18%">
                                    <col style="width: 15%">
                                    <col style="width: 30%">
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th>한자</th>
                                        <th>훈</th>
                                        <th>음</th>
                                        <th>선택</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p class="character-img">
                                                <img src="/assets/images/ange_naming/img_convert.jpg" alt="">
                                            </p>
                                        </td>
                                        <td>북방</td>
                                        <td>임</td>
                                        <td>
                                            <div class="btn-area">
                                                <p>
                                                    <a href="#" class="btn btn-xs btn-white" role="button">선택하기</a>
                                                </p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="character-img">
                                                <img src="/assets/images/ange_naming/img_convert.jpg" alt="">
                                            </p>
                                        </td>
                                        <td>북방</td>
                                        <td>임</td>
                                        <td>
                                            <div class="btn-area">
                                                <p>
                                                    <a href="#" class="btn btn-xs btn-white" role="button">선택하기</a>
                                                </p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="character-img">
                                                <img src="/assets/images/ange_naming/img_convert.jpg" alt="">
                                            </p>
                                        </td>
                                        <td>북방</td>
                                        <td>임</td>
                                        <td>
                                            <div class="btn-area">
                                                <p>
                                                    <a href="#" class="btn btn-xs btn-white" role="button">선택하기</a>
                                                </p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="character-img">
                                                <img src="/assets/images/ange_naming/img_convert.jpg" alt="">
                                            </p>
                                        </td>
                                        <td>북방</td>
                                        <td>임</td>
                                        <td>
                                            <div class="btn-area">
                                                <p>
                                                    <a href="#" class="btn btn-xs btn-white" role="button">선택하기</a>
                                                </p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="character-img">
                                                <img src="/assets/images/ange_naming/img_convert.jpg" alt="">
                                            </p>
                                        </td>
                                        <td>북방</td>
                                        <td>임</td>
                                        <td>
                                            <div class="btn-area">
                                                <p>
                                                    <a href="#" class="btn btn-xs btn-white" role="button">선택하기</a>
                                                </p>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <nav class="paging" aria-label="Page navigation">
                            <ul class="pagination">
                                <li class="first">
                                    <a href="#" aria-label="Previous">
                                        <i class="icon-angle-double-left"></i>
                                    </a>
                                </li>
                                <li class="prev">
                                    <a href="#" aria-label="Previous">
                                        <i class="icon-angle-left"></i>
                                    </a>
                                </li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li class="next">
                                    <a href="#" aria-label="Next">
                                        <i class="icon-angle-right"></i>
                                    </a>
                                </li>
                                <li class="last">
                                    <a href="#" aria-label="Next">
                                        <i class="icon-angle-double-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
    <script src="/assets/js/common.js"></script>
    <script>
        $(function($){
            // 팝업 레이어
            $('.btn-popup').on('click', function(e) {
                e.preventDefault();
                
                var el = $($(this).attr('href'));
                
                if (!el.hasClass('open')) {
                    el.addClass('open');
                } else {
                    el.removeClass('open');
                }
            });

            $('.btn-pop-close, .pop-backdrop').on('click', function(e) {
                $(this).closest('.layer-popup').removeClass('open');
            });
        }(jQuery));
    </script>
</body>
</html>