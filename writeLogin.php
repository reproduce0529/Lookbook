<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lookbook</title>
    <link rel="stylesheet" href="./main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<?php include './layout.php'; ?>


    <div class="mainBox">        
        <div class="headerBox">
                <div class="TitleHead"><h1>관리자 인증</h1></div>
                <div class="pathBox"><a href="https://tattood.cafe24.com/skin-skin10">홈</a> / <a href="http://lookbook.dothome.co.kr/writeLogin.php">관리자인증</a></div>
        </div>



       <form action="./WriteForm.php" method="post">

        <div class="mb-3 formInput">
            <label for="exampleFormControlInput1" class="form-label">인증코드</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="인증코드" name="code">
        </div>





        <button class="btn btn-outline-dark">인증하기</button>

       </form>


      
    </div>

    <?php include './footer.php'; ?>
</body>
</html>