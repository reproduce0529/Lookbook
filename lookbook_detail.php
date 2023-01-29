<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detail</title>
    <link rel="stylesheet" href="./main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Castoro:ital@0;1&display=swap" rel="stylesheet">
</head>

<body>

    <?php include './layout.php'; ?>


    <div class="mainBox">
        <div class="headerBox">
            <div class="TitleHead">
                <h1>LOOKBOOK</h1>
            </div>
            <div class="pathBox"><a href="https://tattood.cafe24.com/skin-skin10">홈</a> / <a
                    href="http://lookbook.dothome.co.kr/lookbook.php">LOOKBOOK</a></div>
        </div>


        <?php

        $db_host = "localhost";
        $db_user = "root";
        $db_passwd = "1029";
        $db_name = "lookbook";

        // DB 연결
        $conn = mysqli_connect($db_host, $db_user, $db_passwd, $db_name);

        $idx = (int) $_GET['idx'];
        $sql = "SELECT * FROM data WHERE data_idx = '" . $idx . "'";

        $res = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($res);

        ?>


        <div class="list">

            <div class="TitleHead"><?php echo $row['data_name'] ?></div>



            <?php
           

            for ($i = 1; $i <= $row['data_img_num']; $i++) {
                ?>


                <img src="./dataImg/<?php echo $row['folder_name'] ?>/<?php echo $i ?>.jpg" class="detail_img">


            <?php } ?>

                <a href="./lookbook.php" class="GoToButton">LIST</a>

        </div>
    </div>

    <?php include './footer.php'; ?>

</body>

</html>