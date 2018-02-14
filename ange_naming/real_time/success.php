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
                    <section class="success"><!-- 페이지명 클래스 -->
                        <div class="section-header">
                            <h2 class="sub-title">실시간 작성</h2>
                        </div>
                        <div class="section-content">
                            <div class="complete">
                                <figure>
                                    <img src="/assets/images/ange_naming/img_complete.png" alt="">
                                    <figcaption>
                                        <strong>결제가 완료되었습니다!</strong>
                                        <small>
                                            신청하신 작명 서비스의 결제가 완료되었습니다.<br>
                                            문의사항은 고객센터 <i>02-333-4650 (내선 １번)</i>으로 연락주십시오.
                                        </small>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="table-wrap">
                                <table class="table table-bordered type-1">
                                    <tbody>
                                        <tr>
                                            <th>서비스명</th>
                                            <td>실시간 작명</td>
                                        </tr>
                                        <tr>
                                            <th>결제금액</th>
                                            <td>50,000 원</td>
                                        </tr>
                                    </tbody>   
                                </table>
                                <div class="btn-area">
                                    <p>
                                        <a href="#" class="btn btn-sm btn-white" role="button">이전화면</a>
                                        <a href="#" class="btn btn-sm btn-pink" role="button">진행하기</a>
                                    </p>
                                </div>
                            </div>
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