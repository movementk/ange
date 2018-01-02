<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/e_magazine.css" rel="stylesheet">
</head>
<body class="sub e_magazine"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- Main Content -->
    <main id="content" class="magazine-list"><!-- 페이지명 클래스 -->
        <div class="container">
            <div class="sub-wrapper">
                <!-- 서브 lnb -->
                <?php require_once($_SERVER["DOCUMENT_ROOT"]."/e_magazine/_lnb.php"); ?>
                <!-- Content Start -->
                <div class="sub-content">
                    <h2 class="sub-title">주차별 정보</h2>
                    <nav class="week-tab-list">
                        <ol>
                            <li class="active"><a href="#">1주</a></li>
                            <li><a href="#">2주</a></li>
                            <li><a href="#">3주</a></li>
                            <li><a href="#">4주</a></li>
                            <li><a href="#">5주</a></li>
                            <li><a href="#">6주</a></li>
                            <li><a href="#">7주</a></li>
                            <li><a href="#">8주</a></li>
                            <li><a href="#">9주</a></li>
                            <li><a href="#">10주</a></li>
                            <li><a href="#">11주</a></li>
                            <li><a href="#">12주</a></li>
                        </ol>
                        <div class="btn-controls">
                            <a href="#"><i class="icon-left-circle"><span class=sr-only>다음</span></i></a>
                            <a href="#"><i class="icon-right-circle"><span class=sr-only>이전</span></i></a>
                        </div>
                    </nav>
                    <article class="board-list list-type-1">
                        <div class="article-header">
                            <div class="type-btn">
                                <a href="#" class="btn btn-type-1 active" role="button">
                                    <i class="icon-th"></i>
                                </a>
                                <a href="#" class="btn btn-type-2" role="button">
                                    <i class="icon-menu-1"></i>
                                </a>
                            </div>
                        </div>
                        <div class="article-content">
                            <ul>
                                <li>
                                    <a href="#">
                                        <figure>
                                            <img src="/assets/images/e_magazine/img_week_list01.jpg" alt="">
                                        </figure>
                                        <div class="details">
                                            <h3>산후조리할 때 어떤 음식을 챙겨 먹어야 할까요?</h3>
                                            <ul class="like-comment">
                                                <li class="like">123</li>
                                                <li class="comment">123</li>
                                            </ul>
                                            <p>
                                                산후조리원 퇴소 후 집으로 돌아왔다. 충분한 영양 섭취가 중요하지만 신생아를 돌보며 매 끼니 챙겨 먹기가 생각보다 녹록지않은 현실. 산후 회복에 도움 되는 식재료와 맞춤 식단을 제안한다.
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <figure>
                                            <img src="/assets/images/e_magazine/img_week_list02.jpg" alt="">
                                        </figure>
                                        <div class="details">
                                            <h3>모유 수유 중에 좋은 음식은 무엇인가요?</h3>
                                            <ul class="like-comment">
                                                <li class="like">123</li>
                                                <li class="comment">123</li>
                                            </ul>
                                            <p>
                                                모유 수유 시 엄마가 섭취한 영양소는 고스란히 아기에게 전달되기 때문에 음식 선택에 신중해야 한다. 모유 수유를 돕는음식과 피해야 할 음식은 무엇일까?
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <figure>
                                            <img src="/assets/images/e_magazine/img_week_list03.jpg" alt="">
                                        </figure>
                                        <div class="details">
                                            <h3>제왕절개수술 흉터 자국이 고민이에요</h3>
                                            <ul class="like-comment">
                                                <li class="like">123</li>
                                                <li class="comment">123</li>
                                            </ul>
                                            <p>
                                                제왕절개수술 후 흉터로 고민하는 엄마들이 많다. 특히 흉터가 부풀어 오르고 가려움증이나 통증이 심해지면 이는 켈로이드일가능성이 높다. 제왕절개수술 후 생긴 흉터의 관리법을 알아보자.
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="#">
                                        <figure>
                                            <img src="/assets/images/e_magazine/img_week_list04.jpg" alt="">
                                        </figure>
                                        <div class="details">
                                            <h3>몸이 쑤시고 아픈데, 혹시 통풍인가?</h3>
                                            <ul class="like-comment">
                                                <li class="like">123</li>
                                                <li class="comment">123</li>
                                            </ul>
                                            <p>
                                                국민건강보험공단 통계에 따르면 최근 5년간 통풍 환자가 1.4배 증가했다. 40~50대 질환으로
                                                여겨지던 통풍이 육류 위주의식습관, 잦은 음주, 비만, 과로 등의 이유로 20~30대에도 빈번하게 일어나는 추세다.
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <figure>
                                            <img src="/assets/images/e_magazine/img_week_list05.jpg" alt="">
                                        </figure>
                                        <div class="details">
                                            <h3>터지지 말고 매끈하게! 임신 중 튼살 케어</h3>
                                            <ul class="like-comment">
                                                <li class="like">123</li>
                                                <li class="comment">123</li>
                                            </ul>
                                            <p>
                                                피할 수 없는 임신 중 튼살. 한 번 생기면 좀처럼 사라지지 않아 더욱 고민이다. 튼살 케어 노하우와 꾸준한 튼살 관리를 도와주는 제품까지 한데 모았다. &lt;앙쥬&gt;와 함께 튼살 걱정 끝!
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <figure>
                                            <img src="/assets/images/e_magazine/img_week_list06.jpg" alt="">
                                        </figure>
                                        <div class="details">
                                            <h3>출산 후, 가슴 탄력을 부탁해</h3>
                                            <ul class="like-comment">
                                                <li class="like">123</li>
                                                <li class="comment">123</li>
                                            </ul>
                                            <p>
                                                출산 후 처진 가슴 때문에 고민하는 엄마들이 많다. 임신과 출산을 겪으며 가슴이 처지는 이유와 예...
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="#">
                                        <figure>
                                            <img src="/assets/images/e_magazine/img_week_list07.jpg" alt="">
                                        </figure>
                                        <div class="details">
                                            <h3>출산 후, 생리가 돌아왔다</h3>
                                            <ul class="like-comment">
                                                <li class="like">123</li>
                                                <li class="comment">123</li>
                                            </ul>
                                            <p>
                                                출산을 하면 몸은 임신 이전으로 돌아갈 준비를 한다. 그 준비 중 하나가 생리의 시작이다. 출산...
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <figure>
                                            <img src="/assets/images/e_magazine/img_week_list08.jpg" alt="">
                                        </figure>
                                        <div class="details">
                                            <h3>산후 뱃살 쏙 빼는 스트레칭</h3>
                                            <ul class="like-comment">
                                                <li class="like">123</li>
                                                <li class="comment">123</li>
                                            </ul>
                                            <p>
                                                임신 중에는 태아를 보호하기 위해 복부에 지방이 쌓이고 근육이 팽창하며 피부가 늘어진다. 이렇...
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <figure>
                                            <img src="/assets/images/e_magazine/img_week_list09.jpg" alt="">
                                        </figure>
                                        <div class="details">
                                            <h3>무통분만 궁금증, 속 시원한 해답</h3>
                                            <ul class="like-comment">
                                                <li class="like">123</li>
                                                <li class="comment">123</li>
                                            </ul>
                                            <p>
                                                임신부라면 첫 분만을 앞두고 ‘얼마나 아플까?’라는 두려움을 갖기 마련이다. 이런 걱정을 덜어주는 ...
                                            </p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
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
                    </article>
                </div>
            </div>
        </div>
    </main>
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/sub_aside.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/quick.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
    <script src="/assets/js/common_sub.js"></script>
    <script>
        $(function(){
            $(document).on('click', '.type-btn .btn-type-1',  function(){
                $('.board-list').addClass('list-type-1');
                $('.board-list').removeClass('list-type-2');
                $('.board-list .article-header .btn-type-1').addClass('active');
                $('.board-list .article-header .btn-type-2').removeClass('active');
            });
            $(document).on('click', '.type-btn .btn-type-2',  function(){
                $('.board-list').addClass('list-type-2');
                $('.board-list').removeClass('list-type-1');
                $('.board-list .article-header .btn-type-2').addClass('active');
                $('.board-list .article-header .btn-type-1').removeClass('active');
            });
        });
    </script>
</body>
</html>