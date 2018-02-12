<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/ange_naming.css" rel="stylesheet">
</head>
<body class="sub ange-naming"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- Main Content -->
    <main id="content" class="spacial-intro"><!-- 페이지명 클래스 -->
        <div class="container">
            <div class="sub-wrapper">
                <!-- 서브 lnb -->
                <?php require_once($_SERVER["DOCUMENT_ROOT"]."/ange_naming/_lnb.php"); ?>
                
                <!-- Content Start -->
                <div class="sub-content">
                    <h2 class="sub-title">실시간 작명 신청</h2>
                    <article class="naming-introduce">
                        <h3 class="naming-title">스페셜 작명 소개</h3>
                        <p class="summary">스페셜 작명은 작명가 선생님이 직접 아기 사주에 맞게 좋은 이름을 지어드리는 맞춤 작명서비스입니다</p>
                        <div class="article-content">
                            <ol>
                                <li>
                                    <div>
                                        <h4><small>Step 01</small> 신청 및 결제</h4>
                                        <p>신청페이지에서 신청 후 신용카드,무통장 입금</p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <h4><small>Step 02</small> 작명 완료</h4>
                                        <p>신청 후 3~4일내 맞춤작명 완료 ( 필요시 전화상담)</p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <h4><small>Step 03</small> 추천이름 통보</h4>
                                        <p>추천 이름 등록시 휴대폰 문자메세지 발송</p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <h4><small>Step 04</small> 추천이름 선택</h4>
                                        <p>홈페이지에서 추천이름 선택</p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <h4><small>Step 05</small> 작명증서 발송</h4>
                                        <p>이름 선택 후 3~4일내 작명증서 우편발송</p>
                                    </div>
                                </li>
                            </ol>
                        </div>
                        <div class="attention">
                            <h5>스페셜 작명 신청 안내</h5>
                            <ol class="decimal">
                                <li>이름 추천시 등록시 이름풀이는 따로 드리지 않습니다.</li>
                                <li>추천이름란 하단에 기재된 사이트 주소로 방문하여 이름풀이를 검색하여야합니다.</li>
                            </ol>
                        </div>
                    </article>
                    <article class="certificate">
                        <h3 class="naming-title">작명증서</h3>
                        <figure>
                            <img src="/assets/images/ange_naming/img_certificate.jpg" class="img-responsive" alt="">
                        </figure>
                        <div class="article-content">
                            <div class="table-wrap">
                                <table class="table table-bordered type-1">
                                    <tbody>
                                        <tr>
                                            <th>온라인입금계좌</th>
                                            <td>국민은행 / 032901-04-051899 / (주)무크하우스</td>
                                        </tr>
                                        <tr>
                                            <th>카드결제</th>
                                            <td>국내 통용되는 모든 신용카드 결제가능</td>
                                        </tr>
                                        <tr>
                                            <th>스페셜작명 요금</th>
                                            <td>￦100,000 원</td>
                                        </tr>
                                        <tr>
                                            <th>문의사항</th>
                                            <td>전화 : 02-333-4650 (내선 1번)</td>
                                        </tr>
                                        <tr>
                                            <th>담당자 메일</th>
                                            <td><a href="mailto:angeweb@ange.co.kr">angeweb@ange.co.kr</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
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