<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/dochead.php"); ?>
<link href="/mobile/assets/css/sub.css" rel="stylesheet">
<link href="/mobile/assets/css/mypage.css" rel="stylesheet">
</head>
<body class="mypage"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/header.php"); ?>
    <!-- pgae-header -->
    <div class="page-header">
        <!-- 폴더별 타이틀 -->
        <h2>쪽지</h2>
        <div class="btn-controls">
            <a href="#" class="prev">
                <i class="icon-left-open-big">
                    <span class="sr-only">이전 페이지</span>
                </i>
            </a>
            <a href="#" class="next">
                <i class="icon-right-open-big">
                    <span class="sr-only">다음 페이지</span>
                </i>
            </a>
        </div>
    </div>
    
    <!-- sub content start -->
    <main id="content" class="sub"><!-- 페이지명 클래스 -->
        <section class="pw-confirm">
            <div class="container">
                <div class="section-content">
                    <div class="confirm-form">
                        <form action="#">
                            <figure>
                                <img src="/mobile/assets/images/mypage/img_pw_confirm.png" alt="">
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
        </section>
    </main>
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/docfoot.php"); ?>
    <script src="/mobile/assets/js/common_sub.js"></script>
</body>
</html>