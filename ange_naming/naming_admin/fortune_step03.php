<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/ange_naming.css" rel="stylesheet">
</head>
<body class="sub ange-naming"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- Main Content -->
    <main id="content" class="name-step03"><!-- 페이지명 클래스 -->
        <div class="container">
            <div class="sub-wrapper">
                <!-- 서브 lnb -->
                <?php require_once($_SERVER["DOCUMENT_ROOT"]."/ange_naming/_lnb.php"); ?>
                
                <!-- Content Start -->
                <div class="sub-content">
                    <section>
                        <div class="section-header">
                            <h2 class="sub-title">진행하기</h2>
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
                        </div>
                        <div class="section-content">
                            <article class="middle-select">
                                <h3 class="naming-title">중간자의 획순만을 선택</h3>
                                <p class="summary">
                                    중간자 획순을 선택하시면 끝자의 오행에 맞는 획순이 자동으로 정해집니다. <br>
                                    중간자의 획순을 선택하시면 자동으로 끝자가 선택되어 집니다.
                                </p>
                                <div class="article-content">
                                    <div class="table-wrap">
                                        <table class="table table-bordered">
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
                                                    <td>0,5,10,13,21 획</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="btn-area">
                                        <p>
                                            <a href="#" class="btn btn-sm btn-pink" role="button">진행하기</a>
                                            <a href="#" class="btn btn-sm btn-white" role="button">바구니 보기</a>
                                        </p>
                                    </div>
                                </div>
                            </article>
                            <article class="desired">
                                <h3 class="naming-title">원하는 글자를 선택</h3>
                                <p class="summary">
                                    음오행에 맞는 한자가 선택되어 다양하게 나옵니다. <br>
                                    마음에 드는 중간자와 끝자를 하나씩 선택하시고 마음에 드는 글자는 <i>[이름저장]</i>을 누르고 저장하면 됩니다.
                                </p>
                                <ul>
                                    <li>
                                        <h4>좋은한자</h4>
                                        <p>(이름에 좋은 한자)</p>
                                    </li>
                                    <li>
                                        <h4>상용한자</h4>
                                        <p>(이름에 쓸 수 있는 한자)</p>
                                    </li>
                                    <li>
                                        <h4>평이한자</h4>
                                        <p>(이름에 평범하게 쓰는 한자)</p>
                                    </li>
                                </ul>
                            </article>
                            <article class="middle-last">
                                <!--
                                    tr class=""
                                    좋은한자  >>  .fine
                                    상용한자  >>  .available
                                    평이한자  >>  .ordinary
                                -->
                                <div class="article-content">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="article-header">
                                                <h3 class="naming-title">중간 글자</h3>
                                                <p>:획</p>
                                            </div>
                                            <div class="table-wrap">
                                                <table class="table table-bordered reponsive-table">
                                                    <colgroup>
                                                        <col style="width: 97px;">
                                                        <col style="width: 97px;">
                                                        <col style="width: 97px;">
                                                        <col style="width: 97px;">
                                                        <col style="width: 17px;">
                                                    </colgroup>
                                                    <thead>
                                                        <tr>
                                                            <th>한자</th>
                                                            <th>음</th>
                                                            <th>운</th>
                                                            <th>선택</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td colspan="5">
                                                                <div class="table-wrap">
                                                                    <table class="table">
                                                                        <colgroup>
                                                                            <col style="width: 25%;">
                                                                            <col style="width: 25%;">
                                                                            <col style="width: 25%;">
                                                                            <col style="width: 25%;">
                                                                        </colgroup>
                                                                        <tbody>
                                                                            <tr class="fine">
                                                                                <td>工</td>
                                                                                <td>장인</td>
                                                                                <td>공</td>
                                                                                <td>
                                                                                    <div class="form-group">
                                                                                        <input type="radio">
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="fine">
                                                                                <td>久</td>
                                                                                <td>오랠</td>
                                                                                <td>구</td>
                                                                                <td>
                                                                                    <div class="form-group">
                                                                                        <input type="radio">
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="fine">
                                                                                <td>弓</td>
                                                                                <td>활</td>
                                                                                <td>궁</td>
                                                                                <td>
                                                                                    <div class="form-group">
                                                                                        <input type="radio">
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="fine">
                                                                                <td>己</td>
                                                                                <td>몸</td>
                                                                                <td>기</td>
                                                                                <td>
                                                                                    <div class="form-group">
                                                                                        <input type="radio">
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="available">
                                                                                <td>干</td>
                                                                                <td>방패</td>
                                                                                <td>간</td>
                                                                                <td>
                                                                                    <div class="form-group">
                                                                                        <input type="radio">
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="available">
                                                                                <td>巾</td>
                                                                                <td>수건</td>
                                                                                <td>건</td>
                                                                                <td>
                                                                                    <div class="form-group">
                                                                                        <input type="radio">
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="available">
                                                                                <td>口</td>
                                                                                <td>입</td>
                                                                                <td>구</td>
                                                                                <td>
                                                                                    <div class="form-group">
                                                                                        <input type="radio">
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="available">
                                                                                <td>口</td>
                                                                                <td>입</td>
                                                                                <td>구</td>
                                                                                <td>
                                                                                    <div class="form-group">
                                                                                        <input type="radio">
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <h3 class="naming-title">끝 글자</h3>
                                            <div class="table-wrap">
                                                <table class="table table-bordered reponsive-table">
                                                    <colgroup>
                                                        <col style="width: 97px;">
                                                        <col style="width: 97px;">
                                                        <col style="width: 97px;">
                                                        <col style="width: 97px;">
                                                        <col style="width: 17px;">
                                                    </colgroup>
                                                    <thead>
                                                        <tr>
                                                            <th>한자</th>
                                                            <th>음</th>
                                                            <th>운</th>
                                                            <th>선택</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td colspan="5">
                                                                <div class="table-wrap">
                                                                    <table class="table">
                                                                        <colgroup>
                                                                            <col style="width: 25%;">
                                                                            <col style="width: 25%;">
                                                                            <col style="width: 25%;">
                                                                            <col style="width: 25%;">
                                                                        </colgroup>
                                                                        <tbody>
                                                                            <tr class="fine">
                                                                                <td>工</td>
                                                                                <td>장인</td>
                                                                                <td>공</td>
                                                                                <td>
                                                                                    <div class="form-group">
                                                                                        <input type="radio">
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="fine">
                                                                                <td>久</td>
                                                                                <td>오랠</td>
                                                                                <td>구</td>
                                                                                <td>
                                                                                    <div class="form-group">
                                                                                        <input type="radio">
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="fine">
                                                                                <td>弓</td>
                                                                                <td>활</td>
                                                                                <td>궁</td>
                                                                                <td>
                                                                                    <div class="form-group">
                                                                                        <input type="radio">
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="fine">
                                                                                <td>己</td>
                                                                                <td>몸</td>
                                                                                <td>기</td>
                                                                                <td>
                                                                                    <div class="form-group">
                                                                                        <input type="radio">
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="available">
                                                                                <td>干</td>
                                                                                <td>방패</td>
                                                                                <td>간</td>
                                                                                <td>
                                                                                    <div class="form-group">
                                                                                        <input type="radio">
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="available">
                                                                                <td>巾</td>
                                                                                <td>수건</td>
                                                                                <td>건</td>
                                                                                <td>
                                                                                    <div class="form-group">
                                                                                        <input type="radio">
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="available">
                                                                                <td>口</td>
                                                                                <td>입</td>
                                                                                <td>구</td>
                                                                                <td>
                                                                                    <div class="form-group">
                                                                                        <input type="radio">
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="available">
                                                                                <td>口</td>
                                                                                <td>입</td>
                                                                                <td>구</td>
                                                                                <td>
                                                                                    <div class="form-group">
                                                                                        <input type="radio">
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="select-name">
                                <h3 class="naming-title">선택한 이름</h3>
                                <p class="summary">
                                    선택한 이름이 보입니다. <br>
                                    원하는 이름이면 <i>[이름저장]</i>을 누르고 저장하면 됩니다.
                                </p>
                                <div class="article-content">
                                    <div class="table-wrap">
                                        <table class="table table-bordered type-2">
                                            <colgroup>
                                                <col style="width: 33.33%">
                                                <col style="width: 33.33%">
                                                <col style="width: 33.33%">
                                            </colgroup>
                                            <thead>
                                                <tr>
                                                    <th>성</th>
                                                    <th>중간자</th>
                                                    <th>끝자</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>홍</td>
                                                    <td>길</td>
                                                    <td>동</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="btn-area">
                                        <p>
                                            <a href="#" class="btn btn-sm btn-pink" role="button">이름저장</a>
                                            <a href="#" class="btn btn-sm btn-white" role="button">바구니 보기</a>
                                        </p>
                                    </div>
                                </div>
                            </article>
                            <article class="disuse">
                                <h3 class="naming-title">불용문자 설명</h3>
                                <p class="summary">
                                    불용문자는 이름에 사용하기에 좋지 않은 뜻을 가진 문자입니다.
                                </p>
                                <div class="article-content">
                                    <div class="table-wrap">
                                        <table class="table table-bordered type-2">
                                            <colgroup>
                                                <col style="width: 70px;">
                                                <col style="width: 100px;">
                                                <col style="width: 670px;">
                                            </colgroup>
                                            <thead>
                                                <tr>
                                                    <th>한자</th>
                                                    <th>음/운</th>
                                                    <th>뜻</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>夏</td>
                                                    <td>여름 하</td>
                                                    <td>파란이 많고 도모함은 있으나 이루어짐이 없습니다.</td>
                                                </tr>
                                                <tr>
                                                    <td>夏</td>
                                                    <td>여름 하</td>
                                                    <td>성품이 온화하고 고결하여 많은 사람의 존경을 받을 수 있으나 재물이 모아지지 아니하고 항상 외롭고 고독이 따릅니다.</td>
                                                </tr>
                                                <tr>
                                                    <td>夏</td>
                                                    <td>여름 하</td>
                                                    <td>많은 사람에게 사랑을 받고 또한 남편의 사랑을 한몸에 받기를 소원하여 여성에게 많이 쓰이나 그와는 반대 현상으로 비애의 표본으로 전락하기가 쉽습니다.</td>
                                                </tr>
                                                <tr>
                                                    <td>夏</td>
                                                    <td>여름 하</td>
                                                    <td>수려한 인품에 총명하여 길운을 지니고 있으나 천수를 제대로 누리지 못하고 단명합니다.</td>
                                                </tr>
                                                <tr>
                                                    <td>夏</td>
                                                    <td>여름 하</td>
                                                    <td>화류계의 여성이름으로는 무방하나 부부운이 불길하다.</td>
                                                </tr>
                                            </tbody>
                                        </table>
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