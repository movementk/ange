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
                    <article class="product-info">
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
                    <article class="user-info">
                        <div class="table-wrap">
                            <table class="table table-bordered type-1">
                                <caption>
                                    표의 제목
                                </caption>
                                <tbody>
                                    <tr>
                                        <th>신청자</th>
                                        <td>무브먼트(movementk)</td>
                                    </tr>
                                    <tr>
                                        <th>주소</th>
                                        <td>서울 서초구 양재동</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </article>
                    <article class="delivery-info">
                        <div class="article-header">
                            
                        </div>
                        <div class="article-content">
                            
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
    <script src="/assets/js/common_sub.js"></script>
</body>
</html>