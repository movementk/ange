<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/mypage.css" rel="stylesheet">
</head>
<body class="sub mypage"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- Main Content -->
    <main id="content" class="success"><!-- 페이지명 클래스 -->
        <div class="container">
            <div class="sub-wrapper">
                <!-- 서브 lnb -->
                <?php require_once($_SERVER["DOCUMENT_ROOT"]."/mypage/_lnb.php"); ?>
                <!-- Content Start -->
                 <div class="sub-content">
                    <h2 class="sub-title">회원탈퇴</h2>
                    <div class="complete-txt">
                        <h4>회원님의 탈퇴가 완료되었습니다.</h4>
                        <figure>
                           <figcaption>모든 회원가입절차가 완료되었습니다.
                                로그인 후 모든 서비스를 이용할 수 있습니다.
                            </figcaption>
                            <img src="/assets/images/mypage/img_leave_complete.png" alt="">
                            
                        </figure>
                    </div>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-pink" role="button">회원탈퇴</a>
                        </p>
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