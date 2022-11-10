<!DOCTYPE html>
<?php
    include '../php/login_session.php';
?>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
    $connection = mysqli_connect("localhost", "root", "1029", "oh5959")or die("fail");
    $id = $_POST['login_id'];
    $pw = $_POST['login_pw'];
    $URL = "../php/main.php";
	$sql = "SELECT user_pw FROM user WHERE user_id ='".$id."';";
    $result = mysqli_query($connection, $sql);
    $sss = $result->fetch_array();

    if($sss[0] == null){
        echo '<script>
        alert("존재하지 않는 아이디입니다.");
        history.back();
        </script>';
    }else if($sss[0] == $pw){
        $_SESSION['username'] = $id;
        echo '<script>
        console.log()
        alert("로그인 완료되었습니다!");
        location.href="'.$URL.'";
        </script>';
    }else if($sss[0] != $pw){

        echo '<script>
        alert("비밀번호가 틀렸습니다.");
        history.back();
        </script>';
    }
    
    
    
    ?>
</head>
<body>
    
</body>
</html>