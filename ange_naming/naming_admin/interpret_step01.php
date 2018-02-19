<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/ange_naming.css" rel="stylesheet">
</head>
<body class="sub ange-naming"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- Main Content -->
    <main id="content"><!-- 페이지명 클래스 -->
        <div class="container">
            <div class="sub-wrapper">
                <!-- 서브 lnb -->
                <?php require_once($_SERVER["DOCUMENT_ROOT"]."/ange_naming/_lnb.php"); ?>
                
                <!-- Content Start -->
                <div class="sub-content">
                    <section class="interpret-step01">
                        <div class="section-header">
                            <h2 class="sub-title">이름풀이</h2>
                            <div class="attention-box type-2">
                                <h5>작명 진행 안내</h5>
                                <ol>
                                    <li>1. 로그인 → 신청서 작성 → 결제 → [진행하기] 메뉴 선택</li>
                                    <li>
                                        2. 서비스는 30일 동안 이용 가능하며 서비스를 이용하신 후에는 <i>환불이 불가</i>합니다.
                                    </li>
                                    <li>
                                        <p>
                                            추천 이름은 입력하신 데이터에 따라 다르며 (3~20개 사이) 추천 이름 데이터가 전혀 없는 경우는 관리자에게 연락주십시오.<br>
                                            (네이밍 고객센터 : 02-333-4560 내선 1번)
                                        </p>
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <div class="section-content">
                            <h3 class="naming-title">스페셜 작명 소개</h3>
                            <div class="table-wrap">
                                <table class="table table-bordered type-2">
                                    <colgroup>
                                        <col style="width: 150px;">
                                        <col style="width: 230px;">
                                        <col style="width: 230px;">
                                        <col style="width: 230px;">
                                    </colgroup>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>성 (姓)</th>
                                            <th>이름</th>
                                            <th>이름</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>한글</td>
                                            <td>김</td>
                                            <td>木</td>
                                            <td>규</td>
                                        </tr>
                                        <tr>
                                            <td>한자</td>
                                            <td>金</td>
                                            <td>烱</td>
                                            <td>奎</td>
                                        </tr>
                                        <tr>
                                            <td>뜻</td>
                                            <td>성</td>
                                            <td>빛날</td>
                                            <td>별</td>
                                        </tr>
                                        <tr>
                                            <td>획수</td>
                                            <td>8</td>
                                            <td>8</td>
                                            <td>9</td>
                                        </tr>
                                        <tr>
                                            <td>음오행</td>
                                            <td>木</td>
                                            <td>木</td>
                                            <td>木</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="btn-area">
                                    <p>
                                        <a href="#" class="btn btn-sm btn-pink" role="button">이름풀이</a>
                                        <a href="#" class="btn btn-sm btn-white" role="button">바구니 보기</a>
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