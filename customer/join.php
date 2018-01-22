<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/customer.css" rel="stylesheet">
</head>
<body class="sub customer"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- Main Content -->
    <main id="content" class="join"><!-- 페이지명 클래스 -->
        <div class="container">
            <div class="sub-wrapper">
                <!-- 서브 lnb -->
                <?php require_once($_SERVER["DOCUMENT_ROOT"]."/customer/_lnb.php"); ?>
                <!-- Content Start -->
                <div class="sub-content">
                    <h2 class="sub-title">회원가입</h2>
                    <!-- Step-list 공통 -->
                    <div class="step-list">
                        <ol>
                            <li>
                                <b>STEP 01</b>
                                <p class="icon">
                                    <img src="/assets/images/customer/icon_step_list01.png" alt="">
                                </p>
                                <h3>약관동의</h3>
                            </li>
                            <li class="active">
                                <b>STEP 02</b>
                                <p class="icon">
                                    <img src="/assets/images/customer/icon_step_list02_active.png" alt="">
                                </p>
                                <h3>회원정보입력</h3>
                            </li>
                            <li>
                                <b>STEP 03</b>
                                <p class="icon">
                                    <img src="/assets/images/customer/icon_step_list03.png" alt="">
                                </p>
                                <h3>가입완료</h3>
                            </li>
                        </ol>
                    </div>
                    
                    <section class="join-form">
                        <div class="section-content">
                            <form action="#">
                                <article class="write-form">
                                    <h4 class="title">회원정보 입력</h4>
                                    <div class="table-wrap">
                                        <table class="table table-bordered type-1">
                                            <tbody>
                                                <tr>
                                                    <th class="essential"><label for="u-id">아이디</label></th>
                                                    <td class="user-id">
                                                        <div class="form-group basic-group">
                                                            <input type="text" id="u-id" class="form-control">
                                                        </div>
                                                        <p class="overlap-confirm">
                                                            <a href="#" class="btn btn-white" role="button">중복확인</a>
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th><label for="u-pw">비밀번호</label></th>
                                                    <td class="user-pw">
                                                        <div class="form-group basic-group">
                                                            <input type="password" id="u-pw" class="form-control">
                                                        </div>
                                                        <p class="overlap-confirm">
                                                            <a href="#" class="btn btn-white" role="button">중복확인</a>
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th><label for="confirm-pw">비밀번호 확인</label></th>
                                                    <td>
                                                        <div class="form-group basic-group">
                                                            <input type="password" id="confirm-pw" class="form-control">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="essential"><label for="u-name">이름</label></th>
                                                    <td>
                                                        <div class="form-group basic-group">
                                                            <input type="text" id="u-name" class="form-control">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="essential"><label for="u-nickname">닉네임</label></th>
                                                    <td>
                                                        <div class="form-group basic-group">
                                                            <input type="text" id="u-nickname" class="form-control">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="essential">생년월일</th>
                                                    <td class="birthday">
                                                        <div class="form-group">
                                                            <select class="form-control">
                                                                <option>양력/음력</option>
                                                            </select>
                                                            <select class="form-control">
                                                                <option>1999</option>
                                                            </select>
                                                            <select class="form-control">
                                                                <option>11</option>
                                                            </select>
                                                            <select class="form-control">
                                                                <option>11</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="essential">성별</th>
                                                    <td>
                                                        <div class="form-group">
                                                            <label><input type="radio">남</label>
                                                            <label><input type="radio">여</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="essential">우편번호</th>
                                                    <td class="addr">
                                                        <div class="form-group">
                                                            <div class="new-addr">
                                                                <input type="text" id="new-addr" class="form-control" placeholder="신주소">
                                                                <label for="new-addr" class="sr-only">신주소</label>
                                                            </div>
                                                            <div class="zip-code">
                                                                <input type="text" id="zip-code1" class="form-control">
                                                                <label for="zip-code1" class="sr-only">우편번호</label>
                                                                -
                                                                <input type="text" id="zip-code2" class="form-control">
                                                                <label for="zip-code2" class="sr-only">우편번호</label>
                                                            </div>
                                                            <p class="zipcode-confirm">
                                                                <a href="#" class="btn btn-white" role="button">우편번호</a>
                                                            </p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="essential">주소</th>
                                                    <td class="details-addr">
                                                        <div class="form-group">
                                                            <input type="text" id="basic-addr" class="form-control" placeholder="기본주소">
                                                            <label for="basic-addr" class="sr-only">기본주소</label>
                                                            <input type="text" id="details-addr" class="form-control" placeholder="상세주소">
                                                            <label for="details-addr" class="sr-only">상세주소</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>유선전화</th>
                                                    <td class="phone">
                                                        <div class="form-group">
                                                            <input type="text" id="u-tel1" class="form-control"> -
                                                            <label for="u-tel1" class="sr-only">전화번호</label>
                                                            <input type="text" id="u-tel2" class="form-control"> -
                                                            <label for="u-tel2" class="sr-only">전화번호</label>
                                                            <input type="text" id="u-tel3" class="form-control">
                                                            <label for="u-tel3" class="sr-only">전화번호</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="essential">휴대폰</th>
                                                    <td class="phone">
                                                        <div class="form-group">
                                                            <input type="text" id="u-phone1" class="form-control"> -
                                                            <label for="u-phone1" class="sr-only">전화번호</label>
                                                            <input type="text" id="u-phone2" class="form-control"> -
                                                            <label for="u-phone2" class="sr-only">전화번호</label>
                                                            <input type="text" id="u-phone3" class="form-control">
                                                            <label for="u-phone3" class="sr-only">전화번호</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="essential"><label for="u-email">이메일</label></th>
                                                    <td class="mail">
                                                        <div class="form-group">
                                                            <input type="text" id="u-email" class="form-control"> @
                                                            <input type="text" id="domain" class="form-control">
                                                            <label for="domain" class="sr-only">도메인주소</label>
                                                            <select class="form-control">
                                                                <option>직접입력</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>아바타 등록</th>
                                                    <td class="file">
                                                        <div class="form-group">
                                                            <input type="file" id="u-avatar" class="form-control">
                                                            <label for="u-avatar" class="file-btn">파일선택</label>
                                                        </div>
                                                        <p class="selection-btn">
                                                            <a href="#" class="btn btn-white" role="button">아바타 선택</a>
                                                        </p>
                                                        <label><input type="checkbox"> 이미지 삭제</label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>정보수신동의</th>
                                                    <td class="consent">
                                                        <p>앙쥬 각종소식 (Event/체험단/정보/당첨안내 등)</p>
                                                        <div class="form-group">
                                                            <label><input type="checkbox">이메일</label>
                                                            <label><input type="checkbox">SMS</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>가입일시</th>
                                                    <td>
                                                        <div class="form-group">
                                                            0000-00-00 00:00:00
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="essential">결혼여부</th>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-xs-5">
                                                                <div class="form-group">
                                                                    <label><input type="radio">기혼</label>
                                                                    <label><input type="radio">미혼</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-7">
                                                                <dl>
                                                                    <dt>결혼기념일</dt>
                                                                    <dd>
                                                                        <div class="form-group">
                                                                            <select class="form-control">
                                                                                <option>1999</option>
                                                                            </select>
                                                                            <select class="form-control">
                                                                                <option>11</option>
                                                                            </select>
                                                                            <select class="form-control">
                                                                                <option>11</option>
                                                                            </select>
                                                                        </div>
                                                                    </dd>
                                                                </dl>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="essential">임신여부</th>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-xs-5">
                                                                <div class="form-group">
                                                                    <label><input type="radio">해당없음</label>
                                                                    <label><input type="radio">해당됨</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-7">
                                                                <dl>
                                                                    <dt>출산예정일</dt>
                                                                    <dd>
                                                                        <div class="form-group">
                                                                            <select class="form-control">
                                                                                <option>1999</option>
                                                                            </select>
                                                                            <select class="form-control">
                                                                                <option>11</option>
                                                                            </select>
                                                                            <select class="form-control">
                                                                                <option>11</option>
                                                                            </select>
                                                                        </div>
                                                                    </dd>
                                                                </dl>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="essential v-top">아이정보</th>
                                                    <td class="kids-info">
                                                        <ul>
                                                            <li>
                                                                <div class="row">
                                                                    <div class="col-xs-5">
                                                                        <div class="form-group">
                                                                            <input type="text" id="kids-name1" class="form-control" placeholder="이름">
                                                                            <label for="kids-name1" class="sr-only">자녀이름</label>

                                                                            <label><input type="radio">남</label>
                                                                            <label><input type="radio">여</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-7">
                                                                        <dl>
                                                                            <dt>생년월일</dt>
                                                                            <dd>
                                                                                <div class="form-group">
                                                                                    <select class="form-control">
                                                                                        <option>1999</option>
                                                                                    </select>
                                                                                    <select class="form-control">
                                                                                        <option>11</option>
                                                                                    </select>
                                                                                    <select class="form-control">
                                                                                        <option>11</option>
                                                                                    </select>
                                                                                </div>
                                                                            </dd>
                                                                        </dl>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="row">
                                                                    <div class="col-xs-5">
                                                                        <div class="form-group">
                                                                            <input type="text" id="kids-name2" class="form-control" placeholder="이름">
                                                                            <label for="kids-name2" class="sr-only">자녀이름</label>

                                                                            <label><input type="radio">남</label>
                                                                            <label><input type="radio">여</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-7">
                                                                        <dl>
                                                                            <dt>생년월일</dt>
                                                                            <dd>
                                                                                <div class="form-group">
                                                                                    <select class="form-control">
                                                                                        <option>1999</option>
                                                                                    </select>
                                                                                    <select class="form-control">
                                                                                        <option>11</option>
                                                                                    </select>
                                                                                    <select class="form-control">
                                                                                        <option>11</option>
                                                                                    </select>
                                                                                </div>
                                                                            </dd>
                                                                        </dl>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="row">
                                                                    <div class="col-xs-5">
                                                                        <div class="form-group">
                                                                            <input type="text" id="kids-name3" class="form-control" placeholder="이름">
                                                                            <label for="kids-name3" class="sr-only">자녀이름</label>

                                                                            <label><input type="radio">남</label>
                                                                            <label><input type="radio">여</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-7">
                                                                        <dl>
                                                                            <dt>생년월일</dt>
                                                                            <dd>
                                                                                <div class="form-group">
                                                                                    <select class="form-control">
                                                                                        <option>1999</option>
                                                                                    </select>
                                                                                    <select class="form-control">
                                                                                        <option>11</option>
                                                                                    </select>
                                                                                    <select class="form-control">
                                                                                        <option>11</option>
                                                                                    </select>
                                                                                </div>
                                                                            </dd>
                                                                        </dl>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <p class="note">
                                            한번 입력된 기념일은 수정할 수 없으니 정확히 입력해주시기 바랍니다.<br>
                                            기념일 (본인생일, 아이생일, 결혼기념일)을 등록하시면 기념일 일주일 전 축하 마일리지가 자동 적립됩니다.
                                        </p>
                                    </div>
                                </article>
                                <article class="addition-info">
                                    <h4 class="title">추가정보</h4>
                                    <div class="table-wrap">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <th>관심분야</th>
                                                    <td>
                                                        <ul>
                                                            <li>
                                                                <dl>
                                                                    <dt>컨텐츠</dt>
                                                                    <dd>
                                                                        <ul>
                                                                            <li><label><input type="checkbox">임신/출산</label></li>
                                                                            <li><label><input type="checkbox">성장/건강</label></li>
                                                                            <li><label><input type="checkbox">놀이/교육</label></li>
                                                                            <li><label><input type="checkbox">리빙/헬스</label></li>
                                                                        </ul>
                                                                    </dd>
                                                                </dl>
                                                            </li>
                                                            <li>
                                                                <dl>
                                                                    <dt>체험이벤트</dt>
                                                                    <dd>
                                                                        <ul>
                                                                            <li><label><input type="checkbox">진행중</label></li>
                                                                            <li><label><input type="checkbox">당첨자 발표</label></li>
                                                                        </ul>
                                                                    </dd>
                                                                </dl>
                                                            </li>
                                                            <li>
                                                                <dl>
                                                                    <dt>커뮤니티</dt>
                                                                    <dd>
                                                                        <ul>
                                                                            <li><label><input type="checkbox">앙쥬POLL</label></li>
                                                                            <li><label><input type="checkbox">육아 노하우</label></li>
                                                                            <li><label><input type="checkbox">레시피</label></li>
                                                                            <li><label><input type="checkbox">리빙/헬스</label></li>
                                                                            <li><label><input type="checkbox">아이 데리고 여기</label></li>
                                                                        </ul>
                                                                    </dd>
                                                                </dl>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </article>
                                
                                <div class="identification">
                                    <h5>회원정보에 등록된 휴대전화 번호와 일치해야, 인증번호를 받을 수 있습니다.</h5>
                                    <p>
                                        [인증하기]을 클릭하시면 본인 휴대폰으로 실명인증이 가능합니다.<br>
                                        일치하는 정보가 없을 시 인증메세지가 뜨지 않습니다.
                                    </p>
                                    <div class="confirm-btn">
                                        <a href="#" class="btn btn-white" role="button">휴대폰 인증하기</a>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="phone-confirm" class="form-control" placeholder="인증번호를 입력해주세요">
                                        <label for="phone-confirm" class="sr-only">휴대폰 인증번호</label>
                                        <div class="confirm-btn">
                                            <a href="#" class="btn btn-gray" role="button">인증번호 확인</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-area">
                                    <p>
                                        <button type="submit" class="btn btn-pink">다음</button>
                                        <a href="#" class="btn btn-white" role="button">취소</a>
                                    </p>
                                </div>
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