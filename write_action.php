<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php


    $foldername = $_POST['folderName'];
    $lookbooktitle = $_POST['lookBookName'];
    $file = $_FILES['thumnail'];

    $cnt = sizeof($_FILES['imgFile']['name']);


    $db_host = "localhost";
    $db_user = "root";
    $db_passwd = "1029";
    $db_name = "lookbook";

    // DB 연결
    $conn = mysqli_connect($db_host, $db_user, $db_passwd, $db_name);


    if(!is_dir("./dataImg/".$foldername)){

        //폴더 생성
        mkdir("./dataImg/".$foldername, '777', true);
        //썸네일 이미지 등록
        $result = move_uploaded_file($file['tmp_name'], "./dataImg/".$foldername."/nail.jpg");

        for($i = 0; $i < $cnt; $i++){
            $result = move_uploaded_file($_FILES['imgFile']['tmp_name'][$i], "./dataImg/".$foldername."/".strval($i+1).".jpg");
        }



        $stmt  = $conn -> prepare("INSERT INTO data VALUES (null, ?, ?, ?)");
        $stmt -> bind_param("ssi", $lookbooktitle, $foldername, $cnt);
        $res = $stmt->execute();


        if($res){
            echo "<script>
                alert('등록 완료')
                location.href = './lookbook.php';
            </script>";
        }else{
            echo "<script>
            alert('등록 실패')
            location.href = './WriteForm.php';
            </script>";
        }


        
      
      }else{
        echo "<script>alert('폴더 이미 존재함')
        location.href = './WriteForm.php';
        </script>";
      }

    ?>




</body>

</html>