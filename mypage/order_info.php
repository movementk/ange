<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/mypage.css" rel="stylesheet">
<link rel="stylesheet" property="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" type="text/css">
</head>
<body class="sub mypage"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- Main Content -->
    <main id="content" class="order-info"><!-- 페이지명 클래스 -->
        <div class="container">
            <div class="sub-wrapper">
                <!-- 서브 lnb -->
                <?php require_once($_SERVER["DOCUMENT_ROOT"]."/mypage/_lnb.php"); ?>
                <!-- Content Start -->
                 <div class="sub-content">
                    <h2 class="sub-title">주문현황</h2>
                    <article class="order-sheet">
                        <div class="article-header">
                            <div class="date-search-form">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <dl>
                                                <dt>기간 검색</dt>
                                                <dd>
                                                    <div class="form-group">
                                                        <input type="text" id="datepicker1" class="form-control">
                                                        <label for="datepicker1">
                                                            <i class="icon-calendar-1"></i>
                                                        </label>
                                                    </div>
                                                    ~ 
                                                    <div class="form-group">
                                                        <input type="text" id="datepicker2" class="form-control">
                                                        <label for="datepicker2">
                                                            <i class="icon-calendar-1"></i>
                                                        </label>
                                                    </div>
                                                </dd>
                                            </dl>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="search">
                                                <div class="form-group">
                                                    <input type="text" id="search" class="form-control" placeholder="검색어를 입력해 주세요">
                                                    <label for="search" class="sr-only">검색하기</label>
                                                </div>
                                                <div class="btn-search">
                                                    <button type="submit" class="btn btn-default btn-pink">검색</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="article-content">
                            <div class="table-wrap">
                                <h3>마일리지몰 주문현황</h3>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>상품정보</th>
                                            <th>단가</th>
                                            <th>수량</th>
                                            <th>결제액</th>
                                            <th>변경</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="product-info">
                                                <div class="info">
                                                    <div class="item">
                                                        <a href="#">
                                                            <img src="/assets/images/mypage/img_product.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="details">
                                                        <h4>Botanical Therapy 스텝원 베이비<br>치약 (무불소, 블루베리향)</h4>
                                                        <dl>
                                                            <dt>금액</dt>
                                                            <dd>999,999 P</dd>
                                                            <dt>배송비</dt>
                                                            <dd>2,500원 (착불)</dd>
                                                            <dt>주문일</dt>
                                                            <dd>0000-00-00</dd>
                                                            <dt>주문지</dt>
                                                            <dd>주문지 주소</dd>
                                                            <dt>상태</dt>
                                                            <dd>배송완료</dd>
                                                        </dl>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>999 P</td>
                                            <td>10</td>
                                            <td class="payment">999,999 P</td>
                                            <td>
                                                <div class="btn-area">
                                                    <p>
                                                        <a href="#" class="btn btn-white" role="button">취소</a>
                                                        <a href="#" class="btn btn-white" role="button">문의</a>
                                                    </p>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="product-info">
                                                <div class="info">
                                                    <div class="item">
                                                        <a href="#">
                                                            <img src="/assets/images/mypage/img_product.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="details">
                                                        <h4>Botanical Therapy 스텝원 베이비<br>치약 (무불소, 블루베리향)</h4>
                                                        <dl>
                                                            <dt>금액</dt>
                                                            <dd>999,999 P</dd>
                                                            <dt>배송비</dt>
                                                            <dd>2,500원 (착불)</dd>
                                                            <dt>주문일</dt>
                                                            <dd>0000-00-00</dd>
                                                            <dt>주문지</dt>
                                                            <dd>주문지 주소</dd>
                                                            <dt>상태</dt>
                                                            <dd>배송완료</dd>
                                                        </dl>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>999 P</td>
                                            <td>10</td>
                                            <td class="payment">999,999 P</td>
                                            <td>
                                                <div class="btn-area">
                                                    <p>
                                                        <a href="#" class="btn btn-white" role="button">취소</a>
                                                        <a href="#" class="btn btn-white" role="button">문의</a>
                                                    </p>
                                                </div>
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
                            
                            <div class="table-wrap">
                                <h3>앙쥬빅딜 주문현황</h3>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>상품정보</th>
                                            <th>단가</th>
                                            <th>수량</th>
                                            <th>결제액</th>
                                            <th>변경</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="product-info">
                                                <div class="info">
                                                    <div class="item">
                                                        <a href="#">
                                                            <img src="/assets/images/mypage/img_product.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="details">
                                                        <h4>Botanical Therapy 스텝원 베이비<br>치약 (무불소, 블루베리향)</h4>
                                                        <dl>
                                                            <dt>금액</dt>
                                                            <dd>999,999 P</dd>
                                                            <dt>배송비</dt>
                                                            <dd>2,500원 (착불)</dd>
                                                            <dt>주문일</dt>
                                                            <dd>0000-00-00</dd>
                                                            <dt>주문지</dt>
                                                            <dd>주문지 주소</dd>
                                                            <dt>상태</dt>
                                                            <dd>배송완료</dd>
                                                        </dl>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>999 P</td>
                                            <td>10</td>
                                            <td class="payment">999,999 P</td>
                                            <td>
                                                <div class="btn-area">
                                                    <p>
                                                        <a href="#" class="btn btn-white" role="button">취소</a>
                                                        <a href="#" class="btn btn-white" role="button">문의</a>
                                                    </p>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="product-info">
                                                <div class="info">
                                                    <div class="item">
                                                        <a href="#">
                                                            <img src="/assets/images/mypage/img_product.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="details">
                                                        <h4>Botanical Therapy 스텝원 베이비<br>치약 (무불소, 블루베리향)</h4>
                                                        <dl>
                                                            <dt>금액</dt>
                                                            <dd>999,999 P</dd>
                                                            <dt>배송비</dt>
                                                            <dd>2,500원 (착불)</dd>
                                                            <dt>주문일</dt>
                                                            <dd>0000-00-00</dd>
                                                            <dt>주문지</dt>
                                                            <dd>주문지 주소</dd>
                                                            <dt>상태</dt>
                                                            <dd>배송완료</dd>
                                                        </dl>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>999 P</td>
                                            <td>10</td>
                                            <td class="payment">999,999 P</td>
                                            <td>
                                                <div class="btn-area">
                                                    <p>
                                                        <a href="#" class="btn btn-white" role="button">취소</a>
                                                        <a href="#" class="btn btn-white" role="button">문의</a>
                                                    </p>
                                                </div>
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
                        </div>
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