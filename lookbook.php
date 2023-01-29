<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lookbook</title>
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

        ?>

        <div class="list">


            <?php
            $sql = "SELECT * FROM data";
            $res = mysqli_query($conn, $sql);
            $i = 1;
            while ($row = mysqli_fetch_array($res)) {
                if ($i % 4 == 1) {
                    ?>

                    <ul class="list_ul">

                        <li class="list_li">

                            <a href="./lookbook_detail.php?idx=<?php echo $row['data_idx'] ?>">
                                <img src="./dataImg/<?php echo $row['folder_name'] ?>/nail.jpg" class="item_img">
                                <div class="white"></div>
                            </a>
                            <p>
                                <?php echo $row['data_name'] ?>
                            </p>
                        </li>


                    <?php } else if ($i % 4 == 0) {

                    ?>


                        


                        <li class="list_li">

                            <a href="./lookbook_detail.php?idx=<?php echo $row['data_idx'] ?>">
                                <img src="./dataImg/<?php echo $row['folder_name'] ?>/nail.jpg" class="item_img">
                                <div class="white"></div>
                            </a>
                            <p>
                            <?php echo $row['data_name'] ?>
                            </p>
                        </li>

                        </ul>

                    <?php


                } else {

                    ?>

                        <li class="list_li">

                            <a href="./lookbook_detail.php?idx=<?php echo $row['data_idx'] ?>">
                                <img src="./dataImg/<?php echo $row['folder_name'] ?>/nail.jpg" class="item_img">
                                <div class="white"></div>
                            </a>
                            <p>
                            <?php echo $row['data_name'] ?>
                            </p>
                        </li>


                    <?php


                }



                $i++;

            } ?>

        </div>
    </div>

    <?php include './footer.php'; ?>

</body>

</html>