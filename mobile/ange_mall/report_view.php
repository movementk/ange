<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/dochead.php"); ?>
<link href="/mobile/assets/css/sub.css" rel="stylesheet">
<link href="/mobile/assets/css/ange_mall.css" rel="stylesheet">
</head>
<body class="sub ange_mall"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/header.php"); ?>
    <!-- pgae-header -->
    <div class="page-header">
        <!-- 폴더별 타이틀 -->
        <h2>마일리지몰</h2>
        <div class="btn-controls">
            <a href="#" class="prev">
                <i class="icon-left-open-big">
                    <span class="sr-only">이전 페이지</span>
                </i>
            </a>
            <a href="/mobile/ange_mall/big_deal.php" class="next">
                <i class="icon-right-open-big">
                    <span class="sr-only">다음 페이지</span>
                </i>
            </a>
        </div>
    </div>
    
    <!-- sub content start --> 
    <main id="content" class="report-view"><!-- 페이지명 클래스 -->
        <div class="container">
            <section class="product-report">
                <div class="section-header">
                    <figure>
                        <img src="/mobile/assets/images/ange_mall/img_product.jpg" alt="">
                    </figure>
                    <div class="sns-like">
                        <ul class="sns-share">
                            <li>
                                <a href="#">
                                    <img src="/mobile/assets/images/ange_mall/img_icon_blog.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/mobile/assets/images/ange_mall/img_icon_tweeter.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/mobile/assets/images/ange_mall/img_icon_facebook.png" alt="">
                                </a>
                            </li>
                        </ul>
                        <p class="btn-like">
                            <a href="#" class="btn btn-xs btn-white" role="button">
                                123<i class="icon-heart"></i>
                            </a>
                        </p>
                    </div>
                    <div class="information">
                        <div class="info-head">
                            <h3>
                                착용해보시개 &lt;벨라베이비해피 기저귀&gt; 체험단이벤트</h3>
                            <p>
                                눅눅함을 잡는 강한 흡수력! 유럽 프리미엄 기저귀 벨라베이비해피
                            </p>
                        </div>
                        <div class="info-body">
                            <div class="info-first">
                                <dl>
                                    <dt>가격</dt>
                                    <dd>00,000 P</dd>
                                    <dt>배송비</dt>
                                    <dd>0,000 원 (착불)</dd>
                                    <dt>판매사</dt>
                                    <dd>XX</dd>
                                </dl> 
                            </div>
                            <div class="info-second">
                                <dl>
                                    <dt>상품금액</dt>
                                    <dd class="payment">00,000 P</dd>
                                    <dt>배송비</dt>
                                    <dd class="delivery">0,000 원 (착불)</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-md btn-pink" role="button">장바구니</a>
                            <a href="#" class="btn btn-md btn-white" role="button">쇼핑하기</a>
                        </p>
                    </div>
                </div>
                
                <div class="section-content">
                     <div class="tab-accordion">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        상품안내
                                    </a>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <figure>
                                            <img src="/mobile/assets/images/ange_mall/img_product_content.png" alt="">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                        상품후기
                                    </a>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <article class="board-view">
                                            <div class="article-header">
                                                <h4>애독자엽서 &lt;비트루트 4종 세트&gt; 당첨자 구성품 변경 안내 (5월 엽서 이용)</h4>
                                                <ul class="icon-list">
                                                    <li class="like"><span>123</span></li>
                                                    <li class="comment"><span>123</span></li>
                                                    <li class="date"><span>2017-10-10</span></li>
                                                    <li class="sympathy"><a href="#">공감</a></li>
                                                </ul>
                                            </div>
                                            <div class="article-content">
                                                <div class="view-content">
                                                    <p>
                                                        안녕하세요 앙쥬입니다.<br>
                                                        &lt;앙쥬 신규 가입회원 샘플팩 9월_82차&gt;<br>
                                                        발표일이 금일 10일 발표 예정이었으나 <br>
                                                        선정이 조금 늦어져 11일에 발표 될 예정입니다.<br>
                                                        양해 부탁드립니다.<br>
                                                        감사합니다.
                                                    </p>
                                                </div>
                                                <dl class="attach">
                                                    <dt>첨부파일</dt>
                                                    <dd>
                                                        <a href="#">첨부파일.jpg</a>
                                                        <a href="#">첨부파일.jpg</a>
                                                    </dd>
                                                </dl>
                                                <div class="btn-area">
                                                    <p>
                                                        <a href="#" class="btn btn-xs btn-white" role="button">수정</a>
                                                        <a href="#" class="btn btn-xs btn-white" role="button">삭제</a>
                                                        <a href="#" class="btn btn-xs btn-pink" role="button">목록</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </article>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        관련상품
                                    </a>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        content 3
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFour">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        주의사항
                                    </a>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                    <div class="panel-body">
                                        content 4
                                    </div>
                                </div>
                            </div>
                        </div>
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