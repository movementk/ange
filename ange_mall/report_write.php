<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/ange_mall.css" rel="stylesheet">
</head>
<body class="sub ange_mall"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    <!-- Main Content -->
    <main id="content" class="report-write"><!-- 페이지명 클래스 -->
        <div class="container">
            <div class="sub-wrapper">
                <!-- 서브 lnb -->
                <?php require_once($_SERVER["DOCUMENT_ROOT"]."/ange_mall/_lnb.php"); ?>
                <!-- Content Start -->
                 <div class="sub-content">
                    <h2 class="sub-title">마일리지몰</h2>
                    <div class="table-wrap">
                       <form action="#">
                            <table class="table table-bordered type-1">
                                <tbody>
                                   <tr>
                                        <th>상품정보</th>
                                        <td>
                                            <figure>
                                                <img src="/assets/images/ange_mall/img_smallpdt.jpg" alt="">
                                                <figcaption>Botanical Therapy 스텝원 베이비 치약 (무불소, 블루베리향)</figcaption>
                                            </figure>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="u-name">제목</label></th>
                                        <td>
                                            <div class="form-group">
                                                <select class="form-control">
                                                    <option>구분</option>
                                                </select>
                                                <input type="text" id="u-name" class="form-control" placeholder="제목">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="u-blog">블로그 주소</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="u-blog" class="form-control" placeholder="Ex) http://blog.naver.com/myblog">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="v-top"><label for="u-content">내용</label></th>
                                        <td>
                                            <div class="form-group">
                                                <textarea id="u-content" class="form-control"></textarea>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>파일첨부</th>
                                        <td class="file">
                                            <div class="form-group">
                                                <input type="file" id="file" class="form-control">
                                                <label for="file" class="file-btn">찾아보기</label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="btn-area">
                                <p>
                                    <button type="submit" class="btn btn-pink">저장</button>
                                    <a href="#" class="btn btn-white" role="button">취소</a>
                                </p>
                            </div>
                        </form>
                    </div>
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