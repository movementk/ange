<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/dochead.php"); ?>
<link href="/mobile/assets/css/sub.css" rel="stylesheet">
<link href="/mobile/assets/css/event.css" rel="stylesheet">
</head>
<body class="sub event"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/header.php"); ?>
    <!-- pgae-header -->
    <div class="page-header">
        <!-- 폴더별 타이틀 -->
        <h2>체험 / 이벤트</h2>
        <div class="btn-controls">
            <a href="/mobile/event/reader_list.php" class="prev">
                <i class="icon-left-open-big">
                    <span class="sr-only">이전 페이지</span>
                </i>
            </a>
            <a href="/mobile/event/prizewinner_list.php" class="next">
                <i class="icon-right-open-big">
                    <span class="sr-only">다음 페이지</span>
                </i>
            </a>
        </div>
    </div>
    
    <!-- sub content start -->
    <main id="content" class="event-entry"><!-- 페이지명 클래스 -->
        <div class="container">
            <section>
                <div class="section-header">
                    <!--
                            오늘오픈 > today-event
                            오늘마감 > today-closing
                            응모종료 > finish-event
                     -->
                    <div class="event-item today-event">
                        <div class="item">
                           <img src="/mobile/assets/images/event/img_event_view.jpg" alt="">
                            <div class="event-backdrop">
                                <p>오늘<br>오픈</p>
                            </div>
                            <div class="sns-like">
                                <ul class="sns-share">
                                    <li>
                                        <a href="#">
                                            <p class="icon-blog">
                                                <img src="/mobile/assets/images/event/img_icon_blog.png" alt="">
                                            </p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <p class="icon-tweeter">
                                                <img src="/mobile/assets/images/event/img_icon_tweeter.png" alt="">
                                            </p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <p class="icon-fbook">
                                                <img src="/mobile/assets/images/event/img_icon_facebook.png" alt="">
                                            </p>
                                        </a>
                                    </li>
                                </ul>
                                <p class="btn-like">
                                    <a href="#" class="btn btn-xs btn-white" role="button">
                                        123 <i class="icon-heart"></i>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="information">
                        <div class="info-head">
                            <h3 class="subject">
                                착용해보시개 &lt;벨라베이비해피 기저귀&gt;
                                체험단이벤트
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
                                <a href="#" class="btn btn-md btn-white" role="button">구경가기</a>
                                <a href="#" class="btn btn-md btn-white" role="button">목록</a>
                                <a href="#" class="btn btn-lg btn-pink" role="button">응모하기</a>
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="section-content">
                    <div class="table-wrap">
                        <table class="table type-1">
                            <caption>
                                <h4>회원정보</h4>
                                <div class="btn-link">
                                    <a href="#" class="btn btn-default" role="button">회원정보 수정</a>
                                </div>
                            </caption>
                            <tbody>
                                <tr>
                                    <th>신청자</th>
                                    <td>무브먼트(movementk)</td>
                                </tr>
                                <tr>
                                    <th>주소</th>
                                    <td>서울 서초구 양재동 120-1번지 양재빌딩 2층</td>
                                </tr>
                                <tr>
                                    <th>연락처</th>
                                    <td>02-1234-5678</td>
                                </tr>
                                <tr>
                                    <th><label for="u-blog">블로그</label></th>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" id="u-blog" class="form-control" placeholder="ex) http://blog.naver.com/myblog">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="u-sns">SNS 주소</label></th>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" id="u-sns" class="form-control">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                   </div>
                </div>
            </section>
        </div>
    </main>
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/docfoot.php"); ?>
    <script src="/mobile/assets/js/common.js"></script>
</body>
</html>