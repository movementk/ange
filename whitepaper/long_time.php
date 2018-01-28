<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/whitepaper.css" rel="stylesheet">
</head>
<body class="sub whitepaper"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- Main Content -->
    <main id="content">
        <div class="container">
            <div class="sub-wrapper">
                <!-- 서브 lnb -->
                <?php require_once($_SERVER["DOCUMENT_ROOT"]."/whitepaper/_lnb.php"); ?>
                <!-- Content Start -->
                <div class="sub-content">
                    <section class="long-time"><!-- 페이지명 클래스 -->
                        <div class="section-header">
                            <h2 class="sub-title">오랜만의 방문이세요?</h2>
                        </div>
                        <div class="section-content">
                            <ul>
                                <li>
                                    <div class="item">
                                        <img src="/assets/images/whitepaper/img_long_time01.png" alt="">
                                    </div>
                                    <div class="details">
                                        <h3>회원정보를 수정해주세요.</h3>
                                        <p>
                                            각종 체험단 및 이벤트 신청을 위해<br>
                                            회원님의 변경된 정보가 없는지<br>
                                            마이페이지를 통해 확인해주시고<br>
                                            회원 정보를 수정해주세요!
                                        </p>
                                    </div>
                                    <div class="btn-area">
                                        <p>
                                            <a href="#" role="button" class="btn btn-white">자세히보기</a>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="item">
                                        <img src="/assets/images/whitepaper/img_long_time02.png" alt="">
                                    </div>
                                    <div class="details">
                                        <h3>기념일을 등록해주세요.</h3>
                                        <p>
                                            결혼기념일, 엄마 생일,아이생일을<br> 
                                            추가 등록하시면 기념일에 맞게<br>
                                            마일리지가 자동 적립됩니다.
                                        </p>
                                    </div>
                                    <div class="btn-area">
                                        <p>
                                            <a href="#" role="button" class="btn btn-white">자세히보기</a>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="item">
                                        <img src="/assets/images/whitepaper/img_long_time03.png" alt="">
                                    </div>
                                    <div class="details">
                                        <h3>관심 키워드를 선택해주세요.</h3>
                                        <p>
                                            회원정보에서 관심 키워드를 선택하시면 <br>
                                            그에 맞는 콘텐츠와  각종 체험단 및 이벤트<br>
                                            소식을  먼저 확인해  보실 수 있습니다.
                                        </p>
                                    </div>
                                    <div class="btn-area">
                                        <p>
                                            <a href="#" role="button" class="btn btn-white">자세히보기</a>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>
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