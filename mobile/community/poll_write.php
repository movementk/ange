<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/dochead.php"); ?>
<link href="/mobile/assets/css/sub.css" rel="stylesheet">
<link href="/mobile/assets/css/community.css" rel="stylesheet">
<link href="/mobile/assets/css/sub_popup.css" rel="stylesheet">
</head>
<body class="sub community"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/header.php"); ?>
    <!-- pgae-header -->
    <div class="page-header">
        <!-- 폴더별 타이틀 -->
        <h2>앙쥬맘 생각</h2>
        <div class="btn-controls">
            <a href="#" class="prev">
                <i class="icon-left-open-big">
                    <span class="sr-only">이전 페이지</span>
                </i>
            </a>
            <a href="#" class="next">
                <i class="icon-right-open-big">
                    <span class="sr-only">다음 페이지</span>
                </i>
            </a>
        </div>
    </div>
    
    <!-- sub content start -->
    <main id="content">
        <section class="poll-write">
            <div class="container">
                <div class="section-header">
                    <h3 class="section-title">앙쥬 POLL</h3>
                    <figure>
                        <img src="/mobile/assets/images/community/none_img_poll_list.jpg" alt="">
                    </figure>
                </div>
                <div class="section-content">
                    <article class="board-view">
                        <div class="article-header">
                            <h4>앙쥬POLL 질문 제목이 노출되는 리스트 영역입니다. 앙쥬POLL 질문 제목이 노출되는 리스트 영역입니다.</h4>
                            <ul class="icon-list">
                                <li class="date"><span>2017-10-10 ~ 2017-10-10 </span></li>
                                <li class="user"><span>99,999</span></li>
                            </ul>
                            <p class="result">
                                <a href="#popup-content" class="btn btn-xs btn-pink btn-popup" role="button">결과보기</a>
                            </p>
                        </div>
                        <div class="article-content">
                            <form action="#">
                                <div class="content">
                                    <h5>주부 9단이 추천하는 육아잇템은 무엇인가요?</h5>
                                    <p class="ask">육아용품을 선택할 때 무엇을 고려하고 어떤 점을 눈 여겨 보는지 육아 고수 앙쥬맘들의 의견을 여쭤봅니다.</p>
                                    <div class="vote-box">
                                        <ul>
                                            <li>
                                                <dl>
                                                    <dt>신생아 희귀질환 유전자 검사에 대해 알고 계셨나요?</dt>
                                                    <dd>
                                                        <div class="form-group">
                                                            <label><input type="radio"> 네</label>
                                                            <label><input type="radio"> 아니오</label>
                                                        </div>
                                                    </dd>
                                                </dl>
                                            </li>
                                            <li>
                                                <dl>
                                                    <dt>신생아 희귀질환 유전자 검사가 있다면, 검사해 보고 싶으신가요?</dt>
                                                    <dd>
                                                        <div class="form-group">
                                                            <label><input type="radio"> 네</label>
                                                            <label><input type="radio"> 아니오</label>
                                                            <div class="etc">
                                                                <label><input type="radio"> 기타</label>
                                                                <input type="text" id="etc" class="form-control">
                                                                <label for="etc" class="sr-only">기타의견</label>
                                                            </div>
                                                        </div>
                                                    </dd>
                                                </dl>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="btn-area">
                                    <p>
                                        <button type="submit" class="btn btn-sm btn-pink">투표하기</button>
                                        <a href="#" class="btn btn-sm btn-white" role="button">목록</a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </article>
                </div>
            </div>
        </section>
    </main>
    
    
    
    <div class="popup-layer poll-result">
        <div class="popup-bg"></div>
        <div id="popup-content" class="pop-layer">
            <div class="pop-container">
                <div class="pop-head">
                    <h4>주부 9단이 추천하는 육아잇템은 무엇인가요?</h4>
                    <div class="btn-close">
                        <button type="button" class="btn close">
                            <img src="/mobile/assets/images/community/btn_close.png" alt="닫기">
                        </button>
                    </div>
                </div>
                <div class="pop-body">
                    aaa
                </div>
            </div>
        </div>
    </div>
    
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/docfoot.php"); ?>
    <script src="/mobile/assets/js/common.js"></script>
    <script>
        $(function($){
            // 팝업 레이어
            $('.btn-popup').click(function(){
                var $href = $(this).attr('href');
                layer_popup($href);
            });
            function layer_popup(el){

                var $el = $(el);        //레이어의 id를 $el 변수에 저장
                var isDim = $el.prev().hasClass('popup-bg');   //dimmed 레이어를 감지하기 위한 boolean 변수

                isDim ? $('.popup-layer').fadeIn() : $el.fadeIn();

                var $elWidth = ~~($el.outerWidth()),
                    $elHeight = ~~($el.outerHeight()),
                    docWidth = $(document).width(),
                    docHeight = $(document).height();

                // 화면의 중앙에 레이어를 띄운다.
                /*if ($elHeight < docHeight || $elWidth < docWidth) {
                    $el.css({
                        marginTop: -$elHeight /2,
                        marginLeft: -$elWidth/2
                    })
                } else {
                    $el.css({top: 0, left: 0});
                }*/

                $el.find('.close').click(function(){
                    isDim ? $('.popup-layer').fadeOut() : $el.fadeOut(); // 닫기 버튼을 클릭하면 레이어가 닫힌다.
                    return false;
                });

                $('.popup-layer .popup-bg').click(function(){
                    $('.popup-layer').fadeOut();
                    return false;
                });
            }
        }(jQuery));
    </script>
</body>
</html>