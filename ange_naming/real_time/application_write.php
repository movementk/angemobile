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
            <h2>실시간 작명</h2>
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
        <section class="application-write">
            <div class="container">
                <form action="#">
                    <article class="applicant">
                        <div class="article-header">
                            <h3 class="naming-title">신청인 정보</h3>
                        </div>
                        <div class="article-content">
                            <div class="table-wrap">
                                <table class="table table-bordered table-write type-1">
                                    <tbody>
                                        <tr>
                                            <th>신청종류</th>
                                            <td>실시간 작명</td>
                                        </tr>
                                        <tr>
                                            <th><label for="service-pay">작명 서비스 금액</label></th>
                                            <td class="default-td">
                                                <div class="form-group">
                                                    <input type="text" id="service-pay" class="form-control"> 원
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="u-applicant">신청인</label></th>
                                            <td class="default-td">
                                                <div class="form-group">
                                                    <input type="text" id="u-applicant" class="form-control">
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
                                            <th class="v-top"><label for="zip-code">주소</label></th>
                                            <td class="zip-code">
                                                <div class="form-group">
                                                    <div class="new-addr">
                                                        <input type="text" id="zip-code" class="form-control">
                                                    </div>
                                                    <div class="btn-overlap-confirm">
                                                        <a href="#" class="btn btn-default" role="button">우편번호</a>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" id="addr1" class="form-control">
                                                    <label for="addr1" class="sr-only">주소</label>
                                                    <input type="text" id="addr2" class="form-control">
                                                    <label for="addr2" class="sr-only">상세주소</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="contact01">전화번호(자택)</label></th>
                                            <td class="contact">
                                                <div class="form-group">
                                                    <input type="text" id="contact01" class="form-control"> - 
                                                    <input type="text" id="contact02" class="form-control"> - 
                                                    <label for="contact02" class="sr-only">전화번호</label>
                                                    <input type="text" id="contact03" class="form-control">
                                                    <label for="contact03" class="sr-only">전화번호</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="phone01">휴대폰</label></th>
                                            <td class="contact">
                                                <div class="form-group">
                                                    <input type="text" id="phone01" class="form-control"> - 
                                                    <input type="text" id="phone02" class="form-control"> - 
                                                    <label for="phone02" class="sr-only">전화번호</label>
                                                    <input type="text" id="phone03" class="form-control">
                                                    <label for="phone03" class="sr-only">전화번호</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="email">이메일</label></th>
                                            <td class="mail">
                                                <div class="form-group">
                                                    <input type="text" id="email" class="form-control"> @
                                                    <input type="text" id="domain" class="form-control">
                                                    <label for="domain" class="sr-only">domain</label>
                                                    <select class="form-control">
                                                        <option>네이버</option>
                                                        <option>다음</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>알게된 경로</th>
                                            <td class="route">
                                                <div class="form-group">
                                                    <div>
                                                        잡지 ( <label><input type="radio"> 병원</label>
                                                        <label><input type="radio"> 산후조리원</label>
                                                        <label><input type="radio"> 정기구독</label>
                                                        <label><input type="radio"> 기타</label> )
                                                    </div>
                                                    <label><input type="radio"> 인터넷 검색</label>
                                                    <label><input type="radio"> 소개</label>
                                                    <label><input type="radio"> 기타</label>
                                                    <input type="text" id="etc" class="form-control">
                                                    <label for="etc" class="sr-only">기타</label>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </article>
                    <article class="oneself">
                        <div class="article-header">
                            <h3 class="naming-title">작명 당사자(아기) 정보</h3>
                        </div>
                        <div class="article-content">
                            <div class="table-wrap">
                                <table class="table table-bordered table-write type-1">
                                    <tbody>
                                        <tr>
                                            <th><label for="relation">신청인과의 관계</label></th>
                                            <td class="default-td">
                                                <div class="form-group">
                                                    <input type="text" id="relation" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>생년월일</th>
                                            <td class="birth-date">
                                                <div class="form-group">
                                                    <select class="form-control">
                                                        <option>2018</option>
                                                    </select>
                                                    년
                                                    <select class="form-control">
                                                        <option>11</option>
                                                    </select>
                                                    월
                                                </div>
                                                <div class="form-group">
                                                    <select class="form-control">
                                                        <option>11</option>
                                                    </select>
                                                    일
                                                    <select class="form-control">
                                                        <option>11</option>
                                                    </select>
                                                    시
                                                </div>
                                                <div class="form-group">
                                                    <select class="form-control">
                                                        <option>11</option>
                                                    </select>
                                                    분
                                                    <select class="form-control">
                                                        <option>양력</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <select class="form-control">
                                                        <option>평달</option>
                                                    </select>
                                                </div>
                                                <p class="attention">
                                                    생년월일 정보는 등록후 수저할수없습니다.
                                                    정확히 선택해주세요.
                                                </p>
                                            </td>
                                        </tr>
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
                                            <th>제외할 이름</th>
                                            <td class="except">
                                                <div class="form-group">
                                                    <label>아버지 이름 <input type="text" class="form-control"></label>
                                                    <label>어머니 이름 <input type="text" class="form-control"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>성(姓)씨</th>
                                            <td class="zip-code">
                                                <div class="form-group">
                                                    <input type="text" id="name-txt" class="form-control">
                                                    <label for="name-txt" class="sr-only">성씨</label>
                                                    <div class="btn-overlap-confirm">
                                                        <a href="#" class="btn btn-default btn-popup" onclick="onPopupWindow()" role="button">한자변환</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </article>
                    <div class="caution-box">
                        <strong>주의사항</strong>
                        <ol class="decimal-list">
                            <li>서비스를 이용하신 후에는 서비스대금 환불이 불가합니다.<br>이에 동의하시는 경우만 신청해 주십시오!</li>
                            <li>인터넷 익스플로러를 이용해 주시기 바랍니다</li>
                        </ol>
                    </div>
                    <div class="btn-area">
                        <p>
                            <button type="submit" class="btn btn-sm btn-pink">진행하기</button>
                            <a href="#" class="btn btn-sm btn-white" role="button">취소하기</a>
                        </p>
                    </div>
                </form>
            </div>
        </section>
    </main>
    
    <!-- layer-popup 
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
    -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
    <script src="/assets/js/common.js"></script>
<!--
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
-->
    <script>
        function onPopupWindow(){  
            window.open('result_popup.php', '_blank', 'scrollbars=yes');
        }
    </script>
</body>
</html>