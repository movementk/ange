<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/dochead.php"); ?>
<link href="/mobile/assets/css/sub.css" rel="stylesheet">
</head>
<body class=""><!-- 폴더별 클레스 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/header.php"); ?>
    <!-- pgae-header -->
    <div class="page-header">
        <!-- 폴더별 타이틀 -->
        <h2>e-book</h2>
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
    <main id="content" class="sub"><!-- 페이지 클레스 -->
        <section>
            <div class="container">
                <!-- 페이지 타이틀 -->
                <div class="section-header">
                    <h3 class="section-title">당첨자 발표</h3>
                    <p class="summary">아이디가 기억나지 않으세요?  본인확인 후 아이디를 확인하실 수 있습니다.</p>
                </div>
                <div class="section-content">
                    <!-- 검색영역 -->
                    <p class="ex-txt">STEP LIST</p>
                    <ol class="step-list">
                        <li class="active">
                            <a href="#">
                                <p class="icon">
                                    <img src="" alt="">
                                </p>
                                약관동의
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <p class="icon">
                                    <img src="" alt="">
                                </p>
                                회원정보입력
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <p class="icon">
                                    <img src="" alt="">
                                </p>
                                가입완료
                            </a>
                        </li>
                    </ol>
                    
                    <!-- 검색영역 -->
                    <p class="ex-txt">검색폼</p>
                    <div class="search-form">
                        <form action="#">
                            <div class="form-group">
                                <select class="form-control">
                                    <option>제목</option>
                                </select>
                                <input type="text" id="search" class="form-control" placeholder="검색어를 입력해 주세요">
                                <label for="search" class="sr-only">검색하기</label>
                            </div>
                            <div class="search-btn">
                                <button type="submit" class="btn btn-default">
                                    <i class="icon-search">
                                        <span class="sr-only">검색버튼</span>
                                    </i>
                                </button>
                            </div>
                        </form>
                    </div>
                    
                    <!-- 자주하는 질문 -->
                    <p class="ex-txt">탭메뉴 1</p>
                    <nav class="tab-list">
                        <ul>
                            <li class="active"><a href="#">전체</a></li>
                            <li><a href="#">회원관련</a></li>
                            <li><a href="#">마일리지</a></li>
                            <li><a href="#">이벤트/체험단</a></li>
                            <li><a href="#">커뮤니티</a></li>
                            <li><a href="#">스토어</a></li>
                            <li><a href="#">네이밍</a></li>
                        </ul>
                    </nav>
                    
                    <!-- 탭메뉴 -->
                    <p class="ex-txt">탭메뉴 2</p>
                    <article class="tab-menu">
                        <div class="tab-list">
                            <ul>
                                <li class="active"><a href="#">상세 정보</a></li>
                                <li><a href="#">신청자한마디</a></li>
                                <li><a href="#">체험후기</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            컨텐츠 내용
                        </div>
                    </article>
                    
                    <!-- 인증받기 -->
                    <p class="ex-txt">휴대폰 인증</p>
                    <article class="authentication">
                        <b>회원정보에 등록된 휴대전화 번호와<br>일치해야, 인증번호를 받을 수 있습니다.</b>
                        <p>
                            [인증하기]을 클릭하시면 본인 휴대폰으로<br>실명인증이 가능합니다.<br>일치하는 정보가 없을 시 인증메세지가 뜨지 않습니다.
                        </p>
                        <div class="form">
                            <div class="btn-sms">
                                <a href="#" class="btn btn-white" role="button">휴대폰 인증하기</a>
                            </div>
                            <br><!-- 사용시 br 제거 -->
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="인증번호 입력">
                                <a href="#" class="btn btn-gray" role="button">확인</a>
                            </div>
                        </div>
                    </article>
                    
                    <!-- 검색영역 -->
                    <p class="ex-txt">아이콘 리스트</p>
                    <ul class="icon-list">
                        <li class="like">123</li>
                        <li class="comment">123</li>
                        <li class="date">2017-10-10</li>
                        <li class="sympathy">공감</li>
                        <li class="user">무브먼트</li>
                    </ul>
                    
                    <!-- 검색영역 -->
                    <p class="ex-txt">게시판 보기</p>
                    <article class="board-view">
                        <div class="article-header">
                            <h4>애독자엽서 &lt;비트루트 4종 세트&gt; 당첨자 구성품 변경 안내 (5월 엽서 이용)</h4>
                            <ul class="icon-list">
                                <li class="like">123</li>
                                <li class="comment">123</li>
                                <li class="date">2017-10-10</li>
                                <li class="sympathy">공감</li>
                            </ul>
                        </div>
                        <div class="article-content">
                            <div class="view-content">
                                <p>
                                    안녕하세요 앙쥬입니다.<br>
                                    &lt;앙쥬 신규 가입회원 샘플팩 9월_82차&gt;<br>
                                    발표일이 금일 10일 발표 예정이었으나 <br>
                                    선정이 조금 늦어져 11일에 발표 될 예정입니다.<br>
                                    양해 부탁드립니다.<br>
                                    감사합니다.
                                </p>
                            </div>
                            <dl class="attach">
                                <dt>첨부파일</dt>
                                <dd>
                                    <a href="#">첨부파일.jpg</a>
                                    <a href="#">첨부파일.jpg</a>
                                </dd>
                            </dl>
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
                        </div>
                    </article>
                    
                    <!-- paging -->
                    <p class="ex-txt">페이징</p>
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
        </section>
    </main>
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/docfoot.php"); ?>
</body>
</html>