<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/ange_naming.css" rel="stylesheet">
</head>
<body class="sub ange-naming"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- Main Content -->
    <main id="content" class="name-step02"><!-- 페이지명 클래스 -->
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
                            <form action="#">
                                <h3 class="naming-title">중간자의 획순만을 선택</h3>
                                <p class="summary">
                                    중간자 획순을 선택하시면 끝자의 오행에 맞는 획순이 자동으로 정해집니다. <br>
                                    중간자의 획순을 선택하시면 자동으로 끝자가 선택되어 집니다.
                                </p>
                                <div class="table-wrap">
                                    <table class="table table type-2">
                                        <colgroup>
                                            <col style="width: 25%;">
                                            <col style="width: 25%;">
                                            <col style="width: 25%;">
                                            <col style="width: 25%;">
                                        </colgroup>
                                        <tbody>
                                            <tr>
                                                <td rowspan="3" class="th-bg">성 김(金)</td>
                                                <td class="th-bg">성씨 : 金</td>
                                                <td class="th-bg">중간자</td>
                                                <td class="th-bg">끝자</td>
                                            </tr>
                                            <tr>
                                                <td>木</td>
                                                <td>木</td>
                                                <td>土</td>
                                            </tr>
                                            <tr>
                                                <td>8획</td>
                                                <td>
                                                    <div class="form-group">
                                                        <select class="form-control">
                                                            <option>3</option>
                                                        </select>
                                                        회
                                                    </div>
                                                </td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="btn-area">
                                    <p>
                                        <button type="submit" class="btn btn-sm btn-pink">진행하기</button>
                                        <a href="#" class="btn btn-sm btn-white" role="button">바구니 보기</a>
                                    </p>
                                </div>
                            </form>
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