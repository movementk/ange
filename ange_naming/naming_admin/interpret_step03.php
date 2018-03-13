<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/ange_naming.css" rel="stylesheet">
</head>
<body class="sub ange-naming"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- Main Content -->
    <main id="content"><!-- 페이지명 클래스 -->
        <div class="container">
            <div class="sub-wrapper">
                <!-- 서브 lnb -->
                <?php require_once($_SERVER["DOCUMENT_ROOT"]."/ange_naming/_lnb.php"); ?>
                
                <!-- Content Start -->
                <div class="sub-content">
                    <section class="interpret-step03">
                        <div class="section-header">
                            <h2 class="sub-title">이름풀이</h2>
                            <div class="attention-box type-2">
                                <h5>작명 진행 안내</h5>
                                <ol>
                                    <li>1. 로그인 → 신청서 작성 → 결제 → [진행하기] 메뉴 선택</li>
                                    <li>
                                        2. 서비스는 30일 동안 이용 가능하며 서비스를 이용하신 후에는 <i>환불이 불가</i>합니다.
                                    </li>
                                    <li>
                                        <p>
                                            추천 이름은 입력하신 데이터에 따라 다르며 (3~20개 사이) 추천 이름 데이터가 전혀 없는 경우는 관리자에게 연락주십시오.<br>
                                            (네이밍 고객센터 : 02-333-4560 내선 1번)
                                        </p>
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <div class="section-content">
                            <article class="confirm-input">
                                <div class="article-header">
                                    <h3 class="naming-title">회원님의 이름풀이  입력확인</h3>
                                    <small>이름풀이에 따른 한자를 확인하시기 바랍니다.</small>
                                </div>
                                <div class="article-content">
                                    <div class="table-wrap">
                                        <table class="table table-bordered type-1">
                                            <tbody>
                                                <tr>
                                                    <th>이름 (한글)</th>
                                                    <td>김경규</td>
                                                    <th>이름 (한자)</th>
                                                    <td>金炅奎</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </article>
                            <article class="assess">
                                <div class="article-header">
                                    <h3 class="naming-title">음오행</h3>
                                    <small>회원님의 음오행에 따른 이름평가를 보여드립니다.</small>
                                </div>
                                <div class="article-content">
                                    <div class="attention-box">
                                        정, 기, 신 모두가 쇠로 되어 있는 형상이다<br>
                                        우주의 기운은 크게 분류하여 다섯 가지로 구성되어 있는데 그 중에서 금기인 쇠 만으로 정, 기, 신이 가득 차 있다<br><br>

                                        한쪽 방면으로 완벽한 구성은 이루었으나 다른 이면을 갖추기에는 어딘가 모르게 부족한 부분이 있다<br><br>

                                        이 이름은 말 그대로 쇠나 칼과 같은 모양이다<br><br>

                                        따라서 이 이름을 가진 사람은 성질은 과감하기 그지없고 의리가 있고 불의를 보면 참지 못하고 쉽사리 움직이지도 않지만 움직였다 <br>
                                        하면 결단을 보고야 마는 성격이다
                                    </div>
                                </div>
                            </article>
                            <article class="fortune">
                                <div class="article-header">
                                    <h3 class="naming-title">초년운</h3>
                                    <small>회원님의 초년의 운세를 보여드립니다.</small>
                                </div>
                                <div class="article-content">
                                    <div class="attention-box">
                                        운세 내용 영역
                                    </div>
                                    <div class="btn-area">
                                        <p>
                                            <a href="#" class="btn btn-sm btn-pink" role="button">증서 출력</a>
                                            <a href="#" class="btn btn-sm btn-white" role="button" onclick="onPopupWindow()">이름풀이 출력</a>
                                            <a href="#" class="btn btn-sm btn-white" role="button">바구니 보기</a>
                                        </p>
                                    </div>
                                </div>
                            </article>
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
    <script>
        function onPopupWindow(){  
            window.open('interpret_popup.php', '_blank', 'top=50, left=50, width=690, height=700, scrollbars=yes');
        }
    </script>
</body>
</html>