<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/mypage.css" rel="stylesheet">
</head>
<body class="sub mypage"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- Main Content -->
    <main id="content" class="message-view"><!-- 페이지명 클래스 -->
        <div class="container">
            <div class="sub-wrapper">
                <!-- 서브 lnb -->
                <?php require_once($_SERVER["DOCUMENT_ROOT"]."/mypage/_lnb.php"); ?>
                <!-- Content Start -->
                 <div class="sub-content">
                    <h2 class="sub-title">쪽지</h2>
                    <article class="comment-view">
                        <div class="article-header">
                            <div class="row">
                                <div class="col-xs-8">
                                    <dl class="title">
                                        <dt>제목</dt>
                                        <dd>쪽지의 제목을 노출합니다.</dd>
                                    </dl>
                                </div>
                                <div class="col-xs-4">
                                    <dl class="date">
                                        <dt>발송일시</dt>
                                        <dd class="date">0000-00-00 00:00:00</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="article-content">
                            쪽지 내용 영역
                        </div>
                    </article>
                    <div class="comment-form">
                        <form action="#">
                            <div class="table-wrap">
                                <table class="table table-bordered type-1" style="word-break:break-all">
                                    <tbody>
                                        <tr>
                                            <th><label for="u-id">받는 사람</label></th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" id="u-id" class="form-control" placeholder="받는사람 아아디 영역">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="u-title">쪽지 제목</label></th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" id="u-title" class="form-control"  placeholder="제목 영역">
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
                                    </tbody>
                                </table>
                            </div>
                            <div class="btn-area">
                                <p>
                                    <button type="submit" class="btn btn-pink">쪽지보내기</button>
                                    <a href="#" class="btn btn-white" role="button">취소</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>      
    </main>
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/sub_aside.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
    <script src="/assets/js/common_sub.js"></script>
</body>
</html>