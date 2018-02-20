<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/ange_naming.css" rel="stylesheet">
</head>
<body class="sub ange-naming"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- Main Content -->
    <main id="content" class="fortune-step01 name-step01"><!-- 페이지명 클래스 -->
        <div class="container">
            <div class="sub-wrapper">
                <!-- 서브 lnb -->
                <?php require_once($_SERVER["DOCUMENT_ROOT"]."/ange_naming/_lnb.php"); ?>
                
                <!-- Content Start -->
                <div class="sub-content">
                    <h2 class="sub-title">진행하기</h2>
                    <article>
                        <div class="attention-box type-2">
                            <h3>작명 진행 안내</h3>
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
                        <div class="article-content">
                            <h3 class="naming-title">작명/개명 당사자 오행정보</h3>
                            <p class="summary">
                                사주를 분석한 결과 나온 최상의 음오행입니다.<br>
                                성명학에서 중요한 대목의 하나로 경쾌하고 신나는 음악을 들을 때와, 우울하고 슬픈 음악을 들을 때에 우리의 청각에 전달되고 뇌에 감지되는 음파장(音波長)의 작용이 다르듯 이름도 이와 같은 이치입니다. 즉, 개인의 사조를 분석하고 성(姓)의 음오행(소리오행)을 기준하여 성(姓)의 음오행과 상생(相生)으로 잘 연결된 음양오행을 구성합니다.
                            </p>
                            <div class="table-wrap">
                                <table class="table table type-2">
                                    <colgroup>
                                        <col style="width: 95px;">
                                        <col style="width: ;">
                                        <col style="width: 170px;">
                                    </colgroup>
                                    <thead>
                                        <tr>
                                            <th>번호</th>
                                            <th>음오행(소리오행)</th>
                                            <th>다음단계</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>목목화/木木火</td>
                                            <td>
                                                <p class="btn-small">
                                                    <a href="#" class="btn btn-xs btn-white" role="button">
                                                        진행하기
                                                    </a>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>목목토/木木土</td>
                                            <td>
                                                <p class="btn-small">
                                                    <a href="#" class="btn btn-xs btn-white" role="button">
                                                        진행하기
                                                    </a>
                                                </p>
                                            </td>
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