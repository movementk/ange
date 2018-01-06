<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/event.css" rel="stylesheet">
</head>
<body class="sub event"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- Main Content -->
    <main id="content" class="prizewinner-list"><!-- 페이지명 클래스 -->
        <div class="container">
            <div class="sub-wrapper">
                <!-- 서브 lnb -->
                <?php require_once($_SERVER["DOCUMENT_ROOT"]."/event/_lnb.php"); ?>
                <!-- Content Start -->
                <div class="sub-content">
                    <h2 class="sub-title">당첨자 발표</h2>
                    <article class="list">
                        <div class="article-header">
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
                                <table class="table table-borbordered type-2">
                                    <thead>
                                        <tr>
                                            <th>번호</th>
                                            <th>제목</th>
                                            <th>작성일</th>
                                            <th>조회수</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="num">130</td>
                                            <td class="title">
                                                <a href="/event/prizewinner_view.php">
                                                    [당첨자 발표] 당첨자 발표 리스트입니다. (12)
                                                    <span class="icon-new">
                                                        <img src="/assets/images/event/icon_new.png" alt="">
                                                    </span>
                                                    <span class="icon-lock">
                                                        <img src="/assets/images/event/icon_lock.png" alt="">
                                                    </span>
                                                    <span class="icon-clip">
                                                        <img src="/assets/images/event/icon_clip.png" alt="">
                                                    </span>
                                                    <span class="icon-img">
                                                        <img src="/assets/images/event/icon_img.png" alt="">
                                                    </span>
                                                </a>
                                            </td>
                                            <td class="date">2017-12-01</td>
                                            <td class="hit">123</td>
                                        </tr>
                                        <tr>
                                            <td class="num">130</td>
                                            <td class="title">
                                                <a href="/event/prizewinner_view.php">[당첨자 발표] 당첨자 발표 리스트입니다.</a>
                                            </td>
                                            <td class="date">2017-12-01</td>
                                            <td class="hit">123</td>
                                        </tr>
                                        <tr>
                                            <td class="num">130</td>
                                            <td class="title">
                                                <a href="/event/prizewinner_view.php">[당첨자 발표] 당첨자 발표 리스트입니다.</a>
                                            </td>
                                            <td class="date">2017-12-01</td>
                                            <td class="hit">123</td>
                                        </tr>
                                        <tr>
                                            <td class="num">130</td>
                                            <td class="title">
                                                <a href="/event/prizewinner_view.php">[당첨자 발표] 당첨자 발표 리스트입니다.</a>
                                            </td>
                                            <td class="date">2017-12-01</td>
                                            <td class="hit">123</td>
                                        </tr>
                                        <tr>
                                            <td class="num">130</td>
                                            <td class="title">
                                                <a href="/event/prizewinner_view.php">[당첨자 발표] 당첨자 발표 리스트입니다.</a>
                                            </td>
                                            <td class="date">2017-12-01</td>
                                            <td class="hit">123</td>
                                        </tr>
                                        <tr>
                                            <td class="num">130</td>
                                            <td class="title">
                                                <a href="/event/prizewinner_view.php">[당첨자 발표] 당첨자 발표 리스트입니다.</a>
                                            </td>
                                            <td class="date">2017-12-01</td>
                                            <td class="hit">123</td>
                                        </tr>
                                        <tr>
                                            <td class="num">130</td>
                                            <td class="title">
                                                <a href="/event/prizewinner_view.php">[당첨자 발표] 당첨자 발표 리스트입니다.</a>
                                            </td>
                                            <td class="date">2017-12-01</td>
                                            <td class="hit">123</td>
                                        </tr>
                                        <tr>
                                            <td class="num">130</td>
                                            <td class="title">
                                                <a href="/event/prizewinner_view.php">[당첨자 발표] 당첨자 발표 리스트입니다.</a>
                                            </td>
                                            <td class="date">2017-12-01</td>
                                            <td class="hit">123</td>
                                        </tr>
                                        <tr>
                                            <td class="num">130</td>
                                            <td class="title">
                                                <a href="/event/prizewinner_view.php">[당첨자 발표] 당첨자 발표 리스트입니다.</a>
                                            </td>
                                            <td class="date">2017-12-01</td>
                                            <td class="hit">123</td>
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