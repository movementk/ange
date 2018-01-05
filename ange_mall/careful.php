<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/ange_mall.css" rel="stylesheet">
</head>
<body class="sub ange_mall"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- Main Content -->
    <main id="content" class="product-info careful"><!-- 페이지명 클래스 -->
        <div class="container">
            <div class="sub-wrapper">
                <!-- 서브 lnb -->
                <?php require_once($_SERVER["DOCUMENT_ROOT"]."/ange_mall/_lnb.php"); ?>
                <!-- Content Start -->
                 <div class="sub-content">
                    <h2 class="sub-title">마일리지몰</h2>
                    <article class="view-detail">
                         <div class="article-header">
                            <div class="item">
                                <figure>
                                    <img src="/assets/images/ange_mall/img_product.jpg" alt="">
                                </figure>
                            </div>
                            <div class="information">
                                <div class="info-head">
                                    <h3 class="subject">
                                        착용해보시개 벨라베이비해피 기저귀 <br>체험단 이벤트
                                    </h3>
                                    <p>눅눅함을 잡는 강한 흡수력! 유럽 프리미엄 기저귀 벨라베이비해피</p>
                                </div>
                                <div class="info-body">
                                    <div class="info-first">
                                        <dl>
                                            <dt>가격</dt>
                                            <dd>00,000 P</dd>
                                            <dt>배송비</dt>
                                            <dd>0,000원 (착불)</dd>
                                            <dt>판매사</dt>
                                            <dd>xx</dd>
                                        </dl>
                                    </div>
                                    <div class="info-second">
                                        <dl>
                                            <dt>상품금액</dt>
                                            <dd class="payment">00,000 P</dd>
                                            <dt>배송비</dt>
                                            <dd class="delivery">0,000원 (착불)</dd>
                                        </dl>
                                    </div>
                                </div>
                                <div class="btn-area">
                                    <p>
                                        <a href="#" class="btn btn-sm btn-pink">장바구니</a>
                                        <a href="#" class="btn btn-sm btn-white">쇼핑하기</a>
                                        <a href="#" class="btn btn-sm btn-white btn-like">123</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="article-content">
                            <div class="tab-list">
                                <ul>
                                    <li><a href="http://html.ange.co.kr/ange_mall/product_info.php">상품안내</a></li>
                                    <li><a href="http://html.ange.co.kr/ange_mall/report_list.php">상품후기<p class="review-num">1,234</p></a></li>
                                    <li><a href="#">관련상품</a></li>
                                    <li class="active"><a href="#">주의사항</a></li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <figure>
                                    <img src="/assets/images/ange_mall/img_none_angemall_info.jpg" alt="">
                                </figure>
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