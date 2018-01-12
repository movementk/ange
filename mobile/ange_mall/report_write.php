<?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/dochead.php"); ?>
<link href="/mobile/assets/css/sub.css" rel="stylesheet">
<link href="/mobile/assets/css/ange_mall.css" rel="stylesheet">
</head>
<body class="sub ange_mall"><!-- 폴더별 클래스명 추가 -->
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/header.php"); ?>
    <!-- pgae-header -->
    <div class="page-header">
        <!-- 폴더별 타이틀 -->
        <h2>마일리지몰</h2>
        <div class="btn-controls">
            <a href="#" class="prev">
                <i class="icon-left-open-big">
                    <span class="sr-only">이전 페이지</span>
                </i>
            </a>
            <a href="/mobile/ange_mall/big_deal.php" class="next">
                <i class="icon-right-open-big">
                    <span class="sr-only">다음 페이지</span>
                </i>
            </a>
        </div>
    </div>
    
    <!-- sub content start -->
    <main id="content" class="report-write"><!-- 페이지명 클래스 -->
        <div class="container">
            <div class="table-wrap">
                <form action="#">
                    <table class="table table-bordered table-write type-1">
                        <tbody>
                            <tr>
                                <th class="v-top">상품정보</th>
                                <td>
                                    <figure>
                                        <img src="/mobile/assets/images/sub/img_product01.png" alt="">
                                    </figure>
                                    <figcaption>
                                        Botanical Therapy 스텝원 베이비치약(무불소, 블루베리향) 
                                    </figcaption>
                                </td>
                            </tr>
                            <tr>
                                <th class="v-top"><label for="subject">제목</label></th>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>구분</option>
                                        </select>
                                        <input type="text" id="subject" class="form-control">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="u-blog">블로그 주소</label></th>
                                <td>
                                    <div class="form-group">
                                        <input type="text" id="u-blog" class="form-control">
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
                                        <input type="file" id="attach" class="form-control">
                                        <label for="attach">찾아보기</label>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </main>
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/mobile/inc/docfoot.php"); ?>
    <script src="/mobile/assets/js/common.js"></script>
</body>
</html>