<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/customer.css" rel="stylesheet">
</head>
<body class="sub customer"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- Main Content -->
    <main id="content" class="notice-list faq-list"><!-- 페이지명 클래스 -->
        <div class="container">
            <div class="sub-wrapper">
                <!-- 서브 lnb -->
                <?php require_once($_SERVER["DOCUMENT_ROOT"]."/customer/_lnb.php"); ?>
                <!-- Content Start -->
                <div class="sub-content">
                    <h2 class="sub-title">자주하는 질문</h2>
                    <article class="list">
                        <div class="article-header">
                            <ol class="point-tabs">
                                <li class="total active"><a href="#">전체</a></li>
                                <li><a href="#">회원관련</a></li>
                                <li><a href="#">마일리지</a></li>
                                <li><a href="#">이벤트/체험단</a></li>
                                <li><a href="#">커뮤니티</a></li>
                                <li><a href="#">스토어</a></li>
                                <li><a href="#">네이밍</a></li>
                            </ol>
                            <div class="search-form">
                                <form action="#">
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>제목</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="search" class="form-control" placeholder="검색어를 입력해 주세요">
                                        <label for="search" class="sr-only">검색하</label>
                                    </div>
                                    <p class="btn-search">
                                        <button type="submit" class="btn btn-default">
                                            <i class="icon-search"></i>
                                            <span class="sr-only">검색 버튼</span>
                                        </button>
                                    </p>
                                </form>
                            </div>
                        </div>
                        <div class="article-content">
                            <div class="table-wrap">
                               <table class="table tbale-bordered type-2">
                                    <thead>
                                        <tr>
                                            <th>번호</th>
                                            <th>제목</th>
                                            <th>작성자</th>
                                            <th>작성일</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="num">130</td>
                                            <td class="title"><a href="/customer/faq_view.php">딸램의 잠투정도 이제 클라우드비로 안녕~</a></td>
                                            <td>꼬뭉이</td>
                                            <td class="date">2017-12-01</td>
                                        </tr>
                                        <tr>
                                            <td class="num">129</td>
                                            <td class="title"><a href="/customer/faq_view.php">유비케어 건강식품앱/건강한알 앱으로 우리아가 먹을건</a></td>
                                            <td>꼬뭉이</td>
                                            <td class="date">2017-12-01</td>
                                        </tr>
                                        <tr>
                                            <td class="num">128</td>
                                            <td class="title"><a href="/customer/faq_view.php">건강식품앱추천::유비케어 건강한알이면 영유아영양제성</a></td>
                                            <td>꼬뭉이</td>
                                            <td class="date">2017-12-01</td>
                                        </tr>
                                        <tr>
                                            <td class="num">127</td>
                                            <td class="title"><a href="/customer/faq_view.php">[아기크림] 쫀득한 킨더퍼페츠 모짜렐라 크림 고보습</a></td>
                                            <td>꼬뭉이</td>
                                            <td class="date">2017-12-01</td>
                                        </tr>
                                        <tr>
                                            <td class="num">126</td>
                                            <td class="title"><a href="/customer/faq_view.php">딸램의 잠투정도 이제 클라우드비로 안녕~</a></td>
                                            <td>꼬뭉이</td>
                                            <td class="date">2017-12-01</td>
                                        </tr>
                                        <tr>
                                            <td class="num">125</td>
                                            <td class="title"><a href="/customer/faq_view.php">딸램의 잠투정도 이제 클라우드비로 안녕~</a></td>
                                            <td>꼬뭉이</td>
                                            <td class="date">2017-12-01</td>
                                        </tr>
                                         <tr>
                                            <td class="num">124</td>
                                            <td class="title"><a href="/customer/faq_view.php">딸램의 잠투정도 이제 클라우드비로 안녕~</a></td>
                                             <td>꼬뭉이</td>
                                            <td class="date">2017-12-01</td>
                                        </tr>
                                         <tr>
                                            <td class="num">123</td>
                                            <td class="title"><a href="/customer/faq_view.php">딸램의 잠투정도 이제 클라우드비로 안녕~</a></td>
                                             <td>꼬뭉이</td>
                                            <td class="date">2017-12-01</td>
                                        </tr>
                                         <tr>
                                            <td class="num">122</td>
                                            <td class="title"><a href="/customer/faq_view.php">딸램의 잠투정도 이제 클라우드비로 안녕~</a></td>
                                             <td>꼬뭉이</td>
                                            <td class="date">2017-12-01</td>
                                        </tr>
                                         <tr>
                                            <td class="num">121</td>
                                            <td class="title"><a href="/customer/faq_view.php">딸램의 잠투정도 이제 클라우드비로 안녕~</a></td>
                                             <td>꼬뭉이</td>
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