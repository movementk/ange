<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/dochead.php"); ?>
<link href="/mobile/assets/css/main.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/header.php"); ?>
    <main id="content">
        <div class="hot-issue">
            <a href="#">
                <strong>Today Hot issue</strong>
                <p>[앙쥬 12월호 발간] 신간 e-book으로 확인! &amp; '독자선물' 신청!</p>
            </a>
        </div>
        <!-- main slider -->
        <div class="jumbo">
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
    </main>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/docfoot.php"); ?>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    <script src="/mobile/assets/js/common.js"></script>
    <script>
        (function($) {
            $(document).ready(function(){
                $('.jumbo > ul').bxSlider({
                    controls: false
                });
            });
        })(jQuery);
    </script>
</body>
</html>