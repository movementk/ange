<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/event.css" rel="stylesheet">
</head>
<body class="sub event"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- Main Content -->
    <main id="content" class="event-list"><!-- 페이지명 클래스 -->
        <div class="container">
            <div class="sub-wrapper">
                <!-- 서브 lnb -->
                <?php require_once($_SERVER["DOCUMENT_ROOT"]."/event/_lnb.php"); ?>
                <!-- Content Start -->
                <div class="sub-content">
                    <h2 class="sub-title">체험/이벤트</h2>
                    <article class="event-slider">
                        <ul>
                            <li>
                                <a href="#">
                                    <figure>
                                        <img src="/assets/images/event/img_event_slider.jpg" alt="">
                                    </figure>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <figure>
                                        <img src="/assets/images/event/img_event_slider.jpg" alt="">
                                    </figure>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <figure>
                                        <img src="/assets/images/event/img_event_slider.jpg" alt="">
                                    </figure>
                                </a>
                            </li>
                        </ul>
                    </article>
                    <dl class="prizewinner">
                        <dt>당첨자 발표</dt>
                        <dd><a href="#">베파파 레드루트 체험단</a></dd>
                    </dl>
                    <div class="list-content">
                        
                        <div class="form-group">
                            <select class="form-control">
                                <option>분류 전체</option>
                            </select>
                            <select class="form-control">
                                <option>상태 전체</option>
                            </select>
                        </div>
                        <ul class="list">
                            <!-- 
                                오늘오픈 > today-event
                                오늘마감 > today-closing
                                응모종료 > finish-event
                            -->
                            <li>
                                <a href="/event/event_info.php" class="today-event">
                                    <div class="item">
                                        <img src="/assets/images/event/img_event_img01.jpg" alt="">
                                        <div class="event-situation">
                                            <p class="situation-txt">
                                                오늘<br>오픈
                                            </p>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <p class="title">겨울바람을 이중으로 막아주는 겨울 블랭킷<br> &lt;모던버랩 더블코튼 블랭킷&gt; 체험단</p>
                                        <div class="event-information">
                                            <ul>
                                                <li>
                                                    <i class="icon-heart-filled"></i>
                                                    <p>100</p>
                                                </li>
                                                <li>
                                                    <i class="icon-calendar"></i>
                                                    <p>D-12</p>
                                                </li>
                                                <li>
                                                    <i class="icon-user"></i>
                                                    <p>5/10</p>
                                                </li>
                                                <li>
                                                    <i class="icon-database"></i>
                                                    <p>+1,000</p>
                                                </li>
                                            </ul>
                                            <!-- 
                                                응모완료 > event-sucess
                                                미응모 > event-before
                                            -->
                                            <p class="event-sucess">응모완료</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="/event/event_info.php" class="today-closing">
                                    <div class="item">
                                        <img src="/assets/images/event/img_event_img02.jpg" alt="">
                                        <div class="event-situation">
                                            <p class="situation-txt">
                                                오늘<br>마감
                                            </p>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <p class="title">포근하고 스타일리쉬한 도노도노<br> 한겨울 꿀잠 필수템 체험단</p>
                                        <div class="event-information">
                                            <ul>
                                                <li>
                                                    <i class="icon-heart-filled"></i>
                                                    <p>100</p>
                                                </li>
                                                <li>
                                                    <i class="icon-calendar"></i>
                                                    <p>D-12</p>
                                                </li>
                                                <li>
                                                    <i class="icon-user"></i>
                                                    <p>5/10</p>
                                                </li>
                                                <li>
                                                    <i class="icon-database"></i>
                                                    <p>+1,000</p>
                                                </li>
                                            </ul>
                                            <p class="event-before">미응모</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="/event/event_info.php">
                                    <div class="item">
                                        <img src="/assets/images/event/img_event_img03.jpg" alt="">
                                    </div>
                                    <div class="details">
                                        <p class="title">겨울바람을 이중으로 막아주는 겨울 블랭킷<br> &lt;모던버랩 더블코튼 블랭킷&gt; 체험단</p>
                                        <div class="event-information">
                                            <ul>
                                                <li>
                                                    <i class="icon-heart-filled"></i>
                                                    <p>100</p>
                                                </li>
                                                <li>
                                                    <i class="icon-calendar"></i>
                                                    <p>D-12</p>
                                                </li>
                                                <li>
                                                    <i class="icon-user"></i>
                                                    <p>5/10</p>
                                                </li>
                                                <li>
                                                    <i class="icon-database"></i>
                                                    <p>+1,000</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="/event/event_info.php">
                                    <div class="item">
                                        <img src="/assets/images/event/img_event_img04.jpg" alt="">
                                    </div>
                                    <div class="details">
                                        <p class="title">겨울바람을 이중으로 막아주는 겨울 블랭킷<br> &lt;모던버랩 더블코튼 블랭킷&gt; 체험단</p>
                                        <div class="event-information">
                                            <ul>
                                                <li>
                                                    <i class="icon-heart-filled"></i>
                                                    <p>100</p>
                                                </li>
                                                <li>
                                                    <i class="icon-calendar"></i>
                                                    <p>D-12</p>
                                                </li>
                                                <li>
                                                    <i class="icon-user"></i>
                                                    <p>5/10</p>
                                                </li>
                                                <li>
                                                    <i class="icon-database"></i>
                                                    <p>+1,000</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="/event/event_info.php" class="finish-event">
                                    <div class="item">
                                        <img src="/assets/images/event/img_event_img05.jpg" alt="">
                                        <div class="event-situation">
                                            <p class="situation-txt">
                                                응모<br>종료
                                            </p>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <p class="title">포근하고 스타일리쉬한 도노도노<br> 한겨울 꿀잠 필수템 체험단</p>
                                        <div class="event-information">
                                            <ul>
                                                <li>
                                                    <i class="icon-heart-filled"></i>
                                                    <p>100</p>
                                                </li>
                                                <li>
                                                    <i class="icon-calendar"></i>
                                                    <p>D-12</p>
                                                </li>
                                                <li>
                                                    <i class="icon-user"></i>
                                                    <p>5/10</p>
                                                </li>
                                                <li>
                                                    <i class="icon-database"></i>
                                                    <p>+1,000</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="/event/event_info.php" class="finish-event">
                                    <div class="item">
                                        <img src="/assets/images/event/img_event_img06.jpg" alt="">
                                        <div class="event-situation"></div>
                                    </div>
                                    <div class="details">
                                        <p class="title">겨울바람을 이중으로 막아주는 겨울 블랭킷<br> &lt;모던버랩 더블코튼 블랭킷&gt; 체험단</p>
                                        <div class="event-information">
                                            <ul>
                                                <li>
                                                    <i class="icon-heart-filled"></i>
                                                    <p>100</p>
                                                </li>
                                                <li>
                                                    <i class="icon-calendar"></i>
                                                    <p>D-12</p>
                                                </li>
                                                <li>
                                                    <i class="icon-user"></i>
                                                    <p>5/10</p>
                                                </li>
                                                <li>
                                                    <i class="icon-database"></i>
                                                    <p>+1,000</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/sub_aside.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
    <script src="/assets/js/common_sub.js"></script>
    <script>
        $(function($){
            // slider
            $(document).ready(function(){
                $('.event-slider > ul').bxSlider({
                    controls: false
                });
            });
        }(jQuery));
    </script>
</body>
</html>