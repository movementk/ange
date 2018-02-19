<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/ange_naming.css" rel="stylesheet">
</head>
<body class="sub ange-naming"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- Main Content -->
    <main id="content">
        <div class="container">
            <div class="sub-wrapper">
                <!-- 서브 lnb -->
                <?php require_once($_SERVER["DOCUMENT_ROOT"]."/ange_naming/_lnb.php"); ?>
                
                <!-- Content Start -->
                <div class="sub-content">
                    <section class="access-guide"><!-- 페이지명 클래스 -->
                        <div class="section-header">
                            <h2 class="sub-title">셀프 작명 이용안내</h2>
                        </div>
                        <div class="section-content">
                            <p>셀프작명을 하시는 순서를 정리한 내용이니 참고하시길 바랍니다</p>
                            <ol class="guide-list">
                                <li>
                                    <h3>
                                        <span>01</span>
                                        로그인을 합니다. (회원만 이용가능합니다.)
                                    </h3>
                                </li>
                                <li>
                                    <h3>
                                        <span>02</span>
                                        셀프작명 신청서를 작성 및 결제후 [셀프 작명] > [진행하기] 메뉴를 클릭합니다.
                                    </h3>
                                </li>
                                <li>
                                    <h3>
                                        <span>03</span>
                                        신청내역에서 승인번호를 클릭합니다.
                                    </h3>
                                </li>
                                <li>
                                    <h3>
                                        <span>04</span>
                                        "사주오행 이름짓기"과 "돌림자로 이름짓기"중 하나를 선택합니다.<br>
                                        집안에서 돌림자를 사용한다면 돌림자로 이름을 짓고, 쓰지 않는다면 사주오행 이름짓기로 지면 됩니다.
                                    </h3>
                                    <div class="explain">
                                        <figure>
                                            <img src="/assets/images/ange_naming/selfguide_list01.jpg" alt="">
                                        </figure>
                                    </div>
                                </li>
                                <li>
                                    <h3>
                                        <span>05</span>
                                        사주오행으로 이름짓기를 선택한 경우 사주를 분석한 결과를 보여 드립니다.<br>
                                        여기에서 "水木水" "水金水"는 본인의 사주오행 중에서 부족한 오행을 보강한 것입니다.
                                    </h3>
                                    <p>
                                        부족한 오행에 따라 출력되는 리스트는 자음이 제한적이 됩니다.<br>
                                        아래 가운데 오행이 木인 경우 아래 음오행에 따라 자음이 ㄱ,ㅋ에 해당되는 리스트가 출력됩니다.
                                    </p>
                                    <ul>
                                        <li>
                                            <h4>[음오행 참조]</h4>
                                        </li>
                                        <li>
                                            <dl>
                                                <dt>목(木)오행</dt>
                                                <dd>ㄱ,ㅋ</dd>
                                            </dl>
                                        </li>
                                        <li>
                                            <dl>
                                                <dt>화(火)오행</dt>
                                                <dd>ㄴ,ㄷ,ㄹ,ㅌ</dd>
                                            </dl>
                                        </li>
                                        <li>
                                            <dl>
                                                <dt>토(土)오행</dt>
                                                <dd>ㅇ,ㅎ</dd>
                                            </dl>
                                        </li>
                                        <li>
                                            <dl>
                                                <dt>금(金)오행</dt>
                                                <dd>ㅅ,ㅈ,ㅊ</dd>
                                            </dl>
                                        </li>
                                        <li>
                                            <dl>
                                                <dt>수(水)오행</dt>
                                                <dd>ㅁ,ㅂ,ㅍ</dd>
                                            </dl>
                                        </li>
                                    </ul>
                                    <div class="explain">
                                        <figure>
                                            <img src="/assets/images/ange_naming/selfguide_list02.jpg" alt="">
                                        </figure>
                                    </div>
                                </li>
                                <li>
                                    <h3>
                                        <span>06</span>
                                        사주를 분석하여 가장 이상적인 음오행에 해당되는 획순이 나옵니다. <br>
                                        중간자의 한자획순이 여러가지가 나오는데 그 중 원하는 한자획순을 선택하고 "한자보기"를 클릭하세요.
                                    </h3>
                                    <div class="explain">
                                        <img src="/assets/images/ange_naming/selfguide_list03.jpg" alt="">
                                    </div>
                                </li>
                                <li>
                                    <h3>
                                        <span>07</span>
                                        선택한 획수의 한자들이 출력됩니다. 음과 뜻을 살펴서 원하는 한자를 선택하면 밑의 박스에 글자가 새겨집니다. <br>
                                        원하는 이름이 결정되면 "이름저장"을 하세요. 그 후 원하는 글자를 선택하여 이름을 지으면 됩니다. <br>
                                        단, 붉은 바탕에 나타나는 한자는 불용문자입니다. 불용문자는 되도록 쓰지마십시요.
                                    </h3>
                                    <div class="explain">
                                        <figure>
                                            <img src="/assets/images/ange_naming/selfguide_list04.jpg" alt="">
                                        </figure>
                                    </div>
                                </li>
                                <li>
                                    <h3>
                                        <span>08</span>
                                        선택한 이름이 저장되어 있습니다. <br>
                                        이름의 상세풀이은 "이름풀이"버튼을 클릭하면 상세한 이름풀이가 보입니다
                                    </h3>
                                    <div class="explain">
                                        <figure>
                                            <img src="/assets/images/ange_naming/selfguide_list05.jpg" alt="">
                                        </figure>
                                    </div>
                                </li>
                                <li>
                                    <h3>
                                        <span>09</span>
                                        이름의 정보를 확인하고 "이름풀이"버튼을 클릭하면 상세한 이름풀이가 보입니다.
                                    </h3>
                                    <div class="explain">
                                        <figure>
                                            <img src="/assets/images/ange_naming/selfguide_list06.jpg" alt="">
                                        </figure>
                                    </div>
                                </li>
                                <li>
                                    <h3>
                                        <span>10</span>
                                        이름풀이의 점수표를 확인합니다.
                                    </h3>
                                </li>
                                <li>
                                    <h3>
                                        <span>11</span>
                                        이름풀이를 프린터로 출력하실 수 있습니다. <br>
                                        또, 이름을 확정하셨다면 증서를 출력하여 보관하실 수 있습니다.
                                    </h3>
                                    <div class="explain">
                                        <figure>
                                            <img src="/assets/images/ange_naming/selfguide_list07.jpg" 
                                            alt="">
                                        </figure>
                                    </div>
                                </li>
                            </ol>
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