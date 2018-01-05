<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/community.css" rel="stylesheet">
</head>
<body class="sub community"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- Main Content -->
    <main id="content" class="today-talk"><!-- 페이지명 클래스 -->
        <div class="container">
            <div class="sub-wrapper">
                <!-- 서브 lnb -->
                <?php require_once($_SERVER["DOCUMENT_ROOT"]."/community/_lnb.php"); ?>
                <!-- Content Start -->
                <div class="sub-content">
                    <h2 class="sub-title">투데이 톡</h2>
                    <div class="calendar">
                        <div class="calendar-head">
                            <strong class="date">2017. 12</strong>
                            <div class="btn-controls">
                                <p class="prev">
                                    <a href="#">
                                        <i class="icon-left-open"></i> 이전달
                                    </a>
                                </p>
                                <p class="next">
                                    <a href="#">
                                        다음달 <i class="icon-right-open"></i>
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="calendar-body">
                            <ol class="day-list">
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">6</a></li>
                                <li><a href="#">7</a></li>
                                <li><a href="#">8</a></li>
                                <li><a href="#">9</a></li>
                                <li><a href="#">10</a></li>
                                <li><a href="#">11</a></li>
                                <li><a href="#">12</a></li>
                                <li><a href="#">13</a></li>
                                <li><a href="#">14</a></li>
                                <li><a href="#">15</a></li>
                                <li><a href="#">16</a></li>
                                <li><a href="#">17</a></li>
                                <li><a href="#">18</a></li>
                                <li><a href="#">19</a></li>
                                <li><a href="#">20</a></li>
                                <li><a href="#">21</a></li>
                                <li><a href="#">22</a></li>
                                <li><a href="#">23</a></li>
                                <li><a href="#">24</a></li>
                                <li><a href="#">25</a></li>
                                <li><a href="#">26</a></li>
                                <li><a href="#">27</a></li>
                                <li><a href="#">28</a></li>
                                <li class="active"><a href="#">29</a></li>
                                <li><a href="#">30</a></li>
                                <li><a href="#">31</a></li>
                            </ol>
                        </div>
                    </div>
                    <article class="today-view">
                        <div class="article-header">
                            <h3 class="logo"><img src="/assets/images/community/logo.gif" alt="logo"></h3>
                            <p>
                                이거 만큼은 어느 맛집 못지 않다! 앙쥬맘이 가장 잘하는 요리 자랑해보아요~<br>
                                앙쥬맘이 가장 잘하는 요리 자랑해보아요~
                            </p>
                            <figure>
                                <img src="/assets/images/community/img_today_view.jpg" alt="">
                            </figure>
                        </div>
                        <div class="article-content">
                            <form action="#">
                                <div class="talk-write">
                                    <h4>투데이톡 쓰기 <small>타인비방, 모욕, 개인정보 노출, 상업광고, 홍보글 등은 공지없이 바로 삭제</small></h4>
                                    <div class="write-form">
                                        <div class="user-profile">
                                            <figure>
                                                <img src="/assets/images/community/none_profile.png" alt="">
                                            </figure>
                                        </div>
                                        <div class="form-group">
                                            <textarea id="u-content" class="form-control" placeholder="입력창에 작성해 주세요."></textarea>
                                            <label for="u-content" class="sr-only">투데이톡 글쓰기</label>
                                            <div class="btn-area">
                                                <button type="submit" class="btn btn-gray">등록하기</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner">
                                    <a href="#">
                                        <figure>
                                            <img src="/assets/images/community/img_today_banner.jpg" alt="">
                                        </figure>
                                    </a>
                                </div>
                                <div class="talk-list">
                                    <ul>
                                        <li>
                                            <div class="user-profile">
                                                <figure>
                                                    <img src="/assets/images/community/none_profile.png" alt="">
                                                </figure>
                                            </div>
                                            <div class="details">
                                                <h5>무브먼트 <small>2017-10-22</small></h5>
                                                <p>
                                                    38준데 가급적 자연분만하고싶네요 그래도 만약에 재왕절개하게된다면 참고할 좋은정보 감사해요
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="user-profile">
                                                <figure>
                                                    <img src="/assets/images/community/none_profile.png" alt="">
                                                </figure>
                                            </div>
                                            <div class="details">
                                                <h5>무브먼트 <small>2017-10-22</small></h5>
                                                <p>
                                                    38준데 가급적 자연분만하고싶네요 그래도 만약에 재왕절개하게된다면 참고할 좋은정보 감사해요
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="user-profile">
                                                <figure>
                                                    <img src="/assets/images/community/none_profile.png" alt="">
                                                </figure>
                                            </div>
                                            <div class="details">
                                                <h5>무브먼트 <small>2017-10-22</small></h5>
                                                <p>
                                                    38준데 가급적 자연분만하고싶네요 그래도 만약에 재왕절개하게된다면 참고할 좋은정보 감사해요
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="user-profile">
                                                <figure>
                                                    <img src="/assets/images/community/none_profile.png" alt="">
                                                </figure>
                                            </div>
                                            <div class="details">
                                                <h5>무브먼트 <small>2017-10-22</small></h5>
                                                <p>
                                                    38준데 가급적 자연분만하고싶네요 그래도 만약에 재왕절개하게된다면 참고할 좋은정보 감사해요
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="user-profile">
                                                <figure>
                                                    <img src="/assets/images/community/none_profile.png" alt="">
                                                </figure>
                                            </div>
                                            <div class="details">
                                                <h5>무브먼트 <small>2017-10-22</small></h5>
                                                <p>
                                                    38준데 가급적 자연분만하고싶네요 그래도 만약에 재왕절개하게된다면 참고할 좋은정보 감사해요
                                                </p>
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
                        </div>
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