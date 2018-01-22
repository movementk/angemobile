<?php require_once($_SERVER["DOCUMENT_ROOT"]."./inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/mypage.css" rel="stylesheet">
</head>
<body class="sub mypage"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."./inc/header.php"); ?>
    <!-- pgae-header -->
    <div class="page-header">
        <!-- 폴더별 타이틀 -->
        <h2>쪽지</h2>
        <div class="btn-controls">
            <a href="/mypage/my_history.php" class="prev">
                <i class="icon-left-open-big">
                    <span class="sr-only">이전 페이지</span>
                </i>
            </a>
            <a href="/mypage/mileage.php" class="next">
                <i class="icon-right-open-big">
                    <span class="sr-only">다음 페이지</span>
                </i>
            </a>
        </div>
    </div>
    
    <!-- sub content start -->
    <main id="content" class="message-view"><!-- 페이지명 클래스 -->
        <div class="container">
            <article class="board-view">
                <div class="article-header">
                    <h4>쪽지 제목 노출 영역입니다.</h4>
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
                </div>
            </article>
            <div class="table-wrap">
                <h5>쪽지 쓰기</h5>
                <form action="#">
                    <table class="table table-bordered table-write type-1">
                        <tbody>
                            <tr>
                                <th class="v-top"><label for="subject">제목</label></th>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>구분</option>
                                        </select>
                                        <input type="text" id="subject" class="form-control">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="u-blog">블로그 주소</label></th>
                                <td>
                                    <div class="form-group">
                                        <input type="text" id="u-blog" class="form-control">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="v-top"><label for="u-content">내용</label></th>
                                <td>
                                    <div class="form-group">
                                        <textarea id="u-content" class="form-control"></textarea>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>파일첨부</th>
                                <td class="file">
                                    <div class="form-group">
                                        <input type="file" id="attach" class="form-control">
                                        <label for="attach">찾아보기</label>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="btn-area">
                        <p>
                            <button type="submit" class="btn btn-sm btn-pink">쪽지 보내기</button>
                            <a href="#" class="btn btn-sm btn-white" role="button">취소</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </main>
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."./inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."./inc/docfoot.php"); ?>
    <script src="/assets/js/common.js"></script>
</body>
</html>