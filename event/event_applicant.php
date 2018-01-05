<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/event.css" rel="stylesheet">
</head>
<body class="sub event"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- Main Content -->
    <main id="content" class="event-applicant event-view"><!-- 페이지명 클래스 -->
        <div class="container">
            <div class="sub-wrapper">
                <!-- 서브 lnb -->
                <?php require_once($_SERVER["DOCUMENT_ROOT"]."/event/_lnb.php"); ?>
                <!-- Content Start -->
                <div class="sub-content">
                    <h2 class="sub-title">체험/이벤트</h2>
                    <article class="event-details">
                        <div class="article-header">
                            <div class="item">
                                <figure>
                                    <img src="/assets/images/event/img_event_view.jpg" alt="">
                                </figure>
                                <p class="today-event">
                                    오늘<br>오픈
                                    <!-- 
                                        오늘오픈 > today-event
                                        오늘마감 > today-closing
                                        응모종료 > finish-event
                                    -->
                                </p>
                                <div class="sns-like">
                                    <ul class="sns-share">
                                        <li>
                                            <a href="#">
                                                <p class="icon-blog">
                                                    <img src="/assets/images/event/icon_blog.gif" alt="네이버 블로그">
                                                </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <p class="icon-tweeter">
                                                    <img src="/assets/images/event/icon_tweeter.gif" alt="트위터">
                                                </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <p class="icon-facebook">
                                                    <img src="/assets/images/event/icon_facebook.gif" alt="페이스북">
                                                </p>
                                            </a>
                                        </li>
                                    </ul>
                                    <p class="btn-like">
                                        <a href="#" class="btn btn-white" role="button">
                                            좋아요
                                            <i class="icon-heart-filled"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="information">
                                <div class="info-head">
                                    <h3 class="subject">
                                        착용해보시개 벨라베이비해피 기저귀 <br>체험단 이벤트
                                    </h3>
                                    <p>눅눅함을 잡는 강한 흡수력! 유럽 프리미엄 기저귀 벨라베이비해피</p>
                                </div>
                                <div class="info-body">
                                    <dl>
                                        <dt>모집기간</dt>
                                        <dd>00일 00시간 00분 00초 남음</dd>
                                        <dt>체험발표</dt>
                                        <dd>00월 00일</dd>
                                        <dt>리뷰기간</dt>
                                        <dd>00.00 ~ 00.00</dd>
                                        <dt>모집인원</dt>
                                        <dd>00명</dd>
                                        <dt>신청인원</dt>
                                        <dd>00명</dd>
                                        <dt>관심</dt>
                                        <dd>00명</dd>
                                    </dl>
                                </div>
                                <div class="btn-area">
                                    <p>
                                        <a href="#" class="btn btn-sm btn-pink" role="button">응모하기</a>
                                        <a href="#" class="btn btn-sm btn-white" role="button">구경가기</a>
                                        <a href="#" class="btn btn-xs btn-white" role="button">목록</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="article-content">
                            <div class="event-tabs">
                                <ul>
                                    <li>
                                        <a href="/event/event_info.php">체험/이벤트 정보</a>
                                    </li>
                                    <li class="active">
                                        <a href="/event/event_applicant.php">
                                            신청자 한마디
                                            <p class="review-num">1,234</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/event/event_review.php">
                                            체험후기
                                            <p class="review-num">234</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <ul class="review-list">
                                    <li>
                                        <div class="user-profile">
                                            <figure>
                                                <img src="/assets/images/event/img_user_profile.jpg" alt="">
                                            </figure>
                                        </div>
                                        <div class="review-content">
                                            <div class="user-info">
                                                <h4 class="user-name">무브먼트</h4>
                                                <p class="date">2017-10-22</p>
                                            </div>
                                            <p class="review-content">
                                               38준데 가급적 자연분만하고싶네요 그래도 만약에 재왕절개하게된다면 참고할 좋은정보 감사해요 
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="user-profile">
                                            <figure>
                                                <img src="/assets/images/event/img_user_profile.jpg" alt="">
                                            </figure>
                                        </div>
                                        <div class="review-content">
                                            <div class="user-info">
                                                <h4 class="user-name">무브먼트</h4>
                                                <p class="date">2017-10-22</p>
                                            </div>
                                            <p class="review-content">
                                               38준데 가급적 자연분만하고싶네요 그래도 만약에 재왕절개하게된다면 참고할 좋은정보 감사해요 
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="user-profile">
                                            <figure>
                                                <img src="/assets/images/event/img_user_profile.jpg" alt="">
                                            </figure>
                                        </div>
                                        <div class="review-content">
                                            <div class="user-info">
                                                <h4 class="user-name">무브먼트</h4>
                                                <p class="date">2017-10-22</p>
                                            </div>
                                            <p class="review-content">
                                               38준데 가급적 자연분만하고싶네요 그래도 만약에 재왕절개하게된다면 참고할 좋은정보 감사해요 
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="user-profile">
                                            <figure>
                                                <img src="/assets/images/event/img_user_profile.jpg" alt="">
                                            </figure>
                                        </div>
                                        <div class="review-content">
                                            <div class="user-info">
                                                <h4 class="user-name">무브먼트</h4>
                                                <p class="date">2017-10-22</p>
                                            </div>
                                            <p class="review-content">
                                               38준데 가급적 자연분만하고싶네요 그래도 만약에 재왕절개하게된다면 참고할 좋은정보 감사해요 
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="user-profile">
                                            <figure>
                                                <img src="/assets/images/event/img_user_profile.jpg" alt="">
                                            </figure>
                                        </div>
                                        <div class="review-content">
                                            <div class="user-info">
                                                <h4 class="user-name">무브먼트</h4>
                                                <p class="date">2017-10-22</p>
                                            </div>
                                            <p class="review-content">
                                               38준데 가급적 자연분만하고싶네요 그래도 만약에 재왕절개하게된다면 참고할 좋은정보 감사해요 
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                                <nav class="paging" aria-label="Page navigation">
                                    <ul class="pagination">
                                        <li class="first">
                                            <a href="#" aria-label="Previous">
                                                <i class="icon-angle-double-left"></i>
                                            </a>
                                        </li>
                                        <li class="prev">
                                            <a href="#" aria-label="Previous">
                                                <i class="icon-angle-left"></i>
                                            </a>
                                        </li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li class="next">
                                            <a href="#" aria-label="Next">
                                                <i class="icon-angle-right"></i>
                                            </a>
                                        </li>
                                        <li class="last">
                                            <a href="#" aria-label="Next">
                                                <i class="icon-angle-double-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </article>
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