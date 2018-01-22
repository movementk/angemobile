<?php require_once($_SERVER["DOCUMENT_ROOT"]."./inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/community.css" rel="stylesheet">
</head>
<body class="sub community"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."./inc/header.php"); ?>
    <!-- pgae-header -->
    <div class="page-header">
        <!-- 폴더별 타이틀 -->
        <h2>앙쥬맘 노하우</h2>
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
        <article class="knowhow-write">
            <div class="container">
                <div class="article-content">
                    <form action="#">
                        <div class="table-wrap">
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
                                        <th><label for="blog-addr">블로그주소</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="blog-addr" class="form-control">
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
                        </div>
                        <div class="btn-area">
                            <p>
                                <button type="submit" class="btn btn-sm btn-pink">다음</button>
                                <a href="#" class="btn btn-sm btn-white" role="button">취소</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </article>
    </main>
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."./inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."./inc/docfoot.php"); ?>
    <script src="/assets/js/common.js"></script>
</body>
</html>