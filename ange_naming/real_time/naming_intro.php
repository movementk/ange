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
                    <section class="naming-intro"><!-- 페이지명 클래스 -->
                        <div class="section-header">
                            <h2 class="sub-title">네이밍 서비스 안내 </h2>
                        </div>
                        <div class="section-content">
                            <ul>
                                <li>
                                    <div class="item">
                                        <figure>
                                            <img src="/assets/images/ange_naming/naming01.png" alt="">
                                        </figure>
                                    </div>
                                    <div class="details">
                                        <h3>실시간 작명</h3>
                                        <i>Real-time Naming</i>
                                        <p>
                                            10년간 수집된 좋은 이름중에서 모든 성명학 이론을 포함하여<br>
                                            사주를 고려한 대한민국 최고의 실시간 작명 시스템
                                        </p>
                                        <div class="btn-area">
                                            <p>
                                                <a href="#" class="btn btn-sm btn-white">자세히 보기</a>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item">
                                        <figure>
                                            <img src="/assets/images/ange_naming/naming02.png" alt="">
                                        </figure>
                                    </div>
                                    <div class="details">
                                        <h3>셀프 작명</h3>
                                        <i>Self Naming</i>
                                        <p>
                                            신세대 부모를 위한 정말 쉬운 아기 이름 짓기!<br>
                                            전문가 못지 않은 좋은 이름을 손쉽게 따라가며 지을 수 있습니다.
                                        </p>
                                        <div class="btn-area">
                                            <p>
                                                <a href="#" class="btn btn-sm btn-white">자세히 보기</a>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item">
                                        <figure>
                                            <img src="/assets/images/ange_naming/naming03.png" alt="">
                                        </figure>
                                    </div>
                                    <div class="details">
                                        <h3>스페셜 작명</h3>
                                        <i>Special Naming</i>
                                        <p>
                                            사주에 맞는 작명을 원하신다면 작명가 선생님이 직접 아기 이름을<br> 지어드립니다. 원하는 이름을 선택하면 작명증서를 보내드립니다. 
                                        </p>
                                        <div class="btn-area">
                                            <p>
                                                <a href="#" class="btn btn-sm btn-white">자세히 보기</a>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
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