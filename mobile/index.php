<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/dochead.php"); ?>
<link href="/mobile/assets/css/main.css" rel="stylesheet">
</head>
<body>
    <!--?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/header.php"); ?-->
    <header id="header">
        <div class="top-banner">
            <a href="#">
                <figure>
                    <img src="/mobile/assets/images/img_top_banner.jpg" alt="">
                </figure>
            </a>
        </div>
        <div class="logo-nav">
            <h1><a href="/mobile/index.php"><img src="/mobile/assets/images/logo.jpg" alt=""></a></h1>
            <button type="button" class="btn-open-nav">
                <img src="/mobile/assets/images/btn_menu.jpg" alt="버튼 아이콘">
            </button>
            <button type="button" class="btn-open-mypage">
                <img src="/mobile/assets/images/btn_mypage.jpg" alt="버튼 아이콘">
            </button>
        </div>
        <div id="gnb">
            <ul>
                <li><a href="#">e매거진</a></li>
                <li><a href="#">체험이벤트</a></li>
                <li><a href="#">커뮤니티</a></li>
                <li><a href="#">고객센터</a></li>
            </ul>
        </div>
        
        <!-- nav menu -->
        <nav id="gnb-nav">
            <div class="nav-backdrop"></div>
            <div class="nav-container">
                <div class="nav-header">
                    <button type="button" class="btn btn-close">
                        <img src="/mobile/assets/images/nav_btn_close.png" alt="네비 닫기">
                    </button>
                    <div class="global-search">
                        <form action="#">
                            <div class="form-group">
                                <input type="text" id="global-search" class="form-control" placeholder="Search">
                                <label for="global-search" class="sr-only">검색</label>
                            </div>
                            <div class="search-btn">
                                <button type="submit" class="btn btn-default">
                                    <i class="icon-search">
                                        <span class="sr-only">검색버튼</span>
                                    </i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="nav-body">
                    <div class="quick-menu">
                        <ul>
                            <li>
                                <a href="#">
                                    <figure>
                                        <img src="" alt="샘플팩 신청">
                                    </figure>
                                    <p>샘플팩 신청</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <figure>
                                        <img src="" alt="당첨자 발표">
                                    </figure>
                                    <p>당첨자 발표</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <figure>
                                        <img src="" alt="고객센터">
                                    </figure>
                                    <p>고객센터</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- mypage --->
        <nav id="mypage-nav">
            <div class="nav-backdrop"></div>
            <div class="nav-container">
                <button type="button" class="btn btn-close">
                    <img src="/mobile/assets/images/nav_btn_close.png" alt="네비 닫기">
                </button>
            </div>
        </nav>
    </header>
    <main id="content">
        
    </main>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/docfoot.php"); ?>
    <script>
        (function($) {
            // gnb nav
            $(document).on("click", "#header .btn-open-nav", function(e) {
                $("body").addClass("gnb-opened");
                e.preventDefault();
            });
            $(document).on("click", "#gnb-nav .nav-backdrop, #gnb-nav .btn-close", function(e) {
                $("body").removeClass("gnb-opened");
            });
            
            // mypage nav
            $(document).on("click", "#header .btn-open-mypage", function(e) {
                $("body").addClass("mypage-opened");
                e.preventDefault();
            });
            $(document).on("click", "#mypage-nav .nav-backdrop, #mypage-nav .btn-close", function(e) {
                $("body").removeClass("mypage-opened");
            });


            /* 메뉴 관련 
            $(document).on("click", "#gnb-nav .nav-container > ul > li > a", function(e) {		
                if ($(this).parent().hasClass("active")) {
                    $(this).parent().removeClass("active");
                } else {
                    $(this).parent().siblings(".active").removeClass("active");
                    $(this).parent().addClass("active");
                }
                e.preventDefault();
            });
            */ 
        })(jQuery);
    </script>
</body>
</html>