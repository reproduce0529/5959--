<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $connection = mysqli_connect("localhost", "root", "1029", "oh5959")or die("fail");
    $ID = $_POST['create_id'];
    $PW = $_POST['create_pw'];
    $NAME = $_POST['create_name'];
    $DATE = date("Y-m-d", time());

    $URL = '../php/main.php';

    $stmt = $connection->prepare("INSERT INTO user (user_idx, user_id, user_pw, user_name, user_maketime) VALUES (null, ?, ?, ?, ?)");
    $stmt->bind_Param('ssss', $ID, $PW, $NAME, $DATE);
    $result = $stmt->execute();
    $stmt->close();


    

if($result){
    ?>
<script>
    alert("회원가입 완료되었습니다!");
    alert("즐겁게 사용해주세요!");
    location.replace("<?php echo $URL?>");
</script>

<?php
    }else{
        echo $connection->error;
    }
    mysqli_close($connect);

?>
    <title>Document</title>
</head>
<body>
    
</body>
</html>