<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/samplepack.css" rel="stylesheet">
</head>
<body class="sub samplepack"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- Main Content -->
    <main id="content" class="sample-apply"><!-- 페이지명 클래스 -->
        <div class="container">
            <div class="sub-wrapper">
                <!-- 서브 lnb -->
                <?php require_once($_SERVER["DOCUMENT_ROOT"]."/samplepack/_lnb.php"); ?>
                <!-- Content Start -->
                <div class="sub-content">
                    <section class="sample-write">
                        <h2 class="sub-title">샘플팩 신청자하기</h2>
                        <div class="section-content">
                            <form action="#">
                                <article class="user-info">
                                    <div class="table-wrap">
                                        <table class="table table-bordered">
                                            <caption>
                                                <h3>샘플팩 신청자 정보</h3>
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
                                                            <input type="text" id="u-name" class="form-control" placeholder="무브먼트케이">
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
                                                    <th class="necessary"><label for="file">증빙자료</label></th>
                                                    <td class="file-search">
                                                        <div class="form-group">
                                                            <input type="file" id="u-file" class="form-control">
                                                            <label for="u-file" class="file-btn">찾아보기</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="necessary"><label for="feel">태동느낌 </label></th>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="text" id="feel" class="form-control">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
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