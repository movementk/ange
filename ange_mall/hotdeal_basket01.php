<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/ange_mall.css" rel="stylesheet">
</head>
<body class="sub ange_mall"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- Main Content -->
    <main id="content" class="basket-list hotdeal-basket01"><!-- 페이지명 클래스 -->
        <div class="container">
            <div class="sub-wrapper">
                <!-- 서브 lnb -->
                <?php require_once($_SERVER["DOCUMENT_ROOT"]."/ange_mall/_lnb.php"); ?>
                <!-- Content Start -->
                <div class="sub-content">
                    <h2 class="sub-title">장바구니</h2>
                    <!-- Step-list 공통 -->
                    <article class="list">
                        <div class="article-header">
                            <div class="step-list">
                                <ol>
                                    <li class="active">
                                        <b>STEP 01</b>
                                        <p class="icon">
                                            <img src="/assets/images/ange_mall/icon_step_list01_active.png" alt="">
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
                                            <th>
                                                <div class="form-group">
                                                    <label><input type="checkbox"></label>
                                                </div>
                                            </th> 
                                            <th>상품정보</th>
                                            <th>금액</th>
                                            <th>수량 </th>
                                            <th>총 결제액</th>
                                            <th>변경</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label><input type="checkbox"></label>
                                                </div>
                                            </td>
                                            <td class="info">
                                                <a href="#">
                                                    <div class="item">
                                                        <img src="/assets/images/ange_mall/img_smallpdt.jpg" alt="" >
                                                    </div>
                                                    <div class="details">
														<p>
															Botanical Therapy 스텝원 베이비<br>
															치약 (무불소, 블루베리향)
														</p>
														<dl>
															<dt>옵션명</dt>
															<dd>
																<ul>
																	<li>옵션1 (+1,000원)</li>
																	<li>옵션2 (+3,000원)</li>
																	<li>옵션2 (+3,000원)</li>
																</ul>
															</dd>
														</dl>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="payment">
                                            	10,000 원
                                            	<span>(+7,000 원)</span>
                                            </td>
                                            <td class="amount">1</td>
                                            <td class="total"><i>17,000원</i></td>
                                            <td>
                                                <div class="btn-area">
                                                    <p>
                                                         <a href="#" class="btn btn-sm btn-white">삭제</a>
                                                    </p>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label><input type="checkbox"></label>
                                                </div>
                                            </td>
                                            <td class="info">
                                                <a href="#">
                                                    <div class="item">
                                                        <img src="/assets/images/ange_mall/img_smallpdt.jpg" alt="" >
                                                    </div>
                                                    <div class="details">
														<p>
															Botanical Therapy 스텝원 베이비<br>
															치약 (무불소, 블루베리향)
														</p>
														<dl>
															<dt>옵션명</dt>
															<dd>
																<ul>
																	<li>옵션1 (+1,000원)</li>
																</ul>
															</dd>
														</dl>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="payment">
                                            	10,000 원
                                            	<span>(+1,000 원)</span>
                                            </td>
                                            <td class="amount">10</td>
                                            <td class="total"><i>11,000원</i></td>
                                            <td>
                                                <div class="btn-area">
                                                    <p>
                                                         <a href="#" class="btn btn-sm btn-white">삭제</a>
                                                    </p>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label><input type="checkbox"></label>
                                                </div>
                                            </td>
                                            <td class="info">
                                                <a href="#">
                                                    <div class="item">
                                                        <img src="/assets/images/ange_mall/img_smallpdt.jpg" alt="" >
                                                    </div>
                                                    <div class="details">
														<p>
															Botanical Therapy 스텝원 베이비<br>
															치약 (무불소, 블루베리향)
														</p>
														<dl>
															<dt>옵션명</dt>
															<dd>
																<ul>
																	<li>옵션1 (+1,000원)</li>
																</ul>
															</dd>
														</dl>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="payment">
                                            	10,000 원
                                            	<span>(+1,000 원)</span>
                                            </td>
                                            <td class="amount">10</td>
                                            <td class="total"><i>11,000원</i></td>
                                            <td>
                                                <div class="btn-area">
                                                    <p>
                                                         <a href="#" class="btn btn-sm btn-white">삭제</a>
                                                    </p>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="btn-area">
                                <p>
                                    <a href="/ange_mall/order_write.php" class="btn btn-sm btn-pink" role="button">선택구매</a>
                                    <a href="#" class="btn btn-sm btn-white" role="button">쇼핑 계속하기</a>
                                </p>
                            </div>
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