<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/dochead.php"); ?>
<link href="/mobile/assets/css/sub.css" rel="stylesheet">
<link href="/mobile/assets/css/customer.css" rel="stylesheet">
</head>
<body class="sub customer"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/header.php"); ?>
    <!-- sub content start -->
    <main id="content" class="join"><!-- 페이지명 클래스 -->
        <div class="container">
            <section class="join-write">
                <div class="section-header">
                    <h3 class="section-title">회원가입</h3>
                    <ol class="step-list">
                        <li class="active">
                            <div>
                                <p class="icon-img">
                                    <img src="/mobile/assets/images/sub/icon_step01_active.png" alt="step01">
                                </p>
                                약관동의
                            </div>
                        </li>
                        <li>
                            <div>
                                <p class="icon-img">
                                    <img src="/mobile/assets/images/sub/icon_step02.png" alt="step02">
                                </p>
                                회원정보입력
                            </div>
                        </li>
                        <li>
                            <div>
                                <p class="icon-img">
                                    <img src="/mobile/assets/images/sub/icon_step03.png" alt="step03">
                                </p>
                                가입완료
                            </div>
                        </li>
                    </ol>
                </div>
                <div class="section-content">
                    <form action="#">
                        <article class="join-form">
                            <div class="table-wrap">
                                <table class="table table-bordered type-1">
                                    <tbody>
                                        <tr>
                                            <th class="essential"><label for="u-id">아이디</label></th>
                                            <td class="overlap-confirm">
                                                <div class="form-group">
                                                    <input type="text" id="u-id" class="form-control">
                                                    <div class="btn-overlap-confirm">
                                                        <a href="#" class="btn btn-default" role="button">중복확인</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="essential"><label for="u-pw">비밀번호</label></th>
                                            <td class="overlap-confirm">
                                                <div class="form-group">
                                                    <input type="password" id="u-pw" class="form-control">
                                                    <div class="btn-overlap-confirm">
                                                        <a href="#" class="btn btn-default" role="button">중복확인</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="pw-find">비밀번호 확인</label></th>
                                            <td class="overlap-confirm">
                                                <div class="form-group">
                                                    <input type="password" id="pw-find" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="essential"><label for="u-name">이름</label></th>
                                            <td class="overlap-confirm">
                                                <div class="form-group">
                                                    <input type="text" id="u-name" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="essential"><label for="u-nickname">닉네임</label></th>
                                            <td class="overlap-confirm">
                                                <div class="form-group">
                                                    <input type="text" id="u-nickname" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="essential"><label for="u-birthday">생년월일</label></th>
                                            <td class="birthday">
                                                <div class="form-group">
                                                    <select class="form-control">
                                                        <option>양력</option>
                                                    </select>
                                                    <input type="text" id="u-birthday" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="essential"><label for=""></label></th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" id="" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="essential"><label for=""></label></th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" id="" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="essential"><label for=""></label></th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" id="" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="essential"><label for=""></label></th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" id="" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="essential"><label for=""></label></th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" id="" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="essential"><label for=""></label></th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" id="" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="essential"><label for=""></label></th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" id="" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="essential"><label for=""></label></th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" id="" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="essential"><label for=""></label></th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" id="" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="essential"><label for=""></label></th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" id="" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </article>
                    </form>
                </div>
            </section>
        </div>
    </main>
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/docfoot.php"); ?>
    <script src="/mobile/assets/js/common.js"></script>
</body>
</html>