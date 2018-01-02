<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/event.css" rel="stylesheet">
</head>
<body class="sub event"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- Main Content -->
    <main id="content" class="event-entry event-view"><!-- 페이지명 클래스 -->
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
                            <div class="table-wrap">
                                <form action="#">
                                    <table class="table table-borderd">
                                        <caption>
                                            <h4>회원정보</h4>
                                            <p class="btn-modify">
                                                <a href="#" class="btn btn-default">회원정보 수정</a>
                                            </p>
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
                                                <th><label for="u-sns">SNS</label></th>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" id="u-sns" class="form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    
                                    <table class="table table-borderd">
                                        <caption>
                                            <h4>신청서 작성</h4>
                                        </caption>
                                        <tbody>
                                            <tr>
                                                <th>제목</th>
                                                <td>착용해보시개 &lt;벨라베이비해피 기저귀&gt; 체험단 이벤트</td>
                                            </tr>
                                            <tr>
                                                <th><label for="u-blog2">블로그 주소</label></th>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" id="u-blog2" class="form-control" placeholder="상품 설명을 스크랩한 블로그 주소를 입력해 주세요. 미션에 따라 블로그 개수만큼 추가해주세요">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>추가정보</th>
                                                <td class="addition-list">
                                                    <dl>
                                                        <dt><label for="addition-class1">추가정보 제목 1</label></dt>
                                                        <dd>
                                                            <div class="form-group">
                                                                <input type="text" id="addition-class1" class="form-control" placeholder="질문에 대한 대답">
                                                            </div>
                                                        </dd>
                                                        <dt><label for="addition-class2">추가정보 제목 1</label></dt>
                                                        <dd>
                                                            <div class="form-group">
                                                                <input type="text" id="addition-class2" class="form-control" placeholder="질문에 대한 대답">
                                                            </div>
                                                        </dd>
                                                    </dl>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th><label for="reason">신청이유</label></th>
                                                <td>
                                                    <div class="form-group">
                                                        <textarea id="reason" class="form-control" placeholder="신청이유를 작성해주세요"></textarea>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th><label for="one-word">신청 한마디</label></th>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" id="one-word" class="form-control" placeholder="신청 한마디 작성">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>개인정보 제공 동의</th>
                                                <td>
                                                    <dl>
                                                        <dt>체험단 신청 후 개인정보 제3자 제공동의 내용</dt>
                                                        <dd>
                                                            <div class="form-group">
                                                                <label><input type="radio">동의함</label>
                                                                <label><input type="radio">동의안함</label>
                                                            </div>
                                                        </dd>
                                                    </dl>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>유의사항</th>
                                                <td>
                                                    <dl>
                                                        <dt>체험단 신청 후 개인정보 제3자 제공동의 내용</dt>
                                                        <dd>
                                                            <div class="form-group">
                                                                <label><input type="radio">동의함</label>
                                                                <label><input type="radio">동의안함</label>
                                                            </div>
                                                        </dd>
                                                    </dl>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="btn-area">
                                        <p>
                                            <button type="submit" class="btn btn-pink">신청하기</button>
                                            <a href="#" class="btn btn-white" role="button">취소하기</a>
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </article>
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