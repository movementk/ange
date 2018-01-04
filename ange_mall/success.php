<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/ange_mall.css" rel="stylesheet">
</head>
<body class="sub ange_mall"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- Main Content -->
    <main id="content" class="success"><!-- 페이지명 클래스 -->
        <div class="container">
            <div class="sub-wrapper">
                <!-- 서브 lnb -->
                <?php require_once($_SERVER["DOCUMENT_ROOT"]."/ange_mall/_lnb.php"); ?>
                <!-- Content Start -->
                <div class="sub-content">
                    <h2 class="sub-title">장바구니</h2>
                    <!-- Step-list 공통 -->
                    <article class="order-success product-info">
                        <div class="article-header">
                            <div class="step-list">
                                <ol>
                                    <li>
                                        <b>STEP 01</b>
                                        <p class="icon">
                                            <img src="/assets/images/ange_mall/icon_step_list01.png" alt="">
                                        </p>
                                        <h3>장바구니</h3>
                                    </li>
                                    <li>
                                        <b>STEP 02</b>
                                        <p class="icon">
                                            <img src="/assets/images/customer/icon_step_list02.png" alt="">
                                        </p>
                                        <h3>주문 / 결제</h3>
                                    </li>
                                    <li class="active">
                                        <b>STEP 03</b>
                                        <p class="icon">
                                            <img src="/assets/images/customer/icon_step_list03_active.png" alt="">
                                        </p>
                                        <h3>주문완료</h3>
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <div class="complete-txt">
                            <figure>
                                <img src="/assets/images/ange_mall/img_complete.png" alt="">
                                <figcaption>
                                    주문이 정상적으로 완료되었습니다.
                                </figcaption>
                            </figure>
                            <strong>주문번호 : 000000</strong>
                            <p>
                                주문내역 및 배송현황은 마이페이지 > 주문현황에서 확인하실 수 있습니다.<br>
                                주문완료 후 주소지를 다시한번 확인하시고 주소지가 다를경우 마이페이지의 주문현황에서 문의를 남겨주세요
                            </p>
                        </div>
                        <div class="article-content">
                            <div class="table-wrap">
                                <table class="table tbale-bordered type-2">
                                    <thead>
                                        <tr>
                                            <th>상품정보</th>
                                            <th>금액</th>
                                            <th>수량 </th>
                                            <th>결제액</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="info">
                                                <a href="#">
                                                    <div class="item">
                                                        <img src="/assets/images/ange_mall/img_smallpdt.jpg" alt="" >
                                                    </div>
                                                    <p class="details">
                                                        Botanical Therapy 스텝원 베이비<br>
                                                        치약 (무불소, 블루베리향)
                                                    </p>
                                                </a>
                                            </td>
                                            <td>999 P</td>
                                            <td>10</td>
                                            <td class="payment">999,999 P</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="pay-info">
                                <div class="sum">
                                    <ul>
                                        <li>
                                            <dl>
                                                <dt>합계</dt>
                                                <dd><b>40,000</b> 원</dd>
                                            </dl>
                                        </li>
                                        <li>
                                            <dl>
                                                <dt>배송비</dt>
                                                <dd>0 원(착불)</dd>
                                            </dl>
                                        </li>
                                    </ul>
                                </div>
                                <div class="total">
                                    <dl>           
                                        <dt>예상결제금액</dt>
                                        <dd><strong>62,000</strong> 원</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </article>
                    
                     <article class="information">
                        <div class="table-wrap">
                            <table class="table table-bordered type-1">
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
                                </tbody>
                            </table>
                            <table class="table table-bordered type-1">
                                <caption>
                                    <h4>배송 정보</h4>
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
                                </tbody>
                            </table>
                            <div class="btn-area">
                                <p>
                                    <a href="#" class="btn btn-white" role="button">계속 쇼핑</a>
                                    <a href="#" class="btn btn-pink" role="button">주문/구매내역</a>
                                </p>
                            </div>
                        </div>
                    </article>
                    
                    <div class="careful">
                        <ol>
                            <li>
                                <span>1</span>
                                마일리지몰 상품은 제품의 하자가 아닌 경우를 제외하고 교환 및 반품이 불가능합니다.
                            </li>
                            <li>
                                <span>2</span>
                                마일리지몰 상품은 마일리지 금액에 상관없이 배송비가 모두 착불로 요청됩니다. 각 상품의 크기, 무게, 형태에 따라 차이가 있을 수 있습니다.
                            </li>
                            <li>
                                <span>3</span>
                                배송지역은 전국 배송이 가능하나 제주도 및 도서지역은 추가 배송비가 붙습니다(배송비 3,000원)
                                <p class="attention">택배사 배송정책에 의해 제주도 및 도서지역은 배송비를 선불로 입금해주셔야 합니다(문자로 계좌안내)</p>
                            </li>
                            <li>
                                <span>4</span>
                                배송은 주문일로부터 2~3일내 발송을 원칙으로 하며, 토,일,공휴일은 배송기간에 포함되지 않습니다.
                            </li>
                            <li>
                                <span>5</span>
                                상품은 업체사정상 사진과 다를 수 있음을 알려드립니다.
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/sub_aside.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/quick.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
    <script src="/assets/js/common_sub.js"></script>
</body>
</html>