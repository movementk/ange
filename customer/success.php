<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/customer.css" rel="stylesheet">
</head>
<body class="sub customer"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- Main Content -->
    <main id="content" class="success"><!-- 페이지명 클래스 -->
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
                            <li>
                                <b>STEP 01</b>
                                <p class="icon">
                                    <img src="/assets/images/customer/icon_step_list01.png" alt="">
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
                            <li class="active">
                                <b>STEP 03</b>
                                <p class="icon">
                                    <img src="/assets/images/customer/icon_step_list03_active.png" alt="">
                                </p>
                                <h3>가입완료</h3>
                            </li>
                        </ol>
                    </div>
                    
                    <div class="complete-txt">
                        <h4>회원가입이 완료 되었습니다</h4>
                        <figure>
                            <img src="/assets/images/customer/img_complete.png" alt="">
                            <figcaption>모든 회원가입절차가 완료되었습니다.<br>
                                로그인 후 모든 서비스를 이용할 수 있습니다.
                            </figcaption>
                        </figure>
                    </div>
                    <div class="table-wrap">
                        <table class="table tabe-bordered type-1">
                            <tbody>
                                <tr>
                                    <th>이름</th>
                                    <td>홍길동</td>
                                </tr>
                                <tr>
                                    <th>아이디</th>
                                    <td>test 123</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-pink" role="button">로그인하기</a>
                            <a href="#" class="btn btn-white" role="button">메인페이지</a>
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