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
                    <section class="special-change"><!-- 페이지명 클래스 -->
                        <div class="section-header">
                            <h2 class="sub-title">스페셜 작명전환</h2>
                        </div>
                        <div class="section-content">
                            <article>
                                <div class="article-header">
                                    <div class="attention-box type-2">
                                        <h5>스페셜 작명전환 안내</h5>
                                        <ol>
                                            <li>1. 이용했던 작명 서비스(실시간 작명/셀프 작명)에서 스페셜 작명으로 전환을 원할 경우 이용할 수 있습니다.</li>
                                            <li>
                                                2. 실시간 작명 신청 후 <b>1주일 이내에만 가능</b>합니다.
                                            </li>
                                            <li>
                                                3. <i>전환신청을 하시면 신청했던 작명서비스(실시간 작명/셀프 작명)은 이용할 수 없습니다.</i>
                                            </li>
                                            <li>
                                                4.<b> 50,000원의 추가 비용이 발생</b>하오니 결제해주셔야 합니다.
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                                <div class="article-content">
                                    <div class="table-wrap">
                                        <div class="table-wrap">
                                            <p>스페셜작명 전환을 하시려면 [전환신청]을 클릭해주세요.</p>
                                            <table class="table tbale-bordered type-2">
                                                <colgroup>
                                                    <col style="width:130px">
                                                    <col style="width:140px">
                                                    <col style="width:275px">
                                                    <col style="width:">
                                                    <col style="width:">
                                                </colgroup>
                                                <thead>
                                                    <tr>
                                                        <th>신청일</th>
                                                        <th>결제방법</th>
                                                        <th>작명 당사자 정보</th>
                                                        <th>작명승인번호</th>
                                                        <th>전환신청</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="date">2018-02-07</td>
                                                        <td>가상계좌</td>
                                                        <td>2018년 1월 1일 1시 0분 양력/평달</td>
                                                        <td class="num">A726039-00696</td>
                                                        <td class="change-btn ">
                                                            <p>
                                                                <a href="#" class="btn-gray" role="button">전환완료</a>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="date">2018-02-07</td>
                                                        <td>신용카드</td>
                                                        <td>2018년 1월 1일 1시 0분 양력/평달</td>
                                                        <td class="num">A726039-00696</td>
                                                        <td class="change-btn">
                                                            <p>
                                                                <a href="#" class="btn-white" role="button">전환신청</a>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="date">2018-02-07</td>
                                                        <td>신용카드</td>
                                                        <td>2018년 1월 1일 1시 0분 양력/평달</td>
                                                        <td class="num">A726039-00696</td>
                                                        <td class="change-btn">
                                                            <p>
                                                                <a href="#" class="btn-white" role="button">전환신청</a>
                                                            </p>
                                                        </td>
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