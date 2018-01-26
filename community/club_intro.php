<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/ange_club.css" rel="stylesheet">
</head>
<body class="sub ange-club"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- Main Content -->
    <main id="content" class="club">
        <div class="container">
            <div class="sub-wrapper">
                <!-- 서브 lnb -->
                <?php require_once($_SERVER["DOCUMENT_ROOT"]."/community/_lnb.php"); ?>
                <!-- Content Start -->
                <div class="sub-content">
                    <section class="club-intro">
                        <div class="section-header">
                            <h2 class="sub-title">클럽/선생님 소개</h2>
                            <div class="club-tab-link">
                                <ul>
                                    <li class="active"><a href="/community/club_intro.php">클럽소개</a></li>
                                    <li><a href="/community/education_intro.php">교육팀장 소개</a></li>
                                    <li><a href="/community/first_visit.php">첫 방문이신가요?</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="section-content">
                            <p class="club-logo">
                                <img src="/assets/images/community/img_club_logo.png" alt="">
                            </p>
                            <h3>
                                사랑하는 만큼 아낌없이<br> 
                                좋은 것만 해주고 싶은 엄마의 마음, 앙쥬클럽은<br> 
                                <i>아기를 사랑하는 엄마들을 위한 육아 클럽</i>입니다.
                            </h3>
                            <p class="explain">
                                임신 기간 동안 엄마의 몸은 전신에 걸쳐 많은 변화가 일어납니다.<br>
                                아기를 낳은 후 엄마의 몸이 예전의 상태로 돌아가기까지는 최소 6주의 시간이 걸리며, <br>
                                그 중 에서도 특히 최초 2주의 산후 조리기간은 매우 중요한 시기입니다.<br>
                                바로 이 중요한 시기에 <i>앙쥬클럽에서 산모와 신생아 돌보기에 관한 교육을<br> 
                                제공</i>해드립니다.<br><br>

                                묘목을 잘 키우기 위해서는 뿌리 멀리서부터 조금씩 거름을 주면서 <br>
                                나무가 잘 적응할 수 있도록 기다려야 하듯, 앙쥬클럽은 인내를 바탕으로 한 <br>
                                지혜와 신뢰로 엄마들의 든든한 지지자와 후원자가 되겠습니다.
                            </p>
                            
                            <article>
                                <div class="summary-box">
                                    <h4>
                                    주 고객층에게<br> 
                                    <b>육아서비스 제공을 위한 육아클럽</b></h4>
                                    <figure>
                                        <img src="/assets/images/community/img_ange_club.png" alt="">
                                    </figure>
                                    <h4>
                                        간호사 출신의<br>
                                        <b>전문가 구성·다양한 정보 제공</b>
                                    </h4>
                                </div>
                                <div class="details">
                                    <ul class="club-company">
                                        <li>
                                            <div>
                                                <img src="/assets/images/community/img_club01_sm.jpg" alt="">
                                            </div>
                                            <p>한국MSD</p>
                                        </li>
                                        <li>
                                            <div>
                                                <img src="/assets/images/community/img_club02_sm.jpg" alt="">
                                            </div>
                                            <p>사노피 파스퇴르</p>
                                        </li>
                                        <li>
                                            <div>
                                                <img src="/assets/images/community/img_club03_sm.jpg" alt="">
                                            </div>
                                            <p>유한킴벌리</p>
                                        </li>
                                        <li>
                                            <div>
                                                <img src="/assets/images/community/img_club04_sm.jpg" alt="">
                                            </div>
                                            <p>에듀챌린지</p>
                                        </li>
                                    </ul>
                                    <ol class="decimal-list">
                                        <li>
                                            <span>1</span>
                                            산후조리원을 통해 <i>유방마사지, 유방관리법, 모유수유 방법</i><br> 등의 강의로 모유수유 캠페인을 전개
                                        </li>
                                        <li>
                                            <span>2</span>
                                            <i>피임법 강의, 육아용품 샘플팩 증정, 육아 잡지 &lt;앙쥬&gt; 증정</i><br> 
                                            등으로아기를 키우는 엄마들에게 실질적인 도움이 되는<br> 정보를 제공
                                        </li>
                                    </ol>
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
</body>
</html>