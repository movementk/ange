<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/ange_mall.css" rel="stylesheet">
</head>
<body class="sub ange_mall"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- Main Content -->
    <main id="content" class="order-write"><!-- 페이지명 클래스 -->
        <div class="container">
            <div class="sub-wrapper">
                <!-- 서브 lnb -->
                <?php require_once($_SERVER["DOCUMENT_ROOT"]."/ange_mall/_lnb.php"); ?>
                <!-- Content Start -->
                 <div class="sub-content">
                     <h2 class="sub-title">장바구니</h2>
                    <!-- Step-list 공통 -->
                    <div class="step-list">
                        <ol>
                            <li>
                                <b>STEP 01</b>
                                <p class="icon">
                                    <img src="/assets/images/ange_mall/icon_step_list01.png" alt="">
                                </p>
                                <h3>장바구니</h3>
                            </li>
                            <li class="active">
                                <b>STEP 02</b>
                                <p class="icon">
                                    <img src="/assets/images/customer/icon_step_list02_active.png" alt="">
                                </p>
                                <h3>주문 / 결제</h3>
                            </li>
                            <li>
                                <b>STEP 03</b>
                                <p class="icon">
                                    <img src="/assets/images/customer/icon_step_list03.png" alt="">
                                </p>
                                <h3>주문완료</h3>
                            </li>
                        </ol>
                    </div>
                    
                     <article class="product-info">
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
                                                    <figure>
                                                        <img src="/assets/images/ange_mall/img_smallpdt.jpg" alt="" >
                                                        <figcaption>Botanical Therapy 스텝원 베이비<br>
                                                        치약 (무불소, 블루베리향)</figcaption>
                                                    </figure>
                                                </a>
                                            </td>
                                            <td class="payment">999p</td>
                                            <td class="amount">10</td>
                                            <td class="total">999.999p</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="article-footer">
                            <div class="info-payment">
                                <dl>
                                    <dt>합계</dt>
                                    <dd>40,000 원</dd>
                                    <dt>배송비</dt>
                                    <dd>0 원(착불)</dd>
                                    <dt class="total">예상결제금액</dt>
                                    <dd>
                                        <span class="price">62,000</span>
                                        원
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </article>
                    <article class="user-info">
                        <div class="article-header">
                            <div class="row">
                                <div class="col-xs-8"></div>
                                <div class="col-xs-4"></div>
                            </div>
                        </div>
                        <div class="article-content">
                        </div>
                    </article>
                    <article class="delivery-info">
                        
                    </article>
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