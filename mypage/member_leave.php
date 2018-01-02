<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/mypage.css" rel="stylesheet">
</head>
<body class="sub mypage"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- Main Content -->
    <main id="content" class="member-leave"><!-- 페이지명 클래스 -->
        <div class="container">
            <div class="sub-wrapper">
                <!-- 서브 lnb -->
                <?php require_once($_SERVER["DOCUMENT_ROOT"]."/mypage/_lnb.php"); ?>
                <!-- Content Start -->
                 <div class="sub-content">
                    <h2 class="sub-title">회원탈퇴</h2>
                    <div class="info">
                        <p>
                            사용하고 계신 아이디(ID)는 탈퇴할 경우 재사용 및 복구가 불가능합니다.<br>
                            탈퇴한 아이디는 본인과 타인 모두 재사용 및 복구가 불가 하오니 신중하게 선택하시기 바랍니다.<br>
                            ※실수로 인한 탈퇴라도 재가입 불가<br>
                            삭제 데이터는 복구가 불가능하니 탈퇴 시 신중히 고려하여 주시기 바랍니다.<br>
                            탈퇴 시 적립된 마일리지 및 응모된 이벤트 내용 등 아이디에 연결된 모든 데이터는 자동 일괄 삭제됩니다. <br>
                            샘플팩 재 신청을 위하여 탈퇴 시 샘플팩 신청기록이 남기 때문에 다시 신청해도 샘플팩을 받으실 수 없습니다.<br>
                        </p>
                    </div>
                    <label class="check-box"><input type="checkbox">안내 사항을 확인하였으며, 이에 동의합니다</label>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-pink" role="button">회원탈퇴</a>
                        </p>
                    </div>
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