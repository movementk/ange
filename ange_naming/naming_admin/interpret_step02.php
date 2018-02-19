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
                    <section class="interpret-step02">
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
                            <article class="entry-summary">
                                <h3 class="naming-title">이름풀이 입력요약</h3>
                                <div class="table-wrap">
                                    <table class="table table-bordered type-1">
                                        <tbody>
                                            <tr>
                                                <th>이름 (한글)</th>
                                                <td>김경규</td>
                                            </tr>
                                            <tr>
                                                <th>이름 (한자)</th>
                                                <td>金炅奎</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </article>
                            <article class="score">
                                <h3 class="naming-title">이름풀이 점수표</h3>
                                <div class="table-wrap">
                                    <table class="table table-bordered type-2">
                                        <colgroup>
                                            <col style="width: 20%;">
                                            <col style="width: 20%;">
                                            <col style="width: 20%;">
                                            <col style="width: 20%;">
                                            <col style="width: 20%;">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th>음오행</th>
                                                <th>초년운</th>
                                                <th>장년운</th>
                                                <th>중년운</th>
                                                <th>말년운</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>좋음 (100)</td>
                                                <td>좋음 (100)</td>
                                                <td>좋음 (100)</td>
                                                <td>좋음 (100)</td>
                                                <td>좋음 (100)</td>
                                            </tr>
                                            <tr>
                                                <td colspan="5">
                                                이름풀이 총평가 ( <b>500</b> 점 )</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </article>
                            <article class="remainder">
                                <h3 class="naming-title">나머지 한자의 휙순 선택</h3>
                                <div class="table-wrap">
                                    <table class="table table-bordered type-2">
                                        <colgroup>
                                            <col style="width: 170px;">
                                            <col style="width: ;">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th>점수</th>
                                                <th>평가</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <i>400점~ 500점</i>
                                                </td>
                                                <td>
                                                    <i>이름이 매우 좋습니다.</i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>300점~ 399점</td>
                                                <td>보통이름으로 무난합니다.</td>
                                            </tr>
                                            <tr>
                                                <td>200점~ 299점</td>
                                                <td>이름이 귀하의 운을 해하고 있습니다.</td>
                                            </tr>
                                            <tr>
                                                <td>0점~ 199점</td>
                                                <td>개명하시는 것이 좋을 듯 싶습니다.</td>
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