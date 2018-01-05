<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/event.css" rel="stylesheet">
</head>
<body class="sub event"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- Main Content -->
    <main id="content" class="reader"><!-- 페이지명 클래스 -->
        <div class="container">
            <div class="sub-wrapper">
                <!-- 서브 lnb -->
                <?php require_once($_SERVER["DOCUMENT_ROOT"]."/event/_lnb.php"); ?>
                <!-- Content Start -->
                <div class="sub-content">
                    <section class="reader-write">
                        <h2 class="sub-title">체험/이벤트 후기</h2>
                        <div class="section-content">
                            <form action="#">
                                <article class="post-form">
                                    <div class="table-wrap">
                                        <table class="table table-bordered">
                                            <caption>
                                                <h3>애독자 엽서 양식</h3>
                                                <div class="modify-btn">
                                                    <p class="attention">회원정보가 다른가요?</p>
                                                    <p>
                                                        <a href="#" class="btn btn-white" role="button">회원정보 수정</a>
                                                    </p>
                                                </div>
                                            </caption>
                                            <tbody>
                                                <tr>
                                                    <th class="necessary"><label for="u-name">신청자명</label></th>
                                                    <td>
                                                        <div class="form-group basic-group">
                                                            <input type="text" id="u-name" class="form-control" placeholder="홍길동">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="necessary"><label for="u-tel">전화번호</label></th>
                                                    <td>
                                                        <div class="form-group basic-group">
                                                            <input type="text" id="u-tel" class="form-control" placeholder="02-123-5678">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="necessary"><label for="u-phone">핸드폰 번호</label></th>
                                                    <td>
                                                        <div class="form-group basic-group">
                                                            <input type="text" id="u-phone" class="form-control" placeholder="010-1234-5678">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="necessary"><label for="u-addr">받으실 곳</label></th>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="text" id="u-addr" class="form-control" placeholder="(12345) 서울시 서초구 양재동 120-1번지 2층 양재빌딩">
                                                        </div>
                                                    </td>
                                                </tr>
                                                
                                                <tr>
                                                    <td colspan="2" class="space">
                                                        <dl>
                                                            <dt class="necessary"><label for="u-review">이달의 앙쥬를 본 소감</label></dt>
                                                            <dd>
                                                                <div class="form-group">
                                                                    <textarea id="u-review" class="form-control"></textarea>
                                                                </div>
                                                            </dd>
                                                        </dl>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" class="space">
                                                        <dl>
                                                            <dt class="necessary"><label for="u-wish">다음달에 실었으면 하는 기사</label></dt>
                                                            <dd>
                                                                <div class="form-group">
                                                                    <textarea id="u-wish" class="form-control"></textarea>
                                                                </div>
                                                            </dd>
                                                        </dl>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" class="space">
                                                        <dl>
                                                            <dt class="necessary">앙쥬를 만난 곳은 어디입니까?</dt>
                                                            <dd>
                                                                <div class="form-group">
                                                                    <label><input type="radio"> 병원</label>
                                                                    <label><input type="radio"> 산후조리원</label>
                                                                    <label><input type="radio"> 백화점/마트</label>
                                                                    <label><input type="radio"> 온라인</label>
                                                                    <label><input type="radio"> 기타</label>
                                                                </div>
                                                            </dd>
                                                        </dl>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" class="space">
                                                        <dl>
                                                            <dt class="necessary"><label for="baby-month">임신주차 또는 아기 개월 수를 입력해주세요</label></dt>
                                                            <dd>
                                                                <div class="form-group">
                                                                    <input type="text" id="baby-month" class="form-control">
                                                                </div>
                                                            </dd>
                                                        </dl>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" class="space">
                                                        <dl>
                                                            <dt class="necessary"><label for="hope-gift1">희망선물 1</label></dt>
                                                            <dd>
                                                                <div class="form-group">
                                                                    <input type="text" id="hope-gift1" class="form-control">
                                                                </div>
                                                            </dd>
                                                        </dl>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" class="space">
                                                        <dl>
                                                            <dt class="necessary"><label for="hope-gift2">희망선물 2</label></dt>
                                                            <dd>
                                                                <div class="form-group">
                                                                    <input type="text" id="hope-gift2" class="form-control">
                                                                </div>
                                                            </dd>
                                                        </dl>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" class="space">
                                                        <dl>
                                                            <dt class="necessary"><label for="hope-gift3">희망선물 3</label></dt>
                                                            <dd>
                                                                <div class="form-group">
                                                                    <input type="text" id="hope-gift3" class="form-control">
                                                                </div>
                                                            </dd>
                                                        </dl>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" class="space">
                                                        <dl>
                                                            <dt>
                                                                <label for="question">[ 앙쥬에게 물어보세요 ]</label>
                                                                <p>
                                                                    평소 궁금했던 건강/질병/심리/발달/돌보기/교육/임신/출산 등 임신출산육아 관련 질문을 적어주세요. <br>질문을 선정해 전문가가 답변하고 &lt;앙쥬&gt; 지면에도 게재됩니다.
                                                                </p>
                                                            </dt>
                                                            <dd>
                                                                <div class="form-group">
                                                                    <textarea id="question" class="form-control"></textarea>
                                                                </div>
                                                            </dd>
                                                        </dl>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </article>
                                <article class="gift-list">
                                    <div class="article-header">
                                        <h3>애독자 선물 구성</h3>
                                    </div>
                                    <div class="article-content">
                                        <ul>
                                            <li>
                                                <div class="colum colum-4">
                                                    <div class="gift-item">
                                                        <img src="/assets/images/event/img_gift01.jpg" alt="">
                                                        <p class="person">
                                                            <b>1</b>명
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="colum colum-6">
                                                    <div class="details">
                                                        <h4>[잉글레시나] 트릴로지 컬러스</h4>
                                                        <p>
                                                            (주)끄레델에서 &lt;앙쥬&gt; 독자들을 위해 잉글레시나 유모차 ‘트릴로지 컬러스’를 선물한다. 트릴로지 컬러스는 잉글레시나에서 새롭게 기획한 스페셜 에디션 제품으로, 시티 블랙 프레임을 적용해 복잡한 도심에서 안정적인 주행이 가능하게 설계됐다. 원액션 폴딩과 셀프 스탠딩 기능 등 트릴로지 컬러스만의 장점은 그대로 유지하면서 4가지 비비드 컬러를 추가해 기존의 클래식한 느낌과는 다른 화사하고 산뜻한 분위기를 연출할 수 있다. 
                                                        </p>
                                                        <ul class="contact">
                                                            <li class="tel">
                                                                <dl>
                                                                    <dt>연락처</dt>
                                                                    <dd>1600-0716</dd>
                                                                </dl>
                                                            </li>
                                                            <li class="homepage">
                                                                <dl>
                                                                    <dt>홈페이지</dt>
                                                                    <dd><a href="www.crederemall.co.kr" target="_blank">www.crederemall.co.kr</a></dd>
                                                                </dl>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="colum colum-4">
                                                    <div class="gift-item">
                                                        <img src="/assets/images/event/img_gift02.jpg" alt="">
                                                        <p class="person">
                                                            <b>20</b>명
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="colum colum-6">
                                                    <div class="details">
                                                        <h4>[블랑가또] 코끼리 애착인형</h4>
                                                        <p>
                                                            제이코퍼레이션에서 &lt;앙쥬&gt; 독자들을 위해 '코끼리 애착인형'을 선물한다. 부드러운 소재로 만든 코끼리 애착인형은 엄마 품처럼 포근해 아기가 편안하게 잠들도록 돕는다. 특히 인형의 다리부분이 아이의 몸을 감싸 정서적 안정감을 느끼게 한다. 인테리어 소품뿐 아니라 책을 읽거나 놀이할 때도 사용할 수 있어 활용도가 높다. 스몰,미디엄,라지 사이즈로 구성되며 스몰사이즈는 아이가 안고 다닐수 있을 정도로 작고 가벼워 외출 시 유모차용 장난감으로 사용할 수 있다. 생후 6개월 이전 아이들의 수면인형으로는 미디엄 사이즈가 적합하고 라지 사이즈는 어른이 몸을 기대는 용도로 쓰기에 좋다.
                                                        </p>
                                                        <ul class="contact">
                                                            <li class="tel">
                                                                <dl>
                                                                    <dt>연락처</dt>
                                                                    <dd>1600-0716</dd>
                                                                </dl>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="colum colum-4">
                                                    <div class="gift-item">
                                                        <img src="/assets/images/event/img_gift03.jpg" alt="">
                                                        <p class="person">
                                                            <b>4</b>명
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="colum colum-6">
                                                    <div class="details">
                                                        <h4>[포브] 미니프리저</h4>
                                                        <p>
                                                            (주)동인기연에서 &lt;앙쥬&gt; 독자들을 위해 냉장고형 기저귀 가방 ‘미니프리저’를 선물한다. 미니 프리저는 국내 최초로 기저귀 가방과 냉장고 기능을 일체화한 제품으로 각종 용품의 간편 수납은 물론 식품의 신선한 보관이 가능하다. 최대 24시간 지속 가능한 보온·보냉 특수 메커니즘을 적용해 별도의 보온·보냉 주머니를 준비하지 않아도 분유, 이유식, 과일, 냉음료 등 온도 유지가 필요한 음식들을 변질 없이 안전하게 보관할 수 있다. 미니프리저만의 퀵뷰 수납은 각종 용품을 쉽고 간편하게 수납할 수 있게 도와주며, 오픈형 지퍼로 편리하고 효율적인 내부 공간 활용이 가능하다. 아기 기저귀 교환 시 청결 유지를 위한 프리미엄 방수 패드와 액체 보관용 드라이 파우치가 내장되어 있다.
                                                        </p>
                                                        <ul class="contact">
                                                            <li class="tel">
                                                                <dl>
                                                                    <dt>연락처</dt>
                                                                    <dd>080-579-7000</dd>
                                                                </dl>
                                                            </li>
                                                            <li class="homepage">
                                                                <dl>
                                                                    <dt>홈페이지</dt>
                                                                    <dd><a href="www.myforb.com" target="_blank">www.myforb.com</a></dd>
                                                                </dl>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                                <div class="attention-box">
                                    <h5>주의사항</h5>
                                    <ul>
                                        <li>한번 등록한 내용은 변경하실 수 없습니다.</li>
                                        <li>엽서등록확인은 마이페이지 마이앙쥬 > 내 활동 조회에서 확인가능 합니다.</li>
                                        <li>애독자 선물의 종류와 수량은 사진과 다를 수 있으며, 구성은 업체 사정으로 공지없이 변경될 수 있습니다.</li>
                                        <li>당첨자 발표 후 별도 주소확인은 하지 않으며 주소가 불분명할 경우 선물은 발송되지 않습니다. (번지수가 없거나 아파트 동, 호수 없는 경우)</li>
                                        <li>회원 탈퇴 후 재가입하여 신청하더라도 신청기록은 남기 때문에 샘플팩 선정에서 제외됩니다.</li>
                                    </ul>
                                </div>
                                <div class="btn-area">
                                    <p>
                                        <button type="submit" class="btn btn-pink">신청하기</button>
                                        <a href="#" class="btn btn-white" role="button">취소하기</a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </section>
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