<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/event.css" rel="stylesheet">
</head>
<body class="sub event"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- pgae-header -->
    <div class="page-header">
        <!-- 폴더별 타이틀 -->
        <h2>체험 / 이벤트</h2>
        <div class="btn-controls">
            <a href="/event/reader_list.php" class="prev">
                <i class="icon-left-open-big">
                    <span class="sr-only">이전 페이지</span>
                </i>
            </a>
            <a href="/event/prizewinner_list.php" class="next">
                <i class="icon-right-open-big">
                    <span class="sr-only">다음 페이지</span>
                </i>
            </a>
        </div>
    </div>
    
    <!-- sub content start -->
    <main id="content" class="experience-event"><!-- 페이지명 클래스 -->
        <div class="container">
            <section>
                <div class="section-header">
                    <div class="event-slider">
                        <ul>
                            <li>
                                <a href="#">
                                    <figure>
                                        <img src="/assets/images/main/img_jumbo_slider01.jpg" alt="">
                                    </figure>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <figure>
                                        <img src="/assets/images/main/img_jumbo_slider01.jpg" alt="">
                                    </figure>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <figure>
                                        <img src="/assets/images/main/img_jumbo_slider01.jpg" alt="">
                                    </figure>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <figure>
                                        <img src="/assets/images/main/img_jumbo_slider01.jpg" alt="">
                                    </figure>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <dl class="prizewinner">
                        <dt>당첨자 발표</dt>
                        <dd><a href="#">베파파 레드루트 체험단</a></dd>
                    </dl>
                </div>
                
                <div class="section-content">
                    <div class="form-group">
                        <select class="form-control">
                            <option>분류 전체</option>
                        </select>
                        <select class="form-control">
                            <option>상태 전체</option>
                        </select>
                    </div>
                    <div class="list-wrap">
                        <!--
                            오늘오픈 > today-event
                            오늘마감 > today-closing
                            응모종료 > finish-event
                        -->
                        <ul class="event-list">
                            <li class="event-item today-event">
                                <a href="#">
                                    <div class="item">
                                        <img src="/assets/images/sub/img_event_item01.jpg" alt="">
                                        <div class="event-backdrop">
                                            <p>오늘<br>오픈</p>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <p class="title">
                                            겨울바람을 이중으로 막아주는 겨울 블랭킷<br> &lt;모던버랩 더블코튼 블랭킷&gt; 체험단
                                        </p>
                                        <div class="event-information">
                                            <ul>
                                                <li>
                                                    <i class="icon-heart"></i>100
                                                </li>
                                                <li>
                                                    <i class="icon-calendar-empty"></i>D-12
                                                </li>
                                                <li>
                                                    <i class="icon-user"></i>5/10
                                                </li>
                                                <li>
                                                    <i class="icon-database"></i>+1,000
                                                </li>
                                            </ul>
                                            <!--
                                                응모완료 > event-sucess
                                                미응모 > event-before
                                            -->
                                            <p class="event-sucess">응모완료</p> 
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="event-item today-closing">
                                <a href="#">
                                    <div class="item">
                                        <img src="/assets/images/sub/img_event_item01.jpg" alt="">
                                        <div class="event-backdrop">
                                            <p>오늘<br>마감</p>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <p class="title">
                                            겨울바람을 이중으로 막아주는 겨울 블랭킷<br> &lt;모던버랩 더블코튼 블랭킷&gt; 체험단
                                        </p>
                                        <div class="event-information">
                                            <ul>
                                                <li>
                                                    <i class="icon-heart"></i>100
                                                </li>
                                                <li>
                                                    <i class="icon-calendar-empty"></i>D-12
                                                </li>
                                                <li>
                                                    <i class="icon-user"></i>5/10
                                                </li>
                                                <li>
                                                    <i class="icon-database"></i>+1,000
                                                </li>
                                            </ul>
                                            <!--
                                                응모완료 > event-sucess
                                                미응모 > event-before
                                            -->
                                            <p class="event-before">미응모</p> 
                                        </div>
                                    </div> 
                                </a>
                            </li>
                            <li class="event-item finish-event">
                                <a href="#">
                                    <div class="item">
                                        <img src="/assets/images/sub/img_event_item01.jpg" alt="">
                                        <div class="event-backdrop">
                                            <p>응모<br>종료</p>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <p class="title">
                                            겨울바람을 이중으로 막아주는 겨울 블랭킷<br> &lt;모던버랩 더블코튼 블랭킷&gt; 체험단
                                        </p>
                                        <div class="event-information">
                                            <ul>
                                                <li>
                                                    <i class="icon-heart"></i>100
                                                </li>
                                                <li>
                                                    <i class="icon-calendar-empty"></i>D-12
                                                </li>
                                                <li>
                                                    <i class="icon-user"></i>5/10
                                                </li>
                                                <li>
                                                    <i class="icon-database"></i>+1,000
                                                </li>
                                            </ul>
                                            <!--
                                                응모완료 > event-sucess
                                                미응모 > event-before
                                            -->
                                            <p class="event-sucess">응모완료</p>
                                        </div>
                                    </div> 
                                </a>
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
                </div>
            </section>
        </div>
    </main> 
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
    <script src="//cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    <script src="/assets/js/common.js"></script>
    <script>
        (function($) {
            // 메인슬라이드
            $(document).ready(function(){
                $('.event-slider > ul').bxSlider({
                    controls: false
                });
            });
        })(jQuery);
    </script>
</body>
</html>