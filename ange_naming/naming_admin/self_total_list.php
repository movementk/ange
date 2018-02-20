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
                    <section class="self-total-list progress-list"><!-- 페이지명 클래스 -->
                        <div class="section-header">
                            <h2 class="sub-title">셀프 작명</h2>
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
                                                <col style="width:180px">
                                                <col style="width:100px">
                                                <col style="width:70px">
                                                <col style="width:260px">
                                                <col style="width:150px">
                                                <col style="width:">
                                            </colgroup>
                                            <thead>
                                                <tr>
                                                    <th>ID(NAME)</th>
                                                    <th>신청일</th>
                                                    <th>결제방법</th>
                                                    <th>작명 당사자 정보</th>
                                                    <th>작명승인번호</th>
                                                    <th>승인여부</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>angeadmin4650(관리자)</td>
                                                    <td class="date">2018-02-07</td>
                                                    <td>가상계좌</td>
                                                    <td>2018년 1월 1일 1시 0분 양력/평달</td>
                                                    <td class="num">A726039-00696</td>
                                                    <td>미승인</td>
                                                </tr>
                                                <tr>
                                                    <td>angeadmin4650(관리자)</td>
                                                    <td class="date">2018-02-07</td>
                                                    <td>신용카드</td>
                                                    <td>2018년 1월 1일 1시 0분 양력/평달</td>
                                                    <td class="num">A726039-00696</td>
                                                    <td>승인</td>
                                                </tr>
                                                <tr>
                                                    <td>angeadmin4650(관리자)</td>
                                                    <td class="date">2018-02-07</td>
                                                    <td>신용카드</td>
                                                    <td>2018년 1월 1일 1시 0분 양력/평달</td>
                                                    <td class="num">A726039-00696</td>
                                                    <td>미승인</td>
                                                </tr>
                                                <tr>
                                                    <td>nasi26(송지현)</td>
                                                    <td class="date">2018-02-07</td>
                                                    <td>신용카드</td>
                                                    <td>2018년 1월 1일 1시 0분 양력/평달</td>
                                                    <td class="num">A726039-00696</td>
                                                    <td>미승인</td>
                                                </tr>
                                                <tr>
                                                    <td>moonamin(이은재)</td>
                                                    <td class="date">2018-02-07</td>
                                                    <td>신용카드</td>
                                                    <td>2018년 1월 1일 1시 0분 양력/평달</td>
                                                    <td class="num">A726039-00696</td>
                                                    <td>미승인</td>
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
                                                <li><a href="#">4</a></li>
                                                <li><a href="#">5</a></li>
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