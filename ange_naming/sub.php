<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/ange_naming.css" rel="stylesheet">
</head>
<body class="sub ange-naming"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- Main Content -->
    <main id="content" class=""><!-- 페이지명 클래스 -->
        <div class="container">
            <div class="sub-wrapper">
                <!-- 서브 lnb -->
                <?php require_once($_SERVER["DOCUMENT_ROOT"]."/ange_naming/_lnb.php"); ?>
                
                <!-- Content Start -->
                <div class="sub-content">
                    <h2 class="sub-title">실시간 작명 신청</h2>
                    <h3 class="naming-title">스페셜 작명 소개</h3>
                    <div class="explain">
                        <img src="" alt="이미지">
                    </div>
                    <div class="explain gray">
                        <img src="" alt="이미지">
                    </div>
                    <div class="attention-box">
                        aa
                    </div>
                    <br><br><br>
                    
                    <div class="table-wrap">
                        <table class="table table-bordered naming-table">
                            <colgroup>
                                <col style="width: 150px">
                                <col style="width: 120px">
                                <col style="width: 100px">
                                <col style="width: 140px">
                                <col style="width: 100px">
                                <col style="width: 130px">
                                <col style="width: 100px">
                            </colgroup>
                            <caption>작명/계명 오해정보</caption>
                            <tbody>
                                <tr>
                                    <td class="bg-gray">생년월일</td>
                                    <td colspan="6">2018년 1월 1일 1시 0분 양력/평달</td>
                                </tr>
                                <tr>
                                    <td class="bg-gray">성(姓) 씨 정보</td>
                                    <td class="bg-gray">성(姓) 씨</td>
                                    <td>金</td>
                                    <td class="bg-gray">성(姓) 씨 오행</td>
                                    <td>木</td>
                                    <td class="bg-gray">성별</td>
                                    <td>여자</td>
                                </tr>
                                <tr>
                                    <td class="bg-gray">사주명식</td>
                                    <td class="bg-gray">오행</td>
                                    <td colspan="5" rowspan="5">
                                        <div class="graph">
                                            <img src="/assets/images/ange_naming/img_graph.jpg" alt="">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>丁酉</td>
                                    <td>火金</td>
                                </tr>
                                <tr>
                                    <td>壬子</td>
                                    <td>水水</td>
                                </tr>
                                <tr>
                                    <td>癸巳</td>
                                    <td>水火</td>
                                </tr>
                                <tr>
                                    <td>壬子</td>
                                    <td>水水</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <br><br><br>
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