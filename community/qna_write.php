<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/community.css" rel="stylesheet">
</head>
<body class="sub community"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- Main Content -->
    <main id="content" class="qna-write"><!-- 페이지명 클래스 -->
        <div class="container">
            <div class="sub-wrapper">
                <!-- 서브 lnb -->
                <?php require_once($_SERVER["DOCUMENT_ROOT"]."/community/_lnb.php"); ?>
                <!-- Content Start -->
                <div class="sub-content">
                    <section class="board-write">
                        <div class="section-header">
                            <h2 class="sub-title">모유수유 QnA</h2>
                        </div>
                        <div class="section-content">
                            <form action="#">
                                <div class="table-wrap">
                                    <table class="table table-bordered type-1">
                                        <tbody>
                                            <tr>
                                                <th><label for="subject">제목</label></th>
                                                <td class="subject">
                                                    <div class="form-group">
                                                        <select class="form-control">
                                                            <option>구분</option>
                                                        </select>
                                                        <input type="text" id="subject" class="form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th><label for="blog-domain">블로그 주소</label></th>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" id="blog-domain" class="form-control" placeholder="Ex) http://blog.naver.com/myblog">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th><label for="u-content">내용</label></th>
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
                                                        <input type="file" id="u-file" class="form-control">
                                                        <label for="u-file" class="file-btn">파일선택</label>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="btn-area">
                                    <p>
                                        <button type="submit" class="btn btn-sm btn-pink">저장</button>
                                        <a href="#" class="btn btn-sm btn-white" role="button">취소</a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/sub_aside.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/quick.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
    <script src="/assets/js/common_sub.js"></script>
</body>
</html>