<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/mypage.css" rel="stylesheet">
</head>
<body class="sub mypage"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- Main Content -->
    <main id="content" class="mileage"><!-- 페이지명 클래스 -->
        <div class="container">
            <div class="sub-wrapper">
                <!-- 서브 lnb -->
                <?php require_once($_SERVER["DOCUMENT_ROOT"]."/mypage/_lnb.php"); ?>
                <!-- Content Start -->
                 <div class="sub-content">
                    <h2 class="sub-title">마일리지 적립현황</h2>
                    <div class="mileage-view">
                        <div class="row">
                            <div class="col-xs-6">
                                <dl>
                                    <dt>관리자 님의 총 마일리지</dt>
                                    <dd>
                                         999,999,999 P
                                    </dd>
                                </dl>
                            </div>
                            <div class="col-xs-6">
                                <dl class="available">
                                    <dt>관리자 님의 <b>사용가능</b> 마일리지</dt>
                                    <dd>
                                        9,999 P
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <article class="list">
                        <div class="selection-date">
                            <div class="form-group">
                                <dl>
                                    <dt>연도별 조회</dt>
                                    <dd>
                                        <select class="form-control">
                                            <option>2017</option>
                                        </select>        
                                    </dd>
                                </dl>
                            </div>
                            <div class="form-group">
                                <dl>
                                    <dt>월별 조회</dt>
                                    <dd>
                                        <select class="form-control">
                                            <option>11</option>
                                        </select>        
                                    </dd>
                                </dl>
                            </div>
                            <div class="btn-area">
                                <p>
                                    <button type="submit" class="btn btn-pink">조회</button>
                                </p>
                            </div>
                        </div>
                        <div class="article-content">
                            <div class="table-wrap">
                               <table class="table tbale-bordered type-2">
                                    <thead>
                                        <tr>
                                            <th>번호</th>
                                            <th>구분</th>
                                            <th>적립내용</th>
                                            <th>마일리지</th>
                                            <th>적립일</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="num">130</td>
                                            <td class="divide"><a href="#">아이데리고 여기</a></td>
                                            <td class="content">적립내용</td>
                                            <td class="point">999P</td>
                                            <td class="date">
                                                2017-12-01
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="num">130</td>
                                            <td class="divide"><a href="#">아이데리고 여기</a></td>
                                            <td class="content">적립내용</td>
                                            <td class="point">999P</td>
                                            <td class="date">
                                                2017-12-01
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="num">130</td>
                                            <td class="divide"><a href="#">아이데리고 여기</a></td>
                                            <td class="content">적립내용</td>
                                            <td class="point">999P</td>
                                            <td class="date">
                                                2017-12-01
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="num">130</td>
                                            <td class="divide"><a href="#">아이데리고 여기</a></td>
                                            <td class="content">적립내용</td>
                                            <td class="point">999P</td>
                                            <td class="date">
                                                2017-12-01
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="num">130</td>
                                            <td class="divide"><a href="#">아이데리고 여기</a></td>
                                            <td class="content">적립내용</td>
                                            <td class="point">999P</td>
                                            <td class="date">
                                                2017-12-01
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="num">130</td>
                                            <td class="divide"><a href="#">아이데리고 여기</a></td>
                                            <td class="content">적립내용</td>
                                            <td class="point">999P</td>
                                            <td class="date">
                                                2017-12-01
                                            </td>
                                        </tr>
                                         <tr>
                                            <td class="num">130</td>
                                            <td class="divide"><a href="#">아이데리고 여기</a></td>
                                            <td class="content">적립내용</td>
                                            <td class="point">999P</td>
                                            <td class="date">
                                                2017-12-01
                                            </td>
                                        </tr>
                                         <tr>
                                            <td class="num">130</td>
                                            <td class="divide"><a href="#">아이데리고 여기</a></td>
                                            <td class="content">적립내용</td>
                                            <td class="point">999P</td>
                                            <td class="date">
                                                2017-12-01
                                            </td>
                                        </tr>
                                         <tr>
                                            <td class="num">130</td>
                                            <td class="divide"><a href="#">아이데리고 여기</a></td>
                                            <td class="content">적립내용</td>
                                            <td class="point">999P</td>
                                            <td class="date">
                                                2017-12-01
                                            </td>
                                        </tr>
                                         <tr>
                                            <td class="num">130</td>
                                            <td class="divide"><a href="#">아이데리고 여기</a></td>
                                            <td class="content">적립내용</td>
                                            <td class="point">999P</td>
                                            <td class="date">
                                                2017-12-01
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
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