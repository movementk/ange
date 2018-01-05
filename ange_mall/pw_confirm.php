<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/ange_mall.css" rel="stylesheet">
</head>
<body class="sub ange_mall"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- Main Content -->
    <main id="content" class="pw-confirm"><!-- 페이지명 클래스 -->
        <div class="container">
            <div class="sub-wrapper">
                <!-- 서브 lnb -->
                <?php require_once($_SERVER["DOCUMENT_ROOT"]."/ange_mall/_lnb.php"); ?>
                <!-- Content Start -->
                <div class="sub-content">
                    <div class="confirm-form">
                        <form action="#">
                            <figure>
                                <img src="/assets/images/event/img_lock.jpg" alt="">
                            </figure>
                            <div class="details">
                                <h2>비밀번호 확인</h2>
                                <p class="summary">
                                    회원님의 개인정보를 보호하기 위해 비밀번호를 한번 더 확인합니다.<br>
                                    타인에게 비밀번호가 노출되지 않도록 항상 주의하세요.
                                </p>
                            </div>
                            <div class="form-group">
                                <input type="password" id="u-pw" class="form-control">
                                <label for="u-pw" class="sr-only">비밀번호 확인</label>
                            </div>
                            <div class="btn-area">
                                <p>
                                    <button type="submit" class="btn btn-pink">확인</button>
                                    <a href="#" class="btn btn-white" role="button">취소</a>
                                </p>
                            </div>
                        </form>
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