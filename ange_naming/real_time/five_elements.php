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
                    <section class="five-elements"><!-- 페이지명 클래스 -->
                        <div class="section-header">
                            <h2 class="sub-title">진행하기</h2>
                        </div>
                        <div class="section-content">
                            <article>
                                <div class="article-header">
                                    <div class="attention-box type-2">
                                        <h5>작명 진행 안내</h5>
                                        <ol>
                                            <li>1. 로그인 → 신청서 작성 → 결제 → [진행하기] 메뉴 선택</li>
                                            <li>
                                                2. 서비스는 30일 동안 이용 가능하며 서비스를 이용하신 후에는 <i>환불이 불가</i>합니다.
                                            </li>
                                            <li>
                                                <p>추천 이름은 입력하신 데이터에 따라 다르며 (3~20개 사이) 추천 이름 데이터가 전혀 없는 경우는 관리자에게 연락주십시오.<br>
                                                (네이밍 고객센터 : 02-333-4560 내선 1번)</p>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                                <div class="article-content">
                                    <h3 class="naming-title">당사자 오행정보</h3>
                                    <div class="table-wrap">
                                        <table class="table table-bordered naming-table">
                                            <caption>작명/계명 오해정보</caption>
                                            <colgroup>
                                                <col style="width: 150px">
                                                <col style="width: 120px">
                                                <col style="width: 100px">
                                                <col style="width: 140px">
                                                <col style="width: 100px">
                                                <col style="width: 130px">
                                                <col style="width: 100px">
                                            </colgroup>
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
                                        <div class="btn-area">
                                            <p>
                                                <a href="#" class="btn btn-md btn-pink" role="button">실시간 작명 신청</a>
                                            </p>
                                            <p>
                                                <a href="#" class="btn btn-lg btn-white" role="button">사주오행으로 이름짓기</a>
                                                <a href="#" class="btn btn-lg btn-white" role="button">돌림자로 이름짓기</a>
                                                <a href="#" class="btn btn-lg btn-white" role="button">저장된 이름 보기</a>
                                            </p>
                                        </div>
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