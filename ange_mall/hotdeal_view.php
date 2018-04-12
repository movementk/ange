<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/ange_mall.css" rel="stylesheet">
</head>
<body class="sub ange_mall"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- Main Content -->
    <main id="content" class="product-info hotdeal-view"><!-- 페이지명 클래스 -->
        <div class="container">
            <div class="sub-wrapper">
                <!-- 서브 lnb -->
                <?php require_once($_SERVER["DOCUMENT_ROOT"]."/ange_mall/_lnb.php"); ?>
                <!-- Content Start -->
                 <div class="sub-content">
                    <h2 class="sub-title">핫딜</h2>
                    <article class="view-detail">
						<div class="article-header">
							<form action="#">
								<div class="item">
									<figure>
										<img src="/assets/images/ange_mall/img_product.jpg" alt="">
									</figure>
									<div class="naver-pay">
										<figure>
											<img src="/assets/images/ange_mall/naverpay.jpg" alt="">
										</figure>
									</div>
								</div>
								<div class="information">
									<div class="info-head">
										<h3 class="subject">
											착용해보시개 &lt;라베이비해피 기저귀&gt; <br>
											체험단 이벤트
										</h3>
										<p>눅눅함을 잡는 강한 흡수력! 유럽 프리미엄 기저귀 벨라베이비해피</p>
									</div>
									<div class="info-body">
										<div class="info-first">
											<dl>
												<dt>가격</dt>
												<dd>200,000 원</dd>
												<dt>타임세일 시간</dt>
												<dd>
													<i class="time-date">
														18.04.02 13:00 ~ 18.04.07 15:00
													</i>
												</dd>
												<dt>타임세일 가격</dt>
												<dd>
													<i class="time-price">
														150,000 원
													</i>
												</dd>
												<dt>배송비</dt>
												<dd>2,500 원 (착불)</dd>
												<dt>판매사</dt>
												<dd>포그네</dd>
											</dl>
										</div>
										<div class="info-second">
											<dl>
												<dt>전체수량</dt>
												<dd><i>9 개</i></dd>
												<dt><label for="quantity">구입수량</label></dt>
												<dd>
													<div class="form-group">
														<input type="text" id="quantity" class="form-control" placeholder="0">
													</div>
												</dd>
												<dt><label for="mileage">마일리지</label></dt>
												<dd>
													<div class="form-group">
														<input type="text" id="mileage" class="form-control">
													</div>
												</dd>
												<dt>옵션</dt>
												<dd>
													<div class="form-group">
														<select class="form-control">
															<option>선택</option>
														</select>
													</div>
												</dd>
												<dt>배송비</dt>
												<dd><i>2,500 원 착불</i></dd>
											</dl>
										</div>
									</div>
									<div class="btn-area">
										<p>
											<a href="#" class="btn btn-sm btn-pink">장바구니</a>
											<button type="submit" class="btn btn-sm btn-white">쇼핑하기</button>
											<a href="#" class="btn btn-sm btn-white btn-like">123</a>
										</p>
									</div>
								</div>
								
							</form>
                        </div>
                        <div class="article-content">
                            <div class="tab-list">
                                <ul>
                                    <li class="active"><a href="http://html.ange.co.kr/ange_mall/product_info.php">상품안내</a></li>
                                    <li><a href="http://html.ange.co.kr/ange_mall/report_list.php">상품후기<p class="review-num">1,234</p></a></li>
                                    <li><a href="#">관련상품</a></li>
                                    <li><a href="#">주의사항</a></li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <figure>
                                    <img src="/assets/images/event/img_none_event_info.gif" alt="">
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