<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/main.css" rel="stylesheet">
<link href="/assets/scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- Main Content -->
    <main id="content">
        <div class="container">
            <div class="section">
                <div class="column column-8">
                    <div class="hot-issue">
                        <a href="#">
                            <p class="item">
                                <img src="/assets/images/main/img_hot_issue.gif" alt="앙쥬 12월호 e-book">
                            </p>
                            <div class="details">
                                <strong>Today Hot issue</strong>
                                <p>[앙쥬 12월호 발간] 신간 e-book으로 확인! &amp; '독자선물' 신청!</p>
                            </div>
                        </a>
                    </div>
                    <!-- main slider -->
                    <div class="jumbo">
                        <ul class="jumbo-slider">
                            <li>
                                <a href="#">
                                    <figure>
                                        <img src="/assets/images/main/img_jumbo_slider01.jpg" alt="태아보험 상담이벤트">
                                    </figure>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <figure>
                                        <img src="/assets/images/main/img_jumbo_slider01.jpg" alt="태아보험 상담이벤트">
                                    </figure>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <figure>
                                        <img src="/assets/images/main/img_jumbo_slider01.jpg" alt="태아보험 상담이벤트">
                                    </figure>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <figure>
                                        <img src="/assets/images/main/img_jumbo_slider01.jpg" alt="태아보험 상담이벤트">
                                    </figure>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <figure>
                                        <img src="/assets/images/main/img_jumbo_slider01.jpg" alt="태아보험 상담이벤트">
                                    </figure>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <figure>
                                        <img src="/assets/images/main/img_jumbo_slider01.jpg" alt="태아보험 상담이벤트">
                                    </figure>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="column column-4">
                    <!-- 로그아웃 
                    <article class="member-login">
                        <div class="article-header">
                            <h3>회원 로그인</h3>
                            <p>로그인 및 출석체크하고 마일리지 받으세요!</p>
                        </div>
                        <div class="article-content">
                            <form action="#">
                                <div class="form-group">
                                    <input type="text" id="user-id" class="form-control" placeholder="아이디">
                                    <label for="user-id" class="sr-only">아이디 입력</label>
                                </div>
                                <div class="form-group">
                                    <input type="password" id="user-pw" class="form-control" placeholder="비밀번호">
                                    <label for="user-pw" class="sr-only">아이디 입력</label>
                                </div>
                                <div class="btn-area">
                                    <button type="button" class="btn btn-lg btn-blue">로그인하기</button>
                                </div>
                            </form>
                            <div class="login-banner">
                                <a href="#">
                                    <figure>
                                        <img src="/assets/images/img_main_login_banner.jpg" alt="">
                                    </figure>
                                </a>
                            </div>
                        </div>
                        <div class="article-footer">
                            <ul>
                                <li><a href="#">회원가입하기</a></li>
                                <li><a href="#">아이디/비밀번호 찾기</a></li>
                            </ul>
                        </div>
                    </article>
                    -->
                    <!-- 로그인 -->
                    <article class="member-information">
                        <div class="article-header">
                            <div class="user-profile">
                                <figure>
                                    <img src="/assets/images/main/none_img_user_profile.png" alt="">
                                </figure>
                            </div>
                            <div class="user-info">
                                <div class="info-header">
                                    <h3>무브먼트 <small>님</small></h3>
                                    <div class="btn-area">
                                        <a href="#" class="btn btn-xs btn-white" role="button">나의정보</a>
                                        <a href="#" class="btn btn-xs btn-white" role="button">로그아웃</a>
                                    </div>
                                </div>
                                <div class="info-body">
                                    <div class="d-day">
                                        <ul>
                                            <li>출산예정 <b>D-150</b>일</li>
                                            <li>결혼기념일 <b>D-365</b>일</li>
                                        </ul>
                                    </div>
                                    <div class="benefit">
                                        <ul>
                                            <li><b>M</b> 123,456</li>
                                            <li><b>C</b> 123</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="article-content" id="content-scroll">
                            <div class="interest-keyword">
                                <h4><a href="#">관심키워드</a></h4>
                                <ul class="keyword-list">
                                    <li><a href="#">주차별정보</a></li>
                                    <li><a href="#">임신준비/태교</a></li>
                                    <li><a href="#">출산준비/용품</a></li>
                                    <li><a href="#">DIY/놀이법</a></li>
                                    <li><a href="#">이유식/푸드</a></li>
                                </ul>
                            </div>
                            <div class="member-board-list">
                                <h4><a href="#">나의 관심글</a></h4>
                                <ul>
                                    <li><a href="#">[임신] 심한 입덧 가라앉히는 방법 없나요?</a></li>
                                    <li><a href="#">[출산] 산후조리할 때 어떤 음식을 챙겨 먹어야 할까요?</a></li>
                                    <li><a href="#">[임신] 어떤 산부인과를 다녀야 할까요?</a></li>
                                </ul>
                            </div>
                            <div class="member-board-list">
                                <h4><a href="#">체험이벤트</a></h4>
                                <ul>
                                    <li><a href="#">[서평단] 똑게육아 마일스톤 카드</a></li>
                                    <li><a href="#">[서평단] 똑게육아 마일스톤 카드</a></li>
                                    <li><a href="#">[서평단] 똑게육아 마일스톤 카드</a></li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            
            <div class="section">
                <div class="column column-8">
                    <div class="brand-news">
                        <a href="#">
                            <strong>BRAND NEWS</strong>
                            <h3>끄레텔</h3>
                            <p>사용이 쉬운 회전형 카시트 이지턴 360 출시 <i>!</i></p>
                        </a>
                    </div>
                </div>
                <div class="column column-4">
                    <div class="banner-item">
                        <a href="#">
                            <figure>
                                <img src="/assets/images/main/img_banner_baobab.jpg" alt="밀크 바오밥">
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="section">
                <div class="column column-8">
                    <article class="expert-qna">
                        <div class="article-header">
                            <h3>닥터앙쥬 전문가 Q&amp;A</h3>
                            <div class="btn-controls">
                                <a href="#" class="btn btn-prev" role="button">
                                    <i class="icon-left-circle">
                                        <span class="sr-only">이전</span>
                                    </i>
                                </a>
                                <a href="#" class="btn btn-next" role="button">
                                    <i class="icon-right-circle">
                                        <span class="sr-only">다음</span>
                                    </i>
                                </a>
                            </div>
                        </div>
                        <div class="article-content">
                            <div class="gallery-list">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <figure>
                                                <img src="/assets/images/main/img_qna_gallery01.jpg" alt="">
                                                <figcaption>
                                                    임신 중인데 동생 싫다는<br>
                                                    아이, 어떡하죠?
                                                </figcaption>
                                            </figure>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <figure>
                                                <img src="/assets/images/main/img_qna_gallery02.jpg" alt="">
                                                <figcaption>
                                                    임신 중인데 동생 싫다는<br>
                                                    아이, 어떡하죠?
                                                </figcaption>
                                            </figure>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="qna-list">
                                <ul>
                                    <li><a href="#">잠자리 독립 늦어져서 걱정이에요</a></li>
                                    <li><a href="#">존댓말 언제부터 가르쳐야 할까요?</a></li>
                                    <li><a href="#">휜다리인데 이대로 둬도 되나요?</a></li>
                                    <li><a href="#">할머니에게 집착하는데 어떻게 해야 하죠?</a></li>
                                    <li><a href="#">제왕절개 수술흉터 자국이 걱정이에요</a></li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="column column-4">
                    <article class="parenting-learn">
                        <div class="article-header">
                            <h3>영상으로 배우는 육아</h3>
                            <div class="btn-controls">
                                <a href="#" class="btn btn-prev" role="button">
                                    <i class="icon-left-circle">
                                        <span class="sr-only">이전</span>
                                    </i>
                                </a>
                                <a href="#" class="btn btn-next" role="button">
                                    <i class="icon-right-circle">
                                        <span class="sr-only">다음</span>
                                    </i>
                                </a>
                            </div>
                        </div>
                        <div class="article-content">
                            <div class="gallery-list">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <figure>
                                                <img src="/assets/images/main/img_parenting_learn01.jpg" alt="">
                                                <figcaption>
                                                    <em>앙쥬육아백과</em>
                                                    <p>신생아 목욕시키기</p>
                                                </figcaption>
                                            </figure>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <figure>
                                                <img src="/assets/images/main/img_parenting_learn02.jpg" alt="">
                                                <figcaption>
                                                    <em>앙쥬육아백과</em>
                                                    <p>아기 트림시키기</p>
                                                </figcaption>
                                            </figure>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            
            <div class="section">
                <div class="column column-8">
                    <article class="subject-content">
                        <div class="article-header">
                            <h3>주제별 컨텐츠</h3>
                            <nav class="subject-list">
                                <ul>
                                    <li class="active"><a href="#">임산부</a></li>
                                    <li><a href="#">신생아</a></li>
                                    <li><a href="#">부모교육</a></li>
                                    <li><a href="#">이유식&amp;간식</a></li>
                                    <li><a href="#">육아잇템</a></li>
                                </ul>
                            </nav>
                            <div class="btn-controls">
                                <a href="#" class="btn btn-prev" role="button">
                                    <i class="icon-left-circle">
                                        <span class="sr-only">이전</span>
                                    </i>
                                </a>
                                <a href="#" class="btn btn-next" role="button">
                                    <i class="icon-right-circle">
                                        <span class="sr-only">다음</span>
                                    </i>
                                </a>
                            </div>
                        </div>
                        <div class="article-content">
                            <div class="content-list">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <figure>
                                                <img src="/assets/images/main/img_subject_content01.jpg" alt="">
                                                <figcaption>임신 6개월 Q&amp;A</figcaption>
                                            </figure>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <figure>
                                                <img src="/assets/images/main/img_subject_content02.jpg" alt="">
                                                <figcaption>잇몸에서 피날때</figcaption>
                                            </figure>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <figure>
                                                <img src="/assets/images/main/img_subject_content03.jpg" alt="">
                                                <figcaption>심한 입덧 가라앉히는 방법</figcaption>
                                            </figure>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <figure>
                                                <img src="/assets/images/main/img_subject_content04.jpg" alt="">
                                                <figcaption>임신 중 고열</figcaption>
                                            </figure>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <figure>
                                                <img src="/assets/images/main/img_subject_content05.jpg" alt="">
                                                <figcaption>임신 중 약 복용의 기준</figcaption>
                                            </figure>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <figure>
                                                <img src="/assets/images/main/img_subject_content06.jpg" alt="">
                                                <figcaption>시시콜콜 ‘태동’ 궁금증</figcaption>
                                            </figure>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <figure>
                                                <img src="/assets/images/main/img_subject_content07.jpg" alt="">
                                                <figcaption>임신부의 숙면</figcaption>
                                            </figure>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <figure>
                                                <img src="/assets/images/main/img_subject_content08.jpg" alt="">
                                                <figcaption>임신부의 간식 도시락</figcaption>
                                            </figure>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <figure>
                                                <img src="/assets/images/main/img_subject_content09.jpg" alt="">
                                                <figcaption>임신 속설에 대처하는 자세</figcaption>
                                            </figure>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <figure>
                                                <img src="/assets/images/main/img_subject_content10.jpg" alt="">
                                                <figcaption>임신 중 체온 변화</figcaption>
                                            </figure>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <figure>
                                                <img src="/assets/images/main/img_subject_content11.jpg" alt="">
                                                <figcaption>임신 중 갑상샘기능저하증</figcaption>
                                            </figure>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <figure>
                                                <img src="/assets/images/main/img_subject_content12.jpg" alt="">
                                                <figcaption>태교의 시작, 태명 짓기</figcaption>
                                            </figure>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="column column-4">
                    <article class="community">
                        <div class="article-header">
                            <h3>커뮤니티 최신글</h3>
                            <div class="btn-controls">
                                <a href="#" class="btn btn-prev" role="button">
                                    <i class="icon-left-circle">
                                        <span class="sr-only">이전</span>
                                    </i>
                                </a>
                                <a href="#" class="btn btn-next" role="button">
                                    <i class="icon-right-circle">
                                        <span class="sr-only">다음</span>
                                    </i>
                                </a>
                            </div>
                        </div>
                        <div class="article-content">
                            <ul class="community-list">
                                <li><a href="#"><em>앙쥬POLL</em> 신생아 희귀질환 유전자 검사 <span class="new">N</span></a></li>
                                <li><a href="#"><em>앙쥬POLL</em> 자녀계획 하고 있으신가요? <span class="new">N</span></a></li>
                                <li><a href="#"><em>도전!잡지모델</em> 22개월 수인이에요^^ <span class="new">N</span></a></li>
                                <li><a href="#"><em>앙쥬맘 노하우</em> 우리 딸 옷장 공유합니다. <span class="new">N</span></a></li>
                                <li><a href="#"><em>도전!잡지모델</em> 잡지모델 도전합니다!! <span class="new">N</span></a></li>
                            </ul>
                        </div>
                    </article>
                    <article class="brand-story">
                        <div class="article-header">
                            <h3>브랜드 스토리</h3>
                            <div class="btn-controls">
                                <a href="#" class="btn btn-prev" role="button">
                                    <i class="icon-left-circle">
                                        <span class="sr-only">이전</span>
                                    </i>
                                </a>
                                <a href="#" class="btn btn-next" role="button">
                                    <i class="icon-right-circle">
                                        <span class="sr-only">다음</span>
                                    </i>
                                </a>
                            </div>
                        </div>
                        <div class="article-content">
                            <div class="brand-item">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <figure>
                                                <img src="/assets/images/main/img_brand_item01.jpg" alt="">
                                            </figure>
                                            <p class="details">카가&amp;푸치</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <figure>
                                                <img src="/assets/images/main/img_brand_item02.jpg" alt="">
                                            </figure>
                                            <p class="details">마이한일</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <figure>
                                                <img src="/assets/images/main/img_brand_item03.jpg" alt="">
                                            </figure>
                                            <p class="details">보타니컬테라피</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <figure>
                                                <img src="/assets/images/main/img_brand_item04.jpg" alt="">
                                            </figure>
                                            <p class="details">비세이프</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <figure>
                                                <img src="/assets/images/main/img_brand_item05.jpg" alt="">
                                            </figure>
                                            <p class="details">킨더페퍼츠</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <figure>
                                                <img src="/assets/images/main/img_brand_item06.jpg" alt="">
                                            </figure>
                                            <p class="details">릴헤븐</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="brand-banner">
                                <a href="#">
                                    <figure>
                                        <img src="/assets/images/main/img_brand_banner.jpg" alt="홍보 배너">
                                    </figure>
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            
            <div class="section ange-community">
                <div class="sample-pack">
                    <a href="#">
                        <h3>앙쥬<br>샘플팰 신청하기</h3>
                    </a>
                </div>
                <div class="event-prizewinner">
                    <a href="#">
                        <h3>이벤트<br>당첨자 발표</h3>
                    </a>
                </div>
                <div class="ange-club">
                    <a href="#">
                        <h3>앙쥬 클럽</h3>
                        <p>산후조리원 모유수유 전용</p>
                    </a>
                </div>
            </div>
            
            <div class="section ange-board">
                <article class="poll-list">
                    <div class="article-header">
                        <h3>앙쥬 Poll</h3>
                        <a href="#" class="btn-more">
                            <i class="icon-plus-1"><span class="sr-only">더보기</span></i>
                        </a>
                    </div>
                    <div class="article-content">
                        <ul class="list">
                            <li><a href="#"><span class="ongoing">진행중</span>앙쥬POLL_신생아 희귀질환 유전자 검사 </a></li>
                            <li><a href="#"><span class="completion">완료</span>자녀계획 하고 있으신가요? </a></li>
                            <li><a href="#"><span class="completion">완료</span>앙쥬 창간 19주년 기념 리서치 </a></li>
                            <li><a href="#"><span class="completion">완료</span>아이 낳고 이럴 때 후회된다 </a></li>
                            <li><a href="#"><span class="completion">완료</span>겨울철 실내 습도, 어떻게 관리하시나요? </a></li>
                        </ul>
                    </div>
                </article>
                <article class="model-list">
                    <div class="article-header">
                        <h3>도전! 잡지모델</h3>
                        <a href="#" class="btn-more">
                            <i class="icon-plus-1"><span class="sr-only">더보기</span></i>
                        </a>
                    </div>
                    <div class="article-content">
                        <ul class="gallery">
                            <li>
                                <a href="#">
                                    <figure>
                                        <img src="/assets/images/main/img_model_gallery01.jpg" alt="도전 잡지모델">
                                    </figure>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <figure>
                                        <img src="/assets/images/main/img_model_gallery02.jpg" alt="도전 잡지모델">
                                    </figure>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <figure>
                                        <img src="/assets/images/main/img_model_gallery03.jpg" alt="도전 잡지모델">
                                    </figure>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <figure>
                                        <img src="/assets/images/main/img_model_gallery04.jpg" alt="도전 잡지모델">
                                    </figure>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <figure>
                                        <img src="/assets/images/main/img_model_gallery05.jpg" alt="도전 잡지모델">
                                    </figure>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <figure>
                                        <img src="/assets/images/main/img_model_gallery06.jpg" alt="도전 잡지모델">
                                    </figure>
                                </a>
                            </li>
                        </ul>
                    </div>
                </article>
                <article class="know-how">
                    <div class="article-header">
                        <h3>앙쥬맘 노하우</h3>
                        <a href="#" class="btn-more">
                            <i class="icon-plus-1"><span class="sr-only">더보기</span></i>
                        </a>
                    </div>
                    <div class="article-content">
                        <ul class="list">
                            <li><a href="#">아침에 일어나니 둘째가 침대에서자네요</a></li>
                            <li><a href="#">무슨 운동하세요?</a></li>
                            <li><a href="#">이제 일어나 아점 먹고 있어요ㅎ</a></li>
                            <li><a href="#">아이들이 너무너무좋아하는 맛집!!</a></li>
                            <li><a href="#">고양 스타필드에서 ^^</a></li>
                        </ul>
                    </div>
                </article>
            </div>
            
            <div class="section">
                <div class="column column-9">
                    <div class="company">
                        <div class="ange-mall">
                            <figure>
                                <img src="/assets/images/main/img_angemall.gif" alt="앙쥬몰">
                            </figure>
                            <dl>
                                <dt><a href="#">앙쥬몰 <span class="more">go</span></a></dt>
                                <dd>앙쥬의 출판물과<br>빅딜 찬스를 누리세요</dd>
                            </dl>
                        </div>
                        <div class="experience-review">
                            <figure>
                                <img src="/assets/images/main/img_review.gif" alt="체험후기">
                            </figure>
                            <dl>
                                <dt><a href="#">체험후기 <span class="more">go</span></a></dt>
                                <dd>회원님들의 생생한<br>체험후기를 한 눈에!</dd>
                            </dl>
                        </div>
                        <div class="cs-center">
                            <figure>
                                <img src="/assets/images/main/img_center.gif" alt="고객센터">
                            </figure>
                            <dl>
                                <dt><a href="#">고객센터 <span class="more">go</span></a></dt>
                                <dd>임산부와 엄마를 위한<br>행복놀이터 앙쥬</dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="column column-3">
                    <div class="banner-list">
                        <ul>
                            <li>
                                <a href="#">
                                    <figure>
                                        <img src="/assets/images/main/img_banner_list01.jpg" alt="">
                                    </figure>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <figure>
                                        <img src="/assets/images/main/img_banner_list02.jpg" alt="">
                                    </figure>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/login.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/quick.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
    <script src="/assets/scrollbar-plugin/jquery.mCustomScrollbar.js"></script>
    <script src="/assets/js/main.js"></script>
    <script>
        (function($){
            $(window).load(function(){
               $("#content-scroll").mCustomScrollbar();
            });
        })(jQuery);
    </script>
</body>
</html>