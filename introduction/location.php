<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/introduction.css" rel="stylesheet">
</head>
<body class="sub introduction"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- Main Content -->
    <main id="content"><!-- 페이지명 클래스 -->
        <div class="container">
            <div class="sub-wrapper">
                <!-- 서브 lnb -->
                <?php require_once($_SERVER["DOCUMENT_ROOT"]."/introduction/_lnb.php"); ?>
                <!-- Content Start -->
                <div class="sub-content">
                    <h2 class="sub-title"></h2>
                    <article class="location">
                        <div class="maps">
                            <figure>
                                <img src="/assets/images/introcuction/img_maps.jpg" alt="지도">
                            </figure>
                        </div>
                        <div class="table-wrap">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>주소</th>
                                        <td>
                                            지번주소 / 서울시 마포구 창전동 253번지 앙쥬빌딩<br>
                                            도로주소 / 서울시 마포구 독막로 155 앙쥬빌딩
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="v-top">전화번호</th>
                                        <td>
                                            <ul>
                                                <li><i class="icon-phone"></i> 02-333-4650</li>
                                                <li><i class="icon-fax"></i> 02-333-4633</li>
                                            </ul>
                                            내선번호 1번 / 광고마케팅팀<br>
                                            내선번호 2번 / 와인 디자인개발팀<br>
                                            내선번호 3번 / 컨텐츠개발팀<br>
                                            내선번호 4번 / 온라인사업팀<br>
                                            내선번호 0번 / 기타 문의
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </article>
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