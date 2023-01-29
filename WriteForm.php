<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lookbook</title>
    <link rel="stylesheet" href="./main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <?php



    function printByAlert($string)
    {
        echo "<script>
            alert('" . $string . "')
            history.back();
            </script>";
    }

    $code = $_POST['code'];



    if ($code != 'KbSFtuHF6LnxPpt') {
        printByAlert("인증에 실패하였습니다. 다시 시도해주세요");
    } else {
        ?>

        <?php include './layout.php'; ?>


        <div class="mainBox">
            <div class="headerBox">
                <div class="TitleHead">
                    <h1>룩북 작성</h1>
                </div>
            </div>



            <form action="./write_action.php" method="post" enctype="multipart/form-data" autocomplete="off" id="form"> 


                <div class="mb-3 formInput">
                    <label for="exampleFormControlInput1" class="form-label">룩북 제목</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="룩북 제목"
                        name="lookBookName">
                </div>

                <div class="mb-3 formInput">
                    <label for="exampleFormControlInput2" class="form-label">이미지 폴더 이름</label>
                    <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="폴더 이름"
                        name="folderName">
                </div>

                <div class="mb-3">
                    <label for="formFile1" class="form-label">썸네일 사진</label>
                    <input class="form-control" type="file" id="formFile1" name="thumnail">
                </div>



                <div class="mb-3">
                    <label for="formFile" class="form-label">이미지파일</label>
                    <input class="form-control" type="file" id="formFile" name="imgFile[]" multiple>
                </div>





                <button class="btn btn-outline-dark" type="button" onclick="checkAll()">작성하기</button>

            </form>



        </div>

    <?php } ?>

    <?php include './footer.php'; ?>
</body>
<script>

    function checkAll() {
        let exampleFormControlInput1 = document.getElementById("exampleFormControlInput1");
        let exampleFormControlInput2 = document.getElementById("exampleFormControlInput2");
        let formFile1 = document.getElementById("formFile1");
        let formFile = document.getElementById("formFile");


        if (exampleFormControlInput1.value.trim().length > 0) {

            if (exampleFormControlInput2.value.trim().length > 0) {

                if (formFile1.value.trim().length > 0) {


                    if (formFile.value.trim().length > 0) {

                        document.getElementById("form").submit();


                    } else {
                        alert("이미지파일을 선택해주세요")
                    }

                } else {
                    alert("썸네일 사진을 선택해주세요")
                }


            } else {
                alert("이미지 폴더 이름을 입력해주세요")
                exampleFormControlInput2.focus()
            }


        } else {
            alert("룩북 제목을 입력해주세요")
            exampleFormControlInput1.focus()
        }
    }


</script>

</html>