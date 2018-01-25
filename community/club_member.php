<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/ange_club.css" rel="stylesheet">
</head>
<body class="sub ange-club"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- Main Content -->
    <main id="content" class="club">
        <div class="container">
            <div class="sub-wrapper">
                <!-- 서브 lnb -->
                <?php require_once($_SERVER["DOCUMENT_ROOT"]."/community/_lnb.php"); ?>
                <!-- Content Start -->
                <div class="sub-content">
                    <section class="club-member">
                        <div class="section-header">
                            <h2 class="sub-title">회원사 소개</h2>
                            <div class="club-tab-link">
                                <ul>
                                    <li class="active"><a href="/community/club_member.php">앙쥬클럽 회원사 소개</a></li>
                                    <li><a href="/community/sponsor.php">앙쥬클럽 후원사 소개</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="section-content">
                            <figure>
                                <img src="/assets/images/community/intro_04.jpg" class="img-responsive" alt="">
                            </figure>
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