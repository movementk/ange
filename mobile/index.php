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
                            <a href="#">
                                <figure>
                                    <img src="/mobile/assets/images/main/img_brand_news.jpg" class="img-responsive" alt="">
                                </figure>
                                <div class="details">
                                    <h1>Brand News</h1>
                                    <p>배너영역</p>
                                    <i>
                                        사용이 쉬운 회전형 <br>카시트 이지턴 360 출시!
                                    </i>
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
        
        <!--div class="container">
            <div class="qna">
                <div class="row">
                    <div class="col-xs-4">
                        <figure>
                            <img src="" class="img-responsive" alt="">
                        </figure>
                    </div>
                    <div class="col-xs-8">
                        
                    </div>
                </div>
            </div>
        </div-->
        
    </main>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/docfoot.php"); ?>
    <script src="//cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    <script src="/mobile/assets/js/common.js"></script>
    <script>
        (function($) {
            $(document).ready(function(){
                $('.jumbo .container > ul').bxSlider({
                    controls: false
                });
            });
        })(jQuery);
    </script>
</body>
</html>