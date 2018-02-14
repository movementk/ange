<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/ange_naming.css" rel="stylesheet">
</head>
<body class="sub ange-naming"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- Main Content -->
    <main id="content">
        <div class="container">
            <div class="sub-wrapper">
                <!-- 서브 lnb -->
                <?php require_once($_SERVER["DOCUMENT_ROOT"]."/ange_naming/_lnb.php"); ?>
                
                <!-- Content Start -->
                <div class="sub-content">
                    <section class="access-guide"><!-- 페이지명 클래스 -->
                        <div class="section-header">
                            <h2 class="sub-title">실시간 작명 이용안내</h2>
                        </div>
                        <div class="section-content">
                            <p>실시간작명을 하시는 순서를 정리한 내용이니 참고하시길 바랍니다</p>
                            <ol class="guide-list">
                                <li>
                                    <h3>
                                        <span>01</span>
                                        로그인을 합니다. (회원만 이용가능합니다.)
                                    </h3>
                                </li>
                                <li>
                                    <h3>
                                        <span>02</span>
                                        실시간 작명 신청서를 작성 및 결제후 [실시간 작명] > [진행하기] 메뉴를 클릭합니다.
                                    </h3>
                                </li>
                                <li>
                                    <h3>
                                        <span>03</span>
                                        신청내역에서 승인번호를 클릭합니다.
                                    </h3>
                                </li>
                                <li>
                                    <h3>
                                        <span>04</span>
                                        "실시간 작명 신청" 버튼을 클릭합니다.
                                    </h3>
                                    <div class="explain">
                                        <img src="/assets/images/ange_naming/guide_list01.jpg"  alt="">
                                    </div>
                                </li>
                                <li>
                                    <h3>
                                        <span>05</span>
                                        사주와 오행에 맞게 출력된 실시간 이름중에 선택된 이름을 "이름저장" 한후 "이름풀이"를 이용하여 이름에 담겨져 있는 사주와<br> 오행을 확인합니다.
                                    </h3>
                                    <div class="explain">
                                        <img src="/assets/images/ange_naming/guide_list02.jpg" alt="">
                                    </div>
                                </li>
                                <li>
                                    <h3>
                                        <span>06</span>
                                        이름의 정보를 확인하고 "이름풀이"버튼을 클릭하면 상세한 이름풀이가 보입니다.
                                    </h3>
                                    <div class="explain">
                                        <img src="/assets/images/ange_naming/guide_list03.jpg" alt="">
                                    </div>
                                </li>
                                <li>
                                    <h3>
                                        <span>07</span>
                                        이름풀이의 점수표를 확인합니다.
                                    </h3>
                                    <div class="explain">
                                        <img src="/assets/images/ange_naming/guide_list04.jpg" alt="">
                                    </div>
                                </li>
                                <li>
                                    <h3>
                                        <span>08</span>
                                        이름풀이를 프린터로 출력하실 수 있습니다. <br>
                                        또, 이름을 확정하셨다면 증서를 출력하여 보관하실 수 있습니다.
                                    </h3>
                                    <div class="explain">
                                        <img src="/assets/images/ange_naming/guide_list05.jpg" alt="">
                                    </div>
                                </li>
                            </ol>
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