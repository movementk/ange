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
                    <section class="progress-list"><!-- 페이지명 클래스 -->
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
                                                <p>
                                                    추천 이름은 입력하신 데이터에 따라 다르며 (3~20개 사이) 추천 이름 데이터가 전혀 없는 경우는 관리자에게 연락주십시오.<br> 
                                                    (네이밍 고객센터 : 02-333-4560 내선 1번)
                                                </p>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                                <div class="article-content">
                                    <div class="table-wrap">
                                        <p>작명승인번호를 클릭해주세요.</p>
                                        <table class="table tbale-bordered type-2">
                                            <colgroup>
                                                <col style="width: 33.3%">
                                                <col style="width: 33.3%">
                                                <col style="width: 33.3%">
                                            </colgroup>
                                            <thead>
                                                <tr>
                                                    <th>신청일</th>
                                                    <th>작명 당사자 정보</th>
                                                    <th>작명승인번호</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="date">2018-02-07</td> 
                                                    <td>2018년 1월 1일 1시 0분 양력/평달</td>
                                                    <td class="num">A726039-00696</td>
                                                </tr>
                                                <tr>
                                                    <td class="date">2018-02-07</td> 
                                                    <td>2018년 1월 1일 1시 0분 양력/평달</td>
                                                    <td class="num">A726039-00696</td>
                                                </tr>
                                                <tr>
                                                    <td class="date">2018-02-07</td> 
                                                    <td>2018년 1월 1일 1시 0분 양력/평달</td>
                                                    <td class="num">A726039-00696</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="btn-area">
                                            <p>
                                                <a href="#" class="btn btn-sm btn-pink" role="button">이전화면</a>
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