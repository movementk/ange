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
    <main id="content" class="review-view"><!-- 페이지명 클래스 -->
        <div class="container">
            <section>
                <div class="section-header">
                    <div class="section-header">
                    <!--
                            오늘오픈 > today-event
                            오늘마감 > today-closing
                            응모종료 > finish-event
                     -->
                        <div class="event-item today-event">
                            <div class="item">
                               <img src="/mobile/assets/images/sub/img_event_item01.jpg" alt="">
                                <div class="event-backdrop">
                                    <p>오늘<br>오픈</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="information">
                            <div class="info-head">
                                <h3 class="subject">
                                    착용해보시개 &lt;벨라베이비해피 기저귀&gt;
                                    체험단이벤트
                                </h3>
                            </div>
                            <div class="info-body">
                                <dl>
                                    <dt>체험/이벤트명</dt>
                                    <dd>착용해보시개 &lt;벨라베이비해피 기저귀&gt; 체험단 이벤트</dd>
                                    <dt>작성자</dt>
                                    <dd>무브먼트케이</dd>
                                    <dt>작성일</dt>
                                    <dd>2017-12-01</dd>
                                    <dt>블로그주소</dt>
                                    <dd>
                                        <a href="#" target="_blank">http://movementkg.co.kr</a></dd>
                                </dl>
                            </div>
                            <div class="btn-area">
                                <p>
                                    <a href="#" class="btn btn-md btn-white" role="button">신고하기</a>
                                    <a href="#" class="btn btn-md btn-white" role="button">
                                        <i class="icon-heart"></i>123
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="section-content">
                    <article class="review-details">
                        <figure>
                            <img src="/mobile/assets/images/event/img_review_view.jpg" alt="">
                        </figure>
                        <div class="btn-area">
                            <p>
                                <a href="#" class="btn btn-xs btn-white" role="button">수정</a>
                                <a href="#" class="btn btn-xs btn-white" role="button">삭제</a>
                                <a href="#" class="btn btn-xs btn-pink" role="button">목록</a>
                            </p>
                        </div>
                        <div class="page-link">
                            <ul>
                                <li class="prev">
                                    <a href="#">(6월9일발송)샘플팩 베베쿡 프로바이오맘 쿠폰 안내</a>
                                </li>
                                <li class="next">
                                    <a href="#">사이트 서버 점검 안내</a>
                                </li>
                            </ul>
                        </div>
                    </article>
                    
                    <article class="review-write">
                        <form action="#">
                            <div class="article-header">
                                <h4>의견쓰기</h4>
                                <div class="form-group">
                                    <textarea id="u-content" class="form-control" placeholder="타인비방, 모욕, 개인정보 노출, 상업광고, 홍보글 등은 공지없이 바로 삭제됩니다."></textarea>
                                    <label for="u-content" class="sr-only"></label>
                                </div>
                                <div class="btn-register">
                                    <button type="submit" class="btn btn-lg btn-gray">등록하기</button>
                                </div>
                            </div>
                            <div class="article-content">
                                <p class="inform">총 <b>120</b>개의 댓글이 있습니다.</p>
                                <ul class="review-list">
                                    <li>
                                        <div class="writer-info">
                                            <h5>영이시니</h5>
                                            <p class="date">2017-10-22</p>
                                        </div>
                                        <div class="review-content">
                                            <p>
                                                38준데 가급적 자연분만하고싶네요 그래도 만약에 재왕절개하게 된다면 참고할 좋은정보 감사해요
                                            </p>
                                            <div class="btn-more">
                                                <a href="#" class="btn btn-xs btn-pink">댓글</a>
                                                <a href="#" class="btn btn-xs btn-gray">수 정</a>
                                                <a href="#" class="btn btn-xs btn-gray">삭 제</a>
                                                <a href="#" class="btn btn-xs btn-gray">신 고</a>
                                                <a href="#" class="btn btn-xs btn-gray">블라인드</a>
                                            </div>
                                        </div>
                                        <div class="reply">
                                            <div class="writer-info">
                                                <h5>영이시니</h5>
                                                <p class="date">2017-10-22</p>
                                            </div>
                                            <div class="reply-content">
                                                38준데 가급적 자연분만하고싶네요 그래도 만약에 재왕절개하게 된다면 참고할 좋은정보 감사해요
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="writer-info">
                                            <h5>영이시니</h5>
                                            <p class="date">2017-10-22</p>
                                        </div>
                                        <div class="review-content">
                                            <p>
                                                38준데 가급적 자연분만하고싶네요 그래도 만약에 재왕절개하게 된다면 참고할 좋은정보 감사해요
                                            </p>
                                            <div class="btn-more">
                                                <a href="#" class="btn btn-xs btn-pink">댓글</a>
                                                <a href="#" class="btn btn-xs btn-gray">수 정</a>
                                                <a href="#" class="btn btn-xs btn-gray">삭 제</a>
                                                <a href="#" class="btn btn-xs btn-gray">신 고</a>
                                                <a href="#" class="btn btn-xs btn-gray">블라인드</a>
                                            </div>
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
                        </form>
                    </article>
                </div>
            </section>
        </div>
    </main>
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/docfoot.php"); ?>
    <script src="/mobile/assets/js/common.js"></script>
</body>
</html>