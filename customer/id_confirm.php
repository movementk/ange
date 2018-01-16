<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/customer.css" rel="stylesheet">
</head>
<body class="sub customer"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- Main Content -->
    <main id="content" class="id-confirm"><!-- 페이지명 클래스 -->
        <div class="container">
            <div class="sub-wrapper">
                <!-- 서브 lnb -->
                <?php require_once($_SERVER["DOCUMENT_ROOT"]."/customer/_lnb.php"); ?>
                <!-- Content Start -->
                <div class="sub-content">
                    <div class="sub-header">
                        <h2 class="sub-title">아이디 찾기</h2>
                        <p class="summary">아이디가 기억나지 않으세요?  본인확인 후 아이디를 확인하실 수 있습니다.</p>
                    </div>
                    <form action="#">
                        <div class="table-wrap">
                            <table class="table table-bordered type-1">
                                <tbody>
                                    <tr>
                                        <th class="essential"><label for="u-name">이름</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="u-name" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="essential"><label for="u-phone">휴대전화번호</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="u-phone" class="form-control" placeholder="휴대폰 번호 입력">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="confirm">
                            <div class="info">
                                <b>회원정보에 등록된 휴대전화 번호와 일치해야, 인증번호를 받을 수 있습니다.</b>
                                <p>[인증하기]을 클릭하시면 본인 휴대폰으로 실명인증이 가능합니다.<br>
                                일치하는 정보가 없을 시 인증메세지가 뜨지 않습니다.</p>
                               <div class="btn-area">
                                    <p>
                                        <a href="#" class="btn btn-confirm" role="button">휴대폰 인증하기</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="confirm">
                            <div class="info">
                                <b>회원정보에 등록된 휴대전화 번호와 일치해야, 인증번호를 받을 수 있습니다.</b>
                                <p>[인증하기]을 클릭하시면 본인 휴대폰으로 실명인증이 가능합니다.<br>
                                일치하는 정보가 없을 시 인증메세지가 뜨지 않습니다.</p>
                                <div class="form-group">
                                   <input type="text" id="cofirm-num" class="form-control" placeholder="인증번호를 입력해주세요"><label for="cofirm-num" class="sr-only">인증번호확인</label>
                                   <div class="btn-area">
                                        <p>
                                            <button type="submit" class="btn btn-gray">인증번호 확인</button>
                                        </p>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="confirm-check">
                        <dl>
                            <dt>사용자 아이디 </dt>
                            <dd>Test123</dd>
                        </dl>
                    </div>
                    <div class="btn-area">
                        <p>
                            <a href="/" class="btn btn-pink" role="button">
                                <i class="icon-home"></i>홈으로
                            </a>
                        </p>
                    </div>
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