<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/ange_naming.css" rel="stylesheet">
</head>
<body class="sub ange-naming"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- Main Content -->
    <main id="content">
        <div class="container">
            <div class="sub-wrapper">
                <!-- 서브 lnb -->
                <?php require_once($_SERVER["DOCUMENT_ROOT"]."/ange_naming/_lnb.php"); ?>
                
                <!-- Content Start -->
                <div class="sub-content">
                    <section class="application-view"><!-- 페이지명 클래스 -->
                        <div class="section-header">
                            <h2 class="sub-title">셀프 작성</h2>
                        </div>
                        <div class="section-content">
                            <form action="#">
                                <article class="offeror-info">
                                    <div class="article-header">
                                        <h3 class="naming-title">신청인 정보</h3>
                                    </div>
                                    <div class="article-content">
                                        <div class="table-wrap">
                                            <table class="table table-bordered type-1">
                                                <tbody>
                                                    <tr>
                                                        <th>신청종류</th>
                                                        <td>셀프 작명</td>
                                                    </tr>
                                                    <tr>
                                                        <th>신청인</th>
                                                        <td>관리자</td>
                                                    </tr>
                                                    <tr>
                                                        <th>회원 ID</th>
                                                        <td>admin</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="v-top">주소</th>
                                                        <td>
                                                            <ul>
                                                                <li>-</li>
                                                                <li>마포구 독막로 155 5층</li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>전화번호(자택)</th>
                                                        <td>07050052810</td>
                                                    </tr>
                                                    <tr>
                                                        <th>휴대전화번호</th>
                                                        <td>
                                                            01000000000
                                                            <p class="attention">
                                                                승인번호는 휴대폰 문자 메세지로 보내드립니다.
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>E-mail</th>
                                                        <td>angeweb@ange.co.kr</td>
                                                    </tr>
                                                    <tr>
                                                        <th>알게된 경로</th>
                                                        <td>인터넷 검색</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </article>
                                <article class="baby-info">
                                    <div class="article-header">
                                        <h3 class="naming-title">작명 당사자(아기) 정보</h3>
                                    </div>
                                    <div class="article-content">
                                        <div class="table-wrap">
                                            <table class="table table-bordered type-1">
                                                <tbody>
                                                    <tr>
                                                        <th>신청인과의 관계</th>
                                                        <td>본인</td>
                                                    </tr>
                                                    <tr>
                                                        <th>생년월일</th>
                                                        <td>2018년 1월 1일 1시 0분 (양력 / 평달)</td>
                                                    </tr>
                                                    <tr>
                                                        <th>성별</th>
                                                        <td>여</td>
                                                    </tr>
                                                    <tr>
                                                        <th>성(姓)씨</th>
                                                        <td>弘</td>
                                                    </tr>    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </article>
                                <article class="payment-option">
                                    <div class="article-header">
                                        <h3 class="naming-title">결제하기</h3>
                                    </div>
                                    <div class="article-content">
                                        <div class="table-wrap">
                                            <table class="table table -bordered type-1">
                                                <tbody>
                                                    <tr>
                                                        <th>결제방법</th>
                                                        <td>
                                                            <label>
                                                                <input type="radio">신용카드결제
                                                            </label>
                                                            <label>
                                                                <input type="radio">무통장입금(가상계좌)
                                                            </label>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="btn-area">
                                                <p>
                                                    <a href="#" class="btn btn-sm btn-white" role="button">이전화면</a>
                                                    <button type="submit" class="btn btn-sm btn-pink">진행하기</button>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </form>
                        </div>
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