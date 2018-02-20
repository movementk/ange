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
                    <section class="application-view"><!-- 페이지명 클래스 -->
                        <div class="section-header">
                            <h2 class="sub-title">스페셜 작명</h2>
                        </div>
                        <div class="section-content">
                            <article class="offeror-info">
                                <div class="article-header">
                                    <h3 class="naming-title">신청인 정보</h3>
                                </div>
                                <div class="article-content">
                                    <div class="table-wrap">
                                        <table class="table table-bordered type-1">
                                            <tbody>
                                                <tr>
                                                    <th>신청인</th>
                                                    <td>채옥성(Chae1114)</td>
                                                </tr>
                                                <tr>
                                                    <th>주소</th>
                                                    <td>- 서울 송파구 위례광장로 170 (장지동, 힐스테이트송파위례) 102-2603</td>
                                                </tr>
                                                <tr>
                                                    <th>전화번호(자택)</th>
                                                    <td>07050052810</td>
                                                </tr>
                                                <tr>
                                                    <th>전화번호(휴대폰)</th>
                                                    <td>01000000000</td>
                                                </tr>
                                                <tr>
                                                    <th>E-mail</th>
                                                    <td>angeweb@ange.co.kr</td>
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
                                    <form action="#">
                                         <div class="table-wrap">
                                            <table class="table table-bordered type-1">
                                                <tbody>
                                                    <tr>
                                                        <th>성별</th>
                                                        <td>여</td>
                                                    </tr>
                                                    <tr>
                                                        <th>생년월일</th>
                                                        <td>2017년 12월 4일 15시 34분 (양력 / 평달)</td>
                                                    </tr>
                                                    <tr>
                                                        <th>출생지</th>
                                                        <td>서울</td>
                                                    </tr>
                                                    <tr>
                                                        <th>성(姓)씨</th>
                                                        <td>丁</td>
                                                    </tr>
                                                    <tr>
                                                        <th>형제서열</th>
                                                        <td>2녀중 차녀</td>
                                                    </tr>
                                                    <tr>
                                                        <th>돌림자</th>
                                                        <td>사용안함</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="v-top">부모성명</th>
                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <div class="parent-name">
                                                                        <dl>
                                                                            <dt>부</dt>
                                                                            <dd>정철도</dd>
                                                                        </dl>
                                                                    </div>
                                                                    <div class="parent-details">
                                                                        <p>1982년 9월 7일 20시 30분 (음력</p>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="parent-name">
                                                                        <dl>
                                                                            <dt>모</dt>
                                                                            <dd>채옥성</dd>
                                                                        </dl>
                                                                    </div>
                                                                    <div class="parent-details">
                                                                        <p>1983년 11월 14일 1시 0분 (양력)</p>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>형제성명</th>
                                                        <td>정주영</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="v-top">하고싶은말</th>
                                                        <td>ㅇ</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="v-top">작명가 알림</th>
                                                        <td>ㅇ</td>
                                                    </tr>
                                                    <tr>
                                                        <th>선택한이름</th>
                                                        <td>ㅇ</td>
                                                    </tr>
                                                    <tr>
                                                        <th>추천이름(3개)</th>
                                                        <td class="recommend-name">
                                                            <div class="form-group">
                                                                <label for="recommend01" class="sr-only"></label>
                                                                <input type="text" id="recommend01" class="form-control">
                                                                <label for="recommend02" class="sr-only"></label>
                                                                <input type="text" id="recommend02" class="form-control">
                                                                <label for="recommend03" class="sr-only"></label>
                                                                <input type="text" id="recommend03" class="form-control">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class="v-top">추천서1</th>
                                                        <td class="file">
                                                            <p class="attention">업로드시 가급적 파일이름을 한글이름이 아닌 영문이나 숫자로 업로드해주세요.</p>
                                                            <div class="form-group">
                                                                <input type="file" id="u-file01" class="form-control">
                                                                <label for="u-file01" class="file-btn">파일선택</label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>추천서2</th>
                                                        <td class="file">
                                                            <div class="form-group">
                                                                <input type="file" id="u-file02" class="form-control">
                                                                <label for="u-file02" class="file-btn">파일선택</label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="explain">
                                                <img src="" alt="이미지" class="img-reponsive">
                                            </div>
                                            <div class="btn-area">
                                                <p>
                                                    <button type="submit" class="btn btn-sm btn-pink">저장하기</button>
                                                    <a href="#" class="btn btn-sm btn-white" role="button">목록보기</a>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </article>
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
    <script src="/assets/js/sub_popup.js"></script>
</body>
</html>