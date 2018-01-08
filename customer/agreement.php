<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/customer.css" rel="stylesheet">
</head>
<body class="sub customer"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- Main Content -->
    <main id="content" class="agreement"><!-- 페이지명 클래스 -->
        <div class="container">
            <div class="sub-wrapper">
                <!-- 서브 lnb -->
                <?php require_once($_SERVER["DOCUMENT_ROOT"]."/customer/_lnb.php"); ?>
                <!-- Content Start -->
                <div class="sub-content">
                    <h2 class="sub-title">회원가입</h2>
                    <!-- Step-list 공통 -->
                    <div class="step-list">
                        <ol>
                            <li class="active">
                                <b>STEP 01</b>
                                <p class="icon">
                                    <img src="/assets/images/customer/icon_step_list01_active.png" alt="">
                                </p>
                                <h3>약관동의</h3>
                            </li>
                            <li>
                                <b>STEP 02</b>
                                <p class="icon">
                                    <img src="/assets/images/customer/icon_step_list02.png" alt="">
                                </p>
                                <h3>회원정보입력</h3>
                            </li>
                            <li>
                                <b>STEP 03</b>
                                <p class="icon">
                                    <img src="/assets/images/customer/icon_step_list03.png" alt="">
                                </p>
                                <h3>가입완료</h3>
                            </li>
                        </ol>
                    </div>
                    
                    <div class="agreement-content">
                        <form action="#">
                            <article class="terms">
                                <h3>이용약관 <i class="necessary">필수</i></h3>
                                <div class="content">
                                    이용약관 내용
                                </div>
                                <div class="check-box">
                                    <label><input type="checkbox">위의 내용을 읽어보았으며, 내용에 동의합니다.</label>
                                </div>
                            </article>
                            <article class="terms">
                                <h3>개인정보처리 방침 <i class="necessary">필수</i></h3>
                                <div class="content">
                                    개인정보처리 방침 내용
                                </div>
                                <div class="check-box">
                                    <label><input type="checkbox">위의 내용을 읽어보았으며, 내용에 동의합니다.</label>
                                </div>
                            </article>
                            <article class="terms">
                                <h3>제 3자 정보제공동의 <i>선택</i></h3>
                                <div class="content">
                                    제 3자 정보제공동의 영역
                                </div>
                                <div class="check-box">
                                    <label><input type="checkbox">위의 내용을 읽어보았으며, 내용에 동의합니다.</label>
                                </div>
                            </article>
                            <hr>
                            <div class="btn-area">
                                <div class="check-box">
                                    <label><input type="checkbox">[전체동의] 이용약관, 개인정보취급방침, 제 3자 정보제공 모두 동의합니다.</label>
                                    <p>
                                        <button type="submit" class="btn btn-pink">다음</button>
                                        <a href="#" class="btn btn-white" role="button">취소</a>
                                    </p>
                                </div>
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