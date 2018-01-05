<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/samplepack.css" rel="stylesheet">
</head>
<body class="sub samplepack"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- Main Content -->
    <main id="content" class="sample-view"><!-- 페이지명 클래스 -->
        <div class="container">
            <div class="sub-wrapper">
                <!-- 서브 lnb -->
                <?php require_once($_SERVER["DOCUMENT_ROOT"]."/samplepack/_lnb.php"); ?>
                <!-- Content Start -->
                <div class="sub-content">
                    <h2 class="sub-title">샘플팩 후기</h2>
                    <article class="view-content">
                        <div class="article-header">
                            <figure>
                                <img src="/assets/images/event/img_none_review_view.jpg" alt="">
                            </figure>
                            <div class="details">
                                <div class="details-head">
                                    <h3>샘플팩 후기 제목이 노출되는 영역으로 높이는 가변적입니다.</h3>
                                </div>
                                <div class="details-body">
                                    <ul>
                                        <li>
                                            <dl>
                                                <dt>작성자</dt>
                                                <dd>무브먼트</dd>
                                            </dl>
                                        </li>
                                        <li>
                                            <dl>
                                                <dt>작성일</dt>
                                                <dd>2017-12-01</dd>
                                            </dl>
                                        </li>
                                        <li>
                                            <dl>
                                                <dt>블로그주소</dt>
                                                <dd><a href="https://blog.naver.com/nova_j/221170890915" target="_blank">https://blog.naver.com/nova_j/221170890915</a></dd>
                                            </dl>
                                        </li>
                                    </ul>
                                </div>
                                <div class="btn-area">
                                    <p>
                                        <a href="#" class="btn btn-white" role="button">인쇄하기</a>
                                        <a href="#" class="btn btn-white" role="button">신고하기</a>
                                        <a href="#" class="btn btn-white" role="button">
                                            <i class="icon-heart-filled"></i>123
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="article-content">
                            <figure>
                                <img src="/assets/images/event/img_none_full.jpg" alt="">
                            </figure>
                            <div class="btn-area">
                                <p>
                                    <a href="#" class="btn btn-white" role="button">수정</a>
                                    <a href="#" class="btn btn-white" role="button">삭제</a>
                                    <a href="#" class="btn btn-pink" role="button">목록</a>
                                </p>
                            </div>
                        </div>
                        <div class="page-link">
                            <ul>
                                <li class="prev">
                                    <dl>
                                        <dt>이전글</dt>
                                        <dd>
                                            <a href="#">(6월9일발송)샘플팩 베베쿡 프로바이오맘 쿠폰 안내</a>
                                        </dd>
                                    </dl>
                                </li>
                                <li class="next">
                                    <dl>
                                        <dt>다음글</dt>
                                        <dd>
                                            <a href="#">사이트 서버 점검 안내</a>
                                        </dd>
                                    </dl>
                                </li>
                            </ul>
                        </div>
                    </article>
                    <article class="comment-area">
                        <form action="#">
                            <div class="comment-write">
                                <div class="write">
                                    <div class="form-group">
                                        <textarea id="comment" class="form-control" placeholder="타인비방, 모욕, 개인정보 노출, 상업광고, 홍보글 등은 공지없이 바로 삭제됩니다."></textarea>
                                        <label for="comment" class="sr-only">댓글달기</label>
                                    </div>
                                    <button type="submit" class="btn btn-write">등록하기</button>
                                </div>
                                <p class="comment-num">총 <b>120</b>개의 댓글이 있습니다.</p>
                            </div>
                            <div class="article-content">
                                <ul class="comment-list">
                                    <li>
                                        <div class="information">
                                            <strong class="user-id">영이시니</strong>
                                            <p class="date">2017-10-22 11:03</p>
                                        </div>
                                        <div class="comment-content">
                                            38준데 가급적 자연분만하고싶네요 그래도 만약에 재왕절개하게된다면 참고할 좋은정보 감사해요
                                        </div>
                                        <div class="btn-list">
                                            <a href="#" class="btn btn-xs btn-gray" role="button">댓글</a>
                                            <a href="#" class="btn btn-xs btn-gray" role="button">수 정</a>
                                            <a href="#" class="btn btn-xs btn-gray" role="button">삭 제</a>
                                            <a href="#" class="btn btn-xs btn-pink" role="button">신 고</a>
                                            <a href="#" class="btn btn-xs btn-gray" role="button">블라인드</a>
                                        </div>
                                        <div class="reply">
                                            <div class="information">
                                                <strong class="user-id">영이시니</strong>
                                                <p class="date">2017-10-22 11:03</p>
                                            </div>
                                            <div class="comment-content">
                                                38준데 가급적 자연분만하고싶네요 그래도 만약에 재왕절개하게된다면 참고할 좋은정보 감사해요
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="information">
                                            <strong class="user-id">영이시니</strong>
                                            <p class="date">2017-10-22 11:03</p>
                                        </div>
                                        <div class="comment-content">
                                            38준데 가급적 자연분만하고싶네요 그래도 만약에 재왕절개하게된다면 참고할 좋은정보 감사해요
                                        </div>
                                        <div class="btn-list">
                                            <a href="#" class="btn btn-xs btn-gray" role="button">댓글</a>
                                            <a href="#" class="btn btn-xs btn-gray" role="button">수 정</a>
                                            <a href="#" class="btn btn-xs btn-gray" role="button">삭 제</a>
                                            <a href="#" class="btn btn-xs btn-pink" role="button">신 고</a>
                                            <a href="#" class="btn btn-xs btn-gray" role="button">블라인드</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="information">
                                            <strong class="user-id">영이시니</strong>
                                            <p class="date">2017-10-22 11:03</p>
                                        </div>
                                        <div class="comment-content">
                                            38준데 가급적 자연분만하고싶네요 그래도 만약에 재왕절개하게된다면 참고할 좋은정보 감사해요
                                        </div>
                                        <div class="btn-list">
                                            <a href="#" class="btn btn-xs btn-gray" role="button">댓글</a>
                                            <a href="#" class="btn btn-xs btn-gray" role="button">수 정</a>
                                            <a href="#" class="btn btn-xs btn-gray" role="button">삭 제</a>
                                            <a href="#" class="btn btn-xs btn-pink" role="button">신 고</a>
                                            <a href="#" class="btn btn-xs btn-gray" role="button">블라인드</a>
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
            </div>
        </div>
    </main>
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/sub_aside.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
    <script src="/assets/js/common_sub.js"></script>
</body>
</html>