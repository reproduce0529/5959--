<!DOCTYPE html>
<html lang="ko">
    <?php 
        include '../php/login_session.php';
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $conn = mysqli_connect('localhost', 'root', '1029', 'oh5959') or die('fail');

    $title = $_POST['title'];
    $upload_dir = '../file';
    $name = $_FILES['InputFile']['name'];
    $DATE = date("Y-M-d-h-m-s", time());
    $UserName = $_SESSION['username'];
    $URL = '../php/main.php';

    $result = move_uploaded_file( $_FILES['InputFile']['tmp_name'], "$upload_dir/$DATE.mp3");

    $stmt = $conn->prepare("INSERT INTO board (board_idx, board_titlte, writer_id, file_name, maketime) VALUES (null, ?, ?, ?, ?)");
    $stmt->bind_Param('ssss', $title, $UserName, $DATE, $DATE);
    $result = $stmt->execute();
    $stmt->close();

    if($result){
        echo "<script>alert('등록 완료')</script>";
        echo "<script>
            location.href = '".$URL."';
        </script>";
    }else{
        echo "<script>alert('등록 실패, 다시 시도해 주세요')</script>";
    }

    

    ?>
</body>
</html>