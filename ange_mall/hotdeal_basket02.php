<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/ange_mall.css" rel="stylesheet">
</head>
<body class="sub ange_mall"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- Main Content -->
    <main id="content" class="order-write hotdeal-basket02"><!-- 페이지명 클래스 -->
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
                                            <td>
                                            	10,000 원
                                            	<span>(+7,000 원)</span>
                                            </td>
                                            <td>1</td>
                                            <td class="payment">17,000 원</td>
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
                            <form action="#">
                                <table class="table table-bordered type-1">
                                    <caption>
                                        <h4>결제정보</h4>
                                    </caption>
                                    <tbody>
                                        <tr>
                                            <th>상품금액</th>
                                            <td>10,000 원</td>
                                        </tr>
                                        <tr>
                                            <th>옵션명</th>
											<td>
                                      			옵션1 
                                       			<span>(+1,000 원)</span>
                                       		</td>
                                        </tr>
                                        <tr>
                                            <th>총 결제금액</th>
                                            <td>11,000 원</td>
                                        </tr>
                                        <tr>
                                            <th><label for="u-mileage">사용가능 마일리지</label></th>
                                            <td class="usable">
                                            	<div class="form-group">
                                            		<input type="text" id="u-mileage" class="form-control" placeholder="사용할 마일리지">
                                            	</div>
                                            	<p class="max-mileage">
                                            		사용 가능한 최대 마일리지는 
                                            		<i>5,000 M</i> 입니다.
                                            	</p>
                                            	<p class="total-mileage">
                                            		현재 회원님이 보유하고 계신 마일리지는 <i>5,632 M</i> 입니다.
                                            	</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>결제수단 선택</th>
                                            <td>
												<div class="form-group">
													<label><input type="radio">신용카드결제</label>
													<label><input type="radio">무통장입금(가상계좌)</label>
												</div>
                                       		</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-borderd type-1">
                                    <caption>
                                        <h4>배송정보</h4>
                                        <div class="form-group">
                                            <label><input type="radio">주문자와 동일</label>
                                            <label><input type="radio">새로운 주소</label>
                                        </div>
                                    </caption>
                                    <tbody>
                                        <tr>
                                            <th>제목</th>
                                            <td>착용해보시개 &lt;벨라베이비해피 기저귀&gt; 체험단 이벤트</td>
                                        </tr>
                                        <tr>
                                            <th>블로그 주소</th>
                                            <td>
                                                <div class="blog-addr">
                                                    <div class="form-group">
                                                        <input type="text" id="blog-domain-1" class="form-control" placeholder="상품 설명을 스크랩한 블로그 주소를 입력해 주세요. 미션에 따라 블로그 개수만큼 추가해주세요">
                                                        <label for="blog-domain-1" class="sr-only">블로그 주소</label>
                                                    </div>
                                                    <div class="btn-add">
                                                        <a href="#" class="btn btn-plus">
                                                            <i class="icon-plus">
                                                                <span class="sr-only">블로그 추가 하기</span>
                                                            </i>
                                                        </a>
                                                        <a href="#" class="btn btn-minus">
                                                            <i class="icon-minus">
                                                                <span class="sr-only">블로그 빼기</span>
                                                            </i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>추가정보</th>
                                            <td class="addition-list">
                                                <dl>
                                                    <dt><label for="addition-class1">추가정보 제목 1</label></dt>
                                                    <dd>
                                                        <div class="form-group">
                                                            <input type="text" id="addition-class1" class="form-control" placeholder="질문에 대한 대답">
                                                        </div>
                                                    </dd>
                                                    <dt><label for="addition-class2">추가정보 제목 1</label></dt>
                                                    <dd>
                                                        <div class="form-group">
                                                            <input type="text" id="addition-class2" class="form-control" placeholder="질문에 대한 대답">
                                                        </div>
                                                    </dd>
                                                </dl>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="reason">신청이유</label></th>
                                            <td>
                                                <div class="form-group">
                                                    <textarea id="reason" class="form-control" placeholder="신청이유를 작성해주세요"></textarea>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="one-word">신청 한마디</label></th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" id="one-word" class="form-control" placeholder="신청 한마디 작성">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>개인정보 제공 동의</th>
                                            <td>
                                                <dl>
                                                    <dt>체험단 신청 후 개인정보 제3자 제공동의 내용</dt>
                                                    <dd>
                                                        <div class="form-group">
                                                            <label><input type="radio">동의함</label>
                                                            <label><input type="radio">동의안함</label>
                                                        </div>
                                                    </dd>
                                                </dl>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>유의사항</th>
                                            <td>
                                                <dl>
                                                    <dt>체험단 신청 후 개인정보 제3자 제공동의 내용</dt>
                                                    <dd>
                                                        <div class="form-group">
                                                            <label><input type="radio">동의함</label>
                                                            <label><input type="radio">동의안함</label>
                                                        </div>
                                                    </dd>
                                                </dl>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="btn-area">
                                    <p>
                                        <button type="submit" class="btn btn-pink">결제하기</button>
                                        <a href="#" class="btn btn-white" role="button">취소하기</a>
                                    </p>
                                </div>
                            </form>
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