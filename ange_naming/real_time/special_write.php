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
                    <section class="application-write special-write"><!-- 페이지명 클래스 -->
                        <div class="section-header">
                            <h2 class="sub-title">스페셜 작명전환 하기</h2>
                            <div class="attention-box type-2">
                                <h5>스페셜 작명전환 안내</h5>
                                <ol>
                                    <li>
                                        - 이용했던 작명 서비스(실시간 작명/셀프작명) 에서 스페셜 작명으로 전환을 원할 경우 이용할 수 있습니다.
                                    </li>
                                    <li>
                                        - 실시간 작명 신청 후 <b>1주일 이내</b>에만 가능합니다.
                                    </li>
                                    <li>
                                        - <i>전환신청을 하시면 신청했던 작명서비스(실시간 작명/셀프 작명)은 사용할 수 없습니다.</i>
                                    </li>
                                    <li>
                                        - <b>50,000원의 추가비용이 발생</b>하오니 결제해주셔야 합니다.
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <div class="section-content">
                            <form action="#">
                                <article class="offeror-info">
                                    <div class="article-header">
                                        <p class="attention">서비스를 이용하신 후에는 서비스대금 환불이 불가합니다.</p>
                                        <p class="attention">신청후 1일이내 입금이 안되는 경우 별도 연락없이 신청삭제가 됩니다.</p>
                                        <h3 class="naming-title">신청인 정보</h3>
                                    </div>
                                    <div class="article-content">
                                        <div class="table-wrap">
                                            <table class="table table-bordered type-1">
                                                <tbody>
                                                    <tr>
                                                        <th>신청종류</th>
                                                        <td class="request-type">스페셜 작명</td>
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
                                                            <p class="ex-text">예)033-1234-1234</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th><label for="u-phone">전화번호(휴대폰)</label></th>
                                                        <td class="call">
                                                            <div class="form-group">
                                                                <input type="text" id="u-phone" class="form-control">
                                                            </div>
                                                            <p class="ex-text">예)011-123-1234</p>
                                                            <p class="attention">추천이름완료 메세지를 휴대폰 문자로 보내드립니다.</p>
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
                                                        <th>성별</th>
                                                        <td class="sex">
                                                            <div class="form-group">
                                                                <label><input type="radio"> 남자</label>
                                                                <label><input type="radio"> 여자</label>
                                                            </div>
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
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th><label for="birthplace">출생지</label></th>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" id="birthplace" class="form-control">
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
                                                    <tr>
                                                        <th><label for="grade">형제서열</label></th>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" id="grade" class="form-control">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>돌림자</th>
                                                        <td class="family">
                                                            <div class="form-group">
                                                                <label><input type="radio">사용안함</label>
                                                                <label><input type="radio">중간자</label>
                                                                <label><input type="radio">끝자</label>

                                                                <input type="text" id="family-change" class="form-control">
                                                                <label for="family-change" class="sr-only">성씨</label>
                                                                <div class="btn-confirm">
                                                                    <a href="#popup-content" class="btn btn-default btn-popup" role="button">한자변환</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class="v-top">부모성명</th>
                                                        <td class="parent">
                                                            <div class="form-group">
                                                                <ul>
                                                                    <li>
                                                                        <div class="parent-name">
                                                                            <dl>
                                                                                <dt>부</dt>
                                                                                <dd>
                                                                                    <label for="father-name">이름</label>
                                                                                    <input type="text" id="father-name" class="form-control">
                                                                                </dd>
                                                                            </dl>
                                                                        </div>
                                                                        <div class="parent-details">
                                                                            <dl>
                                                                                <dt>생년월일</dt>
                                                                                <dd>
                                                                                    <select class="form-control">
                                                                                        <option>2018</option>
                                                                                    </select>년
                                                                                    <select class="form-control">
                                                                                        <option>1</option>
                                                                                        <option>2</option>
                                                                                    </select>월
                                                                                    <select class="form-control">
                                                                                        <option>1</option>
                                                                                        <option>2</option>
                                                                                    </select>일
                                                                                    <select class="form-control">
                                                                                        <option>1</option>
                                                                                        <option>2</option>
                                                                                    </select>시
                                                                                    <select class="form-control">
                                                                                        <option>0</option>
                                                                                    </select>분
                                                                                    <select class="form-control">
                                                                                        <option>양력</option>
                                                                                    </select>
                                                                                </dd>
                                                                            </dl>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="parent-name">
                                                                            <dl>
                                                                                <dt>모</dt>
                                                                                <dd>
                                                                                    <label for="mother-name">이름</label>
                                                                                    <input type="text" id="mother-name" class="form-control">
                                                                                </dd>
                                                                            </dl>
                                                                        </div>
                                                                        <div class="parent-details">
                                                                            <dl>
                                                                                <dt>생년월일</dt>
                                                                                <dd>
                                                                                    <select class="form-control">
                                                                                        <option>2018</option>
                                                                                    </select>년
                                                                                    <select class="form-control">
                                                                                        <option>1</option>
                                                                                        <option>2</option>
                                                                                    </select>월
                                                                                    <select class="form-control">
                                                                                        <option>1</option>
                                                                                        <option>2</option>
                                                                                    </select>일
                                                                                    <select class="form-control">
                                                                                        <option>1</option>
                                                                                        <option>2</option>
                                                                                    </select>시
                                                                                    <select class="form-control" >
                                                                                        <option>0</option>
                                                                                    </select>분
                                                                                    <select class="form-control">
                                                                                        <option>양력</option>
                                                                                    </select>
                                                                                </dd>
                                                                            </dl>
                                                                        </div>
                                                                    </li>
                                                                    <li class="attention">
                                                                        작명이나 개명시 부모의 사주를 꼭 참고하오니 <i>태어난 시간까지 정확히 기재해 주십시오.</i><br>
                                                                        (기혼자의 개명시는 배우자 사주을 참고하오니 생년월일시을 아래 여백란에 기재하여 주십시오. )
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th><label for="brother-name"></label>형제성명</th>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" id="brother-name" class="form-control">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class="v-top">하고싶은말씀</th>
                                                        <td class="talk">
                                                            <dl>
                                                                <dt>
                                                                    <p>생각하신 이름, 선호하는 이름의 느낌, 중복되면 안되는 친척이름,기타 작명시 부탁하실 내용등을 간단히 적어 주세요.</p>
                                                                    <p class="attention">
                                                                        가급적 친척,조카 이름등을 모두 적어주시면 중복되거나 비슷한 이름을 제외하여 작명하는데 도움이됩니다.
                                                                    </p>
                                                                </dt>
                                                                <dd>
                                                                    <div class="form-group">
                                                                        <label for="talkarea" class="sr-only"></label>
                                                                        <textarea id="talkarea" class="form-control"></textarea>
                                                                    </div>
                                                                </dd>
                                                            </dl>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="btn-area">
                                                <p>
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
    
    //한자변환하기 팝업
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