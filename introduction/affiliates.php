<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/introduction.css" rel="stylesheet">
</head>
<body class="sub introduction"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- Main Content -->
    <main id="content"><!-- 페이지명 클래스 -->
        <div class="container">
            <div class="sub-wrapper">
                <!-- 서브 lnb -->
                <?php require_once($_SERVER["DOCUMENT_ROOT"]."/introduction/_lnb.php"); ?>
                <!-- Content Start -->
                <div class="sub-content">
                    <section class="affiliates">
                        <div class="section-header">
                            <h2 class="sub-title">광고문의</h2>
                        </div>
                        <div class="section-content">
                            <h4 class="title">제휴&amp;광고문의신청</h4>
                            <p class="essential">필수 작성 항목입니다</p>
                            <form action="#">
                                <div class="table-wrap">
                                    <table class="table table-bordered type-1">
                                        <tbody>
                                            <tr>
                                                <th class="essential">구분</th>
                                                <td class="separation">
                                                    <div class="form-group">
                                                        <select class="form-control">
                                                            <option>월간 앙쥬(잡지) 광고 문의</option>
                                                            <option>온라인 광고 및 제휴 문의</option>
                                                            <option>체험단 및 이벤트/공동구매 문의</option>
                                                            <option>스토어 판매 관련 문의</option>
                                                        </select>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="essential"><label for="u-company">기업명</label></th>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" id="u-company" class="form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="essential"><label for="u-responsibility">담당자명</label></th>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" id="u-responsibility" class="form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="essential"><label for="u-homepage">홈페이지</label></th>
                                                <td class="homepage">
                                                    <div class="form-group">
                                                        <input type="text" id="u-homepage" class="form-control" placeholder="http://ange.co.kr">
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
                                                <th>유선전화</th>
                                                <td class="contact">
                                                    <div class="form-group">
                                                        <select class="form-control">
                                                            <option>02</option>
                                                            <option>031</option>
                                                        </select>
                                                         -
                                                        <input type="text" id="u-tel2" class="form-control"> -
                                                        <label for="u-tel2" class="sr-only">전화번호</label>
                                                        <input type="text" id="u-tel3" class="form-control">
                                                        <label for="u-tel3" class="sr-only">전화번호</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="essential">휴대폰</th>
                                                <td class="contact">
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
                                                <th class="essential v-top"><label for="u-note">내용</label></th>
                                                <td>
                                                    <div class="form-group">
                                                        <textarea id="u-note" class="form-control"></textarea>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="essential">제휴제안서</th>
                                                <td class="file">
                                                    <div class="form-group">
                                                        <input type="file" id="attach" class="form-control">
                                                        <label for="attach">파일첨부</label>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="privacy">
                                    <h5>&lt;개인정보 취급방침 동의&gt; <a href="#">개인정보취급방침</a></h5>
                                    <ul>
                                        <li>수집 항목 : (필수)회사명, 이름, 이메일, 휴대폰번호(선택)홈페이지주소,전화번호</li>
                                        <li>수집 목적 : 제휴 및 광고 업체 회신</li>
                                        <li>보유 기간 : 업무 종료일까지</li>
                                    </ul>
                                    <div class="form-group">
                                        <label><input type="checkbox"> 개인정보 취급방침에 동의합니다.</label>
                                    </div>
                                </div>
                                <div class="btn-area">
									<p>
										<a href="#" class="btn btn-white" role="button">취소</a>
										<button type="submit" class="btn btn-pink">문의</button>
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