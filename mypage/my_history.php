<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/mypage.css" rel="stylesheet">
</head>
<body class="sub mypage"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- Main Content -->
    <main id="content" class="my-history"><!-- 페이지명 클래스 -->
        <div class="container">
            <div class="sub-wrapper">
                <!-- 서브 lnb -->
                <?php require_once($_SERVER["DOCUMENT_ROOT"]."/mypage/_lnb.php"); ?>
                <!-- Content Start -->
                 <div class="sub-content">
                    <h2 class="sub-title">내가 쓴 글</h2>
                    <article class="my-board">
                        <h3>내가 쓴 게시물</h3>
                        <div class="table-wrap">
                           <table class="table tbale-bordered type-2">
                                <thead>
                                    <tr>
                                        <th>구분</th>
                                        <th>제목</th>
                                        <th>조회수</th>
                                        <th>작성일</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="divide">커뮤니티</td>
                                        <td class="title"><a href="#">커뮤니티에 등록 한 글</a></td>
                                        <td class="view">9999</td>
                                        <td class="date">2017-12-01</td>
                                    </tr>
                                    <tr>
                                        <td class="divide">체험후기</td>
                                        <td class="title"><a href="#">커뮤니티에 등록 한 글</a></td>
                                        <td class="view">99992</td>
                                        <td class="date">2017-12-01</td>
                                    </tr>
                                    <tr>
                                        <td class="divide">회원문의</td>
                                        <td class="title"><a href="#">커뮤니티에 등록 한 글</a></td>
                                        <td class="view">99993</td>
                                        <td class="date">2017-12-01</td>
                                    </tr>
                                    <tr>
                                        <td class="divide">커뮤니티</td>
                                        <td class="title"><a href="#">커뮤니티에 등록 한 글</a></td>
                                        <td class="view">99994</td>
                                        <td class="date">2017-12-01</td>
                                    </tr>
                                    <tr>
                                        <td class="divide">체험후기</td>
                                        <td class="title"><a href="#">커뮤니티에 등록 한 글</a></td>
                                        <td class="view">99995</td>
                                        <td class="date">2017-12-01</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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
                    </article>
                    <article class="my-comment">
                        <h3>내가 쓴 댓글</h3>
                        <div class="table-wrap">
                           <table class="table tbale-bordered type-2">
                                <thead>
                                    <tr>
                                        <th>제목</th>
                                        <th>작성일</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="title"><a href="#">딸램의 잠투정도 이제 클라우드비로 안녕~</a></td>
                                        <td class="date">2017-12-01</td>
                                    </tr>
                                    <tr>
                                        <td class="title"><a href="#">유비케어 건강식품앱/건강한알 앱으로 우리아이가 먹을 건</a></td>
                                        <td class="date">2017-12-01</td>
                                    </tr>
                                    <tr>
                                        <td class="title"><a href="#">건강식품앱 추천:: 유비케어 건강한알이면 영유아영양제성</a></td>
                                        <td class="date">2017-12-01</td>
                                    </tr>
                                    <tr>
                                        <td class="title"><a href="#">[아기크림] 쫀득한 킨더퍼페츠 모짜렐라 크림 고보습 베</a></td>
                                        <td class="date">2017-12-01</td>
                                    </tr>
                                    <tr>
                                        <td class="title"><a href="#">출산선물로 좋은 모윰젖병소독기 사용해봤어요</a></td>
                                        <td class="date">2017-12-01</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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