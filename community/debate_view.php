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
        <h2>온라인 토론</h2>
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
        <section class="debate-view">
            <div class="container">
                <div class="section-header">
                    <h3 class="section-title">온라인 토론</h3>
                </div>
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
                    <article class="review-write">
                        <form action="#">
                            <div class="article-header">
                                <h4>의견쓰기</h4>
                                <div class="form-group">
                                    <textarea id="u-content" class="form-control" placeholder="타인비방, 모욕, 개인정보 노출, 상업광고, 홍보글 등은 공지없이 바로 삭제됩니다."></textarea>
                                    <label for="u-content" class="sr-only"></label>
                                </div>
                                <div class="btn-register">
                                    <button type="submit" class="btn btn-lg btn-gray">등록하기</button>
                                </div>
                            </div>
                            <div class="article-content">
                                <p class="inform">총 <b>120</b>개의 댓글이 있습니다.</p>
                                <ul class="review-list">
                                    <li>
                                        <div class="writer-info">
                                            <h5>영이시니</h5>
                                            <p class="date">2017-10-22</p>
                                        </div>
                                        <div class="review-content">
                                            <p>
                                                38준데 가급적 자연분만하고싶네요 그래도 만약에 재왕절개하게 된다면 참고할 좋은정보 감사해요
                                            </p>
                                            <div class="btn-more">
                                                <a href="#" class="btn btn-xs btn-gray">댓글</a>
                                                <a href="#" class="btn btn-xs btn-gray">수 정</a>
                                                <a href="#" class="btn btn-xs btn-gray">삭 제</a>
                                                <a href="#layerPopup" class="btn btn-xs btn-gray btn-popup">신 고</a>
                                                <a href="#" class="btn btn-xs btn-gray">블라인드</a>
                                            </div>
                                        </div>
                                        <div class="reply">
                                            <div class="writer-info">
                                                <h5>영이시니</h5>
                                                <p class="date">2017-10-22</p>
                                            </div>
                                            <div class="reply-content">
                                                38준데 가급적 자연분만하고싶네요 그래도 만약에 재왕절개하게 된다면 참고할 좋은정보 감사해요
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="writer-info">
                                            <h5>영이시니</h5>
                                            <p class="date">2017-10-22</p>
                                        </div>
                                        <div class="review-content">
                                            <p>
                                                38준데 가급적 자연분만하고싶네요 그래도 만약에 재왕절개하게 된다면 참고할 좋은정보 감사해요
                                            </p>
                                            <div class="btn-more">
                                                <a href="#" class="btn btn-xs btn-gray">댓글</a>
                                                <a href="#" class="btn btn-xs btn-gray">수 정</a>
                                                <a href="#" class="btn btn-xs btn-gray">삭 제</a>
                                                <a href="#" class="btn btn-xs btn-gray">신 고</a>
                                                <a href="#" class="btn btn-xs btn-gray">블라인드</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="writer-info">
                                            <h5>영이시니</h5>
                                            <p class="date">2017-10-22</p>
                                        </div>
                                        <div class="review-content">
                                            <p>
                                                38준데 가급적 자연분만하고싶네요 그래도 만약에 재왕절개하게 된다면 참고할 좋은정보 감사해요
                                            </p>
                                            <div class="btn-more">
                                                <a href="#" class="btn btn-xs btn-gray">댓글</a>
                                                <a href="#" class="btn btn-xs btn-gray">수 정</a>
                                                <a href="#" class="btn btn-xs btn-gray">삭 제</a>
                                                <a href="#" class="btn btn-xs btn-gray">신 고</a>
                                                <a href="#" class="btn btn-xs btn-gray">블라인드</a>
                                            </div>
                                            <!-- 댓글수정시 -->
                                            <div class="form-group">
                                                <textarea id="m-content" class="form-control" placeholder="38준데 가급적 자연분만하고싶네요 그래도 만약에 재왕절개하게 된다면 참고할 좋은정보 감사해요"></textarea>
                                                <label for="m-content" class="sr-only"></label>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
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
                        </form>
                    </article>
                </div>
            </div>
        </section>
    </main>
    
    <!-- layer-popup -->
    <div class="layer-popup accusation-popup" id="layerPopup">
        <div class="pop-backdrop"></div>
        <div class="popup-area">
            <div class="layer-container">
                <div class="content">
                    <div class="pop-header">
                        <h5 class="pop-title">신고하기</h5>
                        <a class="btn-pop-close" href="#none"><img src="/assets/images/community/btn_close.png" alt=""></a>
                    </div>
                    <div class="pop-body">
                        <form action="#">
                            <div class="form-group">
                                <textarea id="u-accusation" class="form-control" placeholder="신고하실 내용을 입력해 주세요"></textarea>
                                <label for="u-accusation" class="sr-only">신고접수하기</label>
                            </div>
                            <div class="btn-area">
                                <p>
                                    <button type="submit" class="btn btn-sm btn-green">신고하기</button>
                                    <a href="#" class="btn btn-sm btn-white" role="button">취소</a>
                                </p>
                            </div>
                        </form>
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