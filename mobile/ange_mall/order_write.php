<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/dochead.php"); ?>
<link href="/mobile/assets/css/sub.css" rel="stylesheet">
<link href="/mobile/assets/css/ange_mall.css" rel="stylesheet">
</head>
<body class="sub ange_mall"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/header.php"); ?>
    <!-- pgae-header -->
    <div class="page-header">
        <!-- 폴더별 타이틀 -->
        <h2>장바구니</h2>
        <div class="btn-controls">
            <a href="/mobile/ange_mall/big_deal.php" class="prev">
                <i class="icon-left-open-big">
                    <span class="sr-only">이전 페이지</span>
                </i>
            </a>
            <a href="/mobile/ange_mall/mileage_list.php" class="next">
                <i class="icon-right-open-big">
                    <span class="sr-only">다음 페이지</span>
                </i>
            </a>
        </div>
    </div>
    
    <!-- sub content start -->
    <main id="content" class="order-write"><!-- 페이지명 클래스 -->
        <div class="container">
            <section>
                <div class="section-header">
                    <!-- step-list 공통-->
                    <ol class="step-list">
                        <li>
                            <div>
                                <p class="icon-img">
                                    <img src="/mobile/assets/images/ange_mall/icon_basket01.png" alt="step01">
                                </p>
                                장바구니
                            </div>
                        </li>
                        <li class="active">
                            <div>
                                <p class="icon-img">
                                    <img src="/mobile/assets/images/sub/icon_step02_active.png" alt="step02">
                                </p>
                                주문 / 결제
                            </div>
                        </li>
                        <li>
                            <div>
                                <p class="icon-img">
                                    <img src="/mobile/assets/images/sub/icon_step03.png" alt="step03">
                                </p>
                                주문완료
                            </div>
                        </li>
                    </ol>
                    
                    <article class="board-type-7">
                        <div class="product-info">
                            <a href="#">
                                <img src="/mobile/assets/images/sub/img_product01.png" alt="">
                            </a>
                        </div>
                    </article>
                </div>
                <div class="section-content">
                    <div class="table-wrap">
                        <form action="#">
                            <div class="btn-modify">
                                <p>정보가 다르신가요?</p>
                                <a href="#" class="btn btn-xs btn-white" role="button">정보수정</a>
                            </div>
                            <table class="table type-1">
                                <caption>
                                    <h4>주문자 정보</h4>
                                </caption>
                                <tbody>
                                    <tr>
                                        <th>신청자</th>
                                        <td>무브먼트(movementk)</td>
                                    </tr>
                                    <tr>
                                        <th>주소</th>
                                        <td>서울 서초구 양재동 120-1번지 양재빌딩 2층</td>
                                    </tr>
                                    <tr>
                                        <th>연락처</th>
                                        <td>02-1234-5678</td>
                                    </tr>
                                    <tr>
                                        <th><label for="u-blog">블로그</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="u-blog" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="u-sns">SNS</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="u-sns" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            
                            <div class="radio-box">
                                <div class="form-group">
                                    <label><input type="radio">주문자와 동일</label>
                                    <label><input type="radio">새로운 주소</label>
                                </div>
                            </div>
                            <table class="table type-1">
                                <caption>
                                    <h4>배송정보</h4>
                                </caption>
                                <tbody>
                                    <tr>
                                        <th>제목</th>
                                        <td>무브먼트(movementk)</td>
                                    </tr>
                                    <tr>
                                        <th>배송 주소</th>
                                        <td>서울 서초구 양재동 120-1번지 양재빌딩 2층</td>
                                    </tr>
                                    <tr>
                                        <th>추가정보</th>
                                        <td>02-1234-5678</td>
                                    </tr>
                                    <tr>
                                        <th><label for="u-blog">신청이유</label></th>
                                        <td>
                                            <div class="form-group">
                                                <textarea id="reason" class="form-control"></textarea>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="speech">신청 한마디</label></th>
                                        <td>
                                            <div class="form-group">
                                                <textarea id="speech" class="form-control"></textarea>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="btn-area">
                                <p>
                                    <button type="submit" class="btn btn-sm btn-pink">결제하기</button>
                                    <a href="#" class="btn btn-sm btn-white">취소하기</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </main>
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/docfoot.php"); ?>
    <script src="/mobile/assets/js/common.js"></script>
</body>
</html>