<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
</head>
<body class="sub"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- Main Content -->
    <main id="content"><!-- 페이지명 클래스 -->
        <div class="container">
            <div class="sub-wrapper">
                <!-- 서브 lnb -->
                <nav class="nav-lnb">
                    <h2 class="nav-title">검색</h2>
                    <ul id="lnb-list">
                        <li class="active"><a href="#none">검색</a></li>
                    </ul>
                </nav>
                
                <!-- Content Start -->
                <div class="sub-content">
                    <section class="search-result">
                        <div class="section-header">
                            <h2 class="sub-title">검색결과</h2>
                        </div>
                        <div class="section-content">
                            <!-- 검색결과 내용틀 -->
                            <article>
                                <div class="article-header">
                                    <h3 class="article-title">스토리</h3>
                                </div>
                                <div class="article-content">
                                    
                                </div>
                            </article>
                            <article>
                                <div class="article-header">
                                    
                                </div>
                                <div class="article-content">
                                    
                                </div>
                            </article>
                            <article>
                                <div class="article-header">
                                    
                                </div>
                                <div class="article-content">
                                    
                                </div>
                            </article>
                            <article>
                                <div class="article-header">
                                    
                                </div>
                                <div class="article-content">
                                    
                                </div>
                            </article>
                            <article>
                                <div class="article-header">
                                    
                                </div>
                                <div class="article-content">
                                    
                                </div>
                            </article>
                        </div>
                    </section>
                    
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
    </main>
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/sub_aside.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
    <script src="/assets/js/common_sub.js"></script>
</body>
</html>