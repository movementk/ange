<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/dochead.php"); ?>
<link href="/mobile/assets/css/sub.css" rel="stylesheet">
<link href="/mobile/assets/css/samplepack.css" rel="stylesheet">
</head>
<body class="sub samplepack"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/header.php"); ?>
    <!-- pgae-header -->
    <div class="page-header">
        <!-- 폴더별 타이틀 -->
        <h2>샘플팩  후기</h2>
        <div class="btn-controls">
            <a href="/mobile/samplepack/sample_explain.php" class="prev">
                <i class="icon-left-open-big">
                    <span class="sr-only">이전 페이지</span>
                </i>
            </a>
            <a href="/mobile/samplepack/sample_explain.php" class="next">
                <i class="icon-right-open-big">
                    <span class="sr-only">다음 페이지</span>
                </i>
            </a>
        </div>
    </div>
    
    <!-- sub content start -->
    <main id="content" class="sample-view"><!-- 페이지명 클래스 -->
        <div class="container">
            <article class="info">
                <figure>
                    <img src="/mobile/assets/images/samplepack/img_sample_view_none.png" alt="">
                </figure>
                <div class="details">
                    <h3>샘플팩 후기 제목이 노츨되는 영역으로 높이는 가변적입니다</h3>
                    <dl>
                        <dt>작성자</dt>
                        <dd>무브먼트케이</dd>
                        <dt>작성일</dt>
                        <dd>2017-12-01</dd>
                        <dt>블로그주소</dt>
                        <dd>
                            <a href="#">http://movementkg.co.kr</a>
                        </dd>
                    </dl>
                </div>
                <div class="btn-area">
                    <p>
                        <a href="#" class="btn btn-md btn-white" role="button">신고하기</a>
                        <a href="#" class="btn btn-md btn-pink" role="button">123</a>
                    </p>
                </div>
            </article>
        </div>
    </main>
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/docfoot.php"); ?>
    <script src="/mobile/assets/js/common.js"></script>
</body>
</html>