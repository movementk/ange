<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/ange_mall.css" rel="stylesheet">
</head>
<body class="sub ange_mall"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- Main Content -->
    <main id="content" class="mileage-list hotdeal-list"><!-- 페이지명 클래스 -->
        <div class="container">
            <div class="sub-wrapper">
                <!-- 서브 lnb -->
                <?php require_once($_SERVER["DOCUMENT_ROOT"]."/ange_mall/_lnb.php"); ?>
                <!-- Content Start -->
                 <div class="sub-content">
                    <article class="item-list">
                        <h3 class="sub-title">핫딜</h3>
                        <div class="article-header">
                            <ol class="point-tabs">
                                <li class="total active"><a href="#">전체</a></li>
                                <li><a href="#">~10,000 P</a></li>
                                <li><a href="#">~30,000 P</a></li>
                                <li><a href="#">~40,000 P</a></li>
                                <li><a href="#">~100,000 P</a></li>
                                <li><a href="#">100,000 P~</a></li>
                            </ol>
                        </div>
                        <div class="article-content">
                            <ul class="row">
                                <li class="col-xs-4">
                                    <a href="/ange_mall/" class="hot-deal">
										<p class="sale-label">
                                       		99,999<span>원</span><br>
                                       		SALE
                                       	</p>
										<div class="clock">
											<img src="/assets/images/ange_mall/hotdeal_clock.png" alt="">
										</div>
                                        <div class="item">
											<img src="/assets/images/sub/img_product01.jpg" alt="">
                                            <dl>
												<dt>남은시간</dt>
												<dd>
													<span>0</span>
													<span>3</span>
													일
													<span>0</span>
													<span>3</span>
													일
													<span>0</span>
													<span>3</span>
													일
												</dd>
											</dl>
                                        </div>
                                        <div class="details">
                                            <p>
                                                Botanical Therapy 스텝원 베이비 치약<br>
                                                (무불소, 블루베리향)
                                            </p>
											<i class="pre-price">￦ 250,000</i>
                                            <i class="point">￦ 15,000</i>
                                        </div>
                                    </a>
                                </li>
                                <li class="col-xs-4">
                                    <a href="/ange_mall/product_info.php">
                                        <div class="item">
                                            <img src="/assets/images/sub/img_product02.jpg" alt="">
                                        </div>
                                        <div class="details">
                                            <p>
                                                드림베이비 가스레인지 &amp;<br>
                                                오븐 손잡이 보호대
                                            </p>
                                            <i class="point">￦ 15,000</i>
                                        </div>
                                    </a>
                                </li>
                                <li class="col-xs-4">
                                    <a href="/ange_mall/product_info.php">
                                        <div class="item">
                                            <img src="/assets/images/sub/img_product03.jpg" alt="">
                                        </div>
                                        <div class="details">
                                            <p>
                                                몰리메드 맥시_특오버나이트형
                                            </p>
                                            <i class="point">￦ 15,000</i>
                                        </div>
                                    </a>
                                </li>
                                <li class="col-xs-4">
                                    <a href="/ange_mall/product_info.php">
                                        <div class="item">
                                            <img src="/assets/images/sub/img_product01.jpg" alt="">
                                        </div>
                                        <div class="details">
                                            <p>
                                                Botanical Therapy 스텝원 베이비 치약<br>
                                                (무불소, 블루베리향)
                                            </p>
                                            <i class="point">￦ 15,000</i>
                                        </div>
                                    </a>
                                </li>
                                <li class="col-xs-4">
                                    <a href="/ange_mall/product_info.php">
                                        <div class="item">
                                            <img src="/assets/images/sub/img_product02.jpg" alt="">
                                        </div>
                                        <div class="details">
                                            <p>
                                                드림베이비 가스레인지 &amp;<br>
                                                오븐 손잡이 보호대
                                            </p>
                                            <i class="point">￦ 15,000</i>
                                        </div>
                                    </a>
                                </li>
                                <li class="col-xs-4">
                                    <a href="/ange_mall/product_info.php">
                                        <div class="item">
                                            <img src="/assets/images/sub/img_product03.jpg" alt="">
                                        </div>
                                        <div class="details">
                                            <p>
                                                몰리메드 맥시_특오버나이트형
                                            </p>
                                            <i class="point">￦ 15,000</i>
                                        </div>
                                    </a>
                                </li>
                            </ul>
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