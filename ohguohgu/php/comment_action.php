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
</head>
<body>
<?php 
    if($jb_login == FALSE){
        
        echo "<script>
        alert('로그인하세요');
        history.back();
        
        </script>";
    }else{
        $name = $_SESSION['username'];
        $text = $_POST['comment'];
        $id = $_GET['num'];
        $URL = '../php/comment.php?num='.$id;
        $DATE = date("Y-M-d-h-m-s", time());
        $conn = mysqli_connect("localhost", "root", "1029", "oh5959") or die('fail');
        $stmt = $conn->prepare("INSERT INTO comment (comment_idx, username, content, board_idx, write_time) VALUES (null, ?, ?, ?, ?)");
        $stmt->bind_Param('ssss', $name, $text, $id, $DATE);
        $result = $stmt->execute();
        $stmt->close();
        echo "<script>
        
        history.back();
        
        </script>";

    }
    
    
    
    
    ?>
</body>
</html>