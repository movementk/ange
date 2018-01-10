<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/dochead.php"); ?>
<link href="/mobile/assets/css/sub.css" rel="stylesheet">
<link href="/mobile/assets/css/e_magazine.css" rel="stylesheet">
</head>
<body class="sub mypage"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/header.php"); ?>
    <!-- pgae-header -->
    <div class="page-header">
        <!-- 폴더별 타이틀 -->
        <h2>임신/출산</h2>
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
        <section class="magazine-view">
            <div class="container">
                <div class="section-header">
                    <h3 class="section-title">주차별 정보</h3>
                    <nav class="tab-list">
                        <ul>
                            <li class="active"><a href="#">1주</a></li>
                            <li><a href="#">2주</a></li>
                            <li><a href="#">3주</a></li>
                            <li><a href="#">4주</a></li>
                            <li><a href="#">5주</a></li>
                        </ul>
                        <div class="btn-controls">
                            <a href="#" class="prev">
                                <i class="icon-left-circle">
                                    <span class="sr-only">이전</span>
                                </i>
                            </a>
                            <a href="#" class="next">
                                <i class="icon-right-circle">
                                    <span class="sr-only">다음</span>
                                </i>
                            </a>
                        </div>
                    </nav>
                </div>
                <div class="section-content">
                    <article>
                        
                    </article>
                </div>
            </div>
        </section>
    </main>
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/docfoot.php"); ?>
    <script src="/mobile/assets/js/common.js"></script>
</body>
</html>