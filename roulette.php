<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/sub_popup.css" rel="stylesheet">
</head>
<body class="sub roulette"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- Main Content -->
    <main id="content"><!-- 페이지명 클래스 -->
        <div class="container">
            <div class="sub-wrapper">
                <!-- 서브 lnb -->
                <nav class="nav-lnb">
                    <h2 class="nav-title">e매거진</h2>
                    <ul id="lnb-list">
                        <li class="active">
                            <a href="#">e-book</a>
                            <ul>
                                <li class="active"><a href="#">주차별 정보</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                
                <!-- Content Start -->
                <div class="sub-content">
                    <article class="roulette-event">
                        <div class="article-header">
                            <h3><img src="/assets/images/roulette/roulette_title.png" alt=""></h3>
                            <p>매일 매일! 룰렛을 돌리면 선물이 쏟아집니다!</p>
                            <small>하루 최대 4번까지 참여 가능! 최초 1회는 마일리지 차감없이 참여 가능<br> 2회부터 4회까지 1회당 500 마일리지 차감</small>
                            <dl>
                                <dt>이벤트 기간</dt>
                                <dd>2/1~2/14까지</dd>
                            </dl>
                            <p class="note">배송비는 개인부담(착불)입니다.</p>
                        </div>
                        <div class="article-content">
                            <p class="fix-angle">
                                <img src="/assets/images/roulette/fix_angle.png" alt="">
                            </p>
                            <div class="roulette-board">
                                <img src="/assets/images/roulette/roulette_board.png" alt="">
                                <p class="roulette-btn">
                                    <a href="#">
                                        <img src="/assets/images/roulette/btn_roulette.png" alt="">
                                    </a>
                                </p>
                            </div>
                        </div>
                    </article>
                    
                    <a href="#popup-content" class="btn-popup">팝업 버튼</a>
                    
                </div>
                
            </div>
        </div>
        
    </main>
    
    
    
    
    
    <!-- 투표결과 팝업 -->
    <div class="popup-layer roulette-result">
        <div class="popup-bg"></div>
        <div id="popup-content" class="pop-layer">
            <div class="pop-container">
                <div class="pop-head">
                    <div class="btn-close">
                        <button type="button" class="btn close">
                            <img src="/assets/images/btn_close_white.png" alt="닫기">
                        </button>
                    </div>
                </div>
                <div class="pop-body">
                    <div class="content">
                        <strong>아쉽지만<br> 다음기회에..</strong>
                        <p>
                            마일리지를 사용해 다시<br>
                            도전해 보세요<i>!</i>
                        </p>
                        <div class="btn-area">
                            <p>
                                <a href="#" class="btn btn-sm btn-pink" role="button">확인</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/sub_aside.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
    <script src="/assets/js/common_sub.js"></script>
    <script src="/assets/js/sub_popup.js"></script>
</body>
</html>