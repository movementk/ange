<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
</head>
<body class="sub"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- Main Content -->
    <main id="content"><!-- 페이지명 클래스 -->
        <div class="container">
            <div class="sub-wrapper">
                <!-- 서브 lnb -->
                <nav class="nav-lnb">
                    <h2 class="nav-title">e매거진</h2>
                    <ul id="lnb-list">
                        <li class="active">
                            <a href="#">e-book</a>
                            <ul>
                                <li class="active"><a href="#">주차별 정보</a></li>
                                <li><a href="#">주차별 정보</a></li>
                                <li><a href="#">주차별 정보</a></li>
                                <li><a href="#">주차별 정보</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">임신/출산</a>
                            <ul>
                                <li><a href="#">주차별 정보</a></li>
                                <li><a href="#">주차별 정보</a></li>
                                <li><a href="#">주차별 정보</a></li>
                                <li><a href="#">주차별 정보</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">성장/건강</a>
                            <ul>
                                <li><a href="#">주차별 정보</a></li>
                                <li><a href="#">주차별 정보</a></li>
                                <li><a href="#">주차별 정보</a></li>
                                <li><a href="#">주차별 정보</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">놀이/교육</a>
                            <ul>
                                <li><a href="#">주차별 정보</a></li>
                                <li><a href="#">주차별 정보</a></li>
                                <li><a href="#">주차별 정보</a></li>
                                <li><a href="#">주차별 정보</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">리빙/헬스</a>
                            <ul>
                                <li><a href="#">주차별 정보</a></li>
                                <li><a href="#">주차별 정보</a></li>
                                <li><a href="#">주차별 정보</a></li>
                                <li><a href="#">주차별 정보</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">앙쥬스토리</a>
                            <ul>
                                <li><a href="#">주차별 정보</a></li>
                                <li><a href="#">주차별 정보</a></li>
                                <li><a href="#">주차별 정보</a></li>
                                <li><a href="#">주차별 정보</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                
                <!-- Content Start -->
                <div class="sub-content">
                    <h2 class="sub-title">주차별 정보</h2>
                    
                    <!-- 제목 밑에 설명 글이 있는 경우 -->
                    <div class="sub-header">
                        <h2 class="sub-title">아이디 찾기</h2>
                        <p class="summary">아이디가 기억나지 않으세요?  본인확인 후 아이디를 확인하실 수 있습니다.</p>
                    </div>
                    
                    <div style="margin: 30px 0;"></div>
                    <div class="search-form">
                        <form action="#">
                            <div class="form-group">
                                <select class="form-control">
                                    <option>제목</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" id="search" class="form-control" placeholder="검색어를 입력해 주세요">
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
                    
                    <div style="margin: 30px 0;"></div>
                    <!-- 포인트 탭 리스트 -->
                    <ol class="point-tabs">
                        <li class="total active"><a href="#">전체</a></li>
                        <li><a href="#">~10,000 P</a></li>
                        <li><a href="#">~30,000 P</a></li>
                        <li><a href="#">~40,000 P</a></li>
                        <li><a href="#">~100,000 P</a></li>
                        <li><a href="#">100,000 P~</a></li>
                    </ol>
                    
                    <div style="margin: 30px 0;"></div>
                    <!-- board-view 공통 -->
                    <article class="board-view type-1">
                        <div class="article-header">
                            <h3>[당첨자발표] 당첨자발표 리스트입니다.</h3>
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
                                당첨자 발표 컨텐츠 영역
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
                        </div>
                    </article>
                    
                    <div style="margin: 30px 0;"></div>
                    <!-- commnet -->
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
                        </form>
                    </article>
                    
                    <div style="margin: 30px 0;"></div>
                    <div class="table-wrap">
                        <table class="table table-bordered type-1">
                            <!-- 
                                필수조건일때 th class="essential"
                            -->
                            <tbody>
                                <tr>
                                    <th class="essential"><label for="u-name">이름</label></th>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" id="u-name" class="form-control">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="essential"><label for="u-phone">휴대전화번호</label></th>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" id="u-phone" class="form-control">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="file">파일첨부</label></th>
                                    <td class="file">
                                        <div class="form-group">
                                            <input type="file" id="u-avatar" class="form-control">
                                            <label for="u-avatar" class="file-btn">파일선택</label>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <div style="margin: 30px 0;"></div>
                        
                        <table class="table tbale-bordered type-2">
                            <thead>
                                <tr>
                                    <th>번호</th>
                                    <th>제목</th>
                                    <th>작성일</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="num">130</td>
                                    <td class="title"><a href="#">딸램의 잠투정도 이제 클라우드비로 안녕~</a></td>
                                    <td class="date">2017-12-01</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <div style="margin: 30px 0;"></div>
                    <div class="attention-box">
                        <h5>주의사항</h5>
                        <ul>
                            <li>지정일에 반드시 당첨확인 전화 필요 (02-333-4650 내선 0번)</li>
                            <li>한번 작성하여 보내주신 엽서는 수정할 수 없습니다.</li>
                            <li>보내기에 문제가 생기신 분은 <a href="mailto:angeweb@ange.co.kr">angeweb@ange.co.kr</a> 메일로 해당내용을 보내주시기 바랍니다.</li>
                        </ul>
                    </div>
                    
                    <div style="margin: 30px 0;"></div>
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
                    
                    <div style="margin: 30px 0;"></div>
                    <!-- 휴대폰 인증 -->
                    <div class="identification">
                        <h5>회원정보에 등록된 휴대전화 번호와 일치해야, 인증번호를 받을 수 있습니다.</h5>
                        <p>
                            [인증하기]을 클릭하시면 본인 휴대폰으로 실명인증이 가능합니다.<br>
                            일치하는 정보가 없을 시 인증메세지가 뜨지 않습니다.
                        </p>
                        <div class="confirm-btn">
                            <a href="#" class="btn btn-white" role="button">휴대폰 인증하기</a>
                        </div>
                    </div>
                    
                    <div style="margin: 30px 0;"></div>
                    <!-- 제품 리스트 -->
                    <article class="item-list">
                        <div class="article-content">
                            <ul class="row">
                                <li class="col-xs-4">
                                    <a href="#">
                                        <div class="item">
                                            <img src="/assets/images/sub/img_product01.jpg" alt="">
                                        </div>
                                        <div class="details">
                                            <p>
                                                Botanical Therapy 스텝원 베이비 치약<br>
                                                (무불소, 블루베리향)
                                            </p>
                                            <i class="point">5,600</i>
                                        </div>
                                    </a>
                                </li>
                                <li class="col-xs-4">
                                    <a href="#">
                                        <div class="item">
                                            <img src="/assets/images/sub/img_product02.jpg" alt="">
                                        </div>
                                        <div class="details">
                                            <p>
                                                드림베이비 가스레인지 &amp;<br>
                                                오븐 손잡이 보호대
                                            </p>
                                            <i class="point">10,000</i>
                                        </div>
                                    </a>
                                </li>
                                <li class="col-xs-4">
                                    <a href="#">
                                        <div class="item">
                                            <img src="/assets/images/sub/img_product03.jpg" alt="">
                                        </div>
                                        <div class="details">
                                            <p>
                                                몰리메드 맥시_특오버나이트형
                                            </p>
                                            <i class="point">13,000</i>
                                        </div>
                                    </a>
                                </li>
                                <li class="col-xs-4">
                                    <a href="#">
                                        <div class="item">
                                            <img src="/assets/images/sub/img_product01.jpg" alt="">
                                        </div>
                                        <div class="details">
                                            <p>
                                                Botanical Therapy 스텝원 베이비 치약<br>
                                                (무불소, 블루베리향)
                                            </p>
                                            <i class="point">5,600</i>
                                        </div>
                                    </a>
                                </li>
                                <li class="col-xs-4">
                                    <a href="#">
                                        <div class="item">
                                            <img src="/assets/images/sub/img_product02.jpg" alt="">
                                        </div>
                                        <div class="details">
                                            <p>
                                                드림베이비 가스레인지 &amp;<br>
                                                오븐 손잡이 보호대
                                            </p>
                                            <i class="point">10,000</i>
                                        </div>
                                    </a>
                                </li>
                                <li class="col-xs-4">
                                    <a href="#">
                                        <div class="item">
                                            <img src="/assets/images/sub/img_product03.jpg" alt="">
                                        </div>
                                        <div class="details">
                                            <p>
                                                몰리메드 맥시_특오버나이트형
                                            </p>
                                            <i class="point">13,000</i>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </article>
                    
                    <div style="margin: 30px 0;"></div>
                    <div class="tab-list">
                        <ul>
                            <li class="active"><a href="#">상품안내</a></li>
                            <li><a href="#">상품후기<p class="review-num">1,234</p></a></li>
                            <li><a href="#">관련상품</a></li>
                            <li><a href="#">주의사항</a></li>
                        </ul>
                    </div>
                    
                    <div style="margin: 30px 0;"></div>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-sm btn-pink">장바구니</a>
                            <a href="#" class="btn btn-sm btn-white">쇼핑하기</a>
                            <a href="#" class="btn btn-sm btn-white btn-like">123</a>
                        </p>
                    </div>
                    
                    <div style="margin: 30px 0;"></div>
                    <!-- paging -->
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
    </main>
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/sub_aside.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/quick.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
    <script src="/assets/js/common_sub.js"></script>
</body>
</html>