<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/sub_popup.css" rel="stylesheet">
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
                    <section class="application-write"><!-- 페이지명 클래스 -->
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
                                                        <td class="request-type">셀프 작명</td>
                                                    </tr>
                                                    <tr>
                                                        <th><label for="pay">작명 서비스 금액</label></th>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" id="pay" class="form-control">원
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th><label for="u-name">신청인</label></th>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" id="u-name" class="form-control">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th><label for="u-id">회원 ID</label></th>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" id="u-id" class="form-control">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class="v-top"><label for="u-addr">주소</label></th>
                                                        <td class="address">
                                                            <div class="form-group">
                                                                <input type="file" id="u-addr" class="form-control">
                                                                <div class="btn-confirm">
                                                                    <a href="#" class="btn btn-default" role="button">우편번호</a>
                                                                </div>
                                                                <input type="text" id="addr01" class="form-control">
                                                                <label for="addr01" class="sr-only"></label>
                                                                <input type="text" id="addr02" class="form-control">
                                                                <label for="addr02" class="sr-only"></label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th><label for="u-call">전화번호(자택)</label></th>
                                                        <td class="call">
                                                            <div class="form-group">
                                                                <input type="text" id="u-call" class="form-control">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th><label for="u-phone">휴대전화번호</label></th>
                                                        <td class="call">
                                                            <div class="form-group">
                                                                <input type="text" id="u-phone" class="form-control">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th><label for="e-mail">E-mail</label></th>
                                                        <td class="mail">
                                                            <div class="form-group">
                                                                <input type="text" id="e-mail" class="form-control">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class="v-top">알게된 경로</th>
                                                        <td>
                                                            <div class="form-group">
                                                                <div>
                                                                    잡지 &#40;
                                                                    <label>
                                                                        <input type="radio">병원
                                                                    </label>
                                                                    <label>
                                                                        <input type="radio">산후조리원
                                                                    </label>
                                                                    <label>
                                                                        <input type="radio">정기구독
                                                                    </label>
                                                                    <label>
                                                                        <input type="radio">기타
                                                                    </label>
                                                                    &#41;
                                                                </div>
                                                                <div>
                                                                    <label>
                                                                        <input type="radio">인터넷 검색
                                                                    </label>
                                                                    <label>
                                                                        <input type="radio">소개
                                                                    </label>
                                                                    <label>
                                                                        <input type="radio">기타
                                                                    </label>
                                                                    <input type="text" id="etc" class="form-control">
                                                                    <label for="etc" class="sr-only"></label>
                                                                </div>
                                                            </div>
                                                        </td>
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
                                                        <th><label for="relationship">신청인과의 관계</label></th>
                                                        <td class="connection">
                                                            <div class="form-group">
                                                                <input type="text" id="relationship" class="form-control">
                                                            </div>
                                                            <p>예) 봉인, 아들, 손녀 등 ...</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class="v-top">생년월일</th>
                                                        <td class="birth-date">
                                                            <div class="form-group">
                                                                <select class="form-control years">
                                                                    <option>2018</option>
                                                                </select>
                                                                년
                                                                <select class="form-control">
                                                                    <option>11</option>
                                                                </select>
                                                                월
                                                                <select class="form-control">
                                                                    <option>11</option>
                                                                </select>
                                                                일
                                                                <select class="form-control">
                                                                    <option>11</option>
                                                                </select>
                                                                시
                                                                <select class="form-control">
                                                                    <option>11</option>
                                                                </select>
                                                                분
                                                            </div>
                                                            <div class="form-group">              
                                                                <select class="form-control">
                                                                    <option>양력</option>
                                                                </select>
                                                                <select class="form-control">
                                                                    <option>평달</option>
                                                                </select>
                                                            </div>
                                                            <p class="attention">
                                                                생년월일 정보는 등록후 수정할수없습니다.
                                                                정확히 선택해주세요.
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>성별</th>
                                                        <td class="sex">
                                                            <div class="form-group">
                                                                <label><input type="radio"> 남자</label>
                                                                <label><input type="radio"> 여자</label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>제외할 이름</th>
                                                        <td class="except">
                                                            <div class="form-group">
                                                                <label>아버지 이름 <input type="text" class="form-control"></label>
                                                                <label>어머니 이름 <input type="text" class="form-control"></label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>성(姓)씨</th>
                                                        <td class="zip-code">
                                                            <div class="form-group">
                                                                <input type="text" id="name-change" class="form-control">
                                                                <label for="name-change" class="sr-only">성씨</label>
                                                                <div class="btn-confirm">
                                                                    <a href="#popup-content" class="btn btn-default btn-popup" role="button">한자변환</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>    
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="attention-box">
                                            <h5>주의사항</h5>
                                            <ol>
                                                <li>1. 서비스를 이용하신 후에는 서비스대금 환불이 불가합니다. 이에 동의하시는 경우만 신청해 주십시오!</li>
                                                <li>2. 인터넷 익스플로러를 이용해 주시기 바랍니다</li>
                                            </ol>
                                        </div>
                                        <div class="btn-area">
                                            <p>
                                                <button type="submit" class="btn btn-sm btn-pink">진행하기</button>
                                                <a href="#" class="btn btn-sm btn-white" role="button">취소하기</a>
                                            </p>
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
    
    
    <!-- 한자변환 레이어 팝업 -->
    <div class="popup-layer convert-pop">
        <div class="popup-bg"></div>
        <div id="popup-content" class="pop-layer">
            <div class="pop-container">
                <div class="pop-head">
                    <div class="btn-close">
                        <h4>한자검색</h4>
                        <button type="button" class="btn close">
                            <img src="/assets/images/btn_close_white.png" alt="닫기">
                        </button>
                    </div>
                </div>
                <div class="pop-body">
                    <div class="content">
                        <div class="table-wrap">
                            <table class="table table-bordered type-2">
                                <thead>
                                    <tr>
                                        <th>한자</th>
                                        <th>훈</th>
                                        <th>음</th>
                                        <th>선택</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>
                                                <img src="/assets/images/ange_naming/convert01.png" alt="">
                                            </p>
                                        </td>
                                        <td>북방</td>
                                        <td>임</td>
                                        <td>
                                            <div class="btn-confirm">
                                                <a href="#" class="btn btn-default" role="button">선택하기</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>
                                                <img src="/assets/images/ange_naming/convert02.png" alt="">
                                            </p>
                                        </td>
                                        <td>맡을</td>
                                        <td>임</td>
                                        <td>
                                            <div class="btn-confirm">
                                                <a href="#" class="btn btn-default" role="button">선택하기</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>
                                                <img src="/assets/images/ange_naming/convert03.png" alt="">
                                            </p>
                                        </td>
                                        <td>아이밸</td>
                                        <td>임</td>
                                        <td>
                                            <div class="btn-confirm">
                                                <a href="#" class="btn btn-default" role="button">선택하기</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>
                                                <img src="/assets/images/ange_naming/convert04.png" alt="">
                                            </p>
                                        </td>
                                        <td>수풀</td>
                                        <td>임</td>
                                        <td>
                                            <div class="btn-confirm">
                                                <a href="#" class="btn btn-default" role="button">선택하기</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>
                                                <img src="/assets/images/ange_naming/convert05.png" alt="">
                                            </p>
                                        </td>
                                        <td>아이밸</td>
                                        <td>임</td>
                                        <td>
                                            <div class="btn-confirm">
                                                <a href="#" class="btn btn-default" role="button">선택하기</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>
                                                <img src="/assets/images/ange_naming/convert06.png" alt="">
                                            </p>
                                        </td>
                                        <td>품팔이</td>
                                        <td>임</td>
                                        <td>
                                            <div class="btn-confirm">
                                                <a href="#" class="btn btn-default" role="button">선택하기</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>
                                                <img src="/assets/images/ange_naming/convert07.png" alt="">
                                            </p>
                                        </td>
                                        <td>풍년들</td>
                                        <td>임</td>
                                        <td>
                                            <div class="btn-confirm">
                                                <a href="#" class="btn btn-default" role="button">선택하기</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>
                                                <img src="/assets/images/ange_naming/convert08.png" alt="">
                                            </p>
                                        </td>
                                        <td>임할</td>
                                        <td>임</td>
                                        <td>
                                            <div class="btn-confirm">
                                                <a href="#" class="btn btn-default" role="button">선택하기</a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
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