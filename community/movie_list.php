<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/community.css" rel="stylesheet">
</head>
<body class="sub community"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- Main Content -->
    <main id="content" class="movie-list"><!-- 페이지명 클래스 -->
        <div class="container">
            <div class="sub-wrapper">
                <!-- 서브 lnb -->
                <?php require_once($_SERVER["DOCUMENT_ROOT"]."/community/_lnb.php"); ?>
                <!-- Content Start -->
                <div class="sub-content">
                    <h2 class="sub-title">모유수유 QnA</h2>
                    <article class= "qna-board">
                        <div class="banner">
                            <a href="#" role="button" class="btn btn-pink">
                                동영상 보기
                                <i class="icon-right-circle">
                                    <span class="sr-only">동영상 보기</span>
                                </i>
                            </a>
                        </div>
                        <div class="article-content">
                            <ul class="qna-movie">
                                <li>
                                    <a href="#">
                                        <figure>
                                            <img src="/assets/images/e_magazine/img_week_list01.jpg" alt="">
                                            <figcaption>산후조리할 때 어떤 음식을 챙겨 먹어야<br>할까요?</figcaption>
                                        </figure>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <figure>
                                            <img src="/assets/images/e_magazine/img_week_list02.jpg" alt="">
                                            <figcaption>모유 수유 중에 좋은 음식은 무엇인가요?</figcaption>
                                        </figure>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <figure>
                                            <img src="/assets/images/e_magazine/img_week_list03.jpg" alt="">
                                            <figcaption>제왕절개수술 흉터 자국이 고민이에요</figcaption>
                                        </figure>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <figure>
                                            <img src="/assets/images/e_magazine/img_week_list01.jpg" alt="">
                                            <figcaption>산후조리할 때 어떤 음식을 챙겨 먹어야<br>할까요?</figcaption>
                                        </figure>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <figure>
                                            <img src="/assets/images/e_magazine/img_week_list02.jpg" alt="">
                                            <figcaption>모유 수유 중에 좋은 음식은 무엇인가요?</figcaption>
                                        </figure>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <figure>
                                            <img src="/assets/images/e_magazine/img_week_list03.jpg" alt="">
                                            <figcaption>제왕절개수술 흉터 자국이 고민이에요</figcaption>
                                        </figure>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <figure>
                                            <img src="/assets/images/e_magazine/img_week_list01.jpg" alt="">
                                            <figcaption>산후조리할 때 어떤 음식을 챙겨 먹어야<br>할까요?</figcaption>
                                        </figure>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <figure>
                                            <img src="/assets/images/e_magazine/img_week_list02.jpg" alt="">
                                            <figcaption>모유 수유 중에 좋은 음식은 무엇인가요?</figcaption>
                                        </figure>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <figure>
                                            <img src="/assets/images/e_magazine/img_week_list03.jpg" alt="">
                                            <figcaption>제왕절개수술 흉터 자국이 고민이에요</figcaption>
                                        </figure>
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
                    </article>
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