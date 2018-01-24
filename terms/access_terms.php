<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/terms.css" rel="stylesheet">
</head>
<body class="sub terms"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- Main Content -->
    <main id="content" class="access-terms common-terms"><!-- 페이지명 클래스 -->
        <div class="container">
            <div class="sub-wrapper">
                <!-- 서브 lnb -->
                <?php require_once($_SERVER["DOCUMENT_ROOT"]."/terms/_lnb.php"); ?>
                <!-- Content Start -->
                <div class="sub-content">
                    <h2 class="sub-title">이용약관</h2>
                    <div class="terms-content">
                        이용약관 내용입니다.
                    </div>
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