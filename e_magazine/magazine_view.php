<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/e_magazine.css" rel="stylesheet">
</head>
<body class="sub e_magazine"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- Main Content -->
    <main id="content" class="magazine-view"><!-- 페이지명 클래스 -->
        <div class="container">
            <div class="sub-wrapper">
                <!-- 서브 lnb -->
                <?php require_once($_SERVER["DOCUMENT_ROOT"]."/e_magazine/_lnb.php"); ?>
                <!-- Content Start -->
                <div class="sub-content">
                    <h2 class="sub-title">주차별 정보</h2>
                    <section class="view">
                        <div class="section-header">
                            <ul class="share-list">
                                <li>
                                    <a href="#">
                                        <p class="icon">
                                            <img src="/assets/images/e_magazine/icon_pint.png" alt="">
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <p class="icon">
                                            <img src="/assets/images/e_magazine/icon_tweeter.png" alt="">
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <p class="icon">
                                            <img src="/assets/images/e_magazine/icon_facebook.png" alt="">
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <p class="icon">
                                            <img src="/assets/images/e_magazine/icon_kakao.png" alt="">
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <p class="icon">
                                            <img src="/assets/images/e_magazine/icon_folder.png" alt="">
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <p class="icon">
                                            <img src="/assets/images/e_magazine/icon_export.png" alt="">
                                        </p>
                                    </a>
                                </li>
                            </ul>
                            <h3>심한 입덧 가라앉히는 방법 없나요?</h3>
                        </div>
                        <div class="section-content">
                            <figure>
                                <img src="/assets/images/e_magazine/img_none.jpg" alt="">
                            </figure>
                            <div class="table-wrap">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>월간앙쥬 <i>201711</i></th>
                                            <td>아이 감정에 공감해주는 타입인 훈육법이 궁금해요(4)</td>
                                        </tr>
                                        <tr>
                                            <th>월간앙쥬 <i>201711</i></th>
                                            <td>눈과 귀를 망치는 잘못된 생활 습관은?(2)</td>
                                        </tr>
                                        <tr>
                                            <th>월간앙쥬 <i>201711</i></th>
                                            <td>보습력 짱짱한 베이비 멀티밤s</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="sympathize">
                                    <div class="sympathize-btn">
                                        <a href="#" class="btn btn-pink" role="button">공감하기</a>
                                    </div>
                                    <p>
                                        현재 <i>12</i> 명의 회우너이 공감하고 있습니다.<br>
                                        공감한 스토리는 <i>'스크랩'</i> 됩니다.
                                    </p>
                                </div>
                            </div>
                            <div class="btn-area">
                                <p>
                                    <a href="#" class="btn btn-white" role="button">수정 하기</a>
                                    <a href="#" class="btn btn-white" role="button">삭제 하기</a>
                                    <a href="#" class="btn btn-gray" role="button">목록 보기</a>
                                </p>
                            </div>
                        </div>
                        
                        <article class="comment-area">
                            <form action="#">
                                <div class="comment-write">
                                    <h4>의견쓰기<small>타인비방, 모욕, 개인정보 노출, 상업광고, 홍보글 등은 공지없이 바로 삭제</small></h4>
                                    <div class="write">
                                        <div class="form-group">
                                            <textarea id="comment" class="form-control" placeholder="입력창에 댓글을 작성해 주세요."></textarea>
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
                                            <!-- 댓글수정 목록입니다. -->
                                            <div class="write">
                                                <div class="form-group">
                                                    <textarea id="comment-modify" class="form-control" placeholder="입력창에 댓글을 작성해 주세요."></textarea>
                                                    <label for="comment-modify" class="sr-only">댓글달기</label>
                                                </div>
                                                <button type="submit" class="btn btn-write">등록하기</button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
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
                            </form>
                        </article>
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