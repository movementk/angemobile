<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/community.css" rel="stylesheet">
<link href="/assets/css/sub_popup.css" rel="stylesheet">
</head>
<body class="sub community"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- pgae-header -->
    <div class="page-header">
        <!-- 폴더별 타이틀 -->
        <h2>수다수다방!</h2>
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
    
    <!-- sub content start -->
    <main id="content">
        <section class="chatter-view">
            <div class="container">
                <div class="section-content">
                    <article class="board-view">
                        <div class="article-header">
                            <h4>애독자엽서 &lt;비트루트 4종 세트&gt; 당첨자 구성품 변경 안내 (5월 엽서 이용)</h4>
                            <ul class="icon-list">
                                <li class="like"><span>123</span></li>
                                <li class="comment"><span>123</span></li>
                                <li class="date"><span>2017-10-10</span></li>
                                <li class="sympathy"><a href="#">공감</a></li>
                            </ul>
                        </div>
                        <div class="article-content">
                            <div class="view-content">
                                <p>
                                    안녕하세요 앙쥬입니다.<br>
                                    &lt;앙쥬 신규 가입회원 샘플팩 9월_82차&gt;<br>
                                    발표일이 금일 10일 발표 예정이었으나 <br>
                                    선정이 조금 늦어져 11일에 발표 될 예정입니다.<br>
                                    양해 부탁드립니다.<br>
                                    감사합니다.
                                </p>
                            </div>
                            <dl class="attach">
                                <dt>첨부파일</dt>
                                <dd>
                                    <a href="#">첨부파일.jpg</a>
                                    <a href="#">첨부파일.jpg</a>
                                </dd>
                            </dl>
                            <div class="vote-result">
                                <h5>미혼으로 돌아가고 싶은 적 있나요?</h5>
                                <div class="form-group">
                                    <label><input type="radio"> 그 때가 그립네.. 있다!</label>
                                    <div class="bar" style="width: 86%;"></div>
                                    <p>1419표, 86.16%</p>
                                </div>
                                <div class="form-group">
                                    <label><input type="radio"> 지금이 더 행복해.. 없다!</label>
                                    <div class="bar" style="width: 13%;"></div>
                                    <p>228표, 13.84%</p>
                                </div>
                                <div class="btn-area">
                                    <p>
                                        <a href="#layerPopup" class="btn btn-xs btn-pink btn-popup" role="button">참여자 보기</a>
                                    </p>
                                </div>
                            </div>
                            <div class="btn-area">
                                <p>
                                    <a href="#" class="btn btn-xs btn-white" role="button">수정</a>
                                    <a href="#" class="btn btn-xs btn-white" role="button">삭제</a>
                                    <a href="#" class="btn btn-xs btn-pink" role="button">목록</a>
                                </p>
                            </div>
                            <div class="page-link">
                                <ul>
                                    <li class="prev">
                                        <a href="#">(6월9일발송)샘플팩 베베쿡 프로바이오맘 쿠폰 안내</a>
                                    </li>
                                    <li class="next">
                                        <a href="#">사이트 서버 점검 안내</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
    </main>
    
    
    <!-- layer-popup -->
    <div class="layer-popup participation" id="layerPopup">
        <div class="pop-backdrop"></div>
        <div class="popup-area">
            <div class="layer-container">
                <div class="content">
                    <div class="pop-header">
                        <h5 class="pop-title">참여자 보기</h5>
                        <a class="btn-pop-close" href="#none"><img src="/assets/images/community/btn_close.png" alt=""></a>
                    </div>
                    <div class="pop-body">
                        <div class="result-box">
                            <ul>
                                <li>
                                    <div class="details">
                                        <p class="question">그때가 그립네.. 있다!</p>
                                        <p class="outcome">1,419표 <b>86.16%</b></p>
                                    </div>
                                    <p class="btn-more">
                                        <a href="#" class="btn btn-sm btn-gray active">참여자 보기</a>
                                    </p>
                                </li>
                                <li>
                                    <div class="details">
                                        <p class="question">지금이 더 행복해.. 없다!</p>
                                        <p class="outcome">228표 <b>13.84%</b></p>
                                    </div>
                                    <p class="btn-more">
                                        <a href="#" class="btn btn-sm btn-gray">참여자 보기</a>
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <article>
                            <div class="article-header">
                                <h6><b>그 때가 그립네.. 있다!</b> 를 선택한 참여자</h6>
                            </div>
                            <div class="article-content">
                                <div class="search-area">
                                    <form action="#">
                                        <div class="form-group">
                                            <input type="text" id="search-participation" class="form-control">
                                            <label for="search-participation" class="sr-only">참여자 검색하기</label>
                                            <p class="search-btn">
                                                <button type="submit" class="btn btn-default">
                                                    <i class="icon-search">
                                                        <span class="sr-only">검색하기</span>
                                                    </i>
                                                </button>
                                            </p>
                                        </div>
                                    </form>
                                </div>
                                <div class="participation-list">
                                    <h6>참여자별명</h6>
                                    <ul>
                                        <li>KAYA</li>
                                        <li>KAYA</li>
                                        <li>KAYA</li>
                                        <li>1004kossoo</li>
                                        <li>1004kossoo</li>
                                        <li>1004kossoo</li>
                                        <li>20005241978</li>
                                        <li>20005241978</li>
                                        <li>20005241978</li>
                                    </ul>
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
                        </article>
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