<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/dochead.php"); ?>
<link href="/mobile/assets/css/main.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/header.php"); ?>
    <main id="content">
        <div class="hot-issue">
            <div class="container">
                <a href="#">
                    <strong>Today Hot issue</strong>
                    <p>[앙쥬 12월호 발간] 신간 e-book으로 확인! &amp; '독자선물' 신청!</p>
                </a>
            </div>
        </div>
        <!-- main slider -->
        <div class="jumbo">
            <div class="container">
                <ul>
                    <li>
                        <a href="#">
                            <figure>
                                <img src="/mobile/assets/images/main/img_jumbo_slider01.jpg" class="img-responsive" alt="태아보헌 상담이벤트">
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <figure>
                                <img src="/mobile/assets/images/main/img_jumbo_slider01.jpg" class="img-responsive" alt="태아보헌 상담이벤트">
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <figure>
                                <img src="/mobile/assets/images/main/img_jumbo_slider01.jpg" class="img-responsive" alt="태아보헌 상담이벤트">
                            </figure>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        
        <article class="brand-banner">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="brand-news">
                            <figure>
                                <img src="/mobile/assets/images/main/img_brand_news.jpg" class="img-responsive" alt="">
                            </figure>
                            <a href="#">
                                <div class="details">
                                    <h3><img src="/mobile/assets/images/main/brand_news_title.png" alt="brand news"></h3>
                                    <p class="product-name">끄레텔</p>
                                    <p class="summary">사용이 쉬운 회전형<br>카시트 이지턴 360 출시<i>!</i></p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="banner-item">
                            <a href="#">
                                <figure>
                                    <img src="/mobile/assets/images/main/banner_brarnd_item.gif" class="img-responsive" alt="">
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        
        
        <div class="container">
            <article class="qna-list">
                <div class="article-header">
                    <h3>닥터앙쥬 전문가 Q&amp;A</h3>
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
                </div>
                <div class="article-content">
                    <figure>
                        <img src="/mobile/assets/images/main/img_qna.jpg" class="img-responsive" alt="">
                        <figcaption>
                            임신 중인데 동생 <br>싫다는 아이, 어떡...
                        </figcaption>
                    </figure>
                    <div class="details">
                        <ul>
                            <li><a href="#">잠자리 독립 늦어져서 걱정이에요</a></li>
                            <li><a href="#">존댓말 언제부터 가르쳐야 할까요?</a></li>
                            <li><a href="#">휜다리인데 이대로 둬도 되나요?</a></li>
                            <li><a href="#">할머니에게 집착하는데 어떻게 해야하나착하는데 어떻게 해야하나요?</a></li>
                        </ul>
                    </div>
                </div>
            </article>
            
            <article class="parenting-learn">
                <div class="article-header">
                    <h3>영상으로 배우는 육아</h3>
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
                </div>
                <div class="article-content">
                    <ul class="row">
                        <li class="col-xs-4">
                            <a href="#">
                                <figure>
                                    <img src="/mobile/assets/images/main/img_parenting01.jpg" class="img-responsive" alt="">
                                    <figcaption>
                                        [앙쥬육아백과]<br>신생아 목욕시키기
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <li class="col-xs-4">
                            <a href="#">
                                <figure>
                                    <img src="/mobile/assets/images/main/img_parenting02.jpg" class="img-responsive" alt="">
                                    <figcaption>
                                        [앙쥬육아백과]<br>아기 트림시키기
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <li class="col-xs-4">
                            <a href="#">
                                <figure>
                                    <img src="/mobile/assets/images/main/img_parenting03.jpg" class="img-responsive" alt="">
                                    <figcaption>
                                        [앙쥬육아백과]<br>옹알이대화
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                    </ul>
                </div>
            </article>
        </div>
        
    </main>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/docfoot.php"); ?>
    <script src="//cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    <script src="/mobile/assets/js/common.js"></script>
    <script>
        (function($) {
            // 메인슬라이
            $(document).ready(function(){
                $('.jumbo .container > ul').bxSlider({
                    controls: false
                });
            });
        })(jQuery);
    </script>
</body>
</html>