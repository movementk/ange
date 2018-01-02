<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/event.css" rel="stylesheet">
</head>
<body class="sub event"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- Main Content -->
    <main id="content" class="reader-list"><!-- 페이지명 클래스 -->
        <div class="container">
            <div class="sub-wrapper">
                <!-- 서브 lnb -->
                <?php require_once($_SERVER["DOCUMENT_ROOT"]."/event/_lnb.php"); ?>
                <!-- Content Start -->
                <div class="sub-content">
                    <h2 class="sub-title">애독자 엽서</h2>
                    <section class="postcard">
                        <div class="section-header">
                            <div class="column column-4">
                                <figure>
                                    <img src="/assets/images/e_magazine/img_publication.jpg" alt="월간 잡지 표지">
                                </figure>
                            </div>
                            <div class="column column-6">
                                <div class="summary-content">
                                    <div class="summary-head">
                                        <small>월간 앙쥬 애독자 엽서</small>
                                        <h3>2017년 12월호<br>소중한 의견을 보내주세요.</h3>
                                    </div>
                                    <div class="summary-body">
                                        <h4>애독자 엽서 보내기</h4>
                                        <p>
                                            엄마들의 행복한 놀이터 매거진 앙쥬는 열려있습니다.<br>
                                            소중한 의견을 보내주신 분께 당첨을 통해 선물을 드립니다.
                                        </p>
                                    </div>
                                    <div class="summary-foot">
                                        <dl>
                                            <dt>신청기간</dt>
                                            <dd>2017.12.01 ~ 2017.12.31</dd>
                                            <dt>당첨발표</dt>
                                            <dd>앙쥬 12월호</dd>
                                            <dt>증정인원</dt>
                                            <dd>선물 별 당첨자</dd>
                                            <dt>선물발송</dt>
                                            <dd>12월 말</dd>
                                            <dt>신청방법</dt>
                                            <dd>애독자 엽서 보내기 버튼 누른 후 내용 작성(회원만 가능)</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-content">
                            <div class="attention-box">
                                <h5>주의사항</h5>
                                <ul>
                                    <li>지정일에 반드시 당첨확인 전화 필요 (02-333-4650 내선 0번)</li>
                                    <li>한번 작성하여 보내주신 엽서는 수정할 수 없습니다.</li>
                                    <li>보내기에 문제가 생기신 분은 <a href="mailto:angeweb@ange.co.kr">angeweb@ange.co.kr</a> 메일로 해당내용을 보내주시기 바랍니다.</li>
                                </ul>
                            </div>
                            <div class="btn-area">
                                <p>
                                    <a href="#" class="btn btn-pink" role="button">앙쥬 회원가입</a>
                                    <a href="#" class="btn btn-white" role="button">애독자 엽서 보내기</a>
                                </p>
                            </div>
                        </div>
                    </section>
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