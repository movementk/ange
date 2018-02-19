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
                    <section class="basket-list">
                        <div class="section-header">
                            <h2 class="sub-title">이름 바구니</h2>
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
                            <article class="confirm-input">
                                <h3 class="naming-title">회원님의 이름풀이  입력확인</h3>
                                <div class="btn-small">
                                    <p>
                                        <a href="#" class="btn btn-xs btn-white" role="button">전체 선택</a>
                                        <a href="#" class="btn btn-xs btn-white" role="button">전체 해제</a>
                                        <a href="#" class="btn btn-xs btn-white" role="button">선택 삭제</a>
                                    </p>
                                </div>
                                <div class="table-wrap basket-table">
                                    <table class="table table-bordered">
                                        <colgroup>
                                            <col style="width: 75px;">
                                            <col style="width: 95px;">
                                            <col style="width: 45px;">
                                            <col style="width: 70px;">
                                            <col style="width: 40px;">
                                            <col style="width: 45px;">
                                            <col style="width: 70px;">
                                            <col style="width: 40px;">
                                            <col style="width: 45px;">
                                            <col style="width: 70px;">
                                            <col style="width: 40px;">
                                            <col style="width: 135px;">
                                            <col style="width: 70px;">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th rowspan="2">음오행</th>
                                                <th rowspan="2">이름</th>
                                                <th colspan="3">성(姓)</th>
                                                <th colspan="3">가운데이름자</th>
                                                <th colspan="3">끝이름자</th>
                                                <th rowspan="2">이름풀이</th>
                                                <th rowspan="2">삭제</th>
                                            </tr>
                                            <tr>
                                                <th>한자</th>
                                                <th>훈과음</th>
                                                <th>획수</th>
                                                <th>한자</th>
                                                <th>훈과음</th>
                                                <th>획수</th>
                                                <th>한자</th>
                                                <th>훈과음</th>
                                                <th>획수</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>金金金</td>
                                                <td>신상철</td>
                                                <td>申</td>
                                                <td>납 신</td>
                                                <td>5</td>
                                                <td>尙</td>
                                                <td>오히려 상</td>
                                                <td>8</td>
                                                <td>哲</td>
                                                <td>밝을 철</td>
                                                <td>10</td>
                                                <td>
                                                    <div class="btn-explanation">
                                                        <a href="#" class="btn btn-xs btn-white" role="button">이름풀이</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="checkbox">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>木木木</td>
                                                <td>김경규</td>
                                                <td>金</td>
                                                <td>성 김</td>
                                                <td>8</td>
                                                <td>炅</td>
                                                <td>빛날 경</td>
                                                <td>8</td>
                                                <td>奎</td>
                                                <td>별 규</td>
                                                <td>9</td>
                                                <td>
                                                    <div class="btn-explanation">
                                                        <a href="#" class="btn btn-xs btn-white" role="button">이름풀이</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="checkbox">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="btn-area">
                                        <p>
                                            <a href="#" class="btn btn-sm btn-pink" role=button>진행하기</a>
                                            <a href="#" class="btn btn-sm btn-white" role=button>이전화면</a>
                                        </p>
                                    </div>
                                </div>
                            </article>
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