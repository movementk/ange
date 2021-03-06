<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/sub_popup.css" rel="stylesheet">
<link href="/assets/css/community.css" rel="stylesheet">
</head>
<body class="sub community"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- Main Content -->
    <main id="content" class="poll-write"><!-- 페이지명 클래스 -->
        <div class="container">
            <div class="sub-wrapper">
                <!-- 서브 lnb -->
                <?php require_once($_SERVER["DOCUMENT_ROOT"]."/community/_lnb.php"); ?>
                <!-- Content Start -->
                <div class="sub-content">
                    <section class="poll-details">
                        <div class="section-header">
                            <h2 class="sub-title">앙쥬POLL</h2>
                            <figure>
                                <img src="/assets/images/community/img_none_vote_write.jpg" alt="">
                            </figure>
                        </div>
                        <div class="section-content">
                            <article class="view">
                                <form action="#">
                                    <div class="view-header">
                                        <h3>앙쥬POLL 질문 제목이 노출되는 리스트 영역입니다.</h3>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <ul>
                                                    <li class="date">
                                                        <dl>
                                                            <dt>설문기간</dt>
                                                            <dd>2017-10-10 ~ 2017-10-10</dd>
                                                        </dl>
                                                    </li>
                                                    <li class="participant">
                                                        <dl>
                                                            <dt>참여인원</dt>
                                                            <dd>99,999<span>명</span></dd>
                                                        </dl>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="btn-result">
                                                    <a href="#popup-content" class="btn btn-xs btn-pink btn-popup" role="button">결과보기</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="view-content">
                                        <h4>주부 9단이 추천하는 육아잇템은 무엇인가요?</h4>
                                        <p>육아용품을 선택할 때 무엇을 고려하고 어떤 점을 눈 여겨 보는지 육아 고수 앙쥬맘들의 의견을 여쭤봅니다.</p>
                                        <div class="poll-content">
                                            <ul>
                                                <li>
                                                    <p class="question">신생아 희귀질환 유전자 검사에 대해 알고 계셨나요?</p>
                                                    <div class="form-group">
                                                        <label><input type="radio"> 네</label>
                                                        <label><input type="radio"> 아니오</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <p class="question">신생아 희귀질환 유전자 검사가 있다면, 검사해 보고 싶으신가요?</p>
                                                    <div class="form-group">
                                                        <label><input type="radio"> 네</label>
                                                        <label><input type="radio"> 아니오</label>
                                                        <div>
                                                            <label><input type="radio"> 기타</label>
                                                            <input type="text" id="ect-form" class="form-control">
                                                            <label for="ect-form" class="sr-only">직접입력</label>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="btn-area">
                                        <p>
                                            <button type="submit" class="btn btn-sm btn-pink">투표하기</button>
                                            <a href="/community/poll_list.php" class="btn btn-sm btn-white" role="button">목록보기</a>
                                        </p>
                                    </div>
                                </form>
                            </article>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
    
    <!-- 투표결과 팝업 -->
    <div class="popup-layer poll-result">
        <div class="popup-bg"></div>
        <div id="popup-content" class="pop-layer">
            <div class="pop-container">
                <div class="pop-head">
                    <h4>주부 9단이 추천하는 육아잇템은 무엇인가요?</h4>
                    <div class="btn-close">
                        <button type="button" class="btn close">
                            <img src="/assets/images/btn_close_white.png" alt="닫기">
                        </button>
                    </div>
                </div>
                <div class="pop-body">
                    <div class="content">
                        <ul>
                            <li>
                                <h5 class="question-title">신생아 희귀질환 유전자 검사에 대해 알고 계셨나요?</h5>
                                <div class="details">
                                    <ul class="selection-percent">
                                        <li>
                                            <p class="selection">네.알고 있습니다.</p>
                                            <p class="percent">62.9%</p>
                                        </li>
                                        <li>
                                            <p class="selection">아니오. 처음 들었습니다.</p>
                                            <p class="percent">37.1%</p>
                                        </li>
                                    </ul>
                                    <figure>
                                        <img src="/assets/images/community/img_none_graph.jpg" alt="">
                                    </figure>
                                </div>
                            </li>
                            <li>
                                <h5 class="question-title">신생아 희귀질환 유전자 검사에 대해 알고 계셨나요?</h5>
                                <div class="details">
                                    <ul class="selection-percent">
                                        <li>
                                            <p class="selection">네.알고 있습니다.</p>
                                            <p class="percent">62.9%</p>
                                        </li>
                                        <li>
                                            <p class="selection">아니오. 처음 들었습니다.</p>
                                            <p class="percent">37.1%</p>
                                        </li>
                                    </ul>
                                    <figure>
                                        <img src="/assets/images/community/img_none_graph.jpg" alt="">
                                    </figure>
                                </div>
                            </li>
                            <li>
                                <h5 class="question-title">신생아 희귀질환 유전자 검사에 대해 알고 계셨나요?</h5>
                                <div class="details">
                                    <ul class="selection-percent">
                                        <li>
                                            <p class="selection">네.알고 있습니다.</p>
                                            <p class="percent">62.9%</p>
                                        </li>
                                        <li>
                                            <p class="selection">아니오. 처음 들었습니다.</p>
                                            <p class="percent">37.1%</p>
                                        </li>
                                    </ul>
                                    <figure>
                                        <img src="/assets/images/community/img_none_graph.jpg" alt="">
                                    </figure>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/sub_aside.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
    <script src="/assets/js/common_sub.js"></script>
    <script src="/assets/js/sub_popup.js"></script>
</body>
</html>