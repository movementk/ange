<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/dochead.php"); ?>
<link href="/mobile/assets/css/sub.css" rel="stylesheet">
<link href="/mobile/assets/css/samplepack.css" rel="stylesheet">
</head>
<body class="sub samplepack"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/header.php"); ?>
    <!-- pgae-header -->
    <div class="page-header">
        <!-- 폴더별 타이틀 -->
        <h2>앙쥬 샘플팩</h2>
        <div class="btn-controls">
            <a href="/mobile/samplepack/sample_list.php" class="prev">
                <i class="icon-left-open-big">
                    <span class="sr-only">이전 페이지</span>
                </i>
            </a>
            <a href="/mobile/samplepack/sample_list.php" class="next">
                <i class="icon-right-open-big">
                    <span class="sr-only">다음 페이지</span>
                </i>
            </a>
        </div>
    </div>
    
    <!-- sub content start -->
    <main id="content" class="sample-explain"><!-- 페이지명 클래스 -->
        <div class="container">
            <section>
                <div class="section-header">
                    <h3 class="section-title">샘플팩 신청하기</h3>
                    <p class="summary">앙쥬에서 회원님들의 행복을 축하드리며 임신부용품은 물론 아기용품,<br> 생활용품까지 다양한 선물을 드립니다.<br> 신청조건을 확인하시고 신청하세요.</p>
                    <figure>
                        <img src="/mobile/assets/images/samplepack/img_samplepack_explain.png" alt="">
                    </figure>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-lg btn-gray" role="button">샘플팩 후기보기</a>
                        </p>
                    </div>
                </div>
                <div class="section-content">
                    <article class="member-info">
                        <div class="new-member">
                            <h5>신규 임신부 회원</h5>
                            <div class="details">
                                <dl>
                                    <dt>신청기간</dt>
                                    <dd>매월 1일 ~ 말일</dd>
                                    <dt>신청조건</dt>
                                    <dd>해당월에 앙쥬에 신규가입한 임산부</dd>
                                    <dt>증정인원</dt>
                                    <dd class="text-pink">
                                        500명 추첨
                                    </dd>
                                    <dt>신청방법</dt>
                                    <dd>
                                        <ol>
                                            <li>1.출산예정일과 임신부 증거자료 등록</li>
                                            <li>2-1. 앙쥬 인스타그램 팔로워 하신분 당첨 UP!
                                                <a href="https://www.instagram.com/angemoms/" target="_blank" class="insta">
                                                    <img src="/assets/images/samplepack/img_insta.png" alt="">
                                                </a>
                                            </li>
                                            <li>2-2. 앙쥬 페이스북 팔로워하기
                                                <a href="https://www.facebook.com/angemoms/" target="_blank" class="facebook">
                                                    <img src="/assets/images/samplepack/img_facebook.png" alt="">
                                                </a>
                                            </li>
                                        </ol>
                                    </dd>
                                    <dt>증정선물</dt>
                                    <dd>임신/육아용품 샘플팩</dd>
                                    <dt>발송비용</dt>
                                    <dd>무료배송</dd>
                                    <dt>발송일정</dt>
                                    <dd>매월 10일 전후</dd>
                                </dl>
                            </div>
                             <div class="btn-area">
                                 <p>
                                     <a href="#" role="button" class="btn btn-lg btn-pink" >신규회원 샘플팩 신청하기</a>
                                 </p>
                             </div>
                        </div>
                        <div class="member">
                            <h5>기존 앙쥬(임신부) 회원</h5>
                            <div class="details">
                                <dl>
                                    <dt>신청기간</dt>
                                    <dd>매월 25일 ~ 말일</dd>
                                    <dt>신청조건</dt>
                                    <dd>해신규 임신부 샘플팩을 받지 못한 임신부인 앙쥬맘</dd>
                                    <dt>증정인원</dt>
                                    <dd class="text-blue">200명 선착순</dd>
                                    <dt>신청방법</dt>
                                    <dd>
                                        <ol>
                                            <li>1.출산예정일과 임신부 증거자료 등록</li>
                                            <li>2-1. 앙쥬 인스타그램 팔로워 하신분 당첨 UP!
                                                <a href="https://www.instagram.com/angemoms/" target="_blank" class="insta">
                                                    <img src="/assets/images/samplepack/img_insta.png" alt="">
                                                </a>
                                            </li>
                                            <li>2-2. 앙쥬 페이스북 팔로워하기
                                                <a href="https://www.facebook.com/angemoms/" target="_blank" class="facebook">
                                                    <img src="/assets/images/samplepack/img_facebook.png" alt="">
                                                </a>
                                            </li>
                                        </ol>
                                    </dd>
                                    <dt>증정선물</dt>
                                    <dd>임신/육아/생활용품팩 (정품+샘플)</dd>
                                    <dt>발송비용</dt>
                                    <dd>착불 2,500원</dd>
                                    <dt>주의사항</dt>
                                    <dd>앙쥬 마일리지 2,000점 차감  (마일리지 쌓는 방법 보기)</dd>
                                    <dt>발송일정</dt>
                                    <dd>매월 10일 전후</dd>
                                </dl>
                            </div>
                            <div class="btn-area">
                               <p>
                                    <a href="#" role="button" class="btn btn-lg btn-gray" >기존회원 샘플팩 신청하기</a>
                                </p>
                            </div>
                        </div>
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