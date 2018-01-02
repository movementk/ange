<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/mypage.css" rel="stylesheet">
<link rel="stylesheet" property="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" type="text/css">
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
                        <dl>
                            <dt>관리자 님의 사용가능 마일리지</dt>
                            <dd>
                                <img src="/assets/images/mypage/img_point.png" alt="">
                                 999,999,999 P
                            </dd>
                        </dl>
                    </div>
                    <article class="list">
                        <div class="selection-date">
                            <div class="row">
                                <div class="col-xs-6">
                                    <dl class="selection">
                                        <dt>조회기간</dt>
                                        <dd>
                                            <label><input type="radio"> 6개월</label>
                                            <label><input type="radio"> 3개월</label>
                                            <label><input type="radio"> 1개월</label>
                                            <label><input type="radio"> 직접 입력</label>
                                        </dd>
                                    </dl>
                                </div>
                                <div class="col-xs-6">
                                    <div class="calendar">
                                        <form action="#">
                                            <div class="form-group">
                                                <input type="text" id="datepicker1" class="form-control">
                                                <label for="datepicker1">
                                                    <i class="icon-calendar-1">
                                                        <span class="sr-only">달력 열기</span>
                                                    </i>
                                                </label>
                                            </div>
                                            ~ 
                                            <div class="form-group">
                                                <input type="text" id="datepicker2" class="form-control">
                                                <label for="datepicker2">
                                                    <i class="icon-calendar-1">
                                                        <span class="sr-only">달력 열기</span>
                                                    </i>
                                                </label>
                                            </div>
                                            <div class="btn-inquire">
                                                <button type="submit" class="btn btn-pink">조회</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
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
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/quick.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="/assets/js/common_sub.js"></script>
    <script>
        $(function($) {
            $.datepicker.setDefaults({
                dateFormat: 'yy-mm-dd',
                prevText: '이전 달',
                nextText: '다음 달',
                monthNames: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
                monthNamesShort: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
                dayNames: ['일', '월', '화', '수', '목', '금', '토'],
                dayNamesShort: ['일', '월', '화', '수', '목', '금', '토'],
                dayNamesMin: ['일', '월', '화', '수', '목', '금', '토'],
                showMonthAfterYear: true,
                yearSuffix: '년'
            });
            $('#datepicker1').datepicker();
            $('#datepicker2').datepicker();
        }(jQuery));
    </script>
</body>
</html>