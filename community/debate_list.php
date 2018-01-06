<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/community.css" rel="stylesheet">
</head>
<body class="sub community"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- Main Content -->
    <main id="content" class="debate-list"><!-- 페이지명 클래스 -->
        <div class="container">
            <div class="sub-wrapper">
                <!-- 서브 lnb -->
                <?php require_once($_SERVER["DOCUMENT_ROOT"]."/community/_lnb.php"); ?>
                <!-- Content Start -->
                <div class="sub-content">
                    <section class="board-list">
                        <div class="section-header">
                            <h2 class="sub-title">토론</h2>
                            <figure>
                                <img src="/assets/images/community/img_none_debate_list.jpg" alt="">
                            </figure>
                        </div>
                        <div class="section-content">
                            <div class="search-form">
                                <form action="#">
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>제목</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="search" class="form-control" placeholder="검색어를 입력해 주세요">
                                        <label for="search" class="sr-only">검색하기</label>
                                    </div>
                                    <p class="btn-search">
                                        <button type="submit" class="btn btn-default">
                                            <i class="icon-search"></i>
                                            <span class="sr-only">검색 버튼</span>
                                        </button>
                                    </p>
                                </form>
                            </div>
                            <div class="table-wrap">
                                <table class="table table-bordered type-2">
                                    <thead>
                                        <tr>
                                            <th>번호</th>
                                            <th>제목</th>
                                            <th>작성자</th>
                                            <th>작성일</th>
                                            <th>조회수</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>130</td>
                                            <td class="title">
                                                <a href="/community/debate_view.php">
                                                    [당첨자 발표] 당첨자 발표 리스트입니다. (12)
                                                    <span class="icon icon-new">
                                                        <img src="/assets/images/event/icon_new.png" alt="">
                                                    </span>
                                                    <span class="icon icon-lock">
                                                        <img src="/assets/images/event/icon_lock.png" alt="">
                                                    </span>
                                                    <span class="icon icon-clip">
                                                        <img src="/assets/images/event/icon_clip.png" alt="">
                                                    </span>
                                                    <span class="icon icon-img">
                                                        <img src="/assets/images/event/icon_img.png" alt="">
                                                    </span>
                                                </a>
                                            </td>
                                            <td>홍길동</td>
                                            <td class="date">2017-12-01</td>
                                            <td class="hit">123</td>
                                        </tr>
                                        <tr>
                                            <td>129</td>
                                            <td class="title">
                                                <a href="/community/debate_view.php">[당첨자 발표] 당첨자 발표 리스트입니다.</a>
                                            </td>
                                            <td>홍길동</td>
                                            <td class="date">2017-12-01</td>
                                            <td class="hit">123</td>
                                        </tr>
                                        <tr>
                                            <td>128</td>
                                            <td class="title">
                                                <a href="/community/debate_view.php">[당첨자 발표] 당첨자 발표 리스트입니다.</a>
                                            </td>
                                            <td>홍길동</td>
                                            <td class="date">2017-12-01</td>
                                            <td class="hit">123</td>
                                        </tr>
                                        <tr>
                                            <td>127</td>
                                            <td class="title">
                                                <a href="/community/debate_view.php">[당첨자 발표] 당첨자 발표 리스트입니다.</a>
                                            </td>
                                            <td>홍길동</td>
                                            <td class="date">2017-12-01</td>
                                            <td class="hit">123</td>
                                        </tr>
                                        <tr>
                                            <td>126</td>
                                            <td class="title">
                                                <a href="/community/debate_view.php">[당첨자 발표] 당첨자 발표 리스트입니다.</a>
                                            </td>
                                            <td>홍길동</td>
                                            <td class="date">2017-12-01</td>
                                            <td class="hit">123</td>
                                        </tr>
                                        <tr>
                                            <td>125</td>
                                            <td class="title">
                                                <a href="/community/debate_view.php">[당첨자 발표] 당첨자 발표 리스트입니다.</a>
                                            </td>
                                            <td>홍길동</td>
                                            <td class="date">2017-12-01</td>
                                            <td class="hit">123</td>
                                        </tr>
                                        <tr>
                                            <td>124</td>
                                            <td class="title">
                                                <a href="/community/debate_view.php">[당첨자 발표] 당첨자 발표 리스트입니다.</a>
                                            </td>
                                            <td>홍길동</td>
                                            <td class="date">2017-12-01</td>
                                            <td class="hit">123</td>
                                        </tr>
                                        <tr>
                                            <td>123</td>
                                            <td class="title">
                                                <a href="/community/debate_view.php">[당첨자 발표] 당첨자 발표 리스트입니다.</a>
                                            </td>
                                            <td>홍길동</td>
                                            <td class="date">2017-12-01</td>
                                            <td class="hit">123</td>
                                        </tr>
                                        <tr>
                                            <td>122</td>
                                            <td class="title">
                                                <a href="/community/debate_view.php">[당첨자 발표] 당첨자 발표 리스트입니다.</a>
                                            </td>
                                            <td>홍길동</td>
                                            <td class="date">2017-12-01</td>
                                            <td class="hit">123</td>
                                        </tr>
                                        <tr>
                                            <td>121</td>
                                            <td class="title">
                                                <a href="/community/debate_view.php">[당첨자 발표] 당첨자 발표 리스트입니다.</a>
                                            </td>
                                            <td>홍길동</td>
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
                            <div class="btn-area">
                                <p>
                                    <a href="/community/debate_write.php" class="btn btn-sm btn-pink" role="button">등록</a>
                                </p>
                            </div>
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