<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    // echo "<pre>";
    // var_dump($_SESSION);
    // echo "</pre>";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 블로그 만들기</title>
    <?php include "../include/head.php"?>
</head>


<body class="gray">
    <?php include "../include/skip.php" ?>
    <!-- skip -->

    <?php include "../include/header.php" ?>
    <!-- header -->

    <main id="main" role="main">
        <div class="intro_inner bmStyle container">
            <div class="intro_img">
                <img srcset="../assets/img/main.jpg, ../assets/img/main@2x.jpg, ../assets/img/main@3x.jpg" alt="">
            </div>
            <div class="intro_text">
                어떤 일이라도 노력하고 즐기면 그 결과는 빛을 바란다고 생각합니다.<br>
                십입의 열정과 도전정신을 깊숙히 새기며 배움에 있어 겸손함을<br>
                유지하며 세부적인 곳까지 파고드는 개발자가 되겠습니다.<br>
            </div>
        </div>
        
    </main>
<!-- //main -->
    
    <?php include "../include/footer.php" ?>
    <!-- footer -->
</body>
</html>