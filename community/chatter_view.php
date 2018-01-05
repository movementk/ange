<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/sub_popup.css" rel="stylesheet">
<link href="/assets/css/community.css" rel="stylesheet">
</head>
<body class="sub community"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- Main Content -->
    <main id="content" class="chatter-view"><!-- 페이지명 클래스 -->
        <div class="container">
            <div class="sub-wrapper">
                <!-- 서브 lnb -->
                <?php require_once($_SERVER["DOCUMENT_ROOT"]."/community/_lnb.php"); ?>
                <!-- Content Start -->
                <div class="sub-content">
                    <section class="community-view">
                        <h2 class="sub-title">수다수다방!</h2>
                        <div class="section-content">
                            <article class="board-view type-1">
                                <div class="article-header" >
                                    <h3>애독자엽서 &lt;비트루트 4종 세트&gt; 당첨자 구성품 변경 안내 (5월 엽서 이용)</h3>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <ul class="infor-list">
                                                <li class="like">
                                                    <i class="icon-heart-filled"></i>
                                                    123
                                                </li>
                                                <li class="comment">
                                                    <i class="icon-comment"></i>
                                                    123
                                                </li>
                                                <li class="date">
                                                    <i class="icon-calendar-1"></i>
                                                    2017-10-10
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-6">
                                            <ul class="print-share">
                                                <li class="print">
                                                    <a href="#">
                                                        <p class="icon">
                                                            <i class="icon-print"></i>
                                                        </p>
                                                        프린트
                                                    </a>
                                                </li>
                                                <li class="sympathy">
                                                    <a href="#">
                                                        <p class="icon">
                                                            <i class="icon-heart-filled"></i>
                                                        </p>
                                                        공감
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="article-content">
                                    <div class="content">
                                        안녕하세요 앙쥬입니다. <br>
                                        &lt;앙쥬 신규 가입회원 샘플팩 9월_82차 &gt;<br>
                                        발표일이 금일 10일 발표 예정이었으나 <br>
                                        선정이 조금 늦어져 11일에 발표 될 예정입니다.<br>
                                        양해 부탁드립니다.<br>
                                        감사합니다.<br>
                                    </div>
                                    <div class="attach">
                                        <dl>
                                            <dt>첨부파일</dt>
                                            <dd>
                                                <a href="#">첨부된파일명.jpg</a>
                                                <a href="#">첨부된파일명.jpg</a>
                                            </dd>
                                        </dl>
                                    </div>
                                    <div class="vote-progress">
                                        <h5 class="vote-title">미혼으로 돌아가고 싶은 적 있나요?</h5>
                                        <div class="result">
                                            <ul>
                                                <li>
                                                    <label><input type="radio"> 그 때가 그립네.. 있다!</label>
                                                    <div class="progress-area">
                                                        <div class="bar" style="width: 60%;"></div>
                                                        <p class="result-txt">1419표, 60.16%</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <label><input type="radio"> 지금이 더 행복해.. 없다!</label>
                                                    <div class="progress-area">
                                                        <div class="bar" style="width: 40%;"></div>
                                                        <p class="result-txt">228표, 40.84%</p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="more-btn">
                                                <a href="#popup-content" class="btn btn-pink btn-popup" role="button">참여자 보기</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-area">
                                        <p>
                                            <a href="#" class="btn btn-sm btn-white" role="button">수정</a>
                                            <a href="#" class="btn btn-sm btn-white" role="button">삭제</a>
                                            <a href="#" class="btn btn-sm btn-pink" role="button">목록</a>
                                        </p>
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
                                </div>
                            </article>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
    
    <!-- 참여자 보기 팝업 -->
    <div class="popup-layer participant-result">
        <div class="popup-bg"></div>
        <div id="popup-content" class="pop-layer">
            <div class="pop-container">
                <div class="pop-head">
                    <h4>참여자보기</h4>
                    <div class="btn-close">
                        <button type="button" class="btn close">
                            <img src="/assets/images/btn_close_white.png" alt="닫기">
                        </button>
                    </div>
                </div>
                <div class="pop-body">
                    <div class="table-wrap">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>그때가 그립네.. 있다!</td>
                                    <td><i>1,419표</i></td>
                                    <td><i>86.16%</i></td>
                                    <td>
                                        <div class="btn-view">
                                            <a href="#" class="btn btn-xs btn-gray active" role="button">참여자 보기</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>지금이 더 행복해..없다!</td>
                                    <td><i>228</i>표</td>
                                    <td><i>13.84</i>%</td>
                                    <td>
                                        <div class="btn-view">
                                            <a href="#" class="btn btn-xs btn-gray" role="button">참여자 보기</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="details">
                        <h5><b>그 때가 그립네...있다!</b> 를 선택한 참여자</h5>
                        <div class="search-form">
                            <form action="#">
                                <div class="form-group">
                                    <input type="text" id="search" class="form-control">
                                    <label for="search" class="sr-only">검색하기</label>
                                </div>
                                <p class="btn-search">
                                    <button type="submit" class="btn btn-default">
                                        <i class="icon-search"></i>
                                        <span class="sr-only">검색 버튼</span>
                                    </button>
                                </p>
                            </form>
                        </div>
                        <div class="search-result">
                            <h6>참여자 별명</h6>
                            <ul>
                                <li>KAYA</li>
                                <li>01067481028</li>
                                <li>0305iris</li>
                                <li>0427silver</li>
                                <li>1004kossoo</li>
                                <li>블랙러시안</li>
                                <li>후야맘</li>
                                <li>술취한고냥이</li>
                                <li>20005241978</li>
                                <li>똘망영우</li>
                            </ul>
                        </div>
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