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
                    <section class="search-result01">
                        <div class="section-header">
                            <h2 class="sub-title">진행하기</h2>
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
                            <article>
                                <div class="article-header">
                                    <h3 class="naming-title">작명신청</h3>
                                    <ul>
                                        <li>실시간 이름은 작명가의 손길로 하나하나 다듬은 명품(名品)의 이름입니다. </li>
                                        <li>원하는 한글이름이나 다른 성별(중성적 이름을 원할 때)의 이름을 다시 검색할 수 있습니다. </li>
                                        <li>통계청에 등록된 275개의 모든 성씨(姓氏)를 기준으로 하여 직접 작명(作名)한 것이기 때문에 원하는 이름이나 다양한  맞춤 이름이 부족할 수 있습니다. </li>
                                        <li>돌림자(특정한자) 및 사주오행 작명하기 메뉴와 함께 이용하시면 최상(最上)의 이름을 정할 수 있습니다. </li>
                                        <li>본 실시간 이름은 성씨+2글자(예, 홍+길동) 이름만 이용 가능합니다. </li>
                                        <li>
                                            <i>한글이름(부분 또는 전체)으로 또는 다른 성별을 다시 검색할 수 있습니다. </i><br>
                                            (한글이름이 성명학의 조건에 맞지 않을 경우 검색되지 않을 수 있습니다.)
                                        </li>
                                    </ul>
                                    <div class="naming-search">
                                        <form action="#">
                                            <dl>
                                                <dt>한글이름</dt>
                                                <dd>
                                                    <div class="form-group">
                                                        <p>林</p>
                                                        <input type="text" id="u-name-1" class="form-control">
                                                        <label for="u-name-1" class="sr-only">name-1</label>
                                                        <input type="text" id="u-name-2" class="form-control">
                                                        <label for="u-name-2" class="sr-only">name-1</label>
                                                    </div>
                                                </dd>
                                                <dt>성별</dt>
                                                <dd class="search">
                                                    <div class="form-group">
                                                        <select class="form-control">
                                                            <option>모두</option>
                                                        </select>
                                                    </div>
                                                    <div class="btn-search">
                                                        <button type="submit" class="btn btn-sm btn-pink">검색하기</button>
                                                    </div>
                                                </dd>
                                            </dl>
                                        </form>
                                    </div>
                                </div>
                                <div class="article-content">
                                    <div class="btn-more">
                                        <a href="#" class="btn btn-lg btn-white">더 많은 실시간이름 보기</a>
                                    </div>
                                    <div class="table-wrap">
                                        <table class="table table-border type-2">
                                            <colgroup>
                                                <col style="width: 68px;">
                                                <col style="width: 130px;">
                                                <col style="width: 130px;">
                                                <col style="width: 150px;">
                                                <col style="width: 175px;">
                                                <col style="width: ;">
                                            </colgroup>
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <label>
                                                            <input type="checkbox">
                                                        </label>
                                                    </th>
                                                    <th>성씨</th>
                                                    <th>성별</th>
                                                    <th>이름(한글)</th>
                                                    <th>이름(한자)</th>
                                                    <th>저장하기</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <label>
                                                            <input type="checkbox">
                                                        </label>
                                                    </td>
                                                    <td>林</td>
                                                    <td>남</td>
                                                    <td>임지우</td>
                                                    <td>林地友</td>
                                                    <td>
                                                        <p>
                                                            <a href="#" class="btn btn-xs btn-white" role="button">저장하기</a>
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label>
                                                            <input type="checkbox">
                                                        </label>
                                                    </td>
                                                    <td>林</td>
                                                    <td>남</td>
                                                    <td>임영웅</td>
                                                    <td>林地友</td>
                                                    <td>
                                                        <p>
                                                            <a href="#" class="btn btn-xs btn-white" role="button">저장하기</a>
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label>
                                                            <input type="checkbox">
                                                        </label>
                                                    </td>
                                                    <td>林</td>
                                                    <td>여</td>
                                                    <td>임지은</td>
                                                    <td>林地友</td>
                                                    <td>
                                                        <p>
                                                            <a href="#" class="btn btn-xs btn-white" role="button">저장하기</a>
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label>
                                                            <input type="checkbox">
                                                        </label>
                                                    </td>
                                                    <td>林</td>
                                                    <td>남</td>
                                                    <td>임동우</td>
                                                    <td>林地友</td>
                                                    <td>
                                                        <p>
                                                            <a href="#" class="btn btn-xs btn-white" role="button">저장하기</a>
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label>
                                                            <input type="checkbox">
                                                        </label>
                                                    </td>
                                                    <td>林</td>
                                                    <td>여</td>
                                                    <td>임수정</td>
                                                    <td>林地友</td>
                                                    <td>
                                                        <p>
                                                            <a href="#" class="btn btn-xs btn-white" role="button">저장하기</a>
                                                        </p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <nav class="paging" aria-label="Page navigation">
                                            <ul class="pagination">
                                                <li class="first">
                                                    <a href="#" aria-label="Previous">
                                                        <i class="icon-angle-double-left"></i>
                                                    </a>
                                                </li>
                                                <li class="prev">
                                                    <a href="#" aria-label="Previous">
                                                        <i class="icon-angle-left"></i>
                                                    </a>
                                                </li>
                                                <li class="active"><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li class="next">
                                                    <a href="#" aria-label="Next">
                                                        <i class="icon-angle-right"></i>
                                                    </a>
                                                </li>
                                                <li class="last">
                                                    <a href="#" aria-label="Next">
                                                        <i class="icon-angle-double-right"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                        <div class="btn-area">
                                            <p>
                                                <a href="#" class="btn btn-sm btn-white" role=button>이전화면</a>
                                                <a href="#" class="btn btn-sm btn-pink" role=button>바구니 보기</a>
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